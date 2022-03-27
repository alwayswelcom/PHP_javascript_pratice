<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /practica_javascript/usuarios.php');
  }
  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['contrasena'])) {
    $records = $conn->prepare('SELECT id_usuarios, email, contrasena FROM usuarios WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['contrasena'], $results['contrasena'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /practica_javascript/usuarios.php");
    } else {
      $message = 'Perdona, tu contraseña o email no coinciden.';
    }
  }

?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/estilos_registro.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css"> 
    <link rel="stylesheet" type="text/css" href="css/estilos.css"> 
<link rel="stylesheet" href="css/estilos_registro.css">  
<link rel="stylesheet" type="text/css" href="css/FeedEk.css"/>
<link rel="stylesheet" type="text/css" href="css/jquery.jgrowl.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  </head>
  <body>
  <?php require 'partials/header.php' ?>
  <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
  <section id="div_seccion_principal">
        <div class="div_seccion_principal">
<section id= "div_login">
    <div class="div_login" >
<h1>Registrate o Inicia sesion</h1>

      <a href="registro.php">Registrate</a> o
      <a>Introduce tus datos.</a>
    </div>
</section>
<form action="contact.php" method="POST">
      <input name="email" type="text" placeholder="Introduzca su Email">
      <input name="contrasena" type="password" placeholder="Introduzca su contraseña">
      <input type="submit" value="Enviar" class="submit">
    </form>
<a href="index.html">Vuelve a la pagina principal.</a>
</body>
</html>