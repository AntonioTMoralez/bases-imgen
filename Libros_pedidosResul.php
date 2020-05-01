<?php



include 'conexion.php';


$id=$_POST['id'];
$titulo=$_POST['titulo'];
$autor=$_POST['autor'];
$ISBN=$_POST['ISBN'];
$usuario=$_POST['usuario'];
$empresa=$_POST['Proveedor'];
$pedido=$_POST['pedido'];
$recibido=$_POST['recibido'];
$precio=$_POST['precio'];

$consulta="INSERT INTO lbros_pedidos (id_documento,titulo,autor,ISBN,pedido,recibido,precio,Solicitado_por,Proveedor) VALUES ('$id','$titulo','$autor','$ISBN','$pedido','$recibido','$precio','$usuario','$empresa')";

$ejecutar=mysqli_query($conexion,$consulta);

if ($ejecutar)

{
   echo '<script type="text/javascript"> alert("Agregando correctamente");
            window.location="Libros_pedidos.php"; </script>';


}else{

     echo '<script type="text/javascript"> alert("Error");
            window.location="Libros_pedidosFor.php"; </script>';

}
