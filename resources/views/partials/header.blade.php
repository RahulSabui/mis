<!--start header -->
<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand gap-1 gap-md-3">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>
            <div class="position-relative w-100">
                <div class="position-relative search-bar d-block">
                    <input class="form-control ps-4 ps-sm-5 pe-md-5 search" placeholder="Search Employee"
                        onclick="toggleSearchList()">
                    <span
                        class="position-absolute top-50 search-show ms-2 ms-sm-3 translate-middle-y start-0 top-50 fs-5"><i
                            class='bx bx-search'></i></span>
                </div>
                <div class="search-employee-list dropdown-menu">
                    <div class="search-list">
                        <div class="list-group">
                            <a href="javascript:;" class=" align-items-center d-flex gap-2 py-1 dropdown-item">
                                <div class="d-flex align-items-center">
                                    <div class="profile-img">
                                        <img src="assets/images/avatars/avatar-1.png" class="rounded-circle"
                                            width="46" height="46" alt="" />
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 font-14">Payment from Michle Jhon</h6>
                                        <p class="mb-0 font-13 text-secondary">SKID : #8547846</p>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:;"
                                class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1 dropdown-item">
                                <div class="d-flex align-items-center">
                                    <div class="profile-img">
                                        <img src="assets/images/avatars/avatar-4.png" class="rounded-circle"
                                            width="46" height="46" alt="" />
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 font-14">Payment from Michle Jhon</h6>
                                        <p class="mb-0 font-13 text-secondary">SKID : #8547846</p>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:;"
                                class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1 dropdown-item">
                                <div class="d-flex align-items-center">
                                    <div class="profile-img">
                                        <img src="assets/images/avatars/avatar-2.png" class="rounded-circle"
                                            width="46" height="46" alt="" />
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 font-14">Payment from Michle Jhon</h6>
                                        <p class="mb-0 font-13 text-secondary">SKID : #8547846</p>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:;"
                                class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1 dropdown-item">
                                <div class="d-flex align-items-center">
                                    <div class="profile-img">
                                        <img src="assets/images/avatars/avatar-3.png" class="rounded-circle"
                                            width="46" height="46" alt="" />
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 font-14">Payment from Michle Jhon</h6>
                                        <p class="mb-0 font-13 text-secondary">SKID : #8547846</p>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:;"
                                class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1 dropdown-item">
                                <div class="d-flex align-items-center">
                                    <div class="profile-img">
                                        <img src="assets/images/avatars/avatar-5.png" class="rounded-circle"
                                            width="46" height="46" alt="" />
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 font-14">Payment from Michle Jhon</h6>
                                        <p class="mb-0 font-13 text-secondary">SKID : #8547846</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center gap-1">

                    <li class="nav-item dropdown dropdown-app">
                        <div class="app-container p-2 my-2">
                        </div>
                    </li>

                    <li class="nav-item dropdown dropdown-large">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
                            data-bs-toggle="dropdown"><span class="alert-count">7</span>
                            <i class='bx bx-bell'></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="javascript:;">
                                <div class="msg-header">
                                    <p class="msg-header-title">Notifications</p>
                                    <a href="{{url('/notification')}}" class="msg-header-badge">View All</a>
                                </div>
                            </a>
                            <div class="header-notifications-list">
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                            <img src="assets/images/avatars/avatar-1.png" class="msg-avatar"
                                                alt="user avatar">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">Daisy Anderson<span
                                                    class="msg-time float-end">5 sec
                                                    ago</span></h6>
                                            <p class="msg-info">The standard chunk of lorem</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="notify bg-light-danger text-danger">dc
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">New Orders <span class="msg-time float-end">2
                                                    min
                                                    ago</span></h6>
                                            <p class="msg-info">You have recived new orders</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                            <img src="assets/images/avatars/avatar-2.png" class="msg-avatar"
                                                alt="user avatar">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">Althea Cabardo <span
                                                    class="msg-time float-end">14
                                                    sec ago</span></h6>
                                            <p class="msg-info">Many desktop publishing packages</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="notify bg-light-success text-success">
                                            <img src="assets/images/app/outlook.png" width="25"
                                                alt="user avatar">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">Account Created<span
                                                    class="msg-time float-end">28 min
                                                    ago</span></h6>
                                            <p class="msg-info">Successfully created new email</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="notify bg-light-info text-info">Ss
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">New Product Approved <span
                                                    class="msg-time float-end">2 hrs ago</span></h6>
                                            <p class="msg-info">Your new product has approved</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                            <img src="assets/images/avatars/avatar-4.png" class="msg-avatar"
                                                alt="user avatar">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">Katherine Pechon <span
                                                    class="msg-time float-end">15
                                                    min ago</span></h6>
                                            <p class="msg-info">Making this the first true generator</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="notify bg-light-success text-success"><i
                                                class='bx bx-check-square'></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">Your item is shipped <span
                                                    class="msg-time float-end">5 hrs
                                                    ago</span></h6>
                                            <p class="msg-info">Successfully shipped your item</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="notify bg-light-primary">
                                            <img src="assets/images/app/github.png" width="25"
                                                alt="user avatar">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">New 24 authors<span
                                                    class="msg-time float-end">1 day
                                                    ago</span></h6>
                                            <p class="msg-info">24 new authors joined last week</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center">
                                        <div class="user-online">
                                            <img src="assets/images/avatars/avatar-8.png" class="msg-avatar"
                                                alt="user avatar">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="msg-name">Peter Costanzo <span
                                                    class="msg-time float-end">6 hrs
                                                    ago</span></h6>
                                            <p class="msg-info">It was popularised in the 1960s</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </li>

                    <li class="nav-item dropdown dropdown-large">
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="header-message-list">
                                <a class="dropdown-item" href="javascript:;">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="position-relative">
                                            <div class="cart-product rounded-circle bg-light">
                                                <img src="assets/images/products/02.png" class=""
                                                    alt="product image">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                            <p class="cart-product-price mb-0">1 X $29.00</p>
                                        </div>
                                        <div class="">
                                            <p class="cart-price mb-0">$250</p>
                                        </div>
                                        <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="user-box dropdown ps-2 ps-md-3">
                <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret"
                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
                    <div class="user-info">
                        <p class="user-name mb-0">Pauline Seitz</p>
                        <p class="designattion mb-0">Web Designer</p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                class="bx bx-user fs-5"></i><span>Profile</span></a>
                    </li>
                    <li><a class="dropdown-item d-flex align-items-center" href="{{ url('/settings') }}"><i
                                class="bx bx-cog fs-5"></i><span>Settings</span></a>
                    </li>

                    <li><a class="dropdown-item d-flex align-items-center" href="{{ url('/logout') }}"><i
                                class="bx bx-log-out-circle"></i><span>Logout</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<!--end header -->