<?php

$conn = mysqli_connect("localhost:3308", "root", "", "electronics_mart");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject=$_REQUEST['subject'];
$message = $_REQUEST['message'];


$sql = "INSERT INTO contact(name,email,subject,message) VALUES('$name',
    '$email','$subject','$message')";

if(mysqli_query($conn, $sql)){
    echo '<script>alert("Message sent successfully !!!!")</script>';


} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
