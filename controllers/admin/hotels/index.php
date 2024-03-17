<?php
  $title = "Hotels";
    
  $config = require("../config.php");
  
  $db = new Database($config['database']);

  $hotels = $db->query("SELECT * FROM `hotels`")->getall();

  require('../view/admin/hotels.view.php');
  
?>
