<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require '../model/user.php'; 

$user = new User();
$users = $user->db->select("users");

?>

<?php require('../../views/adminAllUsers.php') ?>