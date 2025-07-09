<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inicio - Sistema de Revistas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #2c3e50, #000000);
      font-family: 'Segoe UI', sans-serif;
      color: #fff;
      min-height: 100vh;
    }

    .navbar-brand {
      font-weight: bold;
      font-size: 1.5rem;
    }

    h1 {
      font-weight: 700;
      text-shadow: 1px 1px 3px #000;
    }

    .glass-container {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 30px;
      flex-wrap: wrap;
      margin-top: 3rem;
    }

    .glass {
      position: relative;
      width: 200px;
      height: 220px;
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.15);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
      border-radius: 15px;
      backdrop-filter: blur(10px);
      transition: all 0.3s ease;
      cursor: pointer;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-decoration: none;
    }

    .glass:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.4);
      background: rgba(255, 255, 255, 0.12);
    }

    .glass svg {
      fill: #fff;
      width: 60px;
      height: 60px;
      margin-bottom: 15px;
    }

    .glass span {
      font-size: 1.2rem;
      font-weight: 500;
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

<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
  </div>
</nav>

<div class="container text-center mt-5">
  <h1 class="mb-4">Menú Principal</h1>

  <div class="text-center mb-4">
    <a href="/" class="btn btn-info btn-sm">Volver a Inicio</a>
  </div>

  <div class="glass-container">
    <a href="/revistas" class="glass">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
        <path d="M64 64C28.7 64 0 92.7 0 128V384c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H64zM288 160a96 96 0 1 1 0 192 96 96 0 1 1 0-192z" />
      </svg>
      <span>Revistas</span>
    </a>

    <a href="/articulos" class="glass">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
        <path d="M392.8 1.2c-17-4.9-34.7 5-39.6 22l-128 448c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l128-448c4.9-17-5-34.7-22-39.6z" />
      </svg>
      <span>Artículos</span>
    </a>

    <a href="/autores" class="glass">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
        <path d="M244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1v-61.4s-70 15-84.7-29.8c0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4v83.6c0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8z" />
      </svg>
      <span>Autores</span>
    </a>

    <a href="/relaciones" class="glass">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path d="M64 64H448V384H64zM128 448H384V480H128z" />
      </svg>
      <span>Relaciones</span>
    </a>
  </div>

  <footer class="mt-5">
    Desarrollado por Pocoyo © 2025
  </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
