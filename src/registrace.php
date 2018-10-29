<!DOCTYPE html>
<html lang="cs">
	<head>
		<title>Computatis</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>	
		<?php include 'nav.php';?>
		<?php
		// define variables and set to empty values
		$nameErr = $emailErr = $passwordErr = "";
		$name = $email = $password = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  if (empty($_POST["name"])) {
		    $nameErr = "Uživatelské jméno je povinné";
		  } else {
		    $name = test_input($_POST["name"]);
		    // check if name only contains letters and whitespace
		    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		      $nameErr = "Only letters and white space allowed";
		    }
		  }
		  
		  if (empty($_POST["email"])) {
		    $emailErr = "Emailová adresa je povinná";
		  } else {
		    $email = test_input($_POST["email"]);
		    // check if e-mail address is well-formed
		    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		      $emailErr = "Invalid email format";
		    }
		  }
		  if (empty($_POST["password"])) {
		    $passwordErr = "Heslo je povinné";
		  } else {
		    $password = test_input($_POST["email"]);
		  }
		}
		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
		?>
		<div class="container">
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
				<div class="jumbotron">						
					<div class="obsah">					
						<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
							<div class="input-group">
							    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							    <input id="name" type="text" class="form-control" name="name" placeholder="Uživatelské jméno *" value="<?php echo $name;?>">
							</div>
							<span class="error"><?php echo $nameErr;?></span>
							<div class="input-group">
							    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							    <input id="email" type="text" class="form-control" name="email" placeholder="Email *" value="<?php echo $email;?>">							    
							</div>
							<span class="error"><?php echo $emailErr;?></span>
							<div class="input-group">
							    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							    <input id="password" type="text" class="form-control" name="password" placeholder="Heslo *" value="<?php echo $password;?>">
							</div>
							<span class="error"><?php echo $passwordErr;?></span>
						  	<!--div class="checkbox">
						    	<label><input name="remember" id="remember" type="checkbox" value="<?php /*echo*/ $remember;?>"> Pamatovat si mě</label>
						  	</div-->
							<p><span class="pov">* povinné pole</span></p>
						  	<button type="submit" class="btn btn-default" value="Submit">Potvrdit</button>
						</form> 
					</div>
				</div>
			</div>
		</div>
		<?php
		echo "<h2>Your Input:</h2>";
		echo $name;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $password;
		?>
		<?php include 'footer.php';?>
	</body>
</html>    