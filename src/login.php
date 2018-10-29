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
      				<a href="index.html" class="navbar-brand" href="#"><img src="logo.png" style="height:25px;" class="logo"></a>
    			</div>
    			<div  class="nav navbar-nav">
					<div class="btn-group">
				  		<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" title="Hlavní nabídka">
				    		<a href="javascript:void(0)">
								<img src="menuicon.png"style="width:50px;height:50px;">
							</a>
							</button>
				    		<ul class="dropdown-menu" role="menu">
					      		<li><a href="index.html">Home</a></li>
			      				<li><a href="teorie.html">Teorie</a></li>
			      				<li><a href="procvicovani.html">Procvičování</a></li>
			      				<li><a href="statistiky.html">Statistiky</a></li>
			      				<li><a href="profil.html">Profil</a></li>
					    	</ul>
					</div>
				</div>
				<ul class="nav navbar-nav navbar-right">
			      <li><a href="registrace.html"><div class="registrace"><span class="glyphicon glyphicon-user"></span> Sign Up</div></a></li>
			      <li><a href="login.html"><div class="registrace"><span class="glyphicon glyphicon-log-in"></span> Login</div></a></li>
			    </ul>
			    <div class="search">
					<form class="navbar-form navbar-right" action="#">
				      	<div class="input-group">
						    <input type="text" class="form-control" placeholder="Search" data-toggle="tooltip" title="Vyhledávání">
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
		</div>
		<footer>
			<a href="https://www.alej.cz" target="_blank">
				<img  src="GNA.jpg" alt="Gymnázium Nad Alejí" class="img-circle" alt="Gymnázium Nad Alejí">
			</a> 
		</footer>
	</body>
</html>    