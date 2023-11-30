<?php
// session_start();
// $_SESSION['x']= 20;


// session_start();
// $name = $_POST['name'];
// $password = $_POST['password'];


// if($name == 'test' && $password == '123'){
//     $_SESSION['loginnew'] = true;
// }

// if(isset($_POST['name']) && isset($_POST['password'])){
//     $name = $_POST['name'];
//     $password = $_POST['password'];
//     if($name == 'test' && $password == '123'){
//         $_SESSION['loginnew'] = true;
//     }
// }



// first method
$name = $_POST['name'];
$password = $_POST['password'];
$connect = mysqli_connect("localhost","root","","project");
$sql = "SELECT * FROM `user` WHERE `name` = '$name' AND `password` = '$password'";
$result  = mysqli_query($connect,$sql);
setcookie('cookiename', 'text', time() + 60*60*24, '/');

if ($result && mysqli_num_rows($result) > 0) {
    echo "data matched";
}else{
    echo "data didn't match";
}

// second method
// $name = $_POST['name'];
// $password = $_POST['password'];
// $connect = mysqli_connect('localhost','root','','project');
// $sql = "SELECT * FROM `user` WHERE `name` = '$name' AND `password` = '$password'";
// $query = mysqli_query($connect,$sql);
// $row = mysqli_fetch_assoc($query);
// if($row){
//     $_SESSION['loginnew'] = true;
//     header('location : home.php');
// }else{
//     header('location : index.html');
// }


?>



