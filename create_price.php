<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $service_name = $_POST['service_name'];
    $category = $_POST['category'];
    $price = $_POST['price'];

    $query = "INSERT INTO prices (service_name, category, price) VALUES (:service_name, :category, :price)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':service_name', $service_name);
    $stmt->bindParam(':category', $category);
    $stmt->bindParam(':price', $price);
    $stmt->execute();

    header('Location: dashboard.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Price</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <header>
        <h1>Add New Price</h1>
    </header>

    <form action="create_price.php" method="POST">
        <label for="service_name">Service Name:</label>
        <input type="text" id="service_name" name="service_name" required><br>

        <label for="category">Category:</label>
        <input type="text" id="category" name="category" required><br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required><br>

        <button type="submit">Add Price</button>
    </form>
</body>
</html>
