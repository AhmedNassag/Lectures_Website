<?php
    include('includes/header.php');
    //include('includes/navbar.php');
    include('../admin/includes/database/dbconfig.php');

    $query     = "SELECT * FROM about";
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
                    <a class="navbar-brand" href="#">El-Nassag <span>Edu.</span></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="years.php">Lectures</a></li>
                        <li class="active"><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
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
                    <li class="active">About</li>
                </ol>
            </div>
        </div>
        <!--end section breadcrumb-->
        
        <!--start section about us-->
        <section class="about-us text-center">
            <div class="container py-5">
                <h1 class="text-center" style="font-size: 70px;"><?php echo $row['title']; ?></h1>
                <hr>
                <p class="lead" style="margin-bottom: 50px;"><?php echo $row['description']; ?></p>
                <img class="img-thumbnail" src="image files/company-team_image.jpg" alt="Company Team"/>
            </div>
        </section>
        <!--end section about us-->
        
        <!--start section about features-->
        <section class="about-features text-center" style="padding: 25px;">
            <div class="container py-5">
                <div class="row py-3">
                    
                    <div class="col-sm-4">
                        <i class="fas fa-code fa-5x"></i>
                        <h3>We Love Code</h3>
                    </div>
                    
                    <div class="col-sm-4">
                        <i class="fas fa-child fa-5x"></i>
                        <h3>We Are Happy</h3>
                    </div>
                    
                    <div class="col-sm-4">
                        <i class="fas fa-users fa-5x"></i>
                        <h3>We Are Social</h3>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--end section  about features-->
        
        <!--start section about CEO-->
        <section class="about-ceo">
            <div class="container py-5">
                <div class="row py-3">
                    
                    <div class="col-sm-5">
                       <img class="img-responsive img-thumbnail" src="image files/p4.jpg" alt="ceo"/>
                    </div>
                    
                    <div class="col-sm-7">
                        <h2 class="h1"><?php echo $row['subtitle']; ?></h2>
                        <p class="lead"><?php echo $row['subdescription']; ?></p>
                        <a href="contact.php" class="btn btn-primary btn-lg">Contact Us</a>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--end section about CEO-->
        
        <!--start option box-->
        <section class="option-box">
            <div class="color-option">
                <h4>Color Option</h4>
                <ul class="list-unstyled">
                    <li data-value="default theme"></li>
                    <li data-value="first theme"></li>
                    <li data-value="second theme"></li>
                    <li data-value="third theme"></li>
                    <li data-value="fourth theme"></li>
                </ul>
            </div>
            <i class="fas fa-cogs fa-3x"></i>
        </section>
        <!--end option box-->
        
        <!--start section scroll to top-->
        <div id="scroll-top">
            <i class="fas fa-angle-up fa-3x"></i>
        </div>
        <!--end section scroll to top-->
        
        <!--start section loading-->
        <!--
        <section class="loading-overlay">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </section>
        -->
        <!--end section loading-->



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