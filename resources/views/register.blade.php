<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar Paciente</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: url('https://img.freepik.com/fotos-premium/cuidado-salud-medicina-fondo-color-azul-suave_636537-150150.jpg') no-repeat center center fixed;
      background-size: cover;
    }

    .container {
      background: rgba(255, 255, 255, 0.9);
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    h1 {
      font-weight: 600;
      color: #2c3e50;
    }

    .btn-primary {
      background-color: #3498db;
      border-color: #3498db;
    }

    .btn-primary:hover {
      background-color: #2980b9;
      border-color: #2980b9;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center mb-4">Registrar Paciente</h1>
    <form action="/cita" method="GET">
      <!-- Campo de Nombres -->
      <div class="mb-3">
        <label for="first_name" class="form-label">Nombres</label>
        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Ingrese el nombre del paciente" required>
      </div>

      <!-- Campo de Apellidos -->
      <div class="mb-3">
        <label for="last_name" class="form-label">Apellidos</label>
        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Ingrese el apellido del paciente" required>
      </div>

      <!-- Campo de Número de Identificación -->
      <div class="mb-3">
        <label for="num" class="form-label">Número de Identificación</label>
        <input type="text" class="form-control" id="num" name="num" placeholder="Ingrese su número de identificación" required>
      </div>

      <!-- Campo de Fecha de Nacimiento -->
      <div class="mb-3">
        <label for="birth_date" class="form-label">Fecha de Nacimiento</label>
        <input type="date" class="form-control" id="birth_date" name="birth_date" required>
      </div>

      <!-- Campo de Género -->
      <div class="mb-3">
        <label for="gender" class="form-label">Género</label>
        <select class="form-select" id="gender" name="gender" required>
          <option value="">Seleccione una opción</option>
          <option value="male">Masculino</option>
          <option value="female">Femenino</option>
        </select>
      </div>

      <!-- Botón para registrar -->
      <button type="submit" class="btn btn-primary w-100">Registrar</button>
    </form>
  </div>

 
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
