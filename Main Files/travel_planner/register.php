<?php 
require 'config.php';
        if (isset($_POST["submit"])) {
           $name = $_POST["name"];
           $username=$_POST["username"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $confirmpassword = $_POST["confirmpassword"];
           $duplicate=mysqli_query($con1,"SELECT * FROM tb_user WHERE username = '$username' OR email = '$email' ");
           if(empty($name) || empty($username) || empty($email) || empty($password)|| empty($confirmpassword)){
            header('location:register.php?error');
           }
           else{
            if($password==$confirmpassword){
              $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
              mysqli_query($con1,$query);
              echo 
              "<script> alert('Registration Successful');</script>";
            }
            else{
              echo 
              "<script> alert('Password does not match');</script>";
            }
           }

          }   
        ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="indexstyle.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <script defer src="bootstrap/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>

  <?php require 'navbar.php' ?>
    <div class="container-fluid main_container" id="container_main">
      <div class="landing_page_background">
        
        <div
          class="row d-flex justify-content-center"
          style="position: relative; top: 5rem;"
        >
          <div class="col-10 col-md-8 col-lg-6" style="box-shadow: 0px 0px 5px gray;border-radius: 10px;background-color: rgba(0, 0, 0, 0.452);">
            
            <form action="register.php" method="post" >
              <div class="row mt-4">
                <div class="col-12">
                  <h3 class="text-center">Register</h3>
                  <?php
            $msg="";
            if(isset($_GET['error']))
            {
              $msg="Please fill in the blanks";
              echo '<div class="alert alert-danger">'.$msg.'</div>';
            }
            ?>
                  <label for="exampleFormControlInput1" class="form-label"
                    >Name</label
                  >
                  <input
                    class="form-control"
                    type="text"
                    id="name"
                    placeholder="John Sadler"
                    aria-label="default input example"
                    name="name"
                  />
                </div>
                <div class="col-12">
                  <label for="username" class="form-label"
                    >Username</label
                  >
                  <input
                    type="text"
                    id="username"
                    class="form-control"
                    name="username"
                    placeholder="John_Sadler"
                    aria-label="default input example"
                  />
                <div class="col-12">
                  <label for="exampleFormControlInput1" class="form-label" 
                    >Email address</label
                  >
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    placeholder="name@example.com"
                    name="email"
                  />
                </div>
                <div class="col-12">
                  <label for="inputPassword5" class="form-label"
                    >Password</label
                  >
                  <input
                    type="password"
                    id="password"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                    name="password"
                  />
                </div>
                <div class="col-12">
                  <label for="inputPassword6" class="form-label"
                    >Confirm Password</label
                  >
                  <input
                    type="password"
                    id="confirmpassword"
                    class="form-control"
                    aria-describedby="passwordHelpBlock"
                    name="confirmpassword"
                  />
                  <div id="passwordHelpBlock" class="form-text text-white">
                    Your password must be 8-20 characters long,
                  </div>
                  
                </div>
              </div>
                <center>
                  <button
                  type="submit"
                  class="btn btn-outline-info mt-2 mb-2 col-2"
                  value="Register"
                  name="submit"
                >Register</button>
                </center>
            </form>
            <div class="text-center"> Already have an Account?- <a href="login.php" class="text-info">Login</a></div>
          </div>
        </div>
      </div>
    </div>
    <footer
      class="row m-1 text-white text-center"
      style="
        overflow-x: hidden;
        margin: 0;
        position: relative;
        left: 0;
        bottom: 0;
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
  </body>
</html>
