<?php

  authorize( (boolean)$_SESSION['user']['role'] === true , 403);

  $title = "Update Rooms";
    
  $config = require("../config.php");
  
  $db = new Database($config['database']);

  $room = $db->query("select * from rooms where id = :id",[
    'id' => $_GET['id']
  ])->find();


  require('../view/admin/rooms/update.view.php');
  
?>
