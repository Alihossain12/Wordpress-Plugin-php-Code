<?php include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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


    $category = $_POST['category'];
    $manufacturer = $_POST['manufacturer'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $expiry_date = $_POST['expiry_date'];
    $batch_number = $_POST['batch_number'];
    $rack_number = $_POST['rack_number'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Medical-store-Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'form.php';?>
 </body>
</html>



