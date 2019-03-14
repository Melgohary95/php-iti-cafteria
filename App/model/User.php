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

<<<<<<< HEAD
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
=======
require '../../core/Database.php'; 

class User {
    //put your code here
    public $db;

    
    public function __construct() {
        $this->db = new Database();
        //$this->load->Database();
    }
    
    public function addUser($name,$email,$password,$room,$image,$ext){
		
         $user=array();
         $user['name']=$name;
         $user['password'] = md5($password);
         $user['email']=$email;
         $user['room_id']=$room;
         $user['ext']=$ext;
         $user['image']=$image;
         var_dump($user);
        //checking if the username or email is available in db
       // $users = $db->select("users", $rows = '*', $where = "email = $user->email");
       $inserted=$this->$db->insert("users",$user);
        // $count_row = $users->number_of_rows;
        
        // //if the username is not in db then insert to the table
        
        // if($count_row == 0){
        //     $db->insert("users",$user);
        //     if($check == true)	
        //     {
        //         $_SESSION['login'] = true; 
        //         $_SESSION['uid'] = $user['id'];
        //         return true; 
                
        //     }	
            
            
        // }
        // else{return false;}
        
        return $inserted;
        }

        public function getUser($id){
            $user= $this->db->select("users" ,"*","id='$id' ;")['resultset'];
            return $user;
        }

        public function login($email, $password){
            $userpassword = md5($password);
            $user= $this->db->select("users" ,"*","email='$email' and password='$password' ;");
            $result = $user['resultset'];
            $count_row = count($result);
            //var_dump(strcmp($result[0]['role_id'],"2")==0);
            //var_dump($count_row);
            if ($count_row == 1 && strcmp($result[0]['role_id'],"2")==0 ) {
                var_dump($result[0]['role_id']);
                    $_SESSION['login'] = true; 
                    $_SESSION['uid'] = $result[0]['id'];
                    header("Location: ../../views/home.php");
                  
                }
             else if($count_row == 1 && strcmp($result[0]['role_id'],"1")==0){
                $_SESSION['login'] = true; 
                $_SESSION['user']=$result[0];
                $_SESSION['uid'] = $result[0]['id'];
                header("Location: ../../views/admin.php");
              
             }   
                
            else{
                //header("Location: index.php");
                
            }
            
    
        }


        public function logout() {
            $_SESSION['login'] = FALSE;
            unset($_SESSION);
            session_destroy();
            header("Location: ../../views/components/loginForm.php");
            }



>>>>>>> 3ecb882ebf7c1881827a54227f3324c831ba65c9
}
