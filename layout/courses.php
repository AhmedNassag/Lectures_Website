<?php
    include('includes/header.php');
    include('includes/navbar.php');
    include('../admin/includes/database/dbconfig.php');

    $course_id 	   = $_POST['course_id'];
    $query 	   = "SELECT * FROM courses,years WHERE courses.year_id = years.year_id AND courses.year_id = '$course_id' ";
    $query_run = mysqli_query($connection,$query);

    if(mysqli_num_rows($query_run) > 0)
    {
    	
?>



<div class="container">
	<div class="row" style=" padding: 5%;">
				
	<?php 
		while ($row = mysqli_fetch_assoc($query_run))
    	{
    ?>

		<div class="col-md-6" style="padding-bottom: 5%">
			<img class="img-thumbnail center-block" src="image files/1st.jpg">
			<h2 class="text-center"><?php echo $row['course_name']?></h2>
			<form action="materials.php" method="POST">
				<input type="hidden" name="material_id" value="<?php echo $row['course_id'];?>">
				<button type="submit" class="btn btn-primary btn-lg center-block">Go To Materials</button>
			</form>
			<hr>
		</div>

<?php
		}
	}
	else
	{
		echo "No Record Founded";
	}
?>

	</div>
</div>
<hr>

	

<?php
    include('includes/footer.php');
    include('includes/scripts.php');
?>