<?php
	session_start();
	include('signup_server.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign up</title>
	<link rel=stylesheet type="text/css" href="signup.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Bangers&display=swap">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
</head>
<body>

	<!-- header -->

	<section id="header">
		<div class="header container">
			<div class="nav-bar">
				<div class="brand">
					<a href="#hero"><h1><span>S</span>u<span>Su's </span>Fan Page</h1></a>
					<h1>Su's Fans: 
						<?php 
							$conn = mysqli_connect("127.0.0.1", "root", "a22149811", "sufanpage");
							$sql = "Select * From fans";
							$result = mysqli_query($conn, $sql);
							$fans = mysqli_num_rows($result);
							echo $fans; 
						?>
					</h1>
					<div class=shoppingpage><a href="cart.php"><img src="https://img.icons8.com/dotty/80/ffffff/favorite-cart.png"/></a></div>	
				</div>
				<div class="nav-list">
					<div class="hamburger"><div class="bar"></div></div>
					<ul>
						<li><a href="homepage.php" data-after="Home">Home</a></li>
						<li><a href="About-us.php" data-after="About">About</a></li>
						<li><a href="VIP.php" data-after="VIP">VIP</a></li>
						<li><a href="signin.php" data-after="Login">Login</a></li>
						<li><a href="Services.php" data-after="Services">Services</a></li>
						<?php
							if(isset($_SESSION['username'])){
								echo "<li><a href='logout.php' data-after='Services'>logout</a></li>";
							}
						?>
					</ul>
					

				</div>
			</div>
		</div>
	</section>


	<!-- end header -->
	<script src="app1.js">
			
	</script>

    <!-- sign up form -->
    <!-- sign in form -->
<section id="form">
	<div class="form container">
    
    <form class="box" action="signup.php" method="post">
		<?php include('errors.php'); ?>
		<div class="container11">
			<h1>立即註冊為會員</h1>
			<h1>來觀看更多有趣的我！</h1>
		<hr>

		<div class="content">
			
		<div class="leftsection">
			<label for="username"><b>帳號</b></label>
	        <input type="text" name="username" placeholder="Username">
	        
			<label for="password"><b>密碼</b></label>
			<input type="password" name="password" placeholder="Enter password">
			
			<label for="password2"><b>確認密碼</b></label>
			<input type="password" name="password2" placeholder="Repeat password">
		</div>
		<div class="rightsection">
					<label for="email"><b>電子信箱></b></label>
				<input type="text" name="email" placeholder="Enter email">
				
				<label for="phoneNum"><b>手機號碼</b></label>
				<input type="text" name="phoneNum" placeholder="Enter phone numbers">

				<p>註冊代表您已閱讀且同意我們的<a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
				<div class="signup">					
					<p>
			  			已經是會員? <a href="signin.php">登入</a>
			  		</p>
			  		<input type="submit" name="reg_btn" value="確認註冊">
				</div>
				
		</div>
		

  		</div>

    </form>
  </div>
</section>


 <!-- Footer -->
	 	<section id="footer">
	 		<div class="footer container">
	 			<div class="brand">
		 			<h1><span>S</span>u<span>Su's</span> Fan Page</h1>
		 		</div>
		 			<h2>Stay healthy and Live.</h2>
		 			<div class="social-icon">
			 			<div class="social-item">
			 				<a href="#"><img src="https://img.icons8.com/fluent/48/000000/facebook-new.png"/>
			 				</a>
			 			</div>
			 			<div class="social-item">
			 				<a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/>
			 				</a>
			 			</div>
			 			<div class="social-item">
			 				<a href="#"><img src="https://img.icons8.com/color/48/000000/youtube-squared.png"/>
			 				</a>
		 				</div>
		 			</div>
	 			<p>All work © SuSu's fan page 2021 • all rights reserved</p>
	 		</div>
	 	</section>
	 	<!-- End Footer -->

</body>
</html>