<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SignUp Form</title>
    <source src="index.php" type="code">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
<script src="script.js"></script>
</head>
<body>
	<header id="form">
		<nav class="fbheader" style="padding: 0% 12%">
			<div class="container">
				<div class="row" style="font-size:14px">
					<div class="col-lg-7" style="margin-top: 2%;">
						<img id=main-head height="55" width="200" src="images\logo.PNG" alt="logo">
					</div>
					<div class="col-lg-5" style="margin-top: 0%;">
						<div class="row"  style="margin-bottom:-2%; margin-top: 2%;">
							<div class="col-lg-5">
								<label for="mail">Email or Phone</label>
							</div>
							<div class="col-lg-5">
								<label for="pass" style="margin-left: -10%">Password</label>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-5">
								<input type="text" name="mail" class="form-controlsetting field" style="width: 100%">
							</div>
							<div class="col-lg-5">
								<input type="password" name="pass" class="form-controlsetting field" style="margin-left:-10%; width: 100%">
							</div>
							<div class="col-lg-2">
								<a href="#" style="text-decoration: none;"><input type="submit" id="btn" class="btn text-white form-controlsetting" value="LogIn" onsubmit="notNull('field');"></a>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-5"></div>
							<div class="col-lg-5" style="margin-left:-3%;">
								<a href="#" style="color: #9cb4d8;">Forgotten account?</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<section style="background-color: #e1e4ef;  height: 630px; padding: 3% 12%">
		<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<p style="font-size: 20px; color: #0e385f"><b>Facebook helps you connect and share with the people in your life.</b>
				<br>
				<img src="images/fb-img.png" alt="network">
				</p>
			</div>
			<div class="col-lg-5" style="margin-left: 6%; margin-top: -2%;">
				<h2>Create a new account</h2>
				<h5 style="font-size: 19px; margin-bottom:25px;">It's free and always will be.</h5>
					<form action="Register_User.php" method="POST">
						<div class="row">
							<div class="col-lg-6 form-group">
								<input type="text" name="fname" placeholder="First name" class="form-control otherField">
							</div>
							<div class="col-lg-6 form-group">
								<input type="text" name="lname" placeholder="Sur name" class="form-control otherField" style="margin-left: -10%; width: 110%;">
							</div>
						</div>
						<div class="row" style="margin-top: -2%">
							<div class="col-lg-12 form-group">
								<input type="text" name="id" placeholder="Mobile Number or email address" class="form-control otherField">
							</div>
						</div>
						<div class="row" style="margin-top: -2%">
							<div class="col-lg-12 form-group">
								<input type="password" name="new-pass" placeholder="New Password" class="form-control otherField">
							</div>
						</div>
						<div class="row" style="margin-bottom:0px;">
							<div class="col-lg-4 form-group">
								<label><h5>Birthday</h5></label>
							</div>
							<div class="col-lg-8"></div>
						</div>
						<div class-="row" style="margin-top: -2%">
							<div class="col-lg-6" style="margin-top: -7%; margin-left: -3.5%;">
								<div class="row">
									<div class="col-lg-4">
										<select name="date" id="date">
											<option value="day">Day</option>
											<option value="1">1</option><option value="2">2</option><option value="3">3</option>
											<option value="4">4</option><option value="5">5</option><option value="6">6</option>
											<option value="7">7</option><option value="8">8</option><option value="9">9</option>
											<option value="10">10</option><option value="11">11</option><option value="12">12</option>
											<option value="13">13</option><option value="14">14</option><option value="15">15</option>
											<option value="16">16</option><option value="17">17</option><option value="18">18</option>
											<option value="19">19</option><option value="20">20</option><option value="21">21</option>
											<option value="22">22</option><option value="23">23</option><option value="24">24</option>
											<option value="25">25</option><option value="26">26</option><option value="27">27</option>
											<option value="28">28</option><option value="29">29</option><option value="30">30</option>
											<option value="31">31</option>
										</select>
									</div>
									<div class="col-lg-4" style="padding-left: 10%">
										<select name="month" id="month">
											<option value="month">Month</option>
											<option value="jan">Jan</option><option value="feb">Feb</option><option value="march">March</option>
											<option value="april">April</option><option value="may">May</option><option value="june">June</option>
											<option value="july">July</option><option value="aug">Aug</option><option value="sep">Sep</option>
											<option value="oct">Oct</option><option value="nov">Nov</option><option value="dec">Dec</option>
										</select>
									</div>
									<div class="col-lg-4" style="padding-left: 13%">
										<select name="year" id="year">
											<option>Year</option><option>2018</option><option>2017</option><option>2016</option><option>2015</option>
											<option>2014</option><option>2013</option><option>2012</option><option>2011</option><option>2010</option>
											<option>2009</option><option>2008</option><option>2007</option><option>2006</option><option>2005</option>
											<option>2004</option><option>2003</option><option>2002</option><option>2001</option><option>2000</option>
											<option>1999</option><option>1998</option><option>1997</option><option>1996</option><option>1995</option>
											<option>1994</option><option>1993</option><option>1992</option><option>1991</option><option>1990</option>
											<option>1989</option><option>1988</option><option>1987</option><option>1986</option><option>1985</option>
											<option>1984</option><option>1983</option><option>1982</option><option>1981</option><option>1980</option>
											<option>1979</option><option>1978</option><option>1977</option><option>1976</option><option>1975</option>											
										</select>
									</div>
								</div>
							</div>
							<div class="col-lg-5" style="margin-left: 52%; margin-top: -7%;">
									<a href="#" style="color: #365899; font-size: 11px"><p>Why do I need to provide my date of birth?</p></a>
								</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<p>
											<input type="radio" id="female">
											 <label for="female" style="font-size: 18px;">Female</label>
											 <input type="radio" id="male" style="margin-left:10%;">
											 <label for="male" style="font-size: 18px;">Male</label>
										</p>
									</div>
									<div class="col-lg-6"></div>
								</div>
								<div class="row">
								<div class="col-lg-10" style="margin-top: -2%; ">
									<p style="font-size: 11px; color: #777">
										By clicking Sign Up, you agree to our <a href="#" style="color: #365899;">Terms</a>, <a href="#" style="color: #365899;">Data Policy</a> and <a href="#" style="color: #365899;">Cookie Policy</a>. You may receive SMS notifications from us and can opt out at any time.
									</p>
								</div>
								</div>
								<div class="row">
									<br>
									<div class="col-lg-6" style="margin-left:0%;">
										<button class="btn btn-success" style="width:100%; height:90%; background-color: #62a24f" onsubmit="notNull('otherField');"><h5>Sign Up</h5></button>
									</div>
									<div class="col-lg-6"></div>
								</div>
								<hr>
								<div class="row">
									<div class="col-lg-10">
										<p style="font-size: 12px; color: #777">
											<b><a href="#" style="color: #365899;">Create a Page</a> for a celebrity, band or business.</b>
										</p>
									</div>
								</div>
						</div>
					</form>
			</div>
		</div>
		</div>
	</section>
</body>
</html>
