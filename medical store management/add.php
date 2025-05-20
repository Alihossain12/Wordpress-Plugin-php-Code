<?php include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id    = $_POST['id'];
    $name  = $_POST['name'];
    $category = $_POST['category'];
    $manufacturer = $_POST['manufacturer'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $expiry_date = $_POST['expiry_date'];
    $batch_number = $_POST['batch_number'];
    $rack_number = $_POST['rack_number'];
    $added_date = $_POST['added_date'];
    $images = $_FILES['images'];


    $category = $_POST['category'];
    $manufacturer = $_POST['manufacturer'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $expiry_date = $_POST['expiry_date'];
    $batch_number = $_POST['batch_number'];
    $rack_number = $_POST['rack_number'];
   

    $target_dir = "images/";
    $target_file = $target_dir . basename($images["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($images["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        $uploadOk = 0;
    }

    // Check file size
    if ($images["size"] > 500000) {
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($images["tmp_name"], $target_file)) {
            $sql = "INSERT INTO medicines (name, category, manufacturer, price, quantity, expiry_date, batch_number, rack_number, added_date, images) 
            VALUES ('$name', '$category', '$manufacturer', '$price', '$quantity', '$expiry_date', '$batch_number', '$rack_number', '$added_date', '$target_file')";  
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php?msg=added");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Medical-store-Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'form.php';?>
 </body>
</html>


