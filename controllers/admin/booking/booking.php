<?php

  authorize( (boolean)$_SESSION['user']['role'] === true , 403);

  $title = "All Booking";
    
  $config = require("../config.php");
  
  $db = new Database($config['database']);

  $bookings = $db->query("select b.id , a.name, a.email, r.room_type , r.price, b.status from bookings b, account a, rooms r where b.account_id = a.id and b.rooms_id =r.id;")->getall();

  require('../view/admin/booking.view.php');
  
?>
