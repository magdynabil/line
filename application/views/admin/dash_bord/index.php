<link rel="stylesheet" href="<?php echo site_url('css/dashbord.css'); ?>">
<!------ Include the above in your HEAD tag ---------->



<!-- Navigation-->
<nav class="mt-5 navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" >
     <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav">


            <li class="nav-item" id="firist">
                <a class="nav-link sidefrst" href="dash_board">
                    <span class="textside">  Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link sidesecnd" href="languages">
                    <span class="textside">  languages</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link sidesthrd" href="user">
                    <span class="textside">  users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link sidesthrd" href="user/show_admin">
                    <span class="textside">  admins</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link sidesforth" href="categories">
                    <span class="textside">  categories</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link sidesfifth" href="movies">
                    <span class="textside">  movies</span>
                </a>
            </li>
        </ul>


    </div>
</nav>

<div class="content-wrapper ">
    <div class="container-fluid">
        <div class="row">

            <!-- Icon Cards-->
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4 mt-5">
                <div class="inforide">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone">
                            <img src="https://vignette.wikia.nocookie.net/nationstates/images/2/29/WS_Logo.png/revision/latest?cb=20080507063620">
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                            <h4>users</h4>
                            <h2><?php echo $users?></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4 mt-5">
                <div class="inforide">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridetwo">
                            <img src="https://vignette.wikia.nocookie.net/nationstates/images/2/29/WS_Logo.png/revision/latest?cb=20080507063620">
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                            <h4>categories</h4>
                            <h2><?php echo $categories?></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4 mt-5">
                <div class="inforide">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridethree">
                            <img src="https://vignette.wikia.nocookie.net/nationstates/images/2/29/WS_Logo.png/revision/latest?cb=20080507063620">
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                            <h4>movies</h4>
                            <h2><?php echo $movies?></h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</body>