<?php
include('config.php');
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM Employee_management WHERE id = $id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Employee</title>
</head>
<body>
    <h2>Employee Details</h2>
    <?php if ($row): ?>
        <p><strong>Name:</strong> <?php echo $row['name']; ?></p>
        <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
        <p><strong>Phone:</strong> <?php echo $row['phone']; ?></p>
        <p><strong>Address:</strong> <?php echo $row['address']; ?></p>
        <p><strong>Department:</strong> <?php echo $row['department']; ?></p>
        <p><strong>Designation:</strong> <?php echo $row['designation']; ?></p>
        <p><strong>Salary:</strong> $<?php echo number_format($row['salary'], 2); ?></p>
        <p><strong>Status:</strong> <?php echo ucfirst($row['status']); ?></p>
        <?php if ($row['image']): ?>
            <p><img src="uploads/<?php echo $row['image']; ?>" width="150"></p>
        <?php endif; ?>
    <?php else: ?>
        <p>Employee not found.</p>
    <?php endif; ?>
    <a href="index.php">Back to List</a>
</body>
</html>
