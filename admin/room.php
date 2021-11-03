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
    <title> Hotel Viñas Queirolo</title>
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
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> Perfil del usuario</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Configuraciones</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a>
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
                        <a  href="settings.php"><i class="fa fa-dashboard"></i>Estado de las habitaciones</a>
                    </li>
					<li>
                        <a  class="active-menu" href="room.php"><i class="fa fa-plus-circle"></i>Agregar habitación</a>
                    </li>
                    <li>
                        <a  href="roomdel.php"><i class="fa fa-desktop"></i>Eliminar habitación</a>
                    </li>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
       
        
       
        <div id="page-wrapper" >
            <div id="page-inner">
			    <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                          NUEVA HABITACIÓN <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                         AGREGAR NUEVA HABITACIÓN
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                <label> Tipo de habitación*</label>
                                <select name="troom"  class="form-control" required>
                                    <option value selected ></option>
                                    <option value="Habitacion Superior">HABITACIÓN SUPERIOR</option>
                                    <option value="Habitacion Suite">HABITACIÓN SUITE</option>
                                    <option value="Habitacion Junior">HABITACIÓN JUNIOR</option>
                                    <option value="Habitacion Individual">HABITACIÓN INDIVIDUAL</option>
                                </select>
                            </div>
							  
							<div class="form-group">
                                    <label>Tipo de cama</label>
                                    <select name="bed" class="form-control" required>
                                        <option value selected ></option>
                                        <option value="Simple">Simple</option>
                                        <option value="Doble">Double</option>
                                        <option value="Triple">Triple</option>
                                        <option value="Cuadruple">Cuádruple</option>
                                        <option value="Ninguna">Ninguna</option>                                                                                     
                                    </select>         
                            </div>
							
                            <input type="submit" name="add" value="Agregar Nueva" class="btn btn-primary"> 
						</form>
							<?php
							    include('db.php');
                                if(isset($_POST['add'])) {
                                    $room = $_POST['troom'];
                                    $bed = $_POST['bed'];
                                    $place = 'Disponible';
                                    
                                    $check="SELECT COUNT(`id`) FROM `habitaciones` WHERE `tipo_habitacion` = '$room' AND `tipo_cama` = '$bed'";
                                    $rs = mysqli_query($con, $check);
                                    $data = mysqli_fetch_array($rs, MYSQLI_NUM);

                                    if($data[0] >= 1) {
                                        echo "<script type='text/javascript'> alert('La habitación ya existe')</script>";  
                                    }

                                    else {
                                        $sql ="INSERT INTO `habitaciones` (`tipo_habitacion`, `tipo_cama`, `estado_hab`) VALUES ('$room','$bed','$place')" ;
                                        if(mysqli_query($con,$sql)) {
                                            echo '<script>alert("¡ Habitación agregada !") </script>' ;
                                        } else {
                                            echo '<script>alert("Error. Verifique el sistema") </script>' ;
                                        }
                                    }
                                }
							?>
                        </div>
                    </div>
                </div>
                
                  
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                INFORMACIÓN DE HABITACIONES
                            </div>
                            <div class="panel-body">
                        
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <?php
                                    $sql = "SELECT * FROM `habitaciones`";
                                    $re = mysqli_query($con,$sql)
                                ?>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>ID Habitacion</th>
                                                    <th>Tipo de Habitacion</th>
                                                    <th>Tipo de cama</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                            <?php
                                                while($row = mysqli_fetch_array($re)) {
                                                    
                                                    $id = $row['id'];
                                                    
                                                    if($id % 2 == 0) {
                                                        echo "<tr class=odd gradeX>";
                                                    } else  {
                                                        echo "<tr class=even gradeC>";
                                                    }
                                                    
                                                    echo"<td>".$row['id']."</td>
                                                        <td>".$row['tipo_habitacion']."</td>
                                                        <th>".$row['tipo_cama']."</th>
                                                        </tr>";
                                                }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                            <!--End Advanced Tables -->   
                        
                            </div>
                            
                        </div>
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
			 
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
