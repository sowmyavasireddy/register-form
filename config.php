<?php
$conn = mysqli_connect('localhost','root','','regform');
if($conn)
{
    echo "connected";
}
else{
    echo "NOt connected";
}
?> 
