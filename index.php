<?php
// Include database connection
include('price.php');

// Query to fetch data from the database
$sql = "SELECT service_name, price FROM prices";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    echo "<table class='price-table'>
            <thead>
                <tr>
                    <th>Service</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>";
    
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['service_name'] . "</td>
                <td>" . $row['price'] . "</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
