<?php
include 'config.php';
include 'header.php';
if (!file_exists('uploads')) {
    mkdir('uploads');
}

include 'config.php';

if(isset($_POST['submit'])){
    $service_id = $_POST['service_id'];
    $header = $_POST['header'];
    $icon = $_POST['icon'];
    $link = $_POST['link'];
    $descr = $_POST['descr'];

    // update the record in database
    $sql = "UPDATE services SET header='$header', icon='$icon',link='$link', descr='$descr' WHERE service_id='$service_id'";

    if (mysqli_query($conn, $sql)){
        echo "Record updated successfully";

    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }


}
// Get data
if (isset($_GET['id'])) {
    $service_id = $_GET['id'];


    // Retrive data
    $sql = "SELECT * FROM services WHERE service_id ='$service_id'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>
<div class="container card mt-5 px-3">
    <form action="" method="post" id="user_from" enctype="multipart/form-data">
        <input type="hidden" name="service_id" class="from-control" value="<?php echo $row['service_id']; ?>">
        <div class="form-group">
            <label>Header:</label>
            <input type="text" name="header" class="form-control" value="<?php echo $row['header']; ?>">
        </div>
        <div class="form-group">
            <label>Icon:</label>
            <input type="text"  name="icon" class="form-control" value="<?php echo $row['icon']; ?>">
        </div>
        <div class="form-group">
            <label>Link:</label>
            <input type="url"  name="link" class="form-control" value="<?php echo $row['link']; ?>">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="descr" class="summernote"><?php echo $row['descr']; ?></textarea>
        </div>
            <button type="submit" name="submit" class="btn btn-primary" id="btn-add">Update</button>
            <a href="service.php" class="text-decoration-none btn  btn-outline-primary">View</a>
    </form>
</div>

<?php
include 'footer.php';
?>
