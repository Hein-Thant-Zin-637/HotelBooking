

<?php

authorize( (boolean)$_SESSION['user']['role'] === true , 403);


$title = "All Facilities";
  

$config = require('../config.php');

$db = new Database($config['database']);

$title = test_input($_POST["title"]);

$description = test_input($_POST["description"]);

$destination = uniqid().$_FILES['image']['name'];

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$errors = [];



if (strlen($title) === 0) {
    $errors['title'] = 'Please provide a Title';
}

if (strlen($description) === 0) {
    $errors['description'] = 'Please provide some description';
}


if (!empty($errors)) {
    require('../view/admin/facilities/add.view.php');
    die();
}


move_uploaded_file($_FILES['image']['tmp_name'] , "Image/facilities/".$destination);

$db->query("UPDATE `facilities` SET `title`= :title,`description`= :description,`image`= :image WHERE  id= :id", [
    'title' => $title,
    'description' => $description,
    'image' => "/Image/facilities/".$destination,
    'id' => $_POST['id']
]);


header('location: /allfacilities');