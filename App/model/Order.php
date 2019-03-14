<?php

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
    public $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getOrders($fDate, $lDate) {
        $myOrders = $this->db->select('orders', '*', "date between $fDate AND $lDate;
        ");
        return $myOrders;
    }

//-------------------- Aml ---------------------------
    public function getOrdersByDate() {
        if (isset($_POST['search'])) {
            $startDate = $_POST['startDate'];
            $endDate = $_POST['endDate'];
            // $result = $this->db->select(table name, colm name, );
            return $result;
        }
    }

//-------------------- Aml ---------------------------
//----------------fatma-----------
//fatema

    public function getAdminorders() {
        $productOrders = array();
        $orders = $this->db->select("orders", 'orders.date ,total_price ,rooms.number as roomNo,users.name as user_name,users.ext as                  ext', 'orders.user_id=users.id' and 'orders.room_id=rooms.id', null, null, "users,rooms");
        $result['orders'] = $orders['resultset'];
        var_dump($result['orders']);
    }

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
        if ( isset($post_data['quantity']) && count($post_data['quantity']) > 0) {
            $data['status'] = 0;
            $data['room_id'] = $post_data['room_id'];
            $data['notes'] = $post_data['notes'];
            $data['total_price'] = $post_data['total_price'];
            $data['user_id'] = $post_data['user_id'];
            $data['date'] = date('Y-m-d');
            $result = $this->db->insert("orders", $data);
            $quantities = $post_data['quantity'];
            foreach ($quantities as $key => $quantity)
            {
                $order_productData['order_id'] = $result['inserted_id'];
                $order_productData['quantity'] =$quantity;
                $order_productData['product_id'] = $post_data['products'][$key];
                $order_productData['amount'] = $post_data['amount'][$key];
                $this->db->insert("order_products", $order_productData);
            }
        }
    }
    
    public function searchForProducts($valueToSearch)
    {
        $products = $this->db->select("products","*","name LIKE '%$valueToSearch%' and availability = 1 ");
        $result = $products['resultset'];
        return $result;
    }

    /*     * ********************** nourhan ************************ */
}
