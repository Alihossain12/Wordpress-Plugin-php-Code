<?php
include('config.php');

if (isset($_POST['update'])) {
    $id         = $_POST['id'];
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $address    = $_POST['address'];
    $department = $_POST['department'];
    $designation= $_POST['designation'];
    $salary     = $_POST['salary'];
    $status     = $_POST['status'];

    // Check for new image
    $imageName = $_FILES['image']['name'];
    $imageTmp  = $_FILES['image']['tmp_name'];
    $uploadDir = 'uploads/';
    $uploadPath = $uploadDir . basename($imageName);

    if ($imageName) {
        // Delete old image
        $oldImg = mysqli_fetch_assoc(mysqli_query($conn, "SELECT image FROM Employee_management WHERE id = $id"));
        if ($oldImg && file_exists($uploadDir . $oldImg['image'])) {
            unlink($uploadDir . $oldImg['image']);
        }

        move_uploaded_file($imageTmp, $uploadPath);
        $imageSQL = ", image = '$imageName'";
    } else {
        $imageSQL = "";
    }

    $sql = "UPDATE Employee_management SET
            name = '$name',
            email = '$email',
            phone = '$phone',
            address = '$address',
            department = '$department',
            designation = '$designation',
            salary = '$salary',
            status = '$status'
            $imageSQL
            WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>
