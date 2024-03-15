<?php
  $title = "Booking";
    
  $config = require("../config.php");
  
  $db = new Database($config['database']);


  $status = $db->query("SELECT status, COUNT(*) AS count FROM bookings GROUP BY status;")->getall();

  $account = $db->query("SELECT COUNT(*) AS count FROM account;")->find();

  require('../view/admin/index.view.php');
  
?>
