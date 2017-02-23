<?php
require 'database.php';

if(!empty($_POST['id'])):
  $sql = "DELETE FROM news WHERE id=:id;";
  $stmt = $conn -> prepare($sql);
  $stmt->bindParam(':id',$_POST['id']);

  if( $stmt->execute()):
    $_SESSION["message"] = "Successfully deleted news";
    header("Location: index.php");
  else:
    die('Sorry there must have been some problem');
  endif; 

endif;
?>