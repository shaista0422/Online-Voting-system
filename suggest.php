<?php
session_start();
include 'dbconnect.php';
$suggest = isset($_POST["suggest"]);
$user_id = $_SESSION["user_id"];

$sql = "INSERT INTO suggest(user_id,suggestion) VALUES ($user_id,'$suggest')";
if(mysqli_query($conn, $sql)){
echo "Thank You";
} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);
?>


