<?php 
	header("Content-Type: text/html; charset=utf-8");
 ?>
 <!DOCTYPE html>
 <html lang="uzb">
 <head>
 	<meta charset="utf-8">
 	<title>MNews</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta name="description" content="">
    <meta name="author" content="">
 	<link href="css/style.css" rel="stylesheet">
 </head>
 <body>
 	<!-- Header start -->
 	<?php 
 		include_once('blocks/header.php');
 	 ?>
 	<!-- !Header finish -->
 	<div class="container">
 	<!-- ====Malumotlar==== -->
 		<?php 
    		include_once('blocks/slide.php');
   		?>
 	<!-- ====Malumotlar finish==== -->
 		<?php 
 			include_once('keyss.php');
 		 ?>


 	</div>

 	<!-- Footer -->
 	<?php 
    	include_once('blocks/footer.php');
   	 ?>
   	<!-- !Footer finished -->
   	 <script type="text/javascript" src="js/jquery.js"></script>
   	 <script type="text/javascript" src="js/main.js"></script>
 </body>
 </html>