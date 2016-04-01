<?php 
session_start();
include_once("config.php");

//add product to session or create new one

if (isset($_POST["type"]) && $_POST["type"]=="add" && $_POST["product_quantity"]>0) {
	foreach($_POST as $key => $value) {
		$new_product["$key"] = filter_var($value, FILTER_SANITIZE_STRING);
	}
	
	 // remove unecessary vars
	unset($new_product['type']);
	unset($new_product['return_url']);
	
	if(isset($_SESSION["cart_products"])){  //if session var already exist
		if(isset($_SESSION["cart_products"][$new_product['product_code']])){ //check item exist in products array
			unset($_SESSION["cart_products"][$new_product['product_code']]); //unset old array item
		}           
	}
	$_SESSION["cart_products"][$new_product['product_code']] = $new_product; //update or create product session with new item  		
	print_r($_SESSION["cart_products"]);
}

//update or remove items 
if(isset($_POST["product_qty"]) || isset($_POST["remove_code"]))
{
	//update item quantity in product session
	if(isset($_POST["product_qty"]) && is_array($_POST["product_qty"])){
		foreach($_POST["product_qty"] as $key => $value){            // loop through product_qty array
			if(is_numeric($value)){
				$_SESSION["cart_products"][$key]["product_quantity"] = $value;
			}
		}
	}
	//remove an item from product session
	if(isset($_POST["remove_code"]) && is_array($_POST["remove_code"])){
		foreach($_POST["remove_code"] as $key){
			unset($_SESSION["cart_products"][$key]);
		}	
	}
}

//back to return url
$return_url = (isset($_POST["return_url"]))?urldecode($_POST["return_url"]):''; //return url
header('Location:'.$return_url);

?>