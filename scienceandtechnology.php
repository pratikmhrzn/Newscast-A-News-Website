<div class="science_and_technology">    
  <div class="single_post_content">
    
    <h2><span>Science And Technology</span></h2>
    <?php
      $sciTechItem = $conn->prepare('SELECT * FROM news WHERE category_id = 3');
      $sciTechItem->execute();
      $sciTechNews = $sciTechItem->fetch(PDO::FETCH_ASSOC);
    ?>
      <ul class="business_catgnav  wow fadeInDown">
        <li>
          <figure class="bsbig_fig">
            <a href="news.php?id=<?php echo $sciTechNews['id'];?>" class="featured_img">
              <?php if(isset($sciTechNews['photolink'])): ?>
              <img alt="" src="images/<?php echo $sciTechNews['photolink']; ?>"> <span class="overlay"></span>
              <?php endif; ?>
            </a>
            <figcaption>
              <a href="news.php?id=<?php echo $sciTechNews['id'];?>">
                <?php
                printf($sciTechNews['title']);
                ?>
              </a>
            </figcaption>
            <p>
              <?php
              echo strlen($sciTechNews['body']) > 100 ? substr($sciTechNews['body'],0,100)."..." : $sciTechNews['body'];
              ?>
            </p>
          </figure>
        </li>
      </ul>
      <ul class="spost_nav">
        <?php
        $sciTechItem = $conn->prepare('SELECT * FROM news WHERE category_id = 3');
        $sciTechItem->execute();
        while($sciTechNews = $sciTechItem->fetch(PDO::FETCH_ASSOC)):
        ?>
        <li>
          <div class="media wow fadeInDown">
            <a href="news.php?id=<?php echo $sciTechNews['id'];?>" class="media-left">
              <?php if(isset($sciTechNews['photolink'])): ?>
              <img alt="" src="images/<?php echo $sciTechNews['photolink']; ?>">
              <?php endif; ?>
            </a>
            <div class="media-body">
              <a href="news.php?id=<?php echo $sciTechNews['id'];?>" class="catg_title">
                <?php
                printf($sciTechNews['title']);
                ?>
              </a>
            </div>
          </div>
        </li>
        <?php endwhile; ?>
      </ul>
  </div>
 </div>
