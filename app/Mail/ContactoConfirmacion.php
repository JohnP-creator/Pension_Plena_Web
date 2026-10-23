<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactoConfirmacion extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $nombre,
        public string $tema,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Recibimos tu solicitud — Pensión Plena',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.confirmacion',
            with: [
                'primerNombre' => strtok(trim($this->nombre), ' ') ?: $this->nombre,
                'temaTexto'    => ContactoMensaje::TEMAS[$this->tema] ?? null,
            ],
        );
    }
}
