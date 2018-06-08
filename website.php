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
		<div class="row">
			<div class="col-1 col-m-0">
			</div>
			<div class="col-6 col-m-12" style="border-right: 2px solid #E0E0E0;margin:50px 0px 100px 0px;padding:5px 10px 5px 20px;background-color:#F5F5F5">
				<h2 style="text-align:center;border:none;">Application form for Company</h2>
				<form method="post" action="signup_c.php">
					<p style="color:red">* required</p>
					
					<p style="text-align:left;color:#002699;border-bottom:1px groove #004d00;">Company Details</p>
					<p style="border:0px solid black;margin:0px">Company Name : <span style="color:red">*</span></p>
					<input type="text" name="company_name" style="width:100%" >
					<br></br>
					
					<div class="row">
						<div class="col-5 col-s-12 col-m-12">
							<p style="border:0px solid black;margin:0px">Address : <span style="color:red">*</span></p>
<!--							<input type="text" name="username" style="width:100%"  >               -->
							<textarea rows="4" cols="50" name="address" style="width:100%" rows="2"></textarea>
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
							<p style="border:0px solid black;margin:0px">Website</p>
							<input type="text" name="website" style="width:100%" >
						</div>
						<div class="col-2 col-s-0 col-m-0">
						</div>
						<div class="col-5 col-s-12 col-m-12">
							<p style="border:0px solid black;margin:0px">Type of Organization : <span style="color:red">*</span></p>
							<select name="org">
								<option value="blank"></option>
								<option value="public_company">Public Company</option>
								<option value="private_company">Private Company</option>
								<option value="government">Government</option>
								<option value="non-profit">Non-Profit</option>
								<option value="agency">Agency</option>
							</select>
							  <br><br>
						</div>
					</div>
					<span></br></span>



					<p style="text-align:left;color:#002699;border-bottom:1px groove #004d00;">Contact Person</p>
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

					<input type="checkbox" name="coverage" value="t&c ">I Agree with <span><a href="" target="_blank" style="color:blue;text-decoration:underline;">Terms and Conditions</a></span> <br>					
					
					<h1 style="text-align:center;border:none"><input type="submit" name="submit" value="Create Account" ></h1>
					
					
				</form>
			</div>
			<div class="col-4 col-m-12" style="margin:50px 0px 100px 0px;padding:5px 0px 25px 5px;background-color:#F5F5F5">
				<h2 style="text-align:center;border:none;">Features for Company</h2>
				<br></br>
					<ul  style="list-style-type:square;width:90%;background-color:#F5F5F5;">
						<li class="links" style="width:100%">
							Post News under Category.<br></br>
						</li>
						<li class="links" style="width:100%" >
							Post news with photo.<br></br>
						</li>
						<li class="links" style="width:100%">
							Yearly Subscribtions.
						</li>
					</ul>
					<div style="">
						<p  style="text-align:center;font-size:20px;border-top:2px solid #E0E0E0;"><b>Register as</b></p>
						<br></br>
						<ul class="links" >
							<li class="links" style="line-height:0;width:33%">
								<a href="register_j.html" target="_parent">Journalist</a>
							</li>
							<li class="links" style="line-height:0;width:33%">
								<a href="register_pr.html" target="_parent">PR Agency</a>
							</li>
							<li class="links" style="line-height:0;width:33%">
								<a href="register_c.html" target="_parent">Company</a>
							</li>
						</ul>
					</div>				
			</div>
			<div class="col-1 col-m-0">
			</div>
		</div>

</body>
</html>