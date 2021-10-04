
    <?php
   $dbhost = "localhost";
     $dbuser = "root";
     $dbpass = "1234";
     $db = "online-voting";
     $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
	 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
     
    
	 }
       
    ?>