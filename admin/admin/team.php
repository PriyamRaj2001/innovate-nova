<?php
include 'header.php';
include 'config.php'
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<main>
				<div class="container-fluid px-4">
					<h1 class="mt-4">Team</h1>
					
				</div>
			</main>


			<button class=" btn btn-primary px-3 " onclick="openForm()">Add</button>
			
			<form id="myForm" method="post" action="team_insert.php" style="display:none;" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" class="form-control" name="name">
				</div>
				<div class="form-group">
					<label for="">Designation:</label>
					<input type="text" class="form-control" name="desi">
				</div>

				<div class="form-group">
					<label for="">Facebook:</label>
					<input type="url" class="form-control" name="fb">
				</div>
				<div class="form-group">
					<label for="">Instagram:</label>
					<input type="url" class="form-control" name="insta">
				</div>
				<div class="form-group">
					<label for="">Twitter:</label>
					<input type="url" class="form-control" name="tw">
				</div>
				<div class="form-group">
					<label for="">Linkedin:</label>
					<input type="url" class="form-control" name="linkedin">
				</div>
				<div class="form-group">
					<label for="image">Image:</label>
					<input type="file" class="form-control" name="image">
				</div>
				<button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
				<button type="button" class="btn btn-secondary mt-3" onclick="closeForm()">Close</button>
			</form>


		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="card">
		<h1 class="card-header">View</h1>
		<?php
		$result = mysqli_query($conn, "SELECT * FROM team");
		$i = 1;
		while ($row = mysqli_fetch_array($result)) {
		?>

			<div class="container p-3  pb-3">
				<div class="row card-title fw-bold">Name</div>
				<div class="row border-bottom"><?php echo $row['name']; ?></div>
				<div class="row card-title fw-bold">Designation</div>
				<div class="row border-bottom"><?php echo $row['desi']; ?></div>
				<div class="row card-title fw-bold">Facebook</div>
				<div class="row border-bottom"><?php echo $row['fb']; ?></div>
				<div class="row card-title fw-bold">Instagram</div>
				<div class="row border-bottom"><?php echo $row['insta']; ?></div>
				<div class="row card-title fw-bold">Twitter</div>
				<div class="row border-bottom"><?php echo $row['tw']; ?></div>
				<div class="row card-title fw-bold">Linkedin</div>
				<div class="row border-bottom"><?php echo $row['linkedin']; ?></div>
				<div class="row">
					<div class="col-4 fw-bold text-center">Image </div>
					<div class="col-4  mb-2"> <?php echo "<image src= " . $row['image'] . ' width=300px ">'; ?></div>

				</div>
				<a href="team_update.php?id=<?php echo $row['team_id']; ?>" class="text-decoration-none btn  btn-outline-primary">Update</a>
		<a href="team_delete.php?id=<?php echo $row['team_id']; ?>" class="text-decoration-none btn  btn-outline-danger">Delete</a>

			</div>
			<?php
			}
			include 'footer.php';
			?>
	</div>
</div>


<?php
		
?>