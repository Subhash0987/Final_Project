<?php
session_start();
include 'db.php';

// Optional: Check if admin is logged in
// if (!isset($_SESSION['admin'])) {
//     header("Location: login.php");
//     exit();
// }

// Fetch PG list from database
$sql = "SELECT * FROM pg_list";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard - PG Finder</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }

    header {
      background-color: #343a40;
      color: white;
      padding: 20px;
      text-align: center;
    }

    .container {
      max-width: 1000px;
      margin: 30px auto;
      background: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 12px;
      border-bottom: 1px solid #ddd;
      text-align: left;
    }

    th {
      background-color: #007BFF;
      color: white;
    }

    .logout {
      text-align: right;
      margin-top: -40px;
    }

    .logout a {
      color: #fff;
      background: red;
      padding: 8px 12px;
      text-decoration: none;
      border-radius: 5px;
    }

    .add-btn {
      display: inline-block;
      margin-bottom: 15px;
      padding: 10px 15px;
      background: #28a745;
      color: white;
      text-decoration: none;
      border-radius: 5px;
    }

    .add-btn:hover {
      background: #218838;
    }
  </style>
</head>
<body>

<header>
  <h1>Admin Dashboard</h1>
  <div class="logout">
    <a href="logout.php">Logout</a>
  </div>
</header>

<div class="container">
  <a class="add-btn" href="add_pg.php">+ Add New PG</a>

  <h2>PG Listings</h2>
  <table>
    <tr>
      <th>ID</th>
      <th>PG Name</th>
      <th>Location</th>
      <th>Price</th>
      <th>Description</th>
      <th>Image</th>
    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['location']}</td>";
        echo "<td>₹{$row['price_per_month']}</td>";
        echo "<td>{$row['description']}</td>";
        echo "<td><img src='uploads/{$row['image']}' width='80' height='60'></td>";
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='6'>No PG found.</td></tr>";
    }
    ?>
  </table>
</div>

</body>
</html>
