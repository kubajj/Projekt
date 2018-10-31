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
		<script src="https://unpkg.com/react@16/umd/react.production.min.js" crossorigin></script>
  		<script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js" crossorigin></script>
	</head>

	<body>	
		<?php include 'nav.php';?>
		<div class="container">
			<div class="jumbotron">			
				<p class="obsah"> Vítej. </p>
				<div id="like_button_container" class="like"></div>
			</div>			
		</div>		
		
  		<script src="like_button.js"></script>
		<?php include 'footer.php';?>
	</body>
</html>    