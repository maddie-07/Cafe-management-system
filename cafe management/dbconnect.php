<?php
 $dbhost = "localhost";
 $dbuser = "user";
 $dbpass = "c5XBwZ5Xr9vQOpxD";
 $db = "database1";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 echo "Connected Successfully";
?>