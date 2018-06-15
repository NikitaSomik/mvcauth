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
		$data['title'] = 'Main Page';
		$data['content'] = 'Enter your text!';

		if (!empty($_POST)) {
	
		 	if (empty($_POST['name']) && empty($_POST['surname']) && empty($_POST['email'])) {
		 		Session::setMessage('danger', 'Filds is required');
			}	else {
				if ($purifiedArr = Validator::testInput($_POST)) {
					if ($this->model->addUser($_POST)) {
						Session::set('name', $purifiedArr['name']);
						Session::set('surname', $purifiedArr['surname']);
						Session::set('success', 'Добро пожаловать'.Session::get('name'));
						header('Location: /weather');
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

	public function logout() 
	{
		session::destroy();

	}
}









































