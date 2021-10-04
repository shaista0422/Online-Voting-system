
<html>
<body onload="login.php">
<?php
session_start();
include 'dbconnect.php';
$fullname =  isset($_POST['fullname']);
$phoneNo =  isset($_POST['phone']);
$aadharNo =  isset($_POST['aadhar']);
$voterId =  isset($_POST['id']);
$Email =  isset($_POST['email']);
$user_id = isset($_SESSION["usrnm"]);
$password =  isset($_POST['psw']);


$sql = "INSERT INTO login ('fullname','phone_no','aadhar_no','voter_id','email','username','password') 
VALUES ('$fullname','$phoneNo','$aadharNo','$voterId','$Email','$user_id','$password')";
if(mysqli_query($conn, $sql))
{
	
echo "Successfully Loged In ";

} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>
</body>
</html>