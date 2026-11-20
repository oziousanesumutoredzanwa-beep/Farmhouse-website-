<?php
$db = new mysqli("localhost", "root", "", "farmhouse");
if ($db->connect_error) {
  die("Could not connect to the database.");
}

$stmt = $db->prepare("INSERT INTO bookings (name, email, checkin, checkout, guests) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $_POST["name"], $_POST["email"], $_POST["checkin"], $_POST["checkout"], $_POST["guests"]);
$stmt->execute();

echo "Thank you! Your booking was saved. <a href='index.html'>Back to Home</a>";
?>
