<?php
require 'config.php'; 

if(isset($_POST["custom_submit"])) {
  $fullName=$_POST['fullname'];
  // echo $fullName;
  $email=$_POST['email'];
  $contactNo=$_POST['contact_no'];
  $noOfPeoples = $_POST['no_of_people'];
  $days_of_stay = $_POST['days_of_stay'];
  $budget=$_POST['budget'];
  $location=$_POST['location'];
  $description = $_POST['description'];
  echo '<br>Name  ' .$fullName;
  echo '<br>email  ' .$email;
  echo '<br>contact  ' .$contactNo;
  echo '<br>no of people  ' .$noOfPeoples;
  echo '<br>budget  ' .$budget;
  echo '<br>days of stay  ' .$days_of_stay;
  echo '<br>location  ' .$location;
  echo '<br>descrition ' .$description;

  $index_query = "INSERT INTO custom_plan VALUES('$fullName','$email','$contactNo','$noOfPeoples','$days_of_stay','$budget','$location','$description')";

  $res = mysqli_query($con1,$index_query);
              if($res){
                echo"<script> alert('Registration Successful');</script>";
              header('location:index.php');
              }else{
                echo"<script> alert('Not inserted');</script>";
              }
}

?>