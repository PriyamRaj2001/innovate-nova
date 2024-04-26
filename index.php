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
                    <h5  class="text-danger fw-bold">About Us</h5>
                    <h3>
                        <?php echo $row['header']; ?>
                    </h3>
                    <p class="text-justify text-dark"><?php echo $row['descr']; ?></p>
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



<!--- Why Choose Our Service Start--->
<div class="container-fluid border-bottom bg-white">
    <div class="container">
        <div class="row mb-xxl-5 mb-lg-5 mb-md-5 mb-sm-3">

            <h1 class="text-danger text-center mt-xxl-5 mt-lg-5 mt-md-5
                        mt-sm-3">Why Choose Our Service</h1>
            <h2 class="text-center text-danger">Our graphics design, web development and content writing services are top-notch and will help you create a unique brand identity.</h2>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM choose_service");
            $i = 1;
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="col-xxl-4 col-lg-4 col-md-6 col-sm-12 p-2">
                    <div class="card choose-card" style="width: 22rem;">
                        <img class="card-img-top" src="./admin/admin/<?php echo $row['image']; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title']; ?></h5>
                            <p class="card-text " style="color: #000 !important;"><?php echo $row['descr']; ?></p>
                            <a href="">Learn More<i class="fa
                                        fa-arrow-right" aria-hidden="true"></i></a>
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

<!--- Why Choose Our Service End--->

<!--- Recently Work Start--->
<div class="container-fluid mt-xxl-5 recent-card border-bottom">
    <div class="container ">
        <h1 class="text-danger text-center mt-xxl-5 mt-lg-5 mt-md-5
                    mt-sm-3">Recently Complete Work</h1>
        <h4 class="text-center text-danger">We have delivered high-quality services in graphics design, web development, and content writing for various projects. Some of our recent work includes:</h4>
        <div class="row ">
            <?php
            $result = mysqli_query($conn, "SELECT * FROM r_work");
            $i = 1;
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="col-xxl-4 col-lg-4 col-md-6 col-sm-12 ">
                    <div class="recent-card position-relative">
                        <div class='imgContainer'>
                            <img src='./admin/admin/<?php echo $row['image']; ?>'>
                        </div>
                        <div class="content">
                            <h2><?php echo $row['title']; ?></h2>
                            <p><?php echo $row['descr']; ?></p>
                            <a href="<?php echo $row['link']; ?>">Learn More<i class="fa
                                        fa-arrow-right" area-hidden="true"></i></a>
                                        
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
<!--- Recently Work End--->

<!--- Team Start --->

<div class="team-section border-bottom">
    <div class="container ">
        <h2 class="text-danger text-center mt-xxl-5 mt-lg-5 mt-md-5 mt-sm-3">Our Team</h2>
        <h4 class="text-danger text-center">We are a team of freelancers who provide graphics design, web development, and content writing services. <br> Meet our team members:</h4>
        <div class="row">

            <?php
            $result = mysqli_query($conn, "SELECT * FROM team");
            $i = 1;
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="col-md-3 col-sm-6">
                    <div class="team-member">
                        <img src="./admin/admin/<?php echo $row['image']; ?>" alt="Team member 1">
                        <div class="overlay">
                            <div class="name"><?php echo $row['name']; ?></div>
                            <h5><?php echo $row['desi']; ?></h5>
                            <div class="icons">
                                <a href="<?php echo $row['insta']; ?>"><i class="fa fa-instagram"></i></a>
                                <a href="<?php echo $row['tw']; ?>"><i class="fab fa-twitter"></i></a>
                                <a href="<?php echo $row['fb']; ?>"><i class="fab fa-facebook"></i></a>
                                <a href="<?php echo $row['linkedin']; ?>"><i class="fab fa-linkedin"></i></a>
                            </div>
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
<!--- Team End --->

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


<!--- Blog start --->
<section class="blog-section py-5">
    <div class="container">
        <h2 class="text-center mb-5 text-danger fw-bold">News and Blog</h2>
        <div class="row">
        <?php
		$result = mysqli_query($conn, "SELECT * FROM blogs");
		$i = 1;
		while ($row = mysqli_fetch_array($result)) {
		?>

            <div class="col-md-4 mb-4">
                <div class="card position-relative">
                    <img src="./admin/admin/<?php echo $row['image']; ?>" class="card-img-top" alt="Blog Post 1">
                    <div class="post-info position-absolute top-0 start-0  fw-bold text-danger">
                        <span class="post-date  p-2"><?php echo $row['date']; ?></span>
                        <span class="post-by"><?php echo $row['post_by']; ?></span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-dark"><?php echo $row['title']; ?></h5>
                        <p class="card-text text-dark"><?php echo $row['descr']; ?></p>
                        <a href="<?php echo $row['link']; ?>" class="btn btn-light btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>
<?php
$i++;
        }
        ?>
        </div>
    </div>
</section>
<!---- Blog End -->


<!--- Contact us --->
<div class="container pt-5">
    <div class="row ">
        <div class="col-md-6 col-sm-12 card px-3 mx-md-4" style="background:#fffcfe;">
            <h4 class="text-danger fw-bold pt-5 text-center">Feel Free to Write</h4>
            <form action="contact_form_insert.php" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="contact">Contact Number:</label>
                    <input type="number" class="form-control" id="contact" name="number">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" name="message"></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-light btn-outline-primary mt-3 mb-md-3 mb-sm-1">Send Message</button>
            </form>
        </div>

        <?php
	$result = mysqli_query($conn, "SELECT * FROM contact_details");
	$i = 1;
	while ($row = mysqli_fetch_array($result)) {
	?>
        <div class="col-md-5 col-sm-12 px-2 card mx-md-3" style="background:#fffcfe;">


            <h4 class="pt-5 text-danger fw-bold pb-2">Contact Details:</h4>
            <p>Email: <?php echo $row['email']; ?></p>
            <p>Phone: <?php echo $row['number']; ?></p>
            <p>Address: <?php echo $row['address']; ?></p>
            <p>Follow us on:</p>
            <p class="text-light px-3 icon">
                <a href="<?php echo $row['fb']; ?>"><i class="fa fa-instagram px-1"></i></a>
                <a href=<?php echo $row['insta']; ?>><i class="fab fa-twitter px-1"></i></a>
                <a href="<?php echo $row['tw']; ?>"><i class="fab fa-facebook  px-1"></i></a>
                <a href="<?php echo $row['linkedin']; ?>"><i class="fab fa-linkedin px-1"></i></a>
            </p>
        </div>
        <?php
        $i++;

    }
    ?>
    </div>
</div>
<!--- End Contact us --->


<?php
include 'footer.php';
?>