@extends('layouts.app')
@section('title', 'employeeAdd')
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-sm-flex align-items-center">
            <div class="breadcrumb-title pe-1 pe-sm-3">Employees</div>
            <div class="ps-sm-1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/employeeList') }}"> Employee
                                List</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Employee</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->


        <!--start stepper-->
        <div class="card">
            <div class="card-body">
                <div id="stepper3" class="bs-stepper gap-4 vertical">
                    <div class="bs-stepper-header" role="tablist">
                        <div class="step" data-target="#test-vl-1">
                            <div class="step-trigger" role="tab" id="stepper3trigger1" aria-controls="test-vl-1">
                                <div class="bs-stepper-circle"><i class='bx bx-user fs-4'></i></div>
                                <div class="">
                                    <h5 class="mb-0 steper-title">Basic Information</h5>
                                    <p class="mb-0 steper-sub-title employeeDemoTitle">Employee's Demographics
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="step" data-target="#test-vl-2">
                            <div class="step-trigger" role="tab" id="stepper3trigger2" aria-controls="test-vl-2">
                                <div class="bs-stepper-circle"><i class='bx bx-file fs-4'></i></div>
                                <div class="">
                                    <h5 class="mb-0 steper-title">Address</h5>
                                    <p class="mb-0 steper-sub-title">Permanent & Residential</p>
                                </div>
                            </div>
                        </div>

                        <div class="step" data-target="#test-vl-3">
                            <div class="step-trigger" role="tab" id="stepper3trigger3" aria-controls="test-vl-3">
                                <div class="bs-stepper-circle"><i class='bx bxs-graduation fs-4'></i></div>
                                <div class="">
                                    <h5 class="mb-0 steper-title">Employee Information</h5>
                                    <p class="mb-0 steper-sub-title">Additional Details</p>
                                </div>
                            </div>
                        </div>

                        <div class="step processAssignmentDiv" data-target="#test-vl-4">
                            <div class="step-trigger" role="tab" id="stepper3trigger4" aria-controls="test-vl-4">
                                <div class="bs-stepper-circle"><i class="fadeIn animated bx bx-message-edit fs-4"></i></div>
                                <div class="">
                                    <h5 class="mb-0 steper-title">Process Assignment</h5>
                                    <p class="mb-0 steper-sub-title">Work Details</p>
                                </div>
                            </div>
                        </div>

                        <div class="step ijpDiv" style="display: none" data-target="#test-vl-5">
                            <div class="step-trigger" role="tab" id="stepper3trigger5" aria-controls="test-vl-5">
                                <div class="bs-stepper-circle"><i class='bx bx-briefcase fs-4'></i></div>
                                <div class="">
                                    <h5 class="mb-0 steper-title">IJP</h5>
                                    <p class="mb-0 steper-sub-title">Internal Job Promotion</p>
                                </div>
                            </div>
                        </div>

						<div class="step pipDiv" style="display: none" data-target="#test-vl-6">
							<div class="step-trigger" role="tab" id="stepper3trigger6" aria-controls="test-vl-6">
								<div class="bs-stepper-circle"><i class='bx bx-briefcase fs-4'></i></div>
								<div class="">
									<h5 class="mb-0 steper-title">PIP</h5>
									<p class="mb-0 steper-sub-title">Personal Improvement Plan</p>
								</div>
							</div>
						</div>

						<div class="step historyDiv" style="display: none" data-target="#test-vl-7">
							<div class="step-trigger" role="tab" id="stepper3trigger7" aria-controls="test-vl-7">

								<div class="btn btn-primary d-flex align-items-center w-100 py-2">
									<i class="fadeIn animated bx bx-history fs-3"></i>
									<h5 class="mb-0 steper-title text-white">History</h5>
								</div>
							</div>
						</div>
                    </div>

                    <div class="bs-stepper-content w-100">
                        <form id="myform" onSubmit="return false">
                            <input type="hidden" value="" id="id" name="id">
                            <!-- Card of Basic Information -->
                            <div id="test-vl-1" role="tabpane3" class="bs-stepper-pane content fade"
                                aria-labelledby="stepper3trigger1">
                                <h5 class="mb-4">Basic Information</h5>

                                <div class="row g-3 ab">
                                    <div class="col-sm-6 col-md-6 col-lg-12 col-xl-9 ">
                                        <label for="input1" class="form-label">Name<span
                                                class="requir-field">*</span></label>
                                        <input type="text" class="form-control name error-name" id="input1"
                                            name="name" id="name">
                                        <span class="error-message" id="errorName"></span>
                                    </div>
                                    <div class="col-sm-6 col-md-3 col-lg-6 col-xl-3">
                                        <label for="input2" class="form-label">SKID<span
                                                class="requir-field">*</span></label>
                                        <input type="text" class="form-control SKID" name="SKID" id="input2">
                                        <span class="error-message" id="errorSKID"></span>
                                    </div>
                                    <div class="col-sm-6 col-md-3 col-lg-6 col-xl-3">
                                        <label for="input6" class="form-label">Phone<span class="requir-field">*</span>
                                        </label>
                                        <input type="text" name="phone" class="form-control phone" id="input6">
                                        <span class="error-message" id="errorPhone"></span>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6 col-xl-3">
                                        <label for="input6" class="form-label">Emergency Contact
                                        </label>
                                        <input type="text" name="emergencyContact"
                                            class="form-control emergencyContact" id="input6">
                                        <span class="error-message" id="errorEmergencyContect"></span>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6 col-xl-6">
                                        <label for="input3" class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control email" id="input3">
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6 col-xl-2">
                                        <label for="input1" class="form-label">Age</label>
                                        <input type="text" name="age" class="form-control age" id="input1">
                                        <span class="error-message" id="errorAge"></span>

                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                                        <label for="input2" class="form-label">Gender</label>
                                        <select id="input7" name="gender" class="form-select gender">
                                            <option value="" disabled selected>Select</option>
                                            <option value="Woman">Woman</option>
                                            <option value="Man">Man</option>
                                            <option value="Transgender Woman">Transgender Woman</option>
                                            <option value="Transgender Man">Transgender Man</option>
                                            <option value="Non-Binary">Non-Binary</option>
                                            <option value="Agender">Agender</option>
                                            <option value="Gender not listed">Gender not listed</option>
                                            <option value="Prefer not to state">Prefer not to state</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                                        <label for="input3" class="form-label">Religion</label>
                                        <select id="input7" name="religion" class="form-select religion">
                                            <option value="" disabled selected>Select</option>
                                            <option value="Hinduism">Hinduism</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Christianity">Christianity</option>
                                            <option value="Sikhism">Sikhism</option>
                                            <option value="Zoroastrianism">Zoroastrianism</option>
                                            <option value="Buddhism">Buddhism</option>
                                            <option value="Jainism">Jainism</option>
                                            <option value="Judaism">Judaism</option>
                                            <option value="Bahaism">Bahaism</option>
                                            <option value="None">None</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6 col-xl-2">
                                        <label for="input2" class="form-label">Blood Group</label>
                                        <select id="input7" name="bloodGroup" class="form-select bloodGroup">
                                            <option value="" disabled selected>Select</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6 col-xl-6">
										<label for="input3" class="form-label">Qualification</label>
										<select id="input7" name="qualification" class="form-select qualification">
											<option value="" disabled selected>Select</option>
											<option value="Higher Secondary – grade 10">Higher Secondary – grade 10</option>
											<option value="Higher Secondary – grade 12 ">Higher Secondary – grade 12 </option>
                                            <option value="Bachelor’s degree - Arts">Bachelor’s degree - Arts</option>
											<option value="Bachelor’s degree - Architecture">Bachelor’s degree - Architecture</option>
											<option value="Bachelor’s degree - Agricultural">Bachelor’s degree - Agricultural</option>
                                            <option value="Bachelor’s degree - Veterinary">Bachelor’s degree - Veterinary</option>
											<option value="Bachelor’s degree - Civil Aviation and Merchant Navy">Bachelor’s degree - Civil Aviation and Merchant Navy</option>
											<option value="Bachelor’s degree - Commerce">Bachelor’s degree - Commerce</option>
                                            <option value="Bachelor’s degree - Engineering">Bachelor’s degree - Engineering</option>
											<option value="Bachelor’s degree - Fashion and Interior Designing">Bachelor’s degree - Fashion and Interior Designing</option>
											<option value="Bachelor’s degree - Information Technology">Bachelor’s degree - Information Technology</option>
                                            <option value="Bachelor’s degree - Law">Bachelor’s degree - Law</option>
											<option value="Bachelor’s degree - Management">Bachelor’s degree - Management</option>
											<option value="Bachelor’s degree - Mass Communications">Bachelor’s degree - Mass Communications</option>
                                            <option value="Bachelor’s degree - Medical">Bachelor’s degree - Medical</option>
											<option value="Bachelor’s degree - Multimedia">Bachelor’s degree - Multimedia</option>
											<option value="Bachelor’s degree - Science">Bachelor’s degree - Science</option>
                                            <option value="Master’s degree">Master’s degree</option>
											<option value="Diploma">Diploma</option>
										</select>
									</div>
                                    <div class="col-sm-6 col-md-4 col-lg-6 col-xl-6">
										<label for="input3" class="form-label">Academic Stream</label>
										<select id="input7" name="academicStream" class="form-select academicStream">
											<option value="" disabled selected>Select</option>
											<option value="Academic1">Academic1</option>
											<option value="Academic2">Academic2</option>
											<option value="Academic3">Academic3</option>
										</select>
									</div>
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <label for="input3" class="form-label">School</label>
                                        <input type="text" name="school" class="form-control school" id="input3">
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <label for="input3" class="form-label">College</label>
                                        <input type="text" name="college" class="form-control college"
                                            id="input3">
                                    </div>
                                    <div class="col-12">
                                        <label for="input6" class="form-label">Food Preference</label>
                                        <input type="text" name="foodPreference" class="form-control foodPreference"
                                            id="input6">
                                    </div>
                                    <div class="col-auto cursor-pointer">

                                        <!-- <input id="fancy-file-upload" type="file" name="files"
                         accept=".jpg, .png, image/jpeg, image/png" multiple> -->
                                        <div class="file-upload">
                                            <input id="file" type="file" name="files" class="upload-input">
                                            <div class="uploaded-img">
                                                <!-- <img src="./assets/images/uploadimg-dummy.webp" alt=""> -->
                                                <!-- <i class="fadeIn animated bx bx-user fs-4"></i> -->
                                                <img id="uploadedImage" src="" alt=""
                                                    style="display: none;">
                                                <i class="fadeIn animated bx bx-user fs-4"></i>
                                            </div>
                                            <div class="uploaded-des">
                                                <p>Upload Photo</p>
                                                Maximum size 2MB
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="mt-4 mb-2" />
                                    <div class="col-12 addMoreContainer">
                                        <div class="row g-3 relative-section">
                                            <div class="col">
                                                <div class="row g-3">
                                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                        <label for="input6" class="form-label">Relative’s
                                                            Name</label>
                                                        <input type="text" name="relativeName"
                                                            class="form-control relativeName" id="input6">
                                                    </div>
                                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                        <label for="input2" class="form-label">Relationship</label>
                                                        <select id="input7" name="relationWithRelative"
                                                            class="form-select relationWithRelative">
                                                            <option disabled value="" selected>Select</option>
                                                            <option value="Sibling">Sibling</option>
							                            	<option value="Spouse">Spouse</option>
								                            <option value="Partner">Partner</option>
								                            <option value="Parent">Parent</option>
								                            <option value="Cousin">Cousin</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto col-lg-3 col-xxl-2 d-flex align-items-end flex-column">
                                                <label for="input6" class="form-label">&nbsp;</label>
                                                <div>
                                                    <button class="btn btn-primary addMore" id="addMore">Add
                                                        More</button>
                                                </div>
                                            </div>
                                            <hr class="mt-4 mb-2" />
                                        </div>
                                    </div>
                                    <!-- <div class="col-12">
                        <div class="row g-3">
                         <div class="col">
                          <div class="row g-3">
                           <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                            <label for="input6" class="form-label">Relative’s
                             Name</label>
                            <input type="text" class="form-control" id="input6">
                           </div>
                           <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                            <label for="input2"
                             class="form-label">Relationship</label>
                            <select id="input7" class="form-select">
                             <option selected></option>
                             <option>A</option>
                             <option>B</option>
                             <option>c</option>
                            </select>
                           </div>
                          </div>
                         </div>
                         <div
                          class="col-auto col-lg-3 col-xxl-2 d-flex align-items-end flex-column">
                          <label for="input6" class="form-label">&nbsp;</label>
                          <div><button class="btn btn-danger" id="remove">Remove</button>
                          </div>
                         </div>
                         <hr class="mt-4 mb-2" />
                        </div>
                       </div> -->

                                </div>
                                <!---end row-->
                            </div>


                            <!-- Card of Address -->
                            <div id="test-vl-2" role="tabpane3" class="bs-stepper-pane content fade"
                                aria-labelledby="stepper3trigger2">

                                <h5 class="mb-4">Permanent Address</h5>
                                <div class="row g-3">
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <label for="input1" class="form-label">Street Address 1<span
                                                class="requir-field">*</span></label>
                                        <input type="text" name="streetAddress1" class="form-control streetAddress1"
                                            id="input1">
                                        <span class="error-message" id="errorStreetAddress1"></span>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <label for="input1" class="form-label">Street Address 2</label>
                                        <input type="text" name="streetAddress2" class="form-control streetAddress2"
                                            id="input1">
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <label for="input3" class="form-label">Area<span
                                                class="requir-field">*</span></label>
                                        <input type="text" name="area" class="form-control area" id="input3">
                                        <span class="error-message" id="errorArea"></span>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <label for="input2" class="form-label">State<span
                                                class="requir-field">*</span></label>
                                        <select id="input7" name="state" class="form-select state">
                                            <option value="" disabled selected>Select</option>
                                            <option value="West Bengal">West Bengal</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Kashmir">Kashmir</option>
                                        </select>
                                        <span class="error-message" id="errorState"></span>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-2">
                                        <label for="input3" class="form-label">PIN<span
                                                class="requir-field">*</span></label>
                                        <input type="text" name="pin" class="form-control pin" id="input3">
                                        <span class="error-message" id="errorPin"></span>
                                    </div>

                                </div>
                                <hr class="my-4" />
                                <div class="my-4 d-sm-flex justify-content-between">
                                    <h5>Residential Address</h5>
                                    <div class="form-check">
                                        <input class="form-check-input sameAddress" type="checkbox" name="sameAddress"
                                            value="" id="flexCheckDefault">
                                        <label class="form-check-label same-as" for="flexCheckDefault">
                                            Same as Permanent Address
                                        </label>
                                    </div>
                                </div>

                                <div class="row g-3">
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <label for="input1" class="form-label">Street Address 1<span
                                                class="requir-field">*</span></label>
                                        <input type="text" name="residentialStreetAddress"
                                            class="form-control residentialStreetAddress" id="input1">
                                        <span class="error-message" id="errorResidentialStreetAddress"></span>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <label for="input1" class="form-label">Street Address 2</label>
                                        <input type="text" name="residentialStreetAddress2"
                                            class="form-control residentialStreetAddress2" id="input1">
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <label for="input3" class="form-label">Area<span
                                                class="requir-field">*</span></label>
                                        <input type="text" name="residentialArea" class="form-control residentialArea"
                                            id="input3">
                                        <span class="error-message" id="errorResidentialArea"></span>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <label for="input2" class="form-label">State<span
                                                class="requir-field">*</span></label>
                                        <select id="input7" name="residentialState"
                                            class="form-select residentialState">
                                            <option value="" disabled selected>Select</option>
                                            <option value="West Bengal">West Bengal</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Kashmir">Kashmir</option>

                                        </select>
                                        <span class="error-message" id="errorResidentialState"></span>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-2">
                                        <label for="input3" class="form-label">PIN<span
                                                class="requir-field">*</span></label>
                                        <input type="text" name="residentialPin" class="form-control residentialPin"
                                            id="input3">
                                        <span class="error-message" id="errorResidentialPin"></span>
                                    </div>
                                    <div class="col-12">
										<label for="input3" class="form-label">Drop Location<span class="requir-field">*</span></label>
										<select id="input7" name="dropLocation" class="form-select dropLocation">
											<option value="" disabled selected>Select</option>
											{{-- <option>Location</option>
											<option>Location</option>
											<option>Location</option> --}}
										</select>
									</div>
                                </div>
                                <!---end row-->

                            </div>


                            <!-- Card of Employee Information -->
                            <div id="test-vl-3" role="tabpane3" class="bs-stepper-pane content fade"
                                aria-labelledby="stepper3trigger3">
                                <h5 class="mb-4">Employee Information</h5>
                                <div class="row g-3">
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <label for="input3" class="form-label">Designation<span
                                                class="requir-field">*</span></label>
                                        <select class="form-select lookup designation" name="designation"
                                            id="prepend-text-single-field" >
                                            <option selected disabled value="">Select</option>
                                            {{-- <option value="1">Reactive</option>
                         <option value="2">Solution</option>
                         <option value="3">Conglomeration</option>
                         <option value="4">Algoritm</option>
                         <option value="5">Holistic</option> --}}
                                        </select>
                                        <span class="error-message" id="errorDesignation"></span>
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <label for="input2" class="form-label">Employment Status<span
                                                class="requir-field">*</span></label>
                                        <select id="input7" name="employmentStatus"
                                            class="form-select employmentStatus">
                                            <option value="" disabled>Select</option>
                                            <option selected value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                        <span class="error-message" id="errorEmploymentStatus"></span>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <label for="input2" class="form-label">WFO / WFH</label>
                                        <select id="input7" name="workFromHome" class="form-select workFromHome">
                                            <option disabled >Select</option>
                                            <option selected value="Work From Home">Work From Home</option>
                                            <option value="Work From Office">Work From Office</option>
                                        </select>
										<span class="error-message" id="errorWorkFromHome"></span>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <label for="input2" class="form-label">Is Traniee<span
                                                class="requir-field">*</span></label>
                                        <select id="input7" name="isTraniee" class="form-select isTraniee">
                                            <option value="" disabled>Select</option>
                                            <option selected value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                        <span class="error-message" id="errorIsTraniee"></span>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <label for="input6" class="form-label">Shift Timing
                                        </label>
                                        <select id="input7" name="shiftTiming" class="form-select shiftTiming">
                                            <option value="" disabled selected>Select</option>
													<option value="8:00 pm to 3:00 am EST">8:00 pm to 3:00 am EST</option>
													<option value="8:00 pm to 3:00 am CST">8:00 pm to 3:00 am CST</option>
													<option value="8:00 pm to 3:00 am MST">8:00 pm to 3:00 am MST</option>
													<option value="8:00 pm to 3:00 am PST">8:00 pm to 3:00 am PST</option>
													<option value="Day - Regular">Day – Regular</option>
													<option value="Day - Late">Day - Late</option>
                                        </select>
										<span class="error-message" id="errorShiftTiming"></span>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <label for="input6" class="form-label">Date of Joining<span
                                                class="requir-field">*</span></label>
                                        <input type="text" name="dateOfJoining"
                                            class="form-control datepicker dateOfJoining" placeholder="mm-dd-yyyy" />
                                        <span class="error-message" id="errorDateOfJoining"></span>
                                    </div>
									<div class="col-auto cursor-pointer">
										<!-- <input id="fancy-file-upload" type="file" name="files"
											accept=".jpg, .png, image/jpeg, image/png" multiple> -->
										<div class="file-upload">
											<input id="aadharfile" type="file" name="files" class="upload-input">
											<div class="uploaded-img aadhar-img">
												<!-- <img src="./assets/images/uploadimg-dummy.webp" alt=""> -->
                                                <img id="uploadedAadharImage" src="" alt=""
                                                style="display: none;">
												<i class="fadeIn animated bx bx-user fs-4"></i>
											</div>
											<div class="uploaded-des">
												<p>Upload Aadhaar Card</p>
												Maximum size 2MB
											</div>
										</div>
									</div>
                                    <hr class="mt-4 mb-2" />
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <label for="input6" class="form-label">Type of Medical Insurance
                                        </label>
                                        <input type="text" name="typeOfMedicalInsurance"
                                            class="form-control typeOfMedicalInsurance" id="input6">
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <label for="input6" class="form-label">Chronic Medical Condition</label>
                                        <input type="text" class="form-control chronicMedicalCondition"
                                            name="chronicMedicalCondition" id="input6">
                                    </div>

                                    <hr class="mt-4 mb-2" />
                                    <div class="col-sm-6 col-md-4 col-lg-6 col-xl-3">
                                        <label for="input2" class="form-label">Service Status<span
                                                class="requir-field">*</span></label>
                                        <select id="input7" name="serviceStatus" class="form-select serviceStatus">
                                            <option value="" disabled>Select</option>
                                            <option selected value="Probation">Probation</option>
                                            <option value="Permanent">Permanent</option>
                                        </select>
                                        <span class="error-message" id="errorServiceStatus"></span>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6 col-xl-3">
                                        <label for="input3" class="form-label">Salary</label>
                                        <input type="text" name="salary" class="form-control salary" id="input3">
                                        <span class="error-message" id="errorSalary"></span>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <label for="input6" class="form-label">Appraisal Cycle<span
                                                class="requir-field">*</span></label>
												<select id="input7" name="appraisalCycle" class="form-select appraisalCycle">
													<option value="" disabled selected>Select</option>
													<option value="January">January</option>
													<option value="February">February</option>
													<option value="March">March</option>
													<option value="April">April</option>
													<option value="May">May</option>
													<option value="June">June</option>
													<option value="July">July</option>
													<option value="August">August</option>
													<option value="September">September</option>
													<option value="October">October</option>
													<option value="November">November</option>
													<option value="December">December</option>
												</select>
												
                                        <span class="error-message" id="errorAppraisalCycle"></span>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <label for="input2" class="form-label">Reporting</label>
                                        <select name="reporting" class="form-select lookup reporting">
                                            <option disabled selected value="">Select</option>
											
                                            <!-- <option>Span head</option>
                         <option>Manager</option>
                         <option>Assistant Manager
                         </option>
                         <option>Team leader</option>
                         <option>Senior Manager</option>
                         <option> Deputy manager</option>
                         <option>TL</option>
                         <option> SME </option> -->
                                        </select>
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <label for="input3" class="form-label">Source of Hiring Request<span
                                                class="requir-field">*</span></label>
                                        <select class="form-select lookup sourceOfHiringRequest"
                                            name="sourceOfHiringRequest">
                                            <option selected disabled value="">Select</option>
                                            <option value="0">Reactive</option>
                                            <option value="1">Solution</option>
                                            <option value="2">Conglomeration</option>
                                            <option value="3">Algoritm</option>
                                            <option value="4">Holistic</option>
                                        </select>
                                        <span class="error-message" id="errorSourceOfHiringRequest"></span>
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-6 permanentDateDiv">
                                        <label for="input6" class="form-label">Permanent Date</label>
                                        <input type="text" name="permanentDate"
                                            class="form-control datepicker permanentDate" placeholder="mm-dd-yyyy" />
											<span class="error-message" id="errorPermanentDate"></span>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6 ">
                                        <label for="input3" class="form-label ">Revenue Earning<span
											class="requir-field">*</span></label>
                                        <select id="input7" name="revenueEarning" class="form-select  revenueEarning">
                                            <option value="" disabled selected>Select</option>
                                            <option value="Revenue Earning">Revenue Earning</option>
                                            <option value="Non-Revenue Earning">Non-Revenue Earning</option>
                                        </select>
										<span class="error-message" id="errorRevenueEarning"></span>
                                    </div>
                                    <hr class="mt-4 mb-2" />

                                    <div class="col-sm-6 col-md-4 col-lg-6">
                                        <label for="input2" class="form-label">Notice Status</label>
                                        <select id="input7" name="noticeStatus" class="form-select noticeStatus">
                                            <option value="" disabled >Select</option>
                                            <option value="Under Notice">Under Notice</option>
                                            <option selected value="Not">Not</option>
                                        </select>
										<span class="error-message" id="errorNoticeStatus"></span>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-6 dateOfNoticeDiv">
                                        <label for="input6" class="form-label">Date of Notice
                                        </label>
                                        <input type="text" name="dateOfNotice"
                                            class="form-control datepicker dateOfNotice" placeholder="mm-dd-yyyy" />
											<span class="error-message" id="errorDateOfNotice"></span>
                                    </div>
                                    <div class="col-sm-6 dateOfExitDiv col-md-4 col-lg-6">
                                        <label for="input6" class="form-label">Date of Exit</label>
                                        <input type="text" name="dateOfExit"
                                            class="form-control datepicker dateOfExit" placeholder="mm-dd-yyyy" />
											<span class="error-message" id="errorDateOfExit"></span>
                                    </div>
                                    <div class="col-12 dateOfExitReasonDiv">
                                        <label for="input11" class="form-label">Exit Reason
                                        </label>
                                        <textarea class="form-control exitReason" name="exitReason" id="input11" rows="4"></textarea>
										<span class="error-message" id="errorExitReason"></span>
                                    </div>
                                    <!-- <div class="col-12">
                        <div class="d-flex align-items-center gap-3">
                         <button class="btn btn-outline-secondary px-md-4"
                          onclick="stepper3.previous()"><i
                           class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                         <button class="btn btn-primary px-md-4"
                          onclick="stepper3.next()">Next<i
                           class='bx bx-right-arrow-alt ms-2'></i></button>
                        </div>
                       </div> -->
                                </div><!---end row-->

                            </div>


                            <!-- Card of Process Assignment -->
                            <!-- <div id="test-vl-4" role="tabpane3" class="bs-stepper-pane content fade"
                      aria-labelledby="stepper3trigger4">
                      <div class="d-flex justify-content-between mb-4">
                       <h5>Process Assignment</h5>
                       <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleVerticallycenteredModal">Add a Process</button>
                       <div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                         <div class="modal-content">
                          <div class="modal-header">
                           <h5 class="modal-title">Add a Process</h5>
                           <button type="button" class="btn-close"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                           <div class="row g-3">
                            <div class="col-12">
                             <label for="input2" class="form-label">Span</label>
                             <select class="form-select lookup"
                              data-placeholder="">
                              <option></option>
                              <option>Reactive</option>
                              <option>Solution</option>
                              <option>Conglomeration</option>
                              <option>Algoritm</option>
                              <option>Holistic</option>
                             </select>
                            </div>
                            <hr class="mt-4 mb-2">
                            <div class="col-12">
                             <label for="input2"
                              class="form-label">Client</label>
                             <select class="form-select lookup"
                              data-placeholder="">
                              <option></option>
                              <option>Reactive</option>
                              <option>Solution</option>
                              <option>Conglomeration</option>
                              <option>Algoritm</option>
                              <option>Holistic</option>
                             </select>
                            </div>
                            <div class="col-12">
                             <label for="multiple-select-field"
                              class="form-label">Process</label>
                             <select class="form-select lookup"
                              data-placeholder="">
                              <option></option>
                              <option>Proccess1</option>
                              <option>Proccess2</option>
                              <option>Proccess3</option>
                              <option>Proccess4</option>
                              <option>Proccess5</option>
                             </select>
                            
                            </div>
                            <div class="col-12">
                             <label for="input2" class="form-label">Billable
                              Status</label>
                             <select id="input7" class="form-select">
                              <option selected></option>
                              <option>billable</option>
                              <option>buffer</option>
                             </select>
                            </div>
                            <div class="col-12">
                             <label for="input3" class="form-label">Contribution
                              %
                             </label>
                             <input type="text" class="form-control" id="input3">
                            </div>
                           </div>
                          </div>
                          <div class="modal-footer">
                           <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Cancel</button>
                           <button type="button" class="btn btn-primary">Add</button>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                      <table class="table mb-0 table-striped">
                       <thead>
                        <tr>

                         <th scope="col">Span</th>
                         <th scope="col">Client</th>
                         <th scope="col">Proccess</th>
                         <th scope="col">Billable Status</th>
                         <th scope="col">Contribution %</th>
                         <th></th>
                        </tr>
                       </thead>
                       <tbody>
                        <tr>

                         <td>Mark</td>
                         <td>Otto</td>
                         <td>Proccess1</td>
                         <td>buffer</td>
                         <td>23 %</td>
                         <td>
                          <div class="d-flex justify-content-end">
                           <i class="fadeIn animated bx bx-pencil fs-5"></i>
                           <i
                            class="fadeIn animated bx bx-trash-alt delete-proccess ms-2 fs-5"></i>
                          </div>
                         </td>
                        </tr>
                        <tr>

                         <td>Jacob</td>
                         <td>Thornton</td>
                         <td>Proccess2</td>
                         <td>buffer</td>
                         <td>23 %</td>
                         <td>
                          <div class="d-flex justify-content-end">
                           <i class="fadeIn animated bx bx-pencil fs-5"></i>
                           <i
                            class="fadeIn animated bx bx-trash-alt delete-proccess ms-2 fs-5"></i>
                          </div>
                         </td>
                        </tr>
                        <tr>

                         <td>Henry</td>
                         <td>Jeckob</td>
                         <td>Proccess3</td>
                         <td>billable</td>
                         <td>23 %</td>
                         <td>
                          <div class="d-flex justify-content-end">
                           <i class="fadeIn animated bx bx-pencil fs-5"></i>
                           <i
                            class="fadeIn animated bx bx-trash-alt delete-proccess ms-2 fs-5"></i>
                          </div>
                         </td>
                        </tr>
                        <tr>

                         <td>Jacob</td>
                         <td>Thornton</td>
                         <td>Proccess2</td>
                         <td>buffer</td>
                         <td>23 %</td>
                         <td>
                          <div class="d-flex justify-content-end">
                           <i class="fadeIn animated bx bx-pencil fs-5"></i>
                           <i
                            class="fadeIn animated bx bx-trash-alt delete-proccess ms-2 fs-5"></i>
                          </div>
                         </td>
                        </tr>
                        <tr>

                         <td>Henry</td>
                         <td>Jeckob</td>
                         <td>Proccess3</td>
                         <td>buffer</td>
                         <td>23 %</td>
                         <td>
                          <div class="d-flex justify-content-end">
                           <i class="fadeIn animated bx bx-pencil fs-5"></i>
                           <i
                            class="fadeIn animated bx bx-trash-alt delete-proccess ms-2 fs-5"></i>
                          </div>
                         </td>
                        </tr>
                       </tbody>
                      </table>
                      
                     </div> -->

                            <div id="test-vl-4" role="tabpane3" class="bs-stepper-pane content fade"
                                aria-labelledby="stepper3trigger4">
                                <div class="d-flex justify-content-between mb-4">
                                    <h5>Process Assignment</h5>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        id="openProcess" data-bs-target="#exampleVerticallycenteredModal">Add a
                                        Process</button>
                                    <div class="modal fade editModal" id="exampleVerticallycenteredModal" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Add a Process</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row g-3">
                                                        <div class="col-12">
                                                            <label for="input2" class="form-label">Span</label>
                                                            <select class="form-select modelSpan" name="modelSpan"
                                                                data-placeholder="">
                                                                <option value="" disabled selected>Select</option>
                                                                <option value="1">Reactive</option>
                                                                <option value="2">Solution</option>
                                                                <option value="3">Conglomeration</option>
                                                                <option value="4">Algoritm</option>
                                                                <option value="5">Holistic</option>
                                                            </select>
                                                        </div>
                                                        <hr class="mt-4 mb-2">
                                                        <div class="col-12">
                                                            <label for="input2" class="form-label">Client</label>
                                                            <select class="form-select modelClient" name="modelClient"
                                                                data-placeholder="">
                                                                <option selected disabled value="">Select</option>
                                                                <option value="1">Reactive</option>
                                                                <option value="2">Solution</option>
                                                                <option value="3">Conglomeration</option>
                                                                <option value="4">Algoritm</option>
                                                                <option value="5">Holistic</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="multiple-select-field"
                                                                class="form-label">Process</label>
                                                            <select class="form-select modelProcess" name="modelProcess"
                                                                data-placeholder="">
                                                                <option selected disabled value="">Select</option>
                                                                <option value="1">Proccess1</option>
                                                                <option value="2">Proccess2</option>
                                                                <option value="3">Proccess3</option>
                                                                <option value="4">Proccess4</option>
                                                                <option value="5">Proccess5</option>
                                                            </select>
                                                            <!-- <select class="form-select"
                                  id="prepend-button-single-field"
                                  data-placeholder="">
                                  <option></option>
                                  <option>Reactive</option>
                                  <option>Solution</option>
                                  <option>Conglomeration</option>
                                  <option>Algoritm</option>
                                  <option>Holistic</option>
                                 </select> -->
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="input2" class="form-label">Billable
                                                                Status</label>
                                                            <select id="input7" class="form-select modelBillable"
                                                                name="modelBillable">
                                                                <option selected disabled value="" selected>Select</option>
                                                                <option value="billable">billable</option>
                                                                <option value="buffer">buffer</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 contributionDiv">
                                                            <label for="input3" class="form-label">Contribution
                                                                %
                                                            </label>
                                                            <input type="text" class="form-control modelContribution"
                                                                name="modelContribution" id="input3">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-primary"
                                                        style="display: block;" id="addProcessButton">Add</button>
                                                    <button type="button" class="btn btn-primary" style="display:none;"
                                                        id="updateProcessButton">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="table mb-0 table-striped">
                                    <thead>
                                        <tr>

                                            <th scope="col">Span</th>
                                            <th scope="col">Client</th>
                                            <th scope="col">Proccess</th>
                                            <th scope="col">Billable Status</th>
                                            <th scope="col">Contribution %</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="asssignProcessTbody">

                                    </tbody>
                                </table>
                                <!---end row-->
                            </div>


                            <!-- Card of Internal Job Promotion Status -->
                            <div id="test-vl-5" role="tabpane3" class="bs-stepper-pane content fade"
                                aria-labelledby="stepper3trigger5">
                                <!-- <div class="d-flex justify-content-between mb-4">
                       <h5>Internal Job Promotion Status</h5>
                       <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#internalJob">Add Status</button>
                       <div class="modal fade" id="internalJob" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                         <div class="modal-content">
                          <div class="modal-header">
                           <h5 class="modal-title">Add Internal Job Promotion Status
                           </h5>
                           <button type="button" class="btn-close"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                           <div class="row g-3">
                            <div class="col-12">
                             <label for="input3" class="form-label">IJP
                              Name</label>
                             <input type="text" class="form-control" id="input3">
                            </div>
                            <div class="col-12 ">
                             <label for="input6" class="form-label">Date of
                              Application
                             </label>
                             <input type="text" class="form-control datepicker"
                              placeholder="mm-dd-yyyy" />
                            </div>
                            <div class="col-12">
                             <label for="input2"
                              class="form-label">Status</label>
                             <select id="input7" class="form-select">
                              <option selected></option>
                              <option>billable</option>
                              <option>buffer</option>
                             </select>
                            </div>
                            <div class="col-12>
																		<label for=" input6" class="form-label">Date of Closure
                             </label>
                             <input type="text" class="form-control datepicker"
                              placeholder="mm-dd-yyyy" />
                            </div>
                            <div class="col-12">
                             <label for="input3" class="form-label">Span</label>
                             <select class="form-select lookup"
                              data-placeholder="">
                              <option></option>
                              <option>Reactive</option>
                              <option>Solution</option>
                              <option>Conglomeration</option>
                              <option>Algoritm</option>
                              <option>Holistic</option>
                             </select>
                            </div>
                            <div class="col-12">
                             <label for="input3" class="form-label">Process
                             </label>
                             <select class="form-select lookup"
                              data-placeholder="">
                              <option></option>
                              <option>Reactive</option>
                              <option>Solution</option>
                              <option>Conglomeration</option>
                              <option>Algoritm</option>
                              <option>Holistic</option>
                             </select>
                            </div>
                            <div class="col-12">
                             <label for="input3" class="form-label">Client
                             </label>
                             <select class="form-select lookup"
                              data-placeholder="">
                              <option></option>
                              <option>Reactive</option>
                              <option>Solution</option>
                              <option>Conglomeration</option>
                              <option>Algoritm</option>
                              <option>Holistic</option>
                             </select>
                            </div>
                           </div>
                          </div>
                          <div class="modal-footer">
                           <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Cancel</button>
                           <button type="button" class="btn btn-primary">Add</button>
                          </div>
                         </div>
                        </div>
                       </div>
                      </div> -->

                                <div class="d-flex justify-content-between mb-4">
                                    <h5>Internal Job Promotion Status</h5>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" id="openIjp"
                                        data-bs-target="#internalJob">Add Status</button>
                                    <div class="modal fade editIjpModal" id="internalJob" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Add Internal Job Promotion Status
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row g-3">
                                                        <div class="col-12">
                                                            <label for="input3" class="form-label">IJP
                                                                Name</label>
                                                            <input type="text modalIjpName"
                                                                class="form-control modalIjpName" id="input3">
                                                        </div>
                                                        <div class="col-12 ">
                                                            <label for="input6" class="form-label">Date of
                                                                Application
                                                            </label>
                                                            <input type="text modalIJpDateOfApplication"
                                                                class="form-control datepicker modalIJpDateOfApplication MIDOA"
                                                                placeholder="mm-dd-yyyy" />
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="input2" class="form-label">Billable
                                                                Status</label>
                                                            <select id="input7"
                                                                class="form-select modalBillableIjpStatus">
                                                                <option disabled selected>Select</option>
                                                                <option value="Billable">Billable</option>
                                                                <option value="Buffer">Buffer</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="input2" class="form-label">
                                                                Status</label>
                                                            <select id="input7" class="form-select modalIjpStatus">
                                                                <option disabled selected>Select</option>
                                                                <option>Completed</option>
                                                                <option>Processing</option>
                                                                <option>Pending</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="input6" class="form-label">Date of
                                                                Closure
                                                            </label>
                                                            <input type="text"
                                                                class="form-control datepicker modalIjpDateOfClosure MIDOC"
                                                                name="modalIjpDateOfClosure" placeholder="mm-dd-yyyy" />
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="input3" class="form-label">Span</label>
                                                            <select class="form-select modalIjpSpan" name="modalIjpSpan"
                                                                data-placeholder="">
                                                                <option selected value="" disabled>Select</option>
                                                                <option value="1">Reactive</option>
                                                                <option value="2">Solution</option>
                                                                <option value="3">Conglomeration</option>
                                                                <option value="4">Algoritm</option>
                                                                <option value="5">Holistic</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="input3" class="form-label">Process
                                                            </label>
                                                            <select class="form-select modalIjpProcess"
                                                                name="modalIjpProcess" data-placeholder="">
                                                                <option selected value="" disabled>Select</option>
                                                                <option value="1">Reactive</option>
                                                                <option value="2">Solution</option>
                                                                <option value="3">Conglomeration</option>
                                                                <option value="4">Algoritm</option>
                                                                <option value="5">Holistic</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="input3" class="form-label">Client
                                                            </label>
                                                            <select class="form-select modalIjpClient"
                                                                name="modalIjpClient" data-placeholder="">
                                                                <option selected value="" disabled>Select</option>
                                                                <option value="1">Reactive</option>
                                                                <option value="2">Solution</option>
                                                                <option value="3">Conglomeration</option>
                                                                <option value="4">Algoritm</option>
                                                                <option value="5">Holistic</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-primary "
                                                        style="display: block;" id="addIjpButton">Add</button>
                                                    <button type="button" class="btn btn-primary "
                                                        style="display: none;" id="updateIjpButton">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <table class="table mb-0 table-striped">
                                    <thead>
                                        <tr>

                                            <th scope="col">IJP Name</th>
                                            <th scope="col">Application Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Closure Date</th>
                                            <th scope="col">Span</th>
                                            <th scope="col">Proccess</th>
                                            <th scope="col">Client</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="asssignIjpTbody">


                                    </tbody>
                                </table>

                            </div>

                           <!-- Card of PIP Status -->
									<div id="test-vl-6" role="tabpane3" class="bs-stepper-pane content fade"
									aria-labelledby="stepper3trigger6">
									<div class="d-flex justify-content-between mb-4">
										<h5>Personal Improvement Plan</h5>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#PIP">Add
											PIP</button>
										<div class="modal fade" id="PIP" tabindex="-1" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Add Personal Improvement Plan
														</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal"
															aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<div class="row g-3">
															<div class="col-12">
																<label for="input3" class="form-label">PIP ID</label>
																<input type="text" class="form-control" id="input3">
															</div>
															<div class="col-12 ">
																<label for="input6" class="form-label">Raised on
																</label>
																<input type="text" class="form-control datepicker" placeholder="mm-dd-yyyy" />
															</div>
															<div class="col-12">
																<label for="input2" class="form-label">Status</label>
																<select id="input7" class="form-select">
																	<option selected></option>
																	<option>Open</option>
																	<option>Resolved </option>
																</select>
															</div>

															<div class="col-12">
																<label for=" input2" class="form-label">Closed on
																</label>
																<input type="text" class="form-control datepicker" placeholder="mm-dd-yyyy" />
															</div>
															<div class="col-12">
																<label for=" input2" class="form-label">Reason
																</label>
																<textarea class="form-control" id="input11" rows="4"></textarea>
															</div>
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
														<button type="button" class="btn btn-primary">Add</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<table class="table mb-0 table-striped">
										<thead>
											<tr>
												<th scope="col">PIP ID</th>
												<th scope="col">Raised on</th>
												<th scope="col">Status</th>
												<th scope="col">Closed on</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>

												<td>PIP-1234567890</td>
												<td>03-21-23</td>
												<td>Open</td>
												<td>03-21-28</td>
												<td>
													<div class="d-flex">
														<i class="fadeIn animated bx bx-pencil fs-5 text-primary" title="Edit"></i>
														<i class="fadeIn animated bx bx-trash-alt delete-proccess ms-2 fs-5" title="Delete"></i>
													</div>
												</td>
											</tr>
											<tr>

												<td>PIP-1234567890 </td>
												<td>03-21-23</td>
												<td>Resolved</td>
												<td>03-21-28</td>

												<td>
													<div class="d-flex">
														<i class="fadeIn animated bx bx-pencil fs-5 text-primary" title="Edit"></i>
														<i class="fadeIn animated bx bx-trash-alt delete-proccess ms-2 fs-5" title="Delete"></i>
													</div>
												</td>
											</tr>
											<tr>
												<td>PIP-1234567890 </td>
												<td>03-21-23</td>
												<td>Resolved </td>
												<td>03-21-28</td>

												<td>
													<div class="d-flex">
														<i class="fadeIn animated bx bx-pencil fs-5 text-primary" title="Edit"></i>
														<i class="fadeIn animated bx bx-trash-alt delete-proccess ms-2 fs-5" title="Delete"></i>
													</div>
												</td>
											</tr>
											<tr>
												<td>PIP-1234567890 </td>
												<td>03-21-23</td>
												<td>Open</td>
												<td>03-21-28</td>
												<td>
													<div class="d-flex">
														<i class="fadeIn animated bx bx-pencil fs-5 text-primary" title="Edit"></i>
														<i class="fadeIn animated bx bx-trash-alt delete-proccess ms-2 fs-5" title="Delete"></i>
													</div>
												</td>
											</tr>
											<tr>
												<td>PIP-1234567890 </td>
												<td>03-21-23</td>
												<td>Resolved </td>
												<td>03-21-28</td>
												<td>
													<div class="d-flex">
														<i class="fadeIn animated bx bx-pencil fs-5 text-primary" title="Edit"></i>
														<i class="fadeIn animated bx bx-trash-alt delete-proccess ms-2 fs-5" title="Delete"></i>
													</div>
												</td>
											</tr>
											<tr>
												<td>PIP-1234567890 </td>
												<td>03-21-23</td>
												<td>Resolved </td>
												<td>03-21-28</td>
												<td>
													<div class="d-flex">
														<i class="fadeIn animated bx bx-pencil fs-5 text-primary" title="Edit"></i>
														<i class="fadeIn animated bx bx-trash-alt delete-proccess ms-2 fs-5" title="Delete"></i>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>

								<!-- History -->
								<div id="test-vl-7" role="tabpane3" class="bs-stepper-pane content fade"
								aria-labelledby="stepper3trigger7">
								<h5 class="mb-4">Previous History</h5>
								<div class="list-group notification-list">
									<a class="dropdown-item" href="javascript:;">
										<div class="flex-grow-1">
											<h6 class="msg-name">Daisy Anderson<span class="msg-time float-end">05/28/2023</span></h6>
											<p class="msg-info">The standard chunk of lorem</p>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="flex-grow-1">
											<h6 class="msg-name">Maisy Anderson<span class="msg-time float-end">05/28/2023</span></h6>
											<p class="msg-info">The standard chunk of lorem</p>
										</div>

									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="flex-grow-1">
											<h6 class="msg-name">Paisy Anderson<span class="msg-time float-end">09/13/2023</span></h6>
											<p class="msg-info">The standard chunk of lorem</p>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="flex-grow-1">
											<h6 class="msg-name">Laisy Anderson<span class="msg-time float-end">09/13/2023</span></h6>
											<p class="msg-info">The standard chunk of lorem</p>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="flex-grow-1">
											<h6 class="msg-name">Naisy Anderson<span class="msg-time float-end">5 sec
													ago</span></h6>
											<p class="msg-info">The standard chunk of lorem</p>
										</div>
									</a>
								</div>

							</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end stepper -->


        <!--Card of Page buttons -->
        <div class="card last-card">
            <div class="card-body">
                <div class="d-md-flex d-grid align-items-center gap-3 justify-content-end">
                    <button class="btn btn-outline-secondary y px-md-4">Cancel</button>
                    <button class="btn btn-secondary px-md-4" style="display: none;" id="previous">Previous</button>
                    <button class="btn btn-primary px-md-4" style="display: block;" id="next">Next</button>
                    <button class="btn btn-success px-md-4" style="display: none;" id="submit">Submit</button>
                </div>
            </div>
        </div>

    </div>



    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->


    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top">
        <i class='bx bxs-up-arrow-alt'></i>
    </a>
    <!--End Back To Top Button-->
@endsection

@section('scripts')
    <script>
        //date-Picker

        $(".datepicker").flatpickr({
            dateFormat: "m-d-Y",
        });
        flatpickr('.datepicker.dateOfJoining', {
            dateFormat: 'm-d-Y',
            maxDate: 'today',
			defaultDate: "today" 
        });
        flatpickr('.datepicker.dateOfNotice', {
            dateFormat: 'm-d-Y',
            maxDate: 'today',
        });

        //Open Search-List
        function toggleSearchList() {
            var searchList = document.querySelector('.search-employee-list');
            searchList.classList.toggle('open');
        }
        let wrapper = document.querySelector(".page-wrapper")
        wrapper.addEventListener("click", () => {
            var searchList = document.querySelector('.search-employee-list');
            searchList.classList.remove('open');
        });

        //field validation
        $(document).ready(function() {
			
            let token1 = sessionStorage.getItem('authToken');

            $.ajax({
                type: "get",
                url: "/designations",
                // headers: {
                //     Authorization: token1,
                // },
                success: function(response) {
                    console.log(response, "responseee");
                    $.each(response?.data, function(index, item) {
                        var option = $("<option>")
                            .attr("value", item.id)
                            .text(item.name);

                        $(".designation").append(option);

                    });
                    $.each(response?.data, function(index, item) {
                        var option = $("<option>")
                            .attr("value", item.id)
                            .text(item.name);

                        $(".reporting").append(option);

                    });
                }
            });

            $.ajax({
                type: "get",
                url: "/states",
                success: function(response) {
                    console.log(response, "states");
                   
var selectElement = $(".state"); 
selectElement.empty(); 


var selectOption = $("<option>")
    .attr("value", "")
    .attr("disabled", "disabled")
    .attr("selected", "selected")
    .text("Select");

selectElement.append(selectOption);

$.each(response?.data, function(index, item) {
    var option = $("<option>")
        .attr("value", item.id)
        .text(item.name);
    selectElement.append(option);
});

         $.ajax({
                type: "get",
                url: "/droplocation",
              
                success: function(response) {
                    console.log(response, "responseee");
                    $.each(response?.data, function(index, item) {
                        var option = $("<option>")
                            .attr("value", item.id)
                            .text(item.name);

                        $(".dropLocation").append(option);

                    });
                }
            });

                   
var selectElement = $(".residentialState");
selectElement.empty(); 


var selectOption = $("<option>")
    .attr("value", "")
    .attr("disabled", "disabled")
    .attr("selected", "selected")
    .text("Select");

selectElement.append(selectOption);

response.data.sort(function(a, b) {
    return a.name.localeCompare(b.name);
});

$.each(response.data, function(index, item) {
    var option = $("<option>")
        .attr("value", item.id)
        .text(item.name);

    
    selectElement.append(option);
});

                }
            });






            // $("#myform").validate({
            // 	rules: {
            // 		name: {
            // 			required: true,
            // 		},
            // 	},
            // 	messages: {
            // 		name: "Please enter your name",
            // 	},

            // 	showErrors: function (errorMap, errorList) {
            // 		this.defaultShowErrors();
            // 		console.log(errorList, errorMap);
            // 	},
            // 	submitHandler: function (form) {
            // 		// Form submission logic here
            // 		stepper3.next();
            // 	},
            // });
            // $("#previous").on("click", function () {
            // 	stepper3.previous();
            // });
            // $("#next").on("click", function () {
            // 	// Form submission logic here
            // 	stepper3.next();
            // });
            // $("#submit").on("click", function () {
            // 	$("#myform").submit();
            // });

            $(".form-control").keyup(function(e) {
                const fieldName = e.target.name;
                $(`#error${fieldName.charAt(0).toUpperCase() + fieldName.slice(1)}`).text("");
                $(this).toggleClass("error-input", false);
            });


            $(".form-select").change(function() {
                const fieldName = $(this).attr("name");
                $(`#error${fieldName.charAt(0).toUpperCase() + fieldName.slice(1)}`).text("");
                $(this).toggleClass("error-input", false);
            });

            $(".datepicker").on("change", function() {
                const fieldName = $(this).attr("name");
                $(`#error${fieldName.charAt(0).toUpperCase() + fieldName.slice(1)}`).text("");
                $(this).toggleClass("error-input", false);
            });




            $("#previous").on("click", function() {
                stepper3.previous();
                $("#next").css("display", "block");
            });

            // $("#next").on("click", function () {
            // 	let activeStep = $('.step.active').data('target');
            // 	Steps(activeStep, 'next');
            // });

            $("#submit").on("click", function() {
                let activeStep = $('.step.active').data('target');
                Steps(activeStep, 'submit');
            });


			var currentMonth = new Date().getMonth();

            
            $('.appraisalCycle option:eq(' + (currentMonth + 1) + ')').prop('selected', true);


			$('.modelBillable').change(function () {
				var modelBillable = $(this).val();
				if(modelBillable == 'buffer'){
					$('.contributionDiv').show();
				}else{
					$('.contributionDiv').hide();
				}

			})


        $(".SKID").on("keyup", function (){
            
            let skidValues = $(this).val();
            console.log('skidValue:', skidValues);
           if (/^SK/.test(skidValues)) {
              if (skidValues.length > 8) {
             $(this).val(skidValues.slice(0, 8));
              // Update the value of the current input field
           }
   
          } else {
            $(this).addClass("error-input");
            $("#errorSKID").text('Invalid SKID: Must start with "SK"');
           }
           checkSkid(skidValues);
        });

        function checkSkid(skidValues) {
            $.ajaxSetup({
                         headers: {
                             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                             }
                          });
           
            $.ajax({
                url: "/check/skid", 
                method: "POST",
                data: {
                    skid: skidValues
                },
                success: function (response) {
                    if (response.exists) {
                        $(".SKID").addClass("error-input");
                        $("#errorSKID").text("SKID already exists");
                    } else {
                        // $(".SKID").removeClass("error-input");
                        // $("#errorSKID").text("");
                    }
                },
                error: function () {
                    console.log("An error occurred while checking SKID.");
                }
            });
        }
            

			
        var employmentStatus = $('.employmentStatus').val();

        $('.dateOfNoticeDiv').hide();
        $('.permanentDateDiv').hide();
       
        // $('.ijpDiv').hide();
        // $('.pipDiv').hide();
        // $('.historyDiv').hide();

        if (employmentStatus === 'Active') {
			$('.dateOfExitDiv').hide();
			$('.dateOfExitReasonDiv').hide();
			$("#errorDateOfExit").html("");
            $(".dateOfExit").removeClass("error-input");
			$("#errorExitReason").html("");
            $(".exitReason").removeClass("error-input");
			let error = {}
			let workFromHome = $(".workFromHome").val()
			let isTraniee = $(".isTraniee").val()
			let shiftTiming = $(".shiftTiming").val()
			let dateOfJoining = $(".dateOfJoining").val()
			let serviceStatus = $(".serviceStatus").val()
			let appraisalCycle = $(".appraisalCycle").val()
			let revenueEarning = $(".revenueEarning").val()
			let noticeStatus = $(".noticeStatus").val()

			if (!workFromHome) {
                    error = {
                        ...error,
                        workFromHome: "WFO/WFH is required"
                    }
                }

				if (!isTraniee) {
                    error = {
                        ...error,
                        isTraniee: "Is traniee is required"
                    }
                }

				if (!shiftTiming) {
                    error = {
                        ...error,
                        shiftTiming: "Shift Timing is required"
                    }
                }

				if (!dateOfJoining) {
                    error = {
                        ...error,
                        dateOfJoining: "Date of joining is required"
                    }
                }

				if (!serviceStatus) {
                    error = {
                        ...error,
                        serviceStatus: "Service status is required"
                    }
                }

				if (!appraisalCycle) {
                    error = {
                        ...error,
                        appraisalCycle: "Appraisal cycle is required"
                    }
                }

				if (!revenueEarning) {
                    error = {
                        ...error,
                        revenueEarning: "Revenue Earning is required"
                    }
                }

				if (!noticeStatus) {
                    error = {
                        ...error,
                        noticeStatus: "Notice Status is required"
                    }
                }

				if (error.workFromHome) {
                    $("#errorWorkFromHome").html(error.workFromHome);
                    $("#errorWorkFromHome").addClass("text-danger");
                    $(".workFromHome").addClass("error-input");
                } else {
                    $("#errorWorkFromHome").removeClass("text-danger");
                    $(".WorkFromHome").removeClass("error-input");
                  
                }

				if (error.isTraniee) {
                    $("#errorIsTraniee").html(error.isTraniee);
                    $("#errorIsTraniee").addClass("text-danger");
                    $(".isTraniee").addClass("error-input");
                } else {
                    $("#errorIsTraniee").removeClass("text-danger");
                    $(".isTraniee").removeClass("error-input");
                  
                }

				if (error.shiftTiming) {
                    $("#errorShiftTiming").html(error.shiftTiming);
                    $("#errorShiftTiming").addClass("text-danger");
                    $(".shiftTiming").addClass("error-input");
                } else {
                    $("#errorShiftTiming").removeClass("text-danger");
                    $(".shiftTiming").removeClass("error-input");
                  
                }

				if (error.dateOfJoining) {
                    $("#errorDateOfJoining").html(error.dateOfJoining);
                    $("#errorDateOfJoining").addClass("text-danger");
                    $(".dateOfJoining").addClass("error-input");
                } else {
                    $("#errorDateOfJoining").removeClass("text-danger");
                    $(".dateOfJoining").removeClass("error-input");
                  
                }

				if (error.serviceStatus) {
                    $("#errorServiceStatus").html(error.serviceStatus);
                    $("#errorServiceStatus").addClass("text-danger");
                    $(".serviceStatus").addClass("error-input");
                } else {
                    $("#errorServiceStatus").removeClass("text-danger");
                    $(".serviceStatus").removeClass("error-input");
                  
                }

				if (error.appraisalCycle) {
                    $("#errorAppraisalCycle").html(error.appraisalCycle);
                    $("#errorAppraisalCycle").addClass("text-danger");
                    $(".appraisalCycle").addClass("error-input");
                } else {
                    $("#errorAppraisalCycle").removeClass("text-danger");
                    $(".appraisalCycle").removeClass("error-input");
                  
                }

				if (error.revenueEarning) {
                    $("#errorRevenueEarning").html(error.revenueEarning);
                    $("#errorRevenueEarning").addClass("text-danger");
                    $(".revenueEarning").addClass("error-input");
                } else {
                    $("#errorRevenueEarning").removeClass("text-danger");
                    $(".revenueEarning").removeClass("error-input");
                  
                }

				if (error.noticeStatus) {
                    $("#errorNoticeStatus").html(error.noticeStatus);
                    $("#errorNoticeStatus").addClass("text-danger");
                    $(".noticeStatus").addClass("error-input");
                } else {
                    $("#errorNoticeStatus").removeClass("text-danger");
                    $(".noticeStatus").removeClass("error-input");
                  
                }

				 if (Object.keys(error).length === 0) {

                    let activeStep = $('.step.active').data('target');
                    Steps(activeStep, 'next');
                  
                }
            
        } else if(employmentStatus === 'Inactive') {
			        $("#errorWorkFromHome").html("");
                    $(".workFromHome").removeClass("error-input");
					$("#errorIsTraniee").html("");
                    $(".isTraniee").removeClass("error-input");
					$("#errorShiftTiming").html("");
                    $(".shiftTiming").removeClass("error-input");
					$("#errorDateOfJoining").html("");
                    $(".dateOfJoining").removeClass("error-input");
					$("#errorServiceStatus").html("");
                    $(".serviceStatus").removeClass("error-input");
					$("#errorAppraisalCycle").html("");
                    $(".appraisalCycle").removeClass("error-input");
					$("#errorNoticeStatus").html("");
                    $(".noticeStatus").removeClass("error-input");
					$("#errorRevenueEarning").html("");
                    $(".revenueEarning").removeClass("error-input");

					let error = {}
			        let dateOfExit = $(".dateOfExit").val()
			        let exitReason = $(".exitReason").val()

					if (!dateOfExit) {
                    error = {
                        ...error,
                        dateOfExit: "Date Of Exit is required"
                    }
                }

				if (!exitReason) {
                    error = {
                        ...error,
                        exitReason: "Exit Reason is required"
                    }
                }

				if (error.dateOfExit) {
                    $("#errorDateOfExit").html(error.dateOfExit);
                    $("#errorDateOfExit").addClass("text-danger");
                    $(".dateOfExit").addClass("error-input");
                } else {
                    $("#errorDateOfExit").removeClass("text-danger");
                    $(".dateOfExit").removeClass("error-input");
                  
                }

				if (error.exitReason) {
                    $("#errorExitReason").html(error.exitReason);
                    $("#errorExitReason").addClass("text-danger");
                    $(".exitReason").addClass("error-input");
                } else {
                    $("#errorExitReason").removeClass("text-danger");
                    $(".exitReason").removeClass("error-input");
                  
                }

				 if (Object.keys(error).length === 0) {

                    let activeStep = $('.step.active').data('target');
                    Steps(activeStep, 'next');
                  
                }
				
        }else {

		}
	$('.employmentStatus').change(function () {
		$('.dateOfExitDiv').hide();
		$('.dateOfExitReasonDiv').hide();
        var employmentStatus = $(this).val();

        if (employmentStatus === 'Active') {
			$("#errorDateOfExit").html("");
            $(".dateOfExit").removeClass("error-input");
			$("#errorExitReason").html("");
            $(".exitReason").removeClass("error-input");
			let error = {}
			let workFromHome = $(".workFromHome").val()
			let isTraniee = $(".isTraniee").val()
			let shiftTiming = $(".shiftTiming").val()
			let dateOfJoining = $(".dateOfJoining").val()
			let serviceStatus = $(".serviceStatus").val()
			let appraisalCycle = $(".appraisalCycle").val()
			let revenueEarning = $(".revenueEarning").val()
			let noticeStatus = $(".noticeStatus").val()

			if (!workFromHome) {
                    error = {
                        ...error,
                        workFromHome: "WFO/WFH is required"
                    }
                }

				if (!isTraniee) {
                    error = {
                        ...error,
                        isTraniee: "Is traniee is required"
                    }
                }

				if (!shiftTiming) {
                    error = {
                        ...error,
                        shiftTiming: "Shift Timing is required"
                    }
                }

				if (!dateOfJoining) {
                    error = {
                        ...error,
                        dateOfJoining: "Date of joining is required"
                    }
                }

				if (!serviceStatus) {
                    error = {
                        ...error,
                        serviceStatus: "Service status is required"
                    }
                }

				if (!appraisalCycle) {
                    error = {
                        ...error,
                        appraisalCycle: "Appraisal cycle is required"
                    }
                }

				if (!revenueEarning) {
                    error = {
                        ...error,
                        revenueEarning: "Revenue Earning is required"
                    }
                }

				if (!noticeStatus) {
                    error = {
                        ...error,
                        noticeStatus: "Notice Status is required"
                    }
                }

				if (error.workFromHome) {
                    $("#errorWorkFromHome").html(error.workFromHome);
                    $("#errorWorkFromHome").addClass("text-danger");
                    $(".workFromHome").addClass("error-input");
                } else {
                    $("#errorWorkFromHome").removeClass("text-danger");
                    $(".WorkFromHome").removeClass("error-input");
                  
                }

				if (error.isTraniee) {
                    $("#errorIsTraniee").html(error.isTraniee);
                    $("#errorIsTraniee").addClass("text-danger");
                    $(".isTraniee").addClass("error-input");
                } else {
                    $("#errorIsTraniee").removeClass("text-danger");
                    $(".isTraniee").removeClass("error-input");
                  
                }

				if (error.shiftTiming) {
                    $("#errorShiftTiming").html(error.shiftTiming);
                    $("#errorShiftTiming").addClass("text-danger");
                    $(".shiftTiming").addClass("error-input");
                } else {
                    $("#errorShiftTiming").removeClass("text-danger");
                    $(".shiftTiming").removeClass("error-input");
                  
                }

				if (error.dateOfJoining) {
                    $("#errorDateOfJoining").html(error.dateOfJoining);
                    $("#errorDateOfJoining").addClass("text-danger");
                    $(".dateOfJoining").addClass("error-input");
                } else {
                    $("#errorDateOfJoining").removeClass("text-danger");
                    $(".dateOfJoining").removeClass("error-input");
                  
                }

				if (error.serviceStatus) {
                    $("#errorServiceStatus").html(error.serviceStatus);
                    $("#errorServiceStatus").addClass("text-danger");
                    $(".serviceStatus").addClass("error-input");
                } else {
                    $("#errorServiceStatus").removeClass("text-danger");
                    $(".serviceStatus").removeClass("error-input");
                  
                }

				if (error.appraisalCycle) {
                    $("#errorAppraisalCycle").html(error.appraisalCycle);
                    $("#errorAppraisalCycle").addClass("text-danger");
                    $(".appraisalCycle").addClass("error-input");
                } else {
                    $("#errorAppraisalCycle").removeClass("text-danger");
                    $(".appraisalCycle").removeClass("error-input");
                  
                }

				if (error.revenueEarning) {
                    $("#errorRevenueEarning").html(error.revenueEarning);
                    $("#errorRevenueEarning").addClass("text-danger");
                    $(".revenueEarning").addClass("error-input");
                } else {
                    $("#errorRevenueEarning").removeClass("text-danger");
                    $(".revenueEarning").removeClass("error-input");
                  
                }

				if (error.noticeStatus) {
                    $("#errorNoticeStatus").html(error.noticeStatus);
                    $("#errorNoticeStatus").addClass("text-danger");
                    $(".noticeStatus").addClass("error-input");
                } else {
                    $("#errorNoticeStatus").removeClass("text-danger");
                    $(".noticeStatus").removeClass("error-input");
                  
                }

				 if (Object.keys(error).length === 0) {

                    let activeStep = $('.step.active').data('target');
                    Steps(activeStep, 'next');
                  
                }
            
        } else if(employmentStatus === 'Inactive') {
			          $('.dateOfExitDiv').show();
			         $('.dateOfExitReasonDiv').show();
			        $("#errorWorkFromHome").html("");
                    $(".workFromHome").removeClass("error-input");
					$("#errorIsTraniee").html("");
                    $(".isTraniee").removeClass("error-input");
					$("#errorShiftTiming").html("");
                    $(".shiftTiming").removeClass("error-input");
					$("#errorDateOfJoining").html("");
                    $(".dateOfJoining").removeClass("error-input");
					$("#errorServiceStatus").html("");
                    $(".serviceStatus").removeClass("error-input");
					$("#errorAppraisalCycle").html("");
                    $(".appraisalCycle").removeClass("error-input");
					$("#errorNoticeStatus").html("");
                    $(".noticeStatus").removeClass("error-input");
					$("#errorRevenueEarning").html("");
                    $(".revenueEarning").removeClass("error-input");

					let error = {}
			        let dateOfExit = $(".dateOfExit").val()
			        let exitReason = $(".exitReason").val()

					if (!dateOfExit) {
                    error = {
                        ...error,
                        dateOfExit: "Date Of Exit is required"
                    }
                }

				if (!exitReason) {
                    error = {
                        ...error,
                        exitReason: "Exit Reason is required"
                    }
                }

				if (error.dateOfExit) {
                    $("#errorDateOfExit").html(error.dateOfExit);
                    $("#errorDateOfExit").addClass("text-danger");
                    $(".dateOfExit").addClass("error-input");
                } else {
                    $("#errorDateOfExit").removeClass("text-danger");
                    $(".dateOfExit").removeClass("error-input");
                  
                }

				if (error.exitReason) {
                    $("#errorExitReason").html(error.exitReason);
                    $("#errorExitReason").addClass("text-danger");
                    $(".exitReason").addClass("error-input");
                } else {
                    $("#errorExitReason").removeClass("text-danger");
                    $(".exitReason").removeClass("error-input");
                  
                }

				 if (Object.keys(error).length === 0) {

                    let activeStep = $('.step.active').data('target');
                    Steps(activeStep, 'next');
                  
                }
				
        }else {

		}
    });

	$('.serviceStatus').change(function () {
        var serviceStatus = $(this).val();

        if (serviceStatus === 'Permanent') {
			$('.permanentDateDiv').show();
			let error = {}
			let permanentDate = $(".permanentDate").val()

			if (!permanentDate) {
                    error = {
                        ...error,
                        permanentDate: "Permanent Date is required"
                    }
                }

			if (error.permanentDate) {
                    $("#errorPermanentDate").html(error.permanentDate);
                    $("#errorPermanentDate").addClass("text-danger");
                    $(".permanentDate").addClass("error-input");
                } else {
                    $("#errorPermanentDate").removeClass("text-danger");
                    $(".permanentDate").removeClass("error-input");
                  
                }

				if (Object.keys(error).length === 0) {

                let activeStep = $('.step.active').data('target');
               Steps(activeStep, 'next');

                     }

		}else{
			$('.permanentDateDiv').hide();
			$("#errorPermanentDate").html("");
             $(".permanentDate").removeClass("error-input");
		}
	})

    $('.noticeStatus').change(function () {

        var noticeStatus = $(this).val();
        if(noticeStatus === 'Under Notice'){
            $('.dateOfNoticeDiv').show();
            let error = {}
			let dateOfNotice = $(".dateOfNotice").val()

			if (!dateOfNotice) {
                    error = {
                        ...error,
                        dateOfNotice: "Date Of Notice is required"
                    }
                }

                if (error.dateOfNotice) {
                    $("#errorDateOfNotice").html(error.permanentDate);
                    $("#errorDateOfNotice").addClass("text-danger");
                    $(".dateOfNotice").addClass("error-input");
                } else {
                    $("#errorDateOfNotice").removeClass("text-danger");
                    $(".dateOfNotice").removeClass("error-input");
                  
                }

				if (Object.keys(error).length === 0) {

                      let activeStep = $('.step.active').data('target');
                       Steps(activeStep, 'next');

                     }
        }else{
            $('.dateOfNoticeDiv').hide();
            $("#errorDateOfNotice").html("");
             $(".dateOfNotice").removeClass("error-input");
        }

    })


            $("#next").on("click", function() {
                let error = {}
                let name = $(".name").val()
                let SKID = $(".SKID").val()
                let phone = $(".phone").val()
                let age = $(".age").val();
                let emergencyContect = $(".emergencyContact").val()

                if (!name) {
                    error = {
                        ...error,
                        name: "Name is required"
                    }
                }
                if (!SKID) {
                    error = {
                        ...error,
                        skid: "SKID is required"
                    }
                }
                if (!phone) {
                    error = {
                        ...error,
                        phone: "phone is required"
                    }
                } else if (!checkNumber(phone)) {
                    error.phone = "Please Enter only Number";
                } else if (!/^\d{10}$/.test(phone)) {
                    error.phone = "Phone must be 10 digits";
                }

                if (age && !checkNumber(age)) {
                    error.age = "Please Enter only Number";
                }

                if (emergencyContect && !checkNumber(emergencyContect)) {
                    error.emergencyContect = "Please Enter only Number";
                }


                // Display error messages
                if (error.name) {
                    $("#errorName").html(error.name);
                    $(".error-name").addClass("error-input");
                    $("#errorName").addClass("text-danger");
                    $(".name").addClass("error-input");
                } else {
                    $("#name").removeClass("text-danger");
                    $(".name").removeClass("error-input");
                    $("#errorName").removeClass("text-danger");
                }
                if (error.skid) {
                    $("#errorSKID").html(error.skid);
                    $("#SKID").addClass("error-input");
                    $("#errorSKID").addClass("text-danger");
                    $(".SKID").addClass("error-input");

                } else {
                    $("#SKID").removeClass("error-input");
                    $("#errorSKID").removeClass("text-danger");
                }
                if (error.phone) {

                    $("#errorPhone").html(error.phone);
                    $("#phone").addClass("error-input");
                    $("#errorPhone").addClass("text-danger");
                    $(".phone").addClass("error-input");

                } else {
                    $("#phone").removeClass("error-input");
                    $("#errorPhone").removeClass("text-danger");
                }

                if (error.emergencyContect) {
                    $("#errorEmergencyContect").html(error.emergencyContect);
                    $(".emergencyContact").addClass("error-input");
                    $("#errorEmergencyContect").addClass("text-danger");
                    $(".emergencyContact").addClass("error-input");
                } else {
                    $(".emergencyContact").removeClass("error-input");
                    $("#errorEmergencyContect").removeClass("text-danger");
                }

                if (error.age) {
                    $("#errorAge").html(error.age);
                    $("#age").addClass("error-input");
                    $("#errorAge").addClass("text-danger");
                    $(".age").addClass("error-input");
                } else {
                    $("#age").removeClass("error-input");
                    $("#errorage").removeClass("text-danger");
                }




                if (Object.keys(error).length === 0) {

                    let activeStep = $('.step.active').data('target');
                    Steps(activeStep, 'next');
					
                    // alert("Form submitted successfully!");
                }
            });



            $('.sameAddress').change(function() {
                if ($(this).is(':checked')) {
                    $('.residentialStreetAddress').val($('.streetAddress1').val());
                    $('.residentialStreetAddress2').val($('.streetAddress2').val());
                    $('.residentialArea').val($('.area').val());
                    $('.residentialState').val($('.state').val());
                    $('.residentialPin').val($('.pin').val());

                    $('.residentialStreetAddress').removeClass('error-input');
                    $('.residentialStreetAddress2').removeClass('error-input');
                    $('.residentialArea').removeClass('error-input');
                    $('.residentialState').removeClass('error-input')
                    $('.residentialPin').removeClass('error-input')

                    $('.residentialStreetAddress').prop("readonly", true).prop("disabled", true);
                    $('.residentialStreetAddress2').prop("readonly", true).prop("disabled", true);
                    $('.residentialArea').prop("readonly", true).prop("disabled", true);
                    $('.residentialState').prop("readonly", true).prop("disabled", true);
                    $('.residentialPin').prop("readonly", true).prop("disabled", true);

                    $("#errorResidentialStreetAddress").removeClass("text-danger");
                    $("#errorResidentialArea").removeClass("text-danger");
                    $("#errorResidentialState").removeClass("text-danger");
                    $("#errorResidentialPin").removeClass("text-danger");

                    $('.form-control').each(function() {
                        var inputValue = $(this).val();
                        if (inputValue && inputValue.trim() !== '') {
                            var errorSpan = $(this).siblings('.error-message');
                            errorSpan.text('');
                        }
                    });

                    $('.form-select').each(function() {
                        var inputValue = $(this).val();
                        if (inputValue && inputValue.trim() !== '') {
                            var errorSpan = $(this).siblings('.error-message');
                            errorSpan.text('');
                        }
                    });


                } else {
                    $('.residentialStreetAddress').val('');
                    $('.residentialStreetAddress2').val('');
                    $('.residentialArea').val('');
                    $('.residentialState').val('');
                    $('.residentialPin').val('');

                    $('.residentialStreetAddress').prop("readonly", false).prop("disabled", false);
                    $('.residentialStreetAddress2').prop("readonly", false).prop("disabled", false);
                    $('.residentialArea').prop("readonly", false).prop("disabled", false);
                    $('.residentialState').prop("readonly", false).prop("disabled", false);
                    $('.residentialPin').prop("readonly", false).prop("disabled", false);
                }
            });

            // $(".step").on('click', function(e) {
            // 	let activeStep = $('.step.active').data('target');
            // 	// Steps(activeStep, 'step');
            // 	stepper3.next();

            // });


            function Steps(getActiveStep, clickType) {
                switch (getActiveStep) {
                    case '#test-vl-1':
                        stepOne(clickType)
                        $("#next").css("display", "block");
                        break;

                    case '#test-vl-2':
                        stepTwo(clickType)
                        $("#next").css("display", "block");
                        break;
                    case '#test-vl-3':
                        stepThree(clickType)
                        $("#next").css("display", "block");
                        break;
                    case '#test-vl-4':
                        stepFour(clickType)
                        $("#next").css("display", "none");
                        
                        break;
                    case '#test-vl-5':
                        stepFive(clickType)
                        break;

                    default:
                        break;
                }
            }

            $("#file").on('change', function(e) {
                const file = e.target.files[0];
                if (file) {

                    if (file.size <= 2 * 1024 * 1024) {
                        const formData = new FormData();
                        formData.append('image', file);

                        $.ajaxSetup({
                         headers: {
                             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                             }
                          });

                        $.ajax({
                            url: '/fileUpload', // Replace with the URL of your PHP file handling the upload
                            type: 'POST',
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function(response) {
                                const uploadedImage = document.getElementById('uploadedImage');
                                const iconElement = document.querySelector('.uploaded-img i');
                                if (response) {
                                    uploadedImage.src = response?.url;
                                    uploadedImage.style.display = 'block';
                                    iconElement.style.display = 'none';
                                } else {
                                    uploadedImage.style.display = 'none';
                                    iconElement.style.display = 'block';
                                }

                            },
                            error: function(xhr, status, error) {
                                console.error('Error uploading file:', error);
                            }
                        })
                    } else {

                        alert('File size exceeds the maximum limit of 2MB.');

                        $("#file").val('');
                    }
                }
            })

            $("#aadharfile").on('change', function(e) {
                const file = e.target.files[0];
                if (file) {

                    if (file.size <= 2 * 1024 * 1024) {
                        const formData = new FormData();
                        formData.append('image', file);

                        $.ajaxSetup({
                         headers: {
                             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                             }
                          });

                        $.ajax({
                            url: '/aadhar/upload', // Replace with the URL of your PHP file handling the upload
                            type: 'POST',
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function(response) {
                                const uploadedImage = document.getElementById('uploadedAadharImage');
                                const iconElement = document.querySelector('.aadhar-img i');
                                if (response) {
                                    uploadedImage.src = response?.url;
                                    uploadedImage.style.display = 'block';
                                    iconElement.style.display = 'none';
                                } else {
                                    uploadedImage.style.display = 'none';
                                    iconElement.style.display = 'block';
                                }

                            },
                            error: function(xhr, status, error) {
                                console.error('Error uploading file:', error);
                            }
                        })
                    } else {

                        alert('File size exceeds the maximum limit of 2MB.');

                        $("#aadharfile").val('');
                    }
                }
            })

            let token = sessionStorage.getItem('authToken');

            function stepOne(clickType) {
                let relativeName = $('.relativeName')
                    .map((i, e) => e.value)
                    .get()
                    .filter((value) => value.trim() !== '');

                let relationWithRelative = $('.relationWithRelative')
                    .map((i, e) => e.value)
                    .get()
                    .filter((value) => value.trim() !== '');

                var relation = createObjectFromArrays(relativeName, relationWithRelative);
                if (Object.keys(relation).length === 0) {
                    relation = '';
                }

                var imageElement = document.getElementById('uploadedImage');
                var imageSrc = imageElement.getAttribute('src');

              

                let dataObject = {
                    buttonText: $(this).text(),
                    id: $('#id').val(),
                    name: $('.name').val(),
                    SKID: $('.SKID').val(),
                    phone: $('.phone').val(),
                    emergencyContact: $('.emergencyContact').val(),
                    email: $('.email').val(),
                    age: $('.age').val(),
                    gender: $('.gender').val(),
                    religion: $('.religion').val(),
                    bloodGroup: $('.bloodGroup').val(),
                    qualification: $('.qualification').val(),
                    academicStream: $('.academicStream').val(),
                    school: $('.school').val(),
                    college: $('.college').val(),
                    foodPreference: $('.foodPreference').val(),
                    relation: relation,
                    image: imageSrc,
                };

                const stepOneData = JSON.stringify(dataObject);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: '/employee/basic/info',
                    data: {
                        data: stepOneData,
                    },
                    success: function(response) {
                        console.log(response.id);
                        if (clickType == 'submit') {
                            toastr.success('Basic Information submitted successfully!')
                        }
                        if (response.id) {
                            $('#id').val(response.id);
                        }
                        if (clickType == 'submit' || clickType == 'next') {
                            $('#previous').css('display', 'block');
							toastr.success('Basic Information submitted successfully!')
                            stepper3.next();
                        }
                    },
                });
            }


            function stepTwo(clickType) {
                console.log(clickType);

                if (clickType == 'next') {

                    let error = {}

                    let streetAdrress = $('.streetAddress1').val()
                    let area = $('.area').val()
                    let state = $('.state').val()
                    let pin = $('.pin').val()

                    let sameAddress = $(".sameAddress").prop("checked");

                    if (sameAddress) {

                    }
                    let residentialStreetAddress = $('.residentialStreetAddress').val()
                    let residentialArea = $('.residentialArea').val()
                    let residentialState = $('.residentialState').val()
                    let residentialPin = $('.residentialPin').val()
                    let dropLocation = $(".dropLocation").val()

                    if (!residentialStreetAddress) {
                        error = {
                            ...error,
                            residentialStreetAddress: "Street Address 1 is required"
                        }
                    }
                    if (!residentialArea) {

                        error = {
                            ...error,
                            residentialArea: "Area is required"
                        }
                    }
                    if (!residentialState) {
                        error = {
                            ...error,
                            residentialState: "State is required"
                        }
                    }
                    if (!residentialPin) {
                        error = {
                            ...error,
                            residentialPin: "PIN is required"
                        }
                    }

                    if (!dropLocation) {
                        error = {
                            ...error,
                            dropLocation: "Drop Location is required"
                        }
                    }

                    if (error.residentialStreetAddress) {

                        $("#errorResidentialStreetAddress").html(error.residentialStreetAddress);
                        $(".residentialStreetAddress").addClass("error-input");
                        $("#errorResidentialStreetAddress").addClass("text-danger");
                        $(".residentialStreetAddress").addClass("error-input");

                    } else {
                        $(".residentialStreetAddress").removeClass("error-input");
                        $("#errorResidentialStreetAddress").removeClass("text-danger");
                    }

                    if (error.residentialArea) {
                        console.log(error.area);
                        $("#errorResidentialArea").html(error.residentialArea);
                        $(".residentialArea").addClass("error-input");
                        $("#errorResidentialArea").addClass("text-danger");
                        $(".residentialArea").addClass("error-input");

                    } else {
                        $(".residentialArea").removeClass("error-input");
                        $("#errorResidentialArea").removeClass("text-danger");
                    }

                    if (error.residentialState) {
                        console.log(error.area);
                        $("#errorResidentialState").html(error.residentialState);
                        $(".residentialState").addClass("error-input");
                        $("#errorResidentialState").addClass("text-danger");
                        $(".residentialState").addClass("error-input");

                    } else {
                        $(".residentialState").removeClass("error-input");
                        $("#errorResidentialState").removeClass("text-danger");
                    }

                    if (error.residentialPin) {
                        console.log(error.area);
                        $("#errorResidentialPin").html(error.residentialPin);
                        $(".residentialPin").addClass("error-input");
                        $("#errorResidentialPin").addClass("text-danger");
                        $(".residentialPin").addClass("error-input");

                    } else {
                        $(".residentialPin").removeClass("error-input");
                        $("#errorResidentialPin").removeClass("text-danger");
                    }

                    if (error.dropLocation) {

                        $("#errorDropLocation").html(error.dropLocation);
                        $(".dropLocation").addClass("error-input");
                        $("#errorDropLocation").addClass("text-danger");
                        $(".dropLocation").addClass("error-input");

                    } else {
                        $(".dropLocation").removeClass("error-input");
                        $("#errorDropLocation").removeClass("text-danger");
                    }


                    if (!streetAdrress) {
                        error = {
                            ...error,
                            streetAdrress: "Street Address 1 is required"
                        }
                    }
                    if (!area) {

                        error = {
                            ...error,
                            area: "Area is required"
                        }
                    }
                    if (!state) {
                        error = {
                            ...error,
                            state: "State is required"
                        }
                    }
                    if (!pin) {
                        error = {
                            ...error,
                            pin: "PIN is required"
                        }
                    }

                    if (error.streetAdrress) {

                        $("#errorStreetAddress1").html(error.streetAdrress);
                        $(".streetAddress1").addClass("error-input");
                        $("#errorStreetAddress1").addClass("text-danger");
                        $(".streetAddress1").addClass("error-input");

                    } else {
                        $(".streetAddress1").removeClass("error-input");
                        $("#errorStreetAddress1").removeClass("text-danger");
                    }
                    if (error.area) {
                        console.log(error.area);
                        $("#errorArea").html(error.area);
                        $(".area").addClass("error-input");
                        $("#errorArea").addClass("text-danger");
                        $(".area").addClass("error-input");

                    } else {
                        $(".area").removeClass("error-input");
                        $("#errorArea").removeClass("text-danger");
                    }

                    console.log(error.state);
                    if (error.state) {

                        $("#errorState").html(error.state);
                        $(".state").addClass("error-input");
                        $("#errorState").addClass("text-danger");
                        $(".state").addClass("error-input");

                    } else {
                        $("#errorState").html("");
                        $(".state").removeClass("error-input");
                        $("#errorState").removeClass("text-danger");
                    }
                    if (error.pin) {

                        $("#errorPin").html(error.pin);
                        $(".pin").addClass("error-input");
                        $("#errorPin").addClass("text-danger");
                        $(".pin").addClass("error-input");

                    } else {
                        $(".pin").removeClass("error-input");
                        $("#errorPin").removeClass("text-danger");
                    }



                    let dataObject = {
                        employeeId: Number($('#id').val()),
                        buttonText: $(this).text(),
                        sameAddress: $(".sameAddress").prop("checked"),
                        streetAddress1: $(".streetAddress1").val(),
                        streetAddress2: $(".streetAddress2").val(),
                        area: $(".area").val(),
                        state: $(".state").val(),
                        pin: $(".pin").val(),
                        residentialStreetAddress: $(".residentialStreetAddress").val(),
                        residentialStreetAddress2: $(".residentialStreetAddress2").val(),
                        residentialArea: $(".residentialArea").val(),
                        residentialState: $(".residentialState").val(),
                        residentialPin: $(".residentialPin").val(),
                        dropLocation: $(".dropLocation").val(),
                    };

                    const stepTwoData = JSON.stringify(dataObject);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    if (Object.keys(error).length === 0) {
                        $.ajax({
                            type: "POST",
                            url: "/employee/address",
                            data: {
                                data: stepTwoData,
                            },
                            success: function(response) {
                                if (response) {
                                    //alert("Form submitted successfully!");
                                }
                                if (clickType == 'submit' || clickType == 'next') {
									toastr.success('Address submitted successfully!')
                                    stepper3.next();
                                }
                            }
                        });

                    }
                }

            }

            function stepThree(clickType) {
                if (clickType == 'next') {
                    let error = {}

                    let designation = $('.designation').val()
                    let employmentStatus = $('.employmentStatus').val()
                    let dateOfJoining = $('.dateOfJoining').val()
                    let serviceStatus = $('.serviceStatus').val()
                    let appraisalCycle = $('.appraisalCycle').val()
                    let sourceOfHiringRequest = $('.sourceOfHiringRequest').val()
                    let isTraniee = $('.isTraniee').val()
                    let salary = $('.salary').val()
					let revenueEarning = $('.revenueEarning').val()

					if (!revenueEarning) {
                        error = {
                            ...error,
                            revenueEarning: "Revenue Earning is required"
                        }
                    }


                    if (!designation) {
                        error = {
                            ...error,
                            designation: "Designation is required"
                        }
                    }

                    if (!isTraniee) {
                        error = {
                            ...error,
                            isTraniee: "Is Traniee is required"
                        }
                    }

                    if (!employmentStatus) {
                        error = {
                            ...error,
                            employmentStatus: "Employment Status is required"
                        }
                    }

                    if (!dateOfJoining) {
                        error = {
                            ...error,
                            dateOfJoining: "Date of Joining is required"
                        }
                    }

                    if (!serviceStatus) {
                        error = {
                            ...error,
                            serviceStatus: "Service Status is required"
                        }
                    }

                    if (!appraisalCycle) {
                        error = {
                            ...error,
                            appraisalCycle: "Appraisal Cycle is required"
                        }
                    }

                    if (!sourceOfHiringRequest) {
                        error = {
                            ...error,
                            sourceOfHiringRequest: "Source of Hiring Request is required"
                        }
                    }

                    if (salary && !checkNumber(salary)) {
                        error.salary = "Please Enter only Number";
                    }

                    if (error.salary) {

                        $("#errorSalary").html(error.salary);
                        $(".salary").addClass("error-input");
                        $("#errorSalary").addClass("text-danger");

                    } else {
                        $("#errorSalary").html("");
                        $(".salary").removeClass("error-input");
                        $("#errorSalary").removeClass("text-danger");
                    }

                    if (error.designation) {

                        $("#errorDesignation").html(error.designation);
                        $(".designation").addClass("error-input");
                        $("#errorDesignation").addClass("text-danger");

                    } else {
                        $("#errorDesignation").html("");
                        $(".designation").removeClass("error-input");
                        $("#errorDesignation").removeClass("text-danger");
                    }

                    if (error.isTraniee) {

                        $("#errorIsTraniee").html(error.isTraniee);
                        $(".isTraniee").addClass("error-input");
                        $("#errorIsTraniee").addClass("text-danger");

                    } else {
                        $("#errorIsTraniee").html("");
                        $(".isTraniee").removeClass("error-input");
                        $("#errorIsTraniee").removeClass("text-danger");
                    }

					if (error.revenueEarning) {

                        $("#errorRevenueEarning").html(error.revenueEarning);
                        $(".revenueEarning").addClass("error-input");
                        $("#errorRevenueEarning").addClass("text-danger");

                    } else {
                        $("#errorRevenueEarning").html("");
                        $(".revenueEarning").removeClass("error-input");
                        $("#errorRevenueEarning").removeClass("text-danger");
                    }

                    if (error.employmentStatus) {

                        $("#errorEmploymentStatus").html(error.employmentStatus);
                        $(".employmentStatus").addClass("error-input");
                        $("#errorEmploymentStatus").addClass("text-danger");

                    } else {
                        $("#errorEmploymentStatus").html("");
                        $(".employmentStatus").removeClass("error-input");
                        $("#errorEmploymentStatus").removeClass("text-danger");
                    }

                    if (error.dateOfJoining) {

                        $("#errorDateOfJoining").html(error.dateOfJoining);
                        $(".dateOfJoining").addClass("error-input");
                        $("#errorDateOfJoining").addClass("text-danger");

                    } else {
                        $("#errorDateOfJoining").html("");
                        $(".dateOfJoining").removeClass("error-input");
                        $("#errorDateOfJoining").removeClass("text-danger");
                    }

                    if (error.serviceStatus) {

                        $("#errorServiceStatus").html(error.serviceStatus);
                        $(".serviceStatus").addClass("error-input");
                        $("#errorServiceStatus").addClass("text-danger");

                    } else {
                        $("#errorServiceStatus").html("");
                        $(".serviceStatus").removeClass("error-input");
                        $("#errorServiceStatus").removeClass("text-danger");
                    }

                    if (error.appraisalCycle) {

                        $("#errorAppraisalCycle").html(error.appraisalCycle);
                        $(".appraisalCycle").addClass("error-input");
                        $("#errorAppraisalCycle").addClass("text-danger");

                    } else {
                        $("#errorAppraisalCycle").html("");
                        $(".appraisalCycle").removeClass("error-input");
                        $("#errorAppraisalCycle").removeClass("text-danger");
                    }

                    if (error.sourceOfHiringRequest) {

                        $("#errorSourceOfHiringRequest").html(error.sourceOfHiringRequest);
                        $(".sourceOfHiringRequest").addClass("error-input");
                        $("#errorSourceOfHiringRequest").addClass("text-danger");

                    } else {
                        $("#errorSourceOfHiringRequest").html("");
                        $(".sourceOfHiringRequest").removeClass("error-input");
                        $("#errorSourceOfHiringRequest").removeClass("text-danger");
                    }

                    var aadharImageElement = document.getElementById('uploadedAadharImage');
                    var aadharImageSrc = aadharImageElement.getAttribute('src');

                    let dataObject = {
                        employeeId: Number($('#id').val()),
                        buttonText: $(this).text(),
                        designation: Number($(".designation").val()),
                        employmentStatus: $(".employmentStatus").val(),
                        dateOfJoining: $(".dateOfJoining").val(),
                        aadharImage: aadharImageSrc,
                        shiftTiming: $(".shiftTiming").val(),
                        serviceStatus: $(".serviceStatus").val(),
                        appraisalCycle: $(".appraisalCycle").val(),
                        typeOfMedicalInsurance: $(".typeOfMedicalInsurance").val(),
                        chronicMedicalCondition: $(".chronicMedicalCondition").val(),
                        salary: $(".salary").val(),
                        reporting: Number($(".reporting").val()),
                        sourceOfHiringRequest: $(".sourceOfHiringRequest").val(),
                        permanentDate: $(".permanentDate").val(),
                        noticeStatus: $(".noticeStatus").val(),
                        dateOfNotice: $(".dateOfNotice").val(),
                        dateOfExit: $(".dateOfExit").val(),
                        exitReason: $(".exitReason").val(),
                        istrainee: $(".isTraniee").val(),
                    };

                    const stepThreeData = JSON.stringify(dataObject);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    if (Object.keys(error).length === 0) {

                        $.ajax({
                            type: "POST",
                            url: "/employee/additional/info",
                            data: {
                                    data: stepThreeData,
                            },
                            success: function(response) {
                                if (response) {
                                    //alert("Form submitted successfully!");
                                }
                                if (clickType == 'submit' || clickType == 'next') {
									toastr.success('Employee Information submitted successfully!')
                                    $("#submit").css("display", "block");
                                    $("#next").css("display", "none");
                                    stepper3.next();
                                }
                            }
                        });
                    }
                }

            }

            function stepFour(clickType) {

                var tableData = [];
                $("#asssignProcessTbody tr").each(function() {
                    var row = $(this);
                    var rowData = {
                    spanId: Number(row.find(".assignspanId").text()),
                    clientId: Number(row.find(".assignclientId").text()),
                    processId:Number( row.find(".assignprocessId").text()),
                    billableStatus: row.find(".assignbillable").text(),
                    contribution: row.find(".contribution").text(),
                    };

                    tableData.push(rowData);
                });

                let assignspan = $('.assignspan').map(function() {
                    return $(this).text();
                }).get();
                let assignclient = $('.assignclient').map(function() {
                    return $(this).text();
                }).get();

                let assignprocess = $('.assignprocess').map(function() {
                    return $(this).text();
                }).get();

                let assignbillable = $('.assignbillable').map(function() {
                    return $(this).text();
                }).get();

                let contribution = $('.contribution').map(function() {
                    return $(this).text();
                }).get();


                let dataObject = {
                    employeeId: $('#id').val(),
                    buttonText: $(this).text(),
                    arr: tableData
                };

                const stepFourData = JSON.stringify(dataObject);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/employee/proccess/assignment",
                    data: {
                        data: stepFourData,
                     },
                    success: function(response) {
                        // if (clickType == 'submit' || clickType == 'next') {
                        // 	stepper3.next();
                        // }
                        if (clickType == 'next') {
							toastr.success('Process Assignment submitted successfully!')
                            stepper3.next();
                        }
                        if (clickType == 'submit') {
							toastr.success('Process Assignment submitted successfully!')
                            window.location.replace("http://127.0.0.1:8000/activeEmployee");
                        }

                    }
                });
            }


            function stepFive(clickType) {

                var tableData2 = [];
                $("#asssignIjpTbody tr").each(function() {
                    var row = $(this);
                    var statusElement = row.find(".ijpStatus");
    var statusText = statusElement.text().trim();

    
    var IjpStatus;
    switch (statusText) {
        case "Pending":
            IjpStatus = "Pending";
            break;
        case "Processing":
            IjpStatus = "Processing";
            break;
        case "Completed":
            IjpStatus = "Completed";
            break;
        default:
           
            IjpStatus = "Unknown";
    }
                    var rowData = {
                        IjpName: row.find(".ijpName").text(),
                        IjpDateOfApplication: row.find(".dateOfApplication").text(),
                        IjpStatus: IjpStatus,
						IjpBillableStatus: row.find(".ijpBillableStatus").text(),
                        IjpClosure: row.find(".dateOfClosure").text(),
                        IjpSpan: row.find(".ijpSpan").text(),
                        IjpProcess: row.find(".ijpProcess").text(),
                        IjpClient: row.find(".ijpClient").text()
                    };

                    tableData2.push(rowData);
                });



                let ijpName = $('.ijpName').map(function() {
                    return $(this).text();
                }).get();

                let dateOfApplication = $('.dateOfApplication').map(function() {
                    return $(this).text();
                }).get();

                let ijpstatus = $('.ijpStatus').map(function() {
                    return $(this).text();
                }).get();

                let dateOfClosure = $('.dateOfClosure').map(function() {
                    return $(this).text();
                }).get();
                let ijpspan = $('.ijpSpan').map(function() {
                    return $(this).text();
                }).get();

                let ijpprocess = $('.ijpProcess').map(function() {
                    return $(this).text();
                }).get();

                let ijpclient = $('.ijpClient').map(function() {
                    return $(this).text();
                }).get();

                let dataObject = {
                    employeeId: $('#id').val(),
                    buttonText: $(this).text(),
                    arr2: tableData2

                };

                const stepFiveData = JSON.stringify(dataObject);
				
				$.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "/employee/ijp",
                    headers: {
                        Authorization: token,
                    },
                    data: {
                        data: stepFiveData,
                     },
                    success: function(response) {
                        // if (clickType == 'submit' || clickType == 'next') {
                        // 	//window.location.replace("http://localhost/sunKnowledge/employee");
                        // 	stepper3.next();
                        // }

                        if (clickType == 'next') {
							toastr.success('IJP submitted successfully!')
                            stepper3.next();
                        }
                        if (clickType == 'submit') {
							toastr.success('IJP submitted successfully!')
                            window.location.replace("http://127.0.0.1:8000/activeEmployee");
                        }
                    }
                });
            }




            $(".addMore").click(function(e) {
                e.preventDefault();
                var newSection = `
		<div class="col-12 addMoreContainer">
			<div class="row g-3 relative-section">
				<div class="col">
					<div class="row g-3">
						<div class="col-12 col-md-6 col-lg-12 col-xl-6">
							<label for="input6" class="form-label">Relative’s Name</label>
							<input type="text" name="relativeName" class="form-control relativeName" id="input6">
						</div>
						<div class="col-12 col-md-6 col-lg-12 col-xl-6">
							<label for="input2" class="form-label">Relationship</label>
							<select id="input7" name="relationWithRelative" class="form-select relationWithRelative">
								<option value="" selected></option>
								<option value="Sibling">Sibling</option>
								<option value="Spouse">Spouse</option>
								<option value="Partner">Partner</option>
								<option value="Parent">Parent</option>
								<option value="Cousin">Cousin</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-xxl-2 d-flex align-items-end flex-column">
					<label for="input6" class="form-label">&nbsp;</label>
					<div>
						<button class="btn btn-danger remove-section">Remove</button>
					</div>
				</div>
				<hr class="mt-4 mb-2" />
			</div>
		</div>
		`;

                $(this).closest(".addMoreContainer").after(newSection);
            });


            $(".ab").on("click", ".remove-section", function() {
                console.log("Remove clicked");
                console.log("Removing section:", $(this).parents(".relative-section")); // Debugging
                $(this).closest(".addMoreContainer").remove(); // Use closest to remove the entire section
            });

            $('#openProcess').click(function() {
                $('.contributionDiv').hide();
                $("#updateProcessButton").css("display", "none");
                $("#addProcessButton").css("display", "block");
                $(".editModal").find("input, select").val("");
            })

            $('#openIjp').click(function() {
                $("#updateIjpButton").css("display", "none");
                $("#addIjpButton").css("display", "block");
                $(".editIjpModal").find("input, select").val("");
            })



            let newRowCounter = 0;
        let arr = [];
        if (newRowCounter == 0) {
          $("#asssignProcessTbody").append("No Data Found");
        }

        $("#addProcessButton").click(function () {
           
          let row = $("#asssignProcessTbody").find(`tr[data-row-id]`).length;
          let spanId = $(".modelSpan").val();
          let spanName = $(".modelSpan option:selected").text();
          let clientId = $(".modelClient").val();
          let clientName = $(".modelClient option:selected").text();
          let processId = $(".modelProcess").val();
          let processName = $(".modelProcess option:selected").text();
          let billableStatus = $(".modelBillable").val();
          let contribution = $(".modelContribution").val();

          arr.push({
            spanId: spanId,
            clientId: clientId,
            processId: processId,
            billableStatus: billableStatus,
            contribution: contribution,
          });
          console.log(arr);
          newRowCounter++;

          if (
            spanId != "" ||
            clientId != "" ||
            processId != "" ||
            billableStatus != "" ||
            contribution != ""
          ) {
            const newRow = `
				<tr data-row-id="${row}">
					<td class="assignspanId" style = "display: none;">${spanId}</td>
					<td class="assignspan">${spanName}</td>
					<td class="assignclientId" style = "display: none;">${clientId}</td>
					<td class="assignclient">${clientName}</td>
					<td class="assignprocessId" style = "display: none;">${processId}</td>
					<td class="assignprocess">${processName}</td>
					<td class="assignbillable">${billableStatus}</td>
					<td class="contribution">${contribution}</td>
					<td>
						<div class="d-flex justify-content-end">
							<i class="fadeIn animated bx bx-pencil fs-5 editAssignRow"></i>
							<i class="fadeIn animated bx bx-trash-alt delete-proccess delete-row ms-2 fs-5"></i>
						</div>
					</td>
				</tr>
			`;
            if (newRowCounter == 1) {
              $("#asssignProcessTbody").html("");
            }
            $("#asssignProcessTbody").append(newRow);
            $(".editModal").modal("hide");
            $(".editModal").find("input, select").val("");
          }
        });

        $("#asssignProcessTbody").on("click", ".delete-row", function () {
          newRowCounter--;
          $(this).closest("tr").remove();
          if (newRowCounter == 0) {
            $("#asssignProcessTbody").append("No Data Found");
          }
        });

        let editedRowId;

        $("#asssignProcessTbody").on("click", ".editAssignRow", function () {
          $("#updateProcessButton").css("display", "block");
          $("#addProcessButton").css("display", "none");

          let row = $(this).closest("tr");
          let spanValue = row.find(".assignspanId").text();
          let clientValue = row.find(".assignclientId").text();
          let processValue = row.find(".assignprocessId").text();
          let assignValue = row.find(".assignbillable").text();
          let contributionValue = row.find(".contribution").text();

          editedRowId = row.data("row-id");

          $(".modelSpan").val(spanValue);
          $(".modelClient").val(clientValue);
          $(".modelProcess").val(processValue);
          $(".modelBillable").val(assignValue);
          $(".modelContribution").val(contributionValue);

          $(".editModal").modal("show");
        });

        $("#updateProcessButton").click(function () {
          let editedSpanValue = $(".modelSpan").val();
          let editedClientValue = $(".modelClient").val();
          let editedProcessValue = $(".modelProcess").val();
          let editedBillableValue = $(".modelBillable").val();
          let editedContributionValue = $(".modelContribution").val();
          let editedspanName = $(".modelSpan option:selected").text();
          let editedclientName = $(".modelClient option:selected").text();
          let editedprocessName = $(".modelProcess option:selected").text();

          let rowToUpdate = $("#asssignProcessTbody").find(
            `tr[data-row-id="${editedRowId}"]`
          );
          rowToUpdate.find(".assignspan").text(editedspanName);
          rowToUpdate.find(".assignspanId").text(editedSpanValue);

          rowToUpdate.find(".assignclient").text(editedclientName);
          rowToUpdate.find(".assignclientId").text(editedClientValue);

          rowToUpdate.find(".assignprocess").text(editedprocessName);
          rowToUpdate.find(".assignprocessId").text(editedProcessValue);

          rowToUpdate.find(".assignbillable").text(editedBillableValue);
          rowToUpdate.find(".contribution").text(editedContributionValue);

          $(".editModal").modal("hide");
        });

            let arr2 = [];
            let RowCounter = 0;

            $("#addIjpButton").click(function() {
                let row = $("#asssignIjpTbody").find(`tr[data-row-id]`).length;
                let IjpName = $('.modalIjpName').val();
                let IjpDateOfApplication = $('.MIDOA').val();
                let IjpProcess = $('.modalIjpProcess').val();
				let IjpStatus = $('.modalIjpStatus').val();
                let IjpBillableStatus = $('.modalBillableIjpStatus').val();
                let IjpClosure = $('.MIDOC').val();
                let IjpSpan = $('.modalIjpSpan').val();
                let IjpClient = $('.modalIjpClient').val();


                arr2.push({
                    IjpName: IjpName,
                    IjpDateOfApplication: IjpDateOfApplication,
                    IjpProcess: IjpProcess,
					IjpBillableStatus: IjpBillableStatus,
                    IjpStatus: IjpStatus,
                    IjpClosure: IjpClosure,
                    IjpSpan: IjpSpan,
                    IjpClient: IjpClient,
                })
                console.log(arr2);


                RowCounter++;
                if (IjpName != "" || IjpDateOfApplication != "" || IjpProcess != "" || IjpStatus != "" || IjpBillableStatus != "" ||
                    IjpClosure != "" || IjpSpan != "" || IjpClient != "") {

                    const newRow = `
<tr data-row-id="${row}">

													<td class="ijpName">${IjpName}</td>
													<td class="dateOfApplication">${IjpDateOfApplication}</td>
													<td class="ijpBillableStatus">${IjpBillableStatus}</td>
													<td class="dateOfClosure">${IjpClosure}</td>
													<td class="ijpSpan">${IjpSpan}</td>
													<td class="ijpProcess">${IjpProcess}</td>
													<td class="ijpClient">${IjpClient}</td>
													<td class="ijpStatus">        ${(() => {
            switch (IjpStatus) {
                case 'Pending':
                    return `
                        <div class="d-flex align-items-center text-danger">
                            <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                            <span>Pending</span>
                        </div>`;
                case 'Processing':
                    return `
                        <div class="d-flex align-items-center text-primary">
                            <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                            <span>Processing</span>
                        </div>`;
                case 'Completed':
                    return `
                        <div class="d-flex align-items-center text-success">
                            <i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                            <span>Completed</span>
                        </div>`;
                default:
                    return ''; 
            }
        })()}</td>
													<td>
														<div class="d-flex justify-content-end">
															<i class="fadeIn animated bx bx-pencil fs-5 editIjpRow"></i>
															<i class="fadeIn animated bx bx-trash-alt delete-proccess ms-2 fs-5 delete-row"></i>
														</div>
													</td>
												</tr>
`;


                    $("#asssignIjpTbody").append(newRow);
                    $(".editIjpModal").modal("hide");
                    $(".editIjpModal").find("input, select").val("");
                }

            });

            $("#asssignIjpTbody").on("click", ".delete-row", function() {

                $(this).closest("tr").remove();
            });


            let editedIjpRowId;

            $("#asssignIjpTbody").on("click", ".editIjpRow", function() {
                $("#updateIjpButton").css("display", "block");
                $("#addIjpButton").css("display", "none");

                let row = $(this).closest("tr");
                let ijpNameValue = row.find(".ijpName").text();
                let ijpDateOfApplication = row.find(".dateOfApplication").text();
                let ijpStatus = row.find(".ijpStatus").text();
                let ijpDateOfClosure = row.find(".dateOfClosure").text();
                let ijpSpan = row.find(".ijpSpan").text();
                let ijpProcess = row.find(".ijpProcess").text();
                let ijpClient = row.find(".ijpClient").text();


                editedIjpRowId = row.data("row-id");


                $('.modalIjpName').val(ijpNameValue);
                $('.MIDOA').val(ijpDateOfApplication);
                $('.modalIjpStatus').val(ijpStatus);
                $('.MIDOC').val(ijpDateOfClosure);
                $('.modalIjpSpan').val(ijpSpan);
                $('.modalIjpProcess').val(ijpProcess);
                $('.modalIjpClient').val(ijpClient);


                $(".editIjpModal").modal("show");
            });


            $("#updateIjpButton").click(function() {


                let editedIjpNameValue = $('.modalIjpName').val();
                let editedAppDateValue = $('.MIDOA').val();
                let editedStatusValue = $('.modalIjpStatus').val();
                let editedClosureDateValue = $('.closureDateInput').val();
                let editedSpanValue = $('.modalIjpSpan').val();
                let editedProcessValue = $('.modalIjpProcess').val();
                let editedClientValue = $('.modalIjpClient').val();


                let rowToUpdate = $("#asssignIjpTbody").find(`tr[data-row-id="${editedIjpRowId}"]`);
                rowToUpdate.find(".ijpName").text(editedIjpNameValue);
                rowToUpdate.find(".dateOfApplication").text(editedAppDateValue);
                //rowToUpdate.find(".ijpStatus").removeClass().addClass(getStatusClass(editedStatusValue));
                rowToUpdate.find(".dateOfClosure").text(editedClosureDateValue);
                rowToUpdate.find(".ijpSpan").text(editedSpanValue);
                rowToUpdate.find(".ijpProcess").text(editedProcessValue);
                rowToUpdate.find(".ijpClient").text(editedClientValue);
                let ijpStatusCell = rowToUpdate.find(".ijpStatus");
    ijpStatusCell.find("i").removeClass(); // Remove existing classes from the <i> element
    ijpStatusCell.find("i").addClass(getStatusIconClass(editedStatusValue)); // Set the appropriate class for the <i> element
    ijpStatusCell.find("span").text(editedStatusValue); // Update the text content


                $(".editIjpModal").modal("hide");
            });

        });

        function getStatusIconClass(status) {
    switch (status) {
        case 'Pending':
            return 'bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1 text-danger';
        case 'Processing':
            return 'bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1 text-primary';
        case 'Completed':
            return 'bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1 text-success';
        default:
            return ''; // Handle other cases as needed
    }
}

        function createObjectFromArrays(keys, values) {
            if (keys.length !== values.length) {
                throw new Error('Arrays must have the same length');
            }

            const result = {};

            for (let i = 0; i < keys.length; i++) {
                result[keys[i]] = values[i];
            }

            return result;
        }

        function checkNumber(params) {
            // Remove any non-digit characters from the input string
            const cleanedString = params.replace(/\D/g, '');

            // Check if the cleaned string is empty (no digits remaining)
            if (cleanedString.length === 0) {
                return false; // It contains alphabetic characters or is empty.
            } else {
                return true; // It's a phone number (contains only numeric characters).
            }
        }
    </script>
    <script>
        $('#fancy-file-upload').FancyFileUpload({
            params: {
                action: 'fileuploader'
            },
            maxfilesize: 1000000
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#image-uploadify').imageuploadify();
        })
    </script>
@endsection
