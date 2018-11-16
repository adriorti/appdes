<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    
    <link rel="stylesheet" type="text/css" href="assets/css/jquerymobile.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=2">
    <title>App</title>
</head>
<body>


	<div data-role="page" id="splash">
		<h1>Voll der naise Splashscreen</h1>
		<p>Splashi splash, noch mehr splash</p>
	</div>
	
	<div data-role="page" id="home">
		<div class="container">
			

			<h1>App</h1>
			<a href="#seite2" data-transition="pop"><button class="btn btn-primary">Weiter</button></a>
		</div>
	</div>
	
	<div data-role="page" id="seite2">
		</div>
	
	<div data-role="page" id="settings">
		<h1>Einstellungen</h1>
	</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"> </script>
<script> 
$(document).ready(function(){

   setTimeout(function(){
	  $(':mobile-pagecontainer').pagecontainer('change', '#settings');
	}, 2000);
});
</script> 
</body>
</html>

   

