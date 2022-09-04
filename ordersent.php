<?php
$conn = mysqli_connect("localhost:3308", "root", "", "electronics_mart");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
$pid = $_REQUEST['pid'];
$username = $_REQUEST['username'];

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$address=$_REQUEST['address'];


$sql = "INSERT INTO orders(pid,username,name1,email,address) VALUES('$pid','$username','$name','$email','$address')";

if(mysqli_query($conn, $sql)){
    header("Location: orderdone.html");


} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
