<div class="container mt-5">
    <h2>Add Medical store Management</h2>
    <form method="POST">
        <input type="hidden" name="id" value="1"> <!-- Add this line -->
        <input class="form-control mb-2" type="text" name="name" placeholder="Name" required>
        <input class="form-control mb-2" type="text" name="category" placeholder="Category">
        <input class="form-control mb-2" type="varchar" name="manufacturer" placeholder="Manufacturer" >
        <input class="form-control mb-2" type="number" name="price" placeholder="Price" required>
        <input class="form-control mb-2" type="text" name="quantity" placeholder="Quantity" required>
        <input class="form-control mb-2" type="date" name="expiry_date" placeholder="Expiry_date" required>
        <input class="form-control mb-2" type="varchar" name="batch_number" placeholder="Batch_number">
        <input class="form-control mb-2" type="varchar" name="rack_number" placeholder="Rack_number">
        <input class="form-control mb-2" type="DATETIME" name="added_date" placeholder="Added_date">
        
        <button class="btn btn-primary" type="submit">Add</button>
        <a href="index.php" class="btn btn-secondary">Back</a>
    </form>
</div>