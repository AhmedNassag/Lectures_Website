<?php
    include('includes/header.php');
    include('includes/navbar.php');
    include('../admin/includes/database/dbconfig.php');

    $query 	   = "SELECT * FROM years";
    $query_run = mysqli_query($connection,$query);

    if(mysqli_num_rows($query_run) > 0)
    {
?>



<div class="container">
	<div class="row" style="padding: 5%">

	<?php 
		while ($row = mysqli_fetch_assoc($query_run))
    	{
	?>

		<div class="col-md-6" style="padding-bottom: 5%">
			<img class="img-thumbnail center-block" src="image files/1st.jpg">
			<h2 class="text-center"><?php echo $row['year_name']?>  Year</h2>
			<form action="courses.php" method="POST">
				<input type="hidden" name="course_id" value="<?php echo $row['year_id'];?>">
				<button type="submit" class="btn btn-primary btn-lg center-block" style="margin-top: 3%">Go To Courses</button>
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