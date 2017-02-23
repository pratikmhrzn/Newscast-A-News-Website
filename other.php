<div class="health">    
  <div class="single_post_content">
    
    <h2><span>Other</span></h2>
    <?php
      $otherItem = $conn->prepare('SELECT * FROM news WHERE category_id = 6');
      $otherItem->execute();
      $otherNews = $otherItem->fetch(PDO::FETCH_ASSOC);
    ?>
      <ul class="business_catgnav  wow fadeInDown">
        <li>
          <figure class="bsbig_fig">
            <a href="news.php?id=<?php echo $otherNews['id'];?>" class="featured_img">
              <?php if(isset($otherNews['photolink'])): ?>
              <img alt="" src="images/<?php echo $otherNews['photolink']; ?>"> <span class="overlay"></span>
              <?php endif; ?>
            </a>
            <figcaption>
              <a href="news.php?id=<?php echo $otherNews['id'];?>">
                <?php
                printf($otherNews['title']);
                ?>
              </a>
            </figcaption>
            <p>
              <?php
              echo strlen($otherNews['body']) > 100 ? substr($otherNews['body'],0,100)."..." : $otherNews['body'];
              ?>
            </p>
          </figure>
        </li>
      </ul>
      <ul class="spost_nav">
        <?php
        $otherItem = $conn->prepare('SELECT * FROM news WHERE category_id = 6');
        $otherItem->execute();
        while($otherNews = $otherItem->fetch(PDO::FETCH_ASSOC)):
        ?>
        <li>
          <div class="media wow fadeInDown">
            <a href="news.php?id=<?php echo $otherNews['id'];?>" class="media-left">
              <?php if(isset($otherNews['photolink'])): ?>
              <img alt="" src="images/<?php echo $otherNews['photolink']; ?>">
              <?php endif; ?>
            </a>
            <div class="media-body">
              <a href="news.php?id=<?php echo $otherNews['id'];?>" class="catg_title">
                <?php
                printf($otherNews['title']);
                ?>
              </a>
            </div>
          </div>
        </li>
        <?php endwhile; ?>
      </ul>
  </div>
 </div>
