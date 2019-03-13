<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require '../model/Order.php';

$order = new Order();
var_dump($orders = $order->db->select("orders"));

?>
<?php include('../../views/myOrders.php') ?>