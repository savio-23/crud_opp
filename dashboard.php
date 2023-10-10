


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Dashboard</title>
</head>
<body>
    <h1>Restaurant Dashboard</h1>

    <!-- Form for adding/updating a dish -->
    <form action="process_dish.php" method="post">
        <input type="hidden" name="id" value="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea><br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required><br>

        <input type="submit" value="Submit">
    </form>

    <!-- Table for displaying dishes -->
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Display dishes here -->
            <!-- ... (inside tbody) -->
<?php
include 'config.php';

$sql = "SELECT * FROM food";
$result = $conn->query($sql);
if ($result->rowCount() > 0){
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        // Do stuff
    }
}

        echo "<tr>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["description"]."</td>";
        echo "<td>".$row["price"]."</td>";
        echo "<td><a href='edit_dish.php?id=".$row["id"]."'>Edit</a> | <a href='delete_dish.php?id=".$row["id"]."'>Delete</a></td>";
        echo "</tr>";
    


$conn->close();
?>

        </tbody>
    </table>
</body>
</html>
