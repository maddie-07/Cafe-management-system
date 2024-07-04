<!DOCTYPE html>
<html>
<head>
    <title>Coffee Management System - Login</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}
h2{
    color: 2087;
}

.login-container {
    width: 300px;
    padding: 16px;
    background-color: #ffffff;
    margin: 100px auto;
    box-shadow: 0px 0px 10px 0px #000000;
}

.input-box {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"], input[type="password"] {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    box-sizing: border-box;
}

input[type="submit"] {
    width: 100%;
    padding: 8px;
    margin-top: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
    </style>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <div class="input-box">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-box">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
<?php
//include('login2.php')
?>