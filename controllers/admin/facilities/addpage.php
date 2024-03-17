<?php

  authorize( (boolean)$_SESSION['user']['role'] === true , 403);

  $title = "All Faciliteis";

  require('../view/admin/facilities/add.view.php');
  
?>
