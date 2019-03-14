<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require '../model/Order.php';

$order = new Order();
// var_dump($order->getOrders("'1995-11-2'","'1996-9-16'"));
?>
<?php include('../../views/myOrders.php') ?>