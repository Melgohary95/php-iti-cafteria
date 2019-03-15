<?php
session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users
 *
 * @author lenovo
 */
require '../../core/Database.php';

class Order {

    //put your code here
    private $db;

    public function __construct() {
        $this->db = new Database();
    }
    
    public function cancelOrders($mid){
        $result = $this->db->delete("orders","id = $mid;");
    }

    public function getOrders($fDate,$lDate){
            $myOrders;
            $userId = $_SESSION["uid"];
        if(!empty($fDate) && !empty($lDate)){
            $myOrders = $this->db->select('orders','*',"user_id = $userId AND date BETWEEN '$fDate' AND '$lDate';");
        } else {
            $myOrders = $this->db->select('orders', '*',"user_id = $userId");
        }
        return $myOrders;
    }

    // public function getOrders($fDate, $lDate){
    //     $myOrders = $this->db->select('orders','*',"date between $fDate AND $lDate;");
    //     return $myOrders;
    // }
//-------------------- Aml ---------------------------
public function orderChecks($fDate,$lDate){
    echo "test checks";
    if(!empty($fDate) && !empty($lDate)){
        $myOrders = $this->db->select('orders','*',"date between $fDate AND $lDate;");
    }
    else{
        $myOrders = $this->db->select('orders','*');
    }
    return $myOrders;
}
//-------------------- Aml ---------------------------
//----------------fatma-----------
public function getAdminorders() {
    $productOrders = array();
    $orders =$this->db->select("orders" ,
    'orders.date ,orders.id,total_price ,rooms.number as roomNo,users.name as user_name,users.ext as ext',
    'users.id=orders.user_id and rooms.id=orders.room_id and STATUS=0',null ,null ,"users,rooms");
    $result['orders'] = $orders['resultset'];
   //var_dump($result['orders']);
   foreach($orders['resultset'] as $order){
      // var_dump($order['id']);
    $Id=$order['id'];
    $productOrders[$Id]=$this->db->select("order_products"
    ,'order_products.Quantity as Qun,products.image as pimg,products.price'
    ,"order_products.order_id= $Id and order_products.product_id=products.id" 
    ,null ,null ,"products")['resultset'];
    
   };
   
   $result['productOrders'] = $productOrders;
    //var_dump($result);
    //echo '<pre>' . var_export($result['productOrders'], true) . '</pre>';
  
                                  
                                  return $result;
                                }

//----------------fatma--------------------------//
    /*     * ******************** nourhan *************************** */
    public function getAllProducts() {
        $productCategories = array();
        $categories = $this->db->select("categories");
        $result['users'] = $this->db->select("users", "*", "role_id=2")['resultset'];
        $result['rooms'] = $this->db->select("rooms", "*")['resultset'];

        $result['categories'] = $categories['resultset'];
        foreach ($categories['resultset'] as $category) {
            $categoryId = $category['id'];
            $productCategories[$categoryId] = $this->db->select("products", '*', "category_id=$categoryId and availability=1", "`products`.`id`DESC")['resultset'];
        }
        $result['productCategories'] = $productCategories;

//        var_dump($result);
        return $result;
    }
    
    public function getUserProducts()
    {
        $productCategories = array();
        $categories = $this->db->select("categories");
        $userId = $_SESSION['uid'];
        $result['user'] = $this->db->selectById("users", '*', "id=$userId")['resultset'];
        $result['rooms'] = $this->db->select("rooms", "*")['resultset'];

        $result['categories'] = $categories['resultset'];
        foreach ($categories['resultset'] as $category) {
            $categoryId = $category['id'];
            $productCategories[$categoryId] = $this->db->select("products", '*', "category_id=$categoryId and availability=1", "`products`.`id`DESC")['resultset'];
        }
        $result['productCategories'] = $productCategories;

//        var_dump($result);
        return $result;
       
    }

    public function getProductDetails($id) {
        $product = $this->db->selectById("products", '*', "id=$id");
        $result = $product['resultset'];
        return $result;
    }

    public function getUserRoom($id) {
        $user = $this->db->selectById("users", '*', "id=$id");
        $result = $user['resultset'];
        return $result;
    }

    public function addOrder($post_data) {
        $result = array();
        if (isset($post_data['quantity']) && count($post_data['quantity']) > 0) {
            $data['status'] = 0;
            $data['room_id'] = $post_data['room_id'];
            $data['notes'] = $post_data['notes'];
            $data['total_price'] = $post_data['total_price'];
            $data['user_id'] = $post_data['user_id'];
            $data['date'] = date('Y-m-d');
            $result = $this->db->insert("orders", $data);
            $quantities = $post_data['quantity'];
            foreach ($quantities as $key => $quantity) {
                $order_productData['order_id'] = $result['inserted_id'];
                $order_productData['quantity'] = $quantity;
                $order_productData['product_id'] = $post_data['products'][$key];
                $order_productData['amount'] = $post_data['amount'][$key];
                $this->db->insert("order_products", $order_productData);
            }
        }
    }

    public function searchForProducts($valueToSearch) {
        $products = $this->db->select("products", "*", "name LIKE '%$valueToSearch%' and availability = 1 ");
        $result = $products['resultset'];
        return $result;
    }

    /*     * ********************** nourhan ************************ */
}
