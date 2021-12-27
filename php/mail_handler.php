
<?php


$to = "abdelrhmanfarghaly1998@gmail.com"; // this is your Email address
$from = $_POST['email']; // this is the sender's Email address
$name = $_POST['name'];    
$subject = $_POST['subject'];    
$message = $_POST['message'];
mail($to,$subject,$message);
?>