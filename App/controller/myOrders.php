<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require '../model/Order.php';

$order = new Order();
$orders = $order->getOrders($_REQUEST["startDate"], $_REQUEST["endDate"]);
$total = 0;
?>
<?php include('../../views/myOrders.php') ?>
