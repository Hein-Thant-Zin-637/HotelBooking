<?php

  authorize( (boolean)$_SESSION['user']['role'] === true , 403);

  $title = "Hotels";
    
  $config = require("../config.php");
  
  $db = new Database($config['database']);

  $hotels = $db->query("SELECT * FROM `hotels`")->getall();

  require('../view/admin/hotels.view.php');
  
?>
