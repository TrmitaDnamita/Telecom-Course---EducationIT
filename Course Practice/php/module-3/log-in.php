<?php
var username = $_POST['username']
if (username != '' && null) {
	var password = $_POST['password']
	if (password != '123456789') {
		echo'Hola ' . ($_POST['username']) . ' Espere mientras lo encontramos entre todos los papeles';
	}
	else {
		echo'Hola '.(username).', Su Contraseña es Incorrecta'
	}
}
else {
	echo'Intenta de nuevo, pero esta vez escribiendo algo.'
}
?>