<?php
require "database.php";

if(!isset($_SESSION['user_id'])) {
  header("Location: login.php");
}

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
<link rel="stylesheet" type="text/css" href="stylee.css">
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
    <b style="color: black; text-align: justify;">Welcome to Admin Panel</b>
    <nav class="navbar navbar-inverse" role="navigation">
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li>
            <a href="/testnewscast123/add.php">Create Post</a>
          </li>
          <li>
            <a href="signup.php">Create a new Admin</a>
          </li>
         </ul>
      </div>
     </nav>
     <div class="mdl-typography__text-left">
        <table class="mdl-data-table mdl-js-data-table mdl-data-table--responsive mdl-shadow--2dp post-list">
            <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">News Id</th>
                    <th class="mdl-data-table__cell--non-numeric">News Title</th>
                    <th class="mdl-data-table__cell--non-numeric">News Category</th>
                    <th class="mdl-data-table__cell--non-numeric">News Created At</th>
                    <th class="mdl-data-table__cell--non-numeric">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                  $tableitem = $conn->prepare('SELECT * FROM news join category on category.category_id = news.category_id');
                  $tableitem->execute();
                  while($row = $tableitem->fetch(PDO::FETCH_ASSOC)):
              ?>
              <tr>
              <td class="mdl-data-table__cell--non-numeric">
                <?php
                  echo $row['id'];
                ?>
              </td>
              <td class="mdl-data-table__cell--non-numeric">
                <?php
                echo $row['title'];
                ?>
              </td>
              <td class="mdl-data-table__cell--non-numeric">
                <?php
                echo $row['name'];
                ?>
              </td>
              <td class="mdl-data-table__cell--non-numeric">
                <?php
                echo $row['newsdate'];
                ?> 
              </td>
              <td class="mdl-data-table__cell--non-numeric">
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
              </td>
              </tr>
              <?php
                endwhile;
              ?>
            </tbody>
            </table>
            </div>
</section>
</div>
</body>