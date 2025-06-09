<?php
	// Verificar que se haya enviado el formulario
	//if ($_SERVER["REQUEST_METHOD"] == "POST") { Considerando que existe algun
		// sanitizar los datos de entrada
		$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
		$msg = filter_input(INPUT_POST, "msg", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

		// Enviar el correo electrónico
		$mail_to = "franelasd@gmail.com";
		$mail_subject = "Consulta desde WHosting-WebPage";
		$mail_body = "Nombre: $name Email: $email Mensaje: $msg";
		$mail_headers = "From: $email\r\nReply-To: $email";
		
		//if (mail($mail_to, $mail_subject, $mail_body, $mail_headers)) {
			echo "<h1>Gracias por contactarnos, $name. Nos pondremos en contacto con usted lo antes posible.</h1>";
		//} else {
		//	echo "Error al enviar el correo electrónico. Por favor, intente de nuevo.";
		//}
		echo "<main>" . " <p>Encabezados: $mail_headers</p>" . " <p>cc: $mail_to</p>" . " <p>Asunto: $mail_subject</p>" . " <p>Mensaje: $mail_body</p>" . "</main>";
	//}
?>

<style>
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	
	html {
		color-scheme: light dark;
	}
	
	body {
		width: 70%;
		margin-inline: auto;
		margin-block: 2em;
		font-family: sans-serif;
	}
	
	main {
		margin-block: 4em;
	}
	
	p {
		margin-block: 1em;
		text-align: left;
	}
</style>