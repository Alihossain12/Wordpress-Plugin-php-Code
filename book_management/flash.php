<?php 

   
    
    require_once  './config.php';
    
    
 

$id = $_GET['id'];
if( $is_connect ) {
    $sql = "DELETE FROM books WHERE id = $id";
    if( $connection->query($sql) === true ) {
        echo "Book Deleted Successfully";
        header("Location: index.php");
    }else {
        print_r( $connection->error );
        die();
    }
}

