<?php

require_once 'config.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if (!$is_connect) {
    die("Database connection failed.");
}

// Check if book exists and is in trash
$sql = "SELECT status FROM books WHERE id = $id";
$result = mysqli_query($connection, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $book = mysqli_fetch_assoc($result);
    
    if ($book['status'] == 0) {
        // Restore book (set status to 1)
        $restore_sql = "UPDATE books SET status = 1 WHERE id = $id";
        if ($connection->query($restore_sql) === true) {
            header("Location: index.php?message=restored");
            exit;
        } else {
            echo "Error restoring book: " . $connection->error;
        }
    } else {
        // Already active, no need to restore
        header("Location: index.php?message=already_active");
        exit;
    }
} else {
    echo "Book not found.";
}
?>
