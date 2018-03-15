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
					<li><a href="logout.php">LOGOUT</a></li>
					<li><a href="product.php">PRODUCT</a></li>
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
				<td align="center">PRODUCT REGISTRATION</td>
				</tr>
			 	<tr class="tablerow">
				<td>
				<?php
				if($_SESSION["username"]) {
				?>
             <center>   Welcome <b><?php echo $_SESSION["username"]; ?>.</b> Click here to <a href="logout.php" tite="Logout"><b><em>Logout.</b>
                </center>
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
                                    <form action="bidreport3.php?product_id=6" method="post">
                                        <h2> <p id="timer_value" ></p> </h2>
									
					<div class="col-md-6 col-sm-6">					
						<img src="img/v.jpg" class="img-responsive img-bordered img-about" alt="about img">
					</div>
					<div class="col-md-6 col-sm-6">
                    <?php
							$connection=mysqli_connect("localhost","root","");		
							$dbc=mysqli_select_db($connection,"project");
                            $id = 0;
											if (isset ($_GET ['product_id']))
												{
													$id = $_GET ['product_id'];
												}
                    
							$sql="select min(amount) as amount from bidding where product_id=6";
							$result1=mysqli_query($connection,$sql) or die(mysqli_error($connection));
						    $row1 = mysqli_fetch_assoc($result1);
							$amount=$row1["amount"];

							$sql1="select user_id from bidding where amount=$amount";
							$result1=mysqli_query($connection,$sql1) or die(mysqli_error($connection));
						    $row2 = mysqli_fetch_assoc($result1);

							$user_id=$row2["user_id"];
						//	echo $user_id;

							$sql2="select username from user where id=$user_id";
                           $query2=mysqli_query($connection,$sql2) or die(mysqli_error($connection));
						   $row2 = mysqli_fetch_assoc($query2);

                               // echo "Winner is:".$row2["username"]."<br>";
                               // echo "Won Bid at:".$row1["amount"]."<br>";
                    ?>
                    
					<br> <br>
				<div class="field half first">
					<p><b><label name="name" style="color:black;">WINNER IS:<?php echo $row2['username'];?></label></b></p>
					<p><b><label name="name">WON BID AT:  <?php echo $row1['amount'];?></label></b></p>
                 </div>      		
			</div>
                       		
									</form>			
                                </div>
                                   
                            </div>
                        </section>
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

</body>
</html>