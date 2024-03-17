<?php


  $title = "Contact";
    
  $config = require("../config.php");
  
  $db = new Database($config['database']);

  $db->query( "DELETE FROM `contact` WHERE id = :id", [
    'id' => $_POST['id']
]);


$contact = $db->query("SELECT * FROM `contact` WHERE 1")->getall();


require('../view/admin/contact.view.php');
  
?>