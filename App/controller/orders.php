<?php


require '../model/Order.php'; 
$model = new Order();
$result=$model->getAdminorders();

?>
<?php include('../../views/adminOrders.php') ?>