<?php
	$username = $_POST['username'];
	if ($username != null && $username != "") {
		$password = $_POST['password'];
		if ($password === '1234') {
			echo"Hola $username Espere mientras lo encontramos entre todos los papeles";
		}
		else {
			echo'Su Contraseña es Incorrecta';
		}
	}
	else {
		echo'Intenta de nuevo, pero esta vez escribiendo algo.';
	}
?>