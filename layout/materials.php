<?php
    include('includes/header.php');
    include('includes/navbar.php');
    include('../admin/includes/database/dbconfig.php');

    $material_id 	   = $_POST['material_id'];
    $query 	   = "SELECT * FROM materials,courses WHERE materials.course_id = courses.course_id AND materials.course_id = '$material_id' ";
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
			<h2 class="text-center"><?php echo $row['lec_num']?></h2>
			<a href="../admin/upload/<?php echo $row['content'];?>" download>
				<h4 class="text-center">
					<i class="fas fa-download fa-lg"> Download </i>
				</h4>
			</a>
			<hr>
		</div>

<?php
		}
	}
	else
	{
		echo '<h3 class="text-center" style="margin:25%;">No Record Founded</h3>';
	}
?>

	</div>
</div>
<hr>

	

<?php
    include('includes/footer.php');
    include('includes/scripts.php');
?>