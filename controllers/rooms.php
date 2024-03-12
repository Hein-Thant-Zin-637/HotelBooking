<?php
  $title = "Rooms";

  $config = require("../config.php");
  
  $db = new Database($config['database']);

  $rooms = $db->query("select * from rooms")->getall();

  require('../view/rooms.view.php');
?>