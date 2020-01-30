<?php
    include('includes/header.php');
    //include('includes/navbar.php');
    include('../admin/includes/database/dbconfig.php');

    $query     = "SELECT * FROM contact";
    $query_run = mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run) > 0)
    {
        foreach ($query_run as $row)
        {
?>
			


					<!--start our navbar-->
		<nav class="navbar navbar-inverse navbar-fixed-top">
		  	<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
			  		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
			  		</button>
			  		<a class="navbar-brand" href="home.php">El-Nassag <span>Edu.</span></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  		<ul class="nav navbar-nav navbar-right">
						<li><a href="home.php">Home</a></li>
						<li><a href="years.php">Lectures</a></li>
						<li><a href="about.php">About</a></li>
						<li class="active"><a href="contact.php">Contact</a></li>
                	</ul>
              	</div>
            </div>
        </nav>
		<!--end our navbar-->
			<!--start section breadcrumb-->
        	<div class="breadcrumb-holder">
            	<div class="container py-5">
                	<ol class="breadcrumb">
                    	<li><a href="home.php">Home</a></li>
                    	<li class="active">Contact</li>
                	</ol>
            	</div>
        	</div>
        	<!--end section breadcrumb-->

			<!--start section contact us-->
        	<section class="contact-us text-center">
            	<div class="container py-5">
                	<h1 class="text-center" style="font-size: 70px;"><?php echo $row['title']; ?></h1>
                	<hr>
					<p class="lead" style="margin-bottom: 50px;"><?php echo $row['description']; ?></p>
					<img class="img-thumbnail" src="image files/Contact-us.jpg" alt="Company Team"/>
				</div>
			</section>
        	<!--end section contact us-->

			<div class="row py-3">

				<div class="col-md-4">
					<div class="text-center">
						<div class="card" style="margin: 100px;">
							<div class="card-body">
							    <i class="fas fa-map-marker-alt fa-3x"></i>
							    <h2 class="card-title">Address</h2>
								<p class="card-text"><?php echo $row['address']; ?></p>
								<hr>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="text-center">
						<div class="card" style="margin: 100px;">
							<div class="card-body">
							    <i class="fas fa-envelope fa-3x"></i>
							    <h2 class="card-title">Email</h2>
							    <a href="<?php echo $row['link']; ?>"><?php echo $row['email']; ?></a>
							    <hr>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="text-center">
						<div class="card" style="margin: 100px;">
							<div class="card-body">
							    <i class="fas fa-phone fa-3x"></i>
							    <h2 class="card-title">Phone</h2>
							    <p class="card-text"><?php echo $row['phone']; ?></p>
							    <hr>
							</div>
						</div>
					</div>
				</div>
			</div>

<?php
        }
    }
    else
    {
        echo "No Record Founded";
    }
?>

<?php
    include('includes/footer.php');
    include('includes/scripts.php');
?>
