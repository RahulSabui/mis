@extends('layouts.app')
@section('title', 'notification')
@section('content')
            <div class="page-content">
                <div class="card mt-4">

                    <div class="d-flex p-3">
                        <!-- <a class="position-relative p-2" href="#" data-bs-toggle="dropdown">
                            <i class="bx bx-radio-circle-marked bx-burst text-danger notification-alert"></i>
                            <i class="bx bx-bell fs-4"></i>
                        </a> -->
                        <h5 class="mb-0 py-2 ms-3">All Notification</h5>
                    </div>

                    <div class="list-group">
                        <a class="dropdown-item unread-notification" href="javascript:;">
                            <div class="d-flex align-items-center">
                                <div class="user-online">
                                    <img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="msg-name">Daisy Anderson<span
                                            class="msg-time float-end">05/28/2023</span></h6>
                                    <p class="msg-info">The standard chunk of lorem</p>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="javascript:;">
                            <div class="d-flex align-items-center">
                                <div class="user-online">
                                    <img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="msg-name">Daisy Anderson<span
                                            class="msg-time float-end">05/28/2023</span></h6>
                                    <p class="msg-info">The standard chunk of lorem</p>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item unread-notification" href="javascript:;">
                            <div class="d-flex align-items-center">
                                <div class="user-online">
                                    <img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="msg-name">Daisy Anderson<span
                                            class="msg-time float-end">05/29/2023</span></h6>
                                    <p class="msg-info">The standard chunk of lorem</p>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item unread-notification" href="javascript:;">
                            <div class="d-flex align-items-center">
                                <div class="user-online">
                                    <img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="msg-name">Daisy Anderson<span
                                            class="msg-time float-end">05/29/2023</span></h6>
                                    <p class="msg-info">The standard chunk of lorem</p>
                                </div>
                            </div>
                        </a>
                        <div class="devider">
                            <div class="notification-date">30 July, 2023</div>
                        </div>
                        <a class="dropdown-item" href="javascript:;">
                            <div class="d-flex align-items-center">
                                <div class="user-online">
                                    <img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="msg-name">Daisy Anderson<span
                                            class="msg-time float-end">09/13/2023</span></h6>
                                    <p class="msg-info">The standard chunk of lorem</p>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="javascript:;">
                            <div class="d-flex align-items-center">
                                <div class="user-online">
                                    <img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="msg-name">Daisy Anderson<span
                                            class="msg-time float-end">09/13/2023</span></h6>
                                    <p class="msg-info">The standard chunk of lorem</p>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="javascript:;">
                            <div class="d-flex align-items-center">
                                <div class="user-online">
                                    <img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="msg-name">Daisy Anderson<span
                                            class="msg-time float-end">09/13/2023</span></h6>
                                    <p class="msg-info">The standard chunk of lorem</p>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item unread-notification" href="javascript:;">
                            <div class="d-flex align-items-center">
                                <div class="user-online">
                                    <img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="msg-name">Daisy Anderson<span
                                            class="msg-time float-end">09/13/2023</span></h6>
                                    <p class="msg-info">The standard chunk of lorem</p>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="javascript:;">
                            <div class="d-flex align-items-center">
                                <div class="user-online">
                                    <img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="msg-name">Daisy Anderson<span
                                            class="msg-time float-end">09/13/2023</span></h6>
                                    <p class="msg-info">The standard chunk of lorem</p>
                                </div>
                            </div>
                        </a>
                        <div class="devider">
                            <div class="notification-date">Yesterday</div>
                        </div>
                        <a class="dropdown-item unread-notification" href="javascript:;">
                            <div class="d-flex align-items-center">
                                <div class="user-online">
                                    <img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="msg-name">Daisy Anderson<span class="msg-time float-end">5 sec
                                            ago</span></h6>
                                    <p class="msg-info">The standard chunk of lorem</p>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="javascript:;">
                            <div class="d-flex align-items-center">
                                <div class="user-online">
                                    <img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="msg-name">Daisy Anderson<span class="msg-time float-end">5 sec
                                            ago</span></h6>
                                    <p class="msg-info">The standard chunk of lorem</p>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item unread-notification" href="javascript:;">
                            <div class="d-flex align-items-center">
                                <div class="user-online">
                                    <img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="msg-name">Daisy Anderson<span class="msg-time float-end">5 sec
                                            ago</span></h6>
                                    <p class="msg-info">The standard chunk of lorem</p>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item unread-notification" href="javascript:;">
                            <div class="d-flex align-items-center">
                                <div class="user-online">
                                    <img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="msg-name">Daisy Anderson<span class="msg-time float-end">5 sec
                                            ago</span></h6>
                                    <p class="msg-info">The standard chunk of lorem</p>
                                </div>
                            </div>
                        </a>
                        <div class="devider">
                            <div class="notification-date">Today</div>
                        </div>
                    </div>


                </div>
            </div>
       
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->

  





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
    @endsection
   @section('scripts')

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
@endsection