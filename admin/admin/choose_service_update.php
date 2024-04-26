<?php
include 'config.php';
include 'header.php';
if (!file_exists('uploads')) {
    mkdir('uploads');
}

if (isset($_POST['submit'])) {
    $choose_service_id = $_POST['choose_service_id'];
    $title = $_POST['title'];
    $descr = $_POST['descr'];

    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'uploads/' . $filename;
    move_uploaded_file($_FILES['image']['tmp_name'],$folder);

// Update 
$sql = "UPDATE choose_service SET title='$title',descr='$descr',image='$folder' WHERE choose_service_id='$choose_service_id'";


if (mysqli_query($conn, $sql)){
    echo "Record updated successfully";

} else {
    echo "Error updating record: " . mysqli_error($conn);
}


}

   


// Get data
if (isset($_GET['id'])) {
    $choose_service_id = $_GET['id'];


    // Retrive data
    $sql = "SELECT * FROM choose_service WHERE choose_service_id ='$choose_service_id'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>
<div class="container card mt-5 px-3">
    <form action="" method="post" id="user_from" enctype="multipart/form-data">
        <input type="hidden" name="choose_service_id" class="from-control" value="<?php echo $row['choose_service_id']; ?>">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text"  name="descr" class="form-control" value="<?php echo $row['descr']; ?>">
        </div>
        <div class="form-group">
            <label>Current Image</label>
            <img src="<?php echo $row['image']; ?>" width="100px">
        </div>
        <div class="form-group">
            <label>Add New Image Width 1080 height 600</label>
            <input type="file" name="image">
        </div>

            <button type="submit" name="submit" class="btn btn-primary" id="btn-add">Update</button>
            <a href="choose_service.php" class="text-decoration-none btn  btn-outline-primary">View</a>

    </form>
</div>

<?php
include 'footer.php';
?>