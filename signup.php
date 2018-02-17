<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
    <?php include('form_validation.php'); ?>
    <link rel="stylesheet" href="public/CSS/style2.css">
   

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
		<form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
<div class="login-wrap">
	<div class="login-html">


		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>

		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab" style="margin-top: 30%;">Sign up</label>


		
		<div class="login-form">
			


			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">First Name</label>
					<input placeholder="John" name="name" value="<?= $name ?>" id="user" type="text" class="input">
					<spam class="error"><?= $name_error ?></spam>
				</div>
				<div class="group">
					<label for="user" class="label">Last Name</label>
					<input placeholder="Doe" name="Lastname" value="<?= $Lastname ?>" id="user" type="text" class="input">

					<spam class="error"><?= $Lastname_error ?></spam>
				</div>

				<div class="group">
					<label for="user" class="label">ID Number</label>
					<input placeholder="1406948" name="phone" id="user" type="number" class="input">
				</div>


				<div class="group">
					<label for="user" class="label">Specialization</label>
					<input placeholder="Networking" name="spec" value="<?= $spec ?>" id="user" type="text" class="input">
					<spam class="error"><?= $spec_error ?></spam>
				</div>


				<div class="group">
					<label for="user" class="label">Phone Number</label>
					<input placeholder="1(876)416-8646" id="user" type="text" name="phone" value="<?= $phone ?>" class="input">
					<spam class="error"><?= $phone_error ?></spam>
				</div>
				<div class="group">
					<label for="user" class="label">Year of Study</label>
					<input placeholder="4th year" id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="passwor d" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input placeholder="name@domain.com" name="email" value="<?= $email ?>" id="pass" type="text" class="input">
					<spam class="error"><?= $email_error ?></spam>
				</div>
				<div class="group">
					<input for="tab-2" type="submit" class="button" value="Sign Up" >
				
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="index.php">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</form>
</body>

</html>
