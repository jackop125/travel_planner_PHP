<?php
// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'reglog');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Get the ID from the URL
    $id = $_GET['id'];

    // Delete data from the userdetails table
    $query = "DELETE FROM bookings WHERE id = $id";
    mysqli_query($conn, $query);

    // Close connection
    mysqli_close($conn);

    // Redirect to the main page
    header('Location:admin.php');
}
?>
