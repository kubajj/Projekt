<?php 
echo '<nav class="navbar navbar-inverse">
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
					    	</ul>
					</div>
				</div>
				<ul class="nav navbar-nav navbar-right">
			      <li><a href="profil.php"><div class="profil"><span class="glyphicon glyphicon-user"></span>Profil</div></a></li>
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
		</nav>'
?>