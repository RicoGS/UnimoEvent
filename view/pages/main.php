<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Scan</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
<style>
  .in-flex{
    flex: 1;
    min-width: 200px;
  }

  .container {
  display: flex;
  align-items: center;
  }

  body {
  font-family: Arial, sans-serif;
}

.color {
  background-color: rgb(245, 245, 245);
  height: 400px;
  width: 800px;
  border-radius: 8%;
  margin: auto;
  display: flex;
  justify-content: center;
  align-items: center;
}

.scan-area {
  border: 10px solid green;
  background-image: url(.../assets/img/scan.png);
  width: 325px;
  height: 325px;
  position: relative;
  border-radius: 10px;
}

.info-card {
  background-color: green;
  color: white;
  padding: 15px;
  border-radius: 10px;
  width: 300px;
  text-align: center;
}

.info-card h5 {
  margin-bottom: 15px;
}

.info-card .info-line {
  background-color: white;
  color: black;
  margin-bottom: 10px;
  padding: 5px 10px;
  border-radius: 10px;
}

.info-card .info-foto {
  background-size: cover;
  background-position: center;
  border-radius: 50%;
  width: 100px;
  height: 100px;
  margin: 0PX 10PX 20px;
  border: 5px solid #fff;
}
</style>
</head>
<body>
  <?php 
  $usuarios = FormsController::getUser(1);
  ?>
<main class="color">
<div>
<div class="container my-5">
  <div class="row">
    <div class="col-md-6">
      <div class="scan-area">
        <div class="vertical"></div>
        <div class="horizontal"></div>
      </div>       
    </div>
    <div class="col-md-6">
      <div class="info-card">
        <div class="container">
            <img  class="info-foto" src="assets/images/profile/<?php echo $usuarios['idUsuario'] ?>.png" alt="">
          <div class="info-line"><?php echo $usuarios['Matricula'] ?></div></div>        
        <div class="info-line"><?php echo $usuarios['Nombre'] ?></div>
        <div class="info-line"><?php echo $usuarios['Grupo'] ?></div>
        <div class="info-line"><?php echo $usuarios['Plantel'] ?></div>
        <div class="info-line"><?php echo $usuarios['pEducativo'] ?></div>
      </div>
    </div>
  </div>
</div>
</div>
</main>
</body>
</html>
