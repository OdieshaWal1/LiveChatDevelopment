<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include('form_validation.php'); ?>
    <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
    <link rel="stylesheet" href="public/CSS/style.css">
   

  <title>Academic Advisement Portal</title>

  <style>
  	html {
		background-image: url(public/Images/utech-gate.jpg);
		background-image: no-repeat;
		background-attachment: fixed; 
		background-size: cover;
		color: black;
		font-weight: lighter;
		font-size: 15px;
		width: 100%;
		font-family: "Times New Roman", Times, serif;
}

::placeholder {
    color: white;
    opacity: 0.4;
}
  </style>

</head>

<body>
	<div class="overlay">
<div class="login-wrap">
	<div class="login-html">


		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>

		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab" style="margin-top: 30%;">Sign in</label>


		
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user"  class="label">Username</label>
					<input placeholder="ID Number" id="user" type="number" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input placeholder="Enter Password" id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="signup.php">New Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</body>

</html>
