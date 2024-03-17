<?php

  authorize( (boolean)$_SESSION['user']['role'] === true , 403);

  $title = "All Faciliteis";
    
  $config = require("../config.php");
  
  $db = new Database($config['database']);

  $db->query( "DELETE FROM `facilities` WHERE id = :id", [
    'id' => $_POST['id']
]);

  $facilities = $db->query("select * from facilities")->getall();

  require('../view/admin/facilities/index.view.php');


?>