<?php
$username = $_POST['usuario'];
$password = $_POST['contrasenia'];
?>

<p>
	<?="Hola tu nombre es: $username";?>
</p>
<br/>
<p>
	<?="Y tu contraseña es: $password"?>
</p>

<style>
	:root {
		color-scheme: light; 
		/* Se adapta al modo oscuro si el navegador lo permite */
	}
	
	body {
		display: grid;              /* Usa Grid Layout */
		place-content: center;      /* Centra vertical y horizontalmente */
		gap: 50px;                  /* Espacio entre elementos */
		text-align: center;         /* Centra el texto */
	}
	
	p {
		color: #0a2ff1;
		font-size: 32px;
		font-weight: bold;
		text-shadow: 1px 1px 1px black;
	}
</style>