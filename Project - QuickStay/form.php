<?php
// Retrieve parameters from URL
if (isset($_GET['roomId']) && isset($_GET['roomImage']) && isset($_GET['roomPrice']) && isset($_GET['roomHeading'])) {
    $roomId = $_GET['roomId'];
    $roomImage = $_GET['roomImage'];
    $roomPrice = $_GET['roomPrice'];
    $roomHeading = $_GET['roomHeading'];

    // Now you have the parameters and can use them to display data or fetch additional data from your MySQL database
    // Use $roomId, $roomImage, $roomPrice, $roomHeading to perform database queries or display on the page
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
    <link rel="stylesheet" href="./style.css">
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css"rel="stylesheet"/>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <!-- -------------- -->
<style>

    /* Basic reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Body styling */
body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

/* Form styling */
.premium-form {
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  max-width: 500px;
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
input[type="tel"],
select {
  width: 100%;
  padding: 8px;
  border-radius: 4px;
  border: 1px solid #ccc;
}

button {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 4px;
  background-color:  #1AB64F;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}


#form_container{
    /* border: 1px solid black; */
    padding-top: 10px;
    box-shadow: 0px 0px 10px rgb(186, 183, 183);
    
}
.h3_room_heading{
    text-align: center;
    color: red;
}

.drpdown_form{
    display: flex;
    gap: 20px;
    align-items: center;
}

#bookingOptions{
    width: 240px;
}

#price_span{
    color: red;
}

#checkInDate{
    width: 350px;
  padding: 8px;
  border-radius: 4px;
  border: 1px solid #ccc;
    text-align: center;
}
#checkOutDate{
    width: 340px;
  padding: 8px;
  border-radius: 4px;
  border: 1px solid #ccc;
    text-align: center;
}

@media  (max-width:991px){

    .drpdown_form{
        display: flex;
        flex-direction: column;
    }
    

}

.radio-group{
    display: flex;
    gap: 10px;
}

.pi_h2{
    font-weight: 700;
}

input{
    text-align: center;
}

.totalPriceDiv{
    display: flex;
    gap: 10px;
    align-items: center;
    margin-left: 250px;
}
.totalprice{
    border: none !important;
    width: 80px !important;
}

.dateInput{
    width: 480px !important;
}

.imgHeading{
    display: none;
    position: absolute;
    left: 120px;
}

   
</style>  
</head>
<body>


<div style="margin-top: 200px;" id="form_container" class="container">
  <div class="row">
    <div  class="col-lg-6 mb-4 ">
    <h4 ><b id="rmid">Room Id : <?php echo $roomId; ?></b></h4>
    <h3 class="h3_room_heading"><b><?php echo $roomHeading; ?></b></h3><br>
    <img height="300px" width="500px" src="<?php echo $roomImage; ?>" alt="" >
    <br><br>
    <div class="drpdown_form">
        
        <!-- <select id="bookingOptions">
            <option value="option1">1 Night, 2 Adults</option>
            <option value="option2">1 Night, 2 Adults, 1 Children</option>
        </select> -->
        <h2 style="margin-top: 15px;"><b> Price = <span id="price_span"><?php echo  $roomPrice; ?></span></b></h2>
    </div>

      
    </div>
    <div class="col-lg-6">
        <div>
            <form class="premium-form" method="post" action="./formsumbited.php" >
                <h2 class="pi_h2">Personal Information</h2>
                <!-- <span id="room_id_span" name="roomid" ></span> -->
                <input type="hidden" value="<?php echo $roomId ?>"  id="room_id_span" name="roomid" required="required" >
                <br><br>
                <div class="input-group">
                    <input placeholder="Enter Name" type="text" id="name" name="name" required="required">
                </div>
               <div class="input-group">
                    <input type="number" placeholder="Age" id="age" name="age" required="required">
                </div>
                <div class="input-group">
                    <input type="email" placeholder="Email" id="email" name="email" required="required">
                </div>
                <div class="input-group">
                    <input type="number" placeholder="Phone Number" id="phone" name="phonenumber" required="required">
                </div>
                <div class="input-group" >
                    <input class="dateInput" type="date" id="checkInDate" name="checkindate" required="required">
                </div>
                <div class="input-group">
                    <input type="number" placeholder="Number Of Days" id="noOfDays" onkeyup="findprice()" name="totaldays" required="required">
                </div>

                <div style="gap: 10px;" class="input-group">
                    <span><b>Gender : </b></span>
                    <div class="radio-group" name="gender">
                        <div>
                            <label for="male">
                            <input type="radio" id="male" name="gender" value="male" required="required">
                            Male
                            </label>
                        </div>
                        <br>
                        <div>
                            <label for="female">
                            <input type="radio" id="female" name="gender" value="female" required="required">
                             Female
                            </label>
                        </div>
                        <br>
                        <div>
                            <label for="other">
                            <input type="radio" id="other" name="gender"  value="other" required="required">
                             Other
                            </label>
                          <!-- Total Price :  <span id="total_price_span">0</span> -->
                     
                        </div>
                    </div>        
                </div>
                <div class="totalPriceDiv">
                    <div>
                        Total Price :
                    </div>
                    <div>
                        <input class="totalprice" type="text" name="totalprice" type="text" id="total_price_span" required="required" >
                    </div>
                    <div class="imgHeading">
                        <input type="text" required="required" name="roomimage" value="<?php echo "$roomImage" ?>">
                        <input type="text" required="required" name="roomheading" value="<?php echo $roomHeading ?>">
                    </div>
                </div>
                <br>
                <button onclick="redirect()" >Reserve</button>
            </form>
        </div>
    </div>
  </div>
</div>

<script>

    function redirect(){
                console.log("booked")
    }

    var roomIdValue = document.getElementById("room_id_span")
    var totalPriceValue = document.getElementById("total_price_span").value

    console.log(roomIdValue).value
    console.log(totalPriceValue)

document.getElementById("bookingOptions").addEventListener("change", function() {
    var selectedOption = this.value;
    var roomPriceElement = document.getElementById("roomPrice");
    var currentPrice = document.getElementById("price_span").innerHTML;

    // console.log(currentPrice)

    if (selectedOption === "option2") {
        // If "1 Night, 2 Adults, 1 Children" is selected, increase the price by 200
        var updatedPrice = currentPrice + "200";
        roomPriceElement.innerHTML = '₹ ' + updatedPrice;
    } else {
        // Reset to the default price for "1 Night, 2 Adults"
        roomPriceElement.innerHTML = '₹ ' + currentPrice;
    }
});

var roomid= document.getElementById("rmid").innerText

var display = document.getElementById("room_id_span")

display.value=roomid;


function findprice(){

    var price_perDay = document.getElementById("price_span").innerText

var totalDays = document.getElementById("noOfDays").value

var totalPrice = price_perDay * totalDays

var showPrice = document.getElementById("total_price_span")

showPrice.value=totalPrice

console.log(totalPrice)

}






</script>

<script src="./script.js"></script>
<script src="./bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

