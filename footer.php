<footer class="text-danger footer">
  <div class="container">
    <div class="row pt-4 ">
      <div class="col-sm-6 col-md-3 pt-2 ">
        <h5 class="mx-3 "> <a href="index.php"><img src="./images/logo1.png" style="width: 250px;" class="" alt="logo here"></a></h5>
        <ul>

          <p class="text-light pt-2">We create visually appealing and engaging content that is both user-friendly and optimized for search engines.</p>
          <?php
          $result = mysqli_query($conn, "SELECT * FROM contact_details");
          $i = 1;
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <p class="text-light px-3 icon">
              <a href="<?php echo $row['fb']; ?>"><i class="fa fa-instagram text-light px-1"></i></a>
              <a href=<?php echo $row['insta']; ?>><i class="fab fa-twitter text-light  px-1"></i></a>
              <a href="<?php echo $row['tw']; ?>"><i class="fab fa-facebook text-light  px-1"></i></a>
              <a href="<?php echo $row['linkedin']; ?>"><i class="fab fa-linkedin text-light  px-1"></i></a>
            </p>
          <?php
            $i++;
          }
          ?>
        </ul>
      </div>
      <div class="col-sm-6 col-md-3">
        <h5 class="text-light fw-bold pt-2">Quick Link</h5>
        <ul>
          <li class="text-light"><a class="text-light" href="index.php">Home</a></li>
          <li class="text-light"><a class="text-light" href="about.php">About Us</a></li>
          <li class="text-light"><a class="text-light" href="services.php">Services </a></li>
          <li class="text-light"><a class="text-light" href="contact.php">Contact Us</a></li>
          <li class="text-light"><a class="text-light" href="blog.php">News & Blog</a></li>
          <li class="text-light"><a class="text-light" href="ourteam.php">Meet Our Teams</a></li>

        </ul>
      </div>


      <div class="col-sm-6 col-md-3">
        <h5 class="fw-bold">Our Service</h5>
        <ul>
          <li class="text-light"><a href="#" class="text-light">Web Development</a></li>
          <li class="text-light"><a class="text-light" href="#">Graphics Dsign</a></li>
          <li class="text-light"><a class="text-light" href="#">Digital Marketing </a></li>
          <li class="text-light"><a class="text-light" href="#">Content Wrting</a></li>

        </ul>
      </div>
      <div class="col-sm-6 col-md-3">
        <h5 class="fw-bold text-light">Contact</h5>
        <ul style="color: white;">
          <?php
          $result = mysqli_query($conn, "SELECT * FROM contact_details");
          $i = 1;
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <li class="text-light"><?php echo $row['address']; ?></li>
            <li class="text-light"><i class="fa-solid fa-phone text-light"> </i> +91 <?php echo $row['number']; ?></li>
            <li class="text-light"><i class="fa-sharp fa-solid fa-envelopes-bulk text-light"></i> <?php echo $row['address']; ?></li>

          <?php
            $i++;
          }
          ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="text-center rounded-6 mt-3 mb-2 copy text-light">Copyright © 2023 <span class="text-danger">
            Innovatenova</span>. Designed & Developed by <span class="text-danger"> Innovatenova.</span> All rights reserved</p>
      </div>
    </div>
  </div>
</footer>





<script src="JS/main.js"></script>
<script>
  const counters = document.querySelectorAll('.counter');

  counters.forEach(counter => {
    const value = parseInt(counter.dataset.value);

    let count = 0;

    setInterval(() => {

      if (count <= value) {
        counter.innerHTML = count + "+";
        count++;
      }
    }, 10);
  });
</script>

</body>


</html>