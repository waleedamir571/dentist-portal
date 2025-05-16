<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="dark" data-bs-theme="light">




<head>


    <meta charset="utf-8" />
    <title>Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Dashboard" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/home/favicon-32x32.png">


    <link href="assets/libs/simple-datatables/style.css" rel="stylesheet" type="text/css" />
       <link href="assets/libs/uppy/uppy.min.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Top Bar Start -->
    <div class="topbar d-print-none">
        <div class="container">
            <nav class="topbar-custom d-flex justify-content-between" id="topbar-custom">


                <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">
                    <li>
                        <button class="nav-link mobile-menu-btn nav-icon" id="togglemenu">
                            <i class="iconoir-menu"></i>
                        </button>
                    </li>
                    <li>
                        <p class="morning">Good Morning</p>
                    </li>


                </ul>
                <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">

                    <!-- <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false" data-bs-offset="0,19">
                        <img src="assets/images/flags/us_flag.jpg" alt="" class="thumb-sm rounded-circle">
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/us_flag.jpg" alt="" height="15" class="me-2">English</a>
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/spain_flag.jpg" alt="" height="15" class="me-2">Spanish</a>
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/germany_flag.jpg" alt="" height="15" class="me-2">German</a>
                            <a class="dropdown-item" href="#"><img src="assets/images/flags/french_flag.jpg" alt="" height="15" class="me-2">French</a>
                        </div>
                    </li> -->
                    <!--end topbar-language-->
                    <li class="hide-phone app-search">
                        <form role="search" action="#" method="get">
                            <input type="search" name="search" class="form-control top-search mb-0"
                                placeholder="Search here...">
                            <button type="submit"><i class="iconoir-search"></i></button>
                        </form>
                    </li>

                    <!-- <li class="topbar-item">
                        <a class="nav-link nav-icon" href="javascript:void(0);" id="light-dark-mode">
                            <i class="iconoir-half-moon dark-mode"></i>
                            <i class="iconoir-sun-light light-mode"></i>
                        </a>
                    </li> -->

                    <li class="dropdown topbar-item">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false" data-bs-offset="0,19">
                            <i class="iconoir-bell"></i>
                            <span class="alert-badge"></span>
                        </a>
                        <div class="dropdown-menu stop dropdown-menu-end dropdown-lg py-0">

                            <h5 class="dropdown-item-text m-0 py-3 d-flex justify-content-between align-items-center">
                                Notifications <a href="#" class="badge text-body-tertiary badge-pill">
                                    <i class="iconoir-plus-circle fs-4"></i>
                                </a>
                            </h5>
                          
                            <div class="ms-0" style="max-height:230px;" data-simplebar>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="All" role="tabpanel"
                                        aria-labelledby="all-tab" tabindex="0">
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">2 min ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-wolf fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Your order is placed</h6>
                                                    <small class="text-muted mb-0">Dummy text of the printing and
                                                        industry.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">10 min ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-apple-swift fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Meeting with designers
                                                    </h6>
                                                    <small class="text-muted mb-0">It is a long established fact that a
                                                        reader.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">40 min ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-birthday-cake fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">UX 3 Task complete.</h6>
                                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">1 hr ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-drone fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Your order is placed</h6>
                                                    <small class="text-muted mb-0">It is a long established fact that a
                                                        reader.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">2 hrs ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-user fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Payment Successfull</h6>
                                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                    </div>
                                    <div class="tab-pane fade" id="Projects" role="tabpanel"
                                        aria-labelledby="projects-tab" tabindex="0">
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">40 min ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-birthday-cake fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">UX 3 Task complete.</h6>
                                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">1 hr ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-drone fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Your order is placed</h6>
                                                    <small class="text-muted mb-0">It is a long established fact that a
                                                        reader.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">2 hrs ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-user fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Payment Successfull</h6>
                                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                    </div>
                                    <div class="tab-pane fade" id="Teams" role="tabpanel" aria-labelledby="teams-tab"
                                        tabindex="0">
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">1 hr ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-drone fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Your order is placed</h6>
                                                    <small class="text-muted mb-0">It is a long established fact that a
                                                        reader.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">2 hrs ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-user fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Payment Successfull</h6>
                                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                    </div>
                                </div>

                            </div>
                            <!-- All-->
                            <a href="#" class="dropdown-item text-center text-dark fs-13 py-2">
                                View All <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown topbar-item">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false" data-bs-offset="0,19">
                            <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end py-0">
                            <div class="d-flex align-items-center dropdown-item py-2 bg-secondary-subtle">
                                <div class="flex-shrink-0">
                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md rounded-circle">
                                </div>
                                <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                    <h6 class="my-0 fw-medium text-dark fs-13">William Martin</h6>
                                    <small class="text-muted mb-0">Engineer</small>
                                </div><!--end media-body-->
                            </div>
                            <div class="dropdown-divider mt-0"></div>
                           <a href="#"> <small class="text-muted px-2 pb-1 d-block">Account</small> </a>
                         
                          
                           <a href="settings.php"> <small class="text-muted px-2 py-1 d-block">Settings</small> </a>
                            
                         
                            <a class="dropdown-item text-danger" href="#"><i
                                    class="las la-power-off fs-18 me-1 align-text-bottom"></i> Logout</a>
                        </div>
                    </li>
                </ul><!--end topbar-nav-->
            </nav>
            <!-- end navbar-->
        </div>
    </div>
    <!-- Top Bar End -->
    <!-- leftbar-tab-menu -->
    <div class="startbar d-print-none">
        <!--start brand-->
        <div class="brand">
            <a href="index.php" class="logo">
                <span>
                    <img src="assets/images/home/logo-DT.png" alt="logo-small" class="logo-sm">
                </span>
                <span class="">
                    <img src="assets/images/home/logo.svg" alt="logo-large" class="logo-lg logo-light">
                    <img src="assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                </span>
            </a>
        </div>
        <!--end brand-->
        <!--start startbar-menu-->
        <div class="startbar-menu">
            <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
                <div class="d-flex align-items-start flex-column w-100">
                    <!-- Navigation -->
                    <ul class="navbar-nav mb-auto w-100">
                        <li class="menu-label mt-2">
                            <span></span>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M4.125 19.5V12.75H9.375" stroke="#052D4D" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M21.375 19.5H2.625" stroke="#052D4D" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.375 19.5V8.25H14.625" stroke="#052D4D" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M19.875 3.75H14.625V19.5H19.875V3.75Z" stroke="#052D4D" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg> -->
                                <img src="assets/images/home/ChartBar.png" alt="">
                                <span>Dashboard</span>
                                <!-- <span class="badge text-bg-info ms-auto">New</span> -->
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="create-new-course.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                                        stroke="#8C94A3" stroke-width="1.5" stroke-miterlimit="10" />
                                    <path d="M8.25 12H15.75" stroke="#8C94A3" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M12 8.25V15.75" stroke="#8C94A3" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <span>Create New Course</span>
                            </a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="my-courses.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M3 16.5L12 21.75L21 16.5" stroke="#8C94A3" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3 12L12 17.25L21 12" stroke="#8C94A3" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3 7.5L12 12.75L21 7.5L12 2.25L3 7.5Z" stroke="#8C94A3" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span>All Courses</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="all-bookings.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path d="M3 16.5L12 21.75L21 16.5" stroke="#8C94A3" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3 12L12 17.25L21 12" stroke="#8C94A3" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3 7.5L12 12.75L21 7.5L12 2.25L3 7.5Z" stroke="#8C94A3" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span>All Booking</span>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="settings.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M12.0004 16.5C14.4856 16.5 16.5004 14.4853 16.5004 12C16.5004 9.51472 14.4856 7.5 12.0004 7.5C9.51508 7.5 7.50037 9.51472 7.50037 12C7.50037 14.4853 9.51508 16.5 12.0004 16.5Z" stroke="#8C94A3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11.5197 4.13952L9.7507 2.81315C9.65579 2.74175 9.54526 2.69393 9.42824 2.67363C9.31122 2.65332 9.19104 2.66112 9.07762 2.69638C8.52974 2.86794 7.99819 3.08787 7.48926 3.35355C7.3839 3.40881 7.2932 3.48834 7.22463 3.58556C7.15607 3.68278 7.11161 3.79492 7.09493 3.91271L6.7822 6.10186C6.663 6.20753 6.5463 6.31742 6.4321 6.43156C6.31794 6.54573 6.20801 6.66246 6.10232 6.78176L6.10228 6.78179L3.91351 7.09479C3.79591 7.11142 3.68394 7.15576 3.58684 7.22415C3.48973 7.29254 3.41027 7.38303 3.355 7.48816C3.08891 7.99689 2.86856 8.52826 2.69655 9.076C2.66113 9.18957 2.65322 9.30994 2.67349 9.42717C2.69375 9.5444 2.74161 9.65513 2.8131 9.75022L4.13993 11.5193C4.13036 11.6783 4.12555 11.8385 4.1255 12C4.1255 12.1615 4.13032 12.3217 4.13994 12.4808L4.13993 12.4809L2.81357 14.2499C2.74217 14.3448 2.69434 14.4553 2.67404 14.5723C2.65374 14.6894 2.66153 14.8095 2.69679 14.923C2.86836 15.4708 3.08828 16.0024 3.35396 16.5113C3.40923 16.6167 3.48875 16.7074 3.58597 16.776C3.6832 16.8445 3.79533 16.889 3.91313 16.9057L6.10227 17.2184C6.20794 17.3376 6.31783 17.4543 6.43197 17.5685C6.54613 17.6827 6.66287 17.7926 6.78217 17.8983L6.7822 17.8983L7.0952 20.0871C7.11183 20.2047 7.15617 20.3167 7.22456 20.4138C7.29295 20.5109 7.38344 20.5903 7.48857 20.6456C7.9973 20.9117 8.52867 21.132 9.07641 21.304C9.18998 21.3395 9.31035 21.3474 9.42758 21.3271C9.54481 21.3068 9.65554 21.259 9.75063 21.1875L11.5197 19.8607C11.6787 19.8702 11.839 19.875 12.0004 19.8751C12.1619 19.8751 12.3221 19.8703 12.4812 19.8607L12.4813 19.8607L14.2503 21.187C14.3452 21.2584 14.4557 21.3063 14.5728 21.3266C14.6898 21.3469 14.81 21.3391 14.9234 21.3038C15.4713 21.1322 16.0028 20.9123 16.5117 20.6466C16.6171 20.5914 16.7078 20.5118 16.7764 20.4146C16.8449 20.3174 16.8894 20.2053 16.9061 20.0875L17.2188 17.8983C17.338 17.7927 17.4547 17.6828 17.5689 17.5686C17.6831 17.4545 17.793 17.3377 17.8987 17.2184L17.8987 17.2184L20.0875 16.9054C20.2051 16.8888 20.3171 16.8444 20.4142 16.776C20.5113 16.7076 20.5907 16.6172 20.646 16.512C20.9121 16.0033 21.1324 15.4719 21.3045 14.9242C21.3399 14.8106 21.3478 14.6902 21.3275 14.573C21.3072 14.4558 21.2594 14.3451 21.1879 14.25L19.8611 12.4809C19.8706 12.3219 19.8755 12.1616 19.8755 12.0002C19.8755 11.8387 19.8707 11.6785 19.8611 11.5194L19.8611 11.5193L21.1874 9.75029C21.2588 9.65538 21.3067 9.54485 21.327 9.42783C21.3473 9.3108 21.3395 9.19063 21.3042 9.07721C21.1326 8.52933 20.9127 7.99778 20.647 7.48884C20.5918 7.38349 20.5123 7.29279 20.415 7.22422C20.3178 7.15566 20.2057 7.1112 20.0879 7.09452L17.8987 6.78179C17.7931 6.66259 17.6832 6.54589 17.569 6.43169C17.4549 6.31752 17.3381 6.2076 17.2188 6.10191L17.2188 6.10186L16.9058 3.9131C16.8892 3.7955 16.8448 3.68353 16.7764 3.58642C16.708 3.48932 16.6176 3.40986 16.5124 3.35459C16.0037 3.08849 15.4723 2.86814 14.9246 2.69613C14.811 2.66071 14.6906 2.65281 14.5734 2.67307C14.4562 2.69334 14.3455 2.7412 14.2504 2.81269L12.4813 4.13952C12.3223 4.12995 12.162 4.12514 12.0006 4.12509C11.8391 4.12509 11.6789 4.1299 11.5198 4.13953L11.5197 4.13952Z" stroke="#8C94A3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                <span>Settings</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M16.3136 8.0625L20.2501 12L16.3136 15.9375" stroke="#00FF84" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.75 12H20.2472" stroke="#00FF84" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.75 20.25H4.5C4.30109 20.25 4.11032 20.171 3.96967 20.0303C3.82902 19.8897 3.75 19.6989 3.75 19.5V4.5C3.75 4.30109 3.82902 4.11032 3.96967 3.96967C4.11032 3.82902 4.30109 3.75 4.5 3.75H9.75" stroke="#00FF84" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                <span>Sign-out</span>
                            </a>
                        </li>

                        <!--end nav-item-->

                       <!--end nav-item-->
                    </ul><!--end navbar-nav--->
                  
                </div>
            </div><!--end startbar-collapse-->
        </div><!--end startbar-menu-->
    </div><!--end startbar-->
    <div class="startbar-overlay d-print-none"></div>
    <!-- end leftbar-tab-menu-->