
<?php
include("dbconnect.php");

if (isset($_POST['insert'])) {
    $id = $_POST['empid'];
    $name = $_POST['name'];
    $age=$_POST['age'];
    $salary = $_POST['salary'];
    $address = $_POST['address'];
    $qualifications = $_POST['qualifications'];
    $jobrole = $_POST['jobrole'];


    $sql = "INSERT INTO employee (empid,ename,age,salary,address,Qualifications,jobrole) VALUES ('$id', '$name','$age','$salary','$address','$qualifications','$jobrole')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header('Location: empdatatry.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['empid'];
    $name = $_POST['name'];
    $age=$_POST['age'];
    $salary = $_POST['salary'];
    $address = $_POST['address'];
    $qualifications = $_POST['qualifications'];
    $jobrole = $_POST['jobrole'];

    $sql = "UPDATE employee SET ename='$name', age='$age',salary='$salary',address='$address',Qualifications='$qualifications',jobrole='$jobrole' WHERE empid='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header('location: empdatatry.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM employee WHERE empid='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('location:empdatatry.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if (isset($_POST['searchbyID'])) {
    $val = $_POST['id'];
    $sql = "SELECT * FROM employee WHERE empid='$val'";
    $result = $conn->query($sql);
}
if (isset($_POST['searchbyname'])) {
    $val = $_POST['name'];
    $sql = "SELECT * FROM employee WHERE ename ='$val'";
    $result = $conn->query($sql);
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
    font-family: Arial, sans-serif;
}

.container {
    margin: 0 auto;
    width: 80%;
}

h2 {
    color: #333;
    text-align: center;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}

th {
    background-color: #4CAF50;
    color: white;
}

</style>
</head>
<body>

<table>
    <tr>
        <th>ID</th>
        <th>Employee Name</th>
        <th>Age</th>
        <th>Salary</th>
        <th>Address</th>
        <th>Qualifications</th>
        <th>Job Role</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["empid"]. "</td>";
            echo "<td>" . $row["ename"]. "</td>";
            echo "<td>" . $row["age"]. "</td>";
            echo "<td>" . $row["salary"]. "</td>";
            echo "<td>" . $row["address"]. "</td>";
            echo "<td>" . $row["Qualifications"]. "</td>";
            echo "<td>" . $row["jobrole"]. "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No results found</td></tr>";
    }
    $conn->close();
    ?>
</table>

</body>
</html>
