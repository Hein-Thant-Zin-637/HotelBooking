<?php

  authorize( (boolean)$_SESSION['user']['role'] === true , 403);

  $title = "All Rooms";
    
  $config = require("../config.php");
  
  $db = new Database($config['database']);

  $db->query( "DELETE FROM `rooms` WHERE id = :id", [
    'id' => $_POST['id']
]);

  $rooms = $db->query("select * from rooms")->getall();

  require('../view/admin/rooms/index.view.php');


?>