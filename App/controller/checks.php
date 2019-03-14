<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require '../model/Order.php';

$order = new Order();
//$orders = $order->orderChecks();

$orders = $order->orderChecks($_REQUEST["startDate"], $_REQUEST["endDate"]);

//var_dump($orders);


?>
<?php include('../../views/adminChecks.php') ?>
