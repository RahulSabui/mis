<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet" />
	<link href="assets/css/app.css" rel="stylesheet" />
	<link href="assets/css/icons.css" rel="stylesheet" />
	<title>Syndron - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body class="">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-cover">
			<div class="">
				<div class="row g-0">
					<div
						class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">
						<div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
							<div class="card-body">
								<img src="assets/images/login-images/login-cover.svg"
									class="img-fluid auth-img-cover-login" width="650" alt="" />
							</div>
						</div>
					</div>

					<div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
						<div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
							<div class="card-body p-sm-5">
								<div class="">
									<div class="mb-3 text-center">
										<img src="assets/images/logo-icon.png" width="60" alt="" />
									</div>
									<div class="text-center mb-4">
										<h5 class="">Vision</h5>
										<p class="mb-0">Please log in to your account</p>
									</div>
									<div class="form-body">
										<form class="row g-3" id="login-form">
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email</label>
												<input type="email" class="form-control email" id="inputEmailAddress"
													placeholder="jhon@example.com" />

											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0 password"
														id="inputChoosePassword" value="12345678"
														placeholder="Enter Password" />

													<a href="javascript:;" class="input-group-text bg-transparent"><i
															class="bx bx-hide"></i></a>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox"
														id="flexSwitchCheckChecked" />
													<label class="form-check-label"
														for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>
											<div class="col-md-6 text-end">
												<a href="auth-cover-forgot-password">Forgot Password ?</a>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<a id="signUpButton" type="submit" class="btn btn-primary">Sign
														in</a>
												</div>
											</div>
											<div class="col-12">
												<div class="text-center">
													<p class="mb-0">
														Don't have an account yet?
														<a href="auth-cover-signup">Sign up here</a>
													</p>
												</div>
											</div>
										</form>
									</div>
									<div class="login-separater text-center mb-5">
										<span>OR SIGN IN WITH</span>
										<hr />
									</div>
									<div class="list-inline contacts-social text-center">
										<a href="javascript:;"
											class="list-inline-item bg-facebook text-white border-0 rounded-3"><i
												class="bx bxl-facebook"></i></a>
										<a href="javascript:;"
											class="list-inline-item bg-twitter text-white border-0 rounded-3"><i
												class="bx bxl-twitter"></i></a>
										<a href="javascript:;"
											class="list-inline-item bg-google text-white border-0 rounded-3"><i
												class="bx bxl-google"></i></a>
										<a href="javascript:;"
											class="list-inline-item bg-linkedin text-white border-0 rounded-3"><i
												class="bx bxl-linkedin"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			if (sessionStorage.getItem("authToken")) {
				window.location.href = "http://localhost/SunKnowledge";
			}

			$("#signUpButton").on("click", function (e) {
				e.preventDefault();

				var email = $(".email").val();
				var password = $(".password").val();

				if (email == "") {
					$(".email").addClass("is-invalid");

					return

				} else {
					$(".email").removeClass("is-invalid");
				}

				if (password == "") {
					$(".password").addClass("is-invalid");
					return;
				} else {
					$(".password").removeClass("is-invalid");
				}

				if (!isValidEmail(email)) {
					alert("Please enter a valid email address");
					return;
				}


				var dataObject = {
					email: email,
					password: password,
				};

				console.log(dataObject);
				var dataString = JSON.stringify(dataObject);

				$.ajax({
					url: "http://127.0.0.1:8000/login",
					type: "POST",
					data: dataString,
					success: function (response) {
						console.log(response);
						if (response["success"] == true) {
							verifyToken(response.token);
						}
					},
					error: function (xhr, status, error) {
						console.error(error);
						alert("Invalid username or password");
					},
				});
			});

			function verifyToken(token) {
				$.ajax({
					url: "http://127.0.0.1:8000/verify",
					type: "GET",
					headers: {
						Authorization: 'Bearer ' + token,
					},
					success: function (response) {
						if (response.status == 'success') {
							sessionStorage.setItem("authToken", 'Bearer ' + token);
							window.location.href = "http://localhost/sunKnowledge";
						}
					},
					error: function (xhr, status, error) {
						console.error(error);
					},
				});
			}

			function isValidEmail(email) {
				const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
				return emailPattern.test(email);
			}

			$(".email").on("keyup", function () {
				let email = $(".email").val();
				if (!isValidEmail(email)) {
					$(".email").addClass("is-invalid");
				} else {
					$(".email").removeClass("is-invalid");
				}
			});

			$(".password").on("keyup", function () {
				let password = $(".password").val();
				if (password == "") {
					$(".password").addClass("is-invalid");
				} else {
					$(".password").removeClass("is-invalid");
				}
			});

			$("#show_hide_password a").on("click", function (event) {
				event.preventDefault();
				if ($("#show_hide_password input").attr("type") == "text") {
					$("#show_hide_password input").attr("type", "password");
					$("#show_hide_password i").addClass("bx-hide");
					$("#show_hide_password i").removeClass("bx-show");
				} else if (
					$("#show_hide_password input").attr("type") == "password"
				) {
					$("#show_hide_password input").attr("type", "text");
					$("#show_hide_password i").removeClass("bx-hide");
					$("#show_hide_password i").addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>