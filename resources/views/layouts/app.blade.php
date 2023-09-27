<!doctype html>
<html lang="en" class="minimal-theme">

<head>
   @include('partials.styles')
    <title>@yield('title', 'Dashboard')</title>
</head>
<style>
	.error-message {
		color: red;
	}
	.error-input {
		border-color: red;
	}
</style>
<body>
	<!--wrapper-->
	<div class="wrapper">
		@include('partials.sidebar')
		@include('partials.header')
		<!--start page wrapper -->
		<div class="page-wrapper">
            @yield('content')
		</div>
		<!--end page wrapper -->

		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->

		<!--Start Back To Top Button-->
		<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->

	</div>
    @include('partials.scripts');
        @yield('scripts')
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