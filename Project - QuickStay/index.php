<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.Quick-Stay.com</title>
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
<body>
    
    
  
  
  <!------------------------Nav Bar Using Boot-strap----------------------------->
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
                        <a class="nav-link active" aria-current="page" href="#"><b>HOME</b></a>
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
        
<!--- ---------------------------NavBar using Bootstrap---------------------------------- -->

        <!----------------------------- caurosil images start ------------------------------->

        <div id="carouselExampleCaptions" class="carousel slide mt-5 " >
            <div class="carousel-indicators" >
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" data-bs-ride="carousel">
              <div class="carousel-item active">
                <img src="./project-assests/first.png" class="d-block w-100" alt="..." height="500px" >
                <div class="carousel-caption d-none d-md-block">
                  <!-- <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p> -->
                </div>
              </div>
              <div class="carousel-item">
                <img src="./project-assests/second.webp" class="d-block w-100" alt="..." height="500px" >
                <div class="carousel-caption d-none d-md-block">
                  <!-- <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p> -->
                </div>
              </div>
              <div class="carousel-item">
                <img src="./project-assests/grid 2.avif" class="d-block w-100" alt="..." height="500px" >
                <div class="carousel-caption d-none d-md-block">
                  <!-- <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p> -->
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        
       

<!---------------------------------- Date Booking Start--------------------------------------->

    <!-- <div class="container text-center">
        <div class="row">
            <h3 class="Date_Time_h3">Enter the Date and Time To make your Stay</h3><br><br><br>
            <div class="col-lg-4 ">
                
                <b>Check In :</b> <input type="datetime-local" placeholder="set Date"  class="check_in_box"> 
            </div>
            <div class="col-lg-4">
                
                <b>Check Out :</b> <input type="datetime-local" placeholder="set date"  class="check_out_box">
            </div>
            <div class="col-lg-4">
                <button class="btn btn-primary reserve_btn">Reserve</button>
                
            </div>
        </div>
    </div> -->


<!--------------------------------- Date Booking End--------------------------------------->
           

<!--------------------------------- Images Grid Start------------------------------->

    <div class="container text-center " style="margin-top: 30px;">
        <div class="row  row-cols-1 row-cols-lg-3">
            <div class=" col mb-4  " id="border">

                <div class="grid-images">
                    <img src="https://watermark.lovepik.com/photo/20211121/large/lovepik-hotel-rooms-picture_500532027.jpg"   class="img-fluid" alt="..."><br>
                    <b>Location : </b><b>Chennai</b><img src="./project-assests/location.png" alt="" height="35px" width="40px"><br>
                    <b>Address :</b> 26/2,Ramar Street,KK Nagar,Ashok Nagar,Chennai.<br>
                    <b>Email : <a href="mailto:sugumurugan004@gmail.com">Quickstay@gmail.com</a></b>
                    <br>
                    <b>Phone number: 9807652351</b>
                    
                </div>
              
            </div>
            <div class=" col mb-4  ">
                <div class="grid-images">
                    <img src="https://watermark.lovepik.com/photo/20211121/large/lovepik-hotel-rooms-picture_500532027.jpg"   class="img-fluid" alt="..."><br>
                    <b>Location : </b><b>Coimbatore</b><img src="./project-assests/location.png" alt="" height="35px" width="40px"><br>
                    <b>Address :</b> 762,Avinashi Road,Cexus Nagar,Neelambur,Coimbatore.<br>
                    <b>Email : <a href="mailto:sugumurugan004@gmail.com">Quickstay@gmail.com</a></b>
                    <br>
                    <b>Phone number: 8976787658</b>
                    

                </div>
  
            </div>
            <div class="col  mb-4 ">
                <div class="grid-images">
                    <img src="https://watermark.lovepik.com/photo/20211121/large/lovepik-hotel-rooms-picture_500532027.jpg"   class="img-fluid" alt="..."><br>
                    <b>Location : </b><b>Salem</b><img src="./project-assests/location.png" alt="" height="35px" width="40px"><br>
                    <b>Address :</b> 65,5 Road,Thiru Nagar,Salem, MA 01970,Thoppur,Salem.<br>
                    <b>Email : <a href="mailto:sugumurugan004@gmail.com">Quickstay@gmail.com</a></b>
                    <br>
                    <b>Phone number: 8976787658</b>
                    
                </div>
            </div>
       
        </div>
      </div>

<!--------------------------------- Images Grid End------------------------------------------->
<!----------------------------------Image Div  Start----------------------------------------->
      <div class="single-img">

        <img src="https://pyxis.nymag.com/v1/imgs/7c9/b00/9d91e519b3145a2c74b1816d443b4f4eb8-serafina.rsocial.w1200.jpg" width="100%" class="img-thumbnail"  alt="...">
      </div>     

<!----------------------------------Image Div  End------------------------------------------->

<!--------------------------------- Image and Details Start---------------------------------->
<br><br>
<h4 class="h4_spcloffr">Special Offers</h4>
<br><br>
<div class="spcloffr_container" >
  <div class="offr_div">
    <img src="./project-assests/wooden-house-2.jpg" alt="" height="300px" width="300px">
    <br><br>
    <h4 class="spcloffr_title">Wodden - House</h4>
    
    <p><b>A house is made of woods and beams; a home is built with Hammer and Pils." </b></p>

    <button onclick="changePage()"  class="spcl_btn" >Book Now</button>
   

  </div>

  <div class="offr_div">
    
    <img src="https://media.cntraveler.com/photos/5ff32c3d1cae1c5896a5f5fb/16:9/w_2560,c_limit/Renovated%20Marvelous%20Suite.jpg" alt="" height="300px" width="300px">
    <br><br>
    <h4 class="spcloffr_title">Beach - House</h4>
    
    <p><b>A house is made of woods and beams; a home is built with Hammer and Pils." </b></p>

    <button onclick="changePage()" class="spcl_btn" >Book Now</button>
   


  </div>

  <div class="offr_div">
    <img src="https://assets.cntraveller.in/photos/60ba02d7010276881eb4db09/16:9/w_1024%2Cc_limit/neeleshwarlead.jpg" alt="" height="300px" width="300px">
    <br><br>
    <h4 class="spcloffr_title">Hut - House</h4>
    
    <p><b>A house is made of woods and beams; a home is built with Hammer and Pils." </b></p>

    <button onclick="changePage()"  class="spcl_btn" >Book Now</button>
   

  </div>
</div>

<!--------------------------------- Image and Details End-------------------------------------->


<!------------------------------------ Footer Start ---------------------------------------->

<footer class="bg-dark text-white pt-5 pb-4 ">
  <div class="container text-center text-md-left">
    <div class="row text-center text-md-left">
      <div class="col-md-5 col-lg-3 col-xl-3 mx-auto mt-3 ">

        <h5 class="text-uppercase mb-4 font-weight-bold text-warning ">Quick - Stay</h5>
        <p>
          "Quick Stay: Your premier destination for comfortable stays, offering luxurious accommodations and exceptional service for an unforgettable hospitality experience."
        </p>

      </div>

      <div class="col-md-5 col-lg-3 col-xl-3 mx-auto mt-3 ">

        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Our Services</h5>
        <p>
          <a  href="" style="text-decoration: none;" class="text-white" >House Keeping</a>
        </p>
        <p>
          <a  href="" style="text-decoration: none;" class="text-white" >Room Service</a>
        </p>
        <p>
          <a  href="" style="text-decoration: none;" class="text-white" >Friendly Atmosphere</a>
        </p>
        <p>
          <a  href="" style="text-decoration: none;" class="text-white" >24/7 Custamour Service</a>
        </p>
        
      </div>

      <div class="col-md-5 col-lg-3 col-xl-3 mx-auto mt-3 ">

        <h5 class="text-uppercase mb-4 font-weight-bold text-warning ">BRANCHES</h5>
        <p>
          <a  href="" style="text-decoration: none;" class="text-white" >Goa</a>
        </p>
        <p>
          <a  href="" style="text-decoration: none;" class="text-white" >Tamil Nadu</a>
        </p>
        <p>
          <a  href="" style="text-decoration: none;" class="text-white" >Karnataka</a>
        </p>
        <p>
          <a  href="" style="text-decoration: none;" class="text-white" >Delhi</a>
        </p>
        
      </div>

      <div class="col-md-5 col-lg-3 col-xl-3 mx-auto mt-3 ">

        <h5 class="text-uppercase mb-4 font-weight-bold text-warning ">CONTACT INFO</h5>
        <p>  
          <i class="fa fa-location-arrow" aria-hidden="true"></i> 
          <a href="" style="color: white;">India</a>
        </p>
        <p>
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <a href="" style="color: white;">Quickstay@gmail.com</a>
        </p>
        <p>
          <i class="fa fa-phone" aria-hidden="true"></i>
          <a href="" style="color: white;">+91 8122551263</a>
        </p>
        <p>
          <i class="fa fa-print" aria-hidden="true"></i>
          <a href="" style="color: white;">+01 335 633 77</a>
        </p>
        
      </div>
    </div>

    <hr class="mb-4 ">

    <div class="row align-items-center ">

      <div class="col-md-7 col-lg-8 ">
        <p>
          Copyright @2023 All rights reserved by :
          <a href="" style="text-decoration: none;">
            <strong class="text-warning ">www.Quickstay.com</strong>
          </a>
        </p>

      </div>

      <div class="col-md-5 col-lg-4 ">
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline "  id="footer_icons">
            <li class="list-inline-item ">
              <a href="" style="font-size: 23px;" class="btn-floating btn-sm text-white ">
                <img style="border-radius: 50%;" src="./project-assests/facebook-logo-footer.jpg" height="50px" width="50px">    
              </a>
            </li>
            <li class="list-inline-item ">
              <a href="" style="font-size: 23px;" class="btn-floating btn-sm text-white ">
                <img style="border-radius: 50%;" src="./project-assests/Twitter-footer.webp" height="50px" width="50px">    
              </a>
            </li>
            <li class="list-inline-item ">
              <a href="" style="font-size: 23px;" class="btn-floating btn-sm text-white ">
                <img style="border-radius: 50%;" src="./project-assests/pngtree-google-plus-black-footer.amp" height="50px" width="50px">    
              </a>
            </li>
            <li class="list-inline-item ">
              <a href="" style="font-size: 23px;" class="btn-floating btn-sm text-white ">
                <img style="border-radius: 50%;" src="./project-assests/linkedin-logo-icon-social-media-symbol-vector-21679685-footer.jpg" height="50px" width="50px">    
              </a>
            </li>
            <li class="list-inline-item ">
              <a href="" style="font-size: 23px;" class="btn-floating btn-sm text-white ">
                <img style="border-radius: 50%;" src="./project-assests/yt-icon-footer.png" height="50px" width="50px">    
              </a>
            </li>

          </ul>

        </div>

      </div>

    </div>

  </div>

</footer>

<script>

  function changePage(){
    location.href="Rooms.php"
  }
</script>


<!----------------------------------Footer End------------------------------------------------>

    
        
<!------------------------------------- Bootstrap js link ---------------------------------------->
        <script src="./bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!------------------------------------------  ---------------------------------------------->
   <script src="./script.js"></script>
   
</body>
</html>