<?php

  authorize( (boolean)$_SESSION['user']['role'] === true , 403);

  $title = "Update Faciliteis";
    
  $config = require("../config.php");
  
  $db = new Database($config['database']);

  $facilitie = $db->query("select * from facilities where id = :id",[
    'id' => $_GET['id']
  ])->find();

  require('../view/admin/facilities/update.view.php');
  
?>
