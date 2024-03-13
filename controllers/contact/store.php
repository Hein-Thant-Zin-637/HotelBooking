<?php

$title = "Contact";

$config = require('../config.php');

$db = new Database($config['database']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $message = test_input($_POST["message"]);
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

if (strlen($message) === 0) {
    $errors['message'] = 'Please enter your message';
}



if (!empty($errors)) {
    $title = 'Contact';
    require('../view/contact.view.php');
    die();
}

$db->query("INSERT INTO `contact`(`name`, `email`, `phone`, `message`) VALUES ( :name , :email , :phone , :message)", [
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'message' => $message
]);

header('location: /contact');