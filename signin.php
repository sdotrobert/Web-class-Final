<?php
	session_start();
	include('signin_server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign in</title>

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
						<!--η»εΊζι-- -->
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

    <!-- sign in form -->
<section id="form">
	<div class="form container">
    <form class="box" action="signin.php" method="post">
		<?php include('errors.php'); ?>
		<div class="container11">
			<h1>η»ε₯εΎε³ε―ηθ¦½ζε‘ε°ε</h1>
		<hr>

		<label for="username"><b>εΈ³θ</b></label>
        <input type="text" name="username" placeholder="Username" value=
			"<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username'];}?>">
        
		<label for="password"><b>ε―η’Ό</b></label>
		<input type="password" name="password" placeholder="Enter password" value=
			"<?php if(isset($_COOKIE['username'])){echo $_COOKIE['password'];}?>">


		<div class="login">
        
		<input type="checkbox" name="remember" style="margin-bottom:15px" value="1">
		<label>θ¨δ½ζ</label>
    
		<br><input type="submit" name="login_btn" value="η’Ίθͺη»ε₯">
		</div>
		<p>
  			ιδΈζ―ζε‘? <a href="signup.php">θ¨»ε</a>
  		</p>
    </form>
	</div>
</section>


 <!-- Footer -->
	 	<section id="footer">
	 		<div class="footer container">
	 			<div class="brand">
		 			<h1><span>S</span>u<span>Su's</span> Fan Page</h1>
		 		</div>
		 			<h2>Stay healthy and jive.</h2>
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
	 			<p>all work Β© SuSu's fan page 2021 β’ all rights reserved</p>
	 		</div>
	 	</section>
	 	<!-- End Footer -->

</body>
</html>