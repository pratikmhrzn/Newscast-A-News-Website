<div class="related_post">
  <h2>Related Post <i class="fa fa-thumbs-o-up"></i></h2>
  <ul class="spost_nav wow fadeInDown animated">
    <?php
      $relatedNews = $conn->prepare('SELECT * FROM news order by viewcount desc limit 3');
      $relatedNews->execute();
      while($relatedNewsRow = $relatedNews->fetch(PDO::FETCH_ASSOC)):
    ?>
    <li>
      <div class="media"> 
        <a class="media-left" href="news.php?id=<?php echo $relatedNewsRow['id'];?>">
          <?php if(isset($relatedNewsRow['photolink'])): ?>
            <img src="images/<?php echo $relatedNewsRow['photolink']; ?>">
          <?php endif; ?>
        </a>
        <div class="media-body">
          <a class="catg_title" href="news.php?id=<?php echo $relatedNewsRow['id'];?>">
            <?php echo $relatedNewsRow['title']; ?>
          </a> 
        </div>
      </div>
    </li>
    <?php endwhile; ?>
  </ul>
</div>