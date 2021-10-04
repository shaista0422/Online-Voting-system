<?php
session_start();
include 'dbconnect.php';
$party =  $_POST['party'];
$user_id = $_SESSION["user_id"];
$sql = "INSERT INTO vote_party(user_id,party_name) VALUES ($user_id,'$party')";
if(mysqli_query($conn, $sql)){
echo "<center><b><h3>Your Vote Is Submitted</h3></b></center>";
?>
<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" type="text/css" href="sug.css">
</head>
<script>
			function call()
			{		alert("Thank You"); 		}
			
</script>
<style>
body
	 {
		background-color: white; 
		color: black; 
		background-image:url("Ocean.jpg");
	 }
</style>
<body>
       <form action="MP.html">
	   
      <header>
	  
	    <img src="lion.png" style="width:60px;height:100px;">
		<img src="fl.jpg" style="width:1050px;height:100px;">
		 
	 

      <div class="main">
	  
      <center><label class="logo"> ONLINE VOTING SYSTEM</label></center>
	   
      </header>
	</div>

	<div class="sug">
	<p><center><b>Suggetion</b> </center></br><center>If you have any suggetion place write here..</center></p>
	<div class="tx">
	<center><textarea id="suggest" rows="6" cols="60" placeholder="write any suggestion!!!!" name="suggest" required></textarea></center>
	</div>
	<div class="bt">
	<center><button onclick="call()">OK</button></center>
	</div>
	
</div>

</body>
</html>
<?php
} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


?>



