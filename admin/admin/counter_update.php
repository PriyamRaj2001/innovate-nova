
<?php
include 'config.php';
include 'header.php';
if (!file_exists('uploads')) {
    mkdir('uploads');
}

include 'config.php';

if(isset($_POST['submit'])){
    $counter_id = $_POST['counter_id'];
    $project_name = $_POST['project_name'];
    $project_number = $_POST['project_number'];

    // update the record in database
    $sql = "UPDATE counter_project SET project_name='$project_name', project_number='$project_number' WHERE counter_id='$counter_id'";

    if (mysqli_query($conn, $sql)){
        echo "Record updated successfully";

    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }


}
// Get data
if (isset($_GET['id'])) {
    $counter_id = $_GET['id'];


    // Retrive data
    $sql = "SELECT * FROM counter_project WHERE counter_id ='$counter_id'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>
<div class="container card mt-5 px-3">
    <form action="" method="post" id="user_from" enctype="multipart/form-data">
        <input type="hidden" name="counter_id" class="from-control" value="<?php echo $row['counter_id']; ?>">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="project_name" class="form-control" value="<?php echo $row['project_name']; ?>">
        </div>
        <div class="form-group">
            <label>Number</label>
            <input type="number"  name="project_number" class="form-control" value="<?php echo $row['project_number']; ?>">
        </div>
            <button type="submit" name="submit" class="btn btn-primary" id="btn-add">Update</button>
            <a href="counter.php" class="text-decoration-none btn  btn-outline-primary">View</a>
    </form>
</div>

<?php
include 'footer.php';
?>
