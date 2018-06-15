<?php 
require_once('models/UserModel.php');

class LoginController extends Controller
{	

	public $model;

	public function __construct()
	{
		$this->model = new User();
	}

	public function index()
	{
		$title = 'Login';


		if (!empty($_POST) && isset($_POST['butLog'])) {
			//echo '<pre>', print_r($_POST), '</pre>';
		 	if (empty($_POST['surname']) && empty($_POST['email'])) {
		 		Session::setMessage('danger', 'Filds is required');
			}	else {
				if ($purifiedArr = Validator::testInput($_POST)) {
					if ($findUser = $this->model->checkUser($purifiedArr)) {
						Session::set('name', $purifiedArr['surname']);
						header('Location: /weather');
						//echo '<pre>', print_r($findUser), '</pre>';
					}
					else {
						//var_dump($findUser);
						//echo '<pre>', print_r($findUser), '</pre>';
					}
					
				}
			}
		}

		View::render('auth/login', compact('title'));
	}
}