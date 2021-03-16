<?php 
session_start(); 
require_once("class/bdd.php"); 
require_once("class/user.php"); 
$db = new Db;
$user = new User($db);

  if(isset($_POST['email']) && isset($_POST['password']) ){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $connectuser = $user->connectUser($email, $password);
    //var_dump($db); 
    echo 'connect';
  }
   
?>