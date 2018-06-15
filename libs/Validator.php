<?php 	
require_once('models/UserModel.php');

	
class Validator 
{

	public static function validation($post)
	{	
		$purifiedArr = [];
		$error = [];
		$valid = true;
		
		$model = new User();

		foreach ($post as $key => $v) {
			if (($key == 'name' || $key == 'surname')) {
				if (ucfirst($v) !== $v) {
					$error[] = 'The first letter '.$key.' must be the capital';
					$valid = false;
				}
				elseif (strlen($v) < 3) {
					echo '<pre>', print_r($post), '</pre>';
				 	$error[] = 'The '.$key.' must be at least 3 characters';
				 	$valid = false;
				} 
				elseif (strlen($v) > 25) {
					$error[] = 'The '.$key.'  must be no more than 25 characters';
					$valid = false;
				}
			}	elseif ($key == 'email') {
				if (!filter_var($v, FILTER_VALIDATE_EMAIL)) {
					$error[] = 'Invalid email format'; 
					$valid = false;
				} else {
					if ($model->checkEmail($v) === false) {
						$error[] = 'Email already exist'; 
						$valid = false;
					} else {
						$succes =  'Email is free'; 
					}
				}	
			}	elseif ($key == 'emailLogin') {
				if (!filter_var($v, FILTER_VALIDATE_EMAIL)) {
					$error[] = 'Invalid email format'; 
					$valid = false;
				} else {
					if ($model->checkEmail($v) === false) {
						//$succes =  'Email is free'; 
					} else {
						$error[] = 'These credentials do not match our records.'; 
						$valid = false;
						
					}
				}	
			}

			if ($valid !== false) {
				$purifiedArr[$key] = $v;
			}
		}

		if (!empty($error)) {
			Session::setMessage('danger', $error);	
			return false;
		}

		//Session::setMessage('success', $succes);
		return $purifiedArr;
	}

	public function testInput($datas) 
	{
		$newArr = [];

		if (isset($datas['butLog'])) {
			
				if ($datas['email']) {
					$datas['emailLogin'] = $datas['email'];
					unset($datas['email']);	
				}
			}
			
		foreach ($datas as $key => $data) {	
			//if ($key !== 'butReg') {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);

  				$newArr[$key] = $data;
  			//}
  		}
  		//echo '<pre>', print_r($newArr), '</pre>';
  		if ($purifiedArr = self::validation($newArr)) {
  			return $purifiedArr;
  		}	else {
  		 	return false;
  		}
	}

}
