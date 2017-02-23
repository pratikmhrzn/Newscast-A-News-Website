<?php if(isset($_SESSION['message'])): ?>
	<div class="alert alert-success">
		<?php echo $_SESSION['message']; unset($_SESSION['message']); ?>
	</div>
<?php endif; ?>

<div class="form-group">
  <label for="newsTitle" class="col-sm-2 control-label">News Title</label>
  <div class="col-sm-10">
    <input type="text" name = "title" class="form-control" id="newsTitle" placeholder="News Title" value="<?php if(isset($news)) { echo $news['title']; } ?>">
  </div>
</div>

<div class="form-group">
  <label for="category" class="col-sm-2 control-label">Category</label>
  <div class="col-sm-10">
    <select class="form-control" name = "category_id">
	  <?php
            $categories = $conn->prepare('SELECT * FROM category');
            $categories->execute();
            while($row = $categories->fetch(PDO::FETCH_ASSOC)):
          ?>
          <option value = "<?php echo $row['category_id']?>"
            <?php if(isset($news) && $news['category_id'] == $row['category_id']) { echo "selected"; } ?>      
          >
              <?php echo $row['name']; ?>
          </option>
        <?php endwhile; ?>
  </select>
  </div>  

</div>
  <div class="form-group">
  <label for="newsBody" class="col-sm-2 control-label">News Body</label>
  <div class="col-sm-10">
    <textarea class="form-control" name = "body" id="newsBody" placeholder="News Body" rows = "10"><?php if(isset($news)) { echo $news['body']; } ?></textarea>
  </div>
</div>

<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="button button-block">Save</button>
  </div>
</div>