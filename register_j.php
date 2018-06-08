<!DOCTYPE html>

<html>
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>City News Alert</title>
		<link rel="shortcut icon" href="images\icon.png" />

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
				<div class="col-11  col-m-12" style="padding:15px 0px 13px 1px;background-color:#F5F5F5;">
					<marquee WIDTH="100%" behavior="scroll" scrollamount="10" loop="infinite" class="moving_txt">
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
					<div class="dropdown">
						<button class="dropbtn">MultiMedia
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-content">
							<a href="gallery.html">Gallery</a>
							<a href="video.html">Video</a>
							<a href="podcast.html">Podcast</a>
						</div>
				  </div> 
				</div>
			</li>
			<li class="heads active" style="float:right"><a href="signin.html">Sign In/Register</a></li>
			<div class="topnav">
				<div class="search-container">
					<form action="/action_page.php">
						<input type="text" placeholder="Search.." name="search">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div>
		</ul>
		
		<h1>Register with City News Alert</h1>
		
		<div class="row">
			<div class="col-1 col-m-0">
			</div>
			<div class="col-6 col-m-12" style="border-right: 2px solid #E0E0E0;margin:50px 0px 100px 0px;padding:5px 10px 5px 20px;background-color:#F5F5F5">
				<h2 style="text-align:center;border:none;">Application form for Journalist</h2>
				<h3 style="padding:none;"></h3>
				<form method="post" action="php/signup_j.php">
					<p style="color:red">* required</p>
					<div class="row">
						<div class="col-5 col-s-12 col-m-12">
							<p style="border:0px solid black;margin:0px">First Name : <span style="color:red">*</span></p>
							<input type="text" name="f_name" style="width:100%" >
						</div>
						<div class="col-2 col-s-0 col-m-0">
						</div>
						<div class="col-5 col-s-12 col-m-12">
							<p style="border:0px solid black;margin:0px">Last Name : <span style="color:red">*</span></p>
							<input type="text" name="l_name" style="width:100%">
						</div>
					</div>

					<span></br></span>
					<p style="border:0px solid black;margin:0px">Job Title : <span style="color:red">*</span></p>
					<input type="text" name="job_title" style="width:100%" >

					<br></br>
					<p style="border:0px solid black;margin:0px">News Organization : <span style="color:red">*</span></p>
					<input type="text" name="org" style="width:100%" >
					<br></br>
					<p style="border:0px solid black;margin:0px">Coverage In : <span style="color:red">*</span></p>
					<div class="row">
						<div class="col-4 col-s-4 col-m-12" style="padding-right:3px">
							<input type="checkbox" name="coverage[]" value="Blogger ">Blogger <br>
							<input type="checkbox" name="coverage[]" value="Radio">Radio <br>
							<input type="checkbox" name="coverage[]" value="Newspaper">Newspaper<br>
							<input type="checkbox" name="coverage[]" value="Freelance/Writer">Freelance/Writer<br>
						</div>
						<div class="col-4 col-s-4 col-m-12" style="padding-right:3px">
							<input type="checkbox" name="coverage[]" value="Television">Television<br>
							<input type="checkbox" name="coverage[]" value="Consumer Periodicals">Consumer Periodicals<br>
							<input type="checkbox" name="coverage[]" value="Trade Periodicals">Trade Periodicals<br>
						</div>
						<div class="col-4 col-s-4 col-m-12" style="padding-right:3px">
							<input type="checkbox" name="coverage[]" value="Wire Service">Wire Service<br>
							<input type="checkbox" name="coverage[]" value="Web/On-Line Service">Web/On-Line Service<br>
							<input type="checkbox" name="coverage[]" value="Other">Other<br>
						</div>
					</div>
					<span></br></span>

					<div class="row">
						<div class="col-5 col-s-12 col-m-12">
							<p style="border:0px solid black;margin:0px">Website : </p>
							<input type="text" name="website" style="width:100%" >
						</div>
						<div class="col-2 col-s-0 col-m-0">
						</div>
						<div class="col-5 col-s-12 col-m-12">
							<p style="border:0px solid black;margin:0px">Blog :</p>
							<input type="text" name="blog" style="width:100%">
						</div>
					</div>
					<span></br></span>

					<div class="row">
						<div class="col-5 col-s-12 col-m-12">
							<p style="border:0px solid black;margin:0px">Address : <span style="color:red">*</span></p>
<!--							<input type="text" name="username" style="width:100%"  >               -->
						<textarea rows="4" cols="50" name="addr" style="width:100%" rows="2"></textarea>
						</div>
						<div class="col-2 col-s-0 col-m-0">
						</div>
						<div class="col-5 col-s-12 col-m-12">
							<p style="border:0px solid black;margin:0px">State : <span style="color:red">*</span></p>
							<input type="text" name="state" style="width:100%">
						</div>
					</div>
					<span></br></span>


					<div class="row">
						<div class="col-5 col-s-12 col-m-12">
							<p style="border:0px solid black;margin:0px">City : <span style="color:red">*</span></p>
							<input type="text" name="city" style="width:100%" >
						</div>
						<div class="col-2 col-s-0 col-m-0">
						</div>
						<div class="col-5 col-s-12 col-m-12">
							<p style="border:0px solid black;margin:0px">Pin Code : <span style="color:red">*</span></p>
							<input type="text" name="pincode" style="width:100%">
						</div>
					</div>
					<span></br></span>

					<div class="row">
						<div class="col-5 col-s-12 col-m-12">
							<p style="border:0px solid black;margin:0px">Contact No : <span style="color:red">*</span></p>
							<input type="text" name="contact_no" style="width:100%" >
						</div>
						<div class="col-2 col-s-0 col-m-0">
						</div>
						<div class="col-5 col-s-12 col-m-12">
							<p style="border:0px solid black;margin:0px">E-Mail : <span style="color:red">*</span></p>
							<input type="text" name="email" style="width:100%">
						</div>
					</div>
					<span></br></span>

					<div class="row">
						<div class="col-5 col-s-12 col-m-12">
							<p style="border:0px solid black;margin:0px">Password : <span style="color:red">*</span></p>
							<input type="password" name="password" style="width:100%" >
						</div>
						<div class="col-2 col-s-0 col-m-0">
						</div>
						<div class="col-5 col-s-12 col-m-12">
							<p style="border:0px solid black;margin:0px">Confirm Password : <span style="color:red">*</span></p>
							<input type="password" name="confirm_password" style="width:100%">
						</div>
					</div>
					<span></br></span>

					<input type="checkbox" name="tnc" value="t&c ">I Agree with <span><a href="" target="_blank" style="color:blue;text-decoration:underline;">Terms and Conditions</a></span> <br>					
					
					<h1 style="text-align:center;border:none"><input type="submit" name="submit" value="Create Account" ></h1>
					
					
				</form>
			</div>
			<div class="col-4 col-m-12" style="margin:50px 0px 100px 0px;padding:5px 0px 25px 5px;background-color:#F5F5F5">
				<h2 style="text-align:center;border:none;">Features for Journalist</h2>
				<br></br>
				<ul class="squares">
					<li style="width:100%">
						View news based on plastic category.<br></br>
					</li>
					<li style="width:100%">
						Photo with news.<br></br>
					</li>
					<li style="width:100%">
						Download news<br></br>
					</li>
					<li style="width:100%">
						Subscribe Yearly
					</li>
				</ul>
				<h2 style="text-align:center;border-top:2px solid #E0E0E0;"><br>Or Register as</h2> 
				<ul class="links" >
					<li class="links" style="width:50%;">
						<a href="register_pr.html" target="_parent"style="text-align:center">PR Agency</a>
					</li>
					<li class="links" style="width:50%;text-align:centre">
						<a href="register_c.html" target="_parent"style="text-align:center">Company</a>
					</li>
				</ul>
				
			</div>
			<div class="col-1 col-m-0">
			</div>
		</div>
		
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