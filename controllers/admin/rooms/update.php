

<?php

authorize( (boolean)$_SESSION['user']['role'] === true , 403);

$title = "All Facilities";
  
$config = require('../config.php');

$db = new Database($config['database']);

$roomtype = test_input($_POST["type"]);

$adults = (int)test_input($_POST["adults"]);

$childs = (int)test_input($_POST["childs"]);

$bed = (int)test_input($_POST["bed"]);

$price = (int)test_input($_POST['price']);

$description = test_input($_POST["description"]);

$destination = (boolean)$_FILES['image']['name'] ? uniqid().$_FILES['image']['name'] : $_POST['orgimage'];

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
    require('../view/admin/rooms/add.view.php');
    die();
}

if((boolean)$_FILES['image']['name']){
    move_uploaded_file($_FILES['image']['tmp_name'] , "Image/rooms/".$destination);
}

$db->query("UPDATE `rooms` SET `image`= :image,`room_type`= :type,`max_adults`= :adults,`max_childs`= :childs,`no_of_bed`= :bed,`price`= :price,`description`= :description WHERE  id= :id", [
    'image' =>  (boolean)$_FILES['image']['name'] ? "/Image/rooms/".$destination : $destination,
    'type' => $roomtype,
    'adults' => $adults,
    'childs' => $childs,
    'bed' => $bed,
    'price' => $price,
    'description' => $description,
    'id' => $_POST['id']
]);


header('location: /allrooms');