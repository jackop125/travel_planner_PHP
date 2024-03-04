<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Database connection
    $conn = mysqli_connect('localhost', 'root', '', 'reglog');

    // Collect form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $no_of_peoples = $_POST['no_of_peoples'];
    $starting_date = $_POST['starting_date'];
    $days = $_POST['days'];
    $price = $_POST['price'];
    $mode = $_POST['mode'];
    $location = $_POST['location'];

    // Insert data into bookings table
    $query = "INSERT INTO bookings (fullname, email, no_of_peoples, starting_date, days, price, mode, location) 
              VALUES ('$fullname', '$email', '$no_of_peoples', '$starting_date', '$days', '$price', '$mode', '$location')";
    mysqli_query($conn, $query);

    // Close connection
    mysqli_close($conn);

    // Redirect to the main page
    header('Location:admin.php');
}
?>
