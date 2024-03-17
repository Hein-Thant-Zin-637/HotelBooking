

<?php

authorize( (boolean)$_SESSION['user']['role'] === true , 403);

$title = "All Rooms";
  

$config = require('../config.php');

$db = new Database($config['database']);

$roomtype = test_input($_POST["type"]);

$adults = (int)test_input($_POST["adults"]);

$childs = (int)test_input($_POST["childs"]);

$bed = (int)test_input($_POST["bed"]);

$price = (int)test_input($_POST['price']);

$description = test_input($_POST["description"]);

$destination = uniqid().$_FILES['image']['name'];

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    
}

$errors = [];


if (strlen($roomtype) === 0) {
    $errors['title'] = 'Please provide a Title';
}

if (strlen($description) === 0) {
    $errors['description'] = 'Please provide some description';
}


if (!empty($errors)) {
    require('../view/admin/rooms/add.view.php');
    die();
}


move_uploaded_file($_FILES['image']['tmp_name'] , "Image/rooms/".$destination);

$db->query("INSERT INTO `rooms`( `image`, `room_type`, `max_adults`, `max_childs`, `no_of_bed`, `price`, `description`) VALUES ( :image , :type , :adults , :childs , :bed , :price , :description )", [
    'image' => "/Image/rooms/".$destination,
    'type' => $roomtype,
    'adults' => $adults,
    'childs' => $childs,
    'bed' => $bed,
    'price' => $price,
    'description' => $description,
]);


header('location: /allrooms');