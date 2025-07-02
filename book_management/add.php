<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    require_once  './config.php';
    include_once  './includes/head.php';
    ?>
    <?php
        $sql    = "SELECT books.*, categories.name AS category_name FROM `books` JOIN categories ON books.category = categories.id";
        $result = mysqli_query($connection, $sql);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="h3"> Book List</h1>
      <div class="action-btn">
        <a href="create.php" class="btn btn-primary">+ Add New Book</a>
        <a href="add_category.php" class="btn btn-danger">Add Category</a>
        <a href="trash.php" class="btn btn-danger"> Trash</a>
        <a href="index.php" class="btn btn-primary"> All Books</a>
      </div>
    </div>
    <table class="table table-hover table-bordered bg-white shadow-sm">
      <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>ISBN</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
             if ( count( $data ) > 0) {
                // Output data of each row
                foreach( $data as $row ) {
                    ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['book_name'] ?></td>
                            <td><?php echo $row['author'] ?></td>
                            <td><?php echo $row['isbn'] ?></td>
                            <td><?php echo $row['category_name'] ?></td>
                            <td>
                                <a href="view.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-info">View</a>
                                <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php 
                }
            } else {
                echo "0 results found";
            }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>




<?php 

// mysql connection
$servername = 'localhost';
$username   = "root";
$password   = "";
$dbname     = 'book_manage';
$is_connect = false;

$connection = mysqli_connect($servername, $username, $password, $dbname);

if ($connection) {
    $is_connect = true;
}else {
    echo "Connect hoy nai abr dekho ki somossa";
}


// Get all data from form
$book_name       = $_POST['book_name'];
$author          = $_POST['author'];
$isbn            = $_POST['isbn'];
$publisher       = $_POST['publisher'];
$publish_date    = $_POST['publish_date'];
$category        = $_POST['category'];
$language        = $_POST['language'];
$pages           = $_POST['pages'];
$description     = $_POST['description'];
$cover_image_url = $_FILES['cover_image_url'];

if( !empty( $cover_image_url ) ) {
    // Target directory to save uploaded images
    $targetDir = "uploads/";
    // Get original file name and create full path
    $fileName = basename($_FILES["cover_image_url"]["name"]);
    $targetFile = $targetDir . $fileName;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if file is an actual image
    $check = getimagesize($_FILES["cover_image_url"]["tmp_name"]);
    if ($check === false) {
        die("File is not an image.");
    }

       // Check file size (e.g. 5MB max)
    if ($_FILES["cover_image_url"]["size"] > 5 * 1024 * 1024) {
        die("File is too large.");
    }

    // Allow certain file formats
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($imageFileType, $allowedTypes)) {
        die("Only JPG, JPEG, PNG & GIF files are allowed.");
    }
    
    // Move file to target directory
    if (move_uploaded_file($_FILES["cover_image_url"]["tmp_name"], $targetFile)) {
        // echo "The file " . htmlspecialchars($fileName) . " has been uploaded.";
    }
}

if( $is_connect ) {
    $sql = "INSERT INTO `books`(`book_name`, `author`, `isbn`, `publisher`, `publish_date`, `category`, `language`, `pages`, `description`, `cover_image_url`) VALUES ('$book_name','$author','$isbn','$publisher','$publish_date','$category','$language','$pages','$description','$targetFile')";
    if( $connection->query($sql) === true ) {
        echo "New book added";
        // header("Location: index.php");
        $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
        echo '<script type="text/javascript">window.location.href="' . $url . '"</script>';
        exit;
    }else {
        print_r( $connection->error );
        die();
    }
}
