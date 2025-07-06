<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: login.php");
?>
<h2>Welcome, <?= $_SESSION['admin'] ?></h2>
<a href="add_pg.php">Add PG</a>
