<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Medical store Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="d-flex justify-content-between mb-3">
        <h2>Medical store Management</h2>
        <a href="add.php" class="btn btn-success"> Add Medicen</a>
    </div>

    <table id="studentTable" class="table table-bordered table-hover">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Manufacturer</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Expiry_date</th>
			<th>Batch_number</th>
			<th>Rack_number</th>
			<th>Added_date</th>
			<th>Time</th>
		    <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $result = $conn->query("SELECT * FROM medicines");
        while ($row = $result->fetch_assoc()):
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['category'] ?></td>
            <td><?= $row['manufacturer'] ?></td>
            <td><?= $row['price'] ?></td>
            <td><?= $row['quantity'] ?></td>
            <td><?= $row['expiry_date'] ?></td>
            <td><?= $row['batch_number'] ?></td>
            <td><?= $row['rack_number'] ?></td>
            <td><?= $row['added_date'] ?></td>
            <td><?= $row['time'] ?></td>
            
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">✏️ Edit</a>
                <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">🗑️ Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(() => {
        $('#studentTable').DataTable();
    });
</script>
</body>
</html>