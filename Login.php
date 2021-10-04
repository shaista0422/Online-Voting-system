<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--download above css link and put local path-->
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
<body>
<form action="OtpPage.php" method="post"><div class="bg"></div>

	 <img src="lion.png" style="width:60px;height:100px;">
	 <img src="fl.jpg" style="width:1000px;height:100px;">
		
      <header>
      <center><label class="logo">ONLINE VOTING SYSTEM</label></center>
      </header><br/><br/><br/><br/>
<center> <b><h1>LOGIN HERE</h1></center></b>
  <form style="max-width: 500px; margin:auto">

<center><div class="input-container">
<i class="fa fa-user icon" > </i>
<input class="input-field" type="text" placeholder="Username" name="usrnm" id="usrnm" required></center>
</div>

<center><div class="input-container">
<i class ="fa fa-key icon"> </i>
<input class="input-field" type="password" placeholder="Password" name="psw" id="psw"required></center>
</div>

<center><button type="submit" class="btn" >     SUBMIT        </button></center>
</form>
</form>
<form method="get"><br/><br/>
<?php
if(!empty($_GET['message'])) {
    $message = $_GET['message'];
	echo "<body style='color:red'><center>$message</center>";
}
	?>
</form>
</body>
</html>