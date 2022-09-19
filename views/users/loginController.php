<!-- <?php

// if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
//     echo 'Only Post Request Allowed Here';
//     die();
// }

// include_once './../../vendor/autoload.php';

// use Project\Controllers\User;

// $Users = new User();

// $Users->matching($_POST);
// print_r($_POST);
// die();
//header('Location: ./../products/index.php?success=Successfull Login!!');




// tanvir vi..............................................


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo 'Only Post Request Allowed Here';
    die();
}

include_once './../../vendor/autoload.php';

use Project\Controllers\User;

$Users = new User();
// $Users->matching2($_POST);
// header('Location: ./../products/index.php?success=Successfull Login!!');
$name=$_POST['email'];
$password=$_POST['password'];

$Users->matching($name,$password);
 
