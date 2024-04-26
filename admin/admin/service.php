<?php
include 'header.php';
include 'config.php'
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<main>
				<div class="container-fluid px-3">
					<h1 class="mt-4">Our Service</h1>
				</div>
			</main>

			<div class="px-3"><button class=" btn btn-primary px-4 " onclick="openForm()">Add </button></div>
			
			
			<form id="myForm" class="px-3" method="post" action="service_insert.php" style="display:none;" enctype="multipart/form-data">
				
				<div class="form-group">
					<label for="">Header:</label>
					<input type="text" class="form-control"  name="header">
				</div>
				<div class="form-group">
					<label for="">Icon:</label>
					<input type="text" class="form-control"  name="icon">
				</div>
				<div class="form-group">
					<label for="">Link:</label>
					<input type="url" class="form-control"  name="link">
				</div>
				<div class="form-group">
					<label for="">description:</label>
					<textarea  name="descr" class="summernote"></textarea>
				</div>
				
				<button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
				<button type="button" class="btn btn-secondary mt-3" onclick="closeForm()">Close</button>
			</form>
			 
		</div>
	</div>
</div>


	<div class="container">
		<h1 class="card-header px-3">View</h1>
	
		<?php
	$result = mysqli_query($conn, "SELECT * FROM services");
	$i =1;
	while ($row = mysqli_fetch_array($result)){
	?>
	<div class="container-fluid">
	<div class="card">
	
	<div class="container p-3  pb-3">
		<div class="row card-title fw-bold">S.No <?php echo $i; ?></div>
		<div class="row border-bottom"></div>

		<div class="row card-title fw-bold">Header</div>
		<div class="row border-bottom"><?php echo $row['header']; ?></div>
		<div class="row card-title fw-bold">Icon</div>
		<div class="row border-bottom"><?php echo $row['icon']; ?></div>
		<div class="row card-title fw-bold">Link</div>
		<div class="row border-bottom"><?php echo $row['link']; ?></div>
		<div class="row card-title fw-bold">Description</div>
		<div class="row border-bottom"><?php echo $row['descr']; ?></div>
		
		<a href="service_update.php?id=<?php echo $row['service_id']; ?>" class="text-decoration-none btn  btn-outline-primary">Update</a>
		<a href="service_delete.php?id=<?php echo $row['service_id']; ?>" class="text-decoration-none btn  btn-outline-danger">Delete</a>
                                                                
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
