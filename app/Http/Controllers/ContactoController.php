<?php

namespace App\Http\Controllers;

use App\Mail\ContactoConfirmacion;
use App\Mail\ContactoMensaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function enviar(Request $request)
    {
        $data = $request->validate([
            'nombre'   => ['required', 'string', 'max:120'],
            'contacto' => ['required', 'string', 'max:120'],
            'tema'     => ['nullable', 'string', 'max:60'],
            'mensaje'  => ['required', 'string', 'max:2000'],
        ]);

        Mail::to(config('mail.contact_address'))->send(new ContactoMensaje(
            nombre:   $data['nombre'],
            contacto: $data['contacto'],
            tema:     $data['tema'] ?? '',
            mensaje:  $data['mensaje'],
        ));

        // The confirmation is a courtesy: a failure here must not hide that the request was received.
        if (filter_var($data['contacto'], FILTER_VALIDATE_EMAIL)) {
            try {
                Mail::to($data['contacto'])->send(new ContactoConfirmacion($data['nombre'], $data['tema'] ?? ''));
            } catch (\Throwable $e) {
                report($e);
            }
        }

        return response()->json(['ok' => true]);
    }
}
