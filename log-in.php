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
	<script type="text/javascript" src="js/count.js"></script>
	<!-- google font -->
	<link href='//fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Chewy' rel='stylesheet' type='text/css'>

</head>
<body id="home" data-spy="scroll" data-target=".navbar-collapse"  onload="settimer()">

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
					<li><a href="admin_login.php">ADMIN</a></li>
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

									<!--Display countdown timer in an element
									<?php
//$date=strtotime("february 25,2018 2:00 PM");
//$remaining=$date-time();
//$days_rem=floor($remaining/86400);
/*$hours_rem=floor(($remaining%86400)/3600);
$min_rem=floor(($remaining%86400)/7200);
$sec_rem=floor(($remaining%86400)/10800);

?> */
// <?php echo $days_rem?>days and <?php echo $hours_rem ?> hours left and <?php echo $min_rem ?>minute and <?php echo $sec_rem ?>sec </h1>
*/
									<p id="demo"></p>
										<script>
											//Set the date we are counting down to
											var countdownDate=new Date("Feb 25,2018 15:37:25").getTime();
											//Update countdown every 1 second
											var x=setInterval (function() 
													{
														//Get todays date
														var now=new Date().getTime();
														//Find the distance between now and the countdown date
														var distance=countdownDate - now;
														//Time calculations for days,hours,minute and seconds
														var days=math.floor(distance/(1000 * 60*60*24));
														var hours=math.floor((distance % (1000*60*60*24))/ (1000*60*60));
														var minutes=math.floor((distance % (1000*60*60)) / (1000*60));
														var seconds=math.floor((distance % (1000*60)) /1000);

															//Display the result in the element with id='demo'
															document.getElementById("demo").innerHTML = days +"d"+ hours +"h" +minutes+"m"+seconds+"s";

															//if countowndown is completed
																if (distance<0) 
																{
																	clearInterval(x);
																	document.getElementById("demo").innerHTML="EXPIRED";
																}

													},1000);
										</script>
-->


									<h3>LOG-IN</h3>
									<form action="#" method="post">
										<?php
		 		 //Create session
		  				session_start();
							$message ="";
						if (count($_POST) >0) 
			 			 {
			   				$connection=mysqli_connect("localhost","root","");
							$dbc=mysqli_select_db($connection,"project");
				//Make the query
							$query="SELECT id,username, password FROM user WHERE username='" . $_POST["username"] . "' and password='" . $_POST["password"] . "'  ";

				//Run the query
							$result=mysqli_query ($connection,$query);
			//output of data 4 a single row
							$row=mysqli_fetch_array($result);
			//check if the input data correspinds to the data in d dbase
			   		  
			      
						if(is_array($row))
						 {
				  			$_SESSION["id"] =$row["id"];
				  			$_SESSION["username"] =$row["username"];
						 }
						else{ $message="Invalid username or password!" ;}
							echo '<div class="message">'. $message  .'</div>' ;
				 

						  }
		  
		  				if (isset($_SESSION["id"]))
							{
				 				 header ("Location:product.php");
							}
		  	?>
       
										<center> <h3 style="color:white;"> <p id="timer_value" > </p> </h3> </center>

										<div class="field half first">
											<label for="name">USERNAME</label>
											<input name="username" id="name" type="text" placeholder="Name">
										</div>
										<div class="field half">
											<label for="password">PASSWORD</label>
											<input name="password" id="email" type="password" placeholder="password">
										</div>
										<ul class="actions">
											<li><input value="LOG IN" class="button" type="submit"></li>
                                        </ul>
                                      <a href="register.php"><b>NOT REGISTERED YET? </b> </a>
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