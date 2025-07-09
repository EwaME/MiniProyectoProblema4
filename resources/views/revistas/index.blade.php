<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="/favicon.png">
  <title>Sistema de Revistas</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #2c3e50, #000000);
      font-family: 'Segoe UI', sans-serif;
      color: #fff;
      min-height: 100vh;
      padding-top: 70px;
    }

    .container {
      background-color: rgba(255, 255, 255, 0.05);
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
      margin-top: 2rem;
    }

    h1 {
      font-weight: bold;
      text-shadow: 1px 1px 3px #000;
    }

    .btn {
      border-radius: 0.8rem;
    }

    .btn-alwgreen-glow {
      background: transparent;
      color: #03f40f;
      font-weight: bold;
      border: 1px solid #03f40f;
      transition: 0.3s ease;
    }

    .btn-alwgreen-glow:hover {
      background: #03f40f;
      color: #000;
      box-shadow: 0 0 10px #03f40f, 0 0 20px #03f40f;
    }

    .btn-alwblue-glow {
      background: transparent;
      color: rgb(0, 98, 255);
      font-weight: bold;
      border: 1px solid rgb(0, 98, 255);
      transition: 0.3s ease;
    }

    .btn-alwblue-glow:hover {
      background: rgb(0, 98, 255);
      color: #000;
      box-shadow: 0 0 20px rgb(0, 76, 255), 0 0 40px rgb(0, 76, 255);
    }

    .btn-alwred-glow {
      background: transparent;
      color: #ff0033;
      font-weight: bold;
      border: 1px solid #ff0033;
      transition: 0.3s ease;
    }

    .btn-alwred-glow:hover {
      background: #ff1a4b;
      color: #000;
      box-shadow: 0 0 20px #ff1a4b, 0 0 40px #ff1a4b;
    }

    .btn-green-glow {
      background: transparent;
      color: #03f40f;
      font-weight: bold;
      border: 1px solid #03f40f;
      transition: 0.3s ease;
    }

    .btn-green-glow:hover {
      background: #03f40f;
      color: #000;
      box-shadow: 0 0 10px #03f40f, 0 0 20px #03f40f;
    }

    .btn-blue-glow {
      background: transparent;
      color: rgb(0, 98, 255);
      font-weight: bold;
      border: 1px solid rgb(0, 98, 255);
      transition: 0.3s ease;
    }

    .btn-blue-glow:hover {
      background: rgb(0, 98, 255);
      color: #000;
      box-shadow: 0 0 20px rgb(0, 76, 255), 0 0 40px rgb(0, 76, 255);
    }

    .btn-red-glow {
      background: transparent;
      color: #ff0033;
      font-weight: bold;
      border: 1px solid #ff0033;
      transition: 0.3s ease;
    }

    .btn-red-glow:hover {
      background: #ff1a4b;
      color: #000;
      box-shadow: 0 0 20px #ff1a4b, 0 0 40px #ff1a4b;
    }

    .btn-cancel {
      background: transparent;
      color: #bbb;
      border: 1px solid #555;
      transition: 0.3s ease;
    }

    .btn-cancel:hover {
      background: #555;
      color: white;
    }

    .table-dark-glass {
      width: 100%;
      background-color: rgba(44, 62, 80, 0.7);
      backdrop-filter: blur(8px);
      border-radius: 12px;
      overflow: hidden;
      color: #ecf0f1;
      font-size: 0.95rem;
      border: none;
    }

    .table-dark-glass thead tr {
      background-color: rgba(41, 128, 185, 0.8);
      border: none;
    }

    .table-dark-glass thead th,
    .table-dark-glass tbody td {
      padding: 12px;
      border: none;
    }

    .table-dark-glass tbody tr:hover {
      background-color: rgba(52, 152, 219, 0.2);
      transition: background-color 0.3s ease;
    }

    .modal-content {
      background-color: rgba(24, 24, 24, 0.95) !important;
      color: white;
      border: none;
      border-radius: 1rem;
      padding: 20px;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.8);
    }

    .form-floating > label {
      color: #aaa;
    }

    .login-box {
    width: 100%;
    max-width: 450px;
    padding: 40px;
    background: none;
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0);
    border-radius: 10px;
    color: #fff;
  }

  .login-box .user-box {
    position: relative;
  }

  .login-box .user-box input {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
  }

  .label-fixed {
  top: -20px !important;
  left: 0 !important;
  color: #bdb8b8 !important;
  font-size: 12px !important;
}

  .login-box .user-box label {
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: .5s;
  }

  .login-box .user-box input:focus ~ label,
  .login-box .user-box input:valid ~ label {
    top: -20px;
    left: 0;
    color: #bdb8b8;
    font-size: 12px;
  }

  .login-box form button {
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #ffffff;
    font-size: 16px;
    background: none;
    border: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    letter-spacing: 2px;
    cursor: pointer;
  }

  .login-box form button span {
    position: absolute;
    display: block;
  }

  .login-box form button span:nth-child(1) {
    bottom: 2px;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #03f40f);
    animation: btn-anim1 2s linear infinite;
  }

  @keyframes btn-anim1 {
    0% {
      left: -100%;
    }
    50%, 100% {
      left: 100%;
    }
  }
  
  .table-dark-glass,
    .table-dark-glass th,
    .table-dark-glass td,
    .table-dark-glass tbody tr {
      border: none !important;
    }

    .table-dark-glass tbody td {
      border-bottom: none !important;
    }

    .glass-navbar {
      background: rgba(255, 255, 255, 0.08);
      backdrop-filter: blur(10px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.15);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
    }
    .navbar-brand {
      font-weight: bold;
      text-shadow: 1px 1px 3px #000;
    }
    .nav-link {
      transition: 0.3s ease;
    }
    .nav-link:hover {
      color: #00f0ff !important;
      text-shadow: 0 0 5px #00f0ff;
    }

    .navbar {
      backdrop-filter: blur(10px);
      background-color: rgba(0, 0, 0, 0.85) !important;
    }

    .nav-link {
      color: #ccc !important;
      transition: all 0.2s ease-in-out;
    }

    .nav-link:hover {
      color: #00f0ff !important;
      text-shadow: 0 0 5px #00f0ff;
    }
  </style>
</head>
<body>
<div class="container">
  <h1><i class="fas fa-book-open"></i> Revistas</h1>
  <div class="d-flex justify-content-end">
    <button class="btn btn-alwgreen-glow mb-3" data-bs-toggle="modal" data-bs-target="#mCrearRevista">
      <i class="fas fa-plus-circle"></i> Crear Revista
    </button>
  </div>
  <table class="table-dark-glass table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Título</th>
        <th>ISSN</th>
        <th>Número</th>
        <th>Año Publicación</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($listaRevistas as $revista)
      <tr>
        <td>{{ $revista->id_revista }}</td>
        <td>{{ $revista->titulo }}</td>
        <td>{{ $revista->issn }}</td>
        <td>{{ $revista->numero }}</td>
        <td>{{ $revista->anio_publicacion }}</td>
        <td>
          <button class="btn btn-alwblue-glow ejecutar" data-bs-toggle="modal" data-bs-target="#mEditarRevista"
            data-id="{{ $revista->id_revista }}"
            data-titulo="{{ $revista->titulo }}"
            data-issn="{{ $revista->issn }}"
            data-numero="{{ $revista->numero }}"
            data-anio="{{ $revista->anio_publicacion }}">
            <i class="fas fa-edit"></i> Editar
          </button>
          <button class="btn btn-alwred-glow eli" data-bs-toggle="modal" data-bs-target="#mEliminarRevista"
            data-ideli="{{ $revista->id_revista }}"
            data-tituloeli="{{ $revista->titulo }}">
            <i class="fas fa-trash"></i> Eliminar
          </button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<!-- Modal Crear -->
<div class="modal fade" id="mCrearRevista">
  <div class="modal-dialog modal-dialog-centered">
    <div class="login-box">
      <form action="/revista" method="POST" id="formCrear" class="modal-content">
        @csrf
        <div class="text-center"><h5>Crear Revista</h5></div>
        <div class="modal-body">
          <div class="user-box">
            <input type="text" name="titulo" required>
            <label for="">Título</label>
          </div>
          <div class="user-box">
            <input type="text" name="issn" required>
            <label for="">ISSN</label>
          </div>
          <div class="user-box">
            <input type="number" name="numero" required>
            <label for="">Número</label>
          </div>
          <div class="user-box">
            <input type="number" name="anio" required>
            <label for="">Año de Publicación</label>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-green-glow" type="submit">Guardar</button>
          <button class="btn btn-cancel" type="button" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Editar -->
<div class="modal fade" id="mEditarRevista">
  <div class="modal-dialog modal-dialog-centered">
    <div class="login-box">
      <form method="POST" id="formEditar" class="modal-content">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" id="revistaIdEditar">
        <div class="text-center"><h5>Editar Revista</h5></div>
        <div class="modal-body">
          <div class="user-box">
            <input type="text" name="titulo" id="tituloEditar" required>
            <label for="">Título</label>
          </div>
          <div class="user-box">
            <input type="text" name="issn" id="issnEditar" required>
            <label for="">ISSN</label>
          </div>
          <div class="user-box">
            <input type="number" name="numero" id="numeroEditar" required>
            <label for="">Número</label>
          </div>
          <div class="user-box">
            <input type="number" name="anio" id="anioEditar" required>
            <label for="">Año de Publicación</label>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-blue-glow" type="submit">Actualizar</button>
          <button class="btn btn-cancel" type="button" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Eliminar -->
<div class="modal fade" id="mEliminarRevista">
  <div class="modal-dialog modal-dialog-centered">
    <div class="login-box">
      <form method="POST" id="formEliminar" class="modal-content">
        @csrf
        @method('DELETE')
        <input type="hidden" name="id" id="revistaIdEliminar">
        <div class="text-center"><h5>Eliminar Revista</h5></div>
        <div class="modal-body">
          <div class="user-box">
            <input type="text" id="tituloEliminar" readonly>
            <label for="" class="label-fixed">Título</label>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-red-glow" type="submit">Eliminar</button>
          <button class="btn btn-cancel" type="button" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
<script>
  $(document).ready(function () {
    $('.ejecutar').on('click', function () {
      let id = $(this).data('id');
      let titulo = $(this).data('titulo');
      let issn = $(this).data('issn');
      let numero = $(this).data('numero');
      let anio = $(this).data('anio');
      
      $('#revistaIdEditar').val(id);
      $('#tituloEditar').val(titulo);
      $('#issnEditar').val(issn);
      $('#numeroEditar').val(numero);
      $('#anioEditar').val(anio);
      document.getElementById('formEditar').action = '/revista/edit/' + id;
    });

    $('.eli').on('click', function () {
      let ideli = $(this).data('ideli');
      let tituloeli = $(this).data('tituloeli');
      $('#revistaIdEliminar').val(ideli);
      $('#tituloEliminar').val(tituloeli);
      document.getElementById('formEliminar').action = '/revista/delete/' + ideli;
    });
  });
</script>
</body>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark glass-navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Gestión de Datos</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/revistas">Revistas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/articulos">Artículos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/autores">Autores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/relaciones">Relaciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/menuG">Menú Principal</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</html>
