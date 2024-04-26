<?php
include 'header.php';
include 'config.php'
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<main>
				<div class="container-fluid px-4">
					<h1 class="mt-4">Blog</h1>
				</div>
			</main>


			<button class=" btn btn-primary px-3 " onclick="openForm()">Add</button>
			<hr>
			<form id="myForm" method="post" action="blog_insert.php" style="display:none;" enctype="multipart/form-data">
				<div class="form-group">
					<label for="title">Title:</label>
					<input type="text" class="form-control" name="title">
				</div>
				<div class="form-group">
					<label for="title">Post By:</label>
					<input type="text" class="form-control" name="post_by">
				</div>

				<div class="form-group">
					<label for="title">Date:</label>
					<input type="date" class="form-control" name="date">
				</div>

				<div class="form-group">
					<label for="title">Link:</label>
					<input type="link" class="form-control" name="link">
				</div>

				<div class="form-group">
					<label for="header">Description:</label>
					<input type="text" class="form-control" name="descr">
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
		$result = mysqli_query($conn, "SELECT * FROM blogs");
		$i = 1;
		while ($row = mysqli_fetch_array($result)) {
		?>

			<div class="container p-3  pb-3">
				<div class="row card-title fw-bold">Title</div>
				<div class="row border-bottom"><?php echo $row['title']; ?></div>
				<div class="row card-title fw-bold">Post By</div>
				<div class="row border-bottom"><?php echo $row['post_by']; ?></div>
				<div class="row card-title fw-bold">Date</div>
				<div class="row border-bottom"><?php echo $row['date']; ?></div>
				<div class="row card-title fw-bold">Link</div>
				<div class="row border-bottom"><?php echo $row['link']; ?></div>
				<div class="row card-title fw-bold">Description</div>
				<div class="row border-bottom"><?php echo $row['descr']; ?></div>
				<div class="row">
					<div class="col-4 fw-bold text-center">Image </div>
					<div class="col-4  mb-2"> <?php echo "<image src= " . $row['image'] . ' width=300px ">'; ?></div>

				</div>
				<a href="blog_update.php?id=<?php echo $row['blog_id']; ?>" class="text-decoration-none btn  btn-outline-primary">Update</a>
				<a href="blog_delete.php?id=<?php echo $row['blog_id']; ?>" class="text-decoration-none btn  btn-outline-danger">Delete</a>

			</div>

		<?php
			$i++;
		}
		include 'footer.php';
		?>
	</div>
</div>


<?php

?>