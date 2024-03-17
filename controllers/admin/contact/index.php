<?php

  authorize( (boolean)$_SESSION['user']['role'] === true , 403);

  $title = "Contact";
    
  $config = require("../config.php");
  
  $db = new Database($config['database']);

  $contact = $db->query("SELECT * FROM `contact` WHERE 1")->getall();

  require('../view/admin/contact.view.php');
  
?>
