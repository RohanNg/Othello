<?php 
session_start();
include_once("config.php");
 ?>

 <!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>View shopping cart</title>
	<link href="css/cart.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h1 align="center">Your Cart</h1>
	<div class="cart-view-table-back">
		<form method="post" action="cart_update.php">
			<table width="100%"  cellpadding="6" cellspacing="0"><thead><tr><th>Quantity</th><th>Name</th><th>Your Taste</th><th>Remove</th></tr></thead>
				<tbody>
	<?php
	if(isset($_SESSION["cart_products"])) //check session var
	{
		$total = 0; //set initial total value
		$b = 0; //var for zebra stripe table 
		foreach ($_SESSION["cart_products"] as $cart_itm){	//set variables to use in content below
			$product_name = $cart_itm["product_name"];
			$product_qty = $cart_itm["product_quantity"];
			$product_note = $cart_itm["product_note"];
			$product_code = $cart_itm["product_code"];
			
		   	$bg_color = ($b++%2==1) ? 'odd' : 'even'; //class for zebra stripe 
		   	echo '<tr class="'.$bg_color.'">';
		   	echo '<td><input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
		   	echo '<td>'.$product_name.'</td>';
		   	echo '<td><input type="text" maxlength="200" name="product_note['.$product_code.']" value="'.$product_note.'" /></td>';		   	
		   	echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /></td>';
		   	echo '</tr>';
		}
	}
	?>
<!-- 	<tr><td colspan="5"><span style="float:right;text-align: right;">Total : <?php echo sprintf("%01.2f", $total);?></span></td></tr> -->
	<tr><td colspan="5"><a href="products.php" class="button">Add More Items</a><button type="submit">Update</button><a href="check_out.php" class="button">Check out</a></td></tr>
</tbody>
</table>
<input type="hidden" name="return_url" value="<?php 
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); 
echo $current_url; ?>" />
</form>
</div>

</body>
</html>