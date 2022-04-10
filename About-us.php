<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<title>About us!</title>
	<link rel="stylesheet" href="About-us.css">
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


	<!-- service section -->
	<section id="services">
		<!-- services container -->
	 	<div class="services container">
	 		<!-- h1跟內文 -->
	 		<div class="services-top">
	 			<h1 class="section-title"><span>E</span>X<span>P</span>E<span>R</span>IENCEs</h1>
	 			<p id="desc"><span id="upper">每</span>一名全國甲組球員的背後，都有一道影子，還有無數努力與拚勁換來的比賽佳績。由於我就是甲組之一，想必走過的路肯定不少。<br><br>
	 				在將近十三年的球齡中，我已參加過無數次的比賽。雖然有些比賽的成果不理想，甚至也有被虐的，還有被虐到不爽的，但那種不甘心成為了我繼續向前邁進的動力，這時我就有了新的念頭與目標：<br><span id="goal">「我要虐別人」</span><br><br>就是這麼簡單，成為甲組的理由不需要那麼多，就是虐，無情地開虐就對了，但再怎麼虐還是會有人可以虐爆你。於是，我退休了，就是這麼率性。</p>
	 		</div>
	 		<!-- End h1跟內文 -->

	 		<!-- services -->
	 		<div class="services-bottom">
	 			<div class="service-item" id="ccy">
	 				<div class="icon">
	 					<img src="https://img.icons8.com/officel/80/000000/trophy.png"/>
	 				</div>
	 				<h2>103、104、105年全中運<br><span id="skr">戰績分別為：</span><span id="result">國男團第三、國男第一、高男第二</span></h2><br>
	 				<p id="descCCY">在103年的比賽中，我校中山國中在四強落敗，落敗部接著爭取三四名成績。我和搭檔擔任第四點雙打的重要角色，如果輸了，我們中山就有很大的機會輸球，但我們不管這麼督，頂住心理壓力，最終在決勝第三局上演逆轉秀保住了第三名！<br><br>另外104年的全中運，中山挺進冠亞軍賽，在前四點以2:2打成平手，進入關鍵第五點，我校第五點是個沉著的狠角色，在前兩局1:1平手的情況下，第三局4:16被打得稀巴爛，就在以為要被電爆屈居第二名時，我校選手突然覺醒開掛，怒追一波強勢的攻勢到最後逆轉得勝，在場幾乎所有的觀眾及選手都在觀賞我們這場大對決，在贏球的當下我們全隊欣喜若狂，以自己的實力站上頒獎台，收下冠軍寶座。<br><br>至於105年，是我以一年級的身分參賽，在當時的隊上有許多二三年級的學長，從預賽、八強、決賽，他們帶領著我們前進冠亞軍賽，雖然在最終落敗，但不管在場上場下我們都團結一心，那種團隊氛圍是非常難能可貴的，也以很滿意的銀牌收場。</p>
	 			</div>
	 			<div class="service-item" id="exchange">
	 				<div class="icon">
	 					<img src="https://img.icons8.com/officel/80/000000/trophy.png"/>
	 				</div>
	 				<h2>2015年 亞洲交流錦標賽</h2><br><br>
	 				<p>這是國三升高一的暑假，透過國內選拔第一爭取到的出國資格。當時中山國中三位男生代表與大同高中(國中部)三位女生代表一銅前往日本參賽。大會還有舉辦交流大會，現場擺設許多翻譯機，也有大團康遊戲，分組交流或者跳舞。<br>那次的比賽結交了很多外國朋友，跟很多外國人拍照、切磋球技，還有很多可愛的日本女生。記得我自己還用日文去問日本人可不可以拍照，是一段非常美好的回憶。</p>
	 			</div>
	 			<div class="service-item" id="ina">
	 				<div class="icon">
	 					<img src="https://img.icons8.com/officel/80/000000/trophy.png"/>
	 				</div>
	 				<h2>2016 亞洲青少年錦標賽</h2><br>
	 				<p>亞洲青少年錦標賽是亞洲最大最重要的比賽，是由亞洲羽協所舉辦。在此比賽中生存下來的選手都是不好惹的，同時也會被同年齡層的選手給記住，因為之後的國際賽事極有可能會繼續遇到。在台灣要參加此等賽事必須在國內先選拔，前三名才能代表國家出賽，而那次我選上了第一，所以是全程以公費出賽。當時晉級到八強止步，對於那時的我來說已經是相當的欣慰啦。</p>
	 			</div>
	 			<div class="service-item" id="worldschool">
	 				<div class="icon">
	 					<img src="https://img.icons8.com/officel/80/000000/trophy.png"/>
	 				</div>
	 				<h2>2019 世界中學運動會</h2><br>
	 				<p>鼎鼎大名的世界中學運動會(簡稱世中運)，想參賽也是需要在國內先進行選拔的，當時剛好有幸能夠選上參加。其他次的世中運都辦在歐洲國家或者俄羅斯之類的，唯獨我們這次的舉辦權被印度爭取到...真是不太幸運哈哈。雖然我自己有輸幾場，但不影響我們的團隊實力，最後還是擊敗中國隊拿下冠軍，非常的痛快。</p>
	 			</div>
	 		</div>
	 		<!-- End 各個區塊 -->
	 	</div>
	 	<!-- End services container -->



	 	<!-- Projects section -->
	 	<section id="projects">
	 		<div class="project container">
	 			<div class="project-header">
	 				<h1 class="section-title">OTHER <span>Highlights</span></h1>
	 			</div>
	 			<div class="all-projects">
	 				<!-- project item1 -->
	 				<div class="project-item">
	 					<div class="project-info">
	 						<h1 id="titlekorea">2015 韓國光州<br>青少年錦標賽</h1>
	 						<h2 id="quater"><span>名次：</span>男雙八強</h2>
	 						<p id="desckorea">這是我第一次出國比賽，最後在八強遇到了韓國青少年國家隊的選手，兩局作收，分數各別大概是16及17。輸球後與其他八強落敗的選手並列第五名，拿到了人生第一次比賽獎金 (120美金)！</p>
	 					</div>
	 					<div class="project-img">
	 						<img src="korea.jpg" alt="img">
	 					</div>
	 				</div>
	 				<!-- End project item1 -->

	 				<!-- project item2 -->
	 				<div class="project-item">
	 					<div class="project-info">
	 						<h1>2019 世界青少年錦標賽</h1>
	 						<h2><span>名次：</span>有出賽=全台數一數二強</h2>
	 						<p>這是地球上規模最大的青少年羽球賽事，一樣要經過選拔才能代表國家出賽，而那次我選拔拿到了第一名公費出國。這次出賽感覺蠻受教練青睞的，但是一直都沒有發揮好。有場對上法國的團體賽，我三局裡斷了十支球拍線，自己球拍不夠跟搭檔甚至觀眾席的隊友借，我真的覺得太誇張，生涯裡遇過最扯的一次。最後團體第11，個人賽打兩場就打包了QQ。</p>
	 					</div>
	 					<div class="project-img">
	 						<img src="wj.jpg" alt="img">
	 					</div>
	 				</div>
	 				<!-- End project item2 -->

	 				<!-- project item3 -->
	 				<div class="project-item">
	 					<div class="project-info">
	 						<h1>2019 全國排名賽</h1>
	 						<h2><span>名次：</span>男乙雙第三(升甲組)</h2>
	 						<p>一上了大學我就馬上休學，趁還有在練球趕緊把握能夠升上甲組的機會。殊不知第一次(一年舉辦兩次排名賽)八強就止步了，當時我想很多，很擔憂自己付出了時間卻沒有辦法收穫我想要的，而且下一次就是六個月後了。後來付出終於如願以償，在男乙雙獲得了第三名，晉升甲組。<span></span>這是歷史上第一次有男雙以第三名升甲組(規則有修訂)。</p>
	 					</div>
	 					<div class="project-img">
	 						<img src="rank.jpg" alt="img">
	 					</div>
	 				</div>
	 				<!-- End project item3 -->

	 				<!-- project item4 -->
	 				<div class="project-item">
	 					<div class="project-info">
	 						<h1>2019 馬來西亞挑戰賽</h1>
	 						<h2><span>名次：</span>男雙四強</h2>
	 						<p>WOW這真的就是真實力了！這是我第一個成人賽得名，雖然沒有打進冠亞，所以沒有獎牌，但對我來說我已經很滿足了。還記得其他隊友輸光了先回國，剩我們兩個在馬來，我憑藉一己之力用英語和大會人員溝通搭車、航班事宜，和當地馬來人(不是華裔喔)交談All English !真的很以我自己為傲欸(柏瑋長大了qqq)。</p>
	 					</div>
	 					<div class="project-img">
	 						<img src="mas.png" alt="img">
	 					</div>
	 				</div>
	 				<!-- End project item4 -->
	 			</div>
	 		</div>
	 	</section>
	 	<!-- End Projects section -->



	 	<!-- About section -->
	 	<section id="about">
	 		<div class="about container">
	 			<div class="col-left">
	 				<div class="about-img">
	 					<img src="ina.jpg" alt="img">
	 				</div>
	 			</div>
	 			<div class="col-right">
	 				<h1 class="section-title">About <span>me</span></h1>
	 				<h2>白天是<span>Student</span>下課是<span>Athlete</span></h2>
	 				<p>本人的羽球之路目前為退休狀態，平常在學校上課學習新知，不斷增長見聞，做個腹有詩書的好年輕人。哪天臺灣的體育環境改善了，我再考慮回歸與否。現階段我的目標是以目前研讀的內容吃飯，打球已經不再那麼主要了，但是在我心中還是佔有很大的空間，空間複雜度比較大，嗯。歡迎找我打球啊！籃球也很歡迎的說。</p>
	 				<a href="https://drive.google.com/drive/folders/1KTCrF6QG9rYXko2oy3g5TBJxZB7Wthka" type="button" class="cta">Download awesome<br>picturesof mine</a>
	 			</div>
	 		</div>
	 	</section>
	 	<!-- End About section -->



	 	<!-- Footer -->
	 	<section id="footer">
	 		<div class="footer container">
	 			<div class="brand">
		 			<h1 id="last-title"><span>S</span>u<span>Su's</span> Fan Page</h1>
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


	</section>
	<!-- End service section -->
</body>
</html>