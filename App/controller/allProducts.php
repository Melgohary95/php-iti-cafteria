<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require '../model/product.php'; 

$p = new Product();
$products = $p->db->select("products");

?>

<?php require('../../views/adminAllProducts.php') ?>
