<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url()?>css/style.css">
	<title>Cinimat</title>
</head>
<body>
<header>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
				<div class="logo">
					<a href="#"><img src="<?=base_url()?>assets/images/logo.png" alt="Cinimat" title="Cinimat"></a>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="cin_intro_banner">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="cin_intro_ban_box">
					<h2>Unlimited movies, TV shows, and more.</h2>
					<h3>Watch anywhere. Cancel anytime.</h3>
					<p>Ready to watch? Select your status vendor or user</p>
					<div class="cin_intro_select">
						<ul>
							<li><button onClick="get_type('vendor')" id="cin_vendor_btn"><img src="<?=base_url()?>assets/images/vendor-icon.png" alt=""><span>Select Vendor</span></button></li>
							<li><button onClick="get_type('user')" id="cin_user_btn"><img src="<?=base_url()?>assets/images/user-icon.png" alt=""><span>Select User</span></button></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="list-group list-group-horizontal justify-content-center my-3">
					<li class="list-group-item bg-transparent"><a href="#">Home</a></li>
					<li class="list-group-item bg-transparent"><a href="#">Contact Us</a></li>
					<li class="list-group-item bg-transparent"><a href="#">Help Center</a></li>
					<li class="list-group-item bg-transparent"><a href="#">Terms & Conditions</a></li>
					<li class="list-group-item bg-transparent"><a href="#">Privacy Policy</a></li>
				</ul>
				<ul class="list-group list-group-horizontal justify-content-center my-3 foot_social">
					<li class="list-group-item bg-transparent"><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li class="list-group-item bg-transparent"><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li class="list-group-item bg-transparent"><a href="#"><i class="fa fa-instagram"></i></a></li>
					<li class="list-group-item bg-transparent"><a href="#"><i class="fa fa-youtube"></i></a></li>
				</ul>
				<div class="copyright">
					<p>&copy; Copyright 2020 Cinimat. All rights reserved.</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  $(document).ready(function(){
    $('#cin_vendor_btn').click(function(){
      $(this).addClass('cin_active');
      $(this).removeClass('#cin_vendor_btn');
      $('#cin_user_btn').removeClass('cin_active');
      window.location.replace("<?=base_url()?>login/vendor");
    });
    $('#cin_user_btn').click(function(){
      $(this).addClass('cin_active');
      $(this).removeClass('#cin_user_btn');
      $('#cin_vendor_btn').removeClass('cin_active');
      window.location.replace("<?=base_url()?>login/user");
    });
  });
</script>


