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
  <h1 class="mb-4">¡Bienvenido a Inicio!</h1>

  <div class="glass-container">
    <a href="/menuG" class="glass">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
        <path d="M64 64C28.7 64 0 92.7 0 128V384c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H64zM288 160a96 96 0 1 1 0 192 96 96 0 1 1 0-192z" />
      </svg>
      <span>Gestión de Datos</span>
    </a>

    <a href="/verSubs" class="glass">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
        <path d="M392.8 1.2c-17-4.9-34.7 5-39.6 22l-128 448c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l128-448c4.9-17-5-34.7-22-39.6z" />
      </svg>
      <span>Ver Suscripciones</span>
    </a>
  </div>

  <footer class="mt-5">
    Desarrollado por Pocoyo © 2025
  </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
