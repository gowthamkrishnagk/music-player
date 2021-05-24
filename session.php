<?php
$conn = new mysqli('localhost','root','','symphony');
if(mysqli_connect_errno()){
    die("Failed to connect with MySQL: ".mysqli_connect_error());
}
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($conn,"select fn,mem_id from signup where fn='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$loggedin_session=$row['fn'];
$loggedin_id=$row['mem_id'];
if(!isset($loggedin_session) || $loggedin_session==NULL) {
 echo "Go back";
//  header("Location: index.html");
}
?>
