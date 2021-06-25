<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Edit ask</title>
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/fonts/font-awesome.min.css"> 
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/css/cards.css">
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/css/simple-footer.css">
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/css/styles.css">
	<link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/css/ask-style.css">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background: var(--teal);">
        <div class="container"><a class="navbar-brand" href="<?php echo base_url();""?>;?> style="color: var(--white);">HiFarm</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="<?= base_url()."index.php/main_page/ask_2"; ?>" style="color: var(--white);">Ask</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url()."index.php/main_page/discussion"; ?>" style="color: var(--white);">Discussion</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url()."index.php/main_page/login"; ?>" style="color: var(--white);">Log in</a></li>
				<li class="nav-item"><a class="nav-link" href="<?= base_url()."index.php/main_page/sign_up"; ?>" style="color: var(--white);">Sign Up</a></li>
            </ul><button class="navbar-toggler" data-toggle="collapse"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        </div>
    </nav>
	
	<div class="box_ask">
		<form action="<?php echo base_url()."index.php/main_page/update"; ?>" method="POST">
		<div class= "ask" ><input class="box" type="text" name="tanya" /></div>
		<div><button type="submit" style="color: rgb(255, 255, 255);background: var(--teal);">Edit</button></div>
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
	
  
</body>
</html>
