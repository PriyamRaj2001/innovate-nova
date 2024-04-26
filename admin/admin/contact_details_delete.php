
<?php
include 'config.php';

if(isset($_GET['id'])){
    $contact_details_id = $_GET['id'];
  
    // delete the record from database
    $sql = "DELETE FROM contact_details WHERE contact_details_id = '$contact_details_id'";

    if (mysqli_query($conn, $sql)){
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: contact_details.php");
    exit();
}
?>










