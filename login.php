<?php
/* Inicio de sesion  */
session_start();

if(isset($_SESSION['id'])){
    //echo "hola";
}

require 'database.php';
/* Autenticacion de usuario registrado */
if (!empty($_POST['correo']) && !empty($_POST['contrasena'])) {
  try{
$email=$_POST['correo'];
  $sql="select id, correo, contrasena FROM login WHERE correo = ?";
    $records = $conn->prepare($sql);
    //$records->bindParam(':correo', $_POST['correo']);
    $records->execute(array($email));
    
    $results= $records->fetch(PDO::FETCH_ASSOC);
    
    $total_records = $records->rowcount();

    $message = '';
    
    if ($total_records == 1){
    $_SESSION['id'] = $results['id'];
    } else {
      $message = 'Sorry, those credentials do not match';
    }
    
  }catch(PDOException $e){
    //echo "Failed" .$e;
  }
}
?>


<DOCTYPE html>
    <html>
        <head>
<meta charset="utf-8">
<title>INICIO DE SESION</title>
<link rel="stylesheet" href="assets/css/estilos.css">
        </head>
<body> 
<?php
require 'partials/header.php'
    ?>
    <h1>INICIO DE SESION</h1>
    <span>or <a href="signup.php">Registrate</a></span>
  <!--mensaje si todo sale bien -->
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

<form action="login.php" method="post">
    <input type="text" name="correo" placeholder="Ingrese su email">
    <input type="password" name="contrasena" placeholder="Ingrese su contraseña">
    <input type="submit" value="Enviar ">
</body>
</html>
