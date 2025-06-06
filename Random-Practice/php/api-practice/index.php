<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>La Proxima Película de Superheroes</title>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@exampledev/new.css@1.1.2/new.min.css">
</head>

<?php 
	const API_URL = "https://whenisthenextmcufilm.com/api";
	#Curl Handler, iniciar una nueva sesión de cURL.
	$ch = curl_init(API_URL);
	//Iniciamos con la peticion al API de los datos
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	//Ejecutar la peticion y guardar el resultado
	$result = curl_exec($ch);
	//Cerrar la sesion
	curl_close($ch);
	//Decodificar el JSON
	$data = json_decode($result, true);
?>

<body>
	<main>
		<section>
			<h1><?=$data["title"]?></h1>
			<img 
				src="<?=$data["poster_url"]?>" 
				alt="<?=$data["title"] . " (" . $data["type"] . ")" ?>"
			/>
		</section>
		<hgroup>
			<h3>Faltan <?= $data["days_until"] . " " ?>Dias para su Estreno!</h3>
			<p><?= $data["release_date"] ?></p>
		</hgroup>
		<div>
			<aside><?= $data['overview'] ?></aside>
			<aside>
				Luego de <?= $data["title"] . " " ?>
				se espera el estreno de <span><?= $data["following_production"]["title"]?></span>
				el dia <?= $data["following_production"]["release_date"] ?>
			</aside>
		</div>
	</main>
</body>

<style>
	body {
		box-sizing: border-box;
		text-align: center;
	}
	
	h1 {
		text-align: center;
	}
	
	img {
		width: 60%;
		
		display: block;
		margin: 25px auto;
	}
	span {
		font-weight: bold;
		background-color:rgba(78, 143, 218, 0.5);
		border-radius: 2px;
	}
</style>