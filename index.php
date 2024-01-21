<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/login.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">


	</head>
	<body>

		<div class="alignment-center">
			<div class='wraper'>
				<h5>Login!</h5>
				<p>Create perfect resumes for the modern job market.</p>
				<!-- form input  starts here-->
			<form action="include/login.inc.php" method="POST">
			   	<div class="form-group">
				<label class="form-label">Username</label>
				<input type="text" name="username" placeholder="Enter Username" class="form-control">		
				</div>
				<div class="form-group" id="main-pwd">
				<label class="form-label">Password</label>
				<input type="password" name="pwd" placeholder="Enter Password" class="form-control" id="pwd">
				<img src="images/eye-regular.svg"class="p-icon">
				<img src="images/eye-slash-solid.svg"class="p-icon2">	
				</div>
				<div class="cta">
					<button class="btn btn-primary">Login</button>
				</div>
			</form>
				<p class="text-center loginlinktext" >Don't have account yet? <a href="signup.php" class="link text-primary">Create Account</a></p>
			</div>


		</div>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

