<?php
include 'header.php';
?>

<!--- About Us --->
<div class="container-fluid border-top border-bottom ">
    <div class="container pt-xxl-5 pt-lg-5 pt-md-4 pt-sm-2 mt-sm-5 ">
        <div class="row">
            <?php
            $result = mysqli_query($conn, "SELECT * FROM about");
            $i = 1;
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="col-xxl-6 col-lg-6 col-md-12 col-sm-12 m-sm-0">
                    <img class="about-img" src="./admin/admin/<?php echo $row['image']; ?>" alt="about image here">
                  
                </div>
                <div class="col-xxl-6 col-lg-6 col-md-12 col-sm-12 ">
                    <h5><span class="text-danger fw-bold">About Us</span></h5>
                    <h3>
                        <?php echo $row['header']; ?>
                    </h3>
                    <p class="text-dark"><?php echo $row['descr']; ?></p>
                <?php
            }
                ?>
                <button class="btn more-btn btn-danger" type="button">More
                    Details<i class="fa fa-angle-double-right mx-xxl-2" aria-hidden="true"></i></button>
                </div>
        </div>
    </div>
</div>
<!--- About Us End --->
<?php
include 'footer.php';
?>