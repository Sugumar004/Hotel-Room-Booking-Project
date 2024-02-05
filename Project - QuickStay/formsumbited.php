<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserved Successfully</title>
</head>
<body>

<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

$link = new mysqli($hostname, $username, $password, $dbname);

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

$sql = "SELECT table_id FROM booking_details ORDER BY table_id DESC LIMIT 1";
$result = $link->query($sql);

if ($result === false) {
    die("Error executing query: " . $link->error);
}

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $lastId = $row['table_id'];
} else {
    $lastId = 0;
}

$newId = $lastId + 1;

$roomid = $_POST["roomid"];
$roomheading = $_POST["roomheading"];
$roomimage = $_POST["roomimage"];
$name = $_POST["name"];
$age = $_POST["age"];
$email = $_POST["email"];
$checkin_date = $_POST["checkindate"];
$total_days = $_POST["totaldays"];
$gender = $_POST["gender"];
$total_price = $_POST["totalprice"];
$phone_number = $_POST["phonenumber"];

$merge = "INSERT INTO booking_details(table_id, room_id, room_heading, room_image, name, age, email, check_in_date, total_days, gender, total_price, phone_number) 
          VALUES ($newId, $roomid, '$roomheading', '$roomimage', '$name', $age, '$email', '$checkin_date', $total_days, '$gender', $total_price, '$phone_number')";

if ($link->query($merge) === TRUE) {
    echo "Your Reservation Successful";
    
    header("Location: bookings.php");
    exit(); 
} else {
    echo "Error: " . $merge . "<br>" . $link->error;
}

$link->close();

?>

</body>
</html>
