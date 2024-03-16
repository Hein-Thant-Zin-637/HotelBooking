
<?php

$title = "All Booking";
  
$user = $_SESSION['user'];

$config = require('../config.php');

$db = new Database($config['database']);


    $comment = test_input($_POST["comment"]);
    $status = test_input($_POST["status"]);
    $id = test_input($_POST["id"]);

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


$db->query("UPDATE `bookings` SET `status`= :status,`remark`= :remark WHERE id = :id", [
    'remark' => $comment,
    'status' => $status,
    'id' => $id
]);

$bookings = $db->query("select b.id , a.name, a.email, r.room_type , r.price, b.status from bookings b, account a, rooms r where b.account_id = a.id and b.rooms_id =r.id;")->getall();


require('../view/admin/booking.view.php');

