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

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->query("SELECT * FROM order_table");
    $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="text-center mt-5">Orders</h2>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Reference</th>
                    <th>Model</th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order) : ?>
                    <tr>
                        <td><?php echo $order['reference']; ?></td>
                        <td><?php echo $order['model']; ?></td>
                        <td><?php echo $order['price']; ?></td>
                        <td><?php echo $order['date']; ?></td>
                        <td>
                            <a href="edit_order.php?id=<?php echo $order['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                            <a href="delete_order.php?id=<?php echo $order['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="text-center">
            <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>
    </div>
</body>

</html>