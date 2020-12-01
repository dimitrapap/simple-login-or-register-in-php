<?php

session_start();


$con = mysqli_connect('localhost','root','test123');

mysqli_select_db($con, 'registration');

$name = test_input($_POST['user']);
$pass = test_input($_POST['password']);
$email = test_input($_POST['email']);
$number = test_input($_POST['number']);

function test_input($data){
    $data = htmlspecialchars($data);
    return $data;
  }

$s = "select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Username Already Taken";
}else{
    $reg="insert into usertable(name , password , email , telephone) values ('$name', '$pass','$email','$number')";
    mysqli_query($con, $reg);
    echo" Registration Successful";
    header("location: login.php");
}
?>