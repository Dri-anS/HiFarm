<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/css/login-full-page-bs4.css">
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/css/Navigation-Clean.css">
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/css/simple-footer.css">
</head>
<body>
<nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background: var(--teal);">
<div class="container"><a class="navbar-brand" href="<?php echo base_url();""?>"style="color: var(--white);">HiFarm</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="<?= base_url()."index.php/main_page/ask_2"; ?>" style="color: var(--white);">Ask</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url()."index.php/main_page/discussion"; ?>" style="color: var(--white);">Discussion</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url()."index.php/main_page/login"; ?>" style="color: var(--white);">Log in</a></li>
				<li class="nav-item"><a class="nav-link" href="<?= base_url()."index.php/main_page/sign_up"; ?>" style="color: var(--white);">Sign Up</a></li>
            </ul><button class="navbar-toggler" data-toggle="collapse"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        </div>
    </nav>

    <div class="container-fluid main-panel">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center" style="padding: 90px;">
                <div class="login-panel">
                	<p style="color:grey">Daftar</p>
                    <div class="login-user-avatar"></div>
                    <div class="login-form">
                        <form action="<?php echo base_url()."index.php/main_page/aksi_daftar"; ?>" method="POST">
                            <div class="form-group">
                                <div class="input-group"><input class="form-control" type="text" id="login-username" name="user" required="" placeholder="Username"></div>
                            </div>
                            <div class="form-group">
                                <div class="input-group"><input class="form-control" type="password" name="pass" required="" placeholder="Password"></div>
                            </div>
                            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="color: rgb(255, 255, 255);background: var(--teal);">Sign Up</button></div>
                        </form>
                    </div>
                    <div class="login-response has-error"></div>
                </div>
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