<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/topbar.php');
include('includes/database/dbconfig.php');
?>

	<div class="container-fluid">

		<!-- DataTales Example -->
		<div class="card shadow mb-4">
		  	<div class="card-header py-3">
		    	<h6 class="m-0 font-weight-bold text-primary"> About Us Page Edit </h6>
		  	</div>

		  	<div class="card-body">

		  		<?php
		  			if (isset($_POST['contact_edit_btn']))
					{
						$id 	   = $_POST['edit_id'];
						$query 	   = "SELECT * FROM contact WHERE id='$id' ";
						$query_run = mysqli_query($connection,$query);

						foreach ($query_run as $row)
						{
				?>
				
				<form action="code.php" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">
					<div class="form-group">
						<label>Title</label>
						<input type="text" name="edit_title" value="<?php echo $row['title'];?>" class="form-control" placeholder="Enter Title">
					</div>
					<div class="form-group">
						<label>Description</label>
						<input type="text" name="edit_description" value="<?php echo $row['description'];?>" class="form-control" placeholder="Enter Description">
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="text" name="edit_address" value="<?php echo $row['address'];?>" class="form-control" placeholder="Enter Address">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="edit_email" value="<?php echo $row['email'];?>" class="form-control" placeholder="Enter Email">
					</div>
					<div class="form-group">
						<label>Link</label>
						<input type="text" name="edit_link" value="<?php echo $row['link'];?>" class="form-control" placeholder="Enter Link">
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="number" name="edit_phone" value="<?php echo $row['phone'];?>" class="form-control" placeholder="Enter Phone">
					</div>
					<a href="contact.php" class="btn btn-danger"> CANCEL </a>
					<button type="submit" name="contact_update_btn" class="btn btn-primary"> UPDATE </button>
				</form>

				<?php
						}
					}
		  	    ?>

		    </div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
	




<?php
include('includes/scripts.php');
include('includes/footer.php');
?>