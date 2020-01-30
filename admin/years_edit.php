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
		    	<h6 class="m-0 font-weight-bold text-primary"> Years Page Edit </h6>
		  	</div>

		  	<div class="card-body">

		  		<?php
		  			if (isset($_POST['year_edit_btn']))
					{
						$id 	   = $_POST['edit_id'];
						$query 	   = "SELECT * FROM years WHERE year_id='$id' ";
						$query_run = mysqli_query($connection,$query);

						foreach ($query_run as $row)
						{
				?>
				
				<form action="code.php" method="POST">
					<input type="hidden" name="edit_id" value="<?php echo $row['year_id'];?>">
					<div class="form-group">
						<label>Year Name</label>
						<input type="text" name="edit_year_name" value="<?php echo $row['year_name'];?>" class="form-control" placeholder="Enter Year Name">
					</div>
					<a href="years.php" class="btn btn-danger"> CANCEL </a>
					<button type="submit" name="year_update_btn" class="btn btn-primary"> UPDATE </button>
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