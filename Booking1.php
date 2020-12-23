<html>
<head>
        <style>
    .head{
        padding: 15px 16px;
        background-color: #359dc741;
      }
      .apper
    {
        padding:35px 35px;
    }
      </style>
    </head>
<body>
<div class="head">
 <center><b><font style="color:red;font-size:35px;">ONLINE APPOINTMENT</font></b></center>
 <p style="text-align:right"><b>Timings:8:00.AM - 9:00.PM</b></p>
  </div>

<?php
$Doctor_name="Shiva";
$Patient_Name=$_REQUEST['Patient_Name'];
$Age=$_POST['Age'];
$Mobile_Number=$_POST['Mobile_Number'];
$conn = new mysqli('localhost','root','','mahesh');
if($conn->connect_error)
{
    die('Connection failed : '.$conn->connect_error);
}
else
{

    $stmt = $conn->prepare("insert into Booking(Doctor_Name,Patient_Name,Age,Mobile_Number) 
            values(?,?,?,?)");
    $stmt->bind_param("ssid",$Doctor_name,$Patient_Name,$Age,$Mobile_Number);
    $stmt->execute();
    echo "<div class=appear><center><b><font style=color:red;font-size:25px;>Appointment Booked Sucessfully</font></b></center></div>";
    $stmt->close();
    $conn->close();
}
?>
</body>
</html>