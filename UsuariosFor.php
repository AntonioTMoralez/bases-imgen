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
            <p>Ingresar los datos del Usuario</p>
              <a  href="index.php" class="btn btn-black">Volver al inicio</a>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form method="POST" action="UsuariosResul.php">
                  <div class="form-group">
                     <label>ID Lector</label>
                     <input type="text" class="form-control" placeholder="Ingresar ID" name="id">
                  </div>
                  
                  <div class="form-group">
                     <label>Apellido</label>
                     <input type="text" class="form-control" placeholder="ingrese sus Apellidos" name="apellido">
                  </div>
                  
                  <div class="form-group">
                     <label>Nombre</label>
                     <input type="text" class="form-control" placeholder="Ingrese sus Nombres" name="nombre">
                  </div>
                  
                  <div class="form-group">
                     <label>Direcci&oacute;n</label>
                     <input type="text" class="form-control" placeholder="Ingrese su Direcci&oacute;n" name="direccion">
                  </div>
                  
                      <div class="form-group">
                     <label>Telefono</label>
                     <input type="text" class="form-control" placeholder="Ingrese su Telefono" name="telefono">
                  </div>
                  
                      <div class="form-group">
                     <label>Correo Electronico</label>
                     <input type="text" class="form-control" placeholder="Ingrese su Correo" name="correo">
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