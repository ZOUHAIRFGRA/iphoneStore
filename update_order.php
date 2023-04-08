<?php
session_start();

if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header("Location: login.php");
    exit;
}

$servername = "localhost";
$username = "zouhair";
$password = "admin";
$dbname = "iphonedb";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $orderId = $_POST['id'];
    $reference = $_POST['reference'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $date = $_POST['date'];

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("UPDATE order_table SET reference = :reference, model = :model, price = :price, date = :date WHERE id = :id");
        $stmt->bindParam(':reference', $reference);
        $stmt->bindParam(':model', $model);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':id', $orderId);
        $stmt->execute();

        $_SESSION['modified'] = true;
        header("Location: admin.php");
        exit;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}
?>