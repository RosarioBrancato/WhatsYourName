<?php

if(isset($_GET['name']) && strlen(trim($_GET['name'])) > 0) {
	$name = $_GET['name'];
} else {
	header('Location: index.html');
	die();
}

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Rosario Brancato">

    <title>What's Your Name?</title>

	<!--Google jQuery csn-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type="text/css"/>
	<!--My CSS-->
	<link rel="stylesheet" href="css/stile.css" type="text/css" />
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"  type="text/css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" type="text/css">

</head>

<body>
	<div class="center-absolute">
		<h1>Hello <?php echo $name; ?>!</h1>
		<p><a class="btn btn-default" role="button" href="index.html">Again!</a></p>
	</div>
</body>
</html>