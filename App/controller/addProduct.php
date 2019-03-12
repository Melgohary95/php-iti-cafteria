<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require '../model/product.php'; 

$p = new Product();


$inputs = array();
if(count($_POST) > 0)
{
  if (!empty($_POST["productName"])) {
      $name= trim($_POST['productName']);
      $inputs['name'] = $_POST['productName'];
      $inputs['availability'] = 1;
      
  }
  if (!empty($_POST["productPrice"])) {
    $price= trim($_POST['productPrice']);
    $inputs['price'] = $price;
  }
  if (!empty($_POST["productCategory"])) {
    $cat= trim($_POST['productCategory']);
    $inputs['category_id'] = $cat;
  }
  if (!empty($_POST["productImage"])) {
    $img= trim($_POST['productImage']);
    $inputs['image'] = "../assets/images/".$img;
  }
  $p->db->insert("products",$inputs);
}
?>

<?php include('../../views/adminAddProduct.php') ?>
