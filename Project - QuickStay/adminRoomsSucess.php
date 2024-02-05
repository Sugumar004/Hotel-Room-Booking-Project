<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "room_details";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $result = $conn->query("SELECT MAX(room_id) AS max_id FROM room_details");

    $row = $result->fetch_assoc();
    $lastRoomId = $row['max_id'];

    $newRoomId = $lastRoomId + 1;

    $roomName = $_POST['roomName'];
    $roomPrice = $_POST['roomPrice'];
    $imageUrl = $_POST['imageUrl'];

    $stmt = "INSERT INTO image_insert (room_id, room_name, image, price) VALUES ($newRoomId, '$roomName', '$imageUrl', $roomPrice)";

   $conn->query($stmt);

   echo "Sucessfully inserted";

   $conn->close();

?>