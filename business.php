<div class="single_post_content">
  <h2><span>Business</span></h2>
  <div class="single_post_content_left">
    <ul class="business_catgnav  wow fadeInDown">
      <?php
        $businessItem = $conn->prepare('SELECT * FROM news WHERE category_id = 1');
        $businessItem->execute();
        $businessNews = $businessItem->fetch(PDO::FETCH_ASSOC);
      ?>
      <li>
        <figure class="bsbig_fig">
          <a href="news.php?id=<?php echo $businessNews['id'];?>" class="featured_img">
            <?php if(isset($businessNews['photolink'])): ?>
            <img alt="" src="images/<?php echo $businessNews['photolink']; ?>"> <span class="overlay"></span>
            <?php endif; ?>
          </a>
          <figcaption>
            <a href="news.php?id=<?php echo $businessNews['id'];?>">
              <?php
              printf($businessNews['title']);
              ?>
            </a>
          </figcaption>
          <p>
            <?php
            echo strlen($businessNews['body']) > 100 ? substr($businessNews['body'],0,100)."..." : $businessNews['body'];
            ?>
          </p>
        </figure>
      </li>
    </ul>
  </div>
  <div class="single_post_content_right">
    <ul class="spost_nav">
    <?php
        $businessItem = $conn->prepare('SELECT * FROM news WHERE category_id = 1');
        $businessItem->execute();
        while($businessNews = $businessItem->fetch(PDO::FETCH_ASSOC)):
      ?>
      <li>
        <div class="media wow fadeInDown">
          <a href="news.php?id=<?php echo $businessNews['id'];?>" class="media-left">
            <?php if(isset($businessNews['photolink'])): ?>
            <img alt="" src="images/<?php echo $businessNews['photolink']; ?>">
            <?php endif; ?>
          </a>
          <div class="media-body">
            <a href="news.php?id=<?php echo $businessNews['id'];?>" class="catg_title">
              <?php
              printf($businessNews['title']);
              ?>
            </a>
          </div>
        </div>
      </li>
        <?php endwhile; ?>
    </ul>
  </div>
</div>