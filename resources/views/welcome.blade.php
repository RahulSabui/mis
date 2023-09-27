@extends('layouts.app')
@section('content')

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
@endsection

<script>
	@if (session('success'))
		toastr.success('{{ session('success') }}');
	@endif

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