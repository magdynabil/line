<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Stand CSS Blog by TemplateMo</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo site_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo site_url('css/fontawesome.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('css/templatemo-stand-blog.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('css/owl.css'); ?>">
<script src="<?php echo site_url('jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo site_url('bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo site_url('js/custom.js'); ?>"></script>
    <script src="<?php echo site_url('js/owl.js'); ?>"></script>
    <script src="<?php echo site_url('js/slick.js'); ?>"></script>
    <script src="<?php echo site_url('js/isotope.js'); ?>"></script>
    <script src="<?php echo site_url('js/accordions.js'); ?>"></script>

    <script language = "text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t){                   //declaring the array outside of the
            if(! cleared[t.id]){                      // function makes it static and global
                cleared[t.id] = 1;  // you could use true and false, but that's more typing
                t.value='';         // with more chance of typos
                t.style.color='#fff';
            }
        }
    </script>
</head>

<body>
<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Header -->
