<?php 


class Route
{

	function __construct(){
		$url = isset($_GET['url'])?$_GET['url']:'Home';// существует, то запишим, иначе на главную страницу Home
		$url = explode('/', $url);// разбиваем строку url. Url - массив
		//var_dump($url);

		// подключаем контроллер
		/*
		/             $url[0]='Home'
		/user 		  $url[0]='user'
		/user/login   $url[0]='user', $user[1]='login'
		*/
		$contr = $url[0].'Controller';// Название файла
		if (file_exists('controllers/'.$contr.'.php')) {
			
			require_once('controllers/'.$contr.'.php');
			$controller = new $contr();	

			$method = (isset($url[1])?$url[1]:'index');
			if (method_exists($controller, $method)) {// если есть,то выводим
				if (isset($url[2])) {
					$controller->$method($url[2]);// у контроллера вызываем метод
				}
				else{
					$controller->$method(); // у контроллера вызываем метод
				}
				
			}
			else{echo '<h1>Page not found!</h1>';}
		}
		else{
			echo '<h1>Page not found!</h1>';
		}
	}

}