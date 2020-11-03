<?php
require 'database.php';

$message = '';

/* Validacion e insercion de informacion introducida por el usuario   */
if (!empty($_POST['nombre']) && !empty($_POST['ape_pat']) && !empty($_POST['ape_mat']) && !empty($_POST['fecha_nac']) && !empty($_POST['colonia']) && !empty($_POST['correo']) && !empty($_POST['contrasena'])) {
    $sql = "INSERT INTO login (nombre,ape_pat, ape_mat, fecha_nac, colonia, correo , contrasena) VALUES (:nombre, :ape_pat, :ape_mat, :fecha_nac, :colonia, :correo, :contrasena)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':ape_pat', $_POST['ape_pat']);
    $stmt->bindParam(':ape_mat', $_POST['ape_mat']);
    $stmt->bindParam(':fecha_nac', $_POST['fecha_nac']);
    $stmt->bindParam(':colonia', $_POST['colonia']);
    $stmt->bindParam(':correo', $_POST['correo']);
   $password = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
    $stmt->bindParam(':contrasena', $_POST['contrasena']);
    if ($stmt->execute()) {
        $message = 'Successfully created new user';
      } else {
        $message = 'Sorry there must have been an issue creating your account';
      }

}
    
?>


   

<DOCTYPE html>
    <html> 
        <head>
<meta charset="utf-8">
<title>REGISTRO</title>
<link rel="stylesheet" href="assets/css/estilos.css">
        </head>
<body> 
<?php
require 'partials/header.php'
    ?>

<?php
if(!empty($message)):
?>
<p><?= $message ?></p>
<?php endif; ?>
    <h1>REGISTRO</h1>
    <span>or <a href="login.php">Iniciar sesion</a></span>
  
    <form action="signup.php" method="post">
    <input type="text" name="nombre" placeholder="Ingrese su Nombre">
    <input type="text" name="ape_pat" placeholder="Ingrese su Apellido Paterno">
    <input type="text" name="ape_mat" placeholder="Ingrese su Apellido Materno">
    <input type="date" name="fecha_nac" placeholder="Ingrese su Fecha de nacimiento">
    <input type="text" name="colonia" placeholder="Ingrese su Colonia donde vive">
    <input type="email" name="correo" value="Ingrese su Correo">
    <input type="password" name="contrasena" placeholder="Ingrese su contraseña">
   
    <input type="submit" value="Enviar ">
</body>
</html>