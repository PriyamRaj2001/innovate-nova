<?php
include 'config.php';
?>
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>

         <!--- CSS File here --->
    <link rel="stylesheet" href="css/style.css">

    <!--- Awesome Font link --->
    <script src="https://kit.fontawesome.com/1711676806.js" crossorigin="anonymous"></script>
   

    <!--- GOOGLE FONT --->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,300;0,600;0,800;1,500;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;1,200;1,900&display=swap"
        rel="stylesheet">

    <!--- Ajax/Jquery Link --->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!--- Swiper JS Link --->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />



</head>

<body >
	<!-- Navigation Bar -->
	<header class="main">
    <div class="container bg-white rounded mt-md-3">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid text-dark">
          <a class="navbar-brand p-0" href="index.php"><img src="./images/logo.png" alt="" style="width: 250px;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 fw-bold text-dark">
              <li class="nav-item">
                <a class="nav-link active text-dark" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="services.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark " href="blog.php">Blog</a>
              </li>
            </ul>
            <!---
            <a href="#" type="button" class="btn text-white bg-primary btn-zoom">Buy Now <i class="fa-light fa-cart-shopping"></i></a> 
            --->
          </div>
        </div>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
<div class="header">
    <div class="row">
        <?php
        $result = mysqli_query($conn, "SELECT * FROM home_page");
        $i = 1;
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <div class="col-4 p-2">
                <div class="row counter">
                    <div class="container mx-5 main-container">
                        <h3 class="text-danger fw-bold text-center"> <?php echo $row['title']; ?></h3>
                        <h4 class="fw-bold"><i class="<?php echo $row['icon']; ?> text-danger"></i> <?php echo $row['header']; ?></h4>
                    </div>
                <?php
            }
                ?>
                <div class="row mx-2 mb-5 container ">
                    <?php
                    $result = mysqli_query($conn, "SELECT * FROM counter_project");
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <div class="col-4">
                            <?php echo $row['project_name']; ?> <br>

                            <p class="counter inline fw-bold h1 text-primary " data-value="<?php echo $row['project_number']; ?>">0</p>
                        </div>
                    <?php
                        $i++;
                    }
                    ?>
                </div>
                </div>
            </div>
            <?php

            $result = mysqli_query($conn, "SELECT * FROM home_page");
            $i = 1;
            while ($row = mysqli_fetch_array($result)) {
            ?>  
              <div class="col-8 image" style="background-image: url('./admin/admin/<?php echo $row['image']; ?>') !important; "></div>
    </div>
<?php
            }
?>
</div>
<!--- Main Section End --->