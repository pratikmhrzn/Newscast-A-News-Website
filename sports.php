<div class="single_post_content">
  <h2><span>Sports</span></h2>
  <div class="single_post_content_left">
    <ul class="business_catgnav  wow fadeInDown">
      <?php
        $sportsItem = $conn->prepare('SELECT * FROM news WHERE category_id = 4');
        $sportsItem->execute();
        $sportsNews = $sportsItem->fetch(PDO::FETCH_ASSOC);
      ?>
      <li>
        <figure class="bsbig_fig">
          <a href="news.php?id=<?php echo $sportsNews['id'];?>" class="featured_img">
            <?php if(isset($sportsNews['photolink'])): ?>
            <img alt="" src="images/<?php echo $sportsNews['photolink']; ?>"> <span class="overlay"></span>
            <?php endif; ?>
          </a>
          <figcaption>
            <a href="news.php?id=<?php echo $sportsNews['id'];?>">
              <?php
              printf($sportsNews['title']);
              ?>
            </a>
          </figcaption>
          <p>
            <?php
            echo strlen($sportsNews['body']) > 100 ? substr($sportsNews['body'],0,100)."..." : $sportsNews['body'];
            ?>
          </p>
        </figure>
      </li>
    </ul>
  </div>
  <div class="single_post_content_right">
    <ul class="spost_nav">
    <?php
        $sportsItem = $conn->prepare('SELECT * FROM news WHERE category_id = 4');
        $sportsItem->execute();
        while($sportsNews = $sportsItem->fetch(PDO::FETCH_ASSOC)):
      ?>
      <li>
        <div class="media wow fadeInDown">
          <a href="news.php?id=<?php echo $sportsNews['id'];?>" class="media-left">
            <?php if(isset($sportsNews['photolink'])): ?>
            <img alt="" src="images/<?php echo $sportsNews['photolink']; ?>">
            <?php endif; ?>
          </a>
          <div class="media-body">
            <a href="news.php?id=<?php echo $sportsNews['id'];?>" class="catg_title">
              <?php
              printf($sportsNews['title']);
              ?>
            </a>
          </div>
        </div>
      </li>
        <?php endwhile; ?>
    </ul>
  </div>
</div>