<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit  Details</title>
</head>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .premium-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .input-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        input[type="date"],
        input[type="tel"] {
            width: 100%;
            text-align: center;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #1AB64F;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        @media (max-width: 991px) {
            .premium-form {
                max-width: 300px;
            }
        }
    </style>
<body>

<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

$con = new mysqli($hostname, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if (isset($_POST['editId'])) {
    $editId = $_POST['editId'];
    $editQuery = "SELECT * FROM booking_details WHERE table_id = $editId";
    $editResult = $con->query($editQuery);

    if ($editResult->num_rows > 0) {
        $editRow = $editResult->fetch_assoc();
        ?>

        <!-- <h2>Edit Reservation Details:</h2>
        <form method="post" action="">
            <input type="hidden" name="updateId" value="<?= $editRow['table_id'] ?>">
            <label for="editName">Name:</label>
            <input type="text" id="editName" name="editName" value="<?= $editRow['name'] ?>" required><br>
            <button type="submit" name="updateBtn">Update</button>
        </form> -->

        <form class="premium-form" method="post" action="">
    <h2>Booking Information</h2>
    <div class="input-group">
        <input type="hidden" name="updateId" value="<?= $editRow['table_id'] ?>">
        <br>
        <label for="name">Name:</label>
        <input value="<?= $editRow['name'] ?>" type="text" id="name" name="name" required>
    </div>
    <div class="input-group">
        <label for="age">Age:</label>
        <input value="<?= $editRow['age'] ?>" type="number" id="age" name="age" required>
    </div>
    <div class="input-group">
        <label for="email">Email:</label>
        <input value="<?= $editRow['email'] ?>" type="email" id="email" name="email" required>
    </div>
    <div class="input-group">
        <label for="date">Date:</label>
        <input value="<?= $editRow['check_in_date'] ?>" type="date" id="date" name="date" required>
    </div>
    <div class="input-group">
        <label for="phone">Phone Number:</label>
        <input value="<?= $editRow['phone_number'] ?>" type="text" id="phone" name="phone" required>
    </div>
    <button type="submit" name="updateBtn">Update</button>
</form>


        <?php
    } else {
        echo "Record not found for editing.";
    }
}

if (isset($_POST['updateBtn'])) {
    $updateId = $_POST['updateId'];
    $updatedName = $_POST['name'];
    $updatedAge = $_POST['age'];
    $updatedEmail = $_POST['email'];
    $updatedDate = $_POST['date'];
    $updatedPhone = $_POST['phone'];

    $updateQuery = "UPDATE booking_details SET 
                    name = '$updatedName', 
                    age = $updatedAge, 
                    email = '$updatedEmail', 
                    check_in_date = '$updatedDate', 
                    phone_number = '$updatedPhone' 
                    WHERE table_id = $updateId";

    $updateResult = $con->query($updateQuery);

    if ($updateResult) {
        header("Location: bookings.php");
        exit(); 
    } else {
        echo "Error updating record: " . $con->error;
    }
}


$con->close();

?>

</body>
</html>
