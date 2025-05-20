<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM medicines WHERE id = $id";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No medicine found.";
        exit;
    }
} else {
    echo "Invalid request.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Medical Store Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Edit Medical Store Management Information</h2>
    <form action="update.php" method="POST" enctype="multipart/form-data" class="border p-4 rounded bg-light">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>" required>
        </div>
        
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" id="category" name="category" value="<?php echo $row['category']; ?>">
        </div>

        <div class="mb-3">
            <label for="manufacturer" class="form-label">Manufacturer</label>
            <input type="text" class="form-control" id="manufacturer" name="manufacturer" value="<?php echo $row['manufacturer']; ?>">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="<?php echo $row['price']; ?>" required>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="text" class="form-control" id="quantity" name="quantity" value="<?php echo $row['quantity']; ?>">
        </div>

        <div class="mb-3">
            <label for="expiry_date" class="form-label">Expiry Date</label>
            <input type="date" class="form-control" id="expiry_date" name="expiry_date" value="<?php echo $row['expiry_date']; ?>" required>
        </div>

        <div class="mb-3">
            <label for="batch_number" class="form-label">Batch Number</label>
            <input type="number" class="form-control" id="batch_number" name="batch_number" value="<?php echo $row['batch_number']; ?>">
        </div>

        <div class="mb-3">
            <label for="rack_number" class="form-label">Rack Number</label>
            <input type="text" class="form-control" id="rack_number" name="rack_number" value="<?php echo $row['rack_number']; ?>" required>
        </div>

        <div class="mb-3">
            <label for="added_date" class="form-label">Added Date</label>
            <input type="date" class="form-control" id="added_date" name="added_date" value="<?php echo $row['added_date']; ?>" required>
        </div>

        <div class="mb-3">
            <label for="images" class="form-label">Images</label>
            <input type="file" class="form-control" id="images" name="images">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="index.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
