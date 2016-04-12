<?php 
session_start();
include_once("config.php");
//current URL of the Page. cart_update.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>

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

  <style type="text/css">
    .nav-tabs > li, .nav-pills > li {
      float:none;
      display:inline-block;
      *display:inline; /* ie7 fix */
      zoom:1; /* hasLayout ie7 trigger */
    }

    .nav-tabs, .nav-pills {
      text-align:center;
    }
  </style>
</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

  <!-- Facebook plugin 
  <div class="theblogwidgets" style="">
    <div>   
     <iframe src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/pages/Othello/209409135842253/&width=245&colorscheme=light&show_faces=true&border_color=white&connections=9&stream=true&header=false&height=470" scrolling="no" frameborder="0" scrolling="no" style="border: white; overflow: hidden; height: 470px; width: 245px;background:#fafafa;color:000;"></iframe>
   </div>
 </div>
  -->

 <!-- navigation section -->
 <section class="navbar navbar-fixed-top custom-navbar" role="navigation">
  <div class="container">
    <div class="collapse navbar-collapse">
       <ul class="nav navbar-nav navbar-left">
         <li class="header-logo"><a href="homepage.html">OTHELLO</a></li>
       </ul>
       <ul class="nav navbar-nav navbar-right">
          <?php  
            if (isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"]) > 0) {
              echo '<li><a href="view_cart.php" class="smoothScroll"><span class="glyphicon glyphicon-shopping-cart">_CART('.count($_SESSION["cart_products"]).')</span></a></li>';
            } else {
              echo '<li><a href="#" class="smoothScroll"><span class="glyphicon glyphicon-shopping-cart">_CART</span></a></li>';              
            }
          ?>       
       </ul>
       <ul class="nav navbar-nav navbar-right navbar-lang">
         <li><a href="#" class="smoothScroll">FIN</a></li>
         <li><a href="#" class="smoothScroll">SWE</a></li>
         <li><a href="#" class="smoothScroll">ENG</a></li>
       </ul>
       <ul class="nav navbar-nav navbar-right">
         <li><a href="homepage.html" class="smoothScroll">WELCOME</a></li>
         <li><a href="aboutus.html" class="smoothScroll">ABOUT</a></li>
         <li><a href="products.html" class="smoothScroll">PRODUCTS</a></li>
         <li><a href="contact.html" class="smoothScroll">CONTACT</a></li>
       </ul>
    </div>
   </div>
</section>


<!-- main section -->
  <div id="products" class="container-fluid" style="margin:-1.5%">
    <br>
       <!-- Carousel start -->
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
            <div style="color:red" class="carousel-caption">
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
      <!-- Carousel End-->


  <!-- Item list start!-->
  <div class="container-fluid text-center">
    <ul id="itemListNav" class="nav nav-tabs">
          <li class="active category"><a data-toggle="tab" href="#category1">Category #1</a></li>
          <li class="category"><a data-toggle="tab" href="#category2">Category #2</a></li>
          <li class="category"><a data-toggle="tab" href="#category3">Category #3</a></li>
          <li class="category"><a data-toggle="tab" href="#category4">Category #4</a></li>
    </ul>

    <!--Item tab content-->

    <div id="tab-content" class="tab-content">
      <?php
        // div for each tab content 
        $item_list = "";
        for($i = 1; $i <= 4; $i++){
          if( $i ==1 ){
            $item_list .= "\r\n<div id='category1' class='row tab-pane fade in active' role='tab'>";
          } else {
            $item_list .= "\r\n<div id='category".$i."' class='row tab-pane fade' role='tab'>";
          }

          $query = "SELECT product_code, product_name, product_img_path FROM cake_category_".$i." ORDER BY id ASC";
          $results = $mysqli->query($query);
          if($results) {
            while($obj = $results->fetch_object()){
            $item_list .= <<<EOT
              
              <div class="col-xs-4" data-toggle="modal" data-target="#{$obj->product_code}">
                <img src="{$obj->product_img_path}" alt="{$obj->product_name}" width="100%"/>
               <p>Product name: {$obj->product_name}</p>
              </div>
EOT;
            }          
          }
          $item_list .= "\r\n</div>";
        }
        echo $item_list;
      ?>
    </div>
  </div>
<!-- Item list end -->

<!-- Create modal for each Item list -->
<?php
$item_modal = "";
for( $x = 1; $x <= 4; $x++){
        $query = "SELECT product_code, product_name, product_description, product_img_path, product_price FROM cake_category_".$x." ORDER BY id ASC";
        $results = $mysqli->query($query); 
        if($results) {
          while($obj = $results->fetch_object()){
            $item_modal .= <<<EOT

<!-- Modal of {$obj->product_code} -->
<div class="modal fade" id="{$obj->product_code}" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content of {$obj->product_code}-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">{$obj->product_name}</h4>
      </div>
      <div class="modal-body">
        <img src="{$obj->product_img_path}" alt="{$obj->product_name}" width="100%"/>
        <p>Description ...{$obj->product_description} </p>
        <hr/>
        <form role="form" method="POST" action="cart_update.php">
          <input type="hidden" name="product_code" value="{$obj->product_code}" />
          <input type="hidden" name="type" value="add" />
          <input type="hidden" name="return_url" value="{$current_url}" />
          <input type="hidden" name="product_name" value="{$obj->product_name}" />
          <input type="hidden" name="product_price" value="{$obj->product_price}" />
          <div class="form-group">
            <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> {$obj->product_name}, price</label>
            <input type="number" class="form-control" id="quantity" name="product_quantity" placeholder="How many?" />
          </div>
          <button type="submit" class="btn btn-block">Confirm
            <span class="glyphicon glyphicon-ok"></span>
          </button>
        </form>
      </div>
    </div>      
  </div>
</div>
EOT;
          }
        }
}
echo $item_modal;
?>		

</div>
<!-- Main section end -->
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

<!-- Modal of {$obj->product_code} -->
<div class="modal fade" id="{$obj->product_code}" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content of {$obj->product_code}-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">{$obj->product_name}</h4>
      </div>
      <div class="modal-body">
        <img src="{$obj->product_img_path}" alt="{$obj->product_name}" width="100%"/>
        <p>Description ... </p>
        <hr/>
        <form role="form" method="POST" action="cart_update.php">
          <input type="hidden" name="product_code" value="{$obj->product_code}" />
          <input type="hidden" name="type" value="add" />
          <input type="hidden" name="return_url" value="{$current_url}" />
          <input type="hidden" name="product_name" value="{$obj->product_name}" />
          <input type="hidden" name="product_price" value="{$obj->product_price}" />
          <div class="form-group">
            <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> {$obj->product_name}, price</label>
            <input type="number" class="form-control" id="quantity" name="product_quantity" placeholder="How many?" />
          </div>
          <button type="submit" class="btn btn-block">Confirm
            <span class="glyphicon glyphicon-ok"></span>
          </button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"/>
          <span class="glyphicon glyphicon-remove"></span> Cancel
        </button>
        <p>Need <a href="#">help?</a></p>
      </div>
    </div>      
  </div>
</div>