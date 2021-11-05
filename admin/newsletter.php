<?php

include ('db.php');
$eid = $_GET['eid'];
$approval ="Permitido";
$napproval="Sin permitir";

$view="SELECT * from `contacto` where `id` = '$eid' ";
$re = mysqli_query($con,$view);

while ($row=mysqli_fetch_array($re)){
	$id =$row['aprobado'];
}

if($id=="Sin permitir"){
	$sql ="UPDATE `contacto` SET `aprobado`= '$approval' WHERE id = '$eid' ";
	if(mysqli_query($con,$sql))
	{
		echo '<script>alert("Nueva habitacion agregada") </script>' ;
		header("Location: messages.php");
	}
}
else {
$sql ="UPDATE `contacto` SET `aprobado`= '$napproval' WHERE id = '$eid' ";

	if(mysqli_query($con,$sql)){
		echo '<script>alert("Esta persona ahora está suscrita para recibir boletines informativos") </script>' ;
		header("Location: messages.php");
	}
}
?>