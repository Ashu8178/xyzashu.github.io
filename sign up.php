<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap.min1.css">
	<link rel="stylesheet" type="text/css" href="css/all.min1.css">
	<link rel="stylesheet" type="text/css" href="mnb.css">
	<title>Sign up</title>
</head>

<body>
	<section class="cont">
		<div class="container">
			<div class="row">
				<div class="img col-lg-6 col-md-6 col-12">
					<img src="SVG images/loginimg.svg">
				</div>
				<div class="img col-lg-6 col-md-6 col-12">
					<div class="container">
						<h1 class="text-center font-weight-bold">Sign up Here</h1>
					</div>
					<form action="submit.php" class="my-5">
						<div class="form-group">

							<input type="text" class="form-control" placeholder="Enter Your Name" id="name" name="name" required
								autocomplete="off">
						</div>
						<div class="form-group">

							<input type="email" class="form-control" name="email" placeholder="Enter Your Email" id="email" required
								autocomplete="off">
						</div>
						<div class="form-group">

							<input type="Password" class="form-control" name="pass" placeholder="Enter Your Password" id="phone" required
								autocomplete="off">
						</div>
						<div class="form-group">
							<input type="Password" class="form-control" name="cpass" placeholder="Confirm" id="phone" required
								autocomplete="off">
						</div>						
						<div class="form-group">
							<input type="Phone" class="form-control" name="phone" placeholder="Enter Your Phone number" id="phone" required
								autocomplete="off">
						</div>						
						<div class="d-flex justify-content-center form-btn mb-3">
							<button type="submit" name="insert" class="btn btn-primary">Submit</button>
						</div>
					</form>
						<h6 class="text-center">Have an account ?<a href="http://localhost/Morden%20web%20Page/anshu/login.php">Login</a></h6>
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