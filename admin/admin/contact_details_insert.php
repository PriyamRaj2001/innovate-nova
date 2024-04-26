<?php
include 'config.php';
if (!file_exists('uploads')) {
    mkdir('uploads');
}

if(isset($_POST['submit'])){
    
    $email = $_POST['email'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $fb = $_POST['fb'];
    $insta = $_POST['insta'];
    $tw = $_POST['tw'];
    $linkedin = $_POST['linkedin'];


  

    // insert the data into database
    $sql = "INSERT INTO contact_details (email,number,address,fb,insta,tw,linkedin) VALUEs ('$email','$number','$address','$fb','$insta','$tw','$linkedin')";

    if (mysqli_query($conn, $sql)){
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: contact_details.php");
    exit();
}
?>
