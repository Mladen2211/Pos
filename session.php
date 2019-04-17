<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "id4242778_root", "dinkele20");
// Selecting Database
$db = mysqli_select_db($connection, "id4242778_pos");
session_start();// Starting Session
// Storing Session
if(!isset($_SESSION['login_user'])){
    header('Location: index.php');
}
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection, "select username from user where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
//header('Location: index.php'); // Redirecting To Home Page
}
?>
