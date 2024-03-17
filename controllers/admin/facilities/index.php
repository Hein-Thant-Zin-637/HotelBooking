<?php
  $title = "All Faciliteis";
    
  $config = require("../config.php");
  
  $db = new Database($config['database']);

  $facilities = $db->query("select * from facilities")->getall();

  require('../view/admin/facilities/index.view.php');
  
?>
