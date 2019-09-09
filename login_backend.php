<?php
session_start();
$connect=mysqli_connect('localhost','root','','binaya_inventory');

if (isset($_POST['btnlog'])) {
    $user = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from login where username ='$user' and password='$password'";
    $result = mysqli_query($connect, $query); 
    if ($result) {
        $value = mysqli_fetch_assoc($result);
        if ($value > 1) {
            $_SESSION['username'] = $user;
            $_SESSION['password'] = $password;
            header('location:index.php');
        } else {
            $_SESSION['msg'] = "invalid username or password";
            header('location:login.php');
        }
    } else {
        $_SESSION['msg'] = "no data found with this user";
        header('location:login.php');
    }
} else {
    $_SESSION['msg'] = "something went wrong";
    header('location:login.php');
}
    