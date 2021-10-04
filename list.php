<?php
session_start();
include 'dbconnect.php';
$country = $_POST['country'];
$state =  $_POST['state'];
$dist =  $_POST['district'];
$user_id = $_SESSION["user_id"];

$sql = "INSERT INTO address_details(user_id,country,state,district) VALUES ($user_id,'$country','$state','$dist')";
if(mysqli_query($conn, $sql)){
	
?>
	
<!DOCTYPE html>
<html>
<head>
     <!--link rel="stylesheet" type="text/css" href="list.css"--> 
<style>
	 body
	 {
		background-color: white; 
		color: black; 
		background-image:url("Ocean.jpg");
	 }
	 
	 .logo {
	background-color:#00008b;
	color:#fff;
	font-size:40px;
	line-height:50px;
	padding:0 80px;
	font-weight:bold;
	font-family:Algerian;
	}
select{
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	width:50%;
	height:5%;
	float:left;
	color:#000;
	margin:1px;
}

button{
	position:absolute;
	top:70%;
	left:50%;
	transform:translate(-50%,-50%);
	width:50%;
	height:5%;
	float:left;
	color:#000;
	margin:1px;
}
</style>
</head>
<body>
	 <form action="sug.php" method="post">
	 
	 <img src="lion.png" style="width:60px;height:100px;">
	 <img src="fl.jpg" style="width:1050px;height:100px;">
		
      <header>
      <center><label class="logo">ONLINE VOTING SYSTEM</label></center>
      </header>
	 
    <select name="party" required> 
    <option value="opt">Select Your Party To Vote</option>   
	<option value="bjp">BJP(Bharatiya Janata Party)</option>
	<option value="aap">Aam Aadmi Party</option>
	<option value="cong">Congress</option>
	<option value="shiv">Shivsena</option>
	<option value="clock">Rashtrawadi Congress party</option>
	</select>
	<button type="submit" name="btn">VOTE</button> 
	</form>
	<!--center><input type="radio" name="bjp" value="bjp">Bharatiya Janata Party</input>
	<input type="radio" name="party" value="aap">Aam Admi Party</input>
	<input type="radio" name="party" value="cong">Congress</input>
	<input type="radio" name="party" value="shiv">Shivsena</input>
	<input type="radio" name="party" value="clock">Rashtrvadi Congress</input></center-->
	 
</body>
</html>
	<?php
	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


?>



