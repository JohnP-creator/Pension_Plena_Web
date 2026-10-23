@extends('layouts.app')
@section('title', 'Pensión Plena — Asesoría de Pensiones en Lagos de Moreno')
@section('content')

{{-- ══ NAV ══════════════════════════════════════════════════ --}}
<header id="site-nav" class="nav">
  <a href="{{ url('/') }}" class="nav-logo">
    <div class="nav-isotipo" aria-hidden="true">
      <img src="{{ asset('images/logo.svg') }}" alt=""
        onerror="this.src='{{ asset('images/logo.png') }}'">
    </div>
    <div class="nav-logo-wordmark">
      <span class="nav-logo-name">Pensión <span class="logo-accent">Plena</span></span>
      <span class="nav-logo-tagline">Asesoría de Pensiones</span>
    </div>
  </a>

  <ul class="nav-links">
    <li><a href="#servicios">Servicios</a></li>
    <li><a href="#proceso">Proceso</a></li>
    <li><a href="#preguntas">Preguntas</a></li>
    <li><a href="#contacto">Contacto</a></li>
  </ul>

  <div class="nav-actions">
    <a href="#contacto" class="btn btn-white">Agendar cita</a>
  </div>

  <button id="nav-toggle" class="nav-hamburger" aria-expanded="false" aria-label="Abrir menú">
    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
      <line x1="2" y1="6" x2="20" y2="6" />
      <line x1="2" y1="11" x2="20" y2="11" />
      <line x1="2" y1="16" x2="20" y2="16" />
    </svg>
  </button>
</header>

<nav id="mobile-drawer" class="drawer">
  <button id="drawer-close" class="drawer-close" aria-label="Cerrar menú">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
      <path d="M6 18L18 6M6 6l12 12" />
    </svg>
  </button>
  <a href="#servicios">Servicios</a>
  <a href="#proceso">Proceso</a>
  <a href="#preguntas">Preguntas</a>
  <a href="#contacto">Contacto</a>
  <a href="#contacto" class="btn btn-white" style="margin-top:1.5rem;justify-content:center">Agendar cita</a>
</nav>


{{-- ══ HERO ═════════════════════════════════════════════════ --}}
<section class="hero">
  <div class="hero-inner">
    <div id="hero-text" class="hero-text">
      <span class="pill pill-white">Lagos de Moreno · Jalisco</span>
      <h1 class="hero-h1">
        Entiende tu pensión.<br>
        Decide con <span>certeza.</span>
      </h1>
      <p class="hero-sub">
        Orientación personalizada sobre pensiones del IMSS para que sepas exactamente cuánto te corresponde y como puedes maximizar tu pensión.
      </p>
      <div class="hero-actions">
        <a href="#contacto" class="btn btn-white btn-lg">Solicitar orientación</a>
        <a href="#servicios" class="btn btn-ghost-white btn-lg">Ver servicios</a>
      </div>
      <div class="hero-stats">
        <div>
          <div class="hero-stat-val">IMSS</div>
          <div class="hero-stat-label">Especialistas en pensiones</div>
        </div>
        <div>
          <div class="hero-stat-val">Modalidad 40</div>
          <div class="hero-stat-label"></div>
        </div>
        <div>
          <div class="hero-stat-val">Trabajadores Independientes</div>
          <div class="hero-stat-label"></div>
        </div>
      </div>
    </div>

    <div class="hero-aside">
    <a href="tel:+524741480377" class="hero-phone" aria-label="Llámanos al 474 148 0377">
      <span class="hero-phone-icon" aria-hidden="true">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
      </span>
      <span>
        <span class="hero-phone-label">¿Tienes dudas? Llámanos</span>
        <span class="hero-phone-num">474 148 0377</span>
      </span>
    </a>

    <figure id="hero-card" class="hero-photo">
      <a class="hero-photo-link"
        href="https://www.google.com/maps/search/?api=1&amp;query=Ignacio+L%C3%B3pez+Ray%C3%B3n+891%2C+El+Refugio%2C+47470+Lagos+de+Moreno%2C+Jal."
        target="_blank" rel="noopener"
        aria-label="Ver la ubicación de Pensión Plena en Google Maps (se abre en una pestaña nueva)">
        <img src="{{ asset('images/oficina.jpg') }}"
          alt="Oficina de Pensión Plena en Ignacio López Rayón 891, Lagos de Moreno"
          class="hero-photo-img">
        <span class="hero-photo-badge">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
            <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0zM19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
          </svg>
          <span class="hero-photo-addr">Ignacio López Rayón 891 · Lagos de Moreno</span>
          <span class="hero-photo-go">Cómo llegar
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 17L17 7M9 7h8v8"/></svg>
          </span>
        </span>
      </a>
    </figure>
    </div>
  </div>
</section>


{{-- ══ TRUST STRIP ══════════════════════════════════════════ --}}
<div class="trust-strip" data-reveal-block>
  <div class="trust-inner">
    <div class="trust-item reveal">
      <div class="trust-dot"></div>Atención transparente y sin compromisos
    </div>
    <div class="trust-item reveal">
      <div class="trust-dot"></div>Orientación presencial en Lagos de Moreno
    </div>
    <div class="trust-item reveal">
      <div class="trust-dot"></div>Atención personalizada, sin fórmulas genéricas
    </div>
  </div>
</div>
</div>


{{-- ══ STATS ═══════════════════════════════════════════════ --}}
<section class="section" style="background:var(--green);padding:3.5rem 5%">
  <div class="section-inner" data-reveal-block>
    <div class="stats-grid">
      <div class="reveal" style="padding:1.5rem 1rem;background:rgba(255,255,255,.06);border-radius:var(--r);border:1px solid rgba(255,255,255,.1)">
        <div style="font-family:'Outfit',sans-serif;font-size:clamp(2.25rem,4.5vw,3.5rem);font-weight:800;color:#fff;line-height:1;letter-spacing:-.04em">30</div>
        <div style="font-size:.875rem;font-weight:500;color:rgba(255,255,255,.65);margin-top:.5rem;line-height:1.4">Años de experiencia en pensiones IMSS</div>
      </div>
      <div class="reveal" style="padding:1.5rem 1rem;background:rgba(255,255,255,.06);border-radius:var(--r);border:1px solid rgba(255,255,255,.1)">
        <div style="font-family:'Outfit',sans-serif;font-size:clamp(2.25rem,4.5vw,3.5rem);font-weight:800;color:var(--gold);line-height:1;letter-spacing:-.04em">850</div>
        <div style="font-size:.875rem;font-weight:500;color:rgba(255,255,255,.65);margin-top:.5rem;line-height:1.4">Casos de éxito en pensiones</div>
      </div>
      <div class="reveal" style="padding:1.5rem 1rem;background:rgba(255,255,255,.06);border-radius:var(--r);border:1px solid rgba(255,255,255,.1)">
        <div style="font-family:'Outfit',sans-serif;font-size:clamp(2.25rem,4.5vw,3.5rem);font-weight:800;color:#fff;line-height:1;letter-spacing:-.04em">100%</div>
        <div style="font-size:.875rem;font-weight:500;color:rgba(255,255,255,.65);margin-top:.5rem;line-height:1.4">Orientación honesta y sin compromisos</div>
      </div>
      <div class="reveal" style="padding:1.5rem 1rem;background:rgba(192,158,69,.15);border-radius:var(--r);border:1px solid rgba(192,158,69,.3)">
        <div style="font-family:'Outfit',sans-serif;font-size:clamp(1.75rem,3.5vw,2.75rem);font-weight:800;color:var(--gold);line-height:1;letter-spacing:-.03em">Lagos</div>
        <div style="font-size:.875rem;font-weight:500;color:rgba(255,255,255,.65);margin-top:.5rem;line-height:1.4">de Moreno, Jalisco — atención presencial</div>
      </div>
    </div>
  </div>
</section>


{{-- ══ PROBLEMA ════════════════════════════════════════════ --}}
<section class="section" style="background:var(--bg-alt)" aria-labelledby="prob-h2">
  <div class="section-inner">
    <div class="section-head" data-reveal-block>
      <span class="pill reveal">El problema</span>
      <h2 id="prob-h2" class="reveal">La mayoría se jubila con menos de lo que le corresponde</h2>
      <p class="reveal">No es falta de derechos — es falta de información y estrategia para actuar a tiempo.</p>
    </div>

    <div class="problem-grid" data-reveal-block>
      <div class="problem-card reveal">
        <p class="problem-num" aria-hidden="true">01</p>
        <h3>No conocen su historial real</h3>
        <p>Muchos trabajadores desconocen cuántas semanas tienen cotizadas, si hay inconsistencias o si pueden recuperar períodos no registrados.</p>
      </div>
      <div class="problem-card reveal">
        <p class="problem-num" aria-hidden="true">02</p>
        <h3>No saben qué ley les aplica</h3>
        <p>La diferencia entre Ley 73 y Ley 97 puede significar una pensión considerablemente mayor o menor, pero pocos saben cómo elegir la opción correcta.</p>
      </div>
      <div class="problem-card reveal">
        <p class="problem-num" aria-hidden="true">03</p>
        <h3>Inician el trámite sin prepararse</h3>
        <p>Sin orientación previa, los errores en el expediente o la elección incorrecta del momento pueden reducir la pensión de forma permanente.</p>
      </div>
      <div class="problem-card reveal">
        <p class="problem-num" aria-hidden="true">04</p>
        <h3>Confían en lo que "les dijeron"</h3>
        <p>Se basan en experiencias de compañeros o consejos de familiares que no aplican a su situación. Cada caso tiene reglas distintas según historial, edad y régimen.</p>
      </div>
      <div class="problem-card reveal">
        <p class="problem-num" aria-hidden="true">05</p>
        <h3>Desconocen sus opciones de retiro</h3>
        <p>Pensión vitalicia, retiro programado, rentas vitalicias… pocas personas conocen las modalidades disponibles ni cómo elegir la más conveniente para ellas.</p>
      </div>
      <div class="problem-card reveal">
        <p class="problem-num" aria-hidden="true">06</p>
        <h3>Esperan sin actuar a tiempo</h3>
        <p>Muchas estrategias para mejorar la pensión requieren años de anticipación. Llegar al trámite sin haberse preparado puede cerrar opciones que ya no se pueden recuperar.</p>
      </div>
    </div>
  </div>
</section>


{{-- ══ SERVICIOS ═══════════════════════════════════════════ --}}
<section id="servicios" class="section" style="background:var(--bg)" aria-labelledby="serv-h2">
  <div class="section-inner">
    <div class="section-head" data-reveal-block>
      <span class="pill reveal">Nuestra solución</span>
      <h2 id="serv-h2" class="reveal">Orientación específica para tu caso</h2>
      <p class="reveal">Analizamos tu situación con detalle para que tomes decisiones informadas y sin sorpresas.</p>
    </div>

    <div class="services-grid" data-reveal-block>
      @php
      $servicios = [
      ['icon'=>'M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2M9 7a4 4 0 100 8 4 4 0 000-8zM22 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75',
      't'=>'Orientación IMSS','d'=>'Revisamos tu historial de cotización y te explicamos la diferencia entre Ley 73 y Ley 97 y cuál te conviene en tu caso específico.'],
      ['icon'=>'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
      't'=>'Revisión de expediente','d'=>'Identificamos inconsistencias, semanas no registradas y posibilidades de recuperarlas antes de iniciar el trámite oficial.'],
      ['icon'=>'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z',
      't'=>'Planeación anticipada','d'=>'Si aún no llegas a la edad de retiro, diseñamos una estrategia para maximizar tu pensión futura con las opciones del IMSS.'],
      ['icon'=>'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
      't'=>'Acompañamiento en trámite','d'=>'Te acompañamos en cada paso del proceso ante el IMSS para que todo salga correctamente y en el momento adecuado.'],
      ];
      @endphp
      @foreach($servicios as $s)
      <div class="service-card reveal">
        <div class="service-card-icon">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="{{ $s['icon'] }}" />
          </svg>
        </div>
        <h3>{{ $s['t'] }}</h3>
        <p>{{ $s['d'] }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>


{{-- ══ PROCESO ════════════════════════════════════════════ --}}
<section id="proceso" class="section" style="background:var(--green-dark)" aria-labelledby="proc-h2">
  <div class="section-inner">
    <div class="section-head" data-reveal-block>
      <span class="pill pill-white reveal">¿Cómo funciona?</span>
      <h2 id="proc-h2" class="reveal" style="color:#fff">Cuatro pasos para entender tu retiro</h2>
      <p class="reveal" style="color:rgba(255,255,255,.6)">Sin burocracia ni formularios complicados.</p>
    </div>
    <div class="steps-grid" data-reveal-block>
      @php
      $pasos = [
      ['n'=>'1','t'=>'Primer contacto','d'=>'Nos escribes o llamas. Una plática inicial para conocer tu situación y ver cómo podemos ayudarte.'],
      ['n'=>'2','t'=>'Revisión de tu caso','d'=>'Analizamos tu historial de cotización y documentos para entender exactamente en qué punto estás y qué opciones tienes en el IMSS.'],
      ['n'=>'3','t'=>'Orientación clara','d'=>'Te presentamos tus opciones en lenguaje directo: cuánto recibirás, cuándo y bajo qué condiciones.'],
      ['n'=>'4','t'=>'Acompañamiento','d'=>'Si decides avanzar, te acompañamos en el trámite para que cada paso salga bien y en el momento correcto.'],
      ];
      @endphp
      @foreach($pasos as $p)
      <div class="step reveal">
        <div class="step-num">{{ $p['n'] }}</div>
        <h3>{{ $p['t'] }}</h3>
        <p>{{ $p['d'] }}</p>
      </div>
      @endforeach
    </div>
    <div style="text-align:center;margin-top:3rem" data-reveal-block>
      <a href="#contacto" class="btn btn-white btn-lg reveal">Solicitar mi orientación</a>
    </div>
  </div>
</section>


{{-- ══ LOCAL ══════════════════════════════════════════════ --}}
<section class="section" style="background:var(--bg-green)" aria-labelledby="local-h2">
  <div class="section-inner">
    <div class="local-grid">
      <div data-reveal-block>
        <span class="pill reveal">Lagos de Moreno</span>
        <h2 id="local-h2" class="reveal" style="font-size:clamp(1.875rem,3.5vw,3rem);font-weight:700;color:var(--ink);margin:.75rem 0 1.5rem">
          Somos locales.<br>Conocemos tu realidad.
        </h2>
        <div class="local-map reveal">
          <iframe
            src="https://www.openstreetmap.org/export/embed.html?bbox=-101.9551%2C21.3307%2C-101.9151%2C21.3707&amp;layer=mapnik&amp;marker=21.3507%2C-101.9351"
            title="Ignacio López Rayón 891, El Refugio, Lagos de Moreno, Jalisco"
            loading="lazy"
            allowfullscreen></iframe>
        </div>
      </div>

      <div class="local-features" data-reveal-block>
        @php
        $features = [
        ['i'=>'M15 10.5a3 3 0 11-6 0 3 3 0 016 0zM19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z','t'=>'Atención presencial','s'=>'Lagos de Moreno, Jalisco'],
        ['i'=>'M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75','t'=>'A distancia','s'=>'Via telefonica'],
        ['i'=>'M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z','t'=>'Horario de atención presencial','s'=>'10:00 am - 2:00 pm'],
        ['i'=>'M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z','t'=>'Sin compromisos','s'=>'Claridad total desde el primer paso'],
        ];
        @endphp
        @foreach($features as $f)
        <div class="local-feature-card reveal">
          <div class="local-feature-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="{{ $f['i'] }}" />
            </svg>
          </div>
          <div>
            <strong>{{ $f['t'] }}</strong>
            <span>{{ $f['s'] }}</span>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>


{{-- ══ CTA BANNER ═════════════════════════════════════════ --}}
<section class="section" style="background:var(--bg)" data-reveal-block>
  <div class="section-inner">
    <div class="cta-banner reveal">
      <span class="pill pill-white">¿Listo para saber cuánto te corresponde?</span>
      <h2>Una conversación puede cambiar el rumbo de tu retiro</h2>
      <p>Revisamos tu caso, te explicamos tus opciones y te decimos exactamente en qué punto estás. Sin rodeos ni letra chica.</p>
      <div class="cta-banner-actions">
        <a href="#contacto" class="btn btn-white btn-lg">Contactar ahora</a>
        <a href="#preguntas" class="btn btn-ghost-white btn-lg">Ver preguntas frecuentes</a>
      </div>
    </div>
  </div>
</section>


{{-- ══ FAQ ═════════════════════════════════════════════════ --}}
<section id="preguntas" class="section" style="background:var(--bg-alt)" aria-labelledby="faq-h2">
  <div class="section-inner">
    <div class="section-head" data-reveal-block>
      <span class="pill reveal">Preguntas frecuentes</span>
      <h2 id="faq-h2" class="reveal">Lo que más nos preguntan</h2>
    </div>
    <div class="faq-list" data-reveal-block>
      @php
      $faqs = [
      ['q'=>'¿Cuándo debo empezar a informarme sobre mi pensión?',
      'a'=>'Lo ideal es al menos cinco años antes del retiro, pero nunca es tarde. La orientación te ayuda a conocer tu situación actual y prepararte para el momento correcto.'],
      ['q'=>'¿Qué diferencia hay entre la Ley 73 y la Ley 97 del IMSS?',
      'a'=>'La Ley 73 aplica a quienes empezaron a cotizar antes del 1 de julio de 1997 y en muchos casos ofrece una pensión más favorable. La Ley 97 rige a quienes iniciaron después y el monto depende principalmente del saldo en tu AFORE. Muchos trabajadores pueden elegir la que más les convenga — te ayudamos a determinarlo.'],
      ['q'=>'¿Cuántas semanas necesito para una pensión por cesantía en edad avanzada?',
      'a'=>'Bajo la Ley 73 del IMSS generalmente se requieren 500 semanas cotizadas y entre 60 y 64 años. Los requisitos varían según el tipo de pensión. Revisamos tu historial para saber exactamente en qué punto estás.'],
      ['q'=>'¿Puedo tramitar mi pensión si tengo semanas faltantes o inconsistencias?',
      'a'=>'Existen mecanismos para acreditar semanas faltantes y en algunos casos es posible recuperar períodos no registrados. Evaluamos tu situación específica para encontrar las opciones disponibles.'],
      ['q'=>'¿Pensión Plena tramita la pensión por mí?',
      'a'=>'Nos especializamos en orientación y asesoría sobre pensiones del IMSS. Te explicamos el proceso, revisamos tu documentación y te acompañamos en cada paso. El trámite formal se realiza directamente ante el IMSS.'],
      ['q'=>'¿Cuánto cuesta la asesoría?',
      'a'=>'Antes de cualquier acuerdo te explicamos con claridad qué incluye cada servicio y cuánto cuesta. No hay costos ocultos ni compromisos que no hayas aceptado.'],
      ];
      @endphp
      @foreach($faqs as $i => $faq)
      <div class="faq-item reveal">
        <button class="faq-btn" aria-expanded="false" aria-controls="faq-{{ $i }}" id="faq-btn-{{ $i }}">
          {{ $faq['q'] }}
          <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <line x1="12" y1="5" x2="12" y2="19" />
            <line x1="5" y1="12" x2="19" y2="12" />
          </svg>
        </button>
        <div class="faq-body" id="faq-{{ $i }}" role="region" aria-labelledby="faq-btn-{{ $i }}">
          <div class="faq-body-inner">{{ $faq['a'] }}</div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>


{{-- ══ CONTACTO ════════════════════════════════════════════ --}}
<section id="contacto" class="section" style="background:var(--bg-alt)" aria-labelledby="contact-h2">
  <div class="section-inner">
    <div class="contact-grid">
      <div class="contact-info" data-reveal-block>
        <span class="pill reveal">Hablemos</span>
        <h2 id="contact-h2" class="reveal">Cuéntanos tu situación</h2>
        <p class="reveal">Sin formularios complicados. Cuéntanos brevemente tu caso y te respondemos para agendar tu orientación.</p>
        <div data-reveal-block>
          <div class="contact-detail reveal">
            <div class="contact-detail-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="1.8" stroke-linecap="round" aria-hidden="true">
                <path d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
              </svg>
            </div>
            <div><strong>Correo</strong><span><em class="pending">[correo pendiente]</em></span></div>
          </div>
          <div class="contact-detail reveal">
            <div class="contact-detail-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="1.8" stroke-linecap="round" aria-hidden="true">
                <path d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
              </svg>
            </div>
            <div><strong>Teléfono</strong><span><em class="pending">4741480377</em></span></div>
          </div>
          <div class="contact-detail reveal">
            <div class="contact-detail-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="1.8" stroke-linecap="round" aria-hidden="true">
                <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0zM19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
              </svg>
            </div>
            <div><strong>Ubicación</strong><span>Ignacio López Rayón 891, El Refugio, 47470 Lagos de Moreno, Jal.</span></div>
          </div>
        </div>

        {{-- Foto de oficina --}}
        <div class="office-photo-wrap reveal" data-reveal-block>
          @if(file_exists(public_path('images/hero-servicios.jpg')))
          <img src="{{ asset('images/hero-servicios.jpg') }}" alt="Asesoría personalizada en Pensión Plena" class="office-photo-img">
          @else
          <div class="office-photo-placeholder">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--green-400)" stroke-width="1.4" stroke-linecap="round" aria-hidden="true">
              <path d="M2.25 21h19.5M3.75 3h16.5M3.75 3v18M20.25 3v18M9 6.75h1.5m3 0H15M9 12h1.5m3 0H15M9 17.25h6M6.75 21v-3.375A2.625 2.625 0 019.375 15h5.25A2.625 2.625 0 0117.25 17.625V21" />
            </svg>
            <span>Foto de oficinas — próximamente</span>
          </div>
          @endif
          <div class="office-photo-legend">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,.8)" stroke-width="1.8" stroke-linecap="round" flex-shrink="0" aria-hidden="true">
              <path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div>
              <strong>Atención personalizada</strong>
              <span>Revisamos tu caso con calma y te explicamos todo</span>
            </div>
          </div>
        </div>
      </div>

      <div data-reveal-block>
        <div class="contact-form-card reveal">
          <div id="form-wrap">
            <h3>Envía tu consulta</h3>
            <form id="contact-form" novalidate>
              <div class="form-group">
                <label class="form-label" for="nombre">Nombre completo <span style="color:#D32F2F">*</span></label>
                <input class="form-field" type="text" id="nombre" name="nombre" placeholder="Tu nombre" autocomplete="name" required>
                <p class="form-error">Tu nombre es requerido</p>
              </div>
              <div class="form-group">
                <label class="form-label" for="contacto-val">Teléfono o correo <span style="color:#D32F2F">*</span></label>
                <input class="form-field" type="text" id="contacto-val" name="contacto" placeholder="477 000 0000 o correo@ejemplo.com" required>
                <p class="form-error">Tu teléfono o correo es requerido</p>
              </div>
              <div class="form-group">
                <label class="form-label" for="tema">¿Sobre qué necesitas orientación?</label>
                <select class="form-field" id="tema" name="tema">
                  <option value="">Selecciona una opción</option>
                  <option value="imss">Pensión IMSS</option>
                  <option value="expediente">Revisión de expediente</option>
                  <option value="planeacion">Planeación de retiro</option>
                  <option value="otro">Otro</option>
                </select>
              </div>
              <div class="form-group form-group-grow">
                <label class="form-label" for="mensaje">Cuéntanos tu situación <span style="color:#D32F2F">*</span></label>
                <textarea class="form-field" id="mensaje" name="mensaje" rows="3" placeholder="Ej: Cotizo en IMSS desde 1988 y quiero saber cuánto recibiré..." required></textarea>
                <p class="form-error">Por favor cuéntanos tu situación</p>
              </div>
              <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;margin-top:.5rem">
                Enviar consulta
              </button>
              <p style="font-size:.8125rem;color:var(--ink-soft);margin-top:.875rem;text-align:center">
                Al enviar aceptas nuestra <a href="{{ route('privacidad') }}" style="color:var(--green)">política de privacidad</a>.
              </p>
            </form>
          </div>
          <div id="form-success" class="form-success" role="alert" aria-live="polite">
            <div class="form-success-check">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="var(--green)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <h3>¡Mensaje recibido!</h3>
            <p>Nos pondremos en contacto a la brevedad para agendar tu orientación personalizada.</p>
            <div class="form-success-details">
              <div class="form-success-detail">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                  <path d="M12 6v6l4 2" />
                  <circle cx="12" cy="12" r="10" />
                </svg>
                Tiempo de respuesta: mismo día o siguiente hábil
              </div>
              <div class="form-success-detail">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                  <path d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>
                También puedes llamarnos: <strong style="color:var(--ink)">474 148 0377</strong>
              </div>
              <div class="form-success-detail">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                  <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0zM19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>
                Ignacio López Rayón 891, Lagos de Moreno
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


{{-- ══ FOOTER ══════════════════════════════════════════════ --}}
<footer class="footer">
  <div class="footer-grid">
    <div class="footer-brand">
      <img src="{{ asset('images/logo.svg') }}" alt="Pensión Plena" height="40"
        onerror="this.src='{{ asset('images/logo.png') }}'">
      <p>Orientación y asesoría sobre pensiones en Lagos de Moreno, Jalisco.</p>
    </div>
    <div>
      <p class="footer-col-title">Servicios</p>
      <ul class="footer-links">
        <li><a href="#servicios">Orientación IMSS</a></li>
        <li><a href="#servicios">Revisión de expediente</a></li>
        <li><a href="#servicios">Planeación anticipada</a></li>
        <li><a href="#servicios">Acompañamiento en trámite</a></li>
      </ul>
    </div>
    <div>
      <p class="footer-col-title">Empresa</p>
      <ul class="footer-links">
        <li><a href="#proceso">Nuestro proceso</a></li>
        <li><a href="#preguntas">Preguntas frecuentes</a></li>
        <li><a href="{{ route('privacidad') }}">Aviso de privacidad</a></li>
      </ul>
    </div>
    <div>
      <p class="footer-col-title">Contacto</p>
      <ul class="footer-links" style="gap:.625rem">
        <li>Ignacio López Rayon 891, El Refugio, 47470 Lagos de Moreno, Jal.</li>
        <li><em class="pending" style="font-size:.8125rem">[teléfono pendiente]</em></li>
        <li><em class="pending" style="font-size:.8125rem">[correo pendiente]</em></li>
      </ul>
    </div>
  </div>
  <div class="footer-bar">
    <span>&copy; {{ date('Y') }} Pensión Plena. Todos los derechos reservados.</span>
    <span>Lagos de Moreno, Jalisco, México</span>
  </div>
</footer>

@endsection