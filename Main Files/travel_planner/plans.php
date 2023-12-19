

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
  <body>
  <?php require 'navbar.php' ?>
    <div class="container-fluid" style="position: relative; top: 2rem">
      <div class="row" style="position: relative; top: 2rem">
        <h1
          class="col-12 gradient_heading_1 mb-5 text-center"
          data-aos="fade-up"
          data-aos-delay="50"
          data-aos-easing="ease-in"
          data-aos-duration="800"
        >
          <i class="bi bi-stars"></i>
          Destinations
          <i class="bi bi-stars"></i>
        </h1>
      </div>
      <div
        class="row m-2 d-flex justify-content-evenly"
        style="overflow-x: hidden"
        id="cards_container"
      ></div>
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
    <script>
      var TravelData;
      const fetchData = async () => {
        try {
          const response = await fetch("https://jackop125.github.io/wp_data/data.json");
          const jsonData = await response.json();
          // console.log(jsonData);
          TravelData = jsonData;
          console.log(TravelData);
        } catch (error) {
          console.error("Error fetching data:", error);
        }
      };
      function renderCards(data) {
        var cardsContainer = document.getElementById("cards_container");
        data.map((item, ind) => {
          cardsContainer.insertAdjacentHTML(
            "beforeend",
            `<a
        href="location.php?${item.title}"
        class="col-12 col-lg-5 Destinations_card"
        data-aos="fade-${ind % 2 == 0 || ind == 0 ? "right" : "left"}"
        data-aos-delay="150"
        data-aos-easing="ease-in"
        data-aos-duration="1000"
      >
        <img
          src="${item.images[0]}"
          alt=" Background"
        />
        <div class="overlay">
          <h2>${item.title}</h2>
          <p class="text-center">${item.description}</p>
        </div>
      </a>`
          );
        });
      }
      fetchData().then(() => {
        renderCards(TravelData);
      });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
