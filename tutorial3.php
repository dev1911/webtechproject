<!DOCTYPE html lang="en" >
<html>
<head>
	<meta charset="utf-8">
	<title>Tutorial 3</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="styles/default.css">
	<script src="js/highlight.pack.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>
</head>

<body>
<!-- <div class="container-fluid"> -->

<header >
	<?php include('header.php'); ?>
</header>
<!-- </div> -->
<nav>
	<?php include('navbar_python.php');?>
</nav>
<!-- <hr> -->
<div id="main_body" class='col-sm-12 col-md-12 col-lg-12 col-xs-12'>
	<div id="left_article"  class='col-lg-3 hidden-xs hidden-md hidden-sm' align="left"><?php include("left_bar.php");?></div>

	<div class="list-group">
			<a href="tutorial1.html" class='list-group-item'>First Python Program</a>
			<a href="tutorial1.html" class='list-group-item'>Basic Operations</a>
			<a href="tutorial1.html" class='list-group-item'>Datatypes</a>
			<a href="tutorial1.html" class='list-group-item'>Lists</a>
			<a href="tutorial1.html" class='list-group-item'>Dictionaries</a>
		</div>

	<div class="card col-lg-12 text-center">
					<img class="card-img-top" src="images/ad_dummy.jpg" height=300px width=300px>
					
					<div class="card-body">
						<h3 class="card-title">Advertisement</h3>
						<p class="card-text">Check out <a href="index.html" class="card-link">Python tutorials</a></p>
					</div>
	</div></article></div>
	

	<div id="mid_article"  class='col-lg-6 col-xs-12 col-sm-12'>


	</div>

	<div id="right_article" class='col-lg-3 hidden-xs hidden-md hidden-sm'><article ><p>Release Notes:</p>
		<div id="right_article" class='col-lg-3 hidden-xs hidden-md hidden-sm'>
		<?php include("right_bar.php");?>
</div>
	</article></div>
</div>
<!-- <input type="text" name="search" placeholder="Search.." class="sbar"> -->
<!-- <button type="submit" class="sbutton"><i class="fa fa-search"></i></button> -->

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
<?php echo "Sup" ?>;
</body>
</html>	

