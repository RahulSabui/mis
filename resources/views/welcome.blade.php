<!doctype html>
<html lang="en" class="minimal-theme">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="assets/css/dark-theme.css" />
	<link rel="stylesheet" href="assets/css/semi-dark.css" />
	<link rel="stylesheet" href="assets/css/header-colors.css" />
	<title>Dashboard</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		@include('partials.sidebar')
		@include('partials.header')
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!-- <div class="row mt-4">
					<div class="col-lg-4">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>

										<h4 class="my-1">Employee Report</h4>
										<p class="mb-0 font-13 text-success"><i
												class='bx bxs-up-arrow align-middle'></i>$34 Since last week</p>
									</div>
									<div class="widgets-icons bg-light-success text-success ms-auto">⠑⠗
									</div>
								</div>
								<div id="chart1"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>

										<h4 class="my-1">Client Report</h4>
										<p class="mb-0 font-13 text-warning"><i
												class='bx bxs-up-arrow align-middle'></i>14% Since last week</p>
									</div>
									<div class="widgets-icons bg-light-warning text-warning ms-auto">⠉⠗
									</div>
								</div>
								<div id="chart2"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>

										<h4 class="my-1">Hiring Report</h4>
										<p class="mb-0 font-13 text-danger"><i
												class='bx bxs-down-arrow align-middle'></i>12.4% Since last week</p>
									</div>
									<div class="widgets-icons bg-light-danger text-danger ms-auto">⠓⠗
									</div>
								</div>
								<div id="chart3"></div>
							</div>
						</div>
					</div>
				</div> -->
				<div class="row mt-4">
					<div class="col-sm-6">
						<div class="card m-0">
							<div class=" radius-10 w-100">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h5 class="mb-0 py-2">Employee Reports</h5>
									</div>
								</div>
								<div class="customers-list px-2 pb-3 mb-3">
									<a href="./activeEmployee.html" class="customers-list-item" target="_blank">

										<h6>Active Employees</h6>
										<i class="fadeIn animated bx bx-link-external"></i>
									</a>
									<a href="./exEmployee.html" class="customers-list-item" target="_blank">

										<h6>Ex-Employees</h6>
										<i class="fadeIn animated bx bx-link-external"></i>
									</a>
									<a href="./hiredEmployee.html" class="customers-list-item" target="_blank">
										<h6>Hired Employees</h6>
										<i class="fadeIn animated bx bx-link-external"></i>
									</a>
									<a href="./attritionPercentage.html" class="customers-list-item" target="_blank">
										<h6>Attrition</h6>
										<i class="fadeIn animated bx bx-link-external"></i>
									</a>
									<a href="./noticeEmployee.html" class="customers-list-item" target="_blank">
										<h6>Employees on Notice</h6>
										<i class="fadeIn animated bx bx-link-external"></i>
									</a>
									<a href="./ijpEmployee.html" class="customers-list-item" target="_blank">
										<h6>IJP</h6>
										<i class="fadeIn animated bx bx-link-external"></i>
									</a>
									<a href="./demographics.html" class="customers-list-item" target="_blank">
										<h6>Demographics</h6>
										<i class="fadeIn animated bx bx-link-external"></i>
									</a>
									<a href="./workFrom.html" class="customers-list-item" target="_blank">
										<h6>WFO / WFH</h6>
										<i class="fadeIn animated bx bx-link-external"></i>
									</a>
									<a href="./pip.html" class="customers-list-item" target="_blank">
										<h6>PIP</h6>
										<i class="fadeIn animated bx bx-link-external"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="card h-100 m-0">
							<div class=" radius-10 w-100 ">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h5 class="mb-0 py-2">Client Reports</h5>
									</div>
								</div>
								<div class="employee-list px-2 pb-3 mb-3">
									<a href="./activeClients.html" class="customers-list-item" target="_blank">
										<h6>Active Clients</h6>
										<i class="fadeIn animated bx bx-link-external"></i>
									</a>
									<a href="./activeProcesses.html" class="customers-list-item" target="_blank">
										<h6>Active Processes</h6>
										<i class="fadeIn animated bx bx-link-external"></i>
									</a>
									<a href="./ClientsTransition.html" class="customers-list-item" target="_blank">
										<h6>Clients in Transition</h6>
										<i class="fadeIn animated bx bx-link-external"></i>
									</a>
									<a href="./ProcessesTransition.html" class="customers-list-item" target="_blank">
										<h6>Processes in Transition</h6>
										<i class="fadeIn animated bx bx-link-external"></i>
									</a>
									<a href="./assignedResources.html" class="customers-list-item" target="_blank">
										<h6>Assigned Resources</h6>
										<i class="fadeIn animated bx bx-link-external"></i>
									</a>
									<a href="./clientsNotice.html" class="customers-list-item" target="_blank">
										<h6>Clients Under Notice</h6>
										<i class="fadeIn animated bx bx-link-external"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->

		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->

		<!--Start Back To Top Button-->
		<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->

	</div>
	<!--end wrapper-->







	<!--start switcher-->
	<!-- <div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr />
			<h6 class="mb-0">Theme Styles</h6>
			<hr />
			<div class="d-flex align-items-center justify-content-between">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
					<label class="form-check-label" for="lightmode">Light</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
					<label class="form-check-label" for="darkmode">Dark</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
					<label class="form-check-label" for="semidark">Semi Dark</label>
				</div>
			</div>
			<hr />
			<div class="form-check">
				<input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
				<label class="form-check-label" for="minimaltheme">Minimal Theme</label>
			</div>
			<hr />
			<h6 class="mb-0">Header Colors</h6>
			<hr />
			<div class="header-colors-indigators">
				<div class="row row-cols-auto g-3">
					<div class="col">
						<div class="indigator headercolor1" id="headercolor1"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor2" id="headercolor2"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor3" id="headercolor3"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor4" id="headercolor4"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor5" id="headercolor5"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor6" id="headercolor6"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor7" id="headercolor7"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor8" id="headercolor8"></div>
					</div>
				</div>
			</div>
			<hr />
			<h6 class="mb-0">Sidebar Colors</h6>
			<hr />
			<div class="header-colors-indigators">
				<div class="row row-cols-auto g-3">
					<div class="col">
						<div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>

	<script src="assets/js/index.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>


	<script>
		// Open Search-List
		function toggleSearchList() {
			var searchList = document.querySelector('.search-employee-list');
			searchList.classList.toggle('open');
		}
		let wrapper = document.querySelector(".page-wrapper")
		wrapper.addEventListener("click", () => {
			var searchList = document.querySelector('.search-employee-list');

			searchList.classList.remove('open');
		});
	</script>
</body>

</html>