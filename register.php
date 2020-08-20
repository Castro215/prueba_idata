<?php 
	$nombre=$_POST['name'];
	$apellido=$_POST['ape'];
	$telefono=$_POST['tel'];
	$correo=$_POST['email'];
	$años=$_POST['years'];

    $con = new mysqli("localhost", "root", "", "prueba_idata");
    $bd=$con->query("INSER INTO user (name, ape, tel, email, years) VALUES ('$nombre','$apellido','$telefono', '$correo', '$años')");	
    ?>