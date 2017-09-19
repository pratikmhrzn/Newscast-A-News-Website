<?php
require "header.php";
?>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <h1>
          		<?php
                $title_records = $conn->prepare('SELECT title FROM posts WHERE id = "2" ');
                $title_records->execute();  
                $title_results = $title_records->fetch(PDO::FETCH_ASSOC);
                ?>
                <p style="color:black;text-align: center;">
                <?php
                printf($title_results['title']);
            	?>
            	</p>
            </h1>
            <div class="single_page_content"> <img class="img-center" src="images/claudio-ranieri.jpg" alt="">
              <p>
           		<?php
                $post_records = $conn->prepare('SELECT post FROM posts WHERE id = "2" ');
                $post_records->execute();
                $post_results = $post_records->fetch(PDO::FETCH_ASSOC);
                ?>
                <p style="color:black;text-align: center;">
                <?php
                printf($post_results['post']);
            	?>
             	</p>
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
                  <li class="cat-item"><a href="#">Technology</a></li>
                  <li class="cat-item"><a href="#">Health</a></li>
                  <li class="cat-item"><a href="#">Business</a></li>
                  <li class="cat-item"><a href="#">Sports</a></li>
                  <li class="cat-item"><a href="#">Weather</a></li>
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