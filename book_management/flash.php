


<?php

require_once 'config.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if (!$is_connect) {
    die("Database connection failed.");
}

// First, check current status of the book
$sql = "SELECT status FROM books WHERE id = $id";
$result = mysqli_query($connection, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $book = mysqli_fetch_assoc($result);
    
    if ($book['status'] == 1) {
        // Soft delete: move to trash
        $sql = "UPDATE books SET status = 0 WHERE id = $id";
        if ($connection->query($sql) === true) {
            header("Location: index.php?message=trashed");
            exit;
        } else {
            echo "Error trashing book: " . $connection->error;
        }
    } else {
        // Permanent delete
        $sql = "DELETE FROM books WHERE id = $id";
        if ($connection->query($sql) === true) {
            header("Location: trash.php?message=deleted");
            exit;
        } else {
            echo "Error deleting book: " . $connection->error;
        }
    }
} else {
    echo "Book not found.";
}
?>
