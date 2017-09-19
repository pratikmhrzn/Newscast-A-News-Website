<div class="health">    
  <div class="single_post_content">
    
    <h2><span>Health</span></h2>
    <?php
      $healthItem = $conn->prepare('SELECT * FROM news WHERE category_id = 2');
      $healthItem->execute();
      $healthNews = $healthItem->fetch(PDO::FETCH_ASSOC);
    ?>
      <ul class="business_catgnav  wow fadeInDown">
        <li>
          <figure class="bsbig_fig">
            <a href="news.php?id=<?php echo $healthNews['id'];?>" class="featured_img">
              <?php if(isset($healthNews['photolink'])): ?>
              <img alt="" src="images/<?php echo $healthNews['photolink']; ?>"> <span class="overlay"></span>
              <?php endif; ?>
            </a>
            <figcaption>
              <a href="news.php?id=<?php echo $healthNews['id'];?>">
                <?php
                printf($healthNews['title']);
                ?>
              </a>
            </figcaption>
            <p>
              <?php
              echo strlen($healthNews['body']) > 100 ? substr($healthNews['body'],0,100)."..." : $healthNews['body'];
              ?>
            </p>
          </figure>
        </li>
      </ul>
      <ul class="spost_nav">
        <?php
        $healthItem = $conn->prepare('SELECT * FROM news WHERE category_id = 2');
        $healthItem->execute();
        while($healthNews = $healthItem->fetch(PDO::FETCH_ASSOC)):
        ?>
        <li>
          <div class="media wow fadeInDown">
            <a href="news.php?id=<?php echo $healthNews['id'];?>" class="media-left">
              <?php if(isset($healthNews['photolink'])): ?>
              <img alt="" src="images/<?php echo $healthNews['photolink']; ?>">
              <?php endif; ?>
            </a>
            <div class="media-body">
              <a href="news.php?id=<?php echo $healthNews['id'];?>" class="catg_title">
                <?php
                printf($healthNews['title']);
                ?>
              </a>
            </div>
          </div>
        </li>
        <?php endwhile; ?>
      </ul>
  </div>
 </div>
