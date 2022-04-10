<?php
	session_start();
	include('signin_server.php');
	if($_GET['logout']==1){
		echo "<script> alert('成功登出') </script>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FanPage</title>
<link rel="stylesheet" href="fanPageHomepage.css">
<!-- CSS only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->

	
</head>
<body>
	<!-- header -->

	<section id="header">
		<div class="header container">
			<div class="nav-bar">
				<div class="brand">
					<a href="#hero"><h1><span>S</span>u<span>Su's </span>Fan Page</h1></a>
					<h1>Su's Fans: 
						<!--粉絲顯示-- -->
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
	

	<!-- hero section -->
	<section id="hero">
		<div class="hero container">
			<video autoplay muted loop id="myVideo">
  			<source src="College.mp4" type="video/mp4">
  			</video>
			<div class="content">
				<h1>Hello, It's Su! <span></span></h1>
				<a href="#"	type="button" class="cta">Profolio</a>
			</div>
			
				
			
		</div>

	</section>


</body>
</html>