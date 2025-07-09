<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/favicon.png">
    <title>Relaciones</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-DcI6prXLfEk2a2pEuS+EBVrImypwX1uKjDdM5ozTDDDR8ZGb2OCsvknzyTPmRcbYEtLkmMNk9lK9zFqTLf6kTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

    .table thead {
      background-color: #212529;
      color: white;
    }

    .modal-content {
      background-color: #1f1f1f;
      color: white;
    }

    .form-floating > label {
      color: #aaa;
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

    .table-dark-glass thead th {
      padding: 12px;
      border: none;
      text-align: left;
      font-weight: 600;
      color: #ffffff;
    }

    .table-dark-glass tbody td {
      padding: 12px;
      border: none; 
    }

    .table-dark-glass tbody tr:hover {
      background-color: rgba(52, 152, 219, 0.2); 
      transition: background-color 0.3s ease;
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

    .modal.fade .modal-dialog {
      transform: translateY(-50px);
      transition: transform 0.3s ease-out, opacity 0.3s ease-out;
    }

    .modal.show .modal-dialog {
      transform: translateY(0);
    }

    .modal-content {
      padding: 15px;
      background-color: rgba(24, 24, 24, 0.95) !important;
      color: white;
      border: none;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.8);
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

    .select2-container--default .select2-selection--single {
      background-color: rgba(24, 24, 24, 0.95);
      color: #fff;
      border: 1px solid transparent;
      border-radius: 0;
      height: 38px;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
      color: #fff;
      line-height: 36px;
      padding-left: 12px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
      height: 36px;
      right: 8px;
    }

    .select2-dropdown {
      background-color: #1f1f1f;
      color: white;
      border: 1px solid transparent;
    }

    .select2-results__option {
      padding: 8px;
    }

    .select2-results__option--highlighted {
      background-color: transparent;
      color: black;
    }

    .select2-results__option--selected {
      background-color: #044d00;
      color: white;
    }

    .select2-results__option {
      padding: 10px 15px;
      margin-bottom: 5px;
      border-bottom: 1px solid #444;
    }

    .separator-line {
      border-top: 1px solid #bbb;
      margin: 20px 0;
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
      <h1 class="text-center mb-4">Lista de Relaciones</h1>

      <div class="d-flex justify-content-end">  
        <button class="btn btn-alwgreen-glow mb-3" 
        data-bs-toggle="modal" 
        data-bs-target="#modalCrearRelacion">
        <i class="fas fa-plus-circle"></i> Crear Relacion</button>
      </div>
      <table class="table-dark-glass table-bordered w-100 mt-4">
        <thead>
            <tr>
            <th scope="col">Titulo del Articulo</th>
            <th scope="col">Autor</th>
            <th scope="col">N# de Orden</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
          @foreach( $listaRelaciones as $relaciones )
          <tr>
            <th scope="row">{{ $relaciones->titulo_articulo }}</th>
            <td>{{ $relaciones->id_autor }}</td>
            <td>{{ $relaciones->orden }}</td>
            <td>
              <button class="btn btn-alwblue-glow editar"
                data-bs-toggle="modal" data-bs-target="#modalEditarRelacion"
                data-tituloupd="{{ $relaciones->titulo_articulo }}"
                data-idupd="{{ $relaciones->id_autor }}"
                data-ordenupd="{{ $relaciones->orden }}">
                <i class="fas fa-edit"></i> Editar</button>
              <button class="btn btn-alwred-glow eliminar"
                data-bs-toggle="modal" data-bs-target="#modalEliminarRelacion"
                data-tituloelim="{{ $relaciones->titulo_articulo }}"
                data-autorelim="{{ $relaciones->id_autor }}">
                <i class="fas fa-trash"></i> Eliminar</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="modal fade" id="modalCrearRelacion" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
          <div class="login-box">
            <form action="/relaciones/guardar" method="POST" class="modal-content">
              @csrf
              <div class="text-center"><h5>Crear Relacion</h5></div>
                <div class="modal-body">
                  <div class="user-box">
                    <select name="titulo_articulo" id="titulo" class="form-select select2" required>
                      <option value="" disabled selected>Selecciona un artículo</option>
                      @foreach($listaArticulos as $articulo)
                        <option value="{{ $articulo->titulo }}">{{ $articulo->titulo }}</option>
                      @endforeach
                    </select>
                    <label for="" class="label-fixed">Título del Artículo</label>
                  </div>
                  <div class="separator-line"></div>
                  <div class="user-box">
                    <select name="id_autor" id="id" class="form-select select2" required>
                      <option value="" disabled selected>Selecciona un autor</option>
                      @foreach($listaAutores as $autor)
                        <option value="{{ $autor->id_autor }}">{{ $autor->nombre }}</option>
                      @endforeach
                    </select>
                    <label for="" class="label-fixed">Código del Autor</label>
                  </div>
                  <div class="separator-line"></div>
                  <div class="user-box">
                    <input type="number" name="orden" id="orden" required>
                    <label for="">Orden</label>
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

    <div class="modal fade" id="modalEditarRelacion">
      <div class="modal-dialog modal-dialog-centered">
          <div class="login-box">
            <form id="formEditarRelacion" action="/relaciones/editar" method="POST" class="modal-content">
              @csrf
              <div class="text-center"><h5>Editar Artículo</h5></div>
              <div class="modal-body">
                <div class="user-box">
                    <input type="text" name="titulo_articulo" id="edit_titulo" readonly>
                    <label for="" class="label-fixed">Título del Articulo</label>
                  </div>
                  <div class="user-box">
                    <input type="text" name="id_autor" id="edit_id" readonly>
                    <label for="" class="label-fixed">Codigo del Autor</label>
                  </div>
                  <div class="user-box">
                    <input type="number" name="orden" id="edit_orden" required>
                    <label for="">Orden</label>
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

    <div class="modal fade" id="modalEliminarRelacion" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="login-box">
          <form action="/relaciones/eliminar" method="POST" class="modal-content">
            @csrf
            <input type="hidden" name="titulo_articulo" id="delete_titulo">
            <input type="hidden" name="id_autor" id="delete_autor">
            <div class="text-center"><h5>Eliminar Artículo</h5></div>
            <div class="user-box">
              <p>¿Desea eliminar el artículo "<strong id="delete_titulo_text"></strong>"?</p>
            </div>
            <div class="modal-footer">
              <button class="btn btn-red-glow" type="submit">Eliminar</button>
              <button class="btn btn-cancel" type="button" data-bs-dismiss="modal">Cancelar</button>
            </div>
          </form>
        </div>
      </div>
  </div>

  <script>
    $(document).ready(function() {
      $('.editar').on('click', function () {
        let tituloEdit = $(this).data('tituloupd');
        let autorEdit = $(this).data('idupd');
        let ordenEdit = $(this).data('ordenupd');

        $('#edit_titulo').val(tituloEdit);
        $('#edit_id').val(autorEdit);
        $('#edit_orden').val(ordenEdit);

        document.getElementById('formEditarRelacion').action = '/relaciones/editar';
      });

      $('.eliminar').on('click', function () {
        let titulo = $(this).data('tituloelim');
        let autor = $(this).data('autorelim');

        $('#delete_titulo').val(titulo);
        $('#delete_autor').val(autor);
        $('#delete_titulo_text').text(titulo);
      });
    });

  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#titulo').select2({
        dropdownParent: $('#modalCrearRelacion'),
        width: '100%',
        placeholder: "Selecciona un artículo"
      });

      $('#id').select2({
        dropdownParent: $('#modalCrearRelacion'),
        width: '100%',
        placeholder: "Selecciona un autor"
      });
    });
  </script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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