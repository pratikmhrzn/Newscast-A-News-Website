<?php
require "header.php";
?>
<section id = "contentSection">
	<div = "row">
		<div class="col-lg-8 col-md-8 col-sm-8">
			<div class="left_content">
				<div class="single_page">

					<?php
            		
        		$newsItem = $conn->prepare('SELECT * FROM news WHERE id = :id');
        		$newsItem->bindParam(':id',$_GET['id']);
        		$newsItem->execute();
        		$news = $newsItem->fetch(PDO::FETCH_ASSOC);
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
                  	<p style="color:black;text-align: justify;">
                      <?php
                      printf($news['body']);
                      ?>
                    </p>
                </div>
              <?php
        		  require "relatedpost.php";
        		  ?>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4">
        	<aside class="right_content">
         		<div class="single_sidebar">
         			<?php
			        require "popularpost.php";
			        ?>
			        <div class="single_sidebar">
            			<ul class="nav nav-tabs" role="tablist">
              				<li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
            			</ul>
            			<div class="tab-content">
              				<div role="tabpanel" class="tab-pane active" id="category">
                				<ul>
                				<?php
					              	$categories = $conn->prepare('SELECT * FROM category');
					              	$categories->execute();
					              	while($row = $categories->fetch(PDO::FETCH_ASSOC)):
           						?>
           						<li  class="cat-item">
               						<a href="category.php?id=<?php echo $row['category_id'];?>">
                						<?php echo $row['name']; ?>
                					</a>
                				</li>
          						<?php endwhile; ?>
				                 <!--  <li class="cat-item"><a href="#">Technology</a></li> -->
                				</ul>
              				</div>
            			</div>
          			</div>
		        </div>
	        </aside>
        </div>
	</div>
</section>
<?php
require "footer.php";
?>