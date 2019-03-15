<?php 
session_start();
require_once '../model/User.php';
if (isset($_GET['selectValue'])) {
    $result = array();
    //var_dump("gghgh");
    //hwo dh el id
  //$_GET['selectValue']
  
  //var_dump($_GET['name']);
//   echo $_GET['selectValue'];
  $userId =$_GET['selectValue'];
 // echo ($_GET['selectValue']);
  $user = new User();
  $userResult = $user->selectById("users", '*', "id=7")['resultset'];
  //var_dump($user);
 $result['name']=$userResult ['name'];
  $result['id']=$userId;
  //var_dump($result);
  echo json_encode($result);
  
}




?>