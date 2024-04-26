<!--- Testimonial Start--->
<div class="container-fluid ">
    <div class="container ">
        <h1 class="text-danger text-center mt-xxl-5 mt-lg-5 mt-md-5
                    mt-sm-3">Our Testimonial</h1>

        <div class="row">
        <?php
		$result = mysqli_query($conn, "SELECT * FROM testimonial");
		$i = 1;
		while ($row = mysqli_fetch_array($result)) {
		?>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="testimonial-card">
                    <div class="face front-face">
                        <img src="./admin/admin/<?php echo $row['image']; ?>" alt="" class="profile">
                        <div class="pt-3 text-uppercase name">
                        <?php echo $row['name']; ?>
                        </div>
                        <div class="designation"><?php echo $row['desi']; ?></div>
                    </div>
                    <div class="face back-face">
                        <span class="fas fa-quote-left"></span>
                        <div class="testimonial">
                        <?php echo $row['message']; ?>
                            <p class="p-2 fa-2x">
                                <a href="<?php echo $row['fb']; ?>"><i class=" p-2 fa-brands fa-facebook-f"></i></a>
                                <a href="<?php echo $row['insta']; ?>"><i class="p-2 fa-brands fa-instagram"></i></a>
                            <a href="<?php echo $row['linkedin']; ?>"> <i class="p-2 fa-brands fa-linkedin"></i></a>
                            <a href="<?php echo $row['tw']; ?>"><i class="p-2 fa-brands fa-twitter"></i></a>
                        </p>
                        </div>
                        <span class="fas fa-quote-right"></span>
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
<!--- Testimonial End --->