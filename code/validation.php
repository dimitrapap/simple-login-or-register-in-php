<?php

session_start();


$con = mysqli_connect('localhost','root','test123');

mysqli_select_db($con, 'registration');

$name = test_input($_POST['user']);
$pass = test_input($_POST['password']);

function test_input($data){
  $data = htmlspecialchars($data);
  return $data;
}

$s = "select * from usertable where name = '$name' and password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
  $_SESSION['username'] = $name;
  header("location: home.php");
}else{
  echo" Username or password is invalid";
}
?>