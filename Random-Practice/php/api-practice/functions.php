<?php 
	function get_datadump() {
		$dataDump = get_marveldata();
		return [
			'title'       => $dataDump['title'],
			'date'        => $dataDump['release_date'],
			'type'        => $dataDump['type'],
			'poster'      => $dataDump['poster_url'],
			'days-to'     => $dataDump['days_until'],
			'description' => $dataDump['overview'],
			'next-title'  => $dataDump['following_production']['title'] ?? "Desconocido",
			'next-date'  	=> $dataDump['following_production']['release_date'] ?? "Desconocido"
		];
	}
	
	function get_marveldata() {
		return json_decode(
			file_get_contents("https://whenisthenextmcufilm.com/api"), 
			true
		);
	}
	
	function get_daysleftmessage(int $days) {
		return match (true) {
			$days === 0 => "Se esta estrenando en este momento!",
			$days === 1 => "Un dia mas para su Estreno!",
			$days < 7 	=> "En esta semana se Estrena! apenas $days Dias!",
			$days < 30  => "Ya rompimos la barrera del Mes! $days Dias mas!",
			default			=> "Faltan $days Dias para su Estreno!"
		};
	}
	
	function get_spanishdate(string $date) {
		$day = substr($date, -2);
		$month = substr($date, -5, 2);
		$year = substr($date, -10, 4);
		return $day . '/' . $month . '/' . $year;
	}
?>