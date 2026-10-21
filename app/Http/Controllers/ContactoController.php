<?php

namespace App\Http\Controllers;

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

        Mail::to(env('CONTACT_EMAIL'))->send(new ContactoMensaje(
            nombre:   $data['nombre'],
            contacto: $data['contacto'],
            tema:     $data['tema'] ?? 'No especificado',
            mensaje:  $data['mensaje'],
        ));

        return response()->json(['ok' => true]);
    }
}
