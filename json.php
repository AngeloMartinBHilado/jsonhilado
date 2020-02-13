<?php 
include 'config.php';
include 'class.bag.php';
header('Content-Type: application/json');
$store = new bag();
$list=$store->get_store();
echo "{\"store\":";
echo json_encode($list);
echo "}";
?>
