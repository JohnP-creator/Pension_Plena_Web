<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="color-scheme" content="light">
<title>Nueva solicitud de orientación — Pensión Plena</title>
</head>
<body style="margin:0;padding:0;background:#EEF3F0;font-family:'Segoe UI',Roboto,Helvetica,Arial,sans-serif;color:#0F241C;">
  <div style="display:none;max-height:0;overflow:hidden;opacity:0;">{{ $nombre }} · {{ $temaTexto }} · {{ \Illuminate\Support\Str::limit($mensaje, 90) }}</div>

  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#EEF3F0;">
    <tr>
      <td align="center" style="padding:32px 16px;">
        <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="width:100%;max-width:600px;background:#FFFFFF;border-radius:14px;overflow:hidden;box-shadow:0 4px 24px rgba(11,61,46,.08);">

          {{-- Encabezado --}}
          <tr>
            <td style="background:#135C47;padding:28px 36px;">
              <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="64" valign="middle" style="padding-right:16px;">
                    <img src="{{ asset('images/logo.png') }}" width="56" height="51" alt="Pensión Plena" style="display:block;background:#FFFFFF;border-radius:10px;padding:4px;">
                  </td>
                  <td valign="middle">
                    <div style="font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:#C09E45;font-weight:700;">Nueva solicitud</div>
                    <div style="font-size:21px;line-height:1.25;color:#FFFFFF;font-weight:700;margin-top:4px;">{{ $nombre }} quiere orientación</div>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td style="height:4px;background:#C09E45;font-size:0;line-height:0;">&nbsp;</td>
          </tr>

          {{-- Resumen --}}
          <tr>
            <td style="padding:28px 36px 8px;">
              <p style="margin:0;font-size:14px;color:#5B6E66;">Recibida el {{ $fecha }} desde el formulario de pensionplena.com.mx</p>
            </td>
          </tr>

          <tr>
            <td style="padding:12px 36px 4px;">
              <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border:1px solid #E1EAE5;border-radius:10px;">
                <tr>
                  <td style="padding:14px 18px;border-bottom:1px solid #E1EAE5;width:34%;font-size:12px;letter-spacing:.08em;text-transform:uppercase;color:#7A8E85;font-weight:700;">Nombre</td>
                  <td style="padding:14px 18px;border-bottom:1px solid #E1EAE5;font-size:16px;color:#0F241C;font-weight:600;">{{ $nombre }}</td>
                </tr>
                <tr>
                  <td style="padding:14px 18px;border-bottom:1px solid #E1EAE5;font-size:12px;letter-spacing:.08em;text-transform:uppercase;color:#7A8E85;font-weight:700;">Contacto</td>
                  <td style="padding:14px 18px;border-bottom:1px solid #E1EAE5;font-size:16px;color:#0F241C;">
                    @if($esCorreo)
                      <a href="mailto:{{ $contacto }}" style="color:#135C47;font-weight:600;text-decoration:none;">{{ $contacto }}</a>
                    @elseif($telefono)
                      <a href="tel:+52{{ $telefono }}" style="color:#135C47;font-weight:600;text-decoration:none;">{{ $contacto }}</a>
                    @else
                      {{ $contacto }}
                    @endif
                  </td>
                </tr>
                <tr>
                  <td style="padding:14px 18px;font-size:12px;letter-spacing:.08em;text-transform:uppercase;color:#7A8E85;font-weight:700;">Tema</td>
                  <td style="padding:14px 18px;">
                    <span style="display:inline-block;background:#E3EFE8;color:#135C47;font-size:14px;font-weight:700;padding:5px 12px;border-radius:999px;">{{ $temaTexto }}</span>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          {{-- Mensaje --}}
          <tr>
            <td style="padding:24px 36px 8px;">
              <div style="font-size:12px;letter-spacing:.08em;text-transform:uppercase;color:#7A8E85;font-weight:700;margin-bottom:10px;">Mensaje</div>
              <div style="background:#F6F9F7;border-left:4px solid #C09E45;border-radius:6px;padding:18px 20px;font-size:15px;line-height:1.65;color:#1E3229;white-space:pre-line;">{{ $mensaje }}</div>
            </td>
          </tr>

          {{-- Acciones --}}
          <tr>
            <td style="padding:24px 36px 32px;">
              <table role="presentation" cellpadding="0" cellspacing="0">
                <tr>
                  @if($esCorreo)
                    <td style="padding-right:10px;">
                      <a href="mailto:{{ $contacto }}?subject={{ rawurlencode('Tu solicitud de orientación — Pensión Plena') }}" style="display:inline-block;background:#135C47;color:#FFFFFF;font-size:15px;font-weight:700;text-decoration:none;padding:13px 22px;border-radius:8px;">Responder por correo</a>
                    </td>
                  @endif
                  @if($telefono)
                    <td style="padding-right:10px;">
                      <a href="tel:+52{{ $telefono }}" style="display:inline-block;background:#135C47;color:#FFFFFF;font-size:15px;font-weight:700;text-decoration:none;padding:13px 22px;border-radius:8px;">Llamar</a>
                    </td>
                    <td>
                      <a href="https://wa.me/52{{ $telefono }}" style="display:inline-block;background:#FFFFFF;color:#135C47;border:2px solid #135C47;font-size:15px;font-weight:700;text-decoration:none;padding:11px 20px;border-radius:8px;">WhatsApp</a>
                    </td>
                  @endif
                </tr>
              </table>
              @if($esCorreo)
                <p style="margin:14px 0 0;font-size:13px;color:#7A8E85;">También puedes usar «Responder» en tu correo: la respuesta le llega directamente a {{ $nombre }}.</p>
              @endif
            </td>
          </tr>

          {{-- Pie --}}
          <tr>
            <td style="background:#F6F9F7;border-top:1px solid #E1EAE5;padding:20px 36px;font-size:12px;line-height:1.6;color:#7A8E85;">
              <strong style="color:#135C47;">Pensión Plena</strong> · Asesoría de Pensiones<br>
              Ignacio López Rayón 891, El Refugio, 47470 Lagos de Moreno, Jal. · 474 148 0377
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
