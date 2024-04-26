<?php
include 'header.php';
?>


<!--- Services --->
<div class="container-fluid border-bottom">
    <div class="container mt-sm-5 service ">
        <div class="row text-center ">
            <h1 class="text-danger text-center mt-xxl-5 mt-lg-5 mt-md-5
                        mt-sm-3">Services</h1>
            <h4 class="text-center text-danger">We will craft a beautiful website with amazing graphics, marketing and content</h4>

            <?php
            $result = mysqli_query($conn, "SELECT * FROM services");
            $i = 1;
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="col-xxl-4 col-lg-4 col-md-6 col-sm-12 ">
                    <div class="card service-card mb-3" style="max-width:
                            23rem;">
                        <i class="fa-4x <?php echo $row['icon']; ?>" aria-hidden="true"></i>

                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['header']; ?></h5>
                            <p class="abc"><?php echo $row['descr']; ?></p>
                            <a href="<?php echo $row['link']; ?>" class="text-dark">Learn More<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            <?php
                $i++;
            }
            ?>
        </div>
    </div>
</div>
<!--- Services --->


<?php
include 'footer.php';
?>