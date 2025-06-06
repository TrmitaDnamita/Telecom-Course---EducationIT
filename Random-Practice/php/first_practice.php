<!-- Título principal generado con PHP -->
<h1>
	<?php echo "Hola World" // imprime texto usando PHP ?>
</h1>

<!-- Título secundario usando la sintaxis corta de PHP -->
<h2>
	<?= "Funciona?.. IT'S ALIVE!"; // equivalente a echo ?>
</h2>

<?php
	// Si el parámetro 'roll' está presente en la URL, genera un número del 1 al 20
	$number = isset($_GET['roll']) ? rand(1, 20) : null;
?>

<!-- Botón dentro de un enlace que recarga la página con ?roll=1 para activar el código PHP -->
<a href="?roll=1">
	<!-- OJO: los estilos CSS deben usar ':' no '=' -->
	<button style="padding: 10px; margin: 10px">
		Press For D20 Luck (PHP)
	</button>
</a>

<?php if ($number !== null): ?>
	<!-- Si se generó un número, lo muestra -->
	<h2>Su D20 fue de: <?= $number ?></h2>
<?php endif; ?>

<!-- Segundo botón que usa solo JavaScript, sin recargar la página -->
<button 
	onclick="rollD8()" 
	style="padding: 10px; margin: 10px"
>
	Press For D8 Luck (JS)
</button>

<!-- Elemento donde se mostrará el resultado de la tirada de D8 -->
<h2 id="result">-</h2>

<!-- Estilos visuales para centrar el contenido -->
<style>
	:root {
		color-scheme: light dark; /* Se adapta al modo oscuro si el navegador lo permite */
	}
	
	body {
		display: grid;              /* Usa Grid Layout */
		place-content: center;      /* Centra vertical y horizontalmente */
		gap: 50px;                  /* Espacio entre elementos */
		text-align: center;         /* Centra el texto */
	}
</style>

<!-- Script en JavaScript para generar un número aleatorio del 1 al 8 -->
<script>
function rollD8() {
    const number = Math.floor(Math.random() * 8) + 1; // genera un número entre 1 y 8
    document.getElementById('result').innerText = `Su D8 fue de: ${number}`; // muestra el número
}
</script>