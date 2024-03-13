<?php 

$title = 'Login';

$config = require('../config.php');

$db = new Database($config['database']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
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


$account = $db->query("SELECT * FROM `account` WHERE email = :email ", [
                'email' => $email,
            ])->find();

        
if(!$account){
    $errors['email'] = "This email don't exist" ;
}else{
    if( password_verify( $password , $account['password'])){
        if($account['role']){
            $_SESSION['user'] = [
                'id' => $account['id'],
                'name' => $account['name'],
                'email' => $account['email'],
                'phone' => $account['phone'],
                'address' => $account['address'],
                'role' => $account['role'],
            ];
            header('location: /admin');
        }else{
            $_SESSION['user'] = [
                'id' => $account['id'],
                'name' => $account['name'],
                'email' => $account['email'],
                'phone' => $account['phone'],
                'address' => $account['address'],
                'role' => $account['role'],
            ];
            header('location: /');
        }
    }else{
        $errors['password'] = 'Password is not incorrect';
    }
    
}


if (strlen($email) === 0) {
    $errors['email'] = 'Please provide a email';
}

if (strlen($password) === 0) {
    $errors['password'] = 'Please provide a password';
}

if (!empty($errors)) {
    $title = 'Login';
    require('../view/Login/index.view.php');
    die();
}

?>