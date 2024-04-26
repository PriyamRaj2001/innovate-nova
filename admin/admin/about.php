<?php
include 'header.php';
include 'config.php'
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<main>
				<div class="container-fluid px-3">
					<h1 class="mt-4">About</h1>
				</div>
			</main>
		<!---
			<button class=" btn btn-primary px-3" onclick="openForm()">Add</button>
			<hr>
			<form id="myForm" method="post" action="about_insert.php" style="display:none;" enctype="multipart/form-data">
				<div class="form-group">
					<label for="title">Title:</label>
					<input type="text" class="form-control" name="title">
				</div>
				<div class="form-group">
					<label for="header">Header:</label>
					<input type="text" class="form-control"  name="header">
				</div>
				<div class="form-group">
					<label for="title">Description:</label>
					<input type="text" class="form-control" name="descr">
				</div>
				<div class="form-group">
					<label for="image">Image:</label>
					<input type="file" class="form-control"  name="image">
				</div>
				<button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
				<button type="button" class="btn btn-secondary mt-3" onclick="closeForm()">Close</button>
			</form>
-->

			
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="card">
	<h1 class="card-header">View</h1>
		<?php
	$result = mysqli_query($conn, "SELECT * FROM about");
	$i =1;
	while ($row = mysqli_fetch_array($result)){
	?>
	
	<div class="container p-3  pb-3">
		<div class="row card-title fw-bold">header</div>
		<div class="row border-bottom"><?php echo $row['header']; ?></div>
		<div class="row card-title fw-bold">Description</div>
		<div class="row border-bottom"><?php echo $row['descr']; ?></div>
		<div class="row">
		<div class="col-4 fw-bold text-center pt-2">Image </div>
		<div class="col-4  mb-2 pt-2"> <?php echo "<image src= " . $row['image'] . ' width=400px ">'; ?></div>
		
		</div>
		<a href="about_update.php?id=<?php echo $row['about_id']; ?>" class="text-decoration-none btn  btn-outline-primary">Update</a>
                                                                
	</div>
	</div>
</div>


<?php
}
include 'footer.php';
?>