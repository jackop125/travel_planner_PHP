<?php
require'config.php';
if(isset($_POST["submit"])){
  $usernameemail=$_POST["usernameemail"];
  $password=$_POST["password"];
  $result=mysqli_query($con1,"SELECT * FROM tb_user WHERE username = '$usernameemail' OR email='$usernameemail'");
  $row=mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result)>0){
    if($password==$row["password"]){
        $_SESSION["login"]=true;
        $_SESSION["id"]=$row["id"];
        header("Location: index.php");
    }
    else{
      echo 
      "<script> alert('Wrong password');</script>";
    }
  }
  else{
    echo 
    "<script> alert('User Not Registered');</script>";
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
          style="position: relative; top:30vh;"
        >
          <div class="col-10 col-md-8 col-lg-5" style="box-shadow: 0px 0px 5px gray;border-radius: 10px;background-color: rgba(0, 0, 0, 0.452);">
            <form action="login.php" method="post">
              <div class="row mt-4">
                  <h3 class="text-center">Login</h3>
                <div class="col-12">
                  
                  <label for="exampleFormControlInput1" class="form-label"
                    >Username or Email</label
                  >
                  <input
                    type="email"
                    class="form-control"
                    name="usernameemail"
                    id="usernameemail"
                    required value=""
                    placeholder="name@example.com"
                  />
                </div>
                <div class="col-12">
                  <label for="inputPassword5" class="form-label"
                    >Password</label
                  >
                  <input
                    type="password"
                    id="password"
                    name="password"
                    class="form-control" 
                    required value=""
                    aria-describedby="passwordHelpBlock"
                  />
                </div>
                
              </div>
              <center>
                <button
                  type="submit"
                  class="btn btn-outline-info mt-2 mb-2"
                  value="Login"
                  name="submit"
                >Login</button>
              </center>
            </form>
            <div class="text-center"> Don't have an Account?- <a href="register.php" class="text-info">Register</a></div>
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
