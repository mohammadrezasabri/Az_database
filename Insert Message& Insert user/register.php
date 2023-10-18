
<!DOCTYPE html>
<html>
<head>
    <title>ثبت نام</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
        }

        form {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>ثبت نام</h2>
        <form method="post" action="register.php">
            <label for="username">نام کاربری:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">رمز عبور:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="ثبت نام">
        </form>
    </div>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //retrieve form data 
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Database Connection

    $host = "localhost";
    $dbusername = "root";
    $dbpassword= "";
    $dbname = "auth";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
     
    if($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
    }

    // check if username already exists
    $checkQuery = "SELECT * FROM login WHERE username='$username'";
    $checkResult = $conn->query($checkQuery);

    if($checkResult->num_rows > 0){
        // username already exists
        header("location: error.html");
        exit();
    }
    else{
        // insert new user into database
        $insertQuery = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
        if($conn->query($insertQuery) === TRUE){
            // registration success
            header("location: success.html");
            exit();
        }
        else{
            // registration failed
            header("location: error.html");
            exit();
        }
    }

    $conn->close();
}
?>
