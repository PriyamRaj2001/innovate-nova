<?php
include 'config.php';
if (!file_exists('uploads')) {
    mkdir('uploads');
}

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $descr = $_POST['descr'];

    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'uploads/' . $filename;
    move_uploaded_file($_FILES['image']['tmp_name'],$folder);

    // insert the data into database
    $sql = "INSERT INTO choose_service (title, descr, image) VALUEs ('$title', '$descr', '$folder')";

    if (mysqli_query($conn, $sql)){
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: choose_service.php");
    exit();
}
?>
