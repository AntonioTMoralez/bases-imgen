<?php



include 'conexion.php';


$id=$_POST['id'];
$apellido=$_POST['apellido'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];

$consulta="INSERT INTO usuarios (id_lector,apellidos,nombres,direccion,telefono,correo_electronico) VALUES ('$id','$apellido','$nombre','$direccion','$telefono','$correo')";

$ejecutar=mysqli_query($conexion,$consulta);

if ($ejecutar)
    
{
   echo '<script type="text/javascript"> alert("Agregando correctamente");
            window.location="Usuarios.php"; </script>';
    
   
}else{
    
     echo '<script type="text/javascript"> alert("Error");
            window.location="UsuariosFor.php"; </script>';
    
}




?>