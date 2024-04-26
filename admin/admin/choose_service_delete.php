
<?php
include 'config.php';

if(isset($_GET['id'])){
    $choose_service_id = $_GET['id'];
  
    // delete the record from database
    $sql = "DELETE FROM choose_service WHERE choose_service_id = '$choose_service_id'";

    if (mysqli_query($conn, $sql)){
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: choose_service.php");
    exit();
}
?>










