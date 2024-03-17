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
        'controller' => '../controllers/contact/contact.php',
        'middleware' => null
    ],

    [
        'uri' => '/contact',
        'method' => 'POST',
        'controller' => '../controllers/contact/store.php',
        'middleware' => null
    ],

    [
        'uri' => '/login',
        'method' => 'GET',
        'controller' => '../controllers/Login/index.php',
        'middleware' => 'guest'
    ],

    [
        'uri' => '/login',
        'method' => 'POST',
        'controller' => '../controllers/Login/check.php',
        'middleware' => 'guest'
    ],

    [
        'uri' => '/register',
        'method' => 'GET',
        'controller' => '../controllers/Login/register.php',
        'middleware' => 'guest'
    ],

    [
        'uri' => '/register',
        'method' => 'POST',
        'controller' => '../controllers/Login/store.php',
        'middleware' => 'guest'
    ],

    [
        'uri' => '/admin',
        'method' => 'GET',
        'controller' => '../controllers/admin/index.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/profile',
        'method' => 'GET',
        'controller' => '../controllers/profile/profile.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/profile',
        'method' => 'PATCH',
        'controller' => '../controllers/profile/store.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/booking',
        'method' => 'GET',
        'controller' => '../controllers/booking/booking.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/booking',
        'method' => 'POST',
        'controller' => '../controllers/booking/store.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/logout',
        'method' => 'GET',
        'controller' => '../controllers/Login/logout.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/mybooking',
        'method' => 'GET',
        'controller' => '../controllers/mybooking/index.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/bookingdetail',
        'method' => 'GET',
        'controller' => '../controllers/mybooking/detail.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/allbooking',
        'method' => 'PATCH',
        'controller' => '../controllers/admin/booking/store.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/allbooking',
        'method' => 'GET',
        'controller' => '../controllers/admin/booking/booking.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/adminbookingdetail',
        'method' => 'GET',
        'controller' => '../controllers/admin/booking/bookingdetail.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/allaccount',
        'method' => 'GET',
        'controller' => '../controllers/admin/account/index.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/allaccount',
        'method' => 'PATCH',
        'controller' => '../controllers/admin/account/changerole.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/allaccount',
        'method' => 'DELETE',
        'controller' => '../controllers/admin/account/delete.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/hotels',
        'method' => 'GET',
        'controller' => '../controllers/admin/hotels/index.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/hotels',
        'method' => 'UPDATE',
        'controller' => '../controllers/admin/hotels/update.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/allcontact',
        'method' => 'GET',
        'controller' => '../controllers/admin/contact/index.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/allcontact',
        'method' => 'DELETE',
        'controller' => '../controllers/admin/contact/delete.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/allfacilities',
        'method' => 'GET',
        'controller' => '../controllers/admin/facilities/index.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/allfacilities',
        'method' => 'DELETE',
        'controller' => '../controllers/admin/facilities/delete.php',
        'middleware' => 'auth'
    ],


    [
        'uri' => '/addfacilities',
        'method' => 'GET',
        'controller' => '../controllers/admin/facilities/addpage.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/addfacilities',
        'method' => 'POST',
        'controller' => '../controllers/admin/facilities/store.php',
        'middleware' => 'auth'
    ],
    
    [
        'uri' => '/updatefacilities',
        'method' => 'GET',
        'controller' => '../controllers/admin/facilities/updatepage.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/updatefacilities',
        'method' => 'UPDATE',
        'controller' => '../controllers/admin/facilities/update.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/allrooms',
        'method' => 'GET',
        'controller' => '../controllers/admin/rooms/index.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/allrooms',
        'method' => 'DELETE',
        'controller' => '../controllers/admin/rooms/delete.php',
        'middleware' => 'auth'
    ],


    [
        'uri' => '/addrooms',
        'method' => 'GET',
        'controller' => '../controllers/admin/rooms/addpage.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/addrooms',
        'method' => 'POST',
        'controller' => '../controllers/admin/rooms/store.php',
        'middleware' => 'auth'
    ],
    
    [
        'uri' => '/updaterooms',
        'method' => 'GET',
        'controller' => '../controllers/admin/rooms/updatepage.php',
        'middleware' => 'auth'
    ],

    [
        'uri' => '/updaterooms',
        'method' => 'UPDATE',
        'controller' => '../controllers/admin/rooms/update.php',
        'middleware' => 'auth'
    ],

];

?>