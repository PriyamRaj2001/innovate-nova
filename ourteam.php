<?php
include 'header.php';
?>
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
            <div class="col-md-4 col-sm-6">
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
<?php
include 'footer.php';

?>