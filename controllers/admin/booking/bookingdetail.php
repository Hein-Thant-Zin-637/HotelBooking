<?php

  authorize( (boolean)$_SESSION['user']['role'] === true , 403);

  $title = "Booking Detail";

  $config = require("../config.php");
  
  $db = new Database($config['database']);

  $bookingid = $_GET['id'];


  $bookingdetail = $db->query("select a.id, a.name, a.email , r.room_type , r.price , b.check_in_date , b.check_out_date , b.booking_date , b.special_request , b.remark, b.status from bookings b, account a, rooms r where b.id = :bookingid and b.account_id = a.id and b.rooms_id =r.id;",[
      'bookingid' => $bookingid
  ])->FindOrFail();

  
  require('../view/admin/bookingdetail.view.php');
?>