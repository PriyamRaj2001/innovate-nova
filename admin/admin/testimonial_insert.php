<?php
include 'config.php';
if (!file_exists('uploads')) {
    mkdir('uploads');
}

if(isset($_POST['submit'])){
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

    // insert the data into database
    $sql = "INSERT INTO testimonial (name,desi,fb,tw,insta,linkedin,message,image) VALUEs ('$name','$desi','$fb','$tw','$insta','$linkedin','$message','$folder')";

    if (mysqli_query($conn, $sql)){
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: testimonial.php");
    exit();
}
?>
