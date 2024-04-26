<?php
include 'header.php';
include 'config.php'
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<main>
				<div class="container-fluid px-4">
					<h1 class="mt-4">Counter</h1>
					<ol class="breadcrumb mb-4">
						<li class="breadcrumb-item active">View</li>
					</ol>
				</div>
			</main>

			
			<button class=" btn btn-primary px-3 " onclick="openForm()">Add </button>
			<hr>
			<form id="myForm" method="post" action="counter_insert.php" style="display:none;" enctype="multipart/form-data">
				<div class="form-group">
					<label for="title">Project:</label>
					<input type="text" class="form-control" name="project_name">
				</div>
				<div class="form-group">
					<label for="project number">Total Number:</label>
					<input type="number" class="form-control"  name="project_number">
				</div>
				
				<button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
				<button type="button" class="btn btn-secondary mt-3" onclick="closeForm()">Close</button>
			</form>
			 
		</div>
	</div>
</div>


	<div class="container">
		<h1 class="card-header">View</h1>
	
		<?php
	$result = mysqli_query($conn, "SELECT * FROM counter_project");
	$i =1;
	while ($row = mysqli_fetch_array($result)){
	?>
	<div class="container-fluid">
	<div class="card">
	
	<div class="container p-3  pb-3">
		<div class="row card-title fw-bold">S.No <?php echo $i; ?></div>
		<div class="row border-bottom"></div>
		<div class="row card-title fw-bold">Name</div>
		<div class="row border-bottom"><?php echo $row['project_name']; ?></div>
		<div class="row card-title fw-bold">Number</div>
		<div class="row border-bottom"><?php echo $row['project_number']; ?></div>
		
		<a href="counter_update.php?id=<?php echo $row['counter_id']; ?>" class="text-decoration-none btn  btn-outline-primary">Update</a>
		<a href="counter_delete.php?id=<?php echo $row['counter_id']; ?>" class="text-decoration-none btn  btn-outline-danger">Delete</a>
                                                                
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
