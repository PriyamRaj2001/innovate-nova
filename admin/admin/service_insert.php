<?php
include 'config.php';
if (!file_exists('uploads')) {
    mkdir('uploads');
}

if(isset($_POST['submit'])){
    
    $header = $_POST['header'];
    $icon = $_POST['icon'];
    $link = $_POST['link'];
    $descr = $_POST['descr'];

  

    // insert the data into database
    $sql = "INSERT INTO services (header,icon,link,descr) VALUEs ('$header','$icon','$link','$descr')";

    if (mysqli_query($conn, $sql)){
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: service.php");
    exit();
}
?>
