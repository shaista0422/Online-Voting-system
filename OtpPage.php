
<?php
$name =  $_POST['usrnm'];
$pass =  $_POST['psw'];

include 'dbconnect.php';

$sql = "SELECT * FROM login WHERE username = '$name' and password = '$pass'";
    $result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
       // echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
		echo "<h2><center>Welcome  ".$name."</center></h2>";
		session_start();
	$_SESSION["user_id"] = $row["id"];
		?>
		<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://kit.fontawesome.com/a076d05399.js">
<!--<marquee width="100%" direction="left" heigth="100px"> COME AND VOTE </marquee>-->
<style> 
body
	 {
		font-family:  Arial, Helvetica, sans-sarif;  
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
		position:  right center;
		width: 100%;
		margin-bottom: 15px;
		}
.icon {
	padding: 10px;
	background: dodgerblue;
	position:  right center;
	color: white;
	min-width: 50px;
	text-align: center;
        }
.input-field {

		width: 100%;
		padding: 10px;
		position:  right center;
		outline: none;
	    }
.input field:focus {
		border: 2px solid dodgerblue;
	           }
.btn {
	background-color: dodgerblue;
	color: white;
	padding: 15px 20px;
	position:  right center;
	border: none;
	cursor: pointer;
	width: 100%;
	opacity: 0.9;
	margin: 3%;
        }
.btn:hover { 	opacity: 1;	}

.btn1 {
	background-color: dodgerblue;
	color: white;
	padding: 15px 20px;
	position:  right center;
	border: none;
	cursor: pointer;
	width: 40%;
	opacity: 0.9;
	margin: 3%;
        }
.btn1:hover { 	opacity: 1;	}
label {
background-color:#00008b;
font-size:40px;
line-height:100px;
padding:0 460px;
font-weight:bold;
font-family:Algerian;
color:#ffff;
}



</style>

<script>
	var stateObject = {
"India": { "Delhi": ["new Delhi", "North Delhi"],
"Kerala": ["Thiruvananthapuram", "Palakkad"],
"Goa": ["North Goa", "South Goa"],
},
"Australia": {
"South Australia": ["Dunstan", "Mitchell"],
"Victoria": ["Altona", "Euroa"]
}, "Canada": {
"Alberta": ["Acadia", "Bighorn"],
"Columbia": ["Washington", ""]
},
}
window.onload = function () {
var countySel = document.getElementById("countySel"),
stateSel = document.getElementById("stateSel"),
districtSel = document.getElementById("districtSel");
for (var country in stateObject) {
countySel.options[countySel.options.length] = new Option(country, country);
}
countySel.onchange = function () {
stateSel.length = 1; // remove all options bar first
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done
for (var state in stateObject[this.value]) {
stateSel.options[stateSel.options.length] = new Option(state, state);
}
}
countySel.onchange(); // reset in case page is reloaded
stateSel.onchange = function () {
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done
var district = stateObject[countySel.value][this.value];
for (var i = 0; i < district.length; i++) {
districtSel.options[districtSel.options.length] = new Option(district[i], district[i]);
}
}
}
</script>
</head>
<body>
<header>
	  
	    <img src="lion.png" style="width:60px;height:100px;">
		<img src="fl.jpg" style="width:1000px;height:100px;">
		 
	 

      <div class="main">
	  
      <center><label class="logo"> ONLINE VOTING SYSTEM</label></center>
	   
      </header><br/><br/>
<form action="list.php" style="max-width: 500px; margin:auto" method="post">
<center><div class="input-container">
<i class="fa fa-commenting icon"> </i>
<input class="input-field" type="text" placeholder="Enter The OTP" name="otp" required></center>
</div>

<center>
 <select name="country" id="countySel" size="1" style="min-height:40px; min-width:500px;" required>
<option value="" selected="selected">Select Country</option>
</select>
<br>
<br>
 <select name="state" id="stateSel" size="1" style="min-height:40px; min-width:500px;" required>
<option value="" selected="selected">Please select Country first</option>
</select>
<br>
<br> 
<select name="district" id="districtSel" size="1" style="min-height:40px; min-width:500px;" required>
<option value="" selected="selected">Please select State first</option>
<br/>
</select>
<br/><br/><center><input type="submit" class="btn" value="NEXT" style="min-height:40px; min-width:500px;"/></center>
</form>
</center>
</form>
<form action="Login.html" method="post">
<center><input type="submit"  value="BACK" class="btn1" style="min-height:40px; min-width:500px;"/>  </center><br/>
</form>

</body>
</html>

		<?php
    }
}
else 
{	
    header("Location: Login.php?message=Invalid Username or Password"); 
}

?>

