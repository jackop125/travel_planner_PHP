<?php
require 'config.php'; 

if(isset($_POST["location_submit"])) {
  $fullName=$_POST['fullName'];
  // echo $fullName;
  $email=$_POST['email'];
  $noOfPeoples = $_POST['no_of_peoples'];
  $starting_date = $_POST['starting_date'];
 $days = $_POST['days'];
 $price = $_POST['price'];
 $mode = $_POST['mode'];
 $location = $_POST['location'];
//  INSERT INTO `bookings`(`id`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]')

  $index_query = "INSERT INTO bookings(`fullname`, `email`, `no_of_peoples`, `starting_date`, `days`, `price`, `mode`, `location`) VALUES('$fullName','$email','$noOfPeoples','$starting_date','$days','$price','$mode','$location')";

  $res = mysqli_query($con1,$index_query);
              if($res){
                echo"Booking Successful";
            //   header('location:location.php');
              }else{
                echo "Not inserted";
              }
}

?>