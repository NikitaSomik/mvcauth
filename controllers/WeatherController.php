<?php 
require 'vendor/autoload.php';


class WeatherController extends Controller 
{

	function index()
	{

		$data['title'] = 'Weather';


	$html = file_get_contents('http://www.gismeteo.ua/city/daily/5093/');
	$doc = phpQuery::newDocument($html);

	//$content = pq('#weather-daily')->html();

	$wtitle = $doc->find('.typeM')->html();
	$thead = $doc->find('thead')->html();
	$tbody = $doc->find('tbody#tbwdaily1')->html();
	
	//phpQuery::unloadDocument();

		if (isset($_SESSION['name'])) {
			View::render('weather', compact('thead', 'tbody', 'wtitle'));
			//View::render('weather', $html);
		}	else {
			header('Location: /');
		}
	}
}


//echo $p;
//echo '<pre>', print_r($p), '</pre>';
//echo $response->getBody();

// 		$client = new Client();


// 		$response = $client->request('GET', 'http://informer.gismeteo.ru/rss/27612.xml');
// $code = $response->getStatusCode();


// //echo '<pre>', print_r(($response->getBody())), '</pre>';
// //echo '<pre>', print_r(get_class_methods($client)), '</pre>';
// $res = $response->getBody();

// //$res = $response->getBody();
// //var_dump($code);

// echo $res;
// $client = new Client();
// $response = $client->request('GET', 'http://https://allo.ua/');
//echo $res->getStatusCode();
// 200
//echo $res->getHeaderLine('content-type');
// 'application/json; charset=utf8'
//echo $res->getBody();
// '{"id": 1420053, "name": "guzzle", ...}'

// Send an asynchronous request.
// $request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
// $promise = $client->sendAsync($res)->then(function ($response) {
//     echo 'I completed! ' . $response->getBody();
// });
// $promise->wait();
// $reasonphrase = $response->getReasonPhrase();
// $body = $response->getBody();
 
//echo $body;
