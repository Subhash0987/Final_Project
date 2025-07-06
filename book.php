<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pg_id = $_POST['pg_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO bookings (pg_id, name, email, phone, message)
            VALUES ('$pg_id', '$name', '$email', '$phone', '$message')";
    mysqli_query($conn, $sql);
    echo "Booking successful!";
    exit;
}
$pg_id = $_GET['id'];
?>
<style>
  body {
    background: 
      linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
      url('images/background.jpg') no-repeat center center fixed;
    background-size: cover;
    min-height: 100vh;
    font-family: 'Segoe UI', Arial, sans-serif;
  }
  form {
    background: rgba(255,255,255,0.92);
    padding: 32px 24px;
    border-radius: 12px;
    max-width: 400px;
    margin: 60px auto;
    box-shadow: 0 4px 24px rgba(0,0,0,0.10);
  }
  input, textarea {
    width: 100%;
    margin-bottom: 14px;
    padding: 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
    font-size: 16px;
  }
  button {
    background: #28a745;
    color: #fff;
    border: none;
    padding: 12px 24px;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.2s;
  }
  button:hover {
    background: #218838;
  }
</style>
<form method="post">
  <input type="hidden" name="pg_id" value="<?= $pg_id ?>">
  <input name="name" placeholder="Your Name" required><br>
  <input name="email" placeholder="Email" required><br>
  <input name="phone" placeholder="Phone" required><br>
  <textarea name="message" placeholder="Message"></textarea><br>
  <button type="submit">Book</button>
</form>
