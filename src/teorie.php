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
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
      				<a href="index.php" class="navbar-brand" href="#"><img src="logo.png" style="height:25px;" class="logo"></a>
    			</div>
    			<div  class="nav navbar-nav">
					<div class="btn-group">
				  		<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" title="Hlavní nabídka">
				    		<a href="javascript:void(0)">
								<img src="menuicon.png"style="width:50px;height:50px;">
							</a>
							</button>
				    		<ul class="dropdown-menu" role="menu">
					      		<li><a href="index.php">Home</a></li>
			      				<li><a href="teorie.php">Teorie</a></li>
			      				<li><a href="procvicovani.php">Procvičování</a></li>
			      				<li><a href="statistiky.php">Statistiky</a></li>
			      				<li><a href="profil.php">Profil</a></li>
					    	</ul>
					</div>
				</div>
				<ul class="nav navbar-nav navbar-right">
			      <li><a href="registrace.php"><div class="registrace"><span class="glyphicon glyphicon-user"></span> Sign Up</div></a></li>
			      <li><a href="login.php"><div class="registrace"><span class="glyphicon glyphicon-log-in"></span> Login</div></a></li>
			    </ul>
			    <div class="search">
					<form class="navbar-form navbar-right" action="#">
				      	<div class="input-group">
						    <input class="form-control" id="myInput" type="text" placeholder="Search.." data-toggle="tooltip" title="Vyhledávání">
						    <script>
								$(document).ready(function(){
								  $("#myInput").on("keyup", function() {
								    var value = $(this).val().toLowerCase();
								    $("#myDIV *").filter(function() {
								      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
								    });
								  });
								});
							</script>
						    <div class="input-group-btn">
						      <button class="btn btn-default" type="submit">
						        <i class="glyphicon glyphicon-search"></i>
						      </button>
						    </div>
						</div>
				    </form>	
			    </div>			
			</div>
		</nav>
<!-------------- nutné u všech ------------------------------>
<!-- zkusit zprovoznit scrollspy-->
		<div class="container">
			<div id="myDIV">
				<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
				  <div class="container-fluid">			    
				    <div>
				      <div class="collapse navbar-collapse" id="myNavbar">
				        <ul class="nav navbar-nav">
				          <li><a href="#section1">Logika a množiny</a></li>
				          <li><a href="#section2">Aritmetika</a></li>
				          <li><a href="#section3">Algebraické rovnice</a></li>
				          <li><a href="#section4">Funkce</a></li>
				          <li><a href="#section5">Posloupnosti a řady</a></li>
				          <li><a href="#section6">Pravděpodobnost a statistika</a></li>
				          <li><a href="#section7">Planimetrie</a></li>
				          <li><a href="#section8">Stereometrie</a></li>
				          <li><a href="#section9">Analytická geometrie</a></li>
				        </ul>
				      </div>
				    </div>
				  </div>
				</nav>    
				<div class="col-xs-1"></div>
				<div class="col-xs-10">
				<div id="section1" class="container-fluid">
				  <h1>Logika a množiny</h1>
				  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
				  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
				</div>
				<div id="section2" class="container-fluid">
				  <h1>Aritmetika</h1>
				  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
				  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
				</div>
				<div id="section3" class="container-fluid">
				  <h1>Algebraické rovnice</h1>
				  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
				  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
				</div>
				<div id="section4" class="container-fluid">
				  <h1>Funkce</h1>
				  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
				  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
				</div>
				<div id="section5" class="container-fluid">
				  <h1>Posloupnosti a řady</h1>
				  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
				  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
				</div>
				<div id="section6" class="container-fluid">
				  <h1>Pravděpodobnost a statistika</h1>
				  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
				  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
				</div>
				<div id="section7" class="container-fluid">
				  <h1>Planimetrie</h1>
				  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
				  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
				</div>
				<div id="section8" class="container-fluid">
				  <h1>Stereometrie</h1>
				  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
				  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
				</div>
				<div id="section9" class="container-fluid">
				  <h1>Analytická geometrie</h1>
				  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
				  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
				</div>
				</div>
			</div>
		</div>
		<footer>
			<a href="https://www.alej.cz" target="_blank">
				<img class="school" src="GNA.jpg" alt="Gymnázium Nad Alejí" title="Gymnázium Nad Alejí">
			</a> 
		</footer>
	</body>
</html> 