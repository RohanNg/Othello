<!DOCTYPE html>
<html lang="en-US">
	
<head>
	<meta charset="UTF-8" />
	<title>Othello - Products</title>
	<meta name="description" content="HTML5 Template" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="keywords" content="Othello Bakery Products" />
	<meta name="author" content=" " />

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/et-line-font.css">
	<link rel="stylesheet" href="css/main.css">
	<link type="text/css" rel="stylesheet" href="css/products.css" />
	<!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  	<![endif]-->
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Crimson+Text:400italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js" type='text/javascript'></script>
 	
</head>
	
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">



<div class="theblogwidgets" style="">
<div>   
<iframe src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/pages/Othello/209409135842253/&width=245&colorscheme=light&show_faces=true&border_color=white&connections=9&stream=true&header=false&height=470" scrolling="no" frameborder="0" scrolling="no" style="border: white; overflow: hidden; height: 470px; width: 245px;background:#fafafa;color:000;"></iframe>
</div>
</div>


<!-- navigation section -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
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
				<li><a href="#" class="smoothScroll">ABOUT</a></li>
				<li><a href="products.html" class="smoothScroll">PRODUCTS</a></li>
				<li><a href="contact.html" class="smoothScroll">CONTACT</a></li>
			</ul>
		</div>
	</div>
</section>


<!-- main section -->
<div id="products" class="container-fluid" style="margin:-1.5%">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/products/carousel/products_carousel_1.png" alt="Category_1" width="460" height="345">
        <div style="color:red"class="carousel-caption">
          <h3>Category 1</h3>
          <p>This is the first category</p>
        </div>
      </div>


      <div class="item">
        <img src="images/products/carousel/products_carousel_2.png" alt="Dongnai" width="460" height="345">
        <div style="color:purple" class="carousel-caption">
          <h3>Category 2</h3>
          <p>This is the second category</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/products/carousel/products_carousel_3.png" alt="MyFamily" width="460" height="345">
        <div style="color:blue" class="carousel-caption">
          <h3>Category 3</h3>
          <p>This is the third category</p>
        </div>
      </div>
       <div class="item">
        <img src="images/products/carousel/products_carousel_4.png" alt="MyFamily" width="460" height="345">
        <div style="color:tomato" class="carousel-caption">
          <h3>Category 4</h3>
          <p>This is the fourth category</p>
        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<!-- Item list !-->
<div class="container-fluid text-center">
  <ul id="itemListNav" class="nav nav-tabs">
    <li class="active category"><a data-toggle="tab" href="#category1">Category #1</a></li>
    <li class="category"><a data-toggle="tab" href="#category2">Category #2</a></li>
    <li class="category"><a data-toggle="tab" href="#category3">Category #3</a></li>
    <li class="category"><a data-toggle="tab" href="#category4">Category #4</a></li>
  </ul>
 
  
  <div id="tab-content" class="tab-content">
    <div id="category1" class="row tab-pane fade in active" role="tab">
    	<button  type="button" class="btn btn-default col-xs-4"><div data-toggle="modal" data-target="#item_1_1">
			<img src="images/products/products_1/products_1_1.png" alt="Picture of product_1_1" width="100%"/>
			<p>Item #1 </p>
		</div></button>
		<button  type="button" class="btn btn-default col-xs-4"><div data-toggle="modal" data-target="#item_1_2">
			<img src="images/products/products_1/products_1_2.png" alt="Picture of product_1_2" width="100%"/>
			<p>Item #2 </p>
		</div></button>
		<button  type="button" class="btn btn-default col-xs-4"><div data-toggle="modal" data-target="#item_1_3">
	        <img src="images/products/products_1/products_1_3.png" alt="Picture of product_1_3" width="100%"/>
			<p>Item #3 </p>
		</div></button>
		<button  type="button" class="btn btn-default col-xs-4"><div data-toggle="modal" data-target="#item_1_4">
	        <img src="images/products/products_1/products_1_4.png" alt="Picture of product_1_4" width="100%"/>
			<p>Item #4 </p>
		</div></button>
		<button  type="button" class="btn btn-default col-xs-4"><div data-toggle="modal" data-target="#item_1_5">
	        <img src="images/products/products_1/products_1_5.png" alt="Picture of product_1_5" width="100%"/>
			<p>Item #5 </p>
		</div></button>
		<button  type="button" class="btn btn-default col-xs-4"><div data-toggle="modal" data-target="#item_1_6">
	        <img src="images/products/products_1/products_1_6.png" alt="Picture of product_1_6" width="100%"/>
			<p>Item #6 </p>
		</div></button>
		<button  type="button" class="btn btn-default col-xs-4"><div data-toggle="modal" data-target="#item_1_7">
	        <img src="images/products/products_1/products_1_7.png" alt="Picture of product_1_7" width="100%"/>
			<p>Item #7 </p>
		</div></button>
		<button  type="button" class="btn btn-default col-xs-4"><div data-toggle="modal" data-target="#item_1_8">
	        <img src="images/products/products_1/products_1_8.png" alt="Picture of product_1_8" width="100%"/>
			<p>Item #8 </p>
		</div></button>
		<button  type="button" class="btn btn-default col-xs-4"><div data-toggle="modal" data-target="#item_1_9">
	        <img src="images/products/products_1/products_1_9.png" alt="Picture of product_1_9" width="100%"/>
			<p>Item #9 </p>
		</div></button>
    </div>
    <div id="category2" class="row tab-pane fade" role="tab">
		<div class="col-xs-4" data-toggle="modal" data-target="#item_2_1">
			<img src="images/products/products_2/products_2_1.png" alt="Picture of product_2_1" width="100%"/>
			<p>Item #1 </p>
		</div>
		<div class="col-xs-4" data-toggle="modal" data-target="#item_2_2">
			<img src="images/products/products_2/products_2_2.png" alt="Picture of product_2_2" width="100%"/>
			<p>Item #2 </p>
		</div>
		<div class="col-xs-4" data-toggle="modal" data-target="#item_2_3">
			<img src="images/products/products_2/products_2_3.png" alt="Picture of product_2_3" width="100%"/>
			<p>Item #3 </p>
		</div>
		<div class="col-xs-4" data-toggle="modal" data-target="#item_2_4">
			<img src="images/products/products_2/products_2_4.png" alt="Picture of product_2_4" width="100%"/>
			<p>Item #4 </p>
		</div>
		<div class="col-xs-4" data-toggle="modal" data-target="#item_2_5">
			<img src="images/products/products_2/products_2_5.png" alt="Picture of product_2_5" width="100%"/>
			<p>Item #5 </p>
		</div>
		<div class="col-xs-4" data-toggle="modal" data-target="#item_2_6">
			<img src="images/products/products_2/products_2_6.png" alt="Picture of product_2_6" width="100%"/>
			<p>Item #6 </p>
		</div>
		<div class="col-xs-4" data-toggle="modal" data-target="#item_2_7">
			<img src="images/products/products_2/products_2_7.png" alt="Picture of product_2_7" width="100%"/>
			<p>Item #7 </p>
		</div>
		<div class="col-xs-4" data-toggle="modal" data-target="#item_2_8">
			<img src="images/products/products_2/products_2_8.png" alt="Picture of product_2_8" width="100%"/>
			<p>Item #8 </p>
		</div>
		<div class="col-xs-4" data-toggle="modal" data-target="#item_2_9">
			<img src="images/products/products_2/products_2_9.png" alt="Picture of product_2_9" width="100%"/>
			<p>Item #9 </p>
		</div>
    </div>
    <div id="category3" class="row tab-pane fade" role="tab">
		<div class="col-xs-4" data-toggle="modal" data-target="#item_3_1">
			<img src="images/products/products_3/products_3_1.png" alt="Picture of product_3_1" width="100%"/>
			<p>Item #1 </p>
		</div>
        <div class="col-xs-4" data-toggle="modal" data-target="#item_3_2">
			<img src="images/products/products_3/products_3_2.png" alt="Picture of product_2_2" width="100%"/>
			<p>Item #2 </p>
		</div>
		<div class="col-xs-4" data-toggle="modal" data-target="#item_3_3">
			<img src="images/products/products_3/products_3_3.png" alt="Picture of product_3_3" width="100%"/>
			<p>Item #3 </p>
		</div>
		<div class="col-xs-4" data-toggle="modal" data-target="#item_3_4">
			<img src="images/products/products_3/products_3_4.png" alt="Picture of product_3_4" width="100%"/>
			<p>Item #4 </p>
		</div>
		<div class="col-xs-4" data-toggle="modal" data-target="#item_3_5">
			<img src="images/products/products_3/products_3_5.png" alt="Picture of product_3_5" width="100%"/>
			<p>Item #5 </p>
		</div>
		<div class="col-xs-4" data-toggle="modal" data-target="#item_3_6">
			<img src="images/products/products_3/products_3_6.png" alt="Picture of product_3_6" width="100%"/>
			<p>Item #6 </p>
		</div>
		<div class="col-xs-4" data-toggle="modal" data-target="#item_3_7">
			<img src="images/products/products_3/products_3_7.png" alt="Picture of product_3_7" width="100%"/>
			<p>Item #7 </p>
		</div>
		<div class="col-xs-4" data-toggle="modal" data-target="#item_3_8">
			<img src="images/products/products_3/products_3_8.png" alt="Picture of product_3_8" width="100%"/>
			<p>Item #8 </p>
		</div>
		<div class="col-xs-4" data-toggle="modal" data-target="#item_3_9">
			<img src="images/products/products_3/products_3_9.png" alt="Picture of product_3_9" width="100%"/>
			<p>Item #9 </p>
		</div>
    </div>
    <div id="category4" class="row tab-pane fade" role="tab">
        <div class="col-xs-4" data-toggle="modal" data-target="#item_4_1">
			<img src="images/products/products_4/products_4_1.png" alt="Picture of product_4_1" width="100%"/>
			<p>Item #1 </p>
		</div>
        <div class="col-xs-4" data-toggle="modal" data-target="#item_4_2">
			<img src="images/products/products_4/products_4_2.png" alt="Picture of product_4_2" width="100%"/>
			<p>Item #2 </p>
		</div>
		<div class="col-xs-4" data-toggle="modal" data-target="#item_4_3">
			<img src="images/products/products_4/products_4_3.png" alt="Picture of product_4_3" width="100%"/>
			<p>Item #3 </p>
		</div>
		<div class="col-xs-4" data-toggle="modal" data-target="#item_4_4">
			<img src="images/products/products_4/products_4_4.png" alt="Picture of product_4_4" width="100%"/>
			<p>Item #4 </p>
		</div>
		<div class="col-xs-4" data-toggle="modal" data-target="#item_4_5">
			<img src="images/products/products_4/products_4_5.png" alt="Picture of product_4_5" width="100%"/>
			<p>Item #5 </p>
		</div>
		<div class="col-xs-4" data-toggle="modal" data-target="#item_4_6">
			<img src="images/products/products_4/products_4_6.png" alt="Picture of product_4_6" width="100%"/>
			<p>Item #6 </p>
		</div>
		<div class="col-xs-4" data-toggle="modal" data-target="#item_4_7">
			<img src="images/products/products_4/products_4_7.png" alt="Picture of product_4_7" width="100%"/>
			<p>Item #7 </p>
		</div>
		<div class="col-xs-4" data-toggle="modal" data-target="#item_4_8">
			<img src="images/products/products_4/products_4_8.png" alt="Picture of product_4_8" width="100%"/>
			<p>Item #8 </p>
		</div>
		<div class="col-xs-4" data-toggle="modal" data-target="#item_4_9">
			<img src="images/products/products_4/products_4_9.png" alt="Picture of product_4_9" width="100%"/>
			<p>Item #9 </p>
		</div>
    </div>
  </div>
</div>


<?php
$txt='';
for( $x = 1; $x <= 4; $x++){
	for($y = 1; $y <=9; $y++){
		$txt.= <<<EOT
		<!-- Modal of item_{$x}_{$y} -->
		<div class="modal fade" id="item_{$x}_{$y}" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content of item_{$x}_{$y}-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Item #{$y}</h4>
					</div>
					<div class="modal-body">
						<img src="images/products/products_{$x}/products_{$x}_{$y}.png" alt="Picture of product_{$x}_{$y}" width="100%"/>
						<p>Description ... </p>
						<hr/>
						<form role="form">
							<div class="form-group">
								<label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Item #{$y}, price</label>
								<input type="number" class="form-control" id="quantity" placeholder="How many?">
							</div>
							<div class="form-group">
								<label for="usrname"><span class="glyphicon glyphicon-user"></span>Your address</label>
								<input type="text" class="form-control" id="usraddress" placeholder="Enter address">
							</div>
							<button type="submit" class="btn btn-block">Confirm
								<span class="glyphicon glyphicon-ok"></span>
							</button>
						</form>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
							<span class="glyphicon glyphicon-remove"></span> Cancel
						</button>
						<p>Need <a href="#">help?</a></p>
					</div>
				</div>      
			</div>
		</div>
EOT;
	}
}
echo $txt;
?>		

		
</div>
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

