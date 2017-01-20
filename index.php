
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- font bootstrap and custom css -->
	<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Lato'  >
	<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	
	<title>jsepar00 lounge</title>

	<!-- Google analytics script -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-71206174-1', 'auto');
	  ga('send', 'pageview');
	</script>
</head>
<body>
  	<div class="container">
  		<div class="row">
  		<header>
	  		<h1 class="text-center">JSEPAR00 LOUNGE</h1>
	  	</header>
	  		<div class="col-lg-8 col-md-10 col-xs-12 col-centered">
	  			<ul class="nav">
	  			<?php  require 'php/scan.php'; ?>	
				</ul>
	  		</div>
  		</div>
  	</div>

  	<script src="js/bootstrap.min.js"></script>
</body>
</html>