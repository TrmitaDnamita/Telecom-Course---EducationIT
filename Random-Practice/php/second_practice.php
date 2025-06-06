<?php
$name = "Fran";
$age = 28;
$birthday = ["day" => "5", "month" => "6", "year" => "1995"];

define(
	'SOME_LOGO', 
	'https://static.educacionit.com/alumni/assets/generic/logo.svg'
);
?>

<?php
	$today = localtime(null, true);
	$born_in_tm_year = (int)$birthday['year'] - 1900;
?>

<?php
	// Calculate the birthday status for the match expression
	$month_diff = (int)$birthday['month'] - ((int)$today['tm_mon'] + 1);
	$day_diff = (int)$birthday['day'] - (int)$today['tm_mday'];
	
	$birthday_case = match (true) {
		$month_diff > 0 => 'not_yet_birthday',
		$month_diff === 0 && $day_diff > 0 => 'not_yet_birthday',
		$month_diff === 0 && $day_diff === 0 => 'birthday_today',
		default => 'already_had_birthday'
	};
	switch ($birthday_case) {
		case 'not_yet_birthday':
			echo "<h2>🎉 Bienvenido/a $name. Pero tenemos un problema ya que tu edad no es $age, tu edad es " . ($today['tm_year'] - $born_in_tm_year - 1) . " 🧮</h2>";
			break;
		case 'birthday_today':
			echo "<h2>🎂 Bienvenido/a $name. Pero tenemos un problema ya que <strong>PARECE QUE ES TU CUMPLEAÑOS!<br/>
			FELIZ CUMPLEAÑOS, FELICES " . ($today['tm_year'] - $born_in_tm_year) . " AÑOS! 🥳</strong></h2>";
			break;
		case 'already_had_birthday':
			echo "<h2>😏 Bienvenido $name. Vemos que tu edad es exactamente ". $today['tm_year'] - $born_in_tm_year . " años... Te querías sacar " . ($actual_age_flag - $age) . " años pillín 😉</h2>";
			break;
		default:
			echo "<h2>✅ Bienvenido $name. Vemos que tu edad es exactamente $age años 🎈</h2>";
	}
?>

<img src="<?= SOME_LOGO ?>" alt="Logo de EducaciónIT">

<?php 
	$someArray = ["C", "C++", "C#", "HTML", "CSS", "JavaScript", "PHP", "Python", "Java", "Ruby", "Swift", "Go", "Rust"];
?>

<ul>
	<?php foreach ($someArray as $programmingLanguages): ?>
		<li><?= $programmingLanguages ?></li>
	<?php endforeach; ?>
</ul>

<style>
	@import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap');
	
	body {
		color-scheme: light dark;
		
		box-sizing: border-box;
		
		font-size: 24px;
		font-family: 'Roboto Slab', sans-serif;
	}
	
	h2 {
		text-align: center;
		color: #41afd1;
	}
	
	img {
		width: 40%;
		
		display: block;
		margin: auto;
	}
	
	ul {
		display: flex;
		flex-direction: row;
		justify-content: space-evenly;
		
		text-decoration: none;
		list-style-type: none;
		
		padding: 0;
	}
	
	li {
		margin: auto;
		color: #4f11af;
		text-shadow: 1px 1px 5px rgba(222, 99, 233, 0.8);
	}
</style>