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
<body id="home" data-spy="scroll" data-target=".navbar-collapse"  onload="window">

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
						<img src="img/bnl.jpg" class="img-responsive img-bordered img-about" alt="about img">
					</div>
				<div class="col-md-6 col-sm-6">
						<br>
						<br>
						<br>
						<form action="jprint.php?product_id=11" method="post">
							<?php
						$connection=mysqli_connect("localhost","root","");		
						$dbc=mysqli_select_db($connection,"project");
						$id = 0;
						if (isset ($_GET ['product_id']))
						{
							$id = $_GET ['product_id'];
						}

 									$sql = "select end_date from product where product_id=$id";
                                            $product= mysqli_query ($connection,$sql);
											$row = mysqli_fetch_array($product);
							
											//$date= date_create();
											$date=date('y-m-d H:i:s');

											if($row['end_date'] < $date)
												{
													echo "bid expired";
													$end_date=$row['end_date'];
													 header ("Location:bidreport.php");

												}
												else {
													$end_date=$row['end_date'];				
													$time_left=strtotime($end_date);
													$remaining=$time_left-time();
													$days_rem=floor($remaining/86400);
													$hours_rem=floor(($remaining%86400)/3600);
													$min_rem=floor(($remaining%86400)/7200);
													$sec_rem=floor(($remaining%86400)/10800);

													echo"<h3><marquee>". $days_rem."days ".$hours_rem."hours ".$min_rem."min ".$sec_rem."sec to bid closure"."</marquee></h3>";
												}
												



						$sql1 = "select *, (select min(amount) from bidding where product_id = $id) as least from product where product_id = $id";
						$result1=mysqli_query($connection,$sql1) or die(mysqli_error($connection));
						$row1 = mysqli_fetch_assoc($result1);
						//$sql = "set @position= 0; select distinct(user_id) as users, (@position :=  @position+1) as rank,  (select min(amount) from bidding b2 where b2.user_id = users ) as topbid from bidding b where product_id = $id order by topbid ";
						//$sql = "set @p := 0;"
						$sql = "set @p := 0";
						$result=mysqli_query($connection,$sql) or die(mysqli_error($connection));
							if($result){
						//$sql2=" select *, (@p := @p + 1) as rank from (select product_id, user_id, min(amount) as topamount from bidding where product_id = $id group by user_id order by topamount) as result";
						//$query = 	mysqli_multi_query ($connection,$sql) or die(mysqli_error($connection));
						$sql2 = "select * from (select *, (@p := @p + 1) as rank from (select product_id, user_id, min(amount) as topamount from bidding where product_id = $id  group by user_id order by topamount) as t1) as t2 where t2.user_id = $user_id";
						//$result = mysqli_store_result($connection);
						$query=mysqli_query($connection,$sql2) or die(mysqli_error($connection));
						$row = mysqli_fetch_assoc($query);
					//	echo $row["rank"];
	
							}
							else{
								echo"not set";
							}
						
							

									$bid_amount="";			$bider="";
									$name="";
									$amount="";
									$customer_ids="";
									$product_id="";
										if (isset($_POST['submit'])){

											if (empty($_POST['bid_amount']))
																{
																	$bidEr="please input bid price";
																}
															else {
																	$bid_amount=$_POST['bid_amount'];
												//check if only numerics is enteredl
																if (!filter_var ($bid_amount,FILTER_VALIDATE_INT))
																	{
																		$bidEr="Invalid text format, Numerics only";
																	} 
																}	
											

						//Check if all fields are not empty
										if($bid_amount !="")		
														{

												//MAKE THE QUERY
												$result="INSERT INTO bidding (product_id,user_id,bidding_date,amount) VALUES ('$id','$user_id',NOW(),'$bid_amount')";
													$query= mysqli_query ($connection,$result) or die (mysqli_error ($connection));
													
												//$result1="INSERT INTO PRODUCT (name,amount) VALUES ('4GB Core i5 Gaming Laptop','8000')"; 
												//	$query1= mysqli_query ($connection,$result1) or die (mysqli_error ($connection));
															//if($result) {
															//$customer_ids="SElECT LAST_INSERT_ID() FROM customers";
															//$query1=mysqli_query ($connection,$customer_ids) or die (mysqli_error ($connection));
															//$view=mysqli_fetch_assoc ($query1);
																//	if($customer_ids){
																//$result2="INSERT INTO bid_report(customer_id,bid_amount,product_id,bid_date) VALUES ('$view','$bid_amount','5',NOW())";
																//$query2=mysqli_query ($connection,$result2) or die (mysqli_error ($connection));
														//	}
														
														echo "<center><span> <font color='blink'><b> BID SUCCESFUL</b></font></span> </center>";
														}
														else{
														echo "<center><b><p><font color='blink'>Some fields are missing!!!  <br /> Bid incomplete </font></p> </b> </center>";
														}
														
													}		
													//mysqli_close ($connection);

					?>
							<p><b><label name="name">NAME:  <?php echo $row1['name'];?></label></b></p>
                       		<p><b> Quantity:</b>20 </p>
					   		<p><b><label name="amount">bid :$9000</label></b></p>
							<p><b><label name="amount"> Rank: <?php echo $row['rank'];?></label></b></p>
					   		<p><b> Price:</b><input type="text" name="bid_amount"></b></p>
					 		 <p> <input type="submit" name="submit" value="Place Bid" id=""></p>
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