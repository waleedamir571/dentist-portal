<?php include 'partials/header.php'; ?>

<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">My Booking</h4>

                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div><!--end row-->

            <div class="row pt-20">
                <div class="col-md-6">

                    <div class="form-group">
                        <label class="label12" for="exampleInputEmail1">Search:</label>
                        <form role="search" action="#" method="get">
                            <input type="search" name="search" class="form-control top-search mb-0"
                                placeholder="Search in your courses...">
                            <!-- <button type="submit"><i class="iconoir-search"></i></button> -->
                        </form>

                    </div>
                </div>
                <div class="col-md-2 ">
                    <div class="form-group row mb-2">
                        <label class="label12" for="exampleInputEmail1">Sort by:</label>

                        <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-select">
                            <option value="">Latest</option>
                            <option value="AE">old</option>

                        </select>

                    </div>
                </div>
                <div class="col-md-2 ">
                    <div class="form-group row mb-2">
                        <label class="label12" for="exampleInputEmail1">Category:</label>

                        <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-select">
                            <option value="">All Category</option>
                            <option value="AE">old</option>

                        </select>

                    </div>
                </div>
                <div class="col-md-2 ">
                    <div class="form-group row mb-2">
                        <label class="label12" for="exampleInputEmail1">Rating:</label>

                        <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-select">
                            <option value="">4 Star & Up</option>
                            <option value="AE">3 Star & Up</option>
                            <option value="VI">2 Star & Up</option>
                            <option value="MC">1 Star & Up</option>

                        </select>

                    </div>
                </div>
            </div>
            <br>

            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">My Booking</h4>
                                </div><!--end col-->

                                <div class="col-auto">
                                    <div class="btn-label-group">
                                    <a href="calender-view.php">    <p class="label12"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                height="24" viewBox="0 0 25 24" fill="none">
                                                <path d="M8.38892 2V5" stroke="#1D2026" stroke-width="1.5"
                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M16.3889 2V5" stroke="#1D2026" stroke-width="1.5"
                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M3.88892 9.08984H20.8889" stroke="#1D2026" stroke-width="1.5"
                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M21.3889 8.5V17C21.3889 20 19.8889 22 16.3889 22H8.38892C4.88892 22 3.38892 20 3.38892 17V8.5C3.38892 5.5 4.88892 3.5 8.38892 3.5H16.3889C19.8889 3.5 21.3889 5.5 21.3889 8.5Z"
                                                    stroke="#1D2026" stroke-width="1.5" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M16.0836 13.6992H16.0926" stroke="#1D2026" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M16.0836 16.6992H16.0926" stroke="#1D2026" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.3844 13.6992H12.3934" stroke="#1D2026" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.3844 16.6992H12.3934" stroke="#1D2026" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M8.68323 13.6992H8.69221" stroke="#1D2026" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M8.68323 16.6992H8.69221" stroke="#1D2026" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg> Calendar View</p></a>

                                        <button class="btn btn-primary1" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalDefault">Add Availability</button>
                                        <!-- <button type="button" class="btn btn-primary btn-sm" >
                                                            Launch demo modal
                                                        </button> -->
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>

                        <!--end card-header-->
                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table class="table datatable" id="datatable_1">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Date</th>
                                            <th>Student Name</th>
                                            <th>Category</th>
                                            <th>Sub Category</th>
                                            <th>Duration</th>
                                            <th>Status</th>
                                            <!-- <th data-type="date" data-format="YYYY/DD/MM">Start Date</th> -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>21 Sep, 2021 at 2:14 AM</td>
                                            <td>Calvin Carl </td>
                                            <td>Dentist</td>
                                            <td>Dental Core</td>
                                            <td>45 Minutes</td>
                                            <td class="active1">Active</td>
                                            <td>
                                                <div class="dropdown-wrapper">
                                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                    <ul class="dropdown-menu">
                                                        <li onclick="selectItem(this)">Cancel Booking</li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Sep, 2021 at 2:14 AM</td>
                                            <td>Calvin Carl </td>
                                            <td>Dentist</td>
                                            <td>Dental Core</td>
                                            <td>45 Minutes</td>
                                            <td class="pending">Pending</td>
                                            <td>
                                                <div class="dropdown-wrapper">
                                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                    <ul class="dropdown-menu">
                                                        <li onclick="selectItem(this)">Cancel Booking</li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Sep, 2021 at 2:14 AM</td>
                                            <td>Calvin Carl </td>
                                            <td>Dentist</td>
                                            <td>Dental Core</td>
                                            <td>45 Minutes</td>
                                            <td class="active1">Active</td>
                                            <td>
                                                <div class="dropdown-wrapper">
                                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                    <ul class="dropdown-menu">
                                                        <li onclick="selectItem(this)">Cancel Booking</li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Sep, 2021 at 2:14 AM</td>
                                            <td>Calvin Carl </td>
                                            <td>Dentist</td>
                                            <td>Dental Core</td>
                                            <td>45 Minutes</td>
                                            <td class="pending">Pending</td>
                                            <td>
                                                <div class="dropdown-wrapper">
                                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                    <ul class="dropdown-menu">
                                                        <li onclick="selectItem(this)">Cancel Booking</li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Sep, 2021 at 2:14 AM</td>
                                            <td>Calvin Carl </td>
                                            <td>Dentist</td>
                                            <td>Dental Core</td>
                                            <td>45 Minutes</td>
                                            <td class="active1">Active</td>
                                            <td>
                                                <div class="dropdown-wrapper">
                                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                    <ul class="dropdown-menu">
                                                        <li onclick="selectItem(this)">Cancel Booking</li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Sep, 2021 at 2:14 AM</td>
                                            <td>Calvin Carl </td>
                                            <td>Dentist</td>
                                            <td>Dental Core</td>
                                            <td>45 Minutes</td>
                                            <td class="pending">Pending</td>
                                            <td>
                                                <div class="dropdown-wrapper">
                                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                    <ul class="dropdown-menu">
                                                        <li onclick="selectItem(this)">Cancel Booking</li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Sep, 2021 at 2:14 AM</td>
                                            <td>Calvin Carl </td>
                                            <td>Dentist</td>
                                            <td>Dental Core</td>
                                            <td>45 Minutes</td>
                                            <td class="active1">Active</td>
                                            <td>
                                                <div class="dropdown-wrapper">
                                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                    <ul class="dropdown-menu">
                                                        <li onclick="selectItem(this)">Cancel Booking</li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Sep, 2021 at 2:14 AM</td>
                                            <td>Calvin Carl </td>
                                            <td>Dentist</td>
                                            <td>Dental Core</td>
                                            <td>45 Minutes</td>
                                            <td class="pending">Pending</td>
                                            <td>
                                                <div class="dropdown-wrapper">
                                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                    <ul class="dropdown-menu">
                                                        <li onclick="selectItem(this)">Cancel Booking</li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Sep, 2021 at 2:14 AM</td>
                                            <td>Calvin Carl </td>
                                            <td>Dentist</td>
                                            <td>Dental Core</td>
                                            <td>45 Minutes</td>
                                            <td class="active1">Active</td>
                                            <td>
                                                <div class="dropdown-wrapper">
                                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                    <ul class="dropdown-menu">
                                                        <li onclick="selectItem(this)">Cancel Booking</li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Sep, 2021 at 2:14 AM</td>
                                            <td>Calvin Carl </td>
                                            <td>Dentist</td>
                                            <td>Dental Core</td>
                                            <td>45 Minutes</td>
                                            <td class="pending">Pending</td>
                                            <td>
                                                <div class="dropdown-wrapper">
                                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                    <ul class="dropdown-menu">
                                                        <li onclick="selectItem(this)">Cancel Booking</li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Sep, 2021 at 2:14 AM</td>
                                            <td>Calvin Carl </td>
                                            <td>Dentist</td>
                                            <td>Dental Core</td>
                                            <td>45 Minutes</td>
                                            <td class="active1">Active</td>
                                            <td>
                                                <div class="dropdown-wrapper">
                                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                    <ul class="dropdown-menu">
                                                        <li onclick="selectItem(this)">Cancel Booking</li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Sep, 2021 at 2:14 AM</td>
                                            <td>Calvin Carl </td>
                                            <td>Dentist</td>
                                            <td>Dental Core</td>
                                            <td>45 Minutes</td>
                                            <td class="pending">Pending</td>
                                            <td>
                                                <div class="dropdown-wrapper">
                                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                    <ul class="dropdown-menu">
                                                        <li onclick="selectItem(this)">Cancel Booking</li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Sep, 2021 at 2:14 AM</td>
                                            <td>Calvin Carl </td>
                                            <td>Dentist</td>
                                            <td>Dental Core</td>
                                            <td>45 Minutes</td>
                                            <td class="active1">Active</td>
                                            <td>
                                                <div class="dropdown-wrapper">
                                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                    <ul class="dropdown-menu">
                                                        <li onclick="selectItem(this)">Cancel Booking</li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Sep, 2021 at 2:14 AM</td>
                                            <td>Calvin Carl </td>
                                            <td>Dentist</td>
                                            <td>Dental Core</td>
                                            <td>45 Minutes</td>
                                            <td class="pending">Pending</td>
                                            <td>
                                                <div class="dropdown-wrapper">
                                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                    <ul class="dropdown-menu">
                                                        <li onclick="selectItem(this)">Cancel Booking</li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Sep, 2021 at 2:14 AM</td>
                                            <td>Calvin Carl </td>
                                            <td>Dentist</td>
                                            <td>Dental Core</td>
                                            <td>45 Minutes</td>
                                            <td class="active1">Active</td>
                                            <td>
                                                <div class="dropdown-wrapper">
                                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                    <ul class="dropdown-menu">
                                                        <li onclick="selectItem(this)">Cancel Booking</li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Sep, 2021 at 2:14 AM</td>
                                            <td>Calvin Carl </td>
                                            <td>Dentist</td>
                                            <td>Dental Core</td>
                                            <td>45 Minutes</td>
                                            <td class="pending">Pending</td>
                                            <td>
                                                <div class="dropdown-wrapper">
                                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                    <ul class="dropdown-menu">
                                                        <li onclick="selectItem(this)">Cancel Booking</li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Sep, 2021 at 2:14 AM</td>
                                            <td>Calvin Carl </td>
                                            <td>Dentist</td>
                                            <td>Dental Core</td>
                                            <td>45 Minutes</td>
                                            <td class="active1">Active</td>
                                            <td>
                                                <div class="dropdown-wrapper">
                                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                    <ul class="dropdown-menu">
                                                        <li onclick="selectItem(this)">Cancel Booking</li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Sep, 2021 at 2:14 AM</td>
                                            <td>Calvin Carl </td>
                                            <td>Dentist</td>
                                            <td>Dental Core</td>
                                            <td>45 Minutes</td>
                                            <td class="pending">Pending</td>
                                            <td>
                                                <div class="dropdown-wrapper">
                                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                    <ul class="dropdown-menu">
                                                        <li onclick="selectItem(this)">Cancel Booking</li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Sep, 2021 at 2:14 AM</td>
                                            <td>Calvin Carl </td>
                                            <td>Dentist</td>
                                            <td>Dental Core</td>
                                            <td>45 Minutes</td>
                                            <td class="active1">Active</td>
                                            <td>
                                                <div class="dropdown-wrapper">
                                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                    <ul class="dropdown-menu">
                                                        <li onclick="selectItem(this)">Cancel Booking</li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Sep, 2021 at 2:14 AM</td>
                                            <td>Calvin Carl </td>
                                            <td>Dentist</td>
                                            <td>Dental Core</td>
                                            <td>45 Minutes</td>
                                            <td class="pending">Pending</td>
                                            <td>
                                                <div class="dropdown-wrapper">
                                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                                    <ul class="dropdown-menu">
                                                        <li onclick="selectItem(this)">Cancel Booking</li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->




        </div> <!--end col-->
    </div><!--end row-->
</div><!-- container -->
<!--Start Rightbar-->
<!--Start Rightbar/offcanvas-->
<div class="modal fade" id="exampleModalDefault" tabindex="-1" aria-labelledby="addAvailabilityLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content p-3">

            <div class="modal-header border-0">
                <h5 class="modal-title" id="addAvailabilityLabel">Add Availability</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <input type="text" class="form-control mb-3" placeholder="Meeting heading...">

                <div class="mb-3">
                    <label class="form-label form-label1"><i class="bi bi-clock"></i> Select Date & Time</label>
                    <input type="date" class="form-control" placeholder="Select Date & time">
                </div>

                <div class="mb-3">
                    <label class="form-label form-label1">Category</label>
                    <select class="form-select">
                        <option selected>Choose Category</option>
                        <option>Consultation</option>
                        <option>Follow-up</option>
                    </select>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label form-label1">To</label>
                        <select class="form-select">
                            <option selected>Start</option>
                            <option>9:00 AM</option>
                            <option>10:00 AM</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label form-label1">From</label>
                        <select class="form-select">
                            <option selected>End Time</option>
                            <option>11:00 AM</option>
                            <option>12:00 PM</option>
                        </select>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <label class="form-label form-label1 mb-0"><i class="iconoir-map-pin menu-icon"></i> Choose location</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="onsiteSwitch" checked>
                        <label class="form-check-label" for="onsiteSwitch">On Site</label>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-2">
                    <div>
                        <label class="form-label form-label1 mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 16 16" fill="none">
                                <path
                                    d="M2.38672 3.44141H11.6134C12.7201 3.44141 13.6134 4.33474 13.6134 5.44141V7.65474"
                                    stroke="#7E7E7E" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M4.49339 1.33398L2.38672 3.44063L4.49339 5.54732" stroke="#7E7E7E"
                                    stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M13.6134 12.561H4.38672C3.28005 12.561 2.38672 11.6677 2.38672 10.561V8.34766"
                                    stroke="#7E7E7E" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M11.5068 14.6665L13.6135 12.5598L11.5068 10.4531" stroke="#7E7E7E"
                                    stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>  Repeating</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="allDaySwitch">
                        <label class="form-check-label" for="allDaySwitch">All day</label>
                    </div>
                </div>

                <div class="d-flex gap-2 flex-wrap mb-3">
                    <button type="button" class="day-btn active">M</button>
                    <button type="button" class="day-btn active">T</button>
                    <button type="button" class="day-btn">W</button>
                    <button type="button" class="day-btn active">T</button>
                    <button type="button" class="day-btn">F</button>
                    <button type="button" class="day-btn red">S</button>
                    <button type="button" class="day-btn red">S</button>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-link text-muted" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary1 px-4">Add Schedule</button>
            </div>
        </div>
    </div>
</div>

<!--end Rightbar/offcanvas-->
<!--end Rightbar-->
<!--Start Footer-->







<?php include 'partials/footer.php'; ?>