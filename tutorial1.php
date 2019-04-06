<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


	<title>Tutorial 1</title>
	<link rel='stylesheet' , type="text/css" , href="styles/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/tutorial1.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/tutorial1jq.js"></script>
</head>

<body> 

	<header><?php include('header.php'); ?>
	</header>

	<nav> <!-- class="navbar navbar-default sticky-top"> -->
		<?php include('navbar_python.php');?>
	</nav>

	<div id="nav_path">
		<ul class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li><a href="#">Tutorial 1</a></li>
		</ul>
	</div>

	<div id="main_body" class="class='col-sm-12 col-md-12 col-lg-12 col-xs-12'">
		<!-- <div class="row"> -->
			<div id="left_article" align="left" class="col-lg-3 hidden-xs hidden-md hidden-sm">
				<?php include("left_bar.php");?>
			</div>
	


			<div id="mid_article" class="col-lg-6 col-xs-12 col-sm-12 col-md-12">
				<br><br><br>
				
				<div id='heading'>
					<table align="center">
						<tr>
							<td><img src="images/python.jpeg"  hspace="30" height="50" width="50"></td>
							<td><center><h2>PYTHON TUTORIAL</h2></center></td>
							<td><img src="images/python.jpeg" hspace="30" height="50" width="50"></td>
						</tr>
					</table>
				</div>


				<div id='content'>
					<center><h3>Python tutorial 1</h3>
					<p>Welcome to python tutorials. This is the first in the series of a literal thousand tutorials.</p>
					<p>We hope you are as excited about this journey as we are</p>
					<p> Python is a interpreted languez. It means you have to control it.</p>
					<p> You can do almost anything with Python. Literally, anything. This post was made by a python script. Got you there, didn't I?. You would've imagined a 2nd year student wasting his time writing this content. That is not the case however. </p>
					<p> Curious ? Follow the tutorials to learn how I managed to write the above python script.</p> 
				</div>

				<br>

				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-8 col-sm-10 col-xs-10 ">
							<a href="#"><button type="button" class="btn btn-light">Previous</button></a>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<a href="tutorial2.html"><button type="button" class="btn btn-light">Next</button></a>
						</div>
					</div>
				</div>

				<hr><hr>
				<div  class="comment_section">
					<h3>COMMENTS</h3>

					<div class="comment_outer">

						<form id="comment_form" name="comment_form" action="comment.php">
							<div class="form-group">
								<div class="radio">
									<label><input type="radio" name="anonymous" value="public" checked>Public</label> 
									<label><input type="radio" name="anonymous" value="anonymous">Anonymous</label> <br>
								</div>
							</div>
							<div class="form-group">	
								<label for="name_input">Name:</label>
								<input type="text" name="comment_name" id="name_input" class="form-control">
							</div>	
							<div class="form-group">
								<label for="email_input">Email:</label>
								<input type="email" name="email" id="email_input" class="form-control">
								
							</div>	
							<div class="form-group">
								
								<label for="comment_comment">Comment:</label>
								<textarea name="comments" id="comment_comment" form="comment_form" class="form-control" rows="5">Comment</textarea>
								
							</div>
								
								<input type="submit" value="Submit" class="btn btn-primary">
							
						</form>
						<br>
						<div id="successfull_comment" >
							<!-- Comment succesfull -->
						</div>
						

					</div>


					<div id="comments">
						<ul id="comment_list" style="list-style-type: none">
						</ul>
					</div>

				</div>
				<div class="container" >
				<ul class="pagination" id="page_no">
					<li class="active"><a href="#">1</a></li>
					<li><a href="tutorial2.html">2</a></li>
				</ul>
				</div>

			</div>


			<div id="right_article" align="right" class="col-lg-3 hidden-xs hidden-md hidden-sm"><?php include("right_bar.php");?>
			</div>
		

		</div>

	</div>
	

</body>
</html>