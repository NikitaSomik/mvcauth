<?php  


class View
{

	// $path - путь; $data - данные которые будут отображаться
	static function render($path, $data)
	{

		include'views/header.php';
		include'views/'.$path.'.php';
		include'views/footer.php';
	}
}