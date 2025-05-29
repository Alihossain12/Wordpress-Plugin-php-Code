<?php
include('config.php');
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM Employee_management WHERE id = $id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
</head>
<body>
<h2>Edit Employee</h2>

<form action="update.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <label>Name:</label><br>
    <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>

    <label>Phone:</label><br>
    <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br>

    <label>Address:</label><br>
    <textarea name="address"><?php echo $row['address']; ?></textarea><br>

    <label>Department:</label><br>
    <input type="text" name="department" value="<?php echo $row['department']; ?>"><br>

    <label>Designation:</label><br>
    <input type="text" name="designation" value="<?php echo $row['designation']; ?>"><br>

    <label>Salary:</label><br>
    <input type="number" name="salary" value="<?php echo $row['salary']; ?>"><br>

    <label>Current Image:</label><br>
    <?php if ($row['image']) : ?>
        <img src="uploads/<?php echo $row['image']; ?>" width="80"><br>
    <?php endif; ?>
    <input type="file" name="image"><br>

    <label>Status:</label><br>
    <select name="status">
        <option value="active" <?php if ($row['status'] == 'active') echo 'selected'; ?>>Active</option>
        <option value="inactive" <?php if ($row['status'] == 'inactive') echo 'selected'; ?>>Inactive</option>
    </select><br><br>

    <input type="submit" name="update" value="Update Employee">
</form>

</body>
</html>
