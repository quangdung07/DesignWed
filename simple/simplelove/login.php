<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/jquery.js"></script>
</head>
<style type="text/css">
	.mb-3  input[type=email] {
    width: 33.3%;
    padding:1%;
    display: block;
    margin-bottom: 10px;
    border-radius: 5px;
    }
    .mb-3 input[type=password]{
    width: 33.3%;
    padding:1%;
    display: block;
    margin-bottom: 10px;
    border-radius: 5px;
    }
</style>
<body background="IMG_0546.jpg">
	<header></header>
	<main>
		<div class="container">
			<form action="login-process.php" method="POST">
				<div class="mb-3">
				<label class="form-label">Email address</label>
			    <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
			    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
			  </div>
			  <div class="mb-3">
			    <label class="form-label">Password</label>
			    <input type="password" class="form-control" name="password">
			  </div>
			  <div class="mb-3 form-check">
			    <input type="checkbox" class="form-check-input" name="rememberMe">
			    <label class="form-check-label">Remember me</label>
			  </div>
			  <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
			</form>
		</div>
	</main>
	<footer></footer>
</body>
</html>