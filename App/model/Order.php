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
    
    public function getOrders($fDate, $lDate){
        $myOrders = $this->db->select('orders','*',"date between $fDate AND $lDate;
        ");
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

}
