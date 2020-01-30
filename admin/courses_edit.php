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
		    	<h6 class="m-0 font-weight-bold text-primary"> Courses Page Edit </h6>
		  	</div>

		  	<div class="card-body">

		  		<?php
		  			if (isset($_POST['course_edit_btn']))
					{
						$id 	   = $_POST['edit_id'];
						$query 	   = "SELECT * FROM courses WHERE course_id='$id' ";
						$query_run = mysqli_query($connection,$query);

						foreach ($query_run as $row)
						{
				?>
				
				<form action="code.php" method="POST">
					<input type="hidden" name="edit_id" value="<?php echo $row['course_id'];?>">
					<div class="form-group">
						<select class="browser-default custom-select" name="edit_year_id">
                            <option selected>Year Name</option>
                            
                            <?php
                                $query = "SELECT * FROM years";
                                $query_run = mysqli_query($connection,$query);
                                while ($row = mysqli_fetch_assoc($query_run))
                                {
                            ?>

                            <option value="<?php echo $row['year_id'];?>"><?php echo $row['year_name'];?></option>
                            
                            <?php
                                }
                            ?>
                          
                        </select>
					</div>
					<div class="form-group">
						<label>Course Name</label>
						<input type="text" name="edit_course_name" value="<?php echo $row['course_name'];?>" class="form-control" placeholder="Enter Course Name">
					</div>
					<a href="courses.php" class="btn btn-danger"> CANCEL </a>
					<button type="submit" name="course_update_btn" class="btn btn-primary"> UPDATE </button>
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