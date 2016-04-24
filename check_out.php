<<?php 
session_start();
$currency="&euro;";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Othello - Contact US</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link rel="stylesheet" href="css/cart.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/et-line-font.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/contact.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Crimson+Text:400italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:italic' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js" type='text/javascript'></script>
</head>
<body  data-target=".navbar-collapse" data-offset="50">

<!--stupid Facebook widgets 
<div class="theblogwidgets" style="">
	<div>
		<iframe src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/pages/Othello/209409135842253/&width=245&colorscheme=light&show_faces=true&border_color=white&connections=9&stream=true&header=false&height=470" scrolling="no" frameborder="0" scrolling="no" style="border: white; overflow: hidden; height: 470px; width: 245px;background:#fafafa ;color:000;"></iframe>
	</div>
</div>
END-->

<!-- navigation section -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation" style="background-color: #555;">
	<div class="container">
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-left">
				<li class="header-logo"><a href="#">OTHELLO</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right navbar-lang">
				<li><a href="#" class="smoothScroll">FIN</a></li>
				<li><a href="#" class="smoothScroll">SWE</a></li>
				<li><a href="#" class="smoothScroll">ENG</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="homepage.html" class="smoothScroll">WELCOME</a></li>
				<li><a href="about.html" class="smoothScroll">ABOUT</a></li>
				<li><a href="products.html" class="smoothScroll">PRODUCTS</a></li>
				<li><a href="contact.html" class="smoothScroll">CONTACT</a></li>
			</ul>
		</div>
	</div>
</section>

<!-- main section -->
<section id="main">
	<div class="container">
		<div class="row">

			<!-- left side -->
			<div class="col-md-6 col-sm-6 left-side">
				<br><br><br><br><br><br><br><br> 
				<div class="cart-view-table-back"> <!-- this is stupid, I try to push the table down, how to achieve the table in the middle-->
					<h2 style="text-align: center;">SUMMARY OF YOUR ORDER</h2><br>
					<table width="100%"  cellpadding="6" cellspacing="0">
						<thead>
							<tr><th>Cake name</th><th>Quantity</th><th>Your taste</th></tr>
						</thead>
						<tbody>
							<?php
							if(isset($_SESSION["cart_products"])) { //check session var					
							$total = 0; //set initial total value
							$b = 0; //var for zebra stripe table 
							foreach ($_SESSION["cart_products"] as $cart_itm){	//set variables to use in content below
								$product_name = $cart_itm["product_name"];
								$product_quantity = $cart_itm["product_quantity"];
								$product_note = $cart_itm["product_note"];
								$product_code = $cart_itm["product_code"];

								$bg_color = ($b++%2==1) ? 'odd' : 'even'; //class for zebra stripe 
								echo '<tr class="'.$bg_color.'">';
								echo '<td>'.$product_name.'</td>';
								echo '<td>'.$product_quantity.'</td>';
								echo '<td>'.$product_note.'</td>';
								echo '</tr>';
							}
							}
							?>
						</tbody>
					</table>
				</div>				
			</div>

			<!-- right side -->
			<div class="col-md-6 col-sm-6 right-side">
			<br><br><br>
				<h2 style="text-align: center;">Your Information </h2><br>
				<form action="send_order.php" method="POST" class="wow fadeIn" data-wow-delay="0.2s">
					<div class="col-md-6 col-sm-6">
						<label for="name"><strong>Your name:</strong></label></label>
						<input type="text" class="form-control" placeholder="Your Name"  id="name" name="name" />
					</div>
					<div class="col-md-6 col-sm-6">
						<label for="email"><strong>Your email:</strong></label>
						<input type="email" class="form-control" placeholder="Your Email" id="email" name="email" />
					</div>
					<div class="col-md-12 col-sm-12">
						<label for="text-area"><strong>Your message:</strong></label>
						<textarea class="form-control" placeholder="If you want to order something, please let Othello know..." rows="7" id="text-area" name="message"></textarea>
					</div>
					<div class="col-md-offset-8 col-md-4 col-sm-offset-8 col-sm-4">
						<input type="submit" class="send-button" value="SEND">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<ul class="copyright">
					<li>Copyright &copy; 2015</li>  
					<li>Design by BDDNQ team</li> 
				</ul>
				<i>Working best on Google Chrome</i>
			</div>
		</div>
	</div>
</footer>

<script src="js/jquery-lib.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
