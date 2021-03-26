<?php require_once 'conexion.php';
$nombre = $_POST['nombres'];
$apellido = $_POST['apellidos'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
if(!empty($_POST[genero])){
    if($genero=="masculino"){
        $genero = 'masculino';
    }
    if($genero=="femenino"){
        $genero = 'femenino';
    }
    if($genero=="indefinido"){
        $genero = 'indefinido';
    }
}
$telefono = $_POST['telefono'];
$correo = $_POST['email'];
$pass = $_POST['password'];

/* Al incluir el archivo "base_datos.php", todas sus objetos están
a nuestra disposición.  */
$sentencia = $base_de_datos->prepare("INSERT INTO registro (nombres, apellidos, edad, genero, telefono, email, password)
 VALUES (?, ?, ?, ?, ?, ?, ?);");

# Pasar en el mismo orden de los ?
$resultado = $sentencia->execute([$nombre, $apellido, $edad, $genero, $telefono, $correo, $pass]);

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario. # Con eso podemos evaluar

if ($resultado === true) {
    # Redireccionar al index
	header("Location: login.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}
?>