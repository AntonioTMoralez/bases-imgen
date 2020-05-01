<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tabla Proveedores</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>



<body>
    <div class="page-wrapper">

        <!-- HEADER MOBILE-->
          <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img style="color:#ffffff;font-size: 25px; " alt="Tabla Proveedores" />
                        </a>
                    </div>
                   
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-table"></i>Tablas
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="Usuarios.php">Usuarios</a>
                                    </li>
                                    <li>
                                        <a href="Libros_pedidos.php">Libros Pedidos</a>
                                    </li>
                                  
                                    
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-download"></i>Descargar
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="codigo.php">Codigo fuente</a>
                                        
                                    </li>
                                   
                                    <li>
                                    <a href="anexos.php">Anexos</a>
                                </li>
                                
                                    
                                </ul>
                            </li>
                            
                              <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-eye"></i>Ver
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="index.html">Codigo fuente</a>
                                    </li>
                                   
                                   
                                    
                                </ul>
                            </li>
                         
                        </ul>
                    </div>
                    
                </div>
            </div>
        </header>
            
            <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img style="color:#ffffff;font-size: 25px; " alt="Tabla Proveedores" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Tablas</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="Usuarios.php">Usuarios</a>
                                </li>
                                <li>
                                    <a href="Libros_pedidos.php">Libros pedidos</a>
                                </li>
                              
                                
                            </ul>
                        </li>
                       
                       <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-download"></i>Descargas</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="codigo.php">Codigo fuente</a>
                                </li>
                                <li>
                                    <a href="anexos.php">Anexos</a>
                                </li>
                                
                            </ul>
                        </li>
                       
                          <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-eye"></i>Ver</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Codigo fuente</a>
                                </li>
                               
                                
                            </ul>
                        </li>
                       

                        
                    </ul>
                </div>
            </nav>
        </header>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <?php
                      include 'conexion.php';
                      $consulta="SELECT * FROM proveedores";
                      $ejecutar=mysqli_query ($conexion,$consulta) or die (mysqli_error($conexion));


                      ?>
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Id Proveedores</th>
                                                <th>Empresa</th>
                                                <th>Direcci&oacute;n</th>
                                                <th class="text-right">Telefono</th>
                                                <th class="text-right">Fax</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php foreach ($ejecutar as $proveedores):?>
                                            <tr>




                                                <td> <?php echo $proveedores['NIF']?></td>
                                                <td> <?php echo $proveedores['empresa']?></td>
                                                <td> <?php echo $proveedores['direccion']?></td>
                                                <td class="text-right"> <?php echo $proveedores['telefono']?></td>
                                                <td class="text-right"> <?php echo $proveedores['fax']?></td>


                                            </tr>
                                          <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- USER DATA-->
                            <a href="index.php" class="btn btn-black">Regresar a inicio</a>
                                <a href="ProveedoresFor.php" class="btn btn-black">Ingresar nuevo proveedor</a>
                                <!-- END USER DATA-->
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2020 <a href="#">By The moralez</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
