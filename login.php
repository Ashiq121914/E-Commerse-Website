
<?php include('server.php') ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Mosh</title>
	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lato:300i,700i&display=swap" rel="stylesheet"> 
	<!-- stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css" media="all" />
	
	
	
</head>

<body>

	<div class="container mt-5">

			          
			           <form action="login.php" method="POST">
							<?php include('errors.php'); ?>
						<div class="form-group">
							<label for="username">Username:</label>
								<input id="username" type="text"placeholder="Username"class="form-control"name="username"required value="<?php echo $username; ?>"/>
							
						</div>
						
						<div class="form-group">
							<label for="password">Password:</label>
								<input id="password" type="password"placeholder="password"class="form-control" name="password"required />
							
						</div>
						
						

					<div class="input-group">
					  	  <button type="submit" class="btn btn-success" name="login">Register</button>
					  	</div>
								          
						
					   </form>
					   <p>Not a member yet?<a href="signup.php">Singup</a></p>

			        


	</div>



	<!-- script -->

	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
		<script src="https://kit.fontawesome.com/fb438b628f.js"></script>



</body>
</html>