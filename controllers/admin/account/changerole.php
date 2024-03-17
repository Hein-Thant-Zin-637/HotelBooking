<?php


  $title = "All Account";
    
  $config = require("../config.php");
  
  $db = new Database($config['database']);

  $role = $_POST["role"] === "true" ? true : false;

  $db->query( " UPDATE `account` SET `role`= :role WHERE  id = :id", [
    'role' => $role,
    'id' => $_POST['id']
]);


   $accounts = $db->query("select id , name , email , phone , address , role from account;")->getall();


  require('../view/admin/allaccount.view.php');
  
?>