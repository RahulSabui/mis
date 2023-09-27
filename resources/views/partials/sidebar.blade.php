<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <a href="{{ url('/') }}" class="d-flex align-items-center">
            <div class="logo">
                <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            </div>
            <div>
                <h4 class="logo-text">Vision</h4>
            </div>
        </a>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li class="mm-active"><a href="{{ url('/') }}">
                <div class="parent-icon">⠙⠁
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li class="menu-label">Reports</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">⠑⠍
                </div>
                <div class="menu-title">Employees</div>
            </a>
            <ul>
                <li> <a href="{{ url('/activeEmployee') }}"><i class='bx bx-radio-circle text-danger'></i>Active
                        Employees</a>
                </li>
                <li> <a href="{{ url('/exEmployee') }}"><i class='bx bx-radio-circle text-orange'></i>Ex-Employees</a>
                </li>
                <li> <a href="{{ url('/hiredEmployee') }}"><i class='bx bx-radio-circle text-warning'></i>Hired
                        Employees</a>
                </li>
                <li> <a href="{{ url('/attritionPercentage') }}"><i
                            class='bx bx-radio-circle text-success'></i>Attrition
                    </a>
                </li>
                <li> <a href="{{ url('/noticeEmployee') }}"><i class='bx bx-radio-circle text-primary'></i>Employees on
                        Notice</a>
                </li>
                <li> <a href="{{ url('/ijpEmployee') }}"><i class='bx bx-radio-circle text-blue'></i>IJP</a>
                </li>
                <li> <a href="{{ url('/demographics') }}"><i
                            class='bx bx-radio-circle text-purple'></i>Demographics</a>
                </li>
                <li> <a href="{{ url('/workFrom') }}"><i class='bx bx-radio-circle text-brown'></i>WFO / WFH </a>
                </li>
                <li> <a href="{{ url('/pip') }}"><i class='bx bx-radio-circle text-dark'></i>PIP</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    ⠉⠍
                </div>
                <div class="menu-title">Client</div>
            </a>
            <ul>
                <li> <a href="{{ url('/activeClients') }}"><i class='bx bx-radio-circle text-danger'></i>Clients
                        Report</a>
                </li>
                <li> <a href="{{ url('/activeProcesses') }}"><i class='bx bx-radio-circle text-orange'></i>
                        Processes</a>
                </li>
                <li> <a href="{{ url('/clientsTransition') }}"><i class='bx bx-radio-circle text-warning'></i>Clients
                        in
                        Transition</a>
                </li>
                <li> <a href="{{ url('/ProcessesTransition') }}"><i
                            class='bx bx-radio-circle text-success'></i>Processes in
                        Transition</a>
                </li>
                <li> <a href="{{ url('/assignedResources') }}"><i class='bx bx-radio-circle text-primary'></i>Assigned
                        Resources</a>
                </li>
                <li> <a href="{{ url('/clientsNotice') }}"><i class='bx bx-radio-circle text-blue'></i>Clients Under
                        Notice</a>
                </li>
            </ul>
        </li>

        <li class="menu-label">Management</li>
        <li>
            <a href="{{ url('/hiringList') }}">
                <div class="parent-icon">⠓⠍
                </div>
                <div class="menu-title">Hiring</div>
            </a>
        </li>

    </ul>

    <!-- <div class="sidebar-footer">
        <p class="powerd-by">Powered by <a href="https://techwens.com/" target="_blank">Techwens</a> Private
            Limited</p>
        <p class="text-center">Copyright ©2023</p>
    </div> -->
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->