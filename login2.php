<?php
require "./connector.php";
session_start();
if (isset($_COOKIE["email"]) && isset($_COOKIE["password"])) {
    $email = $_COOKIE["email"];
    $password = $_COOKIE["password"];
    $result = mysqli_query($conn, "SELECT * FROM user_pabowl WHERE email = '$email'");
    $data = mysqli_fetch_assoc($result);

    if ($email === $data["email"] && $password === $data["password"]) {
        $_SESSION["login"] = true;
        $_SESSION["email"] = $data["email"];
    }
}

if (isset($_POST["login"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = mysqli_query($conn, "SELECT * FROM user_pabowl WHERE email='$email'");
    //cek email
    if (mysqli_num_rows($query) == 1) {
        //cek password
        $data = mysqli_fetch_assoc($query);
        if (password_verify($password, $data["password"])) {
            // set seesion
            $_SESSION["login"] = true;
            $_SESSION["email"] = $data["email"];

            if (isset($_POST["check"])) {
                setcookie("email", $data["email"], time() + 86400, "/");
                setcookie("password", $data["password"], time() + 86400, "/");
            }
            header("Location: index.php");
        }
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
						<form action="#" class="signin-form">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username">
							</div>
							<div class="form-group">
								<input id="password-field" type="password" class="form-control" placeholder="Password">
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary"><a href="admin.php" style="color: white;">Log In</a></button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<!-- <div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div> -->
							</div>
						</form>
						<p class="w-100 text-center">Belum memiliki akun? <a href="regist.php">Sign Up</a></p>
						<p class="w-100 text-center">&mdash; or &mdash;</p>
						<div class="social d-flex text-center">
							<a href="login.php" class="px-2 py-2 mr-md-1 rounded"> Login as An User</a>
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

