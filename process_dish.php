<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = $_POST['id'];
        $sql = "UPDATE food SET name='$name', description='$description', price='$price' WHERE id=$id";
    } else {
        $sql = "INSERT INTO food (name, description, price) VALUES ('$name', '$description', '$price')";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
header("Location: dashboard.php");
?>
