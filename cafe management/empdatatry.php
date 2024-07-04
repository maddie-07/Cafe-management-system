<?php
include('dbconnect.php');

// sql to get a list of employees
$sql = "SELECT * FROM employee";
$result = $conn->query($sql);
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
<div class="container">
    <h2>Employee Data</h2>
    <form action="insert.html" method="post">
        <input type="submit" value="Insert" name="insert">
    </form>
    <form action="delete.html" method="post">
        <input type="submit" value="delete" name="delete">
    </form>
    <form action="update.html" method="post">
        <input type="submit" value="update" name="update">
    </form>
    <form action="search.html" method="post">
        <input type="submit" value="search" name="search">
    </form>
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
</div>

</body>
</html>