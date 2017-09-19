<?php
require_once "database.php";

	if (!empty($_POST['email']) && !empty($_POST['password'])):

		$records = $conn->prepare('SELECT id,name,password FROM users WHERE email = :email ');
		$records->bindParam(':email',$_POST['email']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);

		if(count($results) > 0 && password_verify($_POST['password'], $results['password'])){
			$_SESSION['user_id'] = $results['id'];
			header("Location: index.php");
		} 
		else {
			$_SESSION['message'] = "Sorry email or password not matched";
			header("Location: login.php");
		}

	endif;


?>
