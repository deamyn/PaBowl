<?php
require "connector.php";

if (isset($_POST["daftar"])) {

    $email = strtolower($_POST["email"]);
    $password = $_POST["password"];

	$query = "SELECT email FROM user_pabowl WHERE email = '$email'";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows(($result)) !== 1) {

		$sql = "INSERT INTO user_pabowl(email, password) VALUES ('$email', '$password')";
		mysqli_query($conn, $sql);
        echo "<div class='alert alert-success alert-dismissible fade show fixed-top' role='alert'>
                    <span>Register berhasil, silahkan login!</span>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
        echo "<meta http-equiv='refresh' content='2 url=login.php'>";
    } elseif (mysqli_num_rows(($result)) === 1) {
        echo "<div class='alert alert-danger alert-dismissible fade show fixed-top' role='alert'>
                <span>Email sudah terdaftar!</span>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
<title>Pa-Bowl.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="images/logo-1.png" rel="icon">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<img src="images/logo-2.png" alt="" style="width: 200px; height: 120px;">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<form action="" class="signin-form" method="post">
							<!-- <div class="form-group">
								<input type="text" class="form-control" name="nama" placeholder="Nama">
							</div> -->
							<div class="form-group">
								<input type="text" class="form-control" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input id="password-field" type="password" class="form-control" name="password" placeholder="Password">
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" name="daftar" class="form-control btn btn-primary" href="./user.php">Sign Up</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
							</div>
						</form>
						<p class="w-100 text-center">Sudah memiliki akun? <a href="login.php">Login</a></p>
						<p class="w-100 text-center">&mdash; or &mdash;</p>
						<div class="social d-flex text-center">
							<!-- <button name="login" class="form-control btn btn-primary" href="./user.php">Log In</button> -->
							<a href="regist.php" class="px-2 py-2 mr-md-1 rounded"> Sign Up as An User</a>
							<!-- <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

	</body>
</html>

</a>
							<!-- <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

	</body>
</html>

