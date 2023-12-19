
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
    <div class="container-fluid" style="position: relative; top: 2rem;min-height:93vh;">
      <h1
          class="col-12 gradient_heading_4 pt-4 text-center"
        >
        <i class="bi bi-headset"></i>
          Contact us
        </h1>
      <div
        class="row mt-5 d-flex justify-content-center"
        style="position: relative; top: 2rem"
      >

        <div class="col-lg-8 col-12">
        <?php
            $msg="";
            if(isset($_GET['error']))
            {
              $msg="Please fill in the blanks";
              echo '<div class="alert alert-danger">'.$msg.'</div>';
            }
            if(isset($_GET['success'])){
              $msg="Your Message Has Been Sent";
              echo '<div class="alert alert-success">'.$msg.'</div>';
            }
      ?>
          <form class="row" action="process.php" method ="post">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Name</label
              >
              <input
                type="text"
                class="form-control"
                name="name"
                id="exampleFormControlInput1"
                placeholder="John Sadler"
              />
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput2" class="form-label"
                >Email address</label
              >
              <input
                type="email"
                class="form-control"
                id="exampleFormControlInput2"
                name="email"
                placeholder="name@example.com"
              />
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput3" class="form-label"
                >Subject</label
              >
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput3"
                name="subject"
              />
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label"
                >Description</label
              >
              <textarea
                class="form-control"
                id="exampleFormControlTextarea1"
                name="description"
                rows="3"
              ></textarea>
            </div>
            <center>
              <input
                type="submit"
                class="btn btn-outline-light"
                value="Submit"
                name="btnsend"
              />
            </center>
          </form>
        </div>
      </div>
    </div>
    <footer
      class="row m-1 text-white text-center"
      style="
        overflow-x: hidden;
        margin: 0;
        width: 100%;
      "
    >
      <div
        class="col-12 mt-5"
        style="background-color: rgb(39, 39, 39); padding: 10px; margin:0px 50px 0px 0px;"
      >
        &copy; 2023 - Travel With US
      </div>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
