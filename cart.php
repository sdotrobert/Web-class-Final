<?php
    session_start();
    if(empty($_SESSION['username'])){
        echo "<script> alert('請先登入') </script>";
        echo "<script language='javascript'>document.location.href='signin.php';</script>";
    }
?>
<?php
	$code = $_GET["code"];
	$checkout = $_GET["checkout"];
	if ($code == 1) {
		echo "<script>alert('刪除成功')</script>";
	}
	else if ($code == 2) {
		echo "<script>alert('刪除失敗')</script>";
	}

	if ($checkout == 1){
		echo "<script>alert('感謝您的訂購，課程時間會再以Email向您確認')</script>";
	}
	else if ($checkout == 2){
		echo "<script>alert('購物車沒有東西喔，趕快去買拉')</script>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>購物車</title>
	<!-- <link rel=stylesheet type="text/css" href="shoppingcartpage.css"> -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Bangers&display=swap">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="shoppingcartpage.css">
</head>
<body>

	<!-- header -->

	<section id="header">
		<div class="header container">
			<div class="nav-bar">
				<div class="brand">
					<a href="#hero"><h1><span>S</span>u<span>Su's </span>Fan Page</h1></a>
					<h1>Su's Fans: </h1>
					<div class=shoppingpage><a href="#"><img src="https://img.icons8.com/dotty/80/ffffff/favorite-cart.png"/></a></div>	
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

            <section class="home" id="home">
				<div class="cart_div">
					<table>
						<tr>
							<th>商品</th>
							<th>各商品小計(NTD)</th>
							<th></th>
						</tr>
                        <?php
                        $id = $_SESSION["id"];
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
                            mysqli_query($conn, "SET NAMES utf8mb4");

                            $sql = "SELECT course_des, course_price, cart.course_id FROM cart
                            INNER JOIN course ON cart.course_id = course.course_id 
                            WHERE fan_id = $id";
                    
                            $result = mysqli_query($conn, $sql);
                        
                            $course_des = "";
                            $course_price = 0;
                        
                            while ($row = mysqli_fetch_array($result)) {
                                $course_des = $row['course_des'];
                                $course_price = $row['course_price'];
								$course_id = $row['course_id'];
                                $sum += $course_price;
                                    echo '<tr>
                                <td>'.$course_des.'</td>
                                <td>'.$course_price.'</td>
								<td><div class="submit">
									<a href="remove.php?course_id='.$course_id.'" class="button">移除</a>
									</div>
								</td>
                            </tr>';
                            }
                            echo '</table>
                            <div class="total-price">
                            <table id="total-table">
                                <tr id="total">
                                    <td>總計</td>
                                    <td>'.$sum.'</td>
                                </tr>
                            </table>
                            </div>
							<section id="last">
                            <div class="submit" id="checkout">
                            <a href="checkout.php" class="button" id="submit">送出</a>
                            </div>
							</section>';
                        }
                            ?>
					</table>
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