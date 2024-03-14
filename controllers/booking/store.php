

<?php

$title = "Booking";
  
$user = $_SESSION['user'];

$config = require('../config.php');

$db = new Database($config['database']);

$today=date("Y-m-d");

$bookingid = uniqid();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $address = test_input($_POST["address"]);
    $checkin = test_input($_POST["checkin"]);
    $checkout = test_input($_POST["checkout"]);
    $request = test_input($_POST["request"]);
    $roomid = test_input($_POST["room_id"]);
  }

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


$errors = [];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Pleade provide a valid email';
}

if (!preg_match('/^[0-9]{10}+$/',$phone)) {
    $errors['phone'] = "Pleade provide a valid phoe number";
  } 

if (strlen($name) === 0) {
    $errors['name'] = 'Please provide a name';
}

if (strlen($email) === 0) {
    $errors['email'] = 'Please provide a email';
}

if (strlen($phone) === 0) {
    $errors['phone'] = 'Please provide a phone number';
}

if (strlen($address) === 0) {
    $errors['address'] = 'Please enter your Address';
}

if($checkin == null){
    $errors['checkin'] = 'Please select a check in date';
}

if($checkout == null){
    $errors['checkout'] = 'Please select a check out date';
}
if (strlen($request) === 0) {
    $errors['request'] = 'Please enter your request message';
}


if (!empty($errors)) {
    require('../view/booking.view.php');
    die();
}


$db->query("INSERT INTO `bookings`( `id`, `account_id`, `rooms_id`, `check_in_date`, `check_out_date`, `booking_date`, `special_request`, `status`) VALUES ( :id, :account_id, :rooms_id, :check_in_date, :check_out_date, :booking_date, :special_request, :status )", [
    'id' => $bookingid,
    'account_id' => $user['id'],
    'rooms_id' => (int)$roomid,
    'check_in_date' => $checkin,
    'check_out_date' => $checkout,
    'booking_date' => $today,
    'special_request' => $request,
    'status' => 'Pending',
]);



header('location: /');