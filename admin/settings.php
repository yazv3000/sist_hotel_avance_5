<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Viñas Queirolo</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">MENÚ</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
			
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>Perfil del usuario</a>
                        </li>
                        <li>
                            <a href="settings.php"><i class="fa fa-gear fa-fw"></i> Configuraciones</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->

        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a class="active-menu" href="settings.php"><i class="fa fa-dashboard"></i>Estado de la habitación</a>
                    </li>
					<li>
                        <a href="room.php"><i class="fa fa-plus-circle"></i>Agregar habitación</a>
                    </li>
                    <li>
                        <a href="roomdel.php"><i class="fa fa-pencil-square-o"></i> Eliminar habitación</a>
                    </li>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
       
        <div id="page-wrapper" >
            <div id="page-inner">
			    <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Disponible <small> Habitaciones</small>
                        </h1>
                    </div>
                </div> 
                 
                                 
                <?php
                    include ('db.php');
                    $sql =  "SELECT * FROM `habitaciones`";
                    $re = mysqli_query($con, $sql)
                ?>

                <div class="row">
				
				<?php
                    while($row= mysqli_fetch_array($re)){
                        
                        $tipo = $row['tipo_habitacion'];

                        switch ($tipo) {
                            case "Habitacion Superior":
                                $color = "bg-color-blue";
                                $footer_color = "back-footer-blue";
                                break;
                            case "Habitacion Suite":
                                $color = "bg-color-green";
                                $footer_color = "back-footer-green";
                                break;
                            case "Habitacion Junior":
                                $color = "bg-color-brown";
                                $footer_color = "back-footer-brown";
                                break;
                            case "Habitacion Individual":
                                $color = "bg-color-red";
                                $footer_color = "back-footer-red";
                                break;
                        }

                        echo"<div class='col-md-3 col-sm-12 col-xs-12'>
                                <div class='panel panel-primary text-center no-boder $color '>
                                    <div class='panel-body'>
                                        <i class='fa fa-users fa-5x'></i>
                                        <h3>".$row['tipo_cama']."</h3>
                                    </div>
                                    <div class='panel-footer $footer_color'>
                                        ".$row['tipo_habitacion']."

                                    </div>
                                </div>
                            </div>";
                    }
                ?>
                    
                </div>
                <!-- /. ROW  -->

            </div> <!-- /. PAGE INNER  -->
        </div> <!-- /. PAGE WRAPPER  -->
    </div> <!-- /. WRAPPER  -->
     
    
     <!-- JS Scripts-->
    
     <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
</body>

</html>
