<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project1";

    $link = new mysqli($hostname, $username, $password, $dbname);

    $name = $_POST["lname"];
    $password = $_POST["lpassword"];

    $query = "select * from new_users where name='$name' and password = '$password'";

    $result = $link->query($query);

    if($result -> num_rows>0){
        header("Location: index.php");
        exit();
        
    }
    else{
        echo ("Invalid User Name or Password");
    }

    $link->close();

?>