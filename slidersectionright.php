  <div class="latest_post">
    <h2><span>Latest post</span></h2>
    <div class="latest_post_container">
      <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
      <ul class="latest_postnav">
            <?php
              $latestNews = $conn->prepare('SELECT * FROM news order by newsdate desc limit 5');
              $latestNews->execute();
              while($latestNewsRow = $latestNews->fetch(PDO::FETCH_ASSOC)):
            ?>
        <li>
          <div class="media">
            <a href="news.php?id=<?php echo $latestNewsRow['id'];?>" class="media-left">
            <?php if(isset($latestNewsRow['photolink'])): ?>
            <img src="images/<?php echo $latestNewsRow['photolink']; ?>" style="height: 62px; width: 90px; overflow: hidden;">
            <?php endif; ?>
            </a>
            <div class="media-body">
              <a  class="catg_title" href="news.php?id=<?php echo $latestNewsRow['id'];?>">
              <?php echo $latestNewsRow['title']; ?>
              </a>
            </div>
          </div>
        </li>
      </ul>
      <?php endwhile; ?>
      <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
    </div>
  </div>
