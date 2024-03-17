<?php

  authorize( (boolean)$_SESSION['user']['role'] === true , 403);

  $title = "All Account";
    
  $config = require("../config.php");
  
  $db = new Database($config['database']);

  $db->query( "DELETE FROM `account` WHERE id = :id", [
    'id' => $_POST['id']
]);


   $accounts = $db->query("select id , name , email , phone , address , role from account;")->getall();


  require('../view/admin/allaccount.view.php');
  
?>