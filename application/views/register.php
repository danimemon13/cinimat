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
					<div class="cin_login_form cin_register_form">
						<h3>Sign Up</h3>
						<form id="register_form" autocomplete="off" method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-sm-12 col-md-6 col-lg-6">
									<div class="mb-3">
										<input type="text" required="required" class="form-control" name="company_name" placeholder="The Company's name">
									</div>
									<div class="mb-3">
										<input type="text" required="required" class="form-control" name="user_email" placeholder="Email">
									</div>
									<div class="mb-3">
										<textarea class="form-control" name="address" placeholder="Address"></textarea>
									</div>
									<div class="mb-3">
										<textarea class="form-control" required="required" name="account_name" placeholder="Account Name"></textarea>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6">
									<div class="mb-3">
										<input type="password" required="required" class="form-control" name="password" placeholder="password">
										<input type="text" style="display: none;" required="required" class="form-control" value="<?=$type?>" name="type" placeholder="password">
									</div>
									<div class="mb-3">
										<label class="mb-2">A picture of the company's logo</label>
										<input type="file" required="required" class="form-control" name="profile_img">
									</div>
									<div class="mb-3">
										<textarea class="form-control" name="bank_info" placeholder="Bank info to profit transfer"></textarea>
									</div>							
								</div>
								<div class="col-sm-12">
									<div class="mb-3 d-grid mx-auto ">
										<button type="submit" class="btn red_btn">Sign Up</button>
									</div>
									<div class="mt-4 d-flex flex-column">
										<a href="#" class="small text-muted"><i class="fa fa-facebook-square text-white me-2"></i>Login with Facebook</a>
										<span class="small text-muted">Already have an account? <a href="<?=base_url()?>login/<?=$type?>" class="ms-2 text-white">Sign In Now</a></span>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>	





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
$("#register_form").submit(function(e){
	e.preventDefault();
	var form_data = $("#register_form").serializeArray();
	$.ajax({
		type:'POST',
		data:  new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        url: "<?=base_url()?>home/user_add_response",
        success:function(response){
        	var obj = JSON.parse(response);
        	console.log(obj);
        	alert(obj[0].msg);
        }
	});
})
</script>

</body>
</html>