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
    <script type="text/javascript" src="js/countdown.js"></script>
	<!-- google font -->
	<link href='//fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Chewy' rel='stylesheet' type='text/css'>

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
					<li><a href="setbiddingdate.php">PRODUCT TIMER</a></li>
					<li><a href="reg_product.php">REGISTER PRODUCT</a></li>
				</ul>
			</div>
		</div>
	</div>
    <!-- end navigation -->
    
    <!-- Main -->
				<section id="main">
                    <br>
                    <br> 
<?php
			 //CODE TO RECOGNIZE THAT USER HAS LOGIN
			 
			 //START THE SESSION
			 session_start();
			
			  ?>
			  
				<table border="0" cellpadding="10" cellspacing="1" width="850" align="center">
				<tr class="tableheader">
				<td align="center">Timer For Bid Closure</td>
				</tr>
			 	<tr class="tablerow">
				<td>
				<?php
				if($_SESSION["username"]) {
				?>
                Welcome <b><?php echo $_SESSION["username"]; ?>.</b> Click here to <a href="logout.php" tite="Logout"><b><em>Logout.</b>
                
				<?php
				}
				?>
			 </td>
			 </tr>
			 </table>
<!--end session-->

					<!-- Banner -->
						<section id="admin">
							<div class="inner">
								<!-- Form -->
								<div class="column">
                                    <form action="#" method="post">
                                        <h2> <p id="timer_value" ></p> </h2>
                 						<!--	<div class="field half first">
											<label for="end_date">BID CLOSURE DATE</label>
											<input name="end_date" id="companyname" type="date" placeholder="bid_closure" required>	
									-->	</div>
									<?php
								
									$connection=mysqli_connect("localhost","root","");		
									$dbc=mysqli_select_db($connection,"project");

									$sql = "select end_date from product where product_id=1";
                                     $product= mysqli_query ($connection,$sql);
									$row = mysqli_fetch_array($product);
									$date=$row['end_date'];
									//echo $date;
							
								//	if(isset($_POST['submit'])) {
									//	 $end_date=$_POST['end_date'];
									//	 $end_date= date('y-m-d H:i:s', strtotime($end_date));
									//}
?>
                                       <div class="field half first">
                                            <input type="text" id="month" name="month" placeholder="Month" required> 
                                        </div>
                                       <div class="field half first">
                                            <input type="text" id="day" name="day" placeholder="Day" required>
                                       </div>
                                        <div class="field half first">
                                            <input type="text" id="year" name="year" placeholder="Year" required>
                                        </div>
                                        <div class="field half first">
                                            <input type="text" id="hour" name="hour" placeholder="Hour" reequired>
                                        </div>
                                        <div class="field half first">
                                            <input type="text" id="min" name="min" placeholder="Min" required>
                                        </div>
										
										
                                        <div class="field half first">
											<input type="button" value="Submit" name="submit" onclick="settimer();">
											
                                        </div> 
										
                                    </form>
                                </div>
                                   
                            </div>
                        </section>
<br>
<BR>
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