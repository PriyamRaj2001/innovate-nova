<?php
include 'header.php';
?>



<section id="career">
  <div class="container">
    <h2>Careers</h2>
    <div class="row">
      <div class="col-md-4">
        <h4>Type of Employment</h4>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="employment[]" id="full-time" value="Full Time">
            <label class="form-check-label" for="full-time">
              Full Time
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="employment[]" id="part-time" value="Part Time">
            <label class="form-check-label" for="part-time">
              Part Time
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="employment[]" id="internship" value="Internship">
            <label class="form-check-label" for="internship">
              Internship
            </label>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="row">
          <?php
            // $query = "SELECT * FROM jobs";
            // $result = mysqli_query($conn, $query);
            // while($row = mysqli_fetch_assoc($result)) {
          ?>
          <div class="col-md-3">
            <div class="card mb-4 box-shadow">
              <div class="card-body">
                <h5 class="card-title text-dark">Title/h5>
                <p class="card-text text-dark">description</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">kj</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">ty</button>
                  </div>
                  <a href="#" class="btn btn-sm btn-outline-secondary">Apply</a>
                </div>
              </div>
            </div>
          </div>
          <?php
        //  }
         ?>
        </div>
      </div>
    </div>
  </div>
</section>



    <?php
    include 'footer.php';
    ?>