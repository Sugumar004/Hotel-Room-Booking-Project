<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Page</title>
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
    <!-- -------------- -->
</head>
<body style="background-color: whitesmoke;">

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
                    <a class="nav-link active " aria-current="page" href="#"><b>ROOMS</b></a>
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
    
<!-----------------------------------------Nav Bar End  ---------------------------------------->

<!-------------------------------------Rooms Page Start  -------------------------------------->

<div style="margin-top: 120px;" class="rooms_container" >
<div id="rooms_grid_container" class="container">
  <div class="row">
    <div  class="col-lg-6 mb-4 ">
      <img src="./project-assests/wooden-house-2.jpg" class="img-fluid" alt=""  >
    </div>
    <div class="col-lg-6">
       <div class="grid_content_parent">
            <div class="recomend_div">
                Recomended For You ..!
            </div>
            <br>
            <h4>Room No : 1</h4>
            <div id="rooms_frst_line">
                <h3>Wodden Lodgings</h3>
                <div class="like_img">
                    <img src="./project-assests/thumbs-up-regular.svg" alt="">
                    <h6>20 Peoples booked this<br> hotel Today</h6>
                </div>
            </div>
            <br>
            <div class="second_line">
                <div class="rooms_ratings_div">
                    4.0
                    <i class="fa fa-star"></i>
                    
                </div>
                <b>(578 Ratings)</b>
                <br>
                <b>4 Star Ratings</b>
                <br>
                <b>Very Good</b>
            </div>
            <br>
            <div class="icon_div_1">
                <p><i class="fa fa-desktop" aria-hidden="true"></i> TV</p>
                <p><i class="fa fa-wifi" aria-hidden="true"></i> Free WIFI</p>
                <p><i class="fa fa-battery-full" aria-hidden="true"></i> Power Backeup</p>
                <p><i class="fa fa-car" aria-hidden="true"></i> Parking Facility</p>

            </div>
            <div class="icon_div_2">
                <div ><b >2 * Deluxe Double Room</b></div>
                <div class="nights_div">
                    <p style="margin-left: 30px;">2  Large Double Beds</p>
                    <p style="margin-left: 30px;">1  Night, 2 Adults</p>
                </div>
            </div>
            <div class="last_line_conainer">
                
                 <div class="price_div">
                    <h3 ><b>₹ 400</b></h3>
                    <del style="color: red;">₹ 600</del>
                    
                 </div>
                <div>
                    <button data-room-id="1" data-room-image="./project-assests/wooden-house-2.jpg" data-room-price="400" data-room-heading="Wodden Lodgings" class="bookNowbtn" id="bookNowbtn"><b>Book Now</b></button>
                </div>
                
            </div>
            <p>+ ₹ 200 Taxes and Charges</p>

       </div>
    
    </div>
  </div>
</div>
</div>
<hr>

<!----------------------------------------- Room 2 ------------------------------------------->
<div style="margin-top: 80px;" class="rooms_container" >
<div id="rooms_grid_container" class="container">
  <div class="row">
    <div  class="col-lg-6 mb-4 ">
      <img src="./project-assests/Rooms/Room 2.webp" class="img-fluid" alt=""  >
    </div>
    <div class="col-lg-6">
       <div class="grid_content_parent">
            <div class="recomend_div">
                Recomended For You ..!
            </div>
            <br>
            <h4>Room No : 2</h4>
            <div id="rooms_frst_line">
                <h3>Beach - Morning</h3>
                <div class="like_img">
                    <img src="./project-assests/thumbs-up-regular.svg" alt="">
                    <h6>8 Peoples booked this<br> in Last 6 hours</h6>
                </div>
            </div>
            <br>
            <div class="second_line">
                <div class="rooms_ratings_div">
                    4.5
                    <i class="fa fa-star"></i>
                    
                </div>
                <b>(632 Ratings)</b>
                <br>
                <b>4.5 Star Ratings</b>
                <br>
                <b>Excellent</b>
            </div>
            <br>
            <div class="icon_div_1">
                <p><i class="fa fa-desktop" aria-hidden="true"></i> TV</p>
                <p><i class="fa fa-wifi" aria-hidden="true"></i> Free WIFI</p>
                <p><i class="fa fa-battery-full" aria-hidden="true"></i> Power Backeup</p>
                <p><i class="fa fa-car" aria-hidden="true"></i> Parking Facility</p>

            </div>
            <div class="icon_div_2">
                <div ><b >2 * Deluxe Double Room</b></div>
                <div class="nights_div">
                    <p style="margin-left: 30px;">1  Large Double Beds</p>
                    <p style="margin-left: 30px;">1  Night, 2 Adults</p>
                </div>
            </div>
            <div class="last_line_conainer">
                
                 <div class="price_div">
                    <h3 ><b>₹ 800</b></h3>
                    <del style="color: red;">₹ 1400</del>
                    
                 </div>
                <div>
                    <button data-room-id="2" data-room-image="./project-assests/Rooms/Room 2.webp" data-room-price="800" data-room-heading="Beach - Morning" class="bookNowbtn" id="bookNowbtn"><b>Book Now</b></button>
                </div>
                
            </div>
            <p>+ ₹ 350 Taxes and Charges</p>

       </div>
    
    </div>
  </div>
</div>
</div>

<hr>
<!--------------------------------------- Room 3 -------------------------------------------->
<div style="margin-top: 80px;" class="rooms_container" >
<div id="rooms_grid_container" class="container">
  <div class="row">
    <div  class="col-lg-6 mb-4 ">
      <img src="./project-assests/Rooms/Room 3.webp" class="img-fluid" alt=""  >
    </div>
    <div class="col-lg-6">
       <div class="grid_content_parent">
            <div class="recomend_div">
                Recomended For You ..!
            </div>
            <br>
            <h4>Room No : 3</h4>
            <div id="rooms_frst_line">
                <h3>Hut Outings</h3>
                <div class="like_img">
                    <img src="./project-assests/thumbs-up-regular.svg" alt="">
                    <h6>129 Peoples booked this<br> in Last 2 Weeks</h6>
                </div>
            </div>
            <br>
            <div class="second_line">
                <div class="rooms_ratings_div">
                    4.2
                    <i class="fa fa-star"></i>
                    
                </div>
                <b>(325 Ratings)</b>
                <br>
                <b>4.2 Star Ratings</b>
                <br>
                <b>Very Good</b>
            </div>
            <br>
            <div class="icon_div_1">
                <p><i class="fa fa-desktop" aria-hidden="true"></i> TV</p>
                <p><i class="fa fa-wifi" aria-hidden="true"></i> Free WIFI</p>
                <p><i class="fa fa-battery-full" aria-hidden="true"></i> Power Backeup</p>
                <p><i class="fa fa-car" aria-hidden="true"></i> Parking Facility</p>

            </div>
            <div class="icon_div_2">
                <div ><b >1 * Bed Room</b></div>
                <div class="nights_div">
                    <p style="margin-left: 30px;">1  Large Double Beds</p>
                    <p style="margin-left: 30px;">1  Night, 2 Adults</p>
                </div>
            </div>
            <div class="last_line_conainer">
                
                 <div class="price_div">
                    <h3 ><b>₹ 600</b></h3>
                    <del style="color: red;">₹ 1000</del>
                    
                 </div>
                <div>
                    <button data-room-id="3" data-room-image="./project-assests/Rooms/Room 3.webp" data-room-price="600" data-room-heading="Hut - Outing"  class="bookNowbtn" id="bookNowbtn"><b>Book Now</b></button>
                </div>
                
            </div>
            <p>+ ₹ 250 Taxes and Charges</p>

       </div>
    
    </div>
  </div>
</div>
</div>
<hr>

<!------------------------------------------- Room 4  ----------------------------------------->

<div style="margin-top: 80px;" class="rooms_container" >
<div id="rooms_grid_container" class="container">
  <div class="row">
    <div  class="col-lg-6 mb-4 ">
      <img src="./project-assests/Rooms/Room 4.jpeg" class="img-fluid" alt=""  >
    </div>
    <div class="col-lg-6">
       <div class="grid_content_parent">
            <div class="recomend_div">
                Recomended For You ..!
            </div>
            <br>
            <h4>Room No : 4</h4>
            <div id="rooms_frst_line">
                <h3>Garden Glory</h3>
                <div class="like_img">
                    <img src="./project-assests/thumbs-up-regular.svg" alt="">
                    <h6>5 Peoples booked this<br> in 8 Hours</h6>
                </div>
            </div>
            <br>
            <div class="second_line">
                <div class="rooms_ratings_div">
                    4.8
                    <i class="fa fa-star"></i>
                    
                </div>
                <b>(865 Ratings)</b>
                <br>
                <b>4.8 Star Ratings</b>
                <br>
                <b>Outstanding</b>
            </div>
            <br>
            <div class="icon_div_1">
                <p><i class="fa fa-desktop" aria-hidden="true"></i> TV</p>
                <p><i class="fa fa-wifi" aria-hidden="true"></i> Free WIFI</p>
                <p><i class="fa fa-battery-full" aria-hidden="true"></i> Power Backeup</p>
                <p><i class="fa fa-car" aria-hidden="true"></i> Parking Facility</p>

            </div>
            <div class="icon_div_2">
                <div ><b >2 * Deluxe Double Room</b></div>
                <div class="nights_div">
                    <p style="margin-left: 30px;">2  Large Double Beds</p>
                    <p style="margin-left: 30px;">1  Night, 2 Adults</p>
                </div>
            </div>
            <div class="last_line_conainer">
                
                 <div class="price_div">
                    <h3 ><b>₹ 750</b></h3>
                    <del style="color: red;">₹ 1500</del>
                    
                 </div>
                <div>
                    <button data-room-id="4" data-room-image="./project-assests/Rooms/Room 4.jpeg" data-room-price="750" data-room-heading="Garden Glory"  class="bookNowbtn" id="bookNowbtn"><b>Book Now</b></button>
                </div>
                
            </div>
            <p>+ ₹ 220 Taxes and Charges</p>

       </div>
    
    </div>
  </div>
</div>
</div>
<hr>

<!----------------------------------- Room 5  ---------------------------------------------->
<div style="margin-top: 80px;" class="rooms_container" >
<div id="rooms_grid_container" class="container">
  <div class="row">
    <div  class="col-lg-6 mb-4 ">
      <img src="./project-assests/Rooms/Room 5.avif" class="img-fluid" alt=""  >
    </div>
    <div class="col-lg-6">
       <div class="grid_content_parent">
            <div class="recomend_div">
                Recomended For You ..!
            </div>
            <br>
            <h4>Room No : 5</h4>
            <div id="rooms_frst_line">
                <h3>Royal Suite</h3>
                <div class="like_img">
                    <img src="./project-assests/thumbs-up-regular.svg" alt="">
                    <h6>20 Peoples booked this<br> in Last 2 Weeeks</h6>
                </div>
            </div>
            <br>
            <div class="second_line">
                <div style="background-color: #B4DA55;" class="rooms_ratings_div">
                    3.5
                    <i class="fa fa-star"></i>
                    
                </div>
                <b>(120 Ratings)</b>
                <br>
                <b>3.5 Star Ratings</b>
                <br>
                <b>Fair</b>
            </div>
            <br>
            <div class="icon_div_1">
                <p><i class="fa fa-desktop" aria-hidden="true"></i> TV</p>
                <p><i class="fa fa-wifi" aria-hidden="true"></i> Free WIFI</p>
                <p><i class="fa fa-battery-full" aria-hidden="true"></i> Power Backeup</p>
                <p><i class="fa fa-car" aria-hidden="true"></i> Parking Facility</p>

            </div>
            <div class="icon_div_2">
                <div ><b >2 * Deluxe Double Room</b></div>
                <div class="nights_div">
                    <p style="margin-left: 30px;">2  Large Double Beds</p>
                    <p style="margin-left: 30px;">1  Night, 2 Adults</p>
                </div>
            </div>
            <div class="last_line_conainer">
                
                 <div class="price_div">
                    <h3 ><b>₹ 350</b></h3>
                    <del style="color: red;">₹ 700</del>
                    
                 </div>
                <div>
                    <button data-room-id="5" data-room-image="./project-assests/Rooms/Room 5.avif" data-room-price="350" data-room-heading="Serene Slumber"  class="bookNowbtn" id="bookNowbtn"><b>Book Now</b></button>
                </div>
                
            </div>
            <p>+ ₹ 200 Taxes and Charges</p>

       </div>
    
    </div>
  </div>
</div>
</div>
<hr>

<!--------------------------------------- Room 6 -------------------------------------------->
<div style="margin-top: 80px;" class="rooms_container" >
<div id="rooms_grid_container" class="container">
  <div class="row">
    <div  class="col-lg-6 mb-4 ">
      <img src="./project-assests/Rooms//room 6.webp" class="img-fluid" alt=""  >
    </div>
    <div class="col-lg-6">
       <div class="grid_content_parent">
            <div class="recomend_div">
                Recomended For You ..!
            </div>
            <br>
            <h4>Room No : 6</h4>
            <div id="rooms_frst_line">
                <h3>Peaceful Haven</h3>
                <div class="like_img">
                    <img src="./project-assests/thumbs-up-regular.svg" alt="">
                    <h6>250 Peoples booked this<br> in Last 3 Weeks</h6>
                </div>
            </div>
            <br>
            <div class="second_line">
                <div class="rooms_ratings_div">
                    4.8
                    <i class="fa fa-star"></i>
                    
                </div>
                <b>(395 Ratings)</b>
                <br>
                <b>4.8 Star Ratings</b>
                <br>
                <b>Very Good</b>
            </div>
            <br>
            <div class="icon_div_1">
                <p><i class="fa fa-desktop" aria-hidden="true"></i> TV</p>
                <p><i class="fa fa-wifi" aria-hidden="true"></i> Free WIFI</p>
                <p><i class="fa fa-battery-full" aria-hidden="true"></i> Power Backeup</p>
                <p><i class="fa fa-car" aria-hidden="true"></i> Parking Facility</p>

            </div>
            <div class="icon_div_2">
                <div ><b >1 * Bed Room</b></div>
                <div class="nights_div">
                    <p style="margin-left: 30px;">1  Large Double Beds</p>
                    <p style="margin-left: 30px;">1  Night, 2 Adults</p>
                </div>
            </div>
            <div class="last_line_conainer">
                
                 <div class="price_div">
                    <h3 ><b>₹ 800</b></h3>
                    <del style="color: red;">₹ 1400</del>
                    
                 </div>
                <div>
                    <button data-room-id="6" data-room-image="./project-assests/Rooms//room 6.webp" data-room-price="800" data-room-heading="Peaceful Haven"  class="bookNowbtn" id="bookNowbtn"><b>Book Now</b></button>
                </div>
                
            </div>
            <p>+ ₹ 300 Taxes and Charges</p>

       </div>
    
    </div>
  </div>
</div>
</div>
<hr>

<!--------------------------------------- Room 7 -------------------------------------------->
<div style="margin-top: 80px;" class="rooms_container" >
<div id="rooms_grid_container" class="container">
  <div class="row">
    <div  class="col-lg-6 mb-4 ">
      <img src="./project-assests/Rooms/room7.webp" class="img-fluid" alt=""  >
    </div>
    <div class="col-lg-6">
       <div class="grid_content_parent">
            <div class="recomend_div">
                Recomended For You ..!
            </div>
            <br>
            <h4>Room No : 7</h4>
            <div id="rooms_frst_line">
                <h3>Relaxed Charm</h3>
                <div class="like_img">
                    <img src="./project-assests/thumbs-up-regular.svg" alt="">
                    <h6>150 Peoples booked this<br> in Last 3 months</h6>
                </div>
            </div>
            <br>
            <div class="second_line">
                <div class="rooms_ratings_div">
                    4.1
                    <i class="fa fa-star"></i>
                    
                </div>
                <b>(180 Ratings)</b>
                <br>
                <b>4.1 Star Ratings</b>
                <br>
                <b>Very Good</b>
            </div>
            <br>
            <div class="icon_div_1">
                <p><i class="fa fa-desktop" aria-hidden="true"></i> TV</p>
                <p><i class="fa fa-wifi" aria-hidden="true"></i> Free WIFI</p>
                <p><i class="fa fa-battery-full" aria-hidden="true"></i> Power Backeup</p>
                <p><i class="fa fa-car" aria-hidden="true"></i> Parking Facility</p>

            </div>
            <div class="icon_div_2">
                <div ><b >1 * Bed Room</b></div>
                <div class="nights_div">
                    <p style="margin-left: 30px;">1  Large Double Beds</p>
                    <p style="margin-left: 30px;">1  Night, 2 Adults</p>
                </div>
            </div>
            <div class="last_line_conainer">
                
                 <div class="price_div">
                    <h3 ><b>₹ 700</b></h3>
                    <del style="color: red;">₹ 1300</del>
                    
                 </div>
                <div>
                    <button data-room-id="7" data-room-image="./project-assests/Rooms/room7.webp" data-room-price="700" data-room-heading="Relaxed Charm"  class="bookNowbtn" id="bookNowbtn"><b>Book Now</b></button>
                </div>
                
            </div>
            <p>+ ₹ 200 Taxes and Charges</p>

       </div>
    
    </div>
  </div>
</div>
</div>
<hr>

<!--------------------------------------- Room 8 -------------------------------------------->
<div style="margin-top: 80px;" class="rooms_container" >
<div id="rooms_grid_container" class="container">
  <div class="row">
    <div  class="col-lg-6 mb-4 ">
      <img src="./project-assests/Rooms/room8.jpg" class="img-fluid" alt=""  >
    </div>
    <div class="col-lg-6">
       <div class="grid_content_parent">
            <div class="recomend_div">
                Recomended For You ..!
            </div>
            <br>
            <h4>Room No : 8</h4>
            <div id="rooms_frst_line">
                <h3>Easy Living</h3>
                <div class="like_img">
                    <img src="./project-assests/thumbs-up-regular.svg" alt="">
                    <h6>450 Peoples booked this<br> in Last 6 months</h6>
                </div>
            </div>
            <br>
            <div class="second_line">
                <div class="rooms_ratings_div">
                    4.5
                    <i class="fa fa-star"></i>
                    
                </div>
                <b>(520 Ratings)</b>
                <br>
                <b>4.5 Star Ratings</b>
                <br>
                <b>Outstanding</b>
            </div>
            <br>
            <div class="icon_div_1">
                <p><i class="fa fa-desktop" aria-hidden="true"></i> TV</p>
                <p><i class="fa fa-wifi" aria-hidden="true"></i> Free WIFI</p>
                <p><i class="fa fa-battery-full" aria-hidden="true"></i> Power Backeup</p>
                <p><i class="fa fa-car" aria-hidden="true"></i> Parking Facility</p>

            </div>
            <div class="icon_div_2">
                <div ><b >1 * Bed Room</b></div>
                <div class="nights_div">
                    <p style="margin-left: 30px;">1  Large Double Beds</p>
                    <p style="margin-left: 30px;">1  Night, 2 Adults</p>
                </div>
            </div>
            <div class="last_line_conainer">
                
                 <div class="price_div">
                    <h3 ><b>₹ 1000</b></h3>
                    <del style="color: red;">₹ 1600</del>
                    
                 </div>
                <div>
                    <button data-room-id="8" data-room-image="./project-assests/Rooms/room8.jpg" data-room-price="1000" data-room-heading="Easy Living"  class="bookNowbtn" id="bookNowbtn"><b>Book Now</b></button>
                </div>
                
            </div>
            <p>+ ₹ 250 Taxes and Charges</p>

       </div>
    
    </div>
  </div>
</div>
</div>
<hr>

<!--------------------------------------- Room 9 -------------------------------------------->
<div style="margin-top: 80px;" class="rooms_container" >
<div id="rooms_grid_container" class="container">
  <div class="row">
    <div  class="col-lg-6 mb-4 ">
      <img src="./project-assests/Rooms/room9.jpg" class="img-fluid" alt=""  >
    </div>
    <div class="col-lg-6">
       <div class="grid_content_parent">
            <div class="recomend_div">
                Recomended For You ..!
            </div>
            <br>
            <h4>Room No : 9</h4>
            <div id="rooms_frst_line">
                <h3>Classic Style</h3>
                <div class="like_img">
                    <img src="./project-assests/thumbs-up-regular.svg" alt="">
                    <h6>350 Peoples booked this<br> in Last 2 months</h6>
                </div>
            </div>
            <br>
            <div class="second_line">
                <div class="rooms_ratings_div">
                    4.3
                    <i class="fa fa-star"></i>
                    
                </div>
                <b>(250 Ratings)</b>
                <br>
                <b>4.3 Star Ratings</b>
                <br>
                <b> Good</b>
            </div>
            <br>
            <div class="icon_div_1">
                <p><i class="fa fa-desktop" aria-hidden="true"></i> TV</p>
                <p><i class="fa fa-wifi" aria-hidden="true"></i> Free WIFI</p>
                <p><i class="fa fa-battery-full" aria-hidden="true"></i> Power Backeup</p>
                <p><i class="fa fa-car" aria-hidden="true"></i> Parking Facility</p>

            </div>
            <div class="icon_div_2">
                <div ><b >1 * Bed Room</b></div>
                <div class="nights_div">
                    <p style="margin-left: 30px;">1  Large Double Beds</p>
                    <p style="margin-left: 30px;">1  Night, 2 Adults</p>
                </div>
            </div>
            <div class="last_line_conainer">
                
                 <div class="price_div">
                    <h3 ><b>₹ 850</b></h3>
                    <del style="color: red;">₹ 1500</del>
                    
                 </div>
                <div>
                    <button data-room-id="9" data-room-image="./project-assests/Rooms/room9.jpg" data-room-price="850" data-room-heading="Classic Style"  class="bookNowbtn" id="bookNowbtn"><b>Book Now</b></button>
                </div>
                
            </div>
            <p>+ ₹ 250 Taxes and Charges</p>

       </div>
    
    </div>
  </div>
</div>
</div>
<hr>

<!--------------------------------------- Room 10 -------------------------------------------->
<div style="margin-top: 80px;" class="rooms_container" >
<div id="rooms_grid_container" class="container">
  <div class="row">
    <div  class="col-lg-6 mb-4 ">
      <img src="./project-assests/Rooms/room10.jpg" class="img-fluid" alt=""  >
    </div>
    <div class="col-lg-6">
       <div class="grid_content_parent">
            <div class="recomend_div">
                Recomended For You ..!
            </div>
            <br>
            <h4>Room No : 10</h4>
            <div id="rooms_frst_line">
                <h3>Modern Retreat</h3>
                <div class="like_img">
                    <img src="./project-assests/thumbs-up-regular.svg" alt="">
                    <h6>60 Peoples booked this<br> in Last 1 month</h6>
                </div>
            </div>
            <br>
            <div class="second_line">
                <div class="rooms_ratings_div">
                    4.7
                    <i class="fa fa-star"></i>
                    
                </div>
                <b>(100 Ratings)</b>
                <br>
                <b>4.7 Star Ratings</b>
                <br>
                <b>Excellent</b>
            </div>
            <br>
            <div class="icon_div_1">
                <p><i class="fa fa-desktop" aria-hidden="true"></i> TV</p>
                <p><i class="fa fa-wifi" aria-hidden="true"></i> Free WIFI</p>
                <p><i class="fa fa-battery-full" aria-hidden="true"></i> Power Backeup</p>
                <p><i class="fa fa-car" aria-hidden="true"></i> Parking Facility</p>

            </div>
            <div class="icon_div_2">
                <div ><b >1 * Bed Room</b></div>
                <div class="nights_div">
                    <p style="margin-left: 30px;">1  Large Double Beds</p>
                    <p style="margin-left: 30px;">1  Night, 2 Adults</p>
                </div>
            </div>
            <div class="last_line_conainer">
                
                 <div class="price_div">
                    <h3 ><b>₹ 1400</b></h3>
                    <del style="color: red;">₹ 1800</del>
                    
                 </div>
                <div>
                    <button data-room-id="10" data-room-image="./project-assests/Rooms/room10.jpg" data-room-price="1400" data-room-heading="Modern Retreat"  class="bookNowbtn" id="bookNowbtn"><b>Book Now</b></button>
                </div>
                
            </div>
            <p>+ ₹ 150 Taxes and Charges</p>

       </div>
    
    </div>
  </div>
</div>
</div>
<hr>






<!-------------------------------------Rooms Page End  ---------------------------------------->
   
<!---------------------------------------- Script Files --------------------------------------->

    <script src="./bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!------------------------------------------  ---------------------------------------------->
<script src="./script.js"></script>
  
</body>
</html>