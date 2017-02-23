<?php
require "header.php";

$newsItem = $conn->prepare('SELECT * FROM news WHERE id = :id');
$newsItem->bindParam(':id',$_GET['id']);
$newsItem->execute();
$news = $newsItem->fetch(PDO::FETCH_ASSOC);

?>

<form class="form-horizontal" method = "post" action = "updatenews.php">
	<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

	<?php require 'savenewsform.php'; ?>
</form>

<?php

require "footer.php";
?>