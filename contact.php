<?php
include 'header.php'
?>

<div class="container pt-5">

		<div class="row ">
           
			<div class="col-md-6 col-sm-12 card px-3 mx-md-4" style="background:#fffcfe;">
            <h4 class="text-danger fw-bold pt-5 text-center">Feel Free to Write</h4>
				<form action="" method="post">
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
						<input type="number" class="form-control" id="contact" name="contact">
					</div>
					<div class="form-group">
						<label for="message">Message:</label>
						<textarea class="form-control" id="message" name="message"></textarea>
					</div>
					
					<button type="submit" class="btn btn-light btn-outline-primary mt-3 mb-md-3 mb-sm-1">Send Message</button>
				</form>
			</div>
			<div class="col-md-5 col-sm-12 px-2 card mx-md-3" style="background:#fffcfe;">
               

				<h4 class="pt-5 text-danger fw-bold pb-2">Contact Details:</h4>
				<p>Email: contact@company.com</p>
				<p>Phone: 123-456-7890</p>
				<p>Address: 123 Main Street, Anytown, USA</p>
				<p>Follow us on:</p>
				<p class="text-light px-3 icon">
                            <a href="#"><i class="fa fa-instagram px-1"></i></a>
                            <a href=#><i class="fab fa-twitter px-1"></i></a>
                            <a href="#"><i class="fab fa-facebook  px-1"></i></a>
                            <a href="#"><i class="fab fa-linkedin px-1"></i></a>
                            </p>
			</div>
		</div>
	</div>
    <?php
    include 'footer.php';
    ?>