<?php session_start();
?>
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
	
	<!-- <script src="js/tutorial1jq.js"></script> -->
</head>

<body> 
	<?php 
		$db = mysqli_connect("localhost", "root", "", "comment-reply-system");

		$badwords=array("idiot"=>"id**t","apple"=>"banana","laptop"=>"desktop");
		// $words=array("apple");
		// $word_replace=array("papple");
		$nameErr = $emailErr = $remember_me="";
		$name = $email = $comment=$fine_comment = "";

		$radio_val=$_POST['anonymous'];
		if($radio_val=='anonymous'){
			$name="Anonymous";
			$email="";
				
		}
		else{
			
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
    
  		
  		
		if(isset($_POST['test'])){
		
			$_SESSION['first_comment_of_session']= 0;
			$_SESSION['ses_username']=$name ;
			$_SESSION['ses_mail']= $email;
		}
		else{
			$_SESSION['ses_username']="" ;
			$_SESSION['ses_mail']= "";	
		}

		if (empty($_POST["comment"])) {
    		$comment = "";
  		} else {
			$comment = test_input($_POST["comment"]);
			
  		}
  		if(isset($_POST['comment'])){
  			foreach ($badwords as $word => $word_replace){
  				$fine_comment=str_replace($word, $word_replace, $comment);	
  			}

		}

}}//end of else
		if(isset($_POST['submit'])){
  			$timestamp=time();
  			$time=date('Y-m-d H:i:s',$timestamp);	
  			$sql_ins="INSERT INTO 	comments (user,tutorial_id,comment_text) values(".$name.",2,".$fine_comment.")";
  			$result=mysqli_query($db,$sql_ins);
  			if($result){
				echo "Success";
			}
			else{
				echo "Error";
			}
		}
		function test_input($data) {
  			$data = trim($data);
  			$data = stripslashes($data);
  			$data = htmlspecialchars($data);
  			return $data;
		}
		
			
		// $comment_box->appendChild($html);

	
	$tutorials_db=mysqli_query($db,"SELECT * FROM tutorials WHERE tutorial_no=2");
	$tuts=mysqli_fetch_assoc($tutorials_db);
	$comments_db=mysqli_query($db,"SELECT * FROM comments WHERE tutorial_id=2 ORDER BY com_date DESC");
	$comms=mysqli_fetch_all($comments_db,MYSQLI_ASSOC);

?>
	<header><?php include('header.php'); ?>
	</header>

	<nav> <!-- class="navbar navbar-default sticky-top"> -->
		<?php include('navbar_python.php');?>
	</nav>

	<div id="nav_path">
		<ul class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Tutorial 2</a></li>
		</ul>
	</div>

	<div id="main_body" class="class='col-sm-12 col-md-12 col-lg-12 col-xs-12'">
		<!-- <div class="row"> -->
			<div id="left_article" align="left" class="col-lg-3 hidden-xs hidden-md hidden-sm">
				<?php include("left_bar.php");?>
			</div>
	


			<div id="mid_article" class="col-lg-6 col-xs-12 col-sm-12 col-md-12">
				<div id='content'>
					<center><h3>Python tutorial 2</h3>
					<p>Welcome to python tutorials. This is the second in the series of a literal thousand tutorials.</p>
					<p>We hope you are as excited about this journey as we were</p>
					<p> Python is a interpreted languez. It means you had to control it.</p>
					<p> You could have done almost anything with Python. Literally, anything. This post could have been made by a python script. </p>
					<p> We will follow Python 3.x in the tutorials coming henceforth, because we are modern.</p> 
				</div>
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
						<label><input type="radio" name="anonymous" value="public" checked onclick="hide_unhide(this)">Public</label> 
						<label><input type="radio" name="anonymous" value="anonymous" onclick="hide_unhide(this)">Anonymous</label> <br>
					</div>
				</div>
				<div class="form-group">	
					<label for="name_input">Name:</label> <span class="error" style="color:red">*<?php echo $nameErr;?></span>
					<input type="text" name="name" id="name_input" value="<?php echo $_SESSION['ses_username'] ?>" class="form-control">
				</div>	
				<div class="form-group">
					<label for="email_input">Email:</label> <span class="error" style="color:red">*<?php echo $emailErr;?></span>
					<input type="text" name="email" id="email_input" value="<?php echo $_SESSION['ses_mail'] ?>" class="form-control">
				</div>
				<div class="form-group">
					<label for="comment_text">Comment:</label>			
					<textarea name="comment" id="comment_text" class="form-control"></textarea>
					<input type="submit" name="submit" value="Submit" class="btn btn-primary"></div>
				<div class="form-group">
					<input type="checkbox" checked="checked" name="test" value="remember_me" id="remember_me" /><label for="remember_me">Remember Me</label>
				</div>
				<!-- <button class="btn btn-primary btn-sm pull-right" id="submit_comment">Submit comment</button> -->
			</form>
			<br> 
			<h2><span id="comments_count"><?php echo count($comms) ?></span> Comment(s)</h2>
			<hr>
			<!-- comments wrapper -->
			<div id="comments-wrapper">
				
				<?php if(isset($comms)): ?>
					<?php foreach ($comms as $comment_): ?>
					<div class='comment'>
						<img src="images/profile.png" class='profile_pic'>
						<div class="comment-detailst">
							<span class="comment-namet"><?php echo $comment_['user']; ?></span>	
							<span class='comment-date'><?php echo $comment_['com_date'];?></span>
							<p><?php echo $comment_['comment_text'];?></p>
						</div>	
					</div>
					<?php endforeach ?>
				<?php endif?>
		    </div>
			<!-- // comments wrapper -->
		<!-- </div> -->
		<!-- // comments section -->	
<!-- </div> -->

</div>
</div>
<?php echo
			'<script type="text/javascript">
				function hide_unhide(clickedradio){

					if(clickedradio.checked && clickedradio.value=="anonymous")
					{
						
						document.getElementById("name_input").disabled="true";
						document.getElementById("name_input").value="";
						document.getElementById("email_input").disabled="true";
						document.getElementById("email_input").value="";
					}
					else
					{
						
						document.getElementById("name_input").disabled=false;
						document.getElementById("email_input").disabled=false;	
					}
				}
			</script>';
?>

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