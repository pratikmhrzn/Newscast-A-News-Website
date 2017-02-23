<div class="health">    
  <div class="single_post_content">
    
    <h2><span>Politics</span></h2>
    <?php
      $politicsItem = $conn->prepare('SELECT * FROM news WHERE category_id = 5');
      $politicsItem->execute();
      $politicsNews = $politicsItem->fetch(PDO::FETCH_ASSOC);
    ?>
      <ul class="business_catgnav  wow fadeInDown">
        <li>
          <figure class="bsbig_fig">
            <a href="news.php?id=<?php echo $politicsNews['id'];?>" class="featured_img">
              <?php if(isset($politicsNews['photolink'])): ?>
              <img alt="" src="images/<?php echo $politicsNews['photolink']; ?>"> <span class="overlay"></span>
              <?php endif; ?>
            </a>
            <figcaption>
              <a href="news.php?id=<?php echo $politicsNews['id'];?>">
                <?php
                printf($politicsNews['title']);
                ?>
              </a>
            </figcaption>
            <p>
              <?php
              echo strlen($politicsNews['body']) > 100 ? substr($politicsNews['body'],0,100)."..." : $politicsNews['body'];
              ?>
            </p>
          </figure>
        </li>
      </ul>
      <ul class="spost_nav">
        <?php
        $politicsItem = $conn->prepare('SELECT * FROM news WHERE category_id = 5');
        $politicsItem->execute();
        while($politicsNews = $politicsItem->fetch(PDO::FETCH_ASSOC)):
        ?>
        <li>
          <div class="media wow fadeInDown">
            <a href="news.php?id=<?php echo $politicsNews['id'];?>" class="media-left">
              <?php if(isset($politicsNews['photolink'])): ?>
              <img alt="" src="images/<?php echo $politicsNews['photolink']; ?>">
              <?php endif; ?>
            </a>
            <div class="media-body">
              <a href="news.php?id=<?php echo $politicsNews['id'];?>" class="catg_title">
                <?php
                printf($politicsNews['title']);
                ?>
              </a>
            </div>
          </div>
        </li>
        <?php endwhile; ?>
      </ul>
  </div>
 </div>
