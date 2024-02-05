<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserved Successfully</title>
    <link rel="stylesheet" href="./style.css">
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="./bootstrap.min.css">
    
    <!-- ------------- -->
    <!-- Font awesome link -->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css"rel="stylesheet"/>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <style>
       .user_details {
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .user_details h2 {
            color: #343a40;
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .reservation_details {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #dee2e6;
            padding-bottom: 15px;
        }

        .reservation_details img {
            height: 300px;
            width: 250px;
            margin-right: 20px;
        }

        .reservation_details_details {
            flex-grow: 1;
        }

        .reservation_details p {
            margin: 5px 0;
            color: #495057;
        }

        .user_details form {
            display: inline-block;
            margin-right: 10px;
        }

        @media (max-width: 768px) {
            .user_details {
                margin-top: 10px;
            }
            
            .reservation_details {
                flex-direction: column;
                align-items: flex-start;
            }

            .reservation_details img {
                margin-right: 0;
                margin-bottom: 10px;
            }
        }

      .deleteBtn{
        height: 30px;
        width: 70px;
        background-color: red;
        color:white;
        border-radius: 5px;
        border: 1px solid white;
      }

      .editBtn{
        height: 30px;
        width: 70px;
        background-color: blue;
        color:white;
        border-radius: 5px;
        border: 1px solid white;

      }
    </style>
    <!-- -------------- -->
</head>
<body>

<nav  class="navbar navbar-expand-lg   bg-body-tertiary" id="navbar">
            <div class="container-fluid " id="main-navbar">
                <div class="logo">
            
                    <img src="./project-assests/letter-q-logo-icon-design-template-free-vector.jpg" alt="" id="logo-img">
                    <h2>Quick - Stay</h2>
           
               
                </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>


              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link "  href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Rooms.php">ROOMS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.php">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Support.php">SUPPORT</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li> -->
                    
                    
                    <!-- <button onclick=""  class="btn btn-primary  " type="submit" >Book Now</button> -->
                    <button onclick="booking()" class="btn btn-success " type="submit" id="nav-login-btn">BOOKINGS</button>
                    
                    </ul>
                </div>
            </div>
        </nav>

<div style="margin-top: 120px;" class="user_details">

<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

$con = new mysqli($hostname, $username, $password, $dbname);

$query = "SELECT * FROM booking_details";
$result = $con->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        
        echo "<div class='reservation_details'>";
        echo "<img src='" . $row['room_image'] . "' alt='Room Image'>";
        echo "<div class='reservation_details_details'>";
        echo "<h2>Your Reservation Details:</h2>";
        echo "<p><strong>Room Heading:</strong> " . $row['room_heading'] . "</p>";
        echo "<p><strong>Name:</strong> " . $row['name'] . "</p>";
        echo "<p><strong>Age:</strong> " . $row['age'] . "</p>";
        echo "<p><strong>Email:</strong> " . $row['email'] . "</p>";
        echo "<p><strong>Check-in Date:</strong> " . $row['check_in_date'] . "</p>";
        echo "<p><strong>Total Days:</strong> " . $row['total_days'] . "</p>";
        echo "<p><strong>Gender:</strong> " . $row['gender'] . "</p>";
        echo "<p><strong>Total Price:</strong> " . $row['total_price'] . "</p>";
        echo "<p><strong>Phone Number:</strong> " . $row['phone_number'] . "</p>";
        echo "</div>"; 
        echo "<form method='post' action='editdetails.php'>";
        echo "<input type='hidden' name='editId' value='" . $row['table_id'] . "'>";
        echo "<button class='editBtn' type='submit' name='editBtn'>Edit</button>";
        echo "</form>";

        echo "<form method='post' action=''>";
        echo "<input type='hidden' name='deleteId' value='" . $row['table_id'] . "'>";
        echo "<button class='deleteBtn' type='submit' name='deleteBtn'>Delete</button>";
        echo "</form>"; 
        echo "</div>"; 
    }
} else {
    echo " <img style='margin-left:70px' src ='https://img.freepik.com/premium-vector/no-booking-was-found-empty-state-android-app-web-ui-light-blue-background_641890-50.jpg' alt=''  height='635px' width ='100%'>";
}

if (isset($_POST['deleteBtn'])) {
    $deleteId = $_POST['deleteId'];
    $deleteQuery = "DELETE FROM booking_details WHERE table_id = $deleteId";
    $deleteResult = $con->query($deleteQuery);
}

$con->close();

?>

</div>

<script>
  function redirect(){
    location.href=""
  }
</script>

</body>
</html>
