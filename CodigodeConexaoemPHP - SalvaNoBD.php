<?php
	include_once('CodigodeConexaoemPHP.php');
    $email = $_POST['email'];
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$password = $_POST['password'];
	
	$result_msg_contato = "INSERT INTO clientes ( email, name, lastname, password) VALUES ('$email', '$name', '$lastname', '$password', NOW())";
	$resultado_msg_contato= mysqli_query($conn, $result_msg_contato)
?>