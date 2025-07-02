<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">Employee List</h2>
    <a href="create.php" class="btn btn-success mb-3">Add New Employee</a>

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Designation</th>
                <th>Salary</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM Employee_management WHERE status != 'trashed'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0):
            while ($row = mysqli_fetch_assoc($result)):
        ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td>
                    <?php if (!empty($row['image'])): ?>
                        <img src="uploads/<?php echo $row['image']; ?>" width="50" height="50" style="object-fit: cover;">
                    <?php else: ?>
                        <span>No Image</span>
                    <?php endif; ?>
                </td>
                <td><?php echo htmlspecialchars($row['name']); ?></td>
                <td><?php echo htmlspecialchars($row['email']); ?></td>
                <td><?php echo htmlspecialchars($row['department']); ?></td>
                <td><?php echo htmlspecialchars($row['designation']); ?></td>
                <td>$<?php echo number_format($row['salary'], 2); ?></td>
                <td><?php echo ucfirst($row['status']); ?></td>
                <td>
                    <a href="view.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-sm">View</a>
                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this employee?')">Delete</a>
                    <a href="trash.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary btn-sm">Trash</a>
                </td>
            </tr>
        <?php
            endwhile;
        else:
        ?>
            <tr>
                <td colspan="9" class="text-center">No employees found.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>

</body>
</html>
