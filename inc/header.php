<?php
    include_once('inc/global/functions.php')
?>





<?php include_once('keywords.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<title>%TITLE%</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="%METADESC%" />  
		<meta name="keywords" content="<?php echo $keywords; ?>" />
		<meta name="robots" content="index,follow" />
		<link rel="stylesheet" href="css/main.css">
		
		<!-- import google fonts -->
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<script src="../js/jquery-2.1.4.min.js" type="text/javascript"></script>
	</head>
	<body>
		<header>
			<div class="inner">
                <a class="<?= ($active == 'home') ? 'active':''; ?>" href="index.php">Home</a>
			</div>
		</header>