<?php
require 'database.php';

if(!empty($_POST['email']) && !empty($_POST['password'])):

  //Enter the new user in database
  $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email,:password);";
  $stmt = $conn -> prepare($sql);

  $stmt->bindParam(':name', $_POST['name']);
  $stmt->bindParam(':email', $_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $stmt->bindParam(':password', $password);

  if( $stmt->execute()):
    $_SESSION["message"] = "Successfully created new user";
    header("Location: signup.php");

  else:
    die('Sorry there must have been some problem');
  endif; 

endif;


?>