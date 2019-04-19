<?php session_start();?>
<!DOCTYPE html lang="en" >
<html>
<head>
	<meta charset="utf-8">
	<title>Home : Python</title>
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
	

	<div id="mid_article"  class='col-lg-6 col-xs-12 col-sm-12'><article><h1>Python is very funny language. </h1><h4>First tutorial, yay!!</h4><p>We are glad you could make it. This website would have been a better place without you, just like this world. Anyways, let's get started. :)</br>As stated above, Python is very funny language. In fact, we are trying too bring POOP tutorials, Python- Object Oriented Principles. </br>Told ya, it's really funny. But you have to <em>control your languaez</em> . Do not type-in the psuedocode and expect it to run. </br> A quick note for those who are coming with their stacks full of C, C++ or Java or any other language like that. It's about semicolons (this kid --> ;) and curly braces (this couple --> { and }).</br></br> <b>"We don't do that here"</b></br></br>
	<pre><code>
	import cv2	
	imgFile = cv.imread('black_panther.jpg')<br>
	cv.imshow('dst_rt', imgFile)</br>
	cv.waitKey(0)</br>
	cv.destroyAllWindows()<br>
	</code></pre>
<br/>If found using (without any specific need like Dictionary in Python any others), you will be given a "def __init__ () of shame class" and then will be thrown to Wakanada (yes, forever!!)</p>
	
	<div class="card col-sm-12 col-xs-12 col-md-12 hidden-lg text-center">
					<img class="card-img-top img-thumbnail" src="images/ad_dummy.jpg" height=300px width=300px>
					
					<div class="card-body">
						<h3 class="card-title">Advertisement</h3>
						<p class="card-text">Check out <a href="index.html" class="card-link">Python tutorials</a></p>
					</div>
	</div>
	
	<p>Well, jokes apart, we have divided our Python tutorials in many fragments which you can see in the nav bar. But, to give a brief introduction of the layout, we have following levels of the programming:</p>
<div class="container-fluid">
	<div class="col-lg-4 col-sm-12">
	<table class='table table-hover'>
		<th>Beginner</th>
		<tr><td data-toggle='popover' data-placement='left' data-content='Hello World!'>First Python program</td></tr>
		<tr><td data-toggle='popover' data-placement='left' data-content='BEDAMS'>Basic operations</td></tr>
		<tr><td data-toggle='popover' data-placement='left' data-content='Datatypes'>Integers, Floats and Strings</td></tr>
		<tr><td data-toggle='popover' data-placement='left' data-content='Object Collections'>Lists, Dictionaries and Tuples</td></tr>
		<tr><td data-toggle='popover' data-placement='left' data-content='Reshaping'>Indexing and Slicing</td></tr>
	</table>
	</div>
	<div class="col-lg-4 col-sm-12">
	<table class='table table-hover'>
		<th>Pre-intermediate</th>
		<tr><td data-toggle='popover' data-placement='top' data-content='Borrowing functions from Python'>Built-in functions</td></tr>
		<tr><td data-toggle='popover' data-placement='top' data-content='def :'>Writing Own functions</td></tr>
		<tr><td data-toggle='popover' data-placement='bottom' data-content='Functions'>Using functions</td></tr>
	</table>
	</div>
	<div class="col-lg-4 col-sm-12">
	<table class='table table-hover'>
		<th>Intermediate</th>
		<tr><td data-toggle='popover' data-placement='right' data-content='Basics of POOP'>Classes and Objects</td></tr>
		<tr><td data-toggle='popover' data-placement='right' data-content='First step in OOP'>Creating our own class</td></tr>
		<tr><td data-toggle='popover' data-placement='right' data-content='Exceptions should be handled'>Error handling</td></tr>
		<tr><td data-toggle='popover' data-placement='right' data-content="We'll look at some of the most common librabries">Moving towards libraries</td></tr>
	</table>
	</div>
</div>	
<div id='carousel_main' class='carousel slide' data-ride='carousel'>
	<ol class="carousel-indicators">
    	<li data-target="#carousel_main" data-slide-to="0" class="active"></li>
    	<li data-target="#carousel_main" data-slide-to="1"></li>
    	<li data-target="#carousel_main" data-slide-to="2"></li>
    	<li data-target="#carousel_main" data-slide-to="3"></li>
	</ol>
	<div class="carousel-inner">
		<div class='item active'><img src="images/carousel0.jpg" height="300" width="500"></div>
		<div class="item"><img src="images/carousel1.jpg" height="300" width="500"></div>
		<div class="item"><img src="images/carousel2.jpg" height="300" width="500"></div>
		<div class="item"><img src="images/carousel3.jpg" height="300" width="500"></div>
	</div>
	<a class="left carousel-control" href="#carousel_main" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel_main" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<p>All you can do with Python, is too big to summarize in an article. But why should we waste time with it? Lets' get started!! </p>

</article></div>
	
	<div id='bannerformodal' class='modal fade' role='dialog'>
		<div class="model-dialog">
			 <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Weekly Maintenance notice:</h4>
      </div>
      <div class="modal-body">
        <p>The website will be down for few hours on 31st March 2019 12:00 Noon IST to upload some more tutorials. The whole new series of tutorials will be live from 1st of April and this is not any April Fool stunt, we promise. We are also  bringing some quality of life changes which will make user experience smooth. We appreciate your patience.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
		</div>
	</div>

	<div id="right_article" class='col-lg-3 hidden-xs hidden-md hidden-sm'>
		<?php include("right_bar.php");?>
</div></div>
<!-- <input type="text" name="search" placeholder="Search.." class="sbar"> -->
<!-- <button type="submit" class="sbutton"><i class="fa fa-search"></i></button> -->

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
</body>
</html>	

