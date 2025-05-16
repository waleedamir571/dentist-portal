<?php include 'partials/header.php'; ?>

<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">My Courses</h4>

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

            <div class="row  pt-20">
            
                <div class="col-md-3">
                    <a href="course.php"> 
                    <div class="course-card">
                        <img src="assets/images/home/dr1.png" alt="Course Image" class="course-image">

                        <div class="course-body">
                            <span class="tag">DEVELOPMENTS</span>
                            <h3 class="course-title">Learn Python Programming Masterclass</h3>

                            <div class="course-stats">
                                <div class="rating">
                                    <span class="star">★</span> 4.0
                                </div>
                                <div class="learners">
                                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                            viewBox="0 0 20 21" fill="none">
                                            <path
                                                d="M10 13C12.7614 13 15 10.7614 15 8C15 5.23858 12.7614 3 10 3C7.23858 3 5 5.23858 5 8C5 10.7614 7.23858 13 10 13Z"
                                                stroke="#564FFD" stroke-width="1.5" stroke-miterlimit="10" />
                                            <path
                                                d="M2.42102 17.3743C3.18943 16.0442 4.29431 14.9398 5.62468 14.172C6.95505 13.4042 8.46405 13 10.0001 13C11.5361 13 13.0451 13.4043 14.3755 14.1721C15.7058 14.94 16.8107 16.0444 17.5791 17.3744"
                                                stroke="#564FFD" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg></span> 511,123 <span class="text-muted">Learners</span>
                                </div>
                            </div>

                            <div class="course-footer">
                                <div class="price">$49.00</div>
                                <div class="dropdown-wrapper">
                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                    <ul class="dropdown-menu">
                                        <li onclick="selectItem(this)">View Details</li>
                                        <li onclick="selectItem(this)">Edit Course</li>
                                        <li onclick="selectItem(this)">Delete Course</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
           
                <div class="col-md-3">
                    <div class="course-card">
                        <img src="assets/images/home/dr2.png" alt="Course Image" class="course-image">

                        <div class="course-body">
                            <span class="tag">DEVELOPMENTS</span>
                            <h3 class="course-title">Learn Python Programming Masterclass</h3>

                            <div class="course-stats">
                                <div class="rating">
                                    <span class="star">★</span> 4.0
                                </div>
                                <div class="learners">
                                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                            viewBox="0 0 20 21" fill="none">
                                            <path
                                                d="M10 13C12.7614 13 15 10.7614 15 8C15 5.23858 12.7614 3 10 3C7.23858 3 5 5.23858 5 8C5 10.7614 7.23858 13 10 13Z"
                                                stroke="#564FFD" stroke-width="1.5" stroke-miterlimit="10" />
                                            <path
                                                d="M2.42102 17.3743C3.18943 16.0442 4.29431 14.9398 5.62468 14.172C6.95505 13.4042 8.46405 13 10.0001 13C11.5361 13 13.0451 13.4043 14.3755 14.1721C15.7058 14.94 16.8107 16.0444 17.5791 17.3744"
                                                stroke="#564FFD" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg></span> 511,123 <span class="text-muted">Learners</span>
                                </div>
                            </div>

                            <div class="course-footer">
                                <div class="price">$49.00</div>
                                <div class="dropdown-wrapper">
                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                    <ul class="dropdown-menu">
                                        <li onclick="selectItem(this)">View Details</li>
                                        <li onclick="selectItem(this)">Edit Course</li>
                                        <li onclick="selectItem(this)">Delete Course</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="course-card">
                        <img src="assets/images/home/dr3.png" alt="Course Image" class="course-image">

                        <div class="course-body">
                            <span class="tag">DEVELOPMENTS</span>
                            <h3 class="course-title">Learn Python Programming Masterclass</h3>

                            <div class="course-stats">
                                <div class="rating">
                                    <span class="star">★</span> 4.0
                                </div>
                                <div class="learners">
                                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                            viewBox="0 0 20 21" fill="none">
                                            <path
                                                d="M10 13C12.7614 13 15 10.7614 15 8C15 5.23858 12.7614 3 10 3C7.23858 3 5 5.23858 5 8C5 10.7614 7.23858 13 10 13Z"
                                                stroke="#564FFD" stroke-width="1.5" stroke-miterlimit="10" />
                                            <path
                                                d="M2.42102 17.3743C3.18943 16.0442 4.29431 14.9398 5.62468 14.172C6.95505 13.4042 8.46405 13 10.0001 13C11.5361 13 13.0451 13.4043 14.3755 14.1721C15.7058 14.94 16.8107 16.0444 17.5791 17.3744"
                                                stroke="#564FFD" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg></span> 511,123 <span class="text-muted">Learners</span>
                                </div>
                            </div>

                            <div class="course-footer">
                                <div class="price">$49.00</div>
                                <div class="dropdown-wrapper">
                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                    <ul class="dropdown-menu">
                                        <li onclick="selectItem(this)">View Details</li>
                                        <li onclick="selectItem(this)">Edit Course</li>
                                        <li onclick="selectItem(this)">Delete Course</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="course-card">
                        <img src="assets/images/home/dr4.png" alt="Course Image" class="course-image">

                        <div class="course-body">
                            <span class="tag">DEVELOPMENTS</span>
                            <h3 class="course-title">Learn Python Programming Masterclass</h3>

                            <div class="course-stats">
                                <div class="rating">
                                    <span class="star">★</span> 4.0
                                </div>
                                <div class="learners">
                                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                            viewBox="0 0 20 21" fill="none">
                                            <path
                                                d="M10 13C12.7614 13 15 10.7614 15 8C15 5.23858 12.7614 3 10 3C7.23858 3 5 5.23858 5 8C5 10.7614 7.23858 13 10 13Z"
                                                stroke="#564FFD" stroke-width="1.5" stroke-miterlimit="10" />
                                            <path
                                                d="M2.42102 17.3743C3.18943 16.0442 4.29431 14.9398 5.62468 14.172C6.95505 13.4042 8.46405 13 10.0001 13C11.5361 13 13.0451 13.4043 14.3755 14.1721C15.7058 14.94 16.8107 16.0444 17.5791 17.3744"
                                                stroke="#564FFD" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg></span> 511,123 <span class="text-muted">Learners</span>
                                </div>
                            </div>

                            <div class="course-footer">
                                <div class="price">$49.00</div>
                                <div class="dropdown-wrapper">
                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                    <ul class="dropdown-menu">
                                        <li onclick="selectItem(this)">View Details</li>
                                        <li onclick="selectItem(this)">Edit Course</li>
                                        <li onclick="selectItem(this)">Delete Course</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row  pt-20">
                <div class="col-md-3">
                    <div class="course-card">
                        <img src="assets/images/home/dr5.png" alt="Course Image" class="course-image">

                        <div class="course-body">
                            <span class="tag">DEVELOPMENTS</span>
                            <h3 class="course-title">Learn Python Programming Masterclass</h3>

                            <div class="course-stats">
                                <div class="rating">
                                    <span class="star">★</span> 4.0
                                </div>
                                <div class="learners">
                                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                            viewBox="0 0 20 21" fill="none">
                                            <path
                                                d="M10 13C12.7614 13 15 10.7614 15 8C15 5.23858 12.7614 3 10 3C7.23858 3 5 5.23858 5 8C5 10.7614 7.23858 13 10 13Z"
                                                stroke="#564FFD" stroke-width="1.5" stroke-miterlimit="10" />
                                            <path
                                                d="M2.42102 17.3743C3.18943 16.0442 4.29431 14.9398 5.62468 14.172C6.95505 13.4042 8.46405 13 10.0001 13C11.5361 13 13.0451 13.4043 14.3755 14.1721C15.7058 14.94 16.8107 16.0444 17.5791 17.3744"
                                                stroke="#564FFD" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg></span> 511,123 <span class="text-muted">Learners</span>
                                </div>
                            </div>

                            <div class="course-footer">
                                <div class="price">$49.00</div>
                                <div class="dropdown-wrapper">
                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                    <ul class="dropdown-menu">
                                        <li onclick="selectItem(this)">View Details</li>
                                        <li onclick="selectItem(this)">Edit Course</li>
                                        <li onclick="selectItem(this)">Delete Course</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="course-card">
                        <img src="assets/images/home/dr6.png" alt="Course Image" class="course-image">

                        <div class="course-body">
                            <span class="tag">DEVELOPMENTS</span>
                            <h3 class="course-title">Learn Python Programming Masterclass</h3>

                            <div class="course-stats">
                                <div class="rating">
                                    <span class="star">★</span> 4.0
                                </div>
                                <div class="learners">
                                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                            viewBox="0 0 20 21" fill="none">
                                            <path
                                                d="M10 13C12.7614 13 15 10.7614 15 8C15 5.23858 12.7614 3 10 3C7.23858 3 5 5.23858 5 8C5 10.7614 7.23858 13 10 13Z"
                                                stroke="#564FFD" stroke-width="1.5" stroke-miterlimit="10" />
                                            <path
                                                d="M2.42102 17.3743C3.18943 16.0442 4.29431 14.9398 5.62468 14.172C6.95505 13.4042 8.46405 13 10.0001 13C11.5361 13 13.0451 13.4043 14.3755 14.1721C15.7058 14.94 16.8107 16.0444 17.5791 17.3744"
                                                stroke="#564FFD" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg></span> 511,123 <span class="text-muted">Learners</span>
                                </div>
                            </div>

                            <div class="course-footer">
                                <div class="price">$49.00</div>
                                <div class="dropdown-wrapper">
                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                    <ul class="dropdown-menu">
                                        <li onclick="selectItem(this)">View Details</li>
                                        <li onclick="selectItem(this)">Edit Course</li>
                                        <li onclick="selectItem(this)">Delete Course</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="course-card">
                        <img src="assets/images/home/dr1.png" alt="Course Image" class="course-image">

                        <div class="course-body">
                            <span class="tag">DEVELOPMENTS</span>
                            <h3 class="course-title">Learn Python Programming Masterclass</h3>

                            <div class="course-stats">
                                <div class="rating">
                                    <span class="star">★</span> 4.0
                                </div>
                                <div class="learners">
                                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                            viewBox="0 0 20 21" fill="none">
                                            <path
                                                d="M10 13C12.7614 13 15 10.7614 15 8C15 5.23858 12.7614 3 10 3C7.23858 3 5 5.23858 5 8C5 10.7614 7.23858 13 10 13Z"
                                                stroke="#564FFD" stroke-width="1.5" stroke-miterlimit="10" />
                                            <path
                                                d="M2.42102 17.3743C3.18943 16.0442 4.29431 14.9398 5.62468 14.172C6.95505 13.4042 8.46405 13 10.0001 13C11.5361 13 13.0451 13.4043 14.3755 14.1721C15.7058 14.94 16.8107 16.0444 17.5791 17.3744"
                                                stroke="#564FFD" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg></span> 511,123 <span class="text-muted">Learners</span>
                                </div>
                            </div>

                            <div class="course-footer">
                                <div class="price">$49.00</div>
                                <div class="dropdown-wrapper">
                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                    <ul class="dropdown-menu">
                                        <li onclick="selectItem(this)">View Details</li>
                                        <li onclick="selectItem(this)">Edit Course</li>
                                        <li onclick="selectItem(this)">Delete Course</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="course-card">
                        <img src="assets/images/home/dr1.png" alt="Course Image" class="course-image">

                        <div class="course-body">
                            <span class="tag">DEVELOPMENTS</span>
                            <h3 class="course-title">Learn Python Programming Masterclass</h3>

                            <div class="course-stats">
                                <div class="rating">
                                    <span class="star">★</span> 4.0
                                </div>
                                <div class="learners">
                                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                            viewBox="0 0 20 21" fill="none">
                                            <path
                                                d="M10 13C12.7614 13 15 10.7614 15 8C15 5.23858 12.7614 3 10 3C7.23858 3 5 5.23858 5 8C5 10.7614 7.23858 13 10 13Z"
                                                stroke="#564FFD" stroke-width="1.5" stroke-miterlimit="10" />
                                            <path
                                                d="M2.42102 17.3743C3.18943 16.0442 4.29431 14.9398 5.62468 14.172C6.95505 13.4042 8.46405 13 10.0001 13C11.5361 13 13.0451 13.4043 14.3755 14.1721C15.7058 14.94 16.8107 16.0444 17.5791 17.3744"
                                                stroke="#564FFD" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg></span> 511,123 <span class="text-muted">Learners</span>
                                </div>
                            </div>

                            <div class="course-footer">
                                <div class="price">$49.00</div>
                                <div class="dropdown-wrapper">
                                    <div class="more" onclick="toggleDropdown(this)">⋯</div>
                                    <ul class="dropdown-menu">
                                        <li onclick="selectItem(this)">View Details</li>
                                        <li onclick="selectItem(this)">Edit Course</li>
                                        <li onclick="selectItem(this)">Delete Course</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>

        </div> <!--end col-->
    </div><!--end row-->
</div><!-- container -->
<!--Start Rightbar-->
<!--Start Rightbar/offcanvas-->
<br>
<!--end Rightbar/offcanvas-->
<!--end Rightbar-->
<!--Start Footer-->







<?php include 'partials/footer.php'; ?>