<?php

$title = "Update Profile";

$config = require('../config.php');

$db = new Database($config['database']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $address = test_input($_POST["address"]);
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



if (!empty($errors)) {
    require('../view/profile.view.php');
    die();
}


$db->query("UPDATE `account` SET `name` = :name, `email` = :email ,`phone` = :phone , `address` = :address  WHERE `id` = :id", [
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'address' => $address,
    'id' => $_SESSION['user']['id']
]);

$_SESSION['user'] = [
    ...$_SESSION['user'],
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'address' => $address,
];


header('location: /');