
<?php
include 'config.php';

if(isset($_GET['id'])){
    $counter_id = $_GET['id'];
  
    // delete the record from database
    $sql = "DELETE FROM counter_project WHERE counter_id = '$counter_id'";

    if (mysqli_query($conn, $sql)){
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: counter.php");
    exit();
}
?>










