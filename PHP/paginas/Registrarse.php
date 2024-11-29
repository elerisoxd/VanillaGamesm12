<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <form action="" class=" border p-5 shadow">
        <h1>Evalua Me</h1>
        <h2 class="text-primary">Registrarse</h2>
        <div class="mb-3">
          <label for="gmail" class="form-label">Email address</label>
          <input type="email" class="form-control" id="gmail" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
          <label for="contrasenya" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="contrasenya" required>
        </div>
        <div class="mb-3">
            <label for="repetirContrasenya" class="form-label">Repetir Contraseña</label>
            <input type="password" class="form-control" id="repetirContrasenya" required>
          </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="IniciarSesion.html"><p>Ya tienes cuenta? Inicia sesion aqui</p></a>
      </form>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>