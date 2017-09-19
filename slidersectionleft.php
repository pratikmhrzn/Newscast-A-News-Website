<!DOCTYPE html>
<html>
<head>

</head>

<body>
 <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/Manchester-Uniteds-Zlatan-Ibrahimovic-2.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="single_page.php">
              <?php
                $title_records = $conn->prepare('SELECT title FROM posts WHERE id = "3" ');
                $title_records->execute();  
                $title_results = $title_records->fetch(PDO::FETCH_ASSOC);
                printf($title_results['title']);
              ?>
              </p>
              </a></h2>
              <p>
                <?php
                $post_records = $conn->prepare('SELECT excerpt FROM posts WHERE id = "3" ');
                $post_records->execute();
                $post_results = $post_records->fetch(PDO::FETCH_ASSOC);
                printf($post_results['excerpt']);
              ?>
              </p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/Players-of-Nepal-APF-Club-Dharan-Football-Club.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">
                <?php
                $title_records = $conn->prepare('SELECT title FROM posts WHERE id = "4" ');
                $title_records->execute();  
                $title_results = $title_records->fetch(PDO::FETCH_ASSOC);
                printf($title_results['title']);
                ?>
              </p>
              </a></h2>
              <p>
                <?php
                $post_records = $conn->prepare('SELECT excerpt FROM posts WHERE id = "4" ');
                $post_records->execute();
                $post_results = $post_records->fetch(PDO::FETCH_ASSOC);
                printf($post_results['excerpt']);
              ?>
              </p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/vangaal.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html"><?php
                $title_records = $conn->prepare('SELECT title FROM posts WHERE id = "5" ');
                $title_records->execute();  
                $title_results = $title_records->fetch(PDO::FETCH_ASSOC);
                printf($title_results['title']);
              ?>
              </p>
              </a></h2>
              <p>
                <?php
                $post_records = $conn->prepare('SELECT excerpt FROM posts WHERE id = "5" ');
                $post_records->execute();
                $post_results = $post_records->fetch(PDO::FETCH_ASSOC);
                printf($post_results['excerpt']);
              ?>
              </p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/Global-stocks.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html"><?php
                $title_records = $conn->prepare('SELECT title FROM posts WHERE id = "6" ');
                $title_records->execute();  
                $title_results = $title_records->fetch(PDO::FETCH_ASSOC);
                printf($title_results['title']);
              ?>
              </p>
              </a></h2>
              <p>
                <?php
                $post_records = $conn->prepare('SELECT excerpt FROM posts WHERE id = "6" ');
                $post_records->execute();
                $post_results = $post_records->fetch(PDO::FETCH_ASSOC);
                printf($post_results['excerpt']);
              ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  </body>
</html>