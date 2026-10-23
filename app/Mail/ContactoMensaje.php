<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactoMensaje extends Mailable
{
    use Queueable, SerializesModels;

    public const TEMAS = [
        'imss'       => 'Pensión IMSS',
        'expediente' => 'Revisión de expediente',
        'planeacion' => 'Planeación de retiro',
        'otro'       => 'Otro',
    ];

    public function __construct(
        public string $nombre,
        public string $contacto,
        public string $tema,
        public string $mensaje,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "Nueva solicitud de orientación — {$this->nombre}",
            replyTo: $this->esCorreo() ? [new Address($this->contacto, $this->nombre)] : [],
        );
    }

    public function content(): Content
    {
        $digitos = preg_replace('/\D+/', '', $this->contacto);

        return new Content(
            view: 'emails.contacto',
            with: [
                'temaTexto' => self::TEMAS[$this->tema] ?? 'No especificado',
                'esCorreo'  => $this->esCorreo(),
                'telefono'  => strlen($digitos) >= 10 ? substr($digitos, -10) : null,
                'fecha'     => now('America/Mexico_City')->locale('es')->isoFormat('dddd D [de] MMMM [de] YYYY, h:mm a'),
            ],
        );
    }

    private function esCorreo(): bool
    {
        return filter_var($this->contacto, FILTER_VALIDATE_EMAIL) !== false;
    }
}
