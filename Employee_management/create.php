<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
</head>
<body>

<h2>Add Employee</h2>
<form action="store_category.php" method="POST" enctype="multipart/form-data">
    <label>Name:</label><br>
    <input type="text" name="name" required><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br>

    <label>Phone:</label><br>
    <input type="text" name="phone"><br>

    <label>Address:</label><br>
    <textarea name="address"></textarea><br>

    <label>Department:</label><br>
    <input type="text" name="department"><br>

    <label>Designation:</label><br>
    <input type="text" name="designation"><br>

    <label>Salary:</label><br>
    <input type="number" step="0.01" name="salary"><br>

    <label>Upload Image:</label><br>
    <input type="file" name="image"><br>

    <label>Status:</label><br>
    <select name="status">
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
    </select><br><br>

    <input type="submit" name="submit" value="Add Employee">
</form>

</body>
</html>
