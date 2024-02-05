<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
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
                    <a class="nav-link  " href="Rooms.php">ROOMS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active " href="#"><b>ABOUT US</b></a>
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


    
<!-----------------------------------Content Start-------------------------------------------->
    

<h1 id="about_h2">About Us</h1>

<div id="aboutus_container" class="container">
  <div class="row">
    <div  class="col-md-6 mb-4 ">
      <img src="https://media.licdn.com/dms/image/C5603AQEJxGBovvQ8OQ/profile-displayphoto-shrink_400_400/0/1565020496907?e=2147483647&v=beta&t=LUUIbq_Q6H9rNMKpQcMJZgKw7AxnR4hJc1pjovd0d2k" class="img-fluid" alt=""  width="500px">
    </div>
    <div class="col-md-6">
    <br><br>
    <h1 style="text-align: center;"> Ritesh Agarwal</h1>
    <br>
    <br>
     <h4 style="word-spacing: 20px;">Homes was founded by Ritesh Agarwal, the first resident Asian to be accepted to the Thiel Fellowship (started by Paypal founder Peter Thiel). Travelling across India at the age of 17, Ritesh stayed in more than 100 bed and breakfasts, guest houses, and hotels to realize there was a massive dearth of affordable and good-quality hotels in the unbranded budget hotel category.</h4>
    </div>
  </div>
</div>

<div id="aboutus_container" class="container">
  <div class="row">
    <div  class="col-md-6 mb-4 ">
      <img src="https://qph.cf2.quoracdn.net/main-thumb-159491302-200-xqizhsxbgsrcgubkqqesvqskxjqbebnt.jpeg" class="img-fluid" alt=""  width="500px">
    </div>
    <div class="col-md-6">
    |<br><br>
    <h1 style="text-align: center;"> Troy Alstead</h1>
    <br>
    <br>
     <h4 style="word-spacing: 20px;">Padma Shri, Khel Ratna & Arjuna Awardee, is India’s first paraplegic woman biker, swimmer, rallyist & India’s first ever female Paralympic medalist. She has continually risen above all odds, while also enabling people with disabilities through her foundation Wheeling Happiness. She also serves as the President of the Paralympic Committee of India and has led the most successful Paralympic Team in Indian history at Tokyo 2020.</h4>
    </div>
  </div>
</div>

<div id="aboutus_container" class="container">
  <div class="row">
    <div  class="col-md-6 mb-4 ">
      <img src="https://i0.wp.com/thatrandomagency.com/wp-content/uploads/2020/05/0.jpg?resize=500%2C500&ssl=1" class="img-fluid" alt=""  width="500px">
    </div>
    <div class="col-md-6">
    <br><br>
    <h1 style="text-align: center;"> Aditya Ghosh</h1>
    <br>
    <br>
     <h4 style="word-spacing: 20px;">Aditya Ghosh is a seasoned business leader with over 22 years of experience. Aditya is currently a member of the Board of Directors at OYO. Most recently, he was the CEO at OYO Hotels & Homes- India & South Asia.Fellowship (started by Paypal founder Peter Thiel). Travelling across India at the age of 17, Ritesh stayed in more than 100 bed and </h4>
    </div>
  </div>
</div>


<!-----------------------------------------ContentEnd------------------------------------------>





<!---------------------------------------- Script Files --------------------------------------->

    <script src="./bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!------------------------------------------  ---------------------------------------------->
<script src="./script.js"></script>
  
</body>
</html>