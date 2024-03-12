<?php
  $title = "About";
   $config = require("../config.php");
   $db = new Database($config['database']);
   
   $about = $db->query("select * from hotels where title = :title", [ 'title' => 'about'])->find();
   
  require('../view/about.view.php');
?>