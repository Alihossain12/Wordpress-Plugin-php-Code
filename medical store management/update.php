<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id    = $_POST['id'];
    $name  = $_POST['name'];
    $category = $_POST['category'];
    $manufacturer = $_POST['manufacturer'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $expiry_date = $_POST['expiry_date'];
    $batch_number = $_POST['batch_number'];
    $rack_number = $_POST['rack_number'];
    $added_date = $_POST['added_date'];
    $time = date("Y-m-d H:i:s");

    // $sql = "UPDATE students SET name='$name', category='$category', phone='$phone', course='$course', school='$school', class='$class' WHERE id=$id";
      
    $sql = "UPDATE medicines SET name='$name', category='$category', Manufacturer='$Manufacturer', Price='$Price', Quantity='$Quantity', Expiry_date='$Expiry_date', Batch_number='$Batch_number', Rack_number='$Rack_number', Added_date='$Added_date' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php?msg=updated");
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}
?>