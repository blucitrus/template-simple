<?php 
	ob_start();
	$active = "home";
	include_once('inc/header.php');
	$title = ob_get_contents();
	ob_end_clean();
	$title = str_replace("%TITLE%", "Untitled Page Title", $title);
	$title = str_replace("%METADESC%", "Untitled Page Description", $title);
	echo $title;
?>


<!-- Include HTML here -->


<?php include_once('inc/footer.php'); ?>
