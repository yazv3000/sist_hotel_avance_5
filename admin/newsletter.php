<?php

include ('db.php');
$eid = $_GET['eid'];
$approval ="Permitido";
$napproval="Sin permitir";

$view="SELECT * from `contacto` where `id` = '$eid' ";
$re = mysqli_query($con,$view);

while ($row=mysqli_fetch_array($re)){
	$id =$row['approval'];
}

if($id=="Sin permitir"){
	$sql ="UPDATE `contacto` SET `approval`= '$approval' WHERE id = '$eid' ";
	if(mysqli_query($con,$sql))
	{
		echo '<script>alert("Nueva habitacion agregada") </script>' ;
		header("Location: messages.php");
	}
}
else {
$sql ="UPDATE `contacto` SET `approval`= '$napproval' WHERE id = '$eid' ";

	if(mysqli_query($con,$sql)){
		echo '<script>alert("New Room Added") </script>' ;
		header("Location: messages.php");
	}
}
?>