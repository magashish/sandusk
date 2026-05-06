<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sandusky County Dog Warden</title>
    <!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
	  <?php include("head.php"); ?>
	  <div class="container">
		<div id="myCarousel" class="carousel slide">
			<ol class="carousel-indicators">
				<li class="active" data-slide-to="0" data-target="#myCarousel"></li>
				<li data-slide-to="1" data-target="#myCarousel"></li>
				<li data-slide-to="2" data-target="#myCarousel"></li>
				<li data-slide-to="3" data-target="#myCarousel"></li>
				<li data-slide-to="4" data-target="#myCarousel"></li>
				<li data-slide-to="5" data-target="#myCarousel"></li>
				<li data-slide-to="6" data-target="#myCarousel"></li>
				<li data-slide-to="7" data-target="#myCarousel"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active"><img class="img-responsive" src="uploads/images/Carousel/flag_park.jpg" alt="" /></div>
				<div class="item"><img class="img-responsive" src="uploads/images/Carousel/shining_leaves.jpg" alt="" /></div>
				<div class="item"><img class="img-responsive" src="uploads/images/Carousel/commissioner3.jpg" alt="" /></div>
				<div class="item"><img class="img-responsive" src="uploads/images/Carousel/clyde_park.jpg" alt="" /></div>
				<div class="item"><img class="img-responsive" src="uploads/images/Carousel/courthouse1.jpg" alt="" /></div>
				<div class="item"><img class="img-responsive" src="uploads/images/Carousel/library.jpg" alt="" /></div>
				<div class="item"><img class="img-responsive" src="uploads/images/Carousel/geese.jpg" alt="" /></div>
				<div class="item"><img class="img-responsive" src="uploads/images/Carousel/courthouse2.jpg" alt="" /></div>
			</div>
			<div>
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">
					<span class="icon-prev"></span>
				</a>

				<a class="carousel-control right" href="#myCarousel" data-slide="next">
					<span class="icon-next"></span>
				</a>
			</div>
		</div>
		  
	  </div>
  
  
  	  <?php include("footer.php"); ?>
  </body>
</html>
<?php
echo "<mm:dwdrfml documentRoot=" . __FILE__ .">";$included_files = get_included_files();foreach ($included_files as $filename) { echo "<mm:IncludeFile path=" . $filename . " />"; } echo "</mm:dwdrfml>";
?>