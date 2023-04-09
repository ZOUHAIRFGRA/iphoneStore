<!DOCTYPE html>
<html>

<head>
    <title>iPhone Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php require('header.php')?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <h2 class="text-center mb-4">iPhone Facture</h2>
                <form method="post" action="process_order.php">
                    <div class="form-group">
                        <label for="reference">Reference:</label>
                        <input type="text" class="form-control" id="reference" name="reference" required>
                    </div>
                    <div class="form-group">
                        <label for="model">Model:</label>
                        <select class="form-control" id="model" name="model" required>
                            <option value="">Select Model</option>
                            <option value="iPhone 12">iPhone 12</option>
                            <option value="iPhone 12 Pro">iPhone 12 Pro</option>
                            <option value="iPhone SE">iPhone SE</option>
                            <!-- Add more options for other iPhone models -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="text" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date:</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>