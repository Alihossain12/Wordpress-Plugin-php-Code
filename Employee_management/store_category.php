<?php
include('config.php');

if (isset($_POST['submit'])) {
    $name        = $_POST['name'];
    $email       = $_POST['email'];
    $phone       = $_POST['phone'];
    $address     = $_POST['address'];
    $department  = $_POST['department'];
    $designation = $_POST['designation'];
    $salary      = $_POST['salary'];
    $status      = $_POST['status'];

    // Image Upload
    $imageName = $_FILES['image']['name'];
    $imageTmp  = $_FILES['image']['tmp_name'];
    $uploadDir = 'uploads/';
    $uploadPath = $uploadDir . basename($imageName);

    if (move_uploaded_file($imageTmp, $uploadPath)) {
        $sql = "INSERT INTO Employee_management (name, email, phone, address, department, designation, salary, image, status)
                VALUES ('$name', '$email', '$phone', '$address', '$department', '$designation', '$salary', '$imageName', '$status')";

        if (mysqli_query($conn, $sql)) {
            echo "Employee added successfully.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Failed to upload image.";
    }
}
?>
