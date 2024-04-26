<?php
include 'config.php';
include 'header.php';
if (!file_exists('uploads')) {
    mkdir('uploads');
}

if (isset($_POST['submit'])) {
    $about_id = $_POST['about_id'];
    $header = $_POST['header'];
    $descr = $_POST['descr'];

    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'uploads/' . $filename;
    move_uploaded_file($_FILES['image']['tmp_name'],$folder);

// Update 
$sql = "UPDATE about SET header='$header', descr='$descr',image='$folder' WHERE about_id='$about_id' ";


if (mysqli_query($conn, $sql)){
    echo "Record updated successfully";

} else {
    echo "Error updating record: " . mysqli_error($conn);
}


}

   


// Get data
if (isset($_GET['id'])) {
    $about_id = $_GET['id'];


    // Retrive data
    $sql = "SELECT * FROM about WHERE about_id ='$about_id'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>
<div class="container card mt-5 px-3">
    <form action="" method="post" id="user_from" enctype="multipart/form-data">
        <input type="hidden" name="about_id" class="from-control" value="<?php echo $row['about_id']; ?>">
    
        <div class="form-group">
            <label>Header</label>
            <input type="text"  name="header" class="form-control" value="<?php echo $row['header']; ?>">
        </div>

        <div class="form-group">
            <label>Description:</label>
            <textarea name="descr" class="summernote"\><?php echo $row['descr']; ?></textarea>
        </div>
  
    
        <div class="form-group">
            <label>Current Image</label>
            <img src="<?php echo $row['image']; ?>" width="200px">
        </div>
        <div class="form-group">
            <label>Add New Image Width 250 height 200</label>
            <input type="file" name="image">
        </div>

            <button type="submit" name="submit" class="btn btn-primary " id="btn-add">Update</button>
            <a href="about.php" class="text-decoration-none btn  btn-outline-primary">View</a>

    </form>
</div>

<?php
include 'footer.php';
?>