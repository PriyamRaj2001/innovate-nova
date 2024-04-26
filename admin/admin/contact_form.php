<?php
include 'header.php';
include 'config.php'
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<main>
				<div class="container-fluid px-3">
					<h1 class="mt-4">Contact Form</h1>
				</div>
			</main>

		
			 
		</div>
	</div>
</div>


	<div class="container">
		<h1 class="card-header px-3">View</h1>
	
		<?php
	$result = mysqli_query($conn, "SELECT * FROM contact_form");
	$i =1;
	while ($row = mysqli_fetch_array($result)){
	?>
	<div class="container-fluid">
	<div class="card">
	
	<div class="container p-3  pb-3">
		<div class="row card-title fw-bold">S.No <?php echo $i; ?></div>
		<div class="row border-bottom"></div>

		<div class="row card-title fw-bold">Name</div>
		<div class="row border-bottom"><?php echo $row['name']; ?></div>
		<div class="row card-title fw-bold">Email</div>
		<div class="row border-bottom"><?php echo $row['email']; ?></div>
		<div class="row card-title fw-bold">Contact Number</div>
		<div class="row border-bottom"><?php echo $row['number']; ?></div>
		<div class="row card-title fw-bold">Message</div>
		<div class="row border-bottom"><?php echo $row['message']; ?></div>
		
		
		<a href="contact_form_delete.php?id=<?php echo $row['contact_form_id']; ?>" class="text-decoration-none btn  btn-outline-danger">Delete</a>
                                                                
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
