<?php
    include('includes/header.php');
    //include('includes/navbar.php');
    include('../admin/includes/database/dbconfig.php');
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
                        <li class="active"><a href="home.php">Home</a></li>
                        <li><a href="years.php">Lectures</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--end our navbar-->
        <!--start carousel-->
        <div id="myslide" class="carousel slide hidden-xs" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myslide" data-slide-to="0" class="active"></li>
            <li data-target="#myslide" data-slide-to="1"></li>
            <li data-target="#myslide" data-slide-to="2"></li>
            <li data-target="#myslide" data-slide-to="3"></li>
          </ol>

          <div class="carousel-inner" role="listbox">
            <div class="item active" data-interval="1000">
              <img src="image files/40081450_473917006460449_8606995859957088256_n.jpg" alt="pic 1">
              <div class="carousel-caption hidden-xs">
                <h2 class="h1">this for 1<sup>st</sup> year</h2>
                <p>hello everybody to our site we hope that you liked</p>
              </div>
            </div>
            <div class="item" data-interval="1000">
              <img src="image files/38773935_232485090773602_4770503811565355008_n.jpg" alt="pic 2">
              <div class="carousel-caption hidden-xs">
                <h2 class="h1">this for 2<sup>nd</sup> year</h2>
                <p>hello everybody to our site we hope that you liked</p>
              </div>
            </div>
            <div class="item" data-interval="1000">
              <img src="image files/above-adventure-aerial-air.jpg" alt="pic 3">
              <div class="carousel-caption hidden-xs">
                <h2 class="h1">this for 3<sup>rd</sup> year</h2>
                <p>hello everybody to our site we hope that you liked</p>
              </div>
            </div>
            <div class="item" data-interval="1000">
              <img src="image files/ee57c2ad933aabb5f0030e7ade8a5308.jpg" alt="pic 4">
              <div class="carousel-caption hidden-xs">
                <h2 class="h1">this for 4<sup>th</sup> year</h2>
                <p>hello everybody to our site we hope that you liked</p>
              </div>
            </div>
          </div>

          <a class="left carousel-control" href="#myslide" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myslide" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!--end carousel-->

        <!--start section about-->
        <section class="about text-center wow bounceIn" data-wow-duration="1.5s" data-wow-delay="0.1s" data-wow-iteration="2" data-wow-offset="200">
            <div class="container">
                <h1>About Our Website <span>El-Nassag Edu.</span></h1>
                <p class="lead">this website designing by using <strong>bootstrap 3</strong></p>
            </div>
        </section>
        <!--end section about-->

        <!--start section features-->
        <section class="features text-center">
            <div class="container">
                <h2 class="h1">Our Features</h2>
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="feat wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-iteration="1" data-wow-offset="200">
                            <span class="glyphicon glyphicon-ok"></span>
                            <h4>100% Responsive</h4>
                            <p>talk about this feature</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="feat wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-iteration="1" data-wow-offset="200">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                            <h4>Retina Ready</h4>
                            <p>talk about this feature</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="feat wow bounceInDown" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-iteration="1" data-wow-offset="200">
                            <span class="glyphicon glyphicon-eye-open"></span>
                            <h4>Awesome Display</h4>
                            <p>talk about this feature</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="feat wow bounceInRight" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-iteration="1" data-wow-offset="200">
                            <span class="glyphicon glyphicon-pencil"></span>
                            <h4>Well Documented</h4>
                            <p>talk about this feature</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--end section features-->

        <!--start section testimonials-->
        <section class="testimonials text-center">
            <div class="container wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-iteration="1" data-wow-offset="400">
                <h2 class="h1">What Our Clients Say</h2>
                <!--start testimonials carousel-->
                <div id="carousel-testimonials" class="carousel slide" data-ride="carousel">

                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <p class="lead">First Openion First Openion First Openion First Openion First Openion First Openion First Openion First Openion First Openion First Openion First Openion First Openion First Openion First Openion First Openion First Openion First Openion First Openion First Openion First Openion</p>
                        <span>Person 1</span>
                    </div>
                    <div class="item">
                        <p class="lead">Second Openion Second Openion Second Openion Second Openion Second Openion Second Openion Second Openion Second Openion Second Openion Second Openion Second Openion Second Openion Second Openion Second Openion Second Openion </p>
                        <span>Person 2</span>
                    </div>
                    <div class="item">
                        <p class="lead">Third Openion Third Openion Third Openion Third Openion Third Openion Third Openion Third Openion Third Openion Third Openion Third Openion Third Openion Third Openion Third Openion Third Openion Third Openion Third Openion Third Openion </p>
                        <span>Person 3</span>
                    </div>
                    <div class="item">
                        <p class="lead">Fourth Openion Fourth Openion Fourth Openion Fourth Openion Fourth Openion Fourth Openion Fourth Openion Fourth Openion Fourth Openion Fourth Openion Fourth Openion Fourth Openion Fourth Openion Fourth Openion Fourth Openion </p>
                        <span>Person 4</span>
                    </div>
                  </div>

                  <ol class="carousel-indicators">
                    <li data-target="#carousel-testimonials" data-slide-to="0" class="active">
                        <img src="image files/p1.jpg" alt="Dr/Ahmed">
                    </li>
                    <li data-target="#carousel-testimonials" data-slide-to="1">
                        <img src="image files/6831037_1229874310381355_8021580657849824625_n.jpg" alt="Ahmed">
                    </li>
                    <li data-target="#carousel-testimonials" data-slide-to="2">
                        <img src="image files/2638741_894319860904074_7766701597442179072_n.jpg" alt="Eslam">
                    </li>
                    <li data-target="#carousel-testimonials" data-slide-to="3">
                        <img src="image files/6327623_165660637630477_280393907672449024_n.jpg" alt="Zizo">
                    </li>
                  </ol>

                </div>
                <!--end testimonials carousel-->
            </div>
        </section>
        <!--end section testimonials-->

        <!--start section price table-->
        <section class="price-table text-center">
            <h2 class="h1">Our Amazing Prices</h2>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="price-box wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.1s" data-wow-iteration="1" data-wow-offset="400">
                            <h2 class="text-primary">plan #1</h2>
                            <p class="center-block">100 $</p>
                            <ul class="list-unstyled">
                                <li>first category</li>
                                <li>second category</li>
                                <li>third category</li>
                                <li>fourth category</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="price-box wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.1s" data-wow-iteration="1" data-wow-offset="400">
                            <h2 class="text-success">plan #2</h2>
                            <p class="center-block">70 $</p>
                            <ul class="list-unstyled">
                                <li>first category</li>
                                <li>second category</li>
                                <li>third category</li>
                                <li>fourth category</li>
                            </ul>
                            <a href="#" class="btn btn-success">Order Now</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="price-box wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.1s" data-wow-iteration="1" data-wow-offset="400">
                            <h2 class="text-info">plan #3</h2>
                            <p class="center-block">50 $</p>
                            <ul class="list-unstyled">
                                <li>first category</li>
                                <li>second category</li>
                                <li>third category</li>
                                <li>fourth category</li>
                            </ul>
                            <a href="#" class="btn btn-info">Order Now</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="price-box wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.1s" data-wow-iteration="1" data-wow-offset="400">
                            <h2 class="text-danger">plan #4</h2>
                            <p class="center-block">30 $</p>
                            <ul class="list-unstyled">
                                <li>first category</li>
                                <li>second category</li>
                                <li>third category</li>
                                <li>fourth category</li>
                            </ul>
                            <a href="#" class="btn btn-danger">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end section price table-->

        <!--start section our team-->
        <section class="our-team text-center">
            <div class="team">
                <div class="container">
                    <h1>Our Team</h1>
                    <div class="row">

                        <div class="col-lg-3 col-sm-6">
                            <div class="person wow pulse" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-iteration="3" data-wow-offset="150">
                                <img class="img-circle" src="image files/6831037_1229874310381355_8021580657849824625_n.jpg" alt="Ahmed">
                                <h3>Ahmed Nabil</h3>
                                <p>talking about this person</p>
                                <i class="fa fa-google-plus-square fa-2x"></i>
                                <i class="fa fa-facebook-square fa-2x"></i>
                                <i class="fa fa-twitter-square fa-2x"></i>
                                <i class="fa fa-youtube-square fa-2x"></i>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="person wow pulse" data-wow-duration="2s" data-wow-delay="0.1s" data-wow-iteration="3" data-wow-offset="150">
                                <img class="img-circle" src="image files/2638741_894319860904074_7766701597442179072_n.jpg" alt="Eslam">
                                <h3>Eslam Salah</h3>
                                <p>talking about this person</p>
                                <i class="fa fa-google-plus-square fa-2x"></i>
                                <i class="fa fa-facebook-square fa-2x"></i>
                                <i class="fa fa-twitter-square fa-2x"></i>
                                <i class="fa fa-youtube-square fa-2x"></i>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="person wow pulse" data-wow-duration="2s" data-wow-delay="0.1s" data-wow-iteration="3" data-wow-offset="150">
                                <img class="img-circle" src="image files/6327623_165660637630477_280393907672449024_n.jpg" alt="Zizo">
                                <h3>Abd El-Aziz Ahmed</h3>
                                <p>talking about this person</p>
                                <i class="fa fa-google-plus-square fa-2x"></i>
                                <i class="fa fa-facebook-square fa-2x"></i>
                                <i class="fa fa-twitter-square fa-2x"></i>
                                <i class="fa fa-youtube-square fa-2x"></i>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="person wow pulse" data-wow-duration="2s" data-wow-delay="0.1s" data-wow-iteration="3" data-wow-offset="150">
                                <img class="img-circle" src="image files/0155597_506167869482816_7490731222686272656_n.jpg" alt="Hesham">
                                <h3>Hesham Arafat</h3>
                                <p>talking about this person</p>
                                <i class="fa fa-google-plus-square fa-2x"></i>
                                <i class="fa fa-facebook-square fa-2x"></i>
                                <i class="fa fa-twitter-square fa-2x"></i>
                                <i class="fa fa-youtube-square fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end section our team-->

        <!--start section subscribe-->
        <section class="subscribe text-center">
            <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-iteration="1" data-wow-offset="200">
                <h2 class="h1">Keep In Touch</h2>
                <p class="lead">Sign Up For Newsletter</p>
                <form class="form-inline">
                    <input class="form-control input-lg" type="text" placeholder="Enter Your Email">
                    <button class="btn btn-danger btn-lg"><i class="fa fa-edit fa-lg"></i>Subscribe</button>
                </form>
            </div>
        </section>
        <!--end section subscribe-->

        <!--start section statistics-->
        <section class="statistics text-center">
            <div class="data">
                <div class="container">
                    <h1>Our Main Statistics</h1>
                    <div class="row">

                        <div class="col-md-3 col-sm-6">
                            <div class="stats">
                                <i class="fa fa-users fa-5x"></i>
                                <p>5,000</p>
                                <span>Satisfied Users</span>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="stats">
                                <i class="fa fa-comments fa-5x"></i>
                                <p>30,000</p>
                                <span>Posted Comments</span>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="stats">
                                <i class="fa fa-suitcase fa-5x"></i>
                                <p>5,000</p>
                                <span>Projects Done</span>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="stats">
                                <i class="fa fa-support fa-5x"></i>
                                <p>150,000</p>
                                <span>Tickets Archieved</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--end section statistics-->

        <!--start section our skills-->
        <section class="our-skills">
            <div class="container">
                <h2 class="text-center h1">Our Skills</h2>
                <div class="row">
                    <!--start progress skills-->
                    <div class="col-md-5">
                        <div class="progress-skill">

                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                    HTML &amp; CSS
                                </div>
                            </div>

                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                    PHP &amp; My SQL
                                </div>
                            </div>

                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                    JavaScript &amp; JQuery
                                </div>
                            </div>

                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                                    Wordpress
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end progress skills-->

                    <!--start team info-->
                    <div class="col-md-6 col-md-offset-1">
                        <div class="team-info">
                            <h3>About The Team</h3>
                            <p class="lead">We are a team provides the client with what he requests from us on time. Most of our customers have shown great satisfaction with their projects which we implemented for them.</p>
                            <button type="button" class="btn btn-primary"> Talk With A Professional</button>
                        </div>
                    </div>
                    <!--end team info-->
                </div>
            </div>
        </section>
        <!--end section our skills-->

        <!--start section contact us-->
        <section class="contact-us text-center">
            <div class="fields">
                <div class="container">
                    <div class="row">
                        <i class="fa fa-headphones fa-5x"></i>
                        <h2 class="h1">Tell Us What You Feel</h2>
                        <p class="lead">feel free to contact us any time</p>
                        <!--start contact form-->
                        <form role="form">
                            <div class="col-md-6 wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-iteration="1" data-wow-offset="300">

                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="Username">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="Cell Phone">
                                </div>

                            </div>

                            <div class="col-md-6 wow bounceInRight" data-wow-duration="0.7s" data-wow-delay="0.1s" data-wow-iteration="1" data-wow-offset="300">
                                <div class="form-group">
                                    <textarea class="form-control input-lg" placeholder="Your Message"></textarea>
                                </div>
                                <button type="button" class="btn btn-danger btn-lg btn-block">Contact Us</button>
                            </div>
                        </form>
                        <!--end contact form-->
                    </div>
                </div>
            </div>
        </section>
        <!--end section contact us-->

        <!--start section our clients-->
        <section class="our-clients">
            <div class="container">
                <div class="row">
                    <ul class="list-unstyled">

                        <li class="col-md-2 col-xs-4">
                            <img class="img-responsive center-block wow bounce" src="image files/images.jpg" alt="client name" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-iteration="1" data-wow-offset="200"/>
                        </li>

                        <li class="col-md-2 col-xs-4">
                            <img class="img-responsive center-block wow bounce" src="image files/images.jpg" alt="client name" data-wow-duration="1s" data-wow-delay="1s" data-wow-iteration="1" data-wow-offset="200"/>
                        </li>

                        <li class="col-md-2 col-xs-4">
                            <img class="img-responsive center-block wow bounce" src="image files/images.jpg" alt="client name" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-iteration="1" data-wow-offset="200"/>
                        </li>

                        <li class="col-md-2 col-xs-4">
                            <img class="img-responsive center-block wow bounce" src="image files/images.jpg" alt="client name" data-wow-duration="1s" data-wow-delay="2s" data-wow-iteration="1" data-wow-offset="200"/>
                        </li>

                        <li class="col-md-2 col-xs-4">
                            <img class="img-responsive center-block wow bounce" src="image files/images.jpg" alt="client name" data-wow-duration="1s" data-wow-delay="2.5s" data-wow-iteration="1" data-wow-offset="200"/>
                        </li>

                        <li class="col-md-2 col-xs-4">
                            <img class="img-responsive center-block wow bounce" src="image files/images.jpg" alt="client name" data-wow-duration="1s" data-wow-delay="3s" data-wow-iteration="1" data-wow-offset="200"/>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--end section our clients-->

<?php
    include('includes/footer.php');
    include('includes/scripts.php');
?>