<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seminario de Educación</title>
  <link href="assets\css\style.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <!-- Encabezado -->
    <header class="bg-success text-white text-center py-3">
      <h1>1er Seminario de Educación</h1>
      <p>Reimaginando la educación: "La influencia disruptiva de la IA en el aprendizaje"</p>
    </header>
    <!-- Contenido principal -->
    <section class="my-4">
      <!-- Información de donación -->
      <div class="text-center">
        <p>Comprobante de pago</p>
        <p>No. DE FOLIO DE TU COMPROBANTE DE PAGO O No. TRANSACCION.</p>
        <div class="file-upload">
        <label for="file-input" class="file-label">
            Seleccionar archivo
        </label>
        <input id="file-input" type="file" class="file-input">
    </div>
      </div>
      <div class="text-center my-4">
        <!-- Aquí puedes insertar la imagen o interfaz para pagos -->
      </div>
      <form method="post" action="upload">
        <div class="mb-3">
          <label for="dni" class="form-label">Nombre</label>
          <input type="text" class="form-control" name="Nombre" required>
        </div>
        <div class="mb-3">
          <label for="Matricula" class="form-label">Matricula</label>
          <input type="text" class="form-control" name="Matricula" required>
        </div>
        <div class="mb-3">
          <label for="Email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
          <label for="Grupo" class="form-label">Grupo</label>
          <input type="text" class="form-control" name="Grupo" required>
        </div>
        <div class="mb-3">
          <label for="Plantel" class="form-label">Plantel</label>
          <input type="text" class="form-control" name="Plantel" required>
        </div>  
         <div class="mb-3">
          <label for="pEducativo" class="form-label">Programa Educativo</label>
          <input type="text" class="form-control" name="pEducativo" required>
        </div>
        <div class="mb-3">
          <label for="lOrigen" class="form-label">Lugar de Origen</label>
          <input type="text" class="form-control" name="lOrigen" required>
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
      </form>
    </section>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
