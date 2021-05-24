<?php
session_start();
$conn = new mysqli('localhost','root','','symphony');
if(mysqli_connect_errno()){
    die("Failed to connect with MySQL: ".mysqli_connect_error());
}


    $username=$_POST['fn'];
    $password=$_POST['pass'];

    $sql="select * from signup where fn='$username' AND pass='$password' ";

    $result=mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        $_SESSION['login_user']=$username;
        header("Location:home1.html");
    }
    else{
        echo "<h1>Password mismatch!!</h1>";
        echo "<p>If not signed up kindly sign up and enter your correct user name and password</p>";
    }


?>
