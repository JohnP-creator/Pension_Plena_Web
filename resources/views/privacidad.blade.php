@extends('layouts.app')

@section('title', 'Aviso de Privacidad — Pensión Plena')

@section('content')

<header class="bg-white border-b border-gray-100 py-4">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
        <a href="{{ url('/') }}" class="flex items-center gap-3" aria-label="Volver al inicio">
            <img src="{{ asset('images/logo.svg') }}" alt="Pensión Plena" class="h-9 w-auto" onerror="this.onerror=null; this.src='{{ asset('images/logo.png') }}'">
        </a>
        <a href="{{ url('/') }}" class="text-sm text-[#135C47] hover:underline">← Volver al inicio</a>
    </div>
</header>

<main class="max-w-3xl mx-auto px-4 sm:px-6 py-16">
    <h1 class="font-display text-3xl sm:text-4xl font-semibold text-[#0F2820] mb-3">Aviso de Privacidad</h1>
    <p class="text-sm text-[#4A6358] mb-8">Última actualización: {{ date('d \d\e F \d\e Y', mktime(0,0,0,date('m'),1,date('Y'))) }}</p>

    <div class="prose prose-lg max-w-none text-[#4A6358] space-y-6 leading-relaxed">

        <p><strong class="text-[#0F2820]">Pensión Plena</strong>, con domicilio en Lagos de Moreno, Jalisco, México <em class="text-[#C09E45] not-italic text-sm">[dirección pendiente]</em>, es responsable del tratamiento de los datos personales que nos proporcionas.</p>

        <h2 class="font-display text-xl font-semibold text-[#0F2820]">¿Qué datos recabamos?</h2>
        <ul class="list-disc pl-5 space-y-1">
            <li>Nombre completo</li>
            <li>Número de teléfono o correo electrónico</li>
            <li>Información sobre tu situación de pensión que compartas voluntariamente</li>
        </ul>

        <h2 class="font-display text-xl font-semibold text-[#0F2820]">¿Para qué usamos tus datos?</h2>
        <p>Tus datos se utilizan exclusivamente para:</p>
        <ul class="list-disc pl-5 space-y-1">
            <li>Contactarte en respuesta a tu solicitud de orientación</li>
            <li>Brindarte información sobre nuestros servicios</li>
            <li>Dar seguimiento a tu caso de manera personalizada</li>
        </ul>

        <h2 class="font-display text-xl font-semibold text-[#0F2820]">¿Compartimos tu información?</h2>
        <p>No vendemos, cedemos ni transferimos tus datos personales a terceros, salvo que sea requerido por autoridad competente conforme a la ley.</p>

        <h2 class="font-display text-xl font-semibold text-[#0F2820]">Tus derechos ARCO</h2>
        <p>Tienes derecho a Acceder, Rectificar, Cancelar u Oponerte al tratamiento de tus datos personales. Para ejercerlos, contáctanos en: <a href="mailto:contacto@pensionplena.com.mx" class="text-[#135C47] font-medium">contacto@pensionplena.com.mx</a>.</p>

        <h2 class="font-display text-xl font-semibold text-[#0F2820]">Cambios a este aviso</h2>
        <p>Podemos actualizar este aviso. Cualquier cambio se publicará en esta misma página.</p>

    </div>
</main>

<footer class="border-t border-gray-100 py-6 text-center">
    <p class="text-xs text-[#4A6358]">&copy; {{ date('Y') }} Pensión Plena · Lagos de Moreno, Jalisco</p>
</footer>

@endsection
