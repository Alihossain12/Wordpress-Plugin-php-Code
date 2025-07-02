<?php
include('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "UPDATE Employee_management SET status = 'trashed' WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error moving to trash: " . mysqli_error($conn);
    }
}
?>
