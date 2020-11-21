<?php
session_start();
require 'database.php';

/*
if(isset($_SESSION['id'])){
    $records= $conn->prepare('SELECT id,correo,contraseña from login where id = :id');
    $records->binParam(':id',$_SESSION['id']);
    $records->excecute();
    $results= $records->fetch(PDO::FETCH_ASSOC);
    
    $user=null;
    if(count($results)==1){
        $user=$results;

    }
}
*/
?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>INICIO</title>
</head>
<body>
<link rel="stylesheet" href="assets/css/estilos.css">
    <!--Opcional para el encabezado-->
    <?php
require 'partials/header.php'
    ?>
    <?php if(!empty($user)): ?>
    <br>BIENVENIDO.<?=$user['correo'] ?>
    <br>Inicio de sesion exitoso
    <a href="logout.php">Cerrar sesion</a>
    <?php else: ?>
<h1>BIENVENIDO</h1>
<!--link a la hoja de estilos-->
<link rel="stylesheet" href="assets/css/estilos.css">
<a href="login.php">Iniciar sesion</a> or
<a href="signup.php">Registrarse</a>
    <?php endif; ?>

</body>
</html>
