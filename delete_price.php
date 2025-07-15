<?php
include 'config.php';

$id = $_GET['id'];

$query = "DELETE FROM prices WHERE id = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $id);
$stmt->execute();

header('Location: dashboard.php');
exit;
