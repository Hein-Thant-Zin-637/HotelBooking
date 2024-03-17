<?php

  authorize( (boolean)$_SESSION['user']['role'] === true , 403);

  $title = "All Rooms";
    
  $config = require("../config.php");
  
  $db = new Database($config['database']);

  $rooms = $db->query("select * from rooms")->getall();

  require('../view/admin/rooms/index.view.php');
  
?>
