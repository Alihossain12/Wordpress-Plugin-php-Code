<?php
include('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete image file first
    $imageQuery = mysqli_query($conn, "SELECT image FROM Employee_management WHERE id = $id");
    $imageRow = mysqli_fetch_assoc($imageQuery);
    if ($imageRow && file_exists("uploads/" . $imageRow['image'])) {
        unlink("uploads/" . $imageRow['image']);
    }

    // Then delete the record
    $sql = "DELETE FROM Employee_management WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error deleting employee: " . mysqli_error($conn);
    }
}
?>
