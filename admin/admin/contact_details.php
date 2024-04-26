<?php
include 'header.php';
include 'config.php'
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<main>
				<div class="container-fluid px-3">
					<h1 class="mt-4">Contact Details</h1>
				</div>
			</main>

			<!---
			<div class="px-3"><button class=" btn btn-primary px-4 " onclick="openForm()">Add </button></div>
			
			
			<form id="myForm" class="px-3" method="post" action="contact_details_insert.php" style="display:none;" enctype="multipart/form-data">
				
				<div class="form-group">
					<label for="">Email:</label>
					<input type="email" class="form-control"  name="email">
				</div>
				<div class="form-group">
					<label for="">Phone Number:</label>
					<input type="number" class="form-control"  name="number">
				</div>
				<div class="form-group">
					<label for="">Address:</label>
					<textarea name="address" class="summernote"></textarea>
				</div>
				<div class="form-group">
					<label for="">Facebook Link:</label>
					<input type="link" class="form-control"  name="fb">
				</div>
				<div class="form-group">
					<label for="">Instagram Link:</label>
					<input type="link" class="form-control"  name="insta">
				</div>
				<div class="form-group">
					<label for="">Twitter Link:</label>
					<input type="link" class="form-control"  name="tw">
				</div>
				<div class="form-group">
					<label for="">Linkedin Link:</label>
					<input type="link" class="form-control"  name="linkedin">
				</div>
				<button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
				<button type="button" class="btn btn-secondary mt-3" onclick="closeForm()">Close</button>
			</form> 

-->

		</div>
	</div>
</div>


<div class="container">
	<h1 class="card-header px-3">View</h1>

	<?php
	$result = mysqli_query($conn, "SELECT * FROM contact_details");
	$i = 1;
	while ($row = mysqli_fetch_array($result)) {
	?>
		<div class="container-fluid">
			<div class="card">

				<div class="container p-3  pb-3">
					<div class="row card-title fw-bold">S.No <?php echo $i; ?></div>
					<div class="row border-bottom"></div>

					<div class="row card-title fw-bold">Email</div>
					<div class="row border-bottom"><?php echo $row['email']; ?></div>
					<div class="row card-title fw-bold">Contact Number</div>
					<div class="row border-bottom"><?php echo $row['number']; ?></div>
					<div class="row card-title fw-bold">Address</div>
					<div class="row border-bottom"><?php echo $row['address']; ?></div>
					<div class="row card-title fw-bold">Facebook</div>
					<div class="row border-bottom"><?php echo $row['fb']; ?></div>
					<div class="row card-title fw-bold">Instagram</div>
					<div class="row border-bottom"><?php echo $row['insta']; ?></div>
					<div class="row card-title fw-bold">Twitter</div>
					<div class="row border-bottom"><?php echo $row['tw']; ?></div>
					<div class="row card-title fw-bold">Linkedin</div>
					<div class="row border-bottom"><?php echo $row['linkedin']; ?></div>


					<a href="contact_details_update.php?id=<?php echo $row['contact_details_id']; ?>" class="text-decoration-none btn  btn-outline-primary mt-2">Update</a>
					<!---
					<a href="contact_details_delete.php?id=<?php echo $row['contact_details_id']; ?>" class="text-decoration-none btn  btn-outline-danger">Delete</a>
					--->

				</div>
			</div>
		</div>
	<?php
		$i++;
	}
	?>
</div>
<?php

include 'footer.php';
?>