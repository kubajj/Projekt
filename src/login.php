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
		<div class="container">
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
				<div class="jumbotron">						
					<div class="obsah">					
						<form action="#">
							<div class="input-group">
							    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
							</div>
							<div class="input-group">
							    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
							</div>
						  	<div class="checkbox">
						    	<label><input type="checkbox"> Pamatovat si mě</label>
						  	</div>
						  	<button type="submit" class="btn btn-default">Potvrdit</button>
						</form> 
					</div>
				</div>
			</div>
		</div
		<?php include 'footer.php';?>
	</body>
</html>    