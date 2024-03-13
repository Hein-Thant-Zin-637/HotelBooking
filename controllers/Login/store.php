<?php 

$title = 'Register';

$config = require('../config.php');

$db = new Database($config['database']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    $conpassword = test_input($_POST["conpassword"]);
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

if( $password !== $conpassword ){
    $errors['password'] ='Password and confirm password are not match';
    $errors['conpassword'] ='Password and confirm password are not match';
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

if (strlen($conpassword) === 0) {
    $errors['conpassword'] = 'Please provide a Confirm password';
}

$user = $db->query('select * from account where email=:email', [
    'email' => $email
])->find();

if ($user) {
    $errors['email'] = 'Account with this email already exists';
}

if (!empty($errors)) {
    $title = 'Contact';
    require('../view/Login/register.view.php');
    die();
}

$db->query("INSERT INTO `account`( `name`,`email`, `password`) VALUES ( :name , :email , :password)" , [
    'name' => $name,
    'email' => $email,
    'password' => password_hash($password, PASSWORD_BCRYPT)
]);

header('location: /login');

?>