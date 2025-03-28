<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>HiFram User</title>
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/css/cards.css">
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/css/dh-card-image-left-dark.css">
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/css/Image-slider-carousel-With-arrow-buttons-1.css">
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/css/Image-slider-carousel-With-arrow-buttons.css">
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/css/login-full-page-bs4.css">
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/css/Navigation-Clean.css">
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/css/simple-footer.css">
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background: var(--teal);">
        <div class="container"><a class="navbar-brand" href="<?php echo base_url();""?> style="color: var(--white);">HiFarm</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="<?= base_url()."index.php/main_page/ask_2"; ?>" style="color: var(--white);">Ask</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url()."index.php/main_page/discussion"; ?>" style="color: var(--white);">Discussion</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url()."index.php/main_page/login"; ?>" style="color: var(--white);">Log in</a></li>
				<li class="nav-item"><a class="nav-link" href="<?= base_url()."index.php/main_page/sign_up"; ?>" style="color: var(--white);">Sign Up</a></li>
				<li class="nav-item"><a class="nav-link" href="<?= base_url()."index.php/main_page/logout"; ?>" style="color: var(--white);">Log Out</a></li>
				
            </ul><button class="navbar-toggler" data-toggle="collapse"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        </div>
    </nav>
    <div>
        <div class="container">
            <h1 class="text-center" style="margin-top:52px;margin-left:34px;font-family:'Open Sans', sans-serif;font-size:22px;font-weight:800;line-height:32px;color:rgb(0,0,0);">Halo <?php echo $this->session->userdata('username') ?></h1>
            <div class="cust_bloglistintro">
                <p style="margin-left:34px;color:rgba(255,255,255,0.5);font-size:14px;"></p>
            </div>
            <div class="row">
                <div class="col-md-4 cust_blogteaser" style="padding-bottom:20px;margin-bottom:32px;"><a href="#"><img class="img-fluid" style="height:auto;" src="<?php echo base_url('assets/img/irigasi.jpg')?>"/></a>
                    <h3 style="text-align:left;margin-top:20px;font-family:'Open Sans', sans-serif;font-size:18px;margin-right:0;margin-left:24px;line-height:34px;letter-spacing:0px;font-style:normal;font-weight:bold;">Fungsi Irigasi Dalam Pertanian<br></h3>
                    <p class="text-secondary" style="text-align:left;font-size:14px;font-family:'Open Sans', sans-serif;line-height:22px;color:rgb(9,9,10);margin-left:24px;"> Begini Caranya Menanam Jagung Untuk Pemula yang benar </p><a class="h4" href="#"><i class="fa fa-arrow-circle-right" style="margin-left:23px;"></i></a>
                </div>
                <div class="col-md-4 cust_blogteaser" style="padding-bottom:20px;margin-bottom:32px;"><a href="#"><img class="img-fluid" style="height:auto;" src="<?php echo base_url('assets/img/teh.jpg')?>"/></a>
                    <h3 style="text-align:left;margin-top:20px;font-family:'Open Sans', sans-serif;font-size:18px;margin-right:0;margin-left:24px;line-height:34px;letter-spacing:0px;font-style:normal;font-weight:bold;">Tips Cermat Memilih Daun Teh Dengan Kualitas Baik<br></h3>
                    <p class="text-secondary" style="text-align:left;font-size:14px;font-family:'Open Sans', sans-serif;line-height:22px;color:rgb(9,9,10);margin-left:24px;"> Teh merupakan infusi yang terbuat dari daun, pucuk daun, dan tangkai daun yang diseduh setelah dikeringkan terlebih dahulu.Di balik kepopuleran akan konsumsi teh, terdapat banyak hal yang mesti diperhatikan dalam memilih teh secara cermat </p><a class="h4" href="#"><i class="fa fa-arrow-circle-right" style="margin-left:23px;"></i></a>
                </div>
                <div class="col-md-4 cust_blogteaser" style="padding-bottom:20px;margin-bottom:32px;"><a href="#"><img class="img-fluid" style="height:auto;" src="<?php echo base_url('assets/img/andaliman.jpg')?>"/></a>
                    <h3 style="text-align:left;margin-top:20px;font-family:'Open Sans', sans-serif;font-size:18px;margin-right:0;margin-left:24px;line-height:34px;letter-spacing:0px;font-style:normal;font-weight:bold;">Rempah Eksotis Dari Batak<br></h3>
                    <p class="text-secondary" style="text-align:left;font-size:14px;font-family:'Open Sans', sans-serif;line-height:22px;color:rgb(9,9,10);margin-left:24px;"> Indonesia terkenal memiliki kekayaan rempah-rempah yang berlimpah.Di Samosir ada rempah-rempah yang selalu digunakan dalam masakan,Namanya Andaliman.Penasaran dengan merica khas batak ini? Simak Penjelasannya berikut ini</p><a class="h4" href="#"><i class="fa fa-arrow-circle-right" style="margin-left:23px;"></i></a>
                </div>
            </div>
    </div>
    <div class="footer-2" style="background: var(--teal);">
        <div class="container">
            <div class="row">
                <div class="col-8 col-sm-6 col-md-6">
                    <p class="text-left" style="margin-top:5%;margin-bottom:3%;">© 2021 RHTD</p>
                </div>
                <div class="col-12 col-sm-6 col-md-6">
                    <p class="text-right" style="margin-top:5%;margin-bottom:8%;font-size:1em;">Privacy Policy</p>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/login-full-page-bs4.js"></script>
    <script src="assets/js/login-full-page-bs4-1.js"></script>
    <script src="assets/js/Image-slider-carousel-With-arrow-buttons.js"></script>
</body>

</html>
