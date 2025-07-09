<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Revistas Suscritas</title>
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
    }

    .card-glass {
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.15);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
      border-radius: 15px;
      backdrop-filter: blur(10px);
      padding: 1.5rem;
      transition: all 0.3s ease;
      height: 100%;
    }

    .card-glass:hover {
      transform: translateY(-5px);
      background: rgba(255, 255, 255, 0.12);
    }

    .card-title {
      font-size: 1.3rem;
      font-weight: bold;
    }

    .btn-articulos {
      margin-top: 1rem;
      width: 100%;
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
  <h1 class="text-center mb-4">Revistas Suscritas</h1>

  <div class="text-start mb-4">
    <a href="/" class="btn btn-info btn-sm">← Volver a Inicio</a>
  </div>

  <div class="row g-4">
    @foreach($listaRevistas as $revista)
      <div class="col-md-4">
        <div class="card-glass">
          <div class="card-title">{{ $revista->titulo }}</div>
          <p><strong>ISSN:</strong> {{ $revista->issn }}</p>
          <p><strong>Numero de paginas:</strong> {{ $revista->numero }}</p>
          <p><strong>Año de Publicación:</strong> {{ $revista->anio_publicacion }}</p>

          <a href="/revistas/{{ $revista->id_revista }}/articulos" class="btn btn-primary btn-articulos">
            Ver Artículos
          </a>
        </div>
      </div>
    @endforeach
  </div>

  <footer class="mt-5">
    Desarrollado por Pocoyo © 2025
  </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>