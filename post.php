<?
	require_once('init.php');
	$_SESSION["aryProductID"] =  $_POST['hAryProductID']; //取得由order2.php post to order2.php產品ID陣列	
	
	require_once($config['global_library'].'/post.php');	
?>