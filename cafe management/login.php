<?php
    session_start();
    // include your database connection file
    include('dbconnect.php');
    $username = $_POST['username'];
    
    $password = $_POST['password'];
    $sql = "SELECT * FROM users ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
           if($username ==$row["username"])
           {
              if($password ==$row["password"])
              {
                $sleep = 2;
                sleep($sleep);
                $flag =1; 
              }
              else
              {
                echo '<script>alert("invalid password")</script>'; 
              }
           }
           else 
           {
            echo '<script>alert("invalid username")</script>'; 
           }
           if($flag ==1)
           {
              $fname = "secontwooptions.html";
              header('Location: ' . $fname);
           }
        }
    } else {
        echo "0 results";
    }
   ?>