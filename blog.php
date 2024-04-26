<?php 
include 'header.php';
?>

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

<?php
include 'footer.php';
?>