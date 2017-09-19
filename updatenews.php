<?php
require 'database.php';

if(!empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['body']) && !empty($_POST['category_id'])):

  //Enter the new user in database
  $sql = "UPDATE news  SET title=:title, body=:body, category_id=:category_id WHERE id=:id;";
  $stmt = $conn -> prepare($sql);

  $stmt->bindParam(':id',$_POST['id']);
  $stmt->bindParam(':title', $_POST['title']);
  $stmt->bindParam(':body', $_POST['body']);
  $stmt->bindParam(':category_id', $_POST['category_id']);

  if( $stmt->execute()):
    $_SESSION["message"] = "Successfully updated news";
    header("Location: edit.php?id=".$_POST['id']);

  else:
    die('Sorry there must have been some problem');
  endif; 

endif;