<?php 
 return [
    [
        'uri' => '/',
        'method' => 'GET',
        'controller' => '../controllers/index.php',
        'middleware' => null
    ],

    [
        'uri' => '/about',
        'method' => 'GET',
        'controller' => '../controllers/about.php',
        'middleware' => null
    ],

    [
        'uri' => '/facilities',
        'method' => 'GET',
        'controller' => '../controllers/facilities.php',
        'middleware' => null
    ],

    [
        'uri' => '/rooms',
        'method' => 'GET',
        'controller' => '../controllers/rooms.php',
        'middleware' => null
    ],
    
    [
        'uri' => '/contact',
        'method' => 'GET',
        'controller' => '../controllers/contact.php',
        'middleware' => null
    ],

    [
        'uri' => '/contact',
        'method' => 'POST',
        'controller' => '../controllers/contactstore.php',
        'middleware' => null
    ],

    [
        'uri' => '/login',
        'method' => 'GET',
        'controller' => '../controllers/Login/index.php',
        'middleware' => null
    ],

    [
        'uri' => '/register',
        'method' => 'GET',
        'controller' => '../controllers/Login/create.php',
        'middleware' => null
    ],

    [
        'uri' => '/profile',
        'method' => 'GET',
        'controller' => '../controllers/profile.php',
        'middleware' => null
    ],

    [
        'uri' => '/booking',
        'method' => 'GET',
        'controller' => '../controllers/booking.php',
        'middleware' => null
    ],

];

?>