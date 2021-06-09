<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask HiFarm</title>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>HiFarm</title>
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/fonts/font-awesome.min.css"> 
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/css/cards.css">
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/css/simple-footer.css">
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/css/styles.css">
	<style>
		.box_ask{
				background-color: white;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                border-radius: 8px;
                height: 280px;
                width: 800px;
                text-align: center;
                margin: 6rem auto 8rem auto;
                border-style: hidden;
                font-family: 'Josefin Sans', sans-serif;
                padding: 12px;
		}
		.box{
                height: 85px;
                width: 750px;
                border-radius: 8px;
                cursor: text;
				border-color : var(--teal);
				text-align: center;
		}
		.ask{
			padding-top :50px;
			padding-bottom:50px;
			
		}
		button {
			width : 100px;
			border-radius: 8px;
		}
	</style>
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background: var(--teal);">
        <div class="container"><a class="navbar-brand" href="Home.html" style="color: var(--white);">HiFarm</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="ask.html" style="color: var(--white);">Ask</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="color: var(--white);">Discussion</a></li>
                <li class="nav-item"><a class="nav-link" href="login.html" style="color: var(--white);">Log in</a></li>
				<li class="nav-item"><a class="nav-link" href="#" style="color: var(--white);">Sign Up</a></li>
            </ul><button class="navbar-toggler" data-toggle="collapse"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        </div>
    </nav>
	
	<div class="box_ask">
		<div class= "ask" ><input class="box" type="text" name="tanya" placeholder="Tanya tentang perkebunan ..."/></div>
		<div><button type="button" style="color: rgb(255, 255, 255);background: var(--teal);">Ask!</button></div>
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