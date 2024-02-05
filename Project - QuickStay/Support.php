<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Page</title>
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
                    <a class="nav-link " aria-current="page" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Rooms.php">ROOMS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.php">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active " href="#"><b>SUPPORT</b></a>
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
    
<!-------------------------------------- Content page start ---------------------------------->



<!-- <div class="container text-center " style="margin-top: 120px;">
        <div class="row  row-cols-1 row-cols-lg-3">
            <div class=" col mb-4  " >

                <div class="support_page">

                <h1>HII</h1>
                                    
                </div>
              
            </div>
            <div class=" col mb-4  ">
                <div class="suppoer_page">
                   
                </div>
  
            </div>
            <div class="col  mb-4 ">
                <div class="support_page">
                                       
                </div>
            </div>
       
        </div>
      </div> -->

<section  class="contact" >
    <div class="content">
        <h2 class="contact_head">Need Help ? QuickStay Support Is Here !</h2>
        <br>
        <p class="head_para">Welcome to QuickStay Support! Your satisfaction is our priority, and we're here to assist you every step of the way..!<br> QuickStay Support is committed to resolving your inquiries promptly and professionally."</p>
    </div>

    <div id="container">
        <div  class="contactInfo">
            <div  class="box">
                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class="text">
                    <h3 class="h3_head">Address</h3>
                    <p>4671 Sugar Camp Road , Delhi</p>
                </div>
            </div>

            <div class="box">
                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <div class="text">
                    <h3  class="h3_head">Phone</h3>
                    <p>+91 8122551263</p>
                </div>
            </div>

            <div class="box">
                <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <div class="text">
                    <h3  class="h3_head">Email</h3>
                    <p>www.Quickstay.com</p>
                </div>
            </div>
        </div>
        <div class="contactForm">
            <form>
                <p class="h2_form">  24/7 Custamour Support</p>
                
                <div class="inputBox">                    
                    <input class="input_box" type="text" name="" required="required">
                    <span class="support_span">Full Name</span>
                </div>
                <br>
                <div class="inputBox">                    
                    <input class="input_box" type="text" name="" required="required">
                    <span class="support_span">Email</span>
                </div>
                <br>
                <div class="inputBox">
                    <textarea class="input_box" required="required"></textarea>
                    <span class="support_span">Type your Message...</span>
                </div>
                <div class="inputBox">
                    <button id="send_btn">Send</button>
                </div>
            </form>
        </div>
    </div>
</section>


<!--------------------------------------- Content page End ---------------------------------->
    





<!---------------------------------------- Script Files --------------------------------------->

    <script src="./bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!------------------------------------------  ---------------------------------------------->
<script src="./script.js"></script>
  
</body>
</html>