<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['contrasena']) && !empty($_POST['nombre']) && !empty($_POST['apellidos'])) {
    $sql = "INSERT INTO usuarios (email, contrasena, nombre, apellidos) VALUES (:email, :contrasena, :nombre, :apellidos)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
    $stmt->bindParam(':contrasena', $password);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':apellidos', $_POST['apellidos']);

    if ($stmt->execute()) {
        $message = 'Enhorabuena eres un nuevo usuario.';
      } else {
        $message = 'Lo sentimos, debe haber habido un problema al crear su cuenta';
      }
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estilos_registro.css">
    <title>Login</title>
  </head>
  <body>

  <?php 
  if(!empty($message)): ?>
      <p> <?= $message ?></p>
<?php endif; ?>

    <h1>Registro</h1>
    <span>o <a href="contact.php">Inicia sesion</a></span>

    <form action="registro.php" method="POST">
      <input name="email" type="text" placeholder="Introduce tu email">
      <input name="contrasena" type="password" placeholder="Introduce tu contraseña">
      <input name="nombre" type="text" placeholder="Introduce tu nombre">
      <input name="apellidos" type="text" placeholder="Introduce tus apellidos">
      <input type="submit" value="Enviar">
    </form>
    <a href="index.php">Vuelve a la pagina principal.</a>
  </body>
</html>