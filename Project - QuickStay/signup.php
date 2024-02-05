<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
.continre{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    /* background-color: rgb(162, 162, 162); */
}
.box-continer{
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    /* border: 2px solid rgb(129, 128, 128); */
    height: 450px;
    width: 350px;
    align-content: center;
    justify-content: space-evenly;
    background-color: whitesmoke;
    border-radius: 8px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    border: 1px solid white;
    /* box-shadow: 0px 0px 10px rgb(60, 134, 147); */

}

.inbox{
    width: 300px;
    height: 50px;
    border-radius: 5px;
}

.inbox input{
    background-color: rgb(247, 244, 244);
    width: 300px;
    height: 50px;
    border-radius: 5px;
    color: black;
    border: 2px solid rgb(229, 226, 226);
    outline: none;
    padding: 0px 10px;
    
}

.icon{
    position: relative;
    left: 240px;
    bottom: 35px;
    cursor: pointer;
    color: rgb(85, 84, 84);
}

button{
    height: 35px;
    width: 150px;
    outline: none;
    border: none;
    border-radius: 5px;
    color: white;
    background-color: green;
    cursor: pointer;
    font-size: 18px ;
    border: 1px solid white;
}

.btn_div{
    text-align: center;
}

#open{
    display: none;
}
#copen{
    display: none;
}
    </style>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

</head>
<body>
    <div class="continre">
        <div class="box-continer">
        <form method="POST" action="signupsubmited.php">
            <h2 id="Signin">Sign Up</h2>
            <br>
            <div class="inbox">
                <input type="text" name="name" placeholder=" User Name" id="mail">
                <span class="icon" >
                    <!-- <i class="fa fa-envelope" aria-hidden="true"></i> -->
                </span>
        
            </div>
            <br>
            <div class="inbox">
                <input type="password" name="user_password" placeholder=" Create Password" id="pass">
                <span class="icon" onclick="password()" >
                    <i class="fa fa-eye" aria-hidden="true"  id="open"></i>
                    <i class="fa fa-eye-slash" aria-hidden="true" id="close"></i>
                </span>
            </div>
            <br>
            
            <br>
            <!-- <a href="" id="forgot">forgot password</a> -->
            <div class="btn_div">
                <button type="submit"  class="btn">Create account</button><br><br>
                <h3>Already have an account ? <a href="login.php"> Login</a></h3>
            </div>
            </form>
        </div>
    </div>
    <script>

        function verify() {
            var userName = document.getElementById("mail").value;
            var password = document.getElementById("pass").value;
            var confirmPassword = document.getElementById("cpass").value;

            if (password === confirmPassword) {
                document.getElementById("signupForm").submit();
            } else {
                alert("Passwords do not match. Please re-enter.");
            }
        }
        

        function password(){
    var input=document.getElementById("pass")
    var open=document.getElementById("open")
    var close=document.getElementById("close")

    if (input.type=="password") {
        input.type="text"
        open.style.display="block"
        close.style.display="none"
    }else{
        input.type="password"
        open.style.display="none"
        close.style.display="block"

    }
}
function cpassword(){
    var input=document.getElementById("cpass")
    var open=document.getElementById("copen")
    var close=document.getElementById("cclose")

    if (input.type=="password") {
        input.type="text"
        open.style.display="block"
        close.style.display="none"
    }else{
        input.type="password"
        open.style.display="none"
        close.style.display="block"

    }
}
    </script>
    <script src="./script.js"></script>
</body>
</html>