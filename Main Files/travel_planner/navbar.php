<?php
// Place this at the top of your PHP file
ini_set('display_errors', 0);

// Rest of your PHP code
// ...
?>
<div
      class="offcanvas offcanvas-end text-bg-dark"
      tabindex="-1"
      id="offcanvasRight"
      aria-labelledby="offcanvasRightLabel"
    >
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Menu</h5>
        <button
          style="background-color: white"
          type="button"
          class="btn-close"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a
              class="nav-link fw-semibold gradient_heading_1"
              aria-current="page"
              href="./index.php"
              >Home</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold text-white" href="./plans.php"
              >Pricing & Plans</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold text-white" href="./aboutus.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold text-white" href="./contactus.php">Contact us</a>
          </li>
        </ul>
        <?php if($_SESSION["id"]){
           ?>
           <form action="logout.php" method="post">
            <input type="submit" class="btn pill-btn btn-outline-light" value="LOGOUT">
           </form>
           
           <?php }else{

           ?><a href="login.php"class="btn" type="submit">Login</a> &nbsp;
           <a href="register.php" class="btn pill-btn btn-outline-light" type="submit">
             Register
           </a><?php }?>
      </div>
    </div>
    <!-- navigation bar Starts Here  -->
    <nav
      style="position: absolute; width: 100%"
      class="navbar navbar-expand-lg nav_background_color"
      data-bs-theme="dark"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Travel With US</a>
        <button
          class="btn-outline-light navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasRight"
          aria-controls="offcanvasRight"
        >
          <i class="bi bi-list"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link fw-semibold gradient_heading_1"
                aria-current="page"
                href="index.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link fw-semibold text-white" href="./plans.php"
                >Pricing & Plans</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link fw-semibold text-white" href="./aboutus.php">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-semibold text-white" href="./contactus.php">Contact us</a>
            </li>
          </ul>
          <!-- <form class="d-flex" role="search"> -->
          <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
           <?php if($_SESSION["id"]){
           ?>
           <form action="logout.php" method="post">
            <input type="submit" class="btn pill-btn btn-outline-light" value="LOGOUT">
           </form>
           
           <?php }else{

           ?><a href="login.php"class="btn" type="submit">Login</a> &nbsp;
           <a href="register.php"class="btn pill-btn btn-outline-light" type="submit">
             Register
           </a><?php }?>
          <!-- </form> -->
        </div>
      </div>
    </nav>