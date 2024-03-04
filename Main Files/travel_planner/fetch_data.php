<?php
// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'reglog');

// Fetch data from the bookings table
$query = "SELECT * FROM bookings";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    echo "<td>{$row['fullname']}</td>";
    echo "<td>{$row['email']}</td>";
    echo "<td>{$row['no_of_peoples']}</td>";
    echo "<td>{$row['starting_date']}</td>";
    echo "<td>{$row['days']}</td>";
    echo "<td>{$row['price']}</td>";
    echo "<td>{$row['mode']}</td>";
    echo "<td>{$row['location']}</td>";
    echo "<td>
              <a href='update.php?id={$row['id']}'>Update</a> |
              <a href='delete.php?id={$row['id']}'>Delete</a>
          </td>";
    echo "</tr>";
}

// Close connection
mysqli_close($conn);
?>
