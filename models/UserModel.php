<?php 

class User extends Model
{


	function addUser($add)
	{
			//var_dump($add);
		//echo '<pre>', print_r($add['name']), '</pre>';
	//$sql = "INSERT INTO users(name, surname, email, gender, birthday) VALUES(:name, :surname, :email, :gender, :birthday)";

		$this->pdo->query("INSERT INTO users(name, surname, email, gender, birthday) VALUES('{$add['name']}', '{$add['surname']}', '{$add['email']}', '{$add['gender']}', '{$add['birthday']}') ");
	// $stmt = $this->pdo->prepare($sql);

	// $stmt->bindParam(':name', $add['name']);
 //  	$stmt->bindParam(':surname', $add['surname']);
 //  	$stmt->bindParam(':email', $add['email']);
 //  	$stmt->bindParam(':gender', $add['gender']);
 //  	$stmt->bindParam(':birthday', $add['birthday']);

 //   	$stmt->execute(); 
	//$this->link->query("INSERT INTO users(name, surname, email, birthday, gender) VALUES('{$d['name']}', '{$d['$surname']}', '{$d['email']}', '{$d['birthdayData']}'), '{$d['gender']}' ");

		return true;

	}

	public function checkEmail($email)
	{		
		$bool = true;

		$sql_check = 'SELECT EXISTS( SELECT email FROM users WHERE email = :email)';
		$stmt = $this->pdo->prepare($sql_check);
		$stmt->execute( [':email' => $email] );

		if ($stmt->fetchColumn()) {
			var_dump($stmt->fetchColumn());
			$bool = false;
		}

		return $bool;
	}
}