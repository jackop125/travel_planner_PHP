

<?php 
  require 'config.php';
  if(!empty($_SESSION["id"])){
    $id= $_SESSION["id"];
    $result=mysqli_query($con1,"SELECT * FROM tb_user WHERE id = $id");
    $row=mysqli_fetch_assoc($result);
  }
  else{
    header("Location:login.php");
  }
?>
<?php
// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'reglog');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Get the ID from the URL
    $id = $_GET['id'];

    // Fetch data based on ID
    $query = "SELECT * FROM bookings WHERE id = $id";
    $result = mysqli_query($conn, $query);

    // Fetch the existing data
    $row = mysqli_fetch_assoc($result);

    // Close connection
    mysqli_close($conn);
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $no_of_peoples = $_POST['no_of_peoples'];
    $starting_date = $_POST['starting_date'];
    $days = $_POST['days'];
    $price = $_POST['price'];
    $mode = $_POST['mode'];
    $location = $_POST['location'];

    // Update data in the userdetails table
    $query = "UPDATE bookings 
              SET fullname='$fullname', email='$email', no_of_peoples='$no_of_peoples', 
                  starting_date='$starting_date', days='$days', price='$price', mode='$mode', location='$location' 
              WHERE id = $id";
    mysqli_query($conn, $query);

    // Close connection
    mysqli_close($conn);

    // Redirect to the main page
    header('Location:admin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="indexstyle.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <script defer src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php require('navbar.php')?>
    <div class="container-fluid" style="position:relative;top:4rem;">
    <h2 class="text-center">Update User</h2>
    <form action="update.php" method="post">
        <div class="row">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="col-lg-4 col-12 col-md-6" >
        <label for="fullname">Full Name:</label>
        <input type="text" name="fullname" value="<?php echo $row['fullname']; ?>" required class="form-control" aria-label="First name" >
        </div>
        <div class="col-lg-4 col-12 col-md-6" >
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required class="form-control" aria-label="First name">
        </div>
        <div class="col-lg-4 col-12 col-md-6" >
        <label for="no_of_peoples">No. of People:</label>
        <input type="number" name="no_of_peoples" value="<?php echo $row['no_of_peoples']; ?>" required class="form-control" aria-label="First name">
        </div>
        <div class="col-lg-4 col-12 col-md-6" >
        <label for="starting_date">Starting Date:</label>
        <input type="date" name="starting_date" value="<?php echo $row['starting_date']; ?>" required class="form-control" aria-label="First name">
         </div>
        <div class="col-lg-4 col-12 col-md-6" >
        <label for="days">Days:</label>
        <input type="number" name="days" value="<?php echo $row['days']; ?>" required class="form-control" aria-label="First name">
         </div>
        <div class="col-lg-4 col-12 col-md-6" >
        <label for="price">Price:</label>
        <input type="number" name="price" value="<?php echo $row['price']; ?>" required class="form-control" aria-label="First name">
       </div>
        <div class="col-lg-4 col-12 col-md-6" >
        <label for="mode">Mode:</label>
        <input type="text" name="mode" value="<?php echo $row['mode']; ?>" required class="form-control" aria-label="First name">
         </div>
        <div class="col-lg-4 col-12 col-md-6" >
        <label for="location">Location:</label>
        <input type="text" name="location" value="<?php echo $row['location']; ?>" required class="form-control" aria-label="First name">
         </div>





       <div class="row m-2">
       <center><button type="submit" class="btn btn-primary col-2">Update User</button></center>
       </div>
</div>
    </form></div>
</body>
</html>
