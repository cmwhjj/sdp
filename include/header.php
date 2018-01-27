<?php

	if (isset($_SESSION['mySession'])) {
	$result=mysqli_query($con,"SELECT * FROM customers WHERE customer_id = $_SESSION[mySession]");
	$user = mysqli_fetch_array($result);
	} else {
	$user = null;
	}
	$genre_result = mysqli_query($con, "SELECT * FROM genre");
?>


<div class="header">

		<div class="container">
			
			<div class="logo">
				<h1 ><a href="index.php"><b>T<br>H<br>E</b>Book Store<span>The Best Book Store </span></a></h1>
			</div>
			<div class="head-t">
				<ul class="card">
					<?php
					if ($user == null) {
						echo '<li><a href="login.php" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>';
						echo '<li><a href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>';	
					} else {
						echo '<li><a href="" ><i class="fa fa-arrow-right" aria-hidden="true"></i>' . $user['customer_name'] . '</a></li>';
						echo '<li><a href="logout.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Logout</a></li>';	
					}
					?>
					
					
					<li><a href="about.php" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
					<li><a href="shipping.php" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
				</ul>	
			</div>
			
			<div class="header-ri">
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>	
			</div>
		

				<div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li><a href="index.php" class="hyper "><span>Home</span></a></li>	
							
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Genre<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<?php
													while ($genre = mysqli_fetch_assoc($genre_result)) {
														echo '<li><a href="genre.php?id=' . $genre['genre_id'] . '"><i class="fa fa-angle-right" aria-hidden="true"></i>' . $genre['genre_name'] . '</a></li>';
													}
												?>
												
											</ul>
										
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							
					</nav>
					 <div class="cart" >
					
						<span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
					</div>
					<div class="clearfix"></div>
				</div>
					
				</div>			
</div>