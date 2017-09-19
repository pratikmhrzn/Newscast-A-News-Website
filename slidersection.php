 <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          <?php
            $popularNews = $conn->prepare('SELECT * FROM news order by viewcount desc limit 5');
            $popularNews->execute();
            while($row = $popularNews->fetch(PDO::FETCH_ASSOC)):
            if(isset($row['photolink'])): 
          ?>
          <div class="single_iteam">
            <a href="news.php?id=<?php echo $row['id'];?>">
            <img src="images/<?php echo $row['photolink']; ?> ">
            </a>
            <?php endif; ?>
            <div class="slider_article">
              <h2>
                <a class="slider_tittle" href="news.php?id=<?php echo $row['id'];?>">
                  <?php echo $row['title']; ?>
                </a>
              </h2>
              <p>
                <?php
                echo strlen($row['body']) > 200 ? substr($row['body'],0,200)."..." : $row['body'];
                ?>
              </p>
            </div>
          </div>
        <?php endwhile; ?>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <?php require "slidersectionright.php"; ?>
        <!-- <div class="latest_post">
          <h2><span>Latest post</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
              <li>
                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/Manchester-Uniteds-Zlatan-Ibrahimovic-2.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                    <?php
                    $title_records = $conn->prepare('SELECT title FROM posts WHERE id = "3" ');
                    $title_records->execute();  
                    $title_results = $title_records->fetch(PDO::FETCH_ASSOC);
                    printf($title_results['title']);
                    ?>
                  </a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/Players-of-Nepal-APF-Club-Dharan-Football-Club.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                   <?php
                    $title_records = $conn->prepare('SELECT title FROM posts WHERE id = "4" ');
                    $title_records->execute();  
                    $title_results = $title_records->fetch(PDO::FETCH_ASSOC);
                    printf($title_results['title']);
                    ?> 
                  </a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/vangaal.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                   <?php
                    $title_records = $conn->prepare('SELECT title FROM posts WHERE id = "5" ');
                    $title_records->execute();  
                    $title_results = $title_records->fetch(PDO::FETCH_ASSOC);
                    printf($title_results['title']);
                    ?> 
                  </a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/Global-stocks.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                    <?php
                    $title_records = $conn->prepare('SELECT title FROM posts WHERE id = "6" ');
                    $title_records->execute();  
                    $title_results = $title_records->fetch(PDO::FETCH_ASSOC);
                    printf($title_results['title']);
                    ?>
                  </a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/nrb.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title">
                    <?php
                    $title_records = $conn->prepare('SELECT title FROM posts WHERE id = "1" ');
                    $title_records->execute();  
                    $title_results = $title_records->fetch(PDO::FETCH_ASSOC);
                    printf($title_results['title']);
                    ?>
                  </a> </div>
                </div>
              </li>
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div> -->
      </div>
    </div>
  </section>