<table style="width:70%">
<?php
    //Ob_start();
    session_start();
    //include('/$dbcon.php');
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
    $email=$_SESSION["email"];
    $ticket_id= $_POST ['ticket_id_no'];
    // echo $ticket_id;
    $sql=mysqli_query($conn,"DELETE from ticket WHERE ticket_id='$ticket_id'") or die ("Failed to query database".mysqli_error($conn));
        $sql=mysqli_query($conn, "SELECT * from ticket,bus_info where ticket.passenger_email='$email' and ticket.bus_id=bus_info.bus_id") or die ("Failed to query database".mysqli_error($conn));
    $row= mysqli_fetch_array($sql);
    
//     $h1= "Ticket ID";
//     $h2= "Bus ID";
//     $h3= "Passenger Email";
//     $h4= "Date";
//     $h5= "Seats";
//     $h6= "Total Fare";
//     $h7= "Starting Location";
//     $h8= "Destination";
    
//     echo "<tr><th>".$h1."</th><th>".$h2."</th><th>".$h3."</th><th>".$h4."</th><th>".$h5."</th><th>".$h6."</th><th>".$h7."</th><th>".$h8."</th></tr>"; 
    
//     while($row = mysqli_fetch_array($sql)){
// 	    echo
//             "<tr><td>".$row["ticket_id"]."</td><td>".$row["bus_id"]."</td><td>".$row["passenger_email"]."</td><td>".$row["date"]."</td><td>".$row["seats"]."</td><td>".$row["total_fare"]."</td><td>".$row["starting_location"]."</td><td>".$row["destination"]."</td></tr>";
// 	}
?>
</table>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("http://imagine-mexico.com/official-id-now-required-on-long-distance-bus-trips-in-mexico/");
  background-color: #cccccc;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
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
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
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
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
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
     width: 100%;
  }
}
</style>
</head>
<body>

<h2 style="margin-left:auto;margin-right:auto;display:block;margin-top:5%;margin-bottom:0%;text-align:center;">You have successfully deleted.</h2>

<h2 style="margin-left:auto;margin-right:auto;display:block;margin-top:2%;margin-bottom:0%;text-align:center;">"Press Enter for booking another bus!"</h2>


<button onclick="window.location.href = 'search.php';" style="margin-left:auto;margin-right:auto;display:block;margin-top:2%;margin-bottom:0%">Search best buses for you!</button>

<button onclick="window.location.href = 'mybooking.php';" style="margin-left:auto;margin-right:auto;display:block;margin-top:2%;margin-bottom:0%">Back to previous menu!</button>

<div id="id01" class="modal">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
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