<?php 
include_once "conexion.php";

if (!empty($_POST['correo']) && !empty($_POST['contra'])) {
    $correo = ($_POST['correo']);
    $pas = ($_POST['contra']);

    $sentencia = $base_de_datos->prepare("SELECT email, password FROM registro WHERE email = ? AND password = ?;");
    $resultado = $sentencia->execute([$correo, $pas]);
    $registro = $sentencia->fetchObject();

    $cor = $registro->email;
    $pa = $registro->password;


    if ($cor = $correo && $pas = $pa) {
       header("Location: index.html");
       
    } else {
       echo "<script>";
       echo "alert ('Error')";
       echo "</script>";
       header("Location: login.php");
    }

    
} else{
    echo "<script>";
    echo "alert ('Usuario no registrado')";
    echo "</script>";
    header("Location: login.php");
} 

?>
