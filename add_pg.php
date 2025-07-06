<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add New PG - Admin</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: Arial;
      background: #f5f5f5;
      padding: 30px;
    }

    .form-container {
      background: #fff;
      padding: 25px;
      max-width: 500px;
      margin: auto;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin: 10px 0 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      background: #28a745;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background: #218838;
    }

    h2 {
      text-align: center;
    }

    .back-link {
      text-align: center;
      margin-top: 10px;
    }
  </style>
</head>
<body>

<div class="form-container">
  <h2>Add New PG</h2>
  <form action="insert_pg.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="PG Name" required>
    <input type="text" name="location" placeholder="Location" required>
    <input type="number" name="price_per_month" placeholder="Monthly Price" required>
    <textarea name="description" placeholder="Description" rows="4" required></textarea>
    <input type="file" name="image" accept="image/*" required>
    <button type="submit" name="submit">Add PG</button>
  </form>

  <div class="back-link">
    <a href="admin_dashboard.php">⬅ Back to Dashboard</a>
  </div>
</div>

</body>
</html>
