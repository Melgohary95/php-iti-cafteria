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
    
    public function getOrders($fDate = null, $lDate = null){
        $myOrders = $this->db->select('orders','*',"user_id = 2;");
        return $myOrders;
    }

//-------------------- Aml ---------------------------
   
//-------------------- Aml --------------------------- 
}
