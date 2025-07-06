<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM pg_list");
while ($row = mysqli_fetch_assoc($result)) {
  echo "<div class='pg-box'>
          <img src='uploads/{$row['image']}' width='200'>
          <h2>{$row['name']}</h2>
          <p>{$row['location']} - ₹{$row['price_per_month']}/month</p>
          <p>{$row['description']}</p>
          <a href='book.php?id={$row['id']}'>Book Now</a>
        </div>";
}
?>
