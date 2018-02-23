<?php
	
	include "include/connection.php";
	$book_id = $_GET['id'];
	
	//$book_name = mysqli_fetch_array($book_result)['book_name'];
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Big store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<script type="text/javascript">
 function submit(i){
 	var id = form + i;
 	document.getElementById(id).submit();
 }
</script>

<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->

</head>
<body>
<?php include 'include/header.php'; ?>
  <!---->
 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Book</h3>
		<h4><a href="index.php">Home</a><label>/</label>Book</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<?php 
			include 'include/connection.php'; 
			$book_result = mysqli_query($con, "SELECT * FROM book WHERE book_id = " . $book_id);
			while ($book = mysqli_fetch_array($book_result)): ?>
		<div class="single">
			<div class="container">
			

						<div class="single-top-main">
	   		<div class="col-md-5 single-top">
	   		<div class="single-w3agile">
							
<div id="picture-frame">
<?php if (file_exists("images/".$book['book_id'].".jpg")){
			echo'<div> <img src="images/'.$book['book_id']. '.jpg"  class="img-responsive"/></div>';
			}
			?>
			
		</div>
										<script src="js/jquery.zoomtoo.js"></script>
								<script>
			$(function() {
				$("#picture-frame").zoomToo({
					magnify: 1
				});
			});
		</script>
		
		
		
			</div>
			</div>
			
			<div class="col-md-7 single-top-left ">
			
			<div class="single-right">
								
				<h3><?php echo $book['book_name'];?></h3>
				
					
				 <div class="pr-single">
				  <p class="reduced ">RM<?php echo $book['book_price'];?></p>
				</div>
				<div class="block block-w3">
					<div class="starbox small ghosting"> </div>
				</div>
				<p class="in-pa"> <?php echo $book['book_description'];?></p>
			   	
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>
					<div class="add add-3">
						<button class="btn btn-danger my-cart-btn my-cart-b" data-id="<?php echo $book['book_id'];?>" data-name="<?php echo $book['book_name'];?>" data-summary="<?php echo $book['book_name'];?>" data-price="<?php echo $book['book_price'];?>" data-quantity="1" data-image="images/<?php echo $book['book_id'];?>.jpg">Add to Cart</button>
					</div>
				
				 
			  
				<div class="clearfix"> </div>
			
			</div>
		  
			<?php endwhile;?>
			</div>
		   <div class="clearfix"> </div>
		   
	   </div>	
				 
				
	</div>
</div>
		<!--comment-->
<div class="content-top offer-w3agile">
	<div class="container ">
			<div class="spec ">
				<h3>Comment</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
			<div class=" con-w3l wthree-of">
			<div class="col-md-3 pro-1">
			<div class="col-m">
			<form method="post">
			<table >
			<tr>
			<th>
			Comment:
			</th>
			</tr>
			<tr>
			<th>
			<input name="comment" type="text" />
			</th>
			</tr>
			<tr>
			<th>
			<input name="sumbit" type="submit">
			</th>
			</tr>
			</table>
			</form>
			</div>
			</div>
			</div>
			
			
						<div class=" con-w3l wthree-of">
							<?php 
			include 'include/connection.php'; 
			$book_result = mysqli_query($con, "SELECT * FROM feedback INNER JOIN customers ON feedback.customer_id = customers.customer_id INNER JOIN rating ON customers.customer_id= rating.customer_id WHERE feedback.book_id=" . $book_id);
			while ($book = mysqli_fetch_array($book_result)): ?>
					
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
										
										<div class="offer"><p><span><?php echo $book['customer_name'];?></span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><?php echo $book['feedback_text'];?></h6>							
										</div>
										<div class="mid-2">
											<p ><?php echo $book['feedback_scale'];?></p>
											  <div class="block">
												

											</div>
											<div class="clearfix"></div>
										</div>
											<!--<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="5" data-name="MazeRunner" data-summary="summary 5" data-price="RM5" data-quantity="1" data-image="images/maze.png">Add to Cart</button>
										</div>-->
									</div>
								</div>
							</div>
							<?php endwhile;?>
							
							
							
							
							
							
							
							
							
							

							
							
							<div class="clearfix"></div>
						 </div>
					</div>
				</div>
<!--footer-->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grid">
			<h3>About Us</h3>
			<p>Welcome to Technology Park’s Bookstore System. We provide any kind of books that suits you.</p>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Menu</h3>
			<ul>
				<li><a href="genre.php?id=1">Thriller</a></li>
				<li><a href="genre.php?id=2">Romance</a></li>
				<li><a href="genre.php?id=3">Action</a></li>
				<li><a href="genre.php?id=4">Documentary</a></li>						 
				<li><a href="genre.php?id=5">Animation</a></li> 
				<li><a href="genre.php?id=6">Mystery fiction</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Customer Services</h3>
			<ul>
				<li><a href="shipping.php">Shipping</a></li>
				<li><a href="terms.php">Terms and Conditions</a></li>
				<li><a href="faqs.php">Faqs</a></li>
				<li><a href="contact.php">Contact</a></li>
										 
				 
			</ul>
		</div>
		<div class="col-md-3 footer-grid">
			<h3>My Account</h3>
			<ul>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
				<li><a href="wishlist.php">Wishlist</a></li>
				
			</ul>
		</div>
		<div class="clearfix"></div>
			<div class="footer-bottom">
				<h2 ><a href="index.php"><b>T<br>H<br>E</b>Technology Park’s Bookstore System<span>The Best Bookstore</span></a></h2>
				<p class="fo-para">We are going to provide a user-friendly and efficiency system that based on the requirement 
				given so that we can support the business of the bookstore.</p>
				<ul class="social-fo">
					<li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				</ul>
				<div class=" address">
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-home" aria-hidden="true"></i>Bukit Jalil Technology Park Malaysia.</p>
					</div>
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-phone" aria-hidden="true"></i>+6018 239 3787</p>	
					</div>
					<div class="col-md-4 fo-grid1">
						<p><a href="mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>wenghoeee@gmail.com</a></p>
					</div>
					<div class="clearfix"></div>
					
					</div>
			</div>
		<div class="copy-right">
			<p> &copy; 2018 Technology Park’s Bookstore System. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> APU Street, Malaysia  Street, Malaysia  Street, Malaysia </a></p>
		</div>
	</div>
</div>
<!-- //footer-->

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>


				<!-- product -->
			
</body>
</html>