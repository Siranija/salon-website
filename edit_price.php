<?php
include 'config.php';

$id = $_GET['id'];

// Fetch the existing price
$query = "SELECT * FROM prices WHERE id = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $id);
$stmt->execute();
$price = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $service_name = $_POST['service_name'];
    $category = $_POST['category'];
    $price_value = $_POST['price'];

    $query = "UPDATE prices SET service_name = :service_name, category = :category, price = :price WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':service_name', $service_name);
    $stmt->bindParam(':category', $category);
    $stmt->bindParam(':price', $price_value);
    $stmt->bindParam(':id', $id);
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
    <title>Edit Price</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <header>
        <h1>Edit Price</h1>
    </header>

    <form action="edit_price.php?id=<?php echo $id; ?>" method="POST">
        <label for="service_name">Service Name:</label>
        <input type="text" id="service_name" name="service_name" value="<?php echo $price['service_name']; ?>" required><br>

        <label for="category">Category:</label>
        <input type="text" id="category" name="category" value="<?php echo $price['category']; ?>" required><br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" value="<?php echo $price['price']; ?>" required><br>

        <button type="submit">Update Price</button>
    </form>
</body>
</html>
