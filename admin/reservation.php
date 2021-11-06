<?php
    include('db.php')
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
</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i> Página principal</a>
                    </li>
                </ul>
            </div>
        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			    <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header"> RESERVACIÓN - HOTEL VIÑAS QUEIROLO</h1>
                    </div>
                </div> 
                             
                <div class="row">
            
                    <form name="form" method="post">
                    
                    <div class="col-md-6 col-sm-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                INFORMACIÓN PERSONAL
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Título*</label>
                                    <select name="title" class="form-control" required >
                                        <option value selected ></option>
                                        <option value="Sr.">Sr.</option>
                                        <option value="Sra.">Sra.</option>
                                        <option value="Srta.">Sra.</option>
                                        <option value="Dr.">Dr.</option>
                                        <option value="Dra.">Dra.</option>
                                        <option value="Prof.">Prof.</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Nombres</label>
                                    <input name="fname" class="form-control" required>          
                                </div>

                                <div class="form-group">
                                    <label>Apellidos</label>
                                    <input name="lname" class="form-control" required>  
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" type="email" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Nacionalidad*</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="nation"  value="Peruana" checked="">Peruana
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="nation"  value="Extranjera">Extranjera
                                    </label>
                                </div>
                                
                                <?php
                                    $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", 
                                                        "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", 
                                                        "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                                ?>

                                <div class="form-group">
                                    <label>País de Origen*</label>
                                    <select name="country" class="form-control" required>
                                        <option value selected ></option>
                                        <?php
                                            foreach($countries as $key => $value):
                                                echo '<option value="'.$value.'">'.$value.'</option>'; // bucle para agregar cada país como opción seleccionable
                                            endforeach;
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Número telefónico</label>
                                    <input name="phone" type ="text" class="form-control" required>       
                                </div>   
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"> INFORMACIÓN DE RESERVA </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Tipo de habitación*</label>
                                    <select name="troom"  class="form-control" required>
                                        <option value selected ></option>
                                        <option value="Habitacion Superior">HABITACIÓN SUPERIOR</option>
                                        <option value="Habitacion Suite">HABITACIÓN SUITE</option>
                                        <option value="Habitacion Junior">HABITACIÓN JUNIOR</option>
                                        <option value="Habitacion Junior Suite">HABITACIÓN JUNIOR SUITE</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Tipo de cama</label>
                                    <select name="bed" class="form-control" required>
                                        <option value selected ></option>
                                        <option value="Simple">Simple</option>
                                        <option value="Doble">Doble</option>
                                        <option value="Triple">Triple</option>
                                        <option value="Cuadruple">Cuádruple</option>
                                        <option value="Ninguna">Ninguna</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Nº de habitación *</label>
                                    <select name="nroom" class="form-control" required>
                                        <option value selected ></option>
                                        <?php
                                            $con = mysqli_connect("localhost","root","","hotel_queirolo");
                                            $sql = "SELECT COUNT(`id`) FROM `habitaciones`";
                                            $rs = mysqli_query($con, $sql);
                                            $data = mysqli_fetch_array($rs, MYSQLI_NUM);

                                            for($nro = 1; $nro <=$data[0]; $nro++){
                                                echo '<option value="'.$nro.'">'.$nro.'</option>'; // bucle para agregar los número de habitación
                                            }
                                        ?>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Régimen de comidas</label>
                                    <select name="meal" class="form-control"required>
                                        <option value selected ></option>
                                        <option value="Solo habitacion">Sólo habitación</option>
                                        <option value="Desayuno">Desayuno</option>
                                        <option value="Media pension">Media pensión</option>
                                        <option value="Pension completa">Pensión completa</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Fecha de Entrada</label>
                                    <input name="cin" type ="date" class="form-control">              
                                </div>

                                <div class="form-group">
                                    <label>Fecha de Salida</label>
                                    <input name="cout" type ="date" class="form-control">     
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <div class="well">
                            <h4>VERIFICACIÓN HUMANA</h4>
                            <p>Escriba debajo de este código
                                <?php 
                                    $Random_code = rand(); 
                                    echo $Random_code; 
                                ?>
                            </p>
                            <br />

                            <p>Ingrese el código aleatorio<br /></p>

                            <input  type="text" name="rand_code" title="random code" />
                            <input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
                            <input type="submit" name="submit" class="btn btn-primary">
                            
                            <?php
                                if(isset($_POST['submit'])){

                                    // Verifica que el código aleatorio y el ingresado coincidan
                                    $rand_code = $_POST['rand_code'];
                                    $code = $_POST['code']; 

                                    if($rand_code!="$code") {
                                        $msg="Código inválido"; 
                                    }
                                    else {							
                                        $con = mysqli_connect("localhost","root","","hotel_queirolo");

                                        $check = "SELECT COUNT(`id`) FROM `clientes` WHERE `email` = '$_POST[email]'";
                                        $rs = mysqli_query($con, $check);
                                        $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                                        
                                        // Si el cliente no está en la BD, lo agrega
                                        if($data[0] < 1) {
                                            $newUser="INSERT INTO `clientes`(`trato`, `nombres`, `apellidos`, `email`, `nacionalidad`, `pais`, `telef`) 
                                            VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[country]','$_POST[phone]')";
                                    
                                            mysqli_query($con, $newUser);
                                        }

                                        $consulta_idcliente = "SELECT `id` FROM `clientes` WHERE `email` = '$_POST[email]'";
                                        $rs = mysqli_query($con, $consulta_idcliente);
                                        $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                                        $id_cliente = $data[0];

                                        $new ="Sin confirmar";
                                        $newReservation ="INSERT INTO `reservas`(`id_cliente`, `nro_habitacion`, `comidas`, `fecha_entrada`, `fecha_salida`, `estado`, `cant_dias`) 
                                        VALUES ('$id_cliente','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
                                
                                        if (mysqli_query($con, $newReservation)){
                                            echo "<script type='text/javascript'> alert('Su solicitud de reserva ha sido enviada con éxito')</script>";
                                        } else {
                                            echo "<script type='text/javascript'> alert('Error al agregar usuario en la base de datos')</script>";
                                        }
                                        //}

                                        $msg="El código es correcto";
                                    }
                                }
                            ?>	
                        </div>
                    </div>

                    </form>                
                </div>

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

    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

</body>

</html>
