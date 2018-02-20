<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>REALTECH AUCTION</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="author" content="templatemo">
    
    
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- font-awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- custom -->
    <link rel="stylesheet" href="css/realtech-style.css">
    <link rel="stylesheet" href="assets/css/main.css" />
	<!-- google font -->
	<link href='//fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Chewy' rel='stylesheet' type='text/css'>
>
</head>
<body id="home" data-spy="scroll" data-target=".navbar-collapse">

	<!-- start navigation -->
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="index.html" class="navbar-brand smoothScroll"><strong>REALTECH AUCTION</strong></a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.html" class="smoothScroll"><span class="icon fa-home"></span>HOME</a></li>
					<li><a href="log-in.php">LOG-IN</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end navigation -->

<!-- Main -->
				<section id="main">

					<!-- Banner -->
						<section id="banner">
							<div class="inner">
								<!-- Form -->
								<div class="column">
									<h3>REGISTER AS NEW </h3>
									<form action="login.php" method="post">

										<?php
											$connection=mysqli_connect("localhost","root","");
													
											$dbc=mysqli_select_db($connection,"project");
												
												$username="";			$namEr="";
												$password="";			$passEr="";
												$companyname="";		$compEr="";
												$phone_no="";			$phoneEr="";
												$email="";				$emailEr="";
												$address="";			$addEr="";
												$file_upload="";		$filEr="";
							

												if(isset($_POST['submit'])) 
													{

													if (empty($_POST['username']))
														{

															$namEr="username is required";
														}
													else {
															$username=$_POST['username'];
															// check if it contains letters and whitespaces.
																if (!preg_match("/^[a-zA-Z ]*$/",$username))
																		{
																			$namEr="Only white space allowed";
																		}
														}
				


															if (empty($_POST['password']))
																{
																	$passEr="please input password";
																}
															else {
																	$password=$_POST['password'];
																}
						
					
															if (empty($_POST['companyname']))
																{

																	$compEr="company name is required";
																}
															else {
																	$companyname=$_POST['companyname'];
												// check if it contains letters and whitespaces.
																		if (!preg_match("/^[a-zA-Z ]*$/",$companyname))
																				{
																					$compEr="Only white space allowed";
																				}
																}
						
			
															if (empty($_POST['phone_no']))
																{
																	$phoneEr="please input phone number";
																}
															else {
																	$phone_no=$_POST['phone_no'];
												//check if only numerics is enteredl
																if (!filter_var ($phone_no,FILTER_VALIDATE_INT))
																	{
																		$phoneEr="Invalid text format, Numerics only";
																	} 
																}

															if (empty ($_POST['email']))
																{
																	$emailEr="email is required";	
																}
															else {
																	$email=$_POST['email'];
												// check if it contains inly integers.
																		if (!filter_var($email,FILTER_VALIDATE_EMAIL))
																				{
																					$emailEr="Invalid email format";
																				}
																}

															if (empty($_POST["address"])) {
																$addEr = "your address is required";
															} else {
																$address =$_POST["address"];
															}	

															if (empty($_POST["file_upload"])) {
																$filEr = "please select a file";
															} else {
																$file_upload =$_POST["file_upload"];
															}

													//Check if all fields are not empty
													if($username !=''  && $password !='' && $companyname !='' && $phone_no !='' && $email !='' && $address !='' && $file_upload !='')
													{

													//MAKE THE QUERY
													$result="INSERT INTO register_user (username,password,companyname,phone_no,email,address,file_upload) VALUES ('$username','$password','$companyname','$phone_no','$email','$address','$file_upload')";
													$query= mysqli_query ($connection,$result) or die (mysqli_error ($connection));
															if($result) {
																$result1="INSERT INTO login (username,password) VALUES ('$username','$password')";
																$query1=mysqli_query ($connection,$result1);
															}
													echo "<center><span> <font color='blink'><b> You are now registered</b></font></span> </center>";
														}
														else{
														echo "<center><b><p><font color='blink'>Some fields are missing!!!  <br /> Registration incomplete </font></p> </b> </center>";
														}
														
															}
													mysqli_close ($connection);
																	?>				

										<div class="field half first">
											<label for="name">USERNAME</label>
											<input name="username" id="name" type="text" placeholder="Name">
											<span class="error">* <?php echo $namEr; ?> </span>  
										</div>
										<div class="field half first">
											<label for="password">PASSWORD</label>
											<input name="password" id="email" type="password" placeholder="password">
											<span class="error">* <?php echo $passEr; ?> </span>  
                                        </div>
                                        <div class="field half first">
											<label for="name">COMPANYNAME</label>
											<input name="companyname" id="companyname" type="text" placeholder="Companyname">
											<span class="error">* <?php echo $compEr; ?> </span>  
										</div>
										<div class="field half first">
											<label for="phone">PHONE_NO</label>
											<input name="phone_no" id="phone" type="text" placeholder="+234">
											<span class="error">* <?php echo $phoneEr; ?> </span>  
										</div>
                                        <div class="field half first">
											<label for="email">EMAIL</label>
											<input name="email" id="email" type="email" placeholder="email">
											<span class="error">* <?php echo $emailEr; ?> </span>  	
										</div>
                                        <div class="field half first">
											<label for="message">ADDRESS</label>
											<textarea name="address" id="message" rows="2" placeholder="Please input your address"></textarea>
											<span class="error">* <?php echo $addEr; ?> </span>  
										</div>
                                    <div class="field half first">
                                      <label>  UPLOAD BID INVITE/PVC/NATIONAL ID:</label> <input type="file" name="file_upload" multiple required size="3">
									 <span class="error">* <?php echo $filEr; ?> </span>    
								   </div>
										<ul class="actions">
											<li><input value="REGISTER"  onclick="alert('WELCOME!')" class="button" type="submit" name="submit"></li>
                                        </ul>
									</form>

						
					
							</div>
						</section>

<br>
<br>
<!-- start footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Copyright &copy;feyex web </p>
					<hr>
					<ul class="social-icon">
						<li><a href="#" class="fa fa-facebook"></a></li>
						<li><a href="#" class="fa fa-twitter"></a></li>
						<li><a href="#" class="fa fa-instagram"></a></li>
						<li><a href="#" class="fa fa-pinterest"></a></li>
						<li><a href="#" class="fa fa-google"></a></li>
						<li><a href="#" class="fa fa-github"></a></li>
						<li><a href="#" class="fa fa-apple"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- end footer -->

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/custom.js"></script>

</body>
</html>