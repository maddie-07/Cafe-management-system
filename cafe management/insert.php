<?php
    echo "enter empoyee details ";
    $name = $_POST['name'];
    $age = $_POST['age'];

    $sql = "INSERT INTO employee (empid,ename,age,salary,address,Qualifications,jobrole) VALUES ('$id', '$name','$age','$salary','$address','$qualifications,'$jobrole')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    ?>