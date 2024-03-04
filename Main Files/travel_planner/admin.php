
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
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
    <br>
    <div style="position:relative;top:2rem;widht:100%;">

    <h2 class="text-center">User Details</h2>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>No. of People</th>
                <th>Starting Date</th>
                <th>Days</th>
                <th>Price</th>
                <th>Mode</th>
                <th>Location</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php include('fetch_data.php'); ?>
        </tbody>
    </table>
    <h2 class="text-center">Add User</h2>
    <div class="row m-1">
    <form action="insert_data.php" method="post">
        <div class="row">
        <div class="col-lg-4 col-12 col-md-6">
        <label for="fullname">Full Name:</label>
        <input type="text" name="fullname" required class="form-control" aria-label="First name">
        </div>
        <div class="col-lg-4 col-12 col-md-6">
        <label for="email">Email:</label>
        <input type="email" name="email" required class="form-control" aria-label="First name">
        </div>
        <div class="col-lg-4 col-12 col-md-6">
        <label for="no_of_peoples">No. of People:</label>
        <input type="number" name="no_of_peoples" required class="form-control" aria-label="First name">
        </div>
        <div class="col-lg-4 col-12 col-md-6">
        <label for="starting_date">Starting Date:</label>
        <input type="date" name="starting_date" required class="form-control" aria-label="First name">
        </div>
        <div class="col-lg-4 col-12 col-md-6">
        <label for="days">Days:</label>
        <input type="number" name="days" required class="form-control" aria-label="First name">
        </div>
        <div class="col-lg-4 col-12 col-md-6">
        <label for="price">Price:</label>
        <input type="number" name="price" required class="form-control" aria-label="First name">
        </div>
        <div class="col-lg-4 col-12 col-md-6">
        <label for="mode">Mode:</label>
        <input type="text" name="mode" required class="form-control" aria-label="First name">
        </div>
        
        <div class="col-lg-4 col-12 col-md-6">
        <label for="location">Location:</label>
        <input type="text" name="location" required class="form-control" aria-label="First name">
        </div>
        
        
        
        
        
        
        
        <button type="submit" class="btn btn-primary m-2 col-2">Add User</button>
        </div>
    </form>
    </div>

    </div>

</body>
</html>
