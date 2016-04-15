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
	<script src = 'https://www.google.com/recaptcha/api.js'></script>
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
<div class="navbar navbar-inverse navbar-fixed-top custom-navbar">
  <div class = "container">

    <a href = "homepage.html" class = "navbar-brand"><img src="images/logo.png"></a>
    <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
      <span class= "icon-bar"></span>
      <span class= "icon-bar"></span>
      <span class= "icon-bar"></span>
      <span class= "icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse navHeaderCollapse">

      <ul class = "nav navbar-nav navbar-right">
              <li class="active_page"><a href="homepage.html">WELCOME</a></li>
              <li><a href="about.html">ABOUT</a></li>
              <li><a href="products.php">PRODUCTS</a></li>
              <li><a href="contact.html">CONTACT</a></li>     
          </ul>
  </div>
</div>
</div>

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
							<tr><th>Name</th><th>Quantity</th><th>Price</th><th>Total</th></tr>
						</thead>
						<tbody>
							<?php
							if(isset($_SESSION["cart_products"])) { //check session var					
							$total = 0; //set initial total value
							$b = 0; //var for zebra stripe table 
							foreach ($_SESSION["cart_products"] as $cart_itm){	//set variables to use in content below
								$product_name = $cart_itm["product_name"];
								$product_quantity = $cart_itm["product_quantity"];
								$product_price = $cart_itm["product_price"];
								$product_code = $cart_itm["product_code"];
								$subtotal = ($product_price * $product_quantity); //calculate Price x Qty
								$bg_color = ($b++%2==1) ? 'odd' : 'even'; //class for zebra stripe 
								echo '<tr class="'.$bg_color.'">';
								echo '<td>'.$product_name.'</td>';
								echo '<td>'.$product_quantity.'</td>';
								echo '<td>'.$currency.$product_price.'</td>';
								echo '<td>'.$currency.$subtotal.'</td>';
								echo '</tr>';
								$total = ($total + $subtotal); //add subtotal to total var
							}
							}
							?>
							<tr>
								<td colspan="4"><span style="float:right;text-align: right;"><strong>Total</strong> :<?php echo $currency.$total; ?> </span></td>
							</tr>
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
						<label for="name"><strong>Name:</strong></label></label>
						<input type="text" class="form-control" placeholder="Your Name Here"  id="name" name="name">
					</div>
					<div class="col-md-6 col-sm-6">
						<label for="email"></label><strong>Email:</strong></label>
						<input type="email" class="form-control" placeholder="Your Email Here" id="email" name="email">
					</div>
					<div class="col-md-12 col-sm-12">
						<label for="text-area"><strong>Message:</strong></label>
						<textarea class="form-control" placeholder="Type your message here..." rows="7" id="text-area" name="message"></textarea>
					</div>
					<div class="g-recaptcha" data-SiteKey = "6LffTR0TAAAAAGzViNiRbvv4_ZkGIf0rBdHa1yhx"> </div>
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

<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="js/jquery-lib.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
