<?php
include 'config.php';
include 'header.php';
if (!file_exists('uploads')) {
    mkdir('uploads');
}

if (isset($_POST['submit'])) {
    $blog_id = $_POST['blog_id'];
    $title = $_POST['title'];
    $descr = $_POST['descr'];
    $link = $_POST['link'];
    $date = $_POST['date'];
    $post_by = $_POST['post_by'];

    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'uploads/' . $filename;
    move_uploaded_file($_FILES['image']['tmp_name'],$folder);

// Update 
$sql = "UPDATE blogs SET title='$title',descr='$descr',link='$link',date='$date',post_by='$post_by',image='$folder' WHERE blog_id='$blog_id'";


if (mysqli_query($conn, $sql)){
    echo "Record updated successfully";

} else {
    echo "Error updating record: " . mysqli_error($conn);
}


}

   


// Get data
if (isset($_GET['id'])) {
    $blog_id = $_GET['id'];


    // Retrive data
    $sql = "SELECT * FROM blogs WHERE blog_id ='$blog_id'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>
<div class="container card mt-5 px-3">
    <form action="" method="post" id="user_from" enctype="multipart/form-data">
        <input type="hidden" name="blog_id" class="from-control" value="<?php echo $row['blog_id']; ?>">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>">
        </div>
        <div class="form-group">
            <label>Post by</label>
            <input type="text" name="post_by" class="form-control" value="<?php echo $row['post_by']; ?>">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" name="date" class="form-control" value="<?php echo $row['date']; ?>">
        </div>
        <div class="form-group">
            <label>Link</label>
            <input type="url" name="link" class="form-control" value="<?php echo $row['link']; ?>">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="descr" class="summernote"><?php echo $row['descr']; ?></textarea>
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
            <a href="blog.php" class="text-decoration-none btn  btn-outline-primary">View</a>

    </form>
</div>

<?php
include 'footer.php';
?>