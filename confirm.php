<?php
    session_start();
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
    // echo $_SESSION["email"];
    $_SESSION["bus_id"]=$_POST["bus_id"];
    // echo $_SESSION["bus_id"];
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: serif, Helvetica, sans-serif;
  background-image: url(background.jpg);
  background-color: #cccccc;
}

/* Full-width input fields */
input[type=text], input[type=password] {
 padding-top:50px;
padding-right:50px;
padding-bottom:50px;
padding-left:50px;
margin:8% auto 0;
text-align:center;
  /*width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;*/
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 10px 24px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
display:inline-block
font-size:10px
}
.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 24px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 10px;
}

span.psw {
  float: right;
  padding-top: 10px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
 
  padding-top:50px;
padding-right:50px;
padding-bottom:50px;
padding-left:50px;
margin:8% auto 0;
text-align:center;
}

/* Modal Content/Box */
.modal-content {
  
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 50%;
  }
}
</style>
</head>
<body>

<h2 style="margin-left:auto;margin-right:auto;display:block;margin-top:22%;margin-bottom:0%;text-align:center;">"Press enter button for confirmation of your booking!"</h2>

<button onclick="window.location.href = 'ticket_insert.php';" style="margin-left:auto;margin-right:auto;display:block;margin-top:2%;margin-bottom:0%">Enter to confirm!</button>
<button onclick="window.location.href = 'search.php';" style="margin-left:auto;margin-right:auto;display:block;margin-top:.5%;margin-bottom:0%" class= "button button3">CANCEL</button>
<div id="id01" class="modal">
    
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>
