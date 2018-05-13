<?php 

class WeatherController extends Controller 
{

	function index()
	{

		$data['title'] = 'Weather';

		if (isset($_SESSION['name'])) {
			View::render('weather', $data);
		}	else {
			header('Location: /');
		}
		
	}
}