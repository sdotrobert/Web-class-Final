<?php
		session_start();
		$id = $_SESSION['id'];
		if (!isset($id)) {
			$id = "'null'";
		}
		else {
			$id = "'$id'";
		}
		$conn = mysqli_connect("127.0.0.1", "root", "a22149811", "sufanpage");

		if (!$conn) {
			echo "<script>alert('Bad Connection')</script>";
		}
		else {
			// THIS IS DAMN IMPORTANT, OTHERWISE YOU'LL GET ERROR
			// mysqli_query($conn, "SET NAMES utf8mb4");
			$sql = "SELECT course_id FROM course where course_id='1'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			$course1 = $row['course_id'];

			$sql = "SELECT course_id FROM course where course_id='2'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			$course2 = $row['course_id'];
			
			$sql = "SELECT course_id FROM course where course_id='3'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			$course3 = $row['course_id'];

			$sql = "SELECT course_id FROM course where course_id='4'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			$course4 = $row['course_id'];

			$sql = "SELECT course_id FROM course where course_id='5'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			$course5 = $row['course_id'];
		}
	?>
<?php
	$code = $_GET["code"];
	if ($code == 1) {
		echo "<script>alert('成功加入購物車')</script>";
	}
	else if ($code == 2) {
		echo "<script>alert('購物車已有此商品')</script>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Services</title>
<link rel="stylesheet" href="Services.css">


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
	
	<!-- Service Section -->
	<section id="services">
		<div class="services container">
		  <div class="service-top">
			<h1 class="section-title">Services<span></span></h1>
			<p>羽球是一項能運動到全身的良好運動，它能強化肌肉、提高肌力、改善血流速率，總之有超多好處。促進新陳代謝、糖不再是惡夢、提高反應能力，而這也會反映在日常生活中.........羽毛球有超多好處，真的很誘人。現在就拿起球跟球拍，並殺個幾球來做為健康的開始!!點選按鈕加入購物車XDXDDD </p>
		  </div>
	
		  <div class="plan">
				  <video autoplay muted loop id="planvideo">
				  <source src="plan.mp4" type="video/mp4">
				  </video>
	
				  <div class="info">

				  	<div class="textcontent">
				  	<div class="info1">
				  	<div class=infoicon1><img src="https://img.icons8.com/carbon-copy/80/073763/crowd.png"/></div>
				  	<p>招募對象:所有蘇蘇粉絲的人及熱愛運動的人</p>
				  	</div>
				  	<div class="info1">
				  	<div class=infoicon1><img src="https://img.icons8.com/carbon-copy/80/073763/time.png"/></div>
				  	<p>參加時間:Sun Jul.~ Sun Oct.</p>
				  	</div>
				  	<div class="info1">
				  	<div class=infoicon1><img src="https://img.icons8.com/wired/64/073763/worldwide-location.png"/></div>
				  	<p>參加地點:線上或是台科大羽球館</p>
				  	</div>
				  	
				  	</div>

				  	<div class="shopping">
				  		<div class="price">
				  			<p>Price: NT$10000</p>
				  			<P>70%off</P>

				  		</div>
				  		<div class=shoppingcart><a href="addtocart.php?course=1"><img src="https://img.icons8.com/bubbles/80/ffffff/shopping-cart-loaded.png"/></a></div>
				  	</div>
					  
	
			  
				  </div>
			  
		  </div>
	
	
		<div class="description">
			
			<h2 class="description-title">Members Services<span></span></h2>

			<div class="goodservice">
				 <div class="good1">
				 	<img src="https://img.icons8.com/wired/64/ffffff/trophy.png"/>
				 	<p>1. High Quality</p>
				 </div>
				 <div class="good1">
				 	<img src="https://img.icons8.com/ios-glyphs/60/ffffff/badminton-2.png"/>
				 	<p>2. Professional player</p>
				 </div>
				 <div class="good1">
				 	<img src="https://img.icons8.com/carbon-copy/100/ffffff/hang-10.png"/>
				 	<p>3. Friendly & Funny</p>
				 </div>



			</div>



		</div>
		  
		  <div class="service-bottom">
			  
			<div class="service-item">
			  <div class="icon"><img src="https://img.icons8.com/bubbles/50/ffffff/shuttercock.png"/></div>
			  <div class="buying">
			  <div class="texttt">
			  <h2>ONE ON ONE </h2>
			  <h2>TUTORIAL</h2>
			  </div>
			  <!-- <p>有這個榮幸?快來跟大中華民國甲組選手的一對一羽球教學 ，保證你正手拍反手拍，還有殺球挑球都能馬上得到獨家精隨，不用上山修行，下海閉關，只要加入購物車結帳，即能得到蘇蘇的真人服務喔~</p> -->
	
			  <div class="price">
				  <p>NT$ 600/hr</p>
				  <div class="img"><a href="addtocart.php?course=2"><img src="https://img.icons8.com/bubbles/80/ffffff/shopping-cart-loaded.png"/></div>

			  </div>
			</div>

			</div>
	
			<div class="service-item">
			  <div class="icon"><img src="https://img.icons8.com/bubbles/50/ffffff/shuttercock.png"/></div>
			  <div class="buying">
			  <div class="texttt">
			  <h2>BADMINTON</h2>
			  <h2>COUNSELING</h2>
			  </div>
	
			  <div class="price">
				  <p>NT$ 2000/hr</p>
				  <div class="img"><a href="addtocart.php?course=3"><img src="https://img.icons8.com/bubbles/80/ffffff/shopping-cart-loaded.png"/></div>

			  </div>
			</div>

			</div>


			<div class="service-item">
			  <div class="icon"><img src="https://img.icons8.com/bubbles/50/ffffff/shuttercock.png"/></div>
			  <div class="buying">
			  <div class="texttt">
			  <h2>BADMINTON SINGLE</h2>
			  <h2></h2>
			  </div>
	
			  <div class="price">
				  <p>NT$ 3000/hr</p>
					  <div class="img"><a href="addtocart.php?course=4"><img src="https://img.icons8.com/bubbles/80/ffffff/shopping-cart-loaded.png"/></div>

			  </div>
			</div>

			</div>


			<div class="service-item">
			  <div class="icon"><img src="https://img.icons8.com/bubbles/50/ffffff/shuttercock.png"/></div>
			  <div class="buying">
				  <div class="texttt">
				  <h2>親一下</h2>
				  <h2>XD</h2>
				  </div>
	
				  <div class="price">
					  <p>NT$ 5000</p>
					  <div class="img"><a href="addtocart.php?course=5"><img src="https://img.icons8.com/bubbles/80/ffffff/shopping-cart-loaded.png"/></div>

				  </div>
			</div>

			</div>
		  </div>
		</div>

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


	  </section>
	  <!-- End Service Section -->

</body>
</html>