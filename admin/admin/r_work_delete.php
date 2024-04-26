
<?php
include 'config.php';

if(isset($_GET['id'])){
    $r_work_id = $_GET['id'];
  
    // delete the record from database
    $sql = "DELETE FROM r_work WHERE r_work_id = '$r_work_id'";

    if (mysqli_query($conn, $sql)){
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: r_work.php");
    exit();
}
?>










