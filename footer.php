	<footer id="footer">
	    <div class="footer_top">
	      <div class="row">
	        <!-- <div class="col-lg-4 col-md-4 col-sm-4">
	          <div class="footer_widget wow fadeInLeftBig">
	            <h2>Flickr Images</h2>
	          </div>
	        </div> -->
	        <!-- <div class="col-lg-4 col-md-4 col-sm-4">
	          <div class="footer_widget wow fadeInLeftBig">
	            <h2>Category</h2>
	            <ul class="tag_nav">
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
	        </div> -->
	        <div class="col-lg-4 col-md-4 col-sm-4">
	          <div class="footer_widget wow fadeInRightBig">
	            <h2>Contact Us</h2>
	            <p>
	            	Website: maharjanpratik.com.np<br>
					E-mail: info@newscast.com.np
	            </p>
	            <address>
	            	Kathmandu University,Dhulikhel,Kavre<br>
	            	Phone: 011-555555<br>
	            	Fax: 123-456-678
	            </address>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="footer_bottom">
	      <p class="copyright">Copyright &copy; 2017 <a href="index.php">NewsFeed</a></p>
	      <a class="developer" href = "http://www.maharjanpratik.com.np">Developed By Pratik Maharjan</a>
	    </div>
	</footer>
</div> <!-- .container -->
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="assets/js/jquery.newsTicker.min.js"></script> 
<script src="assets/js/jquery.fancybox.pack.js"></script> 
<script src="assets/js/custom.js"></script>