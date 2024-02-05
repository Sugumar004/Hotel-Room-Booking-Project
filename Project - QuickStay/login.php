<!-- <?php
$db = new mysqli("localhost","root","","project1");
session_start();

?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./index.css">
    <style>
        *{
    margin: 0%;
    padding: 0%;
    box-sizing: border-box;
}

#Signin{
    text-align: center;
    
}

body{
    
    /* background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20201023/pngtree-a-logo-type-pink-neon-background-night-light-advertising-image_432679.jpg'); */
    background-repeat:no-repeat ;
    background-size: cover;
    background-position: center;
    /* opacity: 0.5; */
}

.create_btn_div{
    text-align: center;
}

.continre{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.box-continer{
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    height: 400px;
    width: 340px;
    align-content: center;
    justify-content: space-evenly;
    background-color: whitesmoke;
    border-radius: 8px;
    box-shadow:rgba(0, 0, 0, 0.35) 0px 5px 15px ;
    color: black;
    border: 1px solid white;

}

.inbox{
    width: 300px;
    height: 45px;
    border-radius: 5px;
}

.inbox input{

    width: 300px;
    height: 45px;
    border-radius: 5px;
    border: 2px solid rgb(229, 226, 226);
    outline: none;
    padding: 0px 10px;
    
}

.inbox input:hover{
    box-shadow: 0px 0px 10px rgb(186, 183, 183);

}


.icon{
    position: relative;
    left: 240px;
    bottom: 35px;
    cursor: pointer;
    color: rgb(85, 84, 84);
}

.btn{
    height: 35px;
    width: 300px;
    outline: none;
    border: none;
    border-radius: 5px;
    background-color: blue;
    color: white;
    cursor: pointer;
}

.btn_new{
    text-align: center;
    height: 35px;
    width: 150px;
    outline: none;
    border: none;
    border-radius: 5px;
    background-color: green;
    color: white;
    cursor: pointer;
}

#open{
    display: none;
}
    </style>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</head>
<body>
    <div class="continre">
        <div class="box-continer">
            <h2 id="Signin">Login - Page</h2>
            <!-- <?php
                if(isset($_POST["login"])){
                    $sql = "select * from new_users where name='{$_POST["lname"]}' and password='{$_POST["lpassword"]}'";


                    $res = $db->query($sql);

                    if($res->num_rows>0){
                        $ro = $res->fetch_assoc();
                        $_SESSION["id"] = $ro["id"];
                        $_SESSION["name"] = $ro["name"];

                        echo "<script>window.open('./index.php','_self');</script>";

                    }
                    else {
                        echo "<div>Invalid User Name or Password</div>";
                    }
                }
            ?> -->
            <form method="post" action="./loginpage.php">
                <div class="inbox">
                    <input type="text" name="lname" placeholder=" User Name" id="mail">
                </div>
                <br>
                <div class="inbox">
                    <input type="password" name="lpassword" placeholder="Password" id="pass">
                    <span class="icon" onclick="password()">
                        <i class="fa fa-eye" aria-hidden="true" id="open"></i>
                        <i class="fa fa-eye-slash" aria-hidden="true" id="close"></i>
                    </span>
                </div>
                <br><br>
                <button type="submit" name="login" class="btn">Login</button>
            </form>
            
            <b style="text-align: center;">OR</b>
            
            <div class="create_btn_div">
                <button type="button" onclick="Register()" class="btn_new">Create new account</button>
            </div>    
        </div>
    </div>

    <script>
        function Register() {
            location.href = "signup.php";
        }

        function password() {
            var input = document.getElementById("pass");
            var open = document.getElementById("open");
            var close = document.getElementById("close");

            if (input.type == "password") {
                input.type = "text";
                open.style.display = "block";
                close.style.display = "none";
            } else {
                input.type = "password";
                open.style.display = "none";
                close.style.display = "block";
            }
        }
    </script>
    <script src="./index.js"></script>


    
    
</body>
</html>


