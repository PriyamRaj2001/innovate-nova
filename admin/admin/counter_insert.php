<?php
include 'config.php';
if (!file_exists('uploads')) {
    mkdir('uploads');
}

if(isset($_POST['submit'])){
    $project_name = $_POST['project_name'];
    $icon = $_POST['icon'];
    $project_number = $_POST['project_number'];

  

    // insert the data into database
    $sql = "INSERT INTO counter_project (project_name, project_number) VALUEs ('$project_name', '$project_number')";

    if (mysqli_query($conn, $sql)){
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: counter.php");
    exit();
}
?>
