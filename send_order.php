<?php 
session_start();
$msg = "<p><strong>Name:</strong>     ".$_POST['name']."</p>";
$msg .= "<p><strong>Email:</strong>   ".$_POST['email']."</p>";
$msg .= "<p><strong>Message:</strong> ".$_POST['message']."</p>";
$msg .= "<table style='border: 1px solid black;'><tr><th style='border: 1px solid black;'>Name</th><th style='border: 1px solid black;'>Quantity</th></tr>";

foreach ($_SESSION["cart_products"] as $cart_itm) {
	$msg .= "<tr><td style='border: 1px solid black;'>".$cart_itm["product_code"]."</td><td style='border: 1px solid black;'>".$cart_itm["product_quantity"]."</td></tr>";
}
$msg .= "</table>";

	$recipient = "innolight1001@gmail.com";
	$subject = "Form submission result";
	$mail_header = "MIME-Version: 1.0\r\n";
	$mail_header .= "Content-type: text/html; charset=UTF-8\r\n";
	$mail_header .= "From: My website <nguyenhaidang@gmail.com> \n"; 
	$mail_header .= "Reply-To:".$_POST['email'];
	mail($recipient,$subject,$msg,$mail_header);
session_destroy();
$return_url = "http://www.cc.puv.fi/~e1500966/web-deve-projects/Othello/products.php";
header('Location:'.$return_url);
 ?>
