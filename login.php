<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap.min1.css">
	<link rel="stylesheet" type="text/css" href="css/all.min1.css">
	<link rel="stylesheet" type="text/css" href="mnb.css">
	<title>Login</title>
</head>

<body>
	<section class="cont">
		<div class="container">
			<div class="row">
				<div class="img col-lg-6 col-md-6 col-12">
					<img src="SVG images/secure_login.svg">
				</div>
				<div class="img col-lg-6 col-md-6 col-12">
					<div class="container">
						<h1 class="text-center font-weight-bold">Login Here</h1>
					</div>
					<form action="check.php" class="my-5">

						<div class="form-group">

							<input type="email" class="form-control" name="email" placeholder="Enter Your Email" id="email" required
								autocomplete="off">
						</div>
						<div class="form-group">

							<input type="Password" class="form-control" name="pass" placeholder="Enter Your Password" id="phone" required
								autocomplete="off">
						</div>						
						<div class="d-flex justify-content-center form-btn my-5">
							<button type="submit" name="insert" class="btn btn-primary">Submit</button>
						</div>
						<h6 class="text-center">Don't Have an account ? <a href="http://localhost/Morden%20web%20Page/anshu/sign%20up.php">Sign up</a></h6>
					</form>
				</div>
			</div>
		</div>
	</section>
	<script src="boost/js/jquery1.js"></script>
	<script src="test1.js"></script>
	</script src="boost/js/bootstrap.min1.js">
	</script>
	<script src="js/all.min1.js"></script>
</body>

</html>