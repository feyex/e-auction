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
<body id="home" data-spy="scroll" data-target=".navbar-collapse"  onload="">

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
					<li><a href="logout.php">LOGOUT</a></li>
					 <li><a href="product.php">PRODUCTS</a></li>
				</ul>
			</div>
		</div>
	</div>
    <!-- end navigation -->
    &nbsp;&nbsp;&nbsp;
	
    
 <?php
			 //CODE TO RECOGNIZE THAT USER HAS LOGIN
			 
			 //START THE SESSION
			 session_start();
			
			  ?>
			  
				<table border="0" cellpadding="10" cellspacing="1" width="850" align="center">
				<tr class="tableheader">
				<td align="center">Product Dashboard</td>
				</tr>
			 	<tr class="tablerow">
				<td>
				<?php
				if($_SESSION["username"]) {
				?>
				Welcome <b><?php echo $_SESSION["username"]; ?>.</b> Click here to <a href="logout.php" tite="Logout"><b><em>Logout.</b>
				<?php
				}
				$username=$_SESSION["username"];
                $user_id=$_SESSION["id"];
				?>
			 </td>
			 </tr>
			 </table>
<!--end session-->
        
<!--main content-->
       <section id="about" class="templatemo-section templatemo-top-130">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<center> <h3> <p id="timer_value" > </p> </h3> </center>
					<h1 class="text-uppercase"><a href="product.php">PRODUCT CATEGORIES</a></h1>
				</div>
				<div class="col-md-6 col-sm-6">					
				<!--	<h3 class=""><marquee style="background-color:grey;">procurement made faster and easier</marquee></h3> -->
						<img src="img/1.jpg" class="img-responsive img-bordered img-about" alt="about img">
					</div>
				<div class="col-md-6 col-sm-6">
						<br>
						<br>
						<br>
						<form action="flap1.php?product_id=18" method="post">

<?php
											$connection=mysqli_connect("localhost","root","");		
											$dbc=mysqli_select_db($connection,"project");
											$id = 0;
											if (isset ($_GET ['product_id']))
												{
													$id = $_GET ['product_id'];
												}

                                        	$sql = "select end_date,amount from product where product_id=$id";
                                            $product= mysqli_query ($connection,$sql);
											$row = mysqli_fetch_array($product);
							
											//$date= date_create();
											$date=date('Y-m-d');
											 $end_date=$row['end_date'];

											//echo $date;
											if($end_date < $date)
												{
													//echo "bid expired";
													//$end_date=$row['end_date'];
													//header ("Location:bidreport.php");

													$end_date=$row['end_date'];	
													$time='BID EXPIRED'.'<input type="submit" name="bid"  value="Check Winner">';

											//	echo $end_date;

											"</form>";	
												}
												else {
													$end_date=$row['end_date'];	
													//echo $end_date;			
													$time_left=strtotime($end_date);
													$remaining=$time_left-time();
													$days_rem=floor($remaining/86400);
													$hours_rem=floor(($remaining%86400)/3600);
													$min_rem=floor(($remaining%86400)/7200);
													$sec_rem=floor(($remaining%86400)/10800);

													$time=$days_rem."days ".$hours_rem."hours ".$min_rem."min ".$sec_rem."sec to bid closure"."</h3>".'<input type="submit" name="bid"  value="BID">';

header ("Location:flap.php?product_id=18");
													
												}

?>
<form method="post">
<?php
						if (isset($_POST['bid'])){

							$sql1 = "select end_date from product where product_id=$id";
                                            $product= mysqli_query ($connection,$sql1) or die(mysqli_query ($connection));
											$row1 = mysqli_fetch_array($product);
							
											//$date= date_create();
											$date=date('Y-m-d');

											if($row1['end_date'] < $date)
												{
													//echo "bid expired";
													//$end_date=$row['end_date'];
													header ("Location:bidreport7.php");

													$end_date=$row['end_date'];	
													//$time="BID EXPIRED";
												//	echo $end_date;

											"</form>";		
												}
												else {
													header ("Location:flap.php?product_id=18");
                                                    
												}
						}


					?>

							<p><strong> LOWEST BID PRICE: <?php echo $row['amount'];?></stong></p>	
							<p><strong><h3> Bid time: <?php echo $time;?></h3></stong></p>
							
						<!--	<input type="submit" name="bid"  value="Bid Now"> -->
						</center>

					</form>	

                    </div>
					
			</div>
		</div>
</section>

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