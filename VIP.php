<?php
    session_start();
    if(empty($_SESSION['username'])){
        echo "<script> alert('請先登入，才有權限瀏覽vip專區') </script>";
        echo "<script language='javascript'>document.location.href='signin.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<link rel="stylesheet" href="VIP.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Bangers&display=swap">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
	<title>VIP area</title>
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


		<!-- block1-->
	 	<div class="block1">
	 		<div class="block-title">
		 		<h1>讓蘇蘇教你什麼是<br>所謂的蘇式生活風格</h1>
		 		<p id="h1-under">你有沒有覺得人生很無聊過？龜肛不讀冊追劇吼？<br>就跟著蘇蘇的步驟，來洗淨身上的油味吧！</p>
	 		</div>

	 		<div class="row">

	 			<!-- 左側大圖 -->
	 			<div class="col" id="col1">
	 				<div class="ft-img">
	 					<img src="dj.jpg" alt="img" width="100%">
	 					<img src="play.png" class="play-btn" onclick="playVideo('dj.mp4')">
	 				</div>
	 				<p id="ft-img-text"><span>Step 1：</span>來場和羽球的浪漫戀愛吧！<br><span id="ref">看看後面裁判都戀愛了<br>p.s對面灰色頭髮的是<a id="lee" href="https://www.youtube.com/watch?v=IZW2TLBXF0k&ab_channel=ShuttleAmazingShuttleAmazing">雅加達亞運男雙第三</a>的李哲輝</span></p>
	 			</div>
	 			<!-- End 左側大圖 -->

	 			<!-- 右側小圖 -->
	 			<div class="col" id="col2">

	 				<!-- Block1 -->
	 				<div class="small-img-row">
	 					<div class="small-img">
	 						<img src="cream.png" >
	 						<img src="play.png" class="play-btn" onclick="playVideo('creamfield.mp4')">
	 					</div>
	 					<div class="small-text">
	 						<p><span class="steps">STEP 2：</span><br>就算訓練或唸書再辛苦<br>沒有了音樂人生就是不對味！<br>砸$3000多去電音趴也是必需的吧</p>
	 					</div>
	 				</div>
	 				<!-- End Block1 -->

	 				<!-- Block2 -->
	 				<div class="small-img-row">
	 					<div class="small-img">
	 						<img src="family.jpg">
	 						<img src="play.png" class="play-btn" onclick="playVideo('family.mp4')">
	 					</div>
						<div class="small-text">
	 					<p><span class="steps">STEP 3：</span><br>當然，家人是你永遠的後盾。還不趕緊的立馬的跟他們相處，珍惜寶貴時間！</p>
	 					</div>
	 				</div>
	 				<!-- End Block2 -->

	 				<!-- Block3 -->
	 				<div class="small-img-row">
	 					<div class="small-img">
	 						<img src="friends.jpg">
	 						<img src="play.png" class="play-btn" onclick="playVideo('friends.mp4')">
	 					</div>
	 					<div class="small-text">
	 					<p><span class="steps">STEP 4：</span><br>朋友總是為你來歡笑是吧？<br><a id="gf" onclick="alert('QQ沒有女朋友')">"女朋友"</a>也可以，但抱歉<br>你還沒有那酷東西^^<br>啊剛好我有 抱歉抱歉</p>
	 					</div>
	 				</div>
	 				<!-- End Block3 -->

	 			</div>
	 			<!-- End 右側小圖 -->
	 		
	 		</div>
	 	</div>
	 	<!-- End block1 -->


	 	<!-- for videoplay block(按下播放鍵後出現的播放影片的播放器) -->
	 	<div class="video-player" id="videoPlayer">
	 		<video width="100%" height="50%" controls autoplay id="myVideo">
	 			<source src="creamfield.mp4" type="video/mp4">
	 		</video>
	 		<img src="cancel.png" class="cancel-btn" onclick="stopVideo()">
	 	</div>
	 	<!-- End for videoplay block(按下播放鍵後出現的播放影片的播放器) -->


	 	<!-- JS for videoplay-->
	 	<script>
	 		var videoPlayer = document.getElementById("videoPlayer");
	 		var myVideo = document.getElementById("myVideo");
	 		function stopVideo() {
	 			videoPlayer.style.display = "none";
	 			myVideo.pause();
	 		}
	 		function playVideo(file){
	 			myVideo.src = file;
	 			videoPlayer.style.display = "block";
	 		}
	 	</script>
	 	<!-- End JS for videoplay-->

	 	<!-- Off-day大標 -->
	 	<div class="desc-offday">
			<h2>我平常沒有比賽的時候都做些什麼？<br><br></h2>
				<p>欸伊？這個問題問得好，給你五個<a id="thumb" href="https://www.youtube.com/watch?v=s1dys4qO8pU&t=291s&ab_channel=WEBCIFARWEBCIFAR">榮譽大拇指</a>！<span>(不知道的去看小S康熙來了3:52)</span><br>如果是出國比賽，但是已經沒有賽程了或是當天就是<span id="off-day">Off day</span>，<br>我們都會往市區或者是購物中心瞎走瞎晃。像是之前去過的澳洲雪梨，歌劇院肯定是要去朝聖的~<br>也因為這樣呢，我在玩折手指遊戲的時候是常勝君，因為我只要把所有去過的國家都說一遍，大家手指都折起來了，好好笑。</p>
	 	</div>
	 	<!-- End Off-day大標 -->
	 	

	 	<!-- wrap -->
	 	<div class="wrap"><!-- 後面的code會蓋掉前面的 -->

	 		<!-- Austrlia -->
	 		<div class="item">
	 			<div class="pic">
	 				<img src="australia.jpg">
	 			</div>
	 			<div class="text">
	 				<h2>澳洲雪梨歌劇院</h2>
	 				<p>這次是因為潛能優秀計畫公費出國，我當時大概16強就輸掉比賽了，後幾天大家也輸得差不多了，所以教練們就安排選手出門走走。晚上住的飯店其實蠻簡陋的，但是有公共廚房，我們團隊再納州都自己採買食材回來調理，頗有一個大家庭的感覺。</p>
	 			</div>
	 		</div>
	 		<!-- End Austrlia -->

	 		<!-- Greece -->
	 		<div class="item">
	 			<div class="text">
	 				<h2>希臘<span id="bla">blabla</span>大帝時期的盾牌與長矛</h2>
	 				<p>這次的希臘行是自費的，願意自費的主要原因當然是要來看看擁有悠久歷史的希臘！在海邊有忘記名字的大帝、亞里斯多德的銅像，還有一堆很有風格的餐廳。<br>那次我真的猛了，我們從臺灣搭機抵達希臘後，我從頭到尾都在幫忙跟飯店或者接機的人員交談(英文！)，連出門玩都用<span id="facebook">Facebook Messenger</span>跟身旁這位教練約時間地點，聊聊當地的風景歷史什麼的，再翻譯給我的學弟妹們聽。<br><span>巨牛逼</span></p>
	 			</div>
	 			<div class="pic">
	 				<img src="greece.png">
	 			</div>
	 		</div>
	 		<!-- End Greece -->

	 		<!-- Italia -->
	 		<div class="item">
	 			<div class="pic">
	 				<img src="milan.jpg">
	 			</div>
	 			<div class="text">
	 				<h2>義大利米蘭大教堂</h2>
	 				<p>因為潛優來到了義大利，在<span id="milan">Off day</span>時來到了最著名的米蘭大教堂，入口處還會搜身，裡面禁止拍照。進入後一堆人當遊客拍，所以....管他的我們整團手機拍起來哈哈。</p>
	 			</div>
	 		</div>
	 		<!-- End Italia -->

	 		<!-- item4 -->
	 		<div class="item">
	 			<div class="text">
	 				<h2>斯洛伐克的城堡(裡頭)</h2>
	 				<p>跟義大利式接續的下個禮拜，連續兩週都待在歐洲，很爽但又很想家，這是中世紀的古堡，裡面很多拿來防禦的武器，還有大鐘，相當有歷史感。</p>
	 			</div>
	 			<div class="pic">
	 				<img src="slovakia.jpg">
	 			</div>
	 		</div>
	 		<!-- End item4 -->

	 	</div>
	 	<!-- End wrap -->


	 	<!-- Last -->
	 	<div class="last">
	 		<div class="text">
		 		<h1>什麼？你還想看更多？付費啊(誤,沒有啦<br><br></h1>
		 		<p>如果真的還想多認識我，或者想跟我聯繫，都歡迎直接密我的社群帳號哦！<br>通常不是在線上就是在線下，你可以碰碰運氣河河<br>或者直播市內電話0800-092-000，會有中醫師櫃歌為您服務，因為他關心您的健康。</p>
	 		</div>
	 	</div>
	 	<!-- End Last -->


	 	<!-- Footer -->
	 	<section id="footer">
	 		<div class="footer container">
	 			<div class="brand">
		 			<h1 id="brand-title"><span>S</span>u<span>Su's</span> Fan Page</h1>
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
	 			<p>all work © SuSu's fan page 2021 • all rights reserved</p>
	 		</div>
	 	</section>
	 	<!-- End Footer -->

</body>
</html>