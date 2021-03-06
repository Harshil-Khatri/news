<!DOCTYPE html>

<html>
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>City News Alert</title>
		<link rel="shortcut icon" href="images\icon.png" />
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<style>
			.mySlides {display:none}
			.w3-left, .w3-right, .w3-badge {cursor:pointer}
			.w3-badge {height:13px;width:13px;padding:0}
		</style>
		<!-- CSS -->
		<link href="style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
	</head>

	<body>
		
		<div style="background-color:white">
			<div class="row">
				<div class="col-3 col-m-12">
					<a href="home.html" style="padding:0px;"><img src="images\logo.png" width="100%" alt="City News Alert" title="City News Alert" ></a>
				</div>
				<div class="col-9 col-m-12" style="background-color:white;margin-top:5px;padding-bottom;padding-bottom:7px;">
					<marquee WIDTH="100%" behavior="scroll" scrollamount="7" loop="infinite" class="moving_img">
						<a href="http://plasticstv.com/" target="_blank">
							<img src="images\ad_1.png" alt="HTML tutorial" style="border:0px solid white;align:top;">
						</a><span style="display:inline-block; width: 20px;"></span>
						<a href="http://peacewebtech.com/" target="_blank">
							<img src="images\ad_2.png" alt="HTML tutorial" style="border:0px solid white;align:top;">
						</a><span style="display:inline-block; width: 10px;"></span>
						<a href="https://www.w3schools.com/html/html_links.asp" target="_blank">
							<img src="images\ad_3.jpg" alt="HTML tutorial" style="border:0px solid white;align:top;">
						</a><span style="display:inline-block; width: 10px;"></span>
						<a href="https://www.w3schools.com/html/html_links.asp" target="_blank">
							<img src="images\ad_4.png" alt="HTML tutorial" style="border:0px solid white;align:top;">
						</a><span style="display:inline-block; width: 10px;"></span>
						<a href="https://www.w3schools.com/html/html_links.asp" target="_blank">
							<img src="images\ad_5.jpg" alt="HTML tutorial" style="border:0px solid white;align:top;">
						</a><span style="display:inline-block; width: 10px;"></span>
						<a href="https://www.w3schools.com/html/html_links.asp" target="_blank">
							<img src="images\ad_6.jpg" alt="HTML tutorial" style="border:0px solid white;align:top;">
						</a><span style="display:inline-block; width: 10px;"></span>
						<a href="https://www.w3schools.com/html/html_links.asp" target="_blank">
							<img src="images\ad_7.jpg" alt="HTML tutorial" style="border:0px solid white;align:top;">
						</a><span style="display:inline-block; width: 10px;"></span>
					</marquee>
				</div>
			</div>

			<div class="row">
				<div class="col-1 col-m-12" style="padding :0px;background-color:#E8E8E8;">
					<p style="text-align:center;"><b>Headlines :</b></p>
				</div>
				<div class="col-11  col-m-12" style="padding:15px 0px 13px 1px;background-color:#F5F5F5;color:black;">					<marquee WIDTH="100%" behavior="scroll" scrollamount="10" loop="infinite" class="moving_txt">
						<a href="https://www.irctc.co.in/eticketing/loginHome.jsf" target="_blank"><b>1. What do you want 1 ?<b></a><span style="display:inline-block; width: 10px;"></span></a>
						<a href="https://www.w3schools.com/html/html_links.asp">2. What do you want 2 ?</a><span style="display:inline-block; width: 10px;"></span></a>
						<a href="https://stackoverflow.com/questions/9792849/how-to-insert-spaces-tabs-in-text-using-html-css">3.what do you want 3 ?</a>
					</marquee>

				</div>
			</div>
					
		</div>

		<ul class="heads">
			<li class="heads"><a href="home.html" >Home</a></li>
			<li class="heads"><a href="about.html" >About Us</a></li>
			<li class="heads"><a href="news.html">News</a></li>
			<li class="heads">
						<div class="navbar">
							<div class="dropdown active">
								<button class="dropbtn">MultiMedia
									<i class="fa fa-caret-down"></i>
								</button>
								<div class="dropdown-content">
									<a href="gallery.html" style="background-color:#D3D3D3;">Gallery</a>
									<a href="video.html">Video</a>
									<a href="podcast.html">Podcast</a>
								</div>
						  </div> 
						</div>
					</li>
			<li class="heads" style="float:right"><a href="signin.html">Sign In/Register</a></li>
			<div class="topnav">
				<div class="search-container">
					<form action="/action_page.php">
						<input type="text" placeholder="Search.." name="search">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div>
		</ul>
		
		<div class="row" >
			<div class="col-2 col-m-12 col-s-2" style="padding:20px 0px 20px 20px;">
				<div style="background-color: #F5F5F5;width:100%;font-size:20px;">
					<div style="border-bottom:1px ridge #999999;padding:15px 0px 15px 35px;background-color:#999999" class="linking">
						<a href="gallery.html" style="color:black">Gallery</a>
					</div>
					<div style="border-bottom:1px ridge #999999;padding:15px 0px 15px 35px;" class="linking">
						<a href="video.html" style="color:black">Video</a>
					</div>
					<div style="border-bottom:0px ridge #999999;padding:15px 0px 15px 35px;" class="linking">
						<a href="podcast.html" style="color:black">Podcast</a>
					</div>
				</div>
			</div>
			<div class="col-9-5 col-m-12 col-s-9-5">
				<?php
					include("db_connect.php");
					$query = "SELECT * FROM gallery";
					$data = mysqli_query($conn, $query);
//					$total = mysqli_num_rows($data);
					while( $result = mysqli_fetch_assoc($data) )
					{
						$path = $result['pathname'];
						$pics = $result['count'];
				?>
				<p></p>
				<h2><?php echo $result['heading']; ?></h2>
				<p></p>

						<div class="w3-content w3-display-container" style="max-width:400px">
				<?php
							$count = 1;
							while( $pics >= $count )
							{
								$p=$path . "/ad" . $count . ".jpg"
				?>
								<img class="mySlides" src = "<?php echo $p ?>" style="width:100%" />
				<?php
								$count++;
							}
				?>
							<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
								<div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
								<div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
							</div>
						</div>
						<br></br>
				<?php
					}
				?>
				
			</div>
			<div class="col-0-5 col-m-0 col-s-0-5">
			</div>
		</div>
		<script>
			var slideIndex = 1;
			showDivs(slideIndex);

			function plusDivs(n) {
				showDivs(slideIndex += n);
			}

			function currentDiv(n) {
				showDivs(slideIndex = n);
			}

			function showDivs(n) {
				var i;
				var x = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("demo");
				if (n > x.length) {slideIndex = 1}    
				if (n < 1) {slideIndex = x.length}
				for (i = 0; i < x.length; i++) {
					x[i].style.display = "none";  
				}
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" w3-white", "");
				}
				x[slideIndex-1].style.display = "block";  
				dots[slideIndex-1].className += " w3-white";
			}
		</script>

		<div style="background-color:grey;">
			<div class="row">
				<div class="col-0-5 col-m-0">
				</div>
				<div class="col-5 col-m-12">
					<a href="home.html" style="padding:0px;"><img src="images\logo.png" width="100%" alt="City News Alert" title="City News Alert" ></a>					
					<p style="color:white;text-align:center;">&copy2013 City News Alert.com</p>
				</div>
				<div class="col-2 col-m-0">
				</div>
				<div class="col-4 col-m-12">
					<h4 style="text-align:center;color:white;line-height:0;">Share our Website on</h4>
					<div class="topnav" style="padding-left:21%">
						<div class="search-container fa-links" style="float:left">
							<a href="https://www.facebook.com/ginuplasticsjoseph" class="fa fa-facebook" style="color:white;"></a>
							<a href="https://twitter.com/BetterSTU" class="fa fa-twitter" style="color:white;"></a>
							<a href="#" class="fa fa-google-plus" style="color:white;background-color:red;"></a>
							<a href="#" class="fa fa-linkedin" style="color:white;"></a>
							<a href="https://www.youtube.com/channel/UCNTEfO8pWu0HG8uqS3q4IIA" class="fa fa-youtube" style="color:white;"></a>
						</div>
					</div>
					<br></br>
					<div style="color:white;text-align:center;">
						<p >Powered By:</p>
						<a href="http://peacewebtech.com/" target="_blank">
							<img src="images\ad_2.png" alt="Peace Web Tech" title="Peace Web Tech" width="100%">
						</a>
					</div>
				</div>
				<div class="col-0-5 col-m-0">
				</div>

			</div>
		</div>
		
	</body>
</html>