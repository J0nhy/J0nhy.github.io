<?php
require('connection.inc.php');
require('functions.inc.php');
require('add_to_compare.php');

$pid=get_safe_value($con,$_POST['pid']);
$type=get_safe_value($con,$_POST['type']);

$obj=new add_to_compare();

if($type=='add'){
	$obj->addProduct($pid);
}

if($type=='remove'){
	$obj->removeProduct($pid);
}

if($type=='update'){
	$obj->updateProduct($pid);
}

echo $obj->showCartCount();
?>