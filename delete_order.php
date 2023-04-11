<?php
//  session start
session_start();
// config connection
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header("Location: login.php");
    exit;
}

$servername = "localhost";
$username = "zouhair";
$password = "admin";
$dbname = "iphonedb";

if (isset($_GET['id'])) {
    $orderId = $_GET['id'];

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("DELETE FROM order_table WHERE id = :id");
        $stmt->bindParam(':id', $orderId);
        $stmt->execute();

        $_SESSION['deleted'] = true;
        header("Location: admin.php");
        exit;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}
?>
