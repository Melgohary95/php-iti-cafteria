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

class User {
    //put your code here
    public $db;
    
    public function __construct() {
        $this->db = new Database();
    }
    
    public function addUser($user){
			
        $user['password'] = md5($user['password']);
         var_dump($user);
        //checking if the username or email is available in db
        $users = $db->select("users", $rows = '*', $where = "email = $user->email");
        $db->insert("users",$user);
        $count_row = $users->number_of_rows;
        
        //if the username is not in db then insert to the table
        
        if($count_row == 0){
            $db->insert("users",$user);
            if($check == true)	
            {
                $_SESSION['login'] = true; 
                $_SESSION['uid'] = $user['id'];
                return true; 
                
            }	
            
            
        }
        else{return false;}
        
        
        }

}
