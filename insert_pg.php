<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $location = $_POST['location'];
    $price = $_POST['price_per_month'];
    $desc = $_POST['description'];

    // Handle Image Upload
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $upload_dir = "uploads/";

    // Move image to uploads/ folder
    move_uploaded_file($tmp_name, $upload_dir . $image);

    // Insert into database
    $sql = "INSERT INTO pg_list (name, location, price_per_month, description, image) 
            VALUES ('$name', '$location', '$price', '$desc', '$image')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('PG added successfully!');
                window.location.href = 'admin_dashboard.php';
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
