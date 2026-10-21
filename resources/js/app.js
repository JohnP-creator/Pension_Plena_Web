import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {

    /* 1 — Nav scroll */
    const nav = document.getElementById('site-nav');
    const tick = () => nav?.classList.toggle('scrolled', window.scrollY > 40);
    window.addEventListener('scroll', tick, { passive: true });
    tick();

    /* 2 — Mobile drawer */
    const toggle    = document.getElementById('nav-toggle');
    const drawer    = document.getElementById('mobile-drawer');
    const closeBtn  = document.getElementById('drawer-close');

    const open  = () => { drawer?.classList.add('open');    toggle?.setAttribute('aria-expanded','true');  document.body.style.overflow='hidden'; };
    const close = () => { drawer?.classList.remove('open'); toggle?.setAttribute('aria-expanded','false'); document.body.style.overflow=''; };

    toggle?.addEventListener('click', open);
    closeBtn?.addEventListener('click', close);
    drawer?.querySelectorAll('a').forEach(a => a.addEventListener('click', close));

    /* 3 — Hero entrance */
    requestAnimationFrame(() => setTimeout(() => {
        document.getElementById('hero-text')?.classList.add('loaded');
        document.getElementById('hero-card')?.classList.add('loaded');
    }, 60));

    /* 4 — Scroll reveals */
    const revealObs = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            entry.target.querySelectorAll('.reveal').forEach((el, i) => {
                setTimeout(() => el.classList.add('is-visible'), i * 75);
            });
            revealObs.unobserve(entry.target);
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('[data-reveal-block]').forEach(b => revealObs.observe(b));

    /* 5 — FAQ */
    document.querySelectorAll('.faq-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const expanded = btn.getAttribute('aria-expanded') === 'true';
            document.querySelectorAll('.faq-btn').forEach(b => {
                b.setAttribute('aria-expanded', 'false');
                b.nextElementSibling?.classList.remove('open');
            });
            if (!expanded) {
                btn.setAttribute('aria-expanded', 'true');
                btn.nextElementSibling?.classList.add('open');
            }
        });
    });

    /* 6 — Contact form */
    const form    = document.getElementById('contact-form');
    const wrap    = document.getElementById('form-wrap');
    const success = document.getElementById('form-success');
    const submitBtn = form?.querySelector('[type="submit"]');

    form?.addEventListener('submit', async e => {
        e.preventDefault();

        // Client-side validation
        let valid = true;
        form.querySelectorAll('[required]').forEach(f => {
            f.classList.remove('error');
            if (!f.value.trim()) { f.classList.add('error'); valid = false; }
        });
        if (!valid) return;

        // Disable button and show loading state
        submitBtn.disabled = true;
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'Enviando…';

        try {
            const res = await fetch('/contacto', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content ?? '',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({
                    nombre:   form.nombre.value.trim(),
                    contacto: form['contacto-val'].value.trim(),
                    tema:     form.tema.value,
                    mensaje:  form.mensaje.value.trim(),
                }),
            });

            if (res.ok) {
                wrap.style.transition = 'opacity 250ms ease';
                wrap.style.opacity = '0';
                setTimeout(() => { wrap.hidden = true; success.classList.add('show'); }, 260);
            } else {
                const data = await res.json().catch(() => ({}));
                alert(data.message ?? 'Ocurrió un error. Por favor intenta de nuevo.');
                submitBtn.disabled = false;
                submitBtn.textContent = originalText;
            }
        } catch {
            alert('No se pudo enviar el mensaje. Revisa tu conexión e intenta de nuevo.');
            submitBtn.disabled = false;
            submitBtn.textContent = originalText;
        }
    });

    form?.querySelectorAll('.form-field').forEach(f => {
        f.addEventListener('input', () => f.classList.remove('error'));
    });

});
