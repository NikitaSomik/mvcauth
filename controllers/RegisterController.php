<?php 
require_once('models/UserModel.php');

class RegisterController extends Controller
{
	public $model;

	public function __construct()
	{
		$this->model = new User();
	}

	public function index()
	{
		//echo __METHOD__;
		$data['title'] = 'Main Page';
		$data['content'] = 'Enter your text!';

		if (!empty($_POST)) {
	
		 	if (empty($_POST['name']) && empty($_POST['surname']) && empty($_POST['email'])) {
		 		Session::setMessage('danger', 'Filds is required');
			}	else {
				if ($this->validation($_POST)) {
					if ($this->model->addUser($_POST)) {
						Session::set('name', $_POST['name']);
						Session::set('surname', $_POST['surname']);
						Session::set('success', 'Добро пожаловать'.Session::get('name'));
						header('Location: /weather');
						//echo "<script>document.location.href='weather';</script>";
					}
				}	else {
						//echo '<pre>', print_r('No'), '</pre>';
				}
			}
		}

		if (isset($_SESSION['name'])) {
    		header('Location: /weather');
  		}	else {
  			View::render('auth/index', compact("arr", "data"));
  		}

		
	}

	public function validation($post)
	{

		$error = [];
		$valid = true;

		foreach ($post as $key => $v) {
			if (($key == 'name' || $key == 'surname')) {
				if (!$this->testInput($v)) {
					$error[] = 'Invalid '.$key;
					$valid = false;
				}
				elseif (ucfirst($v) !== $v) {
					$error[] = 'The first letter '.$key.' must be the capital';
					$valid = false;
				}
				elseif (strlen($v) < 3) {
				 	$error[] = 'The '.$key.' must be at least 3 characters';
				 	$valid = false;
				} 
				elseif (strlen($v) > 25) {
					$error[] = 'The '.$key.'  must be no more than 25 characters';
					$valid = false;
				}	
			}
			elseif ($key == 'email') {
				if (!$this->testInput($v)) {
					$error[] = 'Invalid email';
					$valid = false;
				}	else { 
					if (!filter_var($v, FILTER_VALIDATE_EMAIL)) {
						$error[] = 'Invalid email format'; 
						$valid = false;
					
					} else {
						if ($this->model->checkEmail($v) === false) {
							$error[] = 'Email already exist'; 
							$valid = false;
						} else {
							$succes =  'Email is free'; 
						}
					}	
				}
			}
		}

		Session::setMessage('danger', $error);
		//Session::setMessage('success', $succes);
		return $valid;
	}

	public function testInput($data) 
	{
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}

	public function logout() 
	{
		session::destroy();

	}
}









































