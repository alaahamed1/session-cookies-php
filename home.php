<?php
// session_start();
// echo $_SESSION['x'];


// session_start();
// if(!isset($_SESSION['loginnew'])){
//     header('location : index.php');
// }

// echo 'hi user';




if(!isset($_COOKIE['cookiename'])){
    header('location: index.html');
    exit();
}
echo 'hi user';
?>