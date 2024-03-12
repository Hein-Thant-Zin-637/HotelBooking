<?php
  $title = "Facilities";

  $config = require("../config.php");
  
  $db = new Database($config['database']);

  $facilities = $db->query("select * from facilities")->getall();
  
  require('../view/facilities.view.php');
?>