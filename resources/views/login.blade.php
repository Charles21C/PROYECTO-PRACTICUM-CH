<!doctype html>
<html lang="es">
  <head>
    <!-- etiquetas requeridas -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Acceso al Sistema SIGH</title>

    <!-- Estilos personalizados -->
    <style>
      body {
        background-image: url('https://img.freepik.com/fotos-premium/cuidado-salud-medicina-fondo-color-azul-suave_636537-150150.jpg'); /* Cambia esta URL por tu imagen de fondo */
        background-size: cover;
        background-position: center;
        font-family: 'Arial', sans-serif;
      }

      .container {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .card {
        background: rgba(255, 255, 255, 0.8); 
        border-radius: 10px;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.15);
        padding: 30px;
        max-width: 400px;
        width: 100%;
      }

      .card-title {
        font-size: 24px;
        font-weight: bold;
        color: #333;
      }

      .form-label {
        font-weight: bold;
        color: #555;
      }

      .form-control {
        border-radius: 5px;
        box-shadow: none;
        border: 1px solid #ccc;
        margin-bottom: 15px;
      }

      .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
      }

      .btn-primary {
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        padding: 12px;
        font-size: 16px;
        width: 100%;
        transition: background-color 0.3s ease;
      }

      .btn-primary:hover {
        background-color: #0056b3;
      }

      .footer-text {
        text-align: center;
        margin-top: 20px;
        color: #555;
      }

      .footer-text a {
        color: #007bff;
        text-decoration: none;
      }

      .footer-text a:hover {
        text-decoration: underline;
      }

    </style>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <h3 class="card-title text-center mb-4">Acceso al Sistema SIGH</h3>
        <form action="{{ route('login') }}" method="POST">
          @csrf <!-- Directiva de seguridad de Laravel -->
          
          <!-- Usuario -->
          <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su usuario" required>
          </div>

          <!-- Contraseña -->
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña" required>
          </div>

          <!-- Botón de inicio de sesión -->
          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Ingresar</button>
          </div>
        </form>

    <!-- Enlace para recuperar contraseña -->
    <div class="footer-text mt-3">
          <small>¿Olvidaste tu contraseña? <a href="{{ route('login') }}">Recupérala aquí</a></small>
        </div>
      </div>
    </div>

    <!-- Bootstrap Bundle con Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
