<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acoount Created</title>
    <style>
        .btn{
            height: 35px;
            width: 80px;
            border-radius: 5px;
            background-color: blue;
            color: white;
            border: 1px solid white;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>

<button class="btn" onclick="go()">Login</button>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST["name"];
    $user_password = $_POST["user_password"];


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project1";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO new_users (name, password) VALUES ('$userName', '$user_password')";

    if ($conn->query($sql) === TRUE) {
        echo "New Account created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<script>

function go(){
    location.href="login.php"
}

</script>

</body>
</html>