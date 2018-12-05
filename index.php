<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    
    <link rel="stylesheet" type="text/css" href="assets/css/jquerymobile.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous">
		</script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"> </script>
    <title>App</title>
</head>
<body>

 
	<div data-role="page" id="splash">
		<div class="container">
			<img src="assets/images/logo.png" alt="logo" class="logo">
		</div>
	</div>
	
	<div data-role="page" id="intro">
		<div class="container">
			<h1></h1>
			<p class="text-left"><a href="#skip" data-transition="pop">
		<img src="assets/images/close-button.png" alt="logo" class="cancel">
			</a> </p> 
			<div class="text-center">
				<p class="tutorial">Willkommen bei Filmfinder!</p>
				<img src="assets/images/logo.png" alt="logo" class="introduction-img">
				<p class="intro-text">Wir helfen dir dabei, die richtigen Filme für deinen perfekten Filmabend zu finden!</p>
			</div>
		</div>
		
		  <ul class="pagination pagination-sm seitenzahl">
		    <li class="page-item disabled">
		      <a class="page-link" href="#" aria-label="Previous">
		        <span aria-hidden="true"><i class="fas fa-circle"></i></span>
		        <span class="sr-only">Previous</span>
		      </a>
		    </li>
		    <li class="page-item disabled">
		      <a class="page-link" href="#" aria-label="Next">
		        <span aria-hidden="true"><i class="far fa-circle"></i></span>
		        <span class="sr-only">Next</span>
		      </a>
		    </li>
		     <li class="page-item disabled">
		      <a class="page-link" href="#" aria-label="Next">
		        <span aria-hidden="true"><i class="far fa-circle"></i></span>
		        <span class="sr-only">Next</span>
		      </a>
		    </li>
		  </ul>
		  
	</div>
	
<!--
	<div data-role="page" id="skip"> 
    <div data-role="content">
        <p>
            <ul data-role="listview" data-inset="true" data-theme="c">
                <li id="listitem">Swipe Right to view Page 1</li>
            </ul>
        </p>
    </div>
</div>
-->

<!--
<div data-role="page" id="new"> 
    <div data-role="content">
        
        <ul data-role="listview" data-inset="true" data-theme="c">
            <li data-role="list-divider">Navigation</li> 
            <li><a href="#home">Back to the Home Page</a></li>
        </ul>
        
        <p>
            Yeah!<br />You Swiped Right to view Page 1
        </p>
    </
-->
</div>

	
	<div data-role="page" id="intro2">
		<div class="container">
			<h1></h1>
			<p class="text-left"><a href="#skip" data-transition="pop">
		<img src="assets/images/close-button.png" alt="logo" class="cancel">
			</a> </p>
			<div class="text-center">
				<p class="tutorial">Easy und schnell!</p>
				<img src="assets/images/swipe.png" alt="logo" class="introduction">
				<p class="intro-text">Einfach nach rechts oder links Swipen.</p>
			</div> 
		</div>
		
		 <ul class="pagination pagination-sm seitenzahl">
		    <li class="page-item disabled">
		      <a class="page-link" href="#" aria-label="Previous">
		        <span aria-hidden="true"><i class="far fa-circle"></i></span>
		        <span class="sr-only">Previous</span>
		      </a>
		    </li>
		    <li class="page-item disabled">
		      <a class="page-link" href="#" aria-label="Next">
		        <span aria-hidden="true"><i class="fas fa-circle"></i></span>
		        <span class="sr-only">Next</span>
		      </a>
		    </li>
		     <li class="page-item disabled">
		      <a class="page-link" href="#" aria-label="Next">
		        <span aria-hidden="true"><i class="far fa-circle"></i></span>
		        <span class="sr-only">Next</span> 
		      </a>
		    </li>
		  </ul>		
	</div>
		
		<div data-role="page" id="intro3">
		<div class="container">
			<h1></h1>
			<p class="text-left"><a href="#skip" data-transition="pop">
		<img src="assets/images/close-button.png" alt="logo" class="cancel">
			</a> </p>
			<div class="text-center">
				<p class="tutorial">Wir erstellen deine Liste!</p>
				<img src="assets/images/swipe-weiter.png" alt="logo" class="introduction">
				
	
			
		</div> 
		
			<a href="#skip" data-transition="pop">
				<button type="button" class="btn startbutton text-center">Los!</button>
			</a>
		
			<ul class="pagination pagination-sm seitenzahl">
			    <li class="page-item disabled">
			      <a class="page-link" href="#" aria-label="Previous">
			        <span aria-hidden="true"><i class="far fa-circle"></i></span>
			        <span class="sr-only">Previous</span>
			      </a>
			    </li>
			    <li class="page-item disabled">
			      <a class="page-link" href="#" aria-label="Next">
			        <span aria-hidden="true"><i class="far fa-circle"></i></span>
			        <span class="sr-only">Next</span>
			      </a>
			    </li> 
			     <li class="page-item disabled">
			      <a class="page-link" href="#" aria-label="Next">
			        <span aria-hidden="true"><i class="fas fa-circle"></i></span>
			        <span class="sr-only">Next</span>
			      </a>
			    </li>
		  	</ul>
			
			
			
		</div>
		
		
	</div>
	

	<div data-role="page" id="skip">
		<div class="text-center start">
				<h1>Liste von deinen Filme</h1>
				
				<p class="start-text">Michi's Auswahl
				</p>
					
	<?php
		$servername = "10.35.249.86:3306";
		$username = "k49038_adriana";
		$password = "uhAk8*66";
		$dbname = "k49038_app";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		
		$sql = "SELECT * FROM App";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo "id: " . $row["ID"]. " - Name: " . $row["Name"]. " " . $row["Genre"]. "<br>";
		    }
		} else {
		    echo "0 results";
		}
		$conn->close();
		?>

			</div>
	</div>

	
	

<script> 
$(document).ready(function(){

   setTimeout(function(){
	  $(':mobile-pagecontainer').pagecontainer('change', '#intro');
	}, 2000);
});

$("#intro").swipeleft(function() {
    $.mobile.changePage("#intro2");
});

$("#intro2").swipeleft(function() {
    $.mobile.changePage("#intro3");
});
    
</script>

</body>
</html>

   

