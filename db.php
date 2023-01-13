<?php
$conn=mysqli_connect('localhost','root');
if($conn){
    echo "Connection has been successfully established";
}
else{
    echo "Connection failed";
}

mysqli_select_db($conn,'foidb');

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$msg=$_POST['message'];

$query="INSERT INTO querytable ('name', 'email', 'phone', 'msg') VALUES ('$name', '$email', '$phone', '$msg')";
mysqli_query($conn,$query);
?>