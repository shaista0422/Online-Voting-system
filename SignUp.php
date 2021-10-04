<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style src='https://kit.fontawesome.com/a076d05399.js'> 

 body
	 {	font-family:  Arial, Helvetica, sans-sarif;  
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

* { box-sizing: border-box; }
.input-container {
		display: -ms-flexbox;
		display: flex;
		width: 50%;
		margin-bottom: 15px;
		}
.icon {
	padding: 10px;
	background: dodgerblue;
	color: white;
	min-width: 50px;
	text-align: center;
        }
.input-field {
		width: 100%;
		padding: 10px;
		outline: none;
	    }
.input field:focus {
		border: 2px solid dodgerblue;
	           }
.btn {
	background-color: dodgerblue;
	color: white;
	padding: 15px 20px;
	border: none;
	cursor: pointer;
	width: 50%;
	opacity: 0.9;
        }
.btn:hover { 	opacity: 1;	}

</style>
</head>
</head>
<body>
<img src="lion.png" style="width:60px;height:100px;">
 <img src="fl.jpg" style="width:1038px;height:100px;"><br/>
 <header>
      <center><label class="logo">ONLINE VOTING SYSTEM</label></center>
      </header>
<center><form action="next.php">
<center> <b><h1>SIGNUP HERE</h1></center></b>
  <form style="max-width: 500px; margin:auto" action="OtpPage.php" method="post">

<center><div class="input-container">
<i class="fa fa-user icon" > </i>
<input class="input-field" type="text" placeholder="Full Name" name="fullname" required></center>
</div>

<center><div class="input-container">
<i class="fa fa-phone icon" > </i>
<input class="input-field" type="text" placeholder="Phone Number" name="phone" required></center>
</div>

<center><div class="input-container">
<i class="fa fa-id-card icon"> </i>
<input class="input-field" type="text" placeholder="Aadhar Number" name="aadhar" required></center>
</div>

<center><div class="input-container">
<i class="fa fa-id-card icon" > </i>
<input class="input-field" type="text" placeholder="Voter ID" name="id" required></center>
</div>

<center><div class="input-container">
<i class ="fa fa-envelope icon"> </i>
<input class="input-field" type="text" placeholder="Email" name="email" required></center>
</div>

<center><div class="input-container">
<i class="fa fa-user icon" > </i>
<input class="input-field" type="text" placeholder="UserName" name="usrnm" required></center>
</div

<center><div class="input-container">
<i class ="fa fa-key icon"> </i>
<input class="input-field" type="password" placeholder="Password" name="psw" required></center>
</div>

<center><button type="submit" class="btn" >     SUBMIT        </button></center>
</form></center>
</body>
</html>
<!--?php
session_start();
include 'dbconnect.php';
$fullname =  isset($_POST['fullname']);
$phoneNo =  isset($_POST['phone']);
$aadharNo =  isset($_POST['aadhar']);
$voterId =  isset($_POST['id']);
$Email =  isset($_POST['email']);
$user_id = isset($_SESSION["usrnm"]);
$password =  isset($_POST['psw']);


$sql = "INSERT INTO login ('fullname','phone_no','aadhar_no','voter_id','email','username','password') VALUES ('$fullname','$phoneNo','$aadharNo','$voterId','$Email','$user_id','$password')";
if(mysqli_query($conn, $sql))
{
	echo "Successfully Loged In ";

} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


?-->