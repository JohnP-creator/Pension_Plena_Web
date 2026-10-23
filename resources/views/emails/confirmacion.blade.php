<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="color-scheme" content="light">
<title>Recibimos tu solicitud — Pensión Plena</title>
</head>
<body style="margin:0;padding:0;background:#EEF3F0;font-family:'Segoe UI',Roboto,Helvetica,Arial,sans-serif;color:#0F241C;">
  <div style="display:none;max-height:0;overflow:hidden;opacity:0;">Gracias por escribirnos, {{ $primerNombre }}. Te contactaremos a la brevedad.</div>

  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#EEF3F0;">
    <tr>
      <td align="center" style="padding:32px 16px;">
        <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="width:100%;max-width:600px;background:#FFFFFF;border-radius:14px;overflow:hidden;box-shadow:0 4px 24px rgba(11,61,46,.08);">

          <tr>
            <td align="center" style="background:#135C47;padding:34px 36px 30px;">
              <img src="{{ asset('images/logo.png') }}" width="84" height="76" alt="Pensión Plena" style="display:block;background:#FFFFFF;border-radius:14px;padding:6px;margin:0 auto 16px;">
              <div style="font-size:24px;line-height:1.25;color:#FFFFFF;font-weight:700;">¡Gracias, {{ $primerNombre }}!</div>
              <div style="font-size:15px;color:rgba(255,255,255,.78);margin-top:6px;">Recibimos tu solicitud de orientación</div>
            </td>
          </tr>
          <tr>
            <td style="height:4px;background:#C09E45;font-size:0;line-height:0;">&nbsp;</td>
          </tr>

          <tr>
            <td style="padding:32px 36px 8px;font-size:16px;line-height:1.7;color:#1E3229;">
              <p style="margin:0 0 16px;">Hola {{ $primerNombre }}:</p>
              <p style="margin:0 0 16px;">Gracias por confiar en <strong>Pensión Plena</strong>. Ya tenemos tu mensaje{{ $temaTexto ? ' sobre «'.$temaTexto.'»' : '' }} y uno de nuestros asesores se pondrá en contacto contigo a la brevedad para agendar tu orientación.</p>
              <p style="margin:0;">Si tienes a la mano tu <strong>número de seguridad social (NSS)</strong>, tu <strong>CURP</strong> o tu <strong>constancia de semanas cotizadas</strong>, tenlos listos: nos ayudan a revisar tu caso con más precisión.</p>
            </td>
          </tr>

          <tr>
            <td style="padding:24px 36px 8px;">
              <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#F6F9F7;border-radius:10px;">
                <tr>
                  <td style="padding:20px 22px;font-size:14px;line-height:1.7;color:#1E3229;">
                    <div style="font-size:12px;letter-spacing:.1em;text-transform:uppercase;color:#C09E45;font-weight:700;margin-bottom:6px;">¿Prefieres llamarnos?</div>
                    <a href="tel:+524741480377" style="font-size:24px;font-weight:800;color:#135C47;text-decoration:none;">474 148 0377</a><br>
                    Ignacio López Rayón 891, El Refugio, Lagos de Moreno, Jal.<br>
                    Atención presencial de 10:00 am a 2:00 pm
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <tr>
            <td style="padding:24px 36px 32px;font-size:15px;line-height:1.6;color:#1E3229;">
              Atentamente,<br>
              <strong style="color:#135C47;">Equipo Pensión Plena</strong><br>
              <span style="color:#7A8E85;font-size:13px;">Asesoría de Pensiones · Más de 30 años de experiencia</span>
            </td>
          </tr>

          <tr>
            <td style="background:#F6F9F7;border-top:1px solid #E1EAE5;padding:18px 36px;font-size:11px;line-height:1.6;color:#8A9C94;">
              Recibiste este correo porque enviaste una solicitud en pensionplena.com.mx. Pensión Plena es una asesoría independiente y no forma parte del IMSS. Consulta nuestro <a href="{{ route('privacidad') }}" style="color:#135C47;">aviso de privacidad</a>.
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
