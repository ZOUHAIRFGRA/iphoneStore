<!DOCTYPE html>
<html>

<head>
    <title>Order Success</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <div class="alert alert-success">
            <h5>Order with reference <span id="orderRef"><?php echo isset($_POST['reference']) ? $_POST['reference'] : ''; ?></span> is ordered successfully.</h5>
            <p>Order Details:</p>
            <ul>
                <li>Model: <?php echo $_POST['model'] ?></li>
                <li>Price: <?php echo $_POST['price'] ?></li>
                <li>Date: <?php echo $_POST['date']?></li>
                <?php echo $reference ?>
            </ul>
        </div>
    </div>
</body>

</html>