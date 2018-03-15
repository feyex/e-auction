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
                    <li><a href="log-in.php">LOG-IN</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
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
					<h3 class=""><marquee style="background-color:grey;">procurement made faster and easier</marquee></h3>
						<ul><b>
							<li><a href="laptop.php" style="color:black;">Laptops</a></li>
							<li><a href="desktop.php" style="color:black;">Desktops</a></li>
							<li><a href="computer.php" style="color:black;">Computer Accessories</a></li>
							<li><a href="stat.php" style="color:black;">Stationaries</a></li>
							<li><a href="printers.php" style="color:black;">Printers</a></li>
						</b></ul>
					</div>
				<div class="col-md-6 col-sm-6">
					<img src="img/prime.jpg" class="img-responsive img-bordered img-about" alt="about img">
						<center>
							<p><b>Stop bid at:$8000</b></p>
							<p>Lowest Bidder:</p>
							<input type="submit" name="bid"  value="Bid Now">
						</center>
				</div>
			</div>
		</div>
</section>

<!-- start gallery -->
	<section id="gallery" class="templatemo-section templatemo-light-gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center text-uppercase">PRODUCT > LAPTOPS</h2>
					<hr>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="gallery-wrapper">
						<img src="img/1.jpg" class="img-responsive gallery-img" alt="realtch 1">
						<div class="gallery-des">
							<h3>Blue Notebook </h3>
                            <h5>4GB RAM, 1TB HDD,core i5 processor</h5>
                            <input type="submit" value="Bid Now">
						</div>
					</div>
				</div>	
				<div class="col-md-4 col-sm-4">
					<div class="gallery-wrapper">
						<img src="img/images.jpg" class="img-responsive gallery-img" alt="realtch 2">
						<div class="gallery-des">
							<h3>DELL INSPIRON 453</h3>
							<h5><input type="submit" value="Bid Now"></h5>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="gallery-wrapper">
						<img src="img/laptop.jpg" class="img-responsive gallery-img" alt="realtch 3">
						<div class="gallery-des">
							<h3>HP PAVILION </h3>
                            <h5>Core I5 500HD 8GB RAM</h5>
                            <input type="submit" value="Bid Now">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="gallery-wrapper">
						<img src="img/Bento-Book.jpg" class="img-responsive gallery-img" alt="realtch 4">
						<div class="gallery-des">
                            <h3>A Futuristic Laptop with all possible function to be bid for.</h3>
                            <h5><input type="submit" value="Bid Now"></h5>
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="gallery-wrapper">
						<img src="img/iweb2.jpg" alt="realtch 5" class="img-responsive gallery-img">
						<div class="gallery-des">
							<h3>Black, High Definition iWeb Laptop for new age world.</h3>
							<h5><input type="submit" value="Bid Now"></h5>
						</div>
				  </div>
				</div>				
			</div>
		</div>
	</section>
	<!-- end gallery -->

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