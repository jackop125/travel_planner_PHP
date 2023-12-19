
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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="indexstyle.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <script defer src="bootstrap/js/bootstrap.bundle.min.js"></script>
  </head>
  <body style="min-height: 100vh;">
  <?php require 'navbar.php' ?>
    <div class="container-fluid" style="position: relative; top: 2rem;min-height:100vh;">
      <h1
          class="col-12 gradient_heading_2 pt-4 ms-md-5"
        >
        <i class="bi bi-code-slash"></i>
          About us
        </h1>
        <hr>
      <div
        class="row mt-5 d-flex justify-content-center"
        style="position: relative; top: 2rem"
      >
      <div class="col-md-10 col-12">
        <h6 class="gradient_heading_4">Welcome to "Travel With Us" – Your Gateway to Unforgettable Journeys!</h6>
        <p>
            At Travel With Us, we understand that the journey is just as important as the destination. We are your dedicated travel companion, committed to turning your travel dreams into seamless and extraordinary experiences. With a passion for exploration and a commitment to personalized service, we strive to redefine the way you plan and embark on your adventures
        </p>
        <h6 class="gradient_heading_3">Who We Are:</h6>
        <p>
            Travel With Us is not just a travel planner; we are your trusted partner in creating memories that last a lifetime. Our team comprises avid travelers, seasoned experts in the travel industry, and technology enthusiasts, all working together to craft the perfect getaway for you.
        </p>
        <h6 class="gradient_heading_2">Our Mission:</h6>
        <p>
            Our mission is to inspire and facilitate travel by offering a comprehensive platform that seamlessly integrates planning, booking, and personalized recommendations. We aim to make travel accessible, enjoyable, and tailored to your unique preferences.
        </p>
      </div>
        
      </div>
    </div>
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
  <footer
      class="row m-1 text-white text-center"
      style="
        overflow-x: hidden;
        margin: 0;
        width: 100%;
      "
    >
      <div
        class="col-12"
        style="background-color: rgb(39, 39, 39); padding: 10px; margin: 0"
      >
        &copy; 2023 - Travel With US
      </div>
    </footer>
</html>
