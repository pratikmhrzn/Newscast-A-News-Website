<?php
require 'database.php';

if(!empty($_POST['title']) && !empty($_POST['body']) && !empty($_POST['category_id'])):

  //Enter the new user in database
  $sql = "INSERT INTO news (title, body, category_id) VALUES (:title, :body,:category_id);";
  $stmt = $conn -> prepare($sql);

  $stmt->bindParam(':title', $_POST['title']);
  $stmt->bindParam(':body', $_POST['body']);
  $stmt->bindParam(':category_id', $_POST['category_id']);

  if( $stmt->execute()):
    $_SESSION["message"] = "Successfully created new news";
    header("Location: add.php");

  else:
    die('Sorry there must have been some problem');
  endif; 

endif;