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

require './core/Database.php'; 

class User {
    //put your code here
    private $db;
    
    public function __construct() {
        $this->db = new Database();
    }
    
    public function addUser()
    {
//        echo "hiii";
    }
}
