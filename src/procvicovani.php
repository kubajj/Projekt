<!DOCTYPE html>
<html lang="cs">
	<head>
		<title>Computatis</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		<script src="generate.js"></script>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>	
		<?php include 'nav.php';?>
		<h1 class="nadpis">Procvičování</h1>
		<div class="vyber">			
			<div class="btn-group">
				<button type="button" class="btn" onclick="rovnice(); oObrazek(); /*reseni()*/">Rovnice</button>
				<button type="button" class="btn" 
				onclick="funkce(); obrazek('funkce.png')">Funkce</button>
				<button type="button" class="btn" onclick="document.getElementById('obs').innerHTML = Aritmetika();document.getElementById('obrazek').src = ''">Aritmetika</button>			
			</div>
		</div>

		<!--div id="procvicovani" class="btn-group">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" title="Procvičování">
				<a href="javascript:void(0)">
					<h1 id="procvicovani">Procvičování</h1>
				</a>
			</button>
			<ul class="dropdown-menu" role="menu">
				<button type="button" class="btn" onclick="rovnice(); oObrazek(); /*reseni()*/">Rovnice</button>
				<button type="button" class="btn" 
				onclick="funkce(); obrazek('funkce.png')">Funkce</button>
				<button type="button" class="btn" onclick="document.getElementById('obs').innerHTML = Aritmetika();document.getElementById('obrazek').src = ''">Aritmetika</button>			
			</ul>
		</div-->

		<div class="container">			
			<div class="col-sm-12">
				<div class="jumbotron">	
					<div class="col-sm-7">	
						<p id="obs" class="obsah">Toto někdy bude obsah.</p>	
						<img src="" id="obrazek">	
					</div>
					<div class="col-sm-3" id="reseni">
						<div id="reseni" class="input-group">
							<input type="text" class="form-control" placeholder="Řešení" data-toggle="tooltip" title="Zde prosím napište své řešení">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit" onClick="confirm('Jste si jist?')">
								    <i class="glyphicon glyphicon-send"></i>
								</button>
							</div>
						</div>					
					</div>
				</div>
			</div>			
		</div>
		<?php include 'footer.php';?>
	</body>
</html> 