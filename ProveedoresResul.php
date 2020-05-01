<?php



include 'conexion.php';


$id=$_POST['id'];
$empresa=$_POST['empresa'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$fax=$_POST['fax'];

$consulta="INSERT INTO proveedores (NIF,empresa,direccion,telefono,fax) VALUES 
('$id','$empresa','$direccion','$telefono','$fax')";

$ejecutar=mysqli_query($conexion,$consulta);

if ($ejecutar){
  
    echo '<script type="text/javascript"> alert("Agregando correctamente");
            window.location="Proveedores.php"; </script>';
    
   
}else{
    
     echo '<script type="text/javascript"> alert("Error");
            window.location="ProveedoresFor.php"; </script>';
    
}





?>