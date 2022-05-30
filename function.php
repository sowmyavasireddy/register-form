<?php
require_once 'config.php';
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$id = $_POST['id'];
$msg = $_POST['msg'];

$insert = "insert into users values('$username','$password','$email','$id','$msg')";
$run_query = mysqli_query($conn,$insert);
if($run_query)
{
    echo 'registered successfully';
}
else
{
    echo 'not success';
}

?>
