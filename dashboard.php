<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: login.php');
    exit;
}

include 'config.php'; // Database connection

// Fetch prices
$query = "SELECT * FROM prices";
$stmt = $conn->prepare($query);
$stmt->execute();
$prices = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Fetch contact form submissions
$query_contact = "SELECT * FROM contect";
$stmt_contact = $conn->prepare($query_contact);
$stmt_contact->execute();
$contacts = $stmt_contact->fetchAll(PDO::FETCH_ASSOC);

// Fetch review form submissions
$query_review = "SELECT * FROM review";
$stmt_review = $conn->prepare($query_review);
$stmt_review->execute();
$reviews = $stmt_review->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
        <nav>
            <a href="create_price.php">Add Price</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>

    <section>
        <h2>Price List</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Service Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($prices as $price): ?>
                    <tr>
                        <td><?php echo $price['id']; ?></td>
                        <td><?php echo $price['service_name']; ?></td>
                        <td><?php echo $price['category']; ?></td>
                        <td>Rs <?php echo number_format($price['price'], 2); ?></td>
                        <td>
                            <a href="edit_price.php?id=<?php echo $price['id']; ?>">Edit</a>
                            <a href="delete_price.php?id=<?php echo $price['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2>Contact Submissions</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $contact): ?>
                    <tr>
                        <td><?php echo $contact['id']; ?></td>
                        <td><?php echo $contact['name']; ?></td>
                        <td><?php echo $contact['email']; ?></td>
                        <td><?php echo $contact['message']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2>Review Submissions</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>EMAIL</th>
                    <th>Review</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reviews as $review): ?>
                    <tr>
                        <td><?php echo $review['id']; ?></td>
                        <td><?php echo $review['name']; ?></td>
                        <td><?php echo $review['email']; ?></td>
                        <td><?php echo $review['message']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</body>
</html>
