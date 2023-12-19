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
      console.log(window.location.search.substring(1));
      var card_title = window.location.search.substring(1);
      console.log(card_title);
      var DATA;
      const fetchDATA = async () => {
        try {
          const response = await fetch("https://jackop125.github.io/wp_data/data.json");
          const jsonData = await response.json();
          // console.log(jsonData);
          DATA = jsonData.filter((item) =>
            card_title.toUpperCase().match(item.title.toUpperCase())
          )[0];
          console.log("DATA value is" + DATA);
          if (DATA == undefined) {
            document.getElementById("container_main").innerHTML += `
        <h1 class="position-absolute text-center fs-1 text-danger" style="top:15rem;width:100vw;">
          404 Page Not Found </h1>`;
          }
        } catch (error) {
          console.error("Error fetching data:", error);
        }
      };
      function renderLocationDetails(DATA) {
        var containerElm = document.getElementById("container_main");
        containerElm.insertAdjacentHTML(
          "afterBegin",
          `<div
        class="row location_backdrop_img"
        style="
          background-image: url('${DATA.images[1]}');
        "
      >
        <div
          class="location_items_container position-absolute row d-flex justify-content-center justify-content-lg-evenly flex-lg-row-reverse"
        >
          <div
            class="col-11 col-lg-5 mt-3 locaton_image"
            style="
              background-image: url('${DATA.images[0]}');
            "
          ></div>
          <div
            class="col-lg-5 mt-3 locaton_info d-flex flex-column justify-content-center"
          >
            <div class="m-1">
              <h1 style="font-size: 6vw">${DATA.title}</h1>
              <p>${DATA.description}</p>
              <a href="#fill_form" class="Explore_more_btn d-inline-block">
                Book Now
                <i class="bi bi-arrow-right-circle"></i>
              </a>
            </div>
          </div>
          <div class="col-11 col-lg-8 mt-lg-4 mt-2" style="background-color:rgb(0, 0, 0);min-height: 4rem;padding:10px 0 0 0;border-radius: 10px;">
              <div class="row text-center">
                <div class="col-4">
                  <h2 class="gradient_heading_1">${DATA.days}</h2>
                  <p style="color:rgb(161, 161, 161)">Days</p>
                </div>
                <div class="col-4">
                  <h2 class="gradient_heading_2">$${DATA.price}</h2>
                  <p style="color:rgb(161, 161, 161)">Price per/person</p>
                </div>
                <div class="col-4">
                  <h2 class="gradient_heading_4">
                    <i class="bi bi-airplane-engines"></i>
                  </h2>
                  <p style="color:rgb(161, 161, 161)">mode</p>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="row m-1">
        <iframe
          src="${DATA.location_url}"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
      <div class="row m-1 text-dark">
        <form action="location_db.php" method="post" class="row m-1 d-flex justify-content-center" id="fill_form">
          <div class="form-floating mb-3 col-12 col-md-4 col-lg-6 ps-2">
            <input
              type="text"
              class="form-control"
              id="floatingInput"
              placeholder="name@example.com"
              name="fullName"
            />
            <label for="floatingInput">Full Name</label>
          </div>
          <div class="form-floating mb-3 col-12 col-md-4 col-lg-6 ps-2">
            <input
              type="email"
              class="form-control"
              id="floatingPassword"
              placeholder="name@example.com"
              name="email"
            />
            <label for="floatingPassword">Email</label>
          </div>
          <div class="form-floating mb-3 col-lg-5 col-6 ps-2">
            <input
              type="number"
              class="form-control"
              id="floatingPassword"
              placeholder="Password"
              name="no_of_peoples"
            />
            <label for="floatingPassword">No of Peoples</label>
          </div>
          <div class="form-floating mb-3 col-lg-5 col-6 ps-2">
            <input
              type="date"
              class="form-control"
              id="floatingPassword"
              placeholder="Password"
              name="starting_date"
            />
            <label for="floatingPassword">Starting Data</label>
          </div>
          <div class="form-floating mb-3 col-lg-2 col-3 ps-2">
            <input
              type="number"
              class="form-control"
              id="floatingInput"
              placeholder="name@example.com"
              value="${DATA.days}"
              name="days"
              
            />
            <label for="floatingInput">Days</label>
          </div>
          <div class="form-floating mb-3 col-lg-2 col-3 ps-2">
            <input
              type="text"
              class="form-control"
              id="floatingInput"
              placeholder="name@example.com"
              value="${DATA.title}"
              name="location"
              
            />
            <label for="floatingInput">Location</label>
          </div>
          <div class="form-floating mb-3 col-lg-2 col-3 ps-2">
            <input
              type="number"
              class="form-control"
              id="floatingPassword"
              placeholder="Password"
              value="${DATA.price}"
              name="price"
              
            />
            <label for="floatingPassword">$ price</label>
          </div>
          <div class="form-floating mb-3 col-lg-2 col-3 ps-2">
            <input
              type="text"
              class="form-control"
              id="floatingPassword"
              placeholder="Password"
              value="Flight"
              name="mode"
              
            />
            <label for="floatingPassword">Mode</label>
          </div>
          <br />
          <div class="col-12">
            <center>
              <input
                type="submit"
                class="btn btn-outline-light col-4"
                value="Book"
                name="location_submit"
              />
            </center>
          </div>
        </form>
      </div>`
        );
      }
      if (card_title == "" || card_title == null) {
        // console.log(card_title);
        document.getElementById("container_main").innerHTML += `
        <h1 class="position-absolute text-center fs-1 text-light" style="top:15rem;width:100vw;">
          404 Page Not Found </h1>`;
      } else {
        fetchDATA().then(() => {
          renderLocationDetails(DATA);
        });
      }
    </script>
  </body>
</html>
