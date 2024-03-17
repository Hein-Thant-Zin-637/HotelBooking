<?php
  $title = "All Account";
    
  $config = require("../config.php");
  
  $db = new Database($config['database']);

  $accounts = $db->query("select id , name , email , phone , address , role from account;")->getall();

  require('../view/admin/allaccount.view.php');
  
?>
