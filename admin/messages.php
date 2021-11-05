<?php  
    session_start();  
    if( !isset($_SESSION["user"]) ) {
        header("location:index.php");
    }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Viñas Queirolo</title>
	
    <link rel="shortcut icon" type="image/png" href="../images/flaticon.png">

    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

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
                <a class="navbar-brand" href="home.php"><?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="usersetting.php"><i class="fa fa-user fa-fw"></i> Perfil del usuario</a>
                        </li>
                        <li>
                            <a href="settings.php"><i class="fa fa-gear fa-fw"></i> Configuraciones</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a>
                        </li>
                    </ul><!-- /.dropdown-user -->
                </li><!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->

        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="home.php"><i class="fa fa-dashboard"></i>Estado</a>
                    </li>
                    <li>
                        <a class="active-menu" href="messages.php"><i class="fa fa-desktop"></i> Boletines informativos</a>
                    </li>
					<li>
                        <a href="roombook.php"><i class="fa fa-bar-chart-o"></i>Reserva de habitacion</a>
                    </li>
                    <li>
                        <a href="Payment.php"><i class="fa fa-qrcode"></i> Pago</a>
                    </li>
                    <li>
                        <a  href="profit.php"><i class="fa fa-qrcode"></i> Lucro</a>
                    </li>
                    <li>
                        <a href="logout.php" ><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a>
                    </li>  
            </div>
        </nav>
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper" >
            <div id="page-inner">
			    <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header"> Boletines informativos </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
				
                <?php
                    include('db.php');
                    $mail = "SELECT * FROM `contacto`";
                    $rew = mysqli_query($con,$mail);    
                ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="jumbotron">
                            <h3>Enviar boletines de noticias a los seguidores </h3>
                            
                            <?php
                                while( $rows = mysqli_fetch_array($rew) ){
                                    $app=$rows['aprobado'];
                                    if($app=="Permitido") {  
                                    }
                                }
						    ?>
                        
                            <br><br>

                            <div class="panel-body">
                                <button class="btn btn-primary btn" data-toggle="modal" data-target="#myModal">
                                Enviar nuevos boletines de noticias
                                </button>

                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">
                                                    Redactar Boletín
                                                </h4>
                                            </div>

                                            <form method="post">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Título</label>
                                                        <input name="title" class="form-control" placeholder="Ingrese un Título">
                                                    </div>
                                                </div>

                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Tema</label>
                                                        <input name="subject" class="form-control" placeholder="Ingrese el asunto">
                                                    </div>
                                                </div>

                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="comment">Noticias</label>
                                                        <textarea name="news" class="form-control" rows="5" id="comment"></textarea>
                                                    </div>
                                                </div>
                                            
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerca</button>
                                                    <input type="submit" name="log" value="Send" class="btn btn-primary">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
						
                            <?php

                                if( isset($_POST['log']) ) {	
                                    $log ="INSERT INTO `noticias`(`titulo`, `asunto`, `contenido`) VALUES ('$_POST[title]','$_POST[subject]','$_POST[news]')";
                                    
                                    if(mysqli_query($con,$log)){
                                        echo '<script>alert("Boletín guardado") </script>' ;		
                                    }	
                                }
                            ?>
                        </div>
                    </div>
                </div><!-- /. ROW  -->
            
                <?php
                    
                    $sql = "SELECT * FROM `contacto`";
                    $re = mysqli_query($con,$sql);
                    
                ?>

                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Numero celular</th>
                                                <th>Email</th>
                                                <th>Fecha</th>
                                                <th>Estado</th>
                                                <th>Aprobación</th>
                                                <th>Retirar</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            
                                        <?php
                                            while($row = mysqli_fetch_array($re)){
                                            
                                                $id = $row['id'];
                                                
                                                if( $id % 2 ==1 ) {
                                                    echo  "<tr class='gradeC'>";
                                                }
                                                else {
                                                    echo "<tr class='gradeU'>";
                                                }
                                                echo   "<td>".$row['nombre_completo']."</td>
                                                        <td>".$row['nro_telefono']."</td>
                                                        <td>".$row['email']."</td>
                                                        <td>".$row['fecha_contacto']."</td>
                                                        <td>".$row['aprobado']."</td>
                                                        <td><a href=newsletter.php?eid=".$id." <button class='btn btn-primary'> <i class='fa fa-edit' ></i> Permission</button></td>
                                                        <td><a href=newsletterdel.php?eid=".$id ." <button class='btn btn-danger'> <i class='fa fa-edit' ></i> Delete </button></td>		
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
                </div><!-- /. ROW  -->

            </div><!-- /. PAGE INNER  -->
        </div><!-- /. PAGE WRAPPER  -->
    </div><!-- /. WRAPPER  -->     
    
    
    <!-- JS Scripts-->
    
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    
    <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
    
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
</body>

</html>
