<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url()?>css/admin-css/style.css">
	<title>Cinimat</title>
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="logo">
						<a href="#"><img src="<?=base_url()?>assets/images/logo.png" alt="Cinimat" title="Cinimat"></a>
					</div>
				</div>
			</div>
		</div>
	</header>	
	<div class="cin_login">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="cin_login_form">
						<h3>Sign In</h3>
						<form autocomplete="off" id="login_form">
							<div class="mb-3">
								<input type="text" class="form-control" name="user_email" placeholder="Email or Phone Number">
							</div>
							<div class="mb-5">
								<input type="password" class="form-control" name="password" placeholder="password">
							</div>
							
							<div class="mb-3 d-grid mx-auto ">
								<button type="submit" class="btn red_btn">Sign In</button>
							</div>
							<div class="row mb-3">
								<div class="col-sm-6">
									<div class="col-12">
									    <div class="form-check">
									      	<input class="form-check-input form-text mt-2" type="checkbox" id="gridCheck">
									      	<label class="form-check-label form-text" for="gridCheck"> Check me out </label>
									    </div>
								  	</div>
								</div>
								<div class="col-sm-6 text-end">
									<a href="#" class="small text-muted">Need Help?</a>
								</div>
							</div>
							<div class="mt-5 d-flex flex-column">
								<a href="#" class="small text-muted"><i class="fa fa-facebook-square text-white me-2"></i>Login with Facebook</a>
								<span class="small text-muted">New to Cinimat? <a href="<?=base_url()?>register/<?=$type?>" class="ms-2 text-white">Sign Up Now</a></span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>	





	

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
	$("#login_form").submit(function(e){
		e.preventDefault();
		var form_data = $("#login_form").serializeArray();
		$.ajax({
			type:'POST',
			data:  form_data,
			url: "<?=base_url()?>home/login_process",
	        success:function(response){
	        	var obj = JSON.parse(response);
	        	console.log(obj);
	        	alert(obj[0].msg);
	        	if(obj[0].type=='success'){
	        		window.location.replace("<?=base_url()?>dashboard");
	        	}
	        }
		});
	})
</script>
</html>