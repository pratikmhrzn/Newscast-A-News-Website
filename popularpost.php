      <!-- <div class="col-lg-4 col-md-4 col-sm-4"> -->
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Popular Post</span></h2>
            <ul class="spost_nav">
                <?php
                  $popularNews = $conn->prepare('SELECT * FROM news order by viewcount desc limit 5');
                  $popularNews->execute();
                  while($row = $popularNews->fetch(PDO::FETCH_ASSOC)):
                ?>
              <li>
                <div class="media wow fadeInDown"> <a href="news.php?id=<?php echo $row['id'];?>" class="media-left">
                  <?php if(isset($row['photolink'])): ?>
                    <img alt="" src="images/<?php echo $row['photolink']; ?>" style="height: 70px; width: 90px; overflow: hidden;">
                  <?php endif; ?>
                    </a>
                  <div class="media-body"> <a href="news.php?id=<?php echo $row['id'];?>" class="catg_title">
                  <?php echo $row['title']; ?>
                  </a> </div>
                </div>
              </li>
              <?php endwhile; ?>
            </ul>
          </div>
         </aside>