<?php
require "header.php";

$newsItem = $conn->prepare('SELECT * FROM news WHERE id = :id');
$newsItem->bindParam(':id',$_GET['id']);
$newsItem->execute();
$news = $newsItem->fetch(PDO::FETCH_ASSOC);

	if(isset($_SESSION['message'])):?>
		<div class="alert alert-success">
			<?php echo $_SESSION['message']; unset($_SESSION['message']); ?>
		</div>
	<?php endif;
?>
	<h1>
		<p style="color:black;text-align: center;">
			<?php
			printf($news['title']);
			?>
		</p>
	</h1>
	<div class="single_page_content">
		<?php if(isset($news['photolink'])): ?>
			<img class="img-center" src="images/<?php echo $news['photolink']; ?>" >
		<?php endif; ?>
		<p style="color:black; text-align:justify;"> 
			<?php
				echo strlen($news['body']) > 200 ? substr($news['body'],0,200)."..." : $news['body'];
			?>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<form action="deletenews.php" method="post">
				<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

				<b style="color: black; text-align: left;">
					<big>
						Are you sure want to delete this news. Once you delete you cant undo!!!
					</big>
				</b>
				<br>
				<button type="submit" class="button button-block">Delete</button>
			</form>
			<br>
			<a href="index.php" class="button text-center button-block">Cancel</a>
		</div>	
	</div>
<?php
require "footer.php"; 
?>