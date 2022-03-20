<?php
    
    //include('$dbcon.php');
        $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname= "testdb";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

if(isset($_POST['signupbtn'])){
    $email= $_POST ['email'];
    $name= $_POST ['username'];
    $address= $_POST ['address'];
    $phone= $_POST ['phone'];
    $password= $_POST ['password'];
    $insertQ = " INSERT INTO user(username, password, address, email, phone) VALUES ('$name', '$password', '$address', '$email', '$phone')";
    if(mysqli_query($conn, $insertQ)){
        header('Location: search.php');
        //echo("Registered Successfully!<br>");
    }
    else echo("failed<br>");
}

?>