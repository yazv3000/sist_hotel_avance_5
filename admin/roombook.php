<?php  
	session_start();  
	if(!isset($_SESSION["user"])){
		header("location:index.php");
	}
?> 

<?php
	if(!isset($_GET["rid"])) {	
		header("location:index.php");
	}
	
	else {
		
		$curdate=date("Y/m/d");

		include ('db.php');
		$id_reserva = $_GET['rid'];
		$sql = "SELECT R.*, C.*, H.* FROM `reservas` R INNER JOIN `clientes` C ON R.id_cliente = C.id INNER JOIN `habitaciones` H on R.nro_habitacion = H.id where R.id = '$id_reserva'";
		$re = mysqli_query($con,$sql);

		while($row=mysqli_fetch_array($re)){
			$title = $row['trato'];
			$fname = $row['nombres'];
			$lname = $row['apellidos'];
			$email = $row['email'];
			$nat = $row['nacionalidad'];
			$country = $row['pais'];
			$Phone = $row['telef'];
			$troom = $row['tipo_habitacion'];
			$nroom = $row['nro_habitacion'];
			$bed = $row['tipo_cama'];
			/*non = $row['NRoom'];*/
			$meal = $row['comidas'];
			$cin = $row['fecha_entrada'];
			$cout = $row['fecha_salida'];
			$sta = $row['estado'];
			$days = $row['cant_dias'];
		}
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
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["user"]; ?> </a>
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
                    </ul> <!-- /.dropdown-user -->
                </li><!-- /.dropdown -->
            </ul>
        </nav><!--/. NAV TOP  -->
        
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a  href="home.php"><i class="fa fa-dashboard"></i> Estado</a>
                    </li>
                    <li>
                        <a href="messages.php"><i class="fa fa-desktop"></i> Boletines informativos</a>
                    </li>
					<li>
                        <a class="active-menu" href="roombook.php"><i class="fa fa-bar-chart-o"></i> Reserva de habitacion</a>
                    </li>
                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Pago</a>
                    </li>
					<li>
                        <a  href="profit.php"><i class="fa fa-qrcode"></i> Lucro</a>
                    </li>
                    
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </nav><!-- /. NAV SIDE  -->

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Reserva de habitacion <small><?php echo  $curdate; ?> </small>
                        </h1>
                    </div>
					
					<div class="col-md-8 col-sm-8">
						<div class="panel panel-info">
							<div class="panel-heading">Confirmación de reserva </div>

							<div class="panel-body">	
								<div class="table-responsive">
									<table class="table">
										<tr>
											<th>DESCRIPCION</th>
											<th>INFORMATION</th>
										</tr>
										
										<tr>
											<th>Cliente:</th>
											<th><?php echo $title." ".$fname." ".$lname; ?> </th>
										</tr>
										
										<tr>
											<th>Email:</th>
											<th><?php echo $email; ?> </th>										
										</tr>

										<tr>
											<th>Nacionalidad:</th>
											<th><?php echo $nat; ?></th>										
										</tr>

										<tr>
											<th>País:</th>
											<th><?php echo $country;  ?></th>										
										</tr>

										<tr>
											<th>Nº Teléfono:</th>
											<th><?php echo $Phone; ?></th>										
										</tr>

										<tr>
											<th>Tipo de la habitación:</th>
											<th><?php echo $troom; ?></th>										
										</tr>

										<tr>
											<th>Nº de habitación:</th>
											<th><?php echo $nroom; ?></th>	
										</tr>

										<tr>
											<th>Tipo de cama:</th>
											<th><?php echo $bed; ?></th>	
										</tr>

										<tr>
											<th>Régimen de comidas:</th>
											<th><?php echo $meal; ?></th>	
										</tr>

										<tr>
											<th>Fecha de entrada:</th>
											<th><?php echo $cin; ?></th>
										</tr>

										<tr>
											<th>Fecha de salida:</th>
											<th><?php echo $cout; ?></th>
										</tr>

										<tr>
											<th>Nº de días:</th>
											<th><?php echo $days; ?></th>	
										</tr>

										<tr>
											<th>Nivel de estado:</th>
											<th><?php echo $sta; ?></th>
										</tr>
									</table>
								</div>
							</div>

							<div class="panel-footer">
								<form method="post">
									<div class="form-group">
										<label>Seleccione el nivel de estado</label>
										<select name="conf"class="form-control">
											<option value selected>	</option>
											<option value="Confirmado">Confirmar Reserva</option>
										</select>
									</div>
									
									<input type="submit" name="co" value="Confirmar" class="btn btn-success">
								</form>
							</div>
						</div>
					</div>
					
					<?php
						$rsql = "SELECT * FROM `habitaciones`";
						$rre= mysqli_query($con,$rsql);
						$r =0 ;
						$sc =0;
						$gh = 0;
						$sr = 0;
						$dr = 0;

						while( $rrow=mysqli_fetch_array($rre) ){
							$r = $r + 1;
							$s = $rrow['tipo_habitacion'];
							$p = $rrow['estado_hab'];

							if($s=="Habitacion Superior"){
								$sc = $sc+ 1;
							}
							
							if($s=="Habitacion Junior"){
								$gh = $gh + 1;
							}

							if($s=="Habitacion Junior Suite"){
								$sr = $sr + 1;
							}

							if($s=="Habitacion Suite"){
								$dr = $dr + 1;
							}
						}
					?>
						
					<?php
						$csql = "SELECT H.tipo_habitacion FROM `pagos` P INNER JOIN `reservas` R ON P.id_reserva = R.id INNER JOIN `habitaciones` H ON H.id = R.nro_habitacion;";
						$cre= mysqli_query($con, $csql);
						$cr =0 ;
						$csc =0;
						$cgh = 0;
						$csr = 0;
						$cdr = 0;
						
						while($crow=mysqli_fetch_array($cre)){
							$cr = $cr + 1;
							$cs = $crow['tipo_habitacion'];
							
							if($cs=="Habitacion Superior"  ){
								$csc = $csc + 1;
							}
							
							if($cs=="Habitacion Junior" ){
								$cgh = $cgh + 1;
							}

							if($cs=="Habitacion Junior Suite" ){
								$csr = $csr + 1;
							}

							if($cs=="Habitacion Suite" ){
								$cdr = $cdr + 1;
							}
						}
					?>

					<div class="col-md-4 col-sm-4">
						<div class="panel panel-default">

							<div class="panel-heading">	Detalles de habitaciones disponibles</div>
							
							<div class="panel-body">
							
								<table width="200px">
									<tr>
										<td><b>Habitación Superior</b></td>
										<td><button type="button" class="btn btn-primary btn-circle">
										<?php  
											$f1 =$sc - $csc;
											if($f1 <=0 ){
												$f1 = "NO";
												echo $f1;
											}
											else{
												echo $f1;
											}
										?> </button></td> 
									</tr>
									<tr>
										<td><b>Habitacion Junior</b>	 </td>
										<td><button type="button" class="btn btn-primary btn-circle">
										<?php 
											$f2 =  $gh -$cgh;
											if($f2 <=0 ){
												$f2 = "NO";
												echo $f2;
											}
											else{
												echo $f2;
											}
										?> </button></td> 
									</tr>
									<tr>
										<td><b>Habitación Junior Suite</b></td>
										<td><button type="button" class="btn btn-primary btn-circle">
										<?php
											$f3 =$sr - $csr;
											if($f3 <=0 ){
												$f3 = "NO";
												echo $f3;
											}
											else{
												echo $f3;
											}
										?> </button></td> 
									</tr>
									<tr>
										<td><b>Habitación Suite</b>	 </td>
										<td><button type="button" class="btn btn-primary btn-circle">
										<?php 
											$f4 =$dr - $cdr; 
											if($f4 <=0 ){
												$f4 = "NO";
												echo $f4;
											}
											else{
												echo $f4;
											}
										?> </button></td> 
									</tr>
									<tr>
										<td><b>Total de habitaciones</b> </td>
										<td> <button type="button" class="btn btn-danger btn-circle">
										<?php 
											$f5 =$r-$cr; 
											if($f5 <=0 ){
												$f5 = "NO";
												echo $f5;
											}
											else{
												echo $f5;
											}
										?></button></td> 
									</tr>
								</table>
							</div>
							
							<div class="panel-footer"></div>
						</div>
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
    
	<!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    
	<!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

</body>

</html>

<?php
	if(isset($_POST['co'])) {	
		$st = $_POST['conf'];

		if($st=="Confirmado") {
			$urb = "UPDATE `reservas` SET `estado`='$st' WHERE id = '$id_reserva'";

			if($f1=="NO" ){
				echo "<script type='text/javascript'> alert('Sorry! Not Available Habitacion Superior')</script>";
			}
			else if($f2 =="NO"){
				echo "<script type='text/javascript'> alert('Sorry! Not Available Habitacion Junior')</script>";
			}
			else if ($f3 == "NO"){
				echo "<script type='text/javascript'> alert('Sorry! Not Available Habitacion Junior Suite')</script>";
			}
			else if($f4=="NO") {
				echo "<script type='text/javascript'> alert('Sorry! Not Available Habitacion Suite')</script>";
			}
			else if( mysqli_query($con,$urb)) {	
				//echo "<script type='text/javascript'> alert('Junior Room booking is conform')</script>";
				//echo "<script type='text/javascript'> window.location='home.php'</script>";
				$type_of_room = 0;       
				
				if($troom=="Habitacion Superior") {
					$type_of_room = 320;
				}
				else if($troom=="Habitacion Suite") {
					$type_of_room = 220;
				}
				else if($troom=="Habitacion Junior") {
					$type_of_room = 180;
				}
				else if($troom=="Habitacion Junior Suite") {
					$type_of_room = 150;
				}
				
				if($bed=="Simple") {
					$type_of_bed = $type_of_room * 1/100;
				}
				else if($bed=="Doble") {
					$type_of_bed = $type_of_room * 2/100;
				}
				else if($bed=="Triple") {
					$type_of_bed = $type_of_room * 3/100;
				}
				else if($bed=="Cuadruple") {
					$type_of_bed = $type_of_room * 4/100;
				}
				else if($bed=="Ninguna") {
					$type_of_bed = $type_of_room * 0/100;
				}
				
				if($meal=="Solo habitacion") {
					$type_of_meal= $type_of_bed * 0;
				}
				else if($meal=="Desayuno") {
					$type_of_meal= $type_of_bed * 2;
				}
				else if($meal=="Media pension") {
					$type_of_meal= $type_of_bed * 3;
				}
				else if($meal=="Pension completa") {
					$type_of_meal= $type_of_bed * 4;
				}
				
				$htot = $type_of_room * $days;
				$ctot = $type_of_meal * $days;
				$btot = $type_of_bed *$days;
				
				$total = $htot + $ctot + $btot ;
					
				//echo "<script type='text/javascript'> alert('$count_date')</script>";
				$psql = "INSERT INTO `pagos`(`id_reserva`, `htot`, `ctot`, `btot`,`total`) VALUES ('$id_reserva','$htot','$ctot','$btot','$total')";

				if(mysqli_query($con, $psql)) {
					$notfree="No disponible";
					$rpsql = "UPDATE `habitaciones` SET `estado_hab`='$notfree' WHERE `id` = $nroom";
					
					if(mysqli_query($con, $rpsql)) {
						echo "<script type='text/javascript'> alert('Reserva confirmada')</script>";
						/*echo "<script type='text/javascript'> window.location='roombook.php'</script>";*/
					}else{
						echo "<script type='text/javascript'> alert('No se pudo actualizar la habitación')</script>";
					}
				}else{
					echo "<script type='text/javascript'> alert('Pago no guardado')</script>";
				}
			}
		}	
	}				
?>