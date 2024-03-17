<?php

  authorize( (boolean)$_SESSION['user']['role'] === true , 403);

  $title = "All Rooms";

  require('../view/admin/rooms/add.view.php');
  
?>
