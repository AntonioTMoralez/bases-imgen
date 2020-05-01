<!DOCTYPE html>
<html lang="es">
   <head>
   	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   	<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>

   	
      <title>Formulario</title>     
      <link rel="stylesheet" href="css/Estilos.css">
 
   </head>
   <body>


<div class="sidenav">
         <div class="login-main-text">
            <h2>Hola  Bienvenido</h2>
            <p>Ingresar los datos del libro</p>
              <a  href="index.php" class="btn btn-black">Volver al inicio</a>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form method="POST" action="Libros_pedidosResul.php">
                  <div class="form-group">
                     <label>ID Libro</label>
                     <input type="text" class="form-control" placeholder="Ingrese ID" name="id">
                  </div>
                  
                  <div class="form-group">
                     <label>Titulo</label>
                     <input type="text" class="form-control" placeholder="Ingrese titulo" name="titulo">
                  </div>
                  
                  <div class="form-group">
                     <label>Autor</label>
                     <input type="text" class="form-control" placeholder="Ingrese autor" name="autor">
                  </div>
                  
                  <div class="form-group">
                     <label>ISBN</label>
                     <input type="text" class="form-control" placeholder="Ingrese ISBN" name="ISBN">
                  </div>
                  
                    <div class="form-group">
                  <label>Solicitado por </label>
                  <select name="usuario" class="browser-default custom-select custom-slect-lg mb-3">
                   <option selected>Elegir Usuario</option>
                   <?php 
                      include 'conexion.php';
                      $consulta="SELECT * FROM usuarios";
                      $ejecutar_user=mysqli_query ($conexion,$consulta) or die (mysqli_error($conexion));
                      
                       $consulta="SELECT * FROM proveedores";
                      $ejecutar_pro=mysqli_query ($conexion,$consulta) or die (mysqli_error($conexion));
                      
                      ?>
                   
                   
                   <?php foreach ($ejecutar_user as $usuarios):?>
                    <option value="<?php echo $usuarios['id_lector']?>"><?php echo $usuarios['nombres']?></option>
                    <?php endforeach ?>
                  </select>
                   </div>
                
                   
                   
                   
                   
                   
                   
                   
                    
                  <div class="form-group">
                  <label>Proveedor</label>
                  <select name="Proveedor" class="browser-default custom-select custom-slect-lg mb-3">
                  <option selected>Elegir proveedor</option>
                   <?php foreach ($ejecutar_pro as $proveedores):?>
                    <option value="<?php echo $proveedores['NIF']?>"><?php echo $proveedores['empresa']?></option>
                    
                    <?php endforeach ?>
                  </select>
                   </div>
                   
                   <div class="form-group">
                     <label>Fecha de Pedido</label>
                     
   
                    <input class="form-control"  type="text" name="pedido" placeholder="Agregar fecha de pedido" onclick="ocultarError();" onfocus="(this.type='date')" onblur="(this.type='text')">
                
                  </div>
                  
                   <div class="form-group">
                     <label>Fecha de Recibido</label>
                     
                     
                    <input class="form-control"  type="text" name="recibido" placeholder="Agregar fecha de recibido" onclick="ocultarError();" onfocus="(this.type='date')" onblur="(this.type='text')">
        
                
                   </div>
                   <div class="form-group">
                     <label>Precio</label>
                     <input type="text" class="form-control" placeholder="Precio" name="precio">
                  </div>
                  
                  
                  
             
                  <button type="submit" class="btn btn-black">Registrar</button>
                  <button type="reset" class="btn btn-black">Limpiar</button>
               
               </form>
            </div>
         </div>
      </div>
<script src="js/jquery-1.11.1.min.js"></script>
   </body>
</html>