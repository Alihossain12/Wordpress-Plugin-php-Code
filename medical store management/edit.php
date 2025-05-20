<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM medicines WHERE id = $id";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No student found.";
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
    <title>Edit Medical store Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Edit Medical store Management Information</h2>
    <form action="update.php" method="POST" class="border p-4 rounded bg-light">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>" required>
        </div>
        
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" id="category" name="category" value="<?php echo $row['category']; ?>" >
        </div>

        <div class="mb-3">
            <label for="manufacturer" class="form-label">Manufacturer</label>
            <input type="text" class="form-control" id="manufacturer" name="manufacturer" value="<?php echo $row['manufacturer']; ?>" >
        </div>

        <div class="mb-3">
            <label for="Price" class="form-label">Price</label>
            <input type="number" class="form-control" id="Price" name="Price" value="<?php echo $row['Price']; ?>" required >
        </div>

        <div class="mb-3">
            <label for="Quantity" class="form-label">Quantity</label>
            <input type="text" class="form-control" id="Quantity" name="Quantity" value="<?php echo $row['Quantity']; ?>" >
        </div>

        <div class="mb-3">
            <label for="Expiry_date" class="form-label">Expiry_date</label>
            <input type="date" class="form-control" id="Expiry_date" name="Expiry_date" value="<?php echo $row['Expiry_date']; ?>" required >
        </div>

        <div class="mb-3">
            <label for="Batch_number" class="form-label">Batch_number</label>
            <input type="number" class="form-control" id="Batch_number" name="Batch_number" value="<?php echo $row['Batch_number']; ?>" >
        </div>

        <div class="mb-3">
            <label for="Rack_number" class="form-label">Rack_number</label>
            <input type="text" class="form-control" id="Rack_number" name="Rack_number" value="<?php echo $row['Rack_number']; ?>" required >
        </div>


        <div class="mb-3">
            <label for="Added_date" class="form-label">Added_date</label>
            <input type="date" class="form-control" id="class" name="Added_date" value="<?php echo $row['Added_date']; ?>" required>
        </div>

      <button type="submit" class="btn btn-success">Update</button>
        <a href="index.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html> 