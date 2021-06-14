<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>diskusi</title>
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/css/login-full-page-bs4.css">
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/css/Navigation-Clean.css">
    <link rel="stylesheet" type = "text/css" href="<?php echo base_url() ?>assets/css/simple-footer.css">
    <style>
        .dis {
    		  width: auto;
    		  height: auto;
    		  padding: 20px;
    		  background-color: white;
    		  box-shadow: 3px 5px 3px 5px grey;
    		  margin : 20px;
    		}
    		
    	.dis button{
    	       float:right;
    	       background-color: var(--teal);
    	       color: white;
    	       margin: 4px 2px;
    	       border: none;    	       
    	}
  </style>
</head>
<body>
	<nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background: var(--teal);">
        <div class="container"><a class="navbar-brand" href="Home.html" style="color: var(--white);">HiFarm</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="<?= base_url()."index.php/main_page/ask_2"; ?>" style="color: var(--white);">Ask</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url()."index.php/main_page/discussion"; ?>" style="color: var(--white);">Discussion</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url()."index.php/main_page/login"; ?>" style="color: var(--white);">Log in</a></li>
				<li class="nav-item"><a class="nav-link" href="<?= base_url()."index.php/main_page/sign_up"; ?>" style="color: var(--white);">Sign Up</a></li>
            </ul><button class="navbar-toggler" data-toggle="collapse"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        </div>
    </nav>
	
	<?php foreach($show as $dat){ ?>
        
	<div class="dis">
		
		<?php
			echo $dat['username']."<hr>";
			echo $dat['pertanyaan'];
		?>
		
		<button href="#">reply</button>
		<button href="#">edit</button>
		<button href="#">hapus</button>
		
	</div>

	<?php } ?>
	
	
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
