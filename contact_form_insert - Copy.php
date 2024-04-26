<?php
include 'config.php';
if (!file_exists('uploads')) {
    mkdir('uploads');
}

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

  

    // insert the data into database
    $sql = "INSERT INTO contact_form (name,email,number,message) VALUEs ('$name','$email','$number','$message')";

    if (mysqli_query($conn, $sql)){
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: index.php");
    exit();
}
?>
