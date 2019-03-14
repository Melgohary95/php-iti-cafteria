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
    private $db;
    
    public function __construct() {
        $this->db = new Database();
    }
    
    public function getOrders($fDate, $lDate){
        $myOrders = $this->db->select('orders','*',"date between $fDate AND $lDate;");
        return $myOrders;
    }

//-------------------- Aml ---------------------------
    public function getOrdersByDate(){
        if(isset($_POST['search'])){
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
        $orders =$this->db->select("orders" ,'orders.date ,total_price ,rooms.number as roomNo,users.name as user_name,users.ext as                  ext','orders.user_id=users.id' and 'orders.room_id=rooms.id',null ,null ,"users,rooms");
        $result['orders'] = $orders['resultset'];
       var_dump($result['orders']);

                                      } 
    
    /********************** nourhan ****************************/
                                      public function getAllProducts() {
        $productCategories = array();
        $categories = $this->db->select("categories");
        $result['users']= $this->db->select("users" ,"*","role_id=2")['resultset'];
        
        $result['categories'] = $categories['resultset'];
        foreach ($categories['resultset'] as $category) {
            $categoryId = $category['id'];
            $productCategories[$categoryId]= $this->db->select("products", '*', "category_id=$categoryId", "`products`.`id`DESC")['resultset'];
        }
        $result['productCategories'] = $productCategories;
        
//        var_dump($result);
        return $result;
    }
    public function getProductDetails($id)
    {
        $product =$this->db->selectById("products", '*', "id=$id");
        $result = $product['resultset'];
        return $result;
    }
    /************************ nourhan *************************/

}
