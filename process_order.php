<?php
$servername = "localhost";
$username = "zouhair";
$password = "admin";
$dbname = "iphonedb";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $reference = $_POST['reference'];
  $model = $_POST['model'];
  $price = $_POST['price'];
  $date = $_POST['date'];

  $stmt = $conn->prepare("INSERT INTO order_table (reference, model, price, date) VALUES (:reference, :model, :price, :date)");
  $stmt->bindParam(':reference', $reference);
  $stmt->bindParam(':model', $model);
  $stmt->bindParam(':price', $price);
  $stmt->bindParam(':date', $date);
  $stmt->execute();

  header("Location: success.php");
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>
