<?php


$config = require('config.php');

$db = new Database($config['database']);

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Pleade provide a valid email';
}


if (strlen($name) === 0) {
    $errors['name'] = 'Please provide a name';
}

if (strlen($email) === 0) {
    $errors['email'] = 'Please provide a email';
}

if (strlen($password) === 0) {
    $errors['password'] = 'Please provide a password';
}


try {
    $db->query('insert into user(name, email, password) values (:name, :email, :password)', [
        'name' => $name,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);
    
    $_SESSION['user'] = [
        'name' => $name,
        'email' => $email
    ];
    header('location: /');
} catch (Exception $e) {
  
    $errors['email'] = 'Account with the email already exists';

}

if (!empty($errors)) {
    $title = 'Register';
    require('view/registration/create.view.php');
    die();
}