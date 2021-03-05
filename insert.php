<?php
echo "hello";
$conn = new mysqli('localhost', 'root', '', 'food_task');
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
echo $name;
$sql="INSERT INTO `user` (`name`, `email`,`password`,`role`) VALUES ('$name', '$email','$password','Restaurant')";
if ($conn->query($sql) === TRUE) {
    echo "data inserted";
}
else 
{
    echo "failed";
}
?>