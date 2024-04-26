
<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="title">
        <button type="submit" name="submit">Submit</button>
    </form>
    
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $title = $_POST['title'];
  


    // insert the data into database
    $sql = "INSERT INTO test (title) VALUE ('$title')";

    if (mysqli_query($conn, $sql)){
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: home.php");
    exit();
}
?>