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
            <p>Ingresar los datos del proveedor</p>
              <a  href="index.php" class="btn btn-black">Volver al inicio</a>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form method="POST" action="ProveedoresResul.php">
                  <div class="form-group">
                     <label>ID proveedor</label>
                     <input type="text" class="form-control" placeholder="Ingresar un ID" name="id">
                  </div>
                  
                  <div class="form-group">
                     <label>Empresa</label>
                     <input type="text" class="form-control" placeholder="Ingresar Empresa" name="empresa">
                  </div>
                  
                  <div class="form-group">
                     <label>Direcci&oacute;n</label>
                     <input type="text" class="form-control" placeholder="Ingresar Direcci&oacute;n" name="direccion">
                  </div>
                  
                  <div class="form-group">
                     <label>Telefono</label>
                     <input type="text" class="form-control" placeholder="Ingresar Telefono" name="telefono">
                  </div>
                  
                  <div class="form-group">
                     <label>Fax</label>
                     <input type="text" class="form-control" placeholder="Ingresar Fax" name="fax">
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