<!DOCTYPE html lang="en" >
<html>
<head>
	<meta charset="utf-8">
	<title>Pi using Python</title>
	<link rel="stylesheet" type="text/css" href="styles/main.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="styles/default.css">
	<script src="js/highlight.pack.js"></script>
	<script src="js/homepage.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>

</head>

<body>
<header>
	<?php include("header.php");?>
</header>
<nav>
	<?php include("navbar_python.php");?>
</nav>
<!-- <hr> -->
<div id="main_body" class='col-sm-12 col-md-12 col-lg-12 col-xs-12'>
	<div id="left_article"  class='col-lg-3 hidden-xs hidden-md hidden-sm' align="left"><?php include("left_bar.php");?></div>
	<div id="mid_article"><article><h1>&pi; using Python</h1>Generally, students are introduced to &pi; (pronounced as pi) as a constant '3.14' or the ratio '22/7'. Well, this is the partial truth about this famous symbol and its value as well. &pi; is 'Irrational' number, which means it cannot be expressed as a fraction. We can write the value of &pi; on paper and there will be no end for it. Thus, both these values, 3.14 and 22/7 are just approximated values of &pi; and used for simple calculations. We can actually write million numbers in &pi; and it will not cease or repeat itself. So, what is &pi; in reality? What your math teacher told you about &pi; would be just a tip of the iceberg of &pi; (Tutorial for that is in making). </br>But if this &pi; is so big and not repeating, how can you remeber it? Let's just get into this &pi; and see how Python can help us to do it.<br></br><img src="images/a.png" width="200px" height="100px">Subsitute for &pi;thon</br></br> History of &pi; as well, is very interesting. One of the very first definition of &pi; was the ratio of the circumference of the circle to the diameter of the same circle. The textual evidences of it dates back to 1900 BC where both Egypcian and Babyloninas were aware of this value. Their approximation was around 3.125. By the time, it was proved that &pi; is the ratio of the area of circle to the square of radius as well.<br></br> The first person to calculate an accurate estimation of &pi; is one of the greatest mathematician of all times, Archimedes of Syracuse. &pi; is also known as Archimedes' Constant for his work in finding its value. Let us look at his approach.<br>The area of circle is always bigger than the polygon inscribed in it. And it is lesser than that of the polygon in which circle is circumscribed. That's how Archemedes had the upper and lower bound for the value of &pi;. At one point, he used 96 sided polygons and came up with the value of &pi; in range 3.1408 to 3.14285.<br>Here is the general illustration of his method with inscribed polygon.<br><br><div id="arc_pi"><div id="polys"><canvas id="myCanvas" width="550" height="550">This is canvas. change your browser, you noob!</canvas><br><br></div><input type="range" min="3" max="200" class="slider" id="pyRange" oninput="loadPoly()"><div>No. of sides: <span id="side_val"></span></div><br><div>Area of polygon: <span id="area_val"></span></div><br><div id="pi_calc">Pi:<span id="pi_val"></span></div></div><br><br>Then there is a list of great mathematicians who contributed to find this value, a value which can never be written completely. Further, there are world records for finding the most digits in &pi; and remembering them.<br></br>
		Well the point of this tutorial is not that. It's how we can use Python to calculate the value of &pi;. We can do it using approaches like using pre-defined value, ratio or the infinite series definitions of &pi;. There are many other methods as well, which will be uploaded frequently, so stay tuned.<br></br>
		<b>In built value</b><br>In Python, we have the value of &pi; in C standard, upto 15 decimals. The simple two line code for it is as follows:<br><pre><code>import math
print(math.pi)</code></pre> 
Cool enough. It is present in many programming languages as well. Since it has 15 decimals, we can truncate it accordingly. But what if we need more than that? That's where Python is really handy. There are bunch of series, involving &pi; or defining it.<br></br>
One of the very famous infinite series for calculating &pi; is Gregory-Leibniz Series. 
<pre><code>e=float(input("Give e: "))
pi=0.0
n=int((4+e)/(2*e)-1)
for i in range(1,n+1):
    x=float(4/((2*i)-1))
    if(i%2!=0):
        pi=pi+x
    else:
        pi=pi-x
print(pi)</code></pre></br></br>
</article></div>
	<div id="right_article" class='col-lg-3 hidden-xs hidden-md hidden-sm'>
		<?php include("right_bar.php");?>
</div>
</div>
</body>
</html>	
