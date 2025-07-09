<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Autores del Artículo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #2c3e50, #000);
      color: #fff;
      font-family: 'Segoe UI', sans-serif;
    }
    .autor-box {
      background: rgba(255,255,255,0.08);
      border-radius: 10px;
      padding: 1.2rem;
      margin-bottom: 1rem;
      backdrop-filter: blur(10px);
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center">Autores de: {{ $articulo->titulo }}</h1>

    <div class="text-start mb-4">
      <a href="{{ url()->previous() }}" class="btn btn-info btn-sm">← Volver</a>
    </div>

    @forelse($autores as $autor)
      <div class="autor-box">
        <strong>Nombre:</strong> {{ $autor->nombre }}<br>
        <strong>Correo:</strong> {{ $autor->correo }}<br>
        <strong>Adscripción:</strong> {{ $autor->adscripcion }}<br>
        <strong>Orden de aparición:</strong> {{ $autor->orden }}
      </div>
    @empty
      <p class="text-center">Este artículo no tiene autores registrados.</p>
    @endforelse
  </div>
</body>
</html>
