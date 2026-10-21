<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nueva consulta — Pensión Plena</title>
<style>
  body { margin: 0; padding: 0; background: #F4FAF7; font-family: -apple-system, 'Segoe UI', sans-serif; }
  .wrap { max-width: 580px; margin: 32px auto; background: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 16px rgba(0,0,0,.08); }
  .header { background: #135C47; padding: 28px 32px; }
  .header h1 { margin: 0; color: #fff; font-size: 1.125rem; font-weight: 600; letter-spacing: -.01em; }
  .header p { margin: 4px 0 0; color: rgba(255,255,255,.65); font-size: .875rem; }
  .body { padding: 32px; }
  .field { margin-bottom: 20px; }
  .label { font-size: .75rem; font-weight: 600; text-transform: uppercase; letter-spacing: .06em; color: #7A9A8A; margin-bottom: 4px; }
  .value { font-size: 1rem; color: #0D1F18; line-height: 1.5; }
  .mensaje-box { background: #F4FAF7; border-left: 3px solid #135C47; border-radius: 4px; padding: 14px 16px; font-size: .9375rem; color: #0D1F18; line-height: 1.6; }
  .footer { padding: 20px 32px; background: #EBF4EF; border-top: 1px solid #D4EBE1; font-size: .8125rem; color: #7A9A8A; text-align: center; }
</style>
</head>
<body>
  <div class="wrap">
    <div class="header">
      <h1>Nueva consulta recibida</h1>
      <p>Pensión Plena &mdash; Asesoría de Pensiones</p>
    </div>
    <div class="body">
      <div class="field">
        <div class="label">Nombre</div>
        <div class="value">{{ $nombre }}</div>
      </div>
      <div class="field">
        <div class="label">Teléfono o correo</div>
        <div class="value">{{ $contacto }}</div>
      </div>
      <div class="field">
        <div class="label">Tema de interés</div>
        <div class="value">{{ $tema }}</div>
      </div>
      <div class="field">
        <div class="label">Mensaje</div>
        <div class="mensaje-box">{{ $mensaje }}</div>
      </div>
    </div>
    <div class="footer">
      Este mensaje fue enviado desde el formulario de contacto en<br>
      <strong>pensionplena.com</strong> &mdash; Lagos de Moreno, Jalisco
    </div>
  </div>
</body>
</html>
