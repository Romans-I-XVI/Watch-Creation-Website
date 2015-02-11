<head>
<?php include("header.php"); ?>
<?php
	$purchase_item_id= $_GET["purchase_item_id"];
	foreach($_SESSION['Products'] as $product_id => $owned) {
		if ($product_id == $purchase_item_id && !$owned){
			mysql_query("UPDATE `watch_creation`.`users` SET `".$purchase_item_id."` = '1' WHERE `users`.`UserID` =".$_SESSION['UserID']);
			$_SESSION['Products'][$product_id] = 1;
		}
	}
	
?>
<meta http-equiv="refresh" content="0; store.php" />
</head>