<?php
include 'db.php';

$username = (htmlentities($_POST['username']));
$password = (htmlentities(md5($_POST['password'])));

$query    = "SELECT * FROM id6021493_user WHERE username = '$username' AND password = '$password'";
$runquery = $connect->query($query);

if($runquery->num_rows > 0){
 session_start();
 $_SESSION['username'] = $username;
 header("Location: index.php");
} else {
 echo '<h1>Username atau Kata Sandi Salah!</h1>';
}

?> 
