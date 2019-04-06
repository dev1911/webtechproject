<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" /> -->



	<title>Tutorial 3</title>
	<link rel='stylesheet' , type="text/css" , href="styles/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/tutorial1.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/tutorial1jq.js"></script>
</head>

<body> 
	<?php 
		$badwords=array("idiot"=>"id**t");
		// $words=array("apple");
		// $word_replace=array("papple");
		$nameErr = $emailErr = "";
		$name = $email = $comment = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
  			if (empty($_POST["name"])) {
    		$nameErr = "Name is required";
  		} elseif (!preg_match("/^[a-zA-Z ]*$/",test_input($_POST["name"]))) {
  			$nameErr = "Only letters and white space allowed"; 
		} else {
    	$name = test_input($_POST["name"]);
  		}
  
  		if (empty($_POST["email"])) {
    		$emailErr = "Email is required";
  		} elseif (!filter_var(test_input($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
  			$emailErr = "Invalid email format"; 
		} else{
    		$email = test_input($_POST["email"]);
  		}
    
  		
  		if (empty($_POST["comment"])) {
    		$comment = "";
  		} else {
			$comment = test_input($_POST["comment"]);
			
  		}
  		if(isset($_POST['comment'])){
  			foreach ($badwords as $word => $word_replace){
  				$comment=str_replace($word, $word_replace, $comment);	
  			}
 
	}
}
		function test_input($data) {
  			$data = trim($data);
  			$data = stripslashes($data);
  			$data = htmlspecialchars($data);
  			return $data;
		}
		$date=date("M d, Y");
		$html='<div class="comment clearfix">
					<img src="images/profile.png" alt="" class="profile_pic">
					<div class="comment-details">
						<span class="comment-name">$name</span>
						<span class="comment-date">$date</span>
						<p>$comment</p>
						<a class="reply-btn" href="#" >reply</a>
					</div>
					<br>
				</div>';

		
		// $comment_box->appendChild($html);
?>
	<header><?php include('header.php'); ?>
	</header>

	<nav> <!-- class="navbar navbar-default sticky-top"> -->
		<?php include('navbar_python.php');?>
	</nav>

	<div id="nav_path">
		<ul class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Tutorial 3</a></li>
		</ul>
	</div>

	<div id="main_body" class="class='col-sm-12 col-md-12 col-lg-12 col-xs-12'">
		<!-- <div class="row"> -->
			<div id="left_article" align="left" class="col-lg-3 hidden-xs hidden-md hidden-sm">
				<?php include("left_bar.php");?>
			</div>
	


			<div id="mid_article" class="col-lg-6 col-xs-12 col-sm-12 col-md-12">
				<div class="container-fluid">
	<!-- <div class="row"> -->
		<!-- <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 post">
			<h2>Tutorial 3</h2>
			<p></p>
		</div> -->

		<!-- comments section -->
		<div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 comments-section">
			<!-- comment form -->
			<form class="clearfix" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="comment_form">
				<h4>Post a comment:</h4>
				<div class="form-group">
						<div class="radio">
						<label><input type="radio" name="anonymous" value="public" checked>Public</label> 
						<label><input type="radio" name="anonymous" value="anonymous">Anonymous</label> <br>
					</div>
				</div>
				<div class="form-group">	
					<label for="name_input">Name:</label> <span class="error" style="color:red">*<?php echo $nameErr;?></span>
					<input type="text" name="name" id="name_input" class="form-control">
				</div>	
				<div class="form-group">
					<label for="email_input">Email:</label> <span class="error" style="color:red">*<?php echo $emailErr;?></span>
					<input type="text" name="email" id="email_input" class="form-control">
				</div>
				<div class="form-group">
					<label for="comment_text">Comment:</label>			
					<textarea name="comment" id="comment_text" class="form-control"></textarea>
					<input type="submit" name="submit" value="Submit" class="btn btn-primary">
				<!-- <button class="btn btn-primary btn-sm pull-right" id="submit_comment">Submit comment</button> -->
			</form>
			<br>
			<br>
			Display total number of comments on this post 
			<h2><span id="comments_count">2</span> Comment(s)</h2>
			<hr>
			<!-- comments wrapper -->
			<div id="comments-wrapper">
				<div class="comment clearfix">
					<img src="images/profile.png" alt="" class="profile_pic">
					<div class="comment-details">
						<span class="comment-name">Melvine</span>
						<span class="comment-date">Apr 24, 2018</span>
						<p>This is the best tutorial I have ever seen!</p>
						<a class="reply-btn" href="#" >reply</a>
					</div>
					<br>
				</div>
							<!-- reply -->
				<div class="comment reply clearfix">
					<img src="images/profile.png" alt="" class="profile_pic">
					<div class="comment-details">
						<span class="comment-name">Awa</span>
						<span class="comment-date">Apr 24, 2018</span>
						<p>Gotta say, mindblowing!!</p>
						<a class="reply-btn" href="#">reply</a>
					</div>
				</div>
						<!-- </div> -->
					<!-- </div> -->
			</div>
			<!-- // comments wrapper -->
		</div>
		<!-- // comments section -->
	
<!-- </div> -->
<?php echo $comment;?>

</div>
</div>

<!-- Javascripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap Javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>


			</div>


			<div id="right_article" align="right" class="col-lg-3 hidden-xs hidden-md hidden-sm"><?php include("right_bar.php");?>
			</div>
		

		</div>

	</div>
</body>
</html>