<?php include 'partials/header.php'; ?>

<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">Create New Course</h4>

                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div><!--end row-->
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                       
                        <div class="card-body pt-0">
                            <form action="#" method="post" id="custom-step">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a class="nav-link nav-110 py-2 active" id="step1-tab"
                                                    data-bs-toggle="tab" href="#step1"><img
                                                        src="assets/images/home/f1.png" alt=""> Basic
                                                    Information</a>
                                            </div>
                                            <div class="col-md-4">
                                                <a class="nav-link nav-110 py-2" id="step2-tab" data-bs-toggle="tab"
                                                    href="#step2"><img src="assets/images/home/f2.png" alt=""> Upload
                                                    Course
                                                    Meterial</a>
                                            </div>
                                            <div class="col-md-4">
                                                <a class="nav-link nav-110 py-2" id="step3-tab" data-bs-toggle="tab"
                                                    href="#step3"><img src="assets/images/home/f3.png" alt=""> Publish
                                                    Course</a>
                                            </div>
                                        </div>



                                        <!-- <a class="nav-link py-2" id="step4-tab" data-bs-toggle="tab"
                                            href="#step4">Confirm Detail</a> -->
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane active" id="step1">
                                        <h4 class="card-title my-4  basic-info">Basic Information</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Title</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="You course title">

                                                </div>
                                            </div>

                                            <div class="col-md-12 pt-20">

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Subtittle</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="You course subtitle">

                                                </div>
                                            </div>
                                            <div class="col-md-4 pt-20">
                                                <div class="form-group row mb-2">
                                                    <label for="exampleInputEmail1">Course Category</label>

                                                    <select id="ddlCreditCardType" name="ddlCreditCardType"
                                                        class="form-select">
                                                        <option value="">Please Select</option>
                                                        <option value="AE">a</option>
                                                        <option value="VI">s</option>
                                                        <option value="MC">c</option>
                                                        <option value="DI">b</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-4 pt-20">
                                                <div class="form-group row mb-2">
                                                    <label for="exampleInputEmail1">Course Sub-category</label>

                                                    <select id="ddlCreditCardType" name="ddlCreditCardType"
                                                        class="form-select">
                                                        <option value="">Please Select</option>
                                                        <option value="AE">a</option>
                                                        <option value="VI">s</option>
                                                        <option value="MC">c</option>
                                                        <option value="DI">b</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-4 pt-20">
                                                <div class="form-group row mb-2">
                                                    <label for="exampleInputEmail1">Set Price</label>

                                                    <select id="ddlCreditCardType" name="ddlCreditCardType"
                                                        class="form-select">
                                                        <option value="">Please Select</option>
                                                        <option value="AE">$45.00</option>
                                                        <option value="VI">$55.00</option>
                                                        <option value="MC">$65.00</option>
                                                        <option value="DI">$75.00</option>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-md-12 pt-20">

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Course Topic</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp"
                                                        placeholder="What is primarily taught in your course?">

                                                </div>
                                            </div>
                                        </div><!--end row-->

                                        <!--end row-->
                                        <div class="mt-2">
                                            <button type="button" id="step1Next" class="btn btn-primary1 float-end">Save
                                                & next</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="step2">
                                        <h4 class="card-title my-4 basic-info">Upload Course Material</h4>
                                        <div class="row">
                                          
                                            <div class="col-md-12">

                                                <div class="">
                                                    <div class="row">
                                                        <label class="form-label" for="message">Course Thumbnail</label>
                                                        <div class="col-md-2">
                                                            
                                                            <div class="thumbnail-preview" id="imageBox">
                                                                <img id="preview" src="assets/images/home/iconimg.png"
                                                                    alt="Preview">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="upload-box">

                                                                <!-- Left Side Preview -->


                                                                <!-- Right Side Instructions -->
                                                                <div class="upload-instructions">

                                                                    <p>
                                                                        Upload your course Thumbnail here.
                                                                        <strong>Important guidelines:</strong> 1200×800
                                                                        pixels or 12:8 Ratio. Supported format:
                                                                        <strong>.jpg, .jpeg, or .png</strong>
                                                                    </p>
                                                                    <input type="file" id="fileInput"
                                                                        accept="image/png, image/jpeg"
                                                                        onchange="previewImage(event)">
                                                                    <br>
                                                                    <button type="button" class="btn up-image"
                                                                        onclick="document.getElementById('fileInput').click()">
                                                                        Upload Image <svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none">
                                                                            <path
                                                                                d="M8.0625 7.68647L12 3.75L15.9375 7.68647"
                                                                                stroke="#FF6636" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M12 14.2502V3.75293"
                                                                                stroke="#FF6636" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path
                                                                                d="M20.25 14.25V19.5C20.25 19.6989 20.171 19.8897 20.0303 20.0303C19.8897 20.171 19.6989 20.25 19.5 20.25H4.5C4.30109 20.25 4.11032 20.171 3.96967 20.0303C3.82902 19.8897 3.75 19.6989 3.75 19.5V14.25"
                                                                                stroke="#FF6636" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                            </div><!--end col-->
                                            <div class="col-md-12 pt-20">                            
                                                <div class="mb-3">
                                                    <label class="form-label" for="message">Course Descriptions</label>
                                                    <textarea class="form-control" rows="5" id="message" placeholder="Enter you course descriptions"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 pt-20">

                                                <div class="">
                                                    <div class="row">
                                                        <label class="form-label" for="message">Course Materials</label>
                                                        <div class="col-md-2">
                                                            
                                                            <div class="thumbnail-preview" id="imageBox">
                                                                <img id="preview" src="assets/images/home/iconimg.png"
                                                                    alt="Preview">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="upload-box">

                                                                <!-- Left Side Preview -->


                                                                <!-- Right Side Instructions -->
                                                                <div class="upload-instructions">

                                                                    <p>
                                                                        Upload your course Thumbnail here.
                                                                        <strong>Important guidelines:</strong> 1200×800
                                                                        pixels or 12:8 Ratio. Supported format:
                                                                        <strong>.jpg, .jpeg, or .png</strong>
                                                                    </p>
                                                                    <input type="file" id="fileInput"
                                                                        accept="image/png, image/jpeg"
                                                                        onchange="previewImage(event)">
                                                                    <br>
                                                                    <button type="button" class="btn up-image"
                                                                        onclick="document.getElementById('fileInput').click()">
                                                                        Upload Image <svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none">
                                                                            <path
                                                                                d="M8.0625 7.68647L12 3.75L15.9375 7.68647"
                                                                                stroke="#FF6636" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M12 14.2502V3.75293"
                                                                                stroke="#FF6636" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path
                                                                                d="M20.25 14.25V19.5C20.25 19.6989 20.171 19.8897 20.0303 20.0303C19.8897 20.171 19.6989 20.25 19.5 20.25H4.5C4.30109 20.25 4.11032 20.171 3.96967 20.0303C3.82902 19.8897 3.75 19.6989 3.75 19.5V14.25"
                                                                                stroke="#FF6636" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                           
                                        </div><!--end row-->
                                      <!--end row-->

                                        <!--end row-->
                                        <div>
                                            <button type="button" id="step2Prev"
                                                class="btn btn-secondary1 float-start mt-2">Cancel</button>
                                            <button type="button" id="step2Next"
                                                class="btn btn-primary1 float-end">Save & next</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="step3">
                                        <h4 class="card-title my-4 basic-info">Publish Course</h4>
                                        <div class="row">
                                            <div class="col-md-6 pt-20">                            
                                                <div class="mb-3">
                                                    <label class="form-label" for="message">Welcome Message</label>
                                                    <textarea class="form-control" rows="5" id="message" placeholder="Enter course starting message here..."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pt-20">                            
                                                <div class="mb-3">
                                                    <label class="form-label" for="message">Congratulations Message</label>
                                                    <textarea class="form-control" rows="5" id="message" placeholder="Enter your course completed message here..."></textarea>
                                                </div>
                                            </div>
                                           <!--end col-->
                                        </div><!--end row-->
                                      
                                      
                                        <div>
                                            <button type="button" id="step3Prev"
                                                class="btn btn-secondary1 float-start mt-2">Cancel</button>
                                            <!-- <button type="button" id="step3Next"
                                                class="btn btn-primary float-end mt-2">Next</button> -->
                                            <button type="button" id="step4Finish"
                                            class="btn btn-primary1 float-end">Submit For Review</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="step4">
                                        <h4 class="card-title my-4 fs-15">Confirm Detail</h4>
                                        <div class="form-check my-4 text-center">
                                            <img src="assets/images/extra/task.png" class="mb-3" height="60" alt="">
                                            <h4 class="mb-1 fs-16">You are all set!</h4>
                                            <p class="text-muted">Now you can access your account anytime anywhere</p>
                                            <div>
                                                <input class="form-check-input float-none" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    I agree with the Terms and Conditions.
                                                </label>
                                            </div>
                                        </div>
                                        <div>
                                            <button type="button" id="step4Prev"
                                                class="btn btn-secondary float-start mt-2">Previous</button>
                                            <button type="button" id="step4Finish"
                                                class="btn btn-danger float-end mt-2">Finish</button>
                                        </div>
                                    </div>
                                </div>
                            </form><!--end form-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->
        </div><!-- container -->
        <!--Start Rightbar-->
        <!--Start Rightbar/offcanvas-->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
            <div class="offcanvas-header border-bottom justify-content-between">
                <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <h6>Account Settings</h6>
                <div class="p-2 text-start mt-3">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch1">
                        <label class="form-check-label" for="settings-switch1">Auto updates</label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                        <label class="form-check-label" for="settings-switch2">Location Permission</label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch3">
                        <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                    </div><!--end form-switch-->
                </div><!--end /div-->
                <h6>General Settings</h6>
                <div class="p-2 text-start mt-3">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch4">
                        <label class="form-check-label" for="settings-switch4">Show me Online</label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                        <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch6">
                        <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                    </div><!--end form-switch-->
                </div><!--end /div-->
            </div><!--end offcanvas-body-->
        </div>
        <!--end Rightbar/offcanvas-->
        <!--end Rightbar-->
        <!--Start Footer-->






        <?php include 'partials/footer.php'; ?>