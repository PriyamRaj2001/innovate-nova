<?php
include 'config.php';
include 'header.php';
if (!file_exists('uploads')) {
    mkdir('uploads');
}

include 'config.php';

if (isset($_POST['submit'])) {
    $contact_details_id = $_POST['contact_details_id'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $fb = $_POST['fb'];
    $insta = $_POST['insta'];
    $tw = $_POST['tw'];
    $linkedin = $_POST['linkedin'];

    // update the record in database
    $sql = "UPDATE contact_details SET email='$email', number='$number', address='$address',fb='$fb',insta='$insta',tw='$tw',linkedin='$linkedin' WHERE contact_details_id='$contact_details_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
// Get data
if (isset($_GET['id'])) {
    $contact_details_id = $_GET['id'];


    // Retrive data
    $sql = "SELECT * FROM contact_details WHERE contact_details_id ='$contact_details_id'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>
<div class="container card mt-5 px-3">
    <form action="" method="post" id="user_from" enctype="multipart/form-data">
        <input type="hidden" name="contact_details_id" class="from-control" value="<?php echo $row['contact_details_id']; ?>">
        <div class="form-group">
            <label>Email:</label>
            <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>">
        </div>
        <div class="form-group">
            <label>Contact Number:</label>
            <input type="text" name="number" class="form-control" value="<?php echo $row['number']; ?>">
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea name="address" class="summernote"><?php echo $row['address']; ?></textarea>
        </div>
        <div class="form-group">
            <label>Facebook Link:</label>
            <input type="link" name="fb" class="form-control" value="<?php echo $row['fb']; ?>">
        </div>
        <div class="form-group">
            <label>Instgram Link:</label>
            <input type="link" name="insta" class="form-control" value="<?php echo $row['insta']; ?>">
        </div>
        <div class="form-group">
            <label>Twitter Link:</label>
            <input type="link" name="tw" class="form-control" value="<?php echo $row['tw']; ?>">
        </div>
        <div class="form-group">
            <label>Linkedin Link:</label>
            <input type="link" name="linkedin" class="form-control" value="<?php echo $row['linkedin']; ?>">
        </div>
        <button type="submit" name="submit" class="btn btn-primary" id="btn-add">Update</button>
        <a href="contact_details.php" class="text-decoration-none btn  btn-outline-primary">View</a>
    </form>
</div>

<?php
include 'footer.php';
?>