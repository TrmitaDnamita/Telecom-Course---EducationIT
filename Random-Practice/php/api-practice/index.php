<?php require_once "functions.php"?>

<?php $mData = get_datadump(); ?>

<?php require_once "html-head.php"?>
<body>
	<main>
		<section>
			<h1>
				<?=$mData["title"]?>
			</h1>
			<img 
				src="<?=$mData["poster"]?>" 
				alt="<?=$mData["title"] . " (" . $mData["type"] . ")" ?>"
			/>
		</section>
		<hgroup>
			<h3>
				<?=get_daysleftmessage($mData["days-to"])?>
			</h3>
			<p>
				<?= get_spanishdate($mData["date"]) ?>
			</p>
		</hgroup>
		<div>
			<aside>
				<?= $mData["description"] ?>
			</aside>
			<aside>
				Luego de 
				<?= $mData["title"] . " " ?> 
				se espera el estreno de 
				<span>
					<?= $mData['next-title']?>
				</span>
				el dia 
				<?= get_spanishdate($mData["next-date"]) ?>
			</aside>
		</div>
	</main>
</body>

<!-- Linea 1, Alternativa.
<php?
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
?php> 
-->