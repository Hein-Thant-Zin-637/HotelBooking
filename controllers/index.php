<?php
  $title = "Home";

  $config = require("../config.php");
  
  $db = new Database($config['database']);

  $facilities = $db->query("select * from facilities")->getall();
  
  $rooms = $db->query("select * from rooms")->getall();

  require('../view/index.view.php');
?>