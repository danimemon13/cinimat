<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url()?>css/admin-css/style.css">
	<title>Cinimat</title>
</head>
<body>
	<div class="cin_dash_header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-3">
					<a href="#"><img src="<?=base_url()?>assets/images/logo.png" alt=""></a>
					<button class="cin_bar_btn"><i class="fa fa-bars"></i></button>
				</div>
				<div class="col-md-6">
					<form><input type="text" class="form-control text-white border-0" name="" placeholder="Search"></form>
				</div>
				<div class="col-md-3 text-end">
					<div class="cin_dash_head_right">
						<nav class="navbar navbar-expand-lg p-0">
						    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
						      <span class="navbar-toggler-icon"></span>
						    </button>
						    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
						    	<a href="#" class="red_btn me-3">Add Video</a>
						      <ul class="navbar-nav">
						        <li class="nav-item dropdown">
						          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						            <img src="<?=base_url()?>assets/images/dashboard/user.png" alt=""> John Doe
						          </a>
						          <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
						            <li><a class="dropdown-item" href="#">Profile</a></li>
						            <li><a class="dropdown-item" href="#">Setting</a></li>
						            <li><a class="dropdown-item" href="index.php">Logout</a></li>
						          </ul>
						        </li>
						      </ul>
						    </div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cin_dash_sidebar">
		<ul>
			<li><a href="#"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
			<li><a href="#"><i class="fa fa-film"></i> <span>All Movies</span></a></li>
			<li><a href="#"><i class="fa fa-file-video-o"></i> <span>All TV Series</span></a></li>
			<li><a href="#"><i class="fa fa-heart"></i> <span>Draft</span></a></li>
			<li><a href="#"><i class="fa fa-heart"></i> <span>Your Videos</span></a></li>
		</ul>
	</div>