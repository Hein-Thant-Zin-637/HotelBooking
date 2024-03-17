<?php

$title = "Contact";

$config = require('../config.php');

$db = new Database($config['database']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $location = test_input($_POST["location"]);
    $about = test_input($_POST["about"]);
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




if (strlen($email) === 0) {
    $errors['email'] = 'Please provide a email';
}

if (strlen($phone) === 0) {
    $errors['phone'] = 'Please provide a phone number';
}

if (strlen($location) === 0) {
    $errors['location'] = 'Please enter your hotels locaton';
}

if (strlen($about) === 0) {
    $errors['about'] = 'Please provide about your hotels';
}



if (!empty($errors)) {
    $title = 'Hotels';
    $hotels = $db->query("SELECT * FROM `hotels`")->getall();
    require('../view/admin/hotels.view.php');
    die();
}

$db->query("UPDATE hotels SET description = CASE title  WHEN 'email' THEN :email  WHEN 'phone' THEN :phone  WHEN 'location' THEN :location WHEN 'about' THEN :about ELSE description END WHERE title IN('email', 'phone','location','about'); ", [
    'email' => $email,
    'phone' => $phone,
    'location' => $location,
    'about' => $about
]);

$hotels = $db->query("SELECT * FROM `hotels`")->getall();

require('../view/admin/hotels.view.php');

