<?php
require "database.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Newscast</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/font.css">
<link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
  <div class="container">
  <?php
    $records = $conn->prepare('SELECT name FROM users WHERE id = :id ');
    $records->bindParam(':id',$_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
  ?>

  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="index.php">Home</a></li>
            </ul>
          </div>
          <div class="header_top_right">
            <ul class ="top_nav_right">
            <li>
              <?php if (empty($_SESSION['user_id'])): ?>    
              <a href = "login.php">Login</a>
              
              <?php elseif(count($results) > 0):
              ?>
              <i style="color:white;text-align: center;">
              <?php
              printf($results['name']);
              ?>
              </i>
              <a href ="panel.php">Admin Panel</a>
              <a href = "logout.php">Logout</a>
              <?php endif; ?>
            </li>
          </ul>  
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="index.php" class="logo"><img src="images/logo.jpg" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
       <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="index.php"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
            <?php
              $categories = $conn->prepare('SELECT * FROM category');
              $categories->execute();
              while($row = $categories->fetch(PDO::FETCH_ASSOC)):
            ?>
            <li>
              <a href="category.php?id=<?php echo $row['category_id'];?>">
                <?php echo $row['name']; ?>
                </a>
              </li>
          <?php endwhile; ?>
        </ul>
      </div>
    </nav>
  </section>
  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Latest News</span>
          <ul id="ticker01" class="news_sticker">
                <?php
                  $latestNews = $conn->prepare('SELECT * FROM news');
                  $latestNews->execute();
                  while($row = $latestNews->fetch(PDO::FETCH_ASSOC)):
                ?>
                  <li>
                    <a href="news.php?id=<?php echo $row['id'];?>" style="color:white; height: 20px; margin:0; padding: 0;text-align: center; background: none;">
                      <?php if(isset($row['photolink'])): ?>
                        <img src="images/<?php echo $row['photolink']; ?>" style="height: 20px; width: auto;">
                      <?php endif; ?>
                      <?php echo $row['title']; ?>
                    </a>
                  </li>
                <?php endwhile; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>