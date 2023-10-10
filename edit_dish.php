<?php
include 'config.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM food WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $id = $row['id'];
        $name = $row['name'];
        $description = $row['description'];
        $price = $row['price'];
    } else {
        echo "No records found";
        exit();
    }
} else {
    echo "Invalid request";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dish</title>
</head>
<body>
    <h1>Edit Dish</h1>

    <form action="process_dish.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>" required><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description"><?php echo $description; ?></textarea><br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" value="<?php echo $price; ?>" required><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>
