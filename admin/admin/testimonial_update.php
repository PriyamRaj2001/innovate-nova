<?php
include 'config.php';
include 'header.php';
if (!file_exists('uploads')) {
    mkdir('uploads');
}

if (isset($_POST['submit'])) {
    $testimonial_id = $_POST['testimonial_id'];
    $name = $_POST['name'];
    $desi = $_POST['desi'];
    $fb = $_POST['fb'];
    $tw = $_POST['tw'];
    $insta = $_POST['insta'];
    $linkedin = $_POST['linkedin'];
    $message = $_POST['message'];

    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'uploads/' . $filename;
    move_uploaded_file($_FILES['image']['tmp_name'],$folder);

// Update 
$sql = "UPDATE testimonial SET name='$name',desi='$desi',fb='$fb',tw='$tw',insta='$insta',linkedin='$linkedin',message='$message',image='$folder' WHERE testimonial_id='$testimonial_id'";


if (mysqli_query($conn, $sql)){
    echo "Record updated successfully";
    
    

} else {
    echo "Error updating record: " . mysqli_error($conn);
}


}


   


// Get data
if (isset($_GET['id'])) {
    $testimonial_id = $_GET['id'];


    // Retrive data
    $sql = "SELECT * FROM testimonial WHERE testimonial_id ='$testimonial_id'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>
<div class="container card mt-5 px-3">
    <form action="" method="post" id="user_from" enctype="multipart/form-data">
        <input type="hidden" name="testimonial_id" class="from-control" value="<?php echo $row['testimonial_id']; ?>">
        <div class="form-group">
            <label>name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text"  name="desi" class="form-control" value="<?php echo $row['desi']; ?>">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="message" class="summernote"><?php echo $row['message']; ?></textarea>
           
        </div>
        <div class="form-group">
            <label>Facebook</label>
            <input type="url"  name="fb" class="form-control" value="<?php echo $row['fb']; ?>">
        </div>
        <div class="form-group">
            <label>Twitter</label>
            <input type="url"  name="tw" class="form-control" value="<?php echo $row['tw']; ?>">
        </div>
        <div class="form-group">
            <label>Instagram</label>
            <input type="url"  name="insta" class="form-control" value="<?php echo $row['insta']; ?>">
        </div>
        <div class="form-group">
            <label>Linkedin</label>
            <input type="url"  name="linkedin" class="form-control" value="<?php echo $row['linkedin']; ?>">
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
            <a href="testimonial.php" class="text-decoration-none btn  btn-outline-primary">View</a>

    </form>
</div>

<?php
include 'footer.php';
?>