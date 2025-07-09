<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Artículos de {{ $revista->titulo }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #2c3e50, #000000);
      color: #fff;
      font-family: 'Segoe UI', sans-serif;
    }

    h1 {
      font-weight: 700;
      text-shadow: 1px 1px 3px #000;
      margin-bottom: 2rem;
    }

    .list-glass {
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.15);
      border-radius: 10px;
      backdrop-filter: blur(10px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
      padding: 1.2rem;
      margin-bottom: 1rem;
      transition: all 0.3s ease;
    }

    .list-glass:hover {
      background: rgba(255, 255, 255, 0.12);
      transform: scale(1.01);
    }

    .articulo-titulo {
      font-size: 1.2rem;
      font-weight: bold;
      margin-bottom: 0.3rem;
    }

    .articulo-detalles {
      font-size: 0.95rem;
      color: #ccc;
    }

    .btn-back {
      background-color: transparent;
      border: 1px solid #00f0ff;
      color: #00f0ff;
      transition: 0.3s ease;
    }

    .btn-back:hover {
      background-color: #00f0ff;
      color: #000;
      box-shadow: 0 0 10px #00f0ff;
    }

    footer {
      text-align: center;
      margin-top: 4rem;
      font-size: 0.9rem;
      color: #aaa;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <h1 class="text-center">Artículos de {{ $revista->titulo }}</h1>

  <div class="text-start mb-4">
    <a href="/verSubs" class="btn btn-info btn-sm">← Volver a Revistas</a>
  </div>

  @forelse($articulos as $articulo)
  <div class="list-glass">
    <div class="articulo-titulo">{{ $articulo->titulo }}</div>
    <div class="articulo-detalles">
      <strong>Página de Inicio:</strong> {{ $articulo->pagina_inicio }}<br>
      <strong>Página Final:</strong> {{ $articulo->pagina_fin }}
    </div>
    <div class="mt-2">
      <a href="/articulos/{{ urlencode($articulo->titulo) }}/autores" class="btn btn-info btn-sm">
        Ver Autores
      </a>
    </div>
  </div>
  @empty
    <p class="text-center">No hay artículos para esta revista.</p>
  @endforelse

  <footer>
    Desarrollado por Pocoyo © 2025
  </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
