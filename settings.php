<?php include 'partials/header.php'; ?>

<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">Account Setting</h4>

                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div><!--end row-->


            <div class="course-summary-card">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="page-title2">Account Setting</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Full name</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="First name">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Last name</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Last name">

                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12 pt-20">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter your username">

                                </div>
                            </div>

                            <div class="col-md-12 pt-20">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone Number</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Your Phone number...">

                                </div>
                            </div>


                            

                        </div>

                        <div class="col-md-4">
                            <div class="">
                                <div class="row">

                                    <div class="bg-grey-color">
                                        <div class="col-md-12">

                                            <div class="thumbnail-preview1" id="imageBox">
                                                <img id="preview" src="assets/images/home/iconimg.png" alt="Preview">
                                                <button type="button" class="btn up-image1"
                                                    onclick="document.getElementById('fileInput').click()">Upload
                                                    Photo</button>
                                            </div>
                                            <div class="">

                                                <!-- Left Side Preview -->


                                                <!-- Right Side Instructions -->
                                                <div class="upload-instructions">

                                                    <input type="file" id="fileInput" style="display: none;" />
                                                    <p class="img-size">
                                                        Image size should be under 1MB <br> and image ration needs to be
                                                        1:1
                                                    </p>
                                                    <input type="file" id="fileInput" accept="image/png, image/jpeg"
                                                        onchange="previewImage(event)">
                                                    <br>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>


                    </div>
                    <div class="row pt-20">
                        <div class="col-md-12 pt-20">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp"
                                    placeholder="Your tittle, proffesion or small biography">

                            </div>
                        </div>
                        <div class="col-md-12 pt-20">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Biography</label>
                                <textarea class="form-control" rows="5" id="message"
                                    placeholder="Enter course starting message here..."></textarea>

                            </div>
                        </div>
                        <div class="col-md-12 pt-20">

                            <div class="form-group">

                                <div class=" pt-0">
                                    <div id="drag-drop-area"></div>
                                    <label class="img-size">Note: All files should be at least 720p and less than 4.0
                                        GB.</label>
                                </div>

                            </div>
                        </div>
                        <div class="pt-20">
                                <button class="btn btn-primary1 ">Submit For Review</button>
                            </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- Social Profile -->

            <div class="course-summary-card">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-custom">
                            <p class="page-title2">Social Profile</p>
                            <form>
                                <label for="exampleInputEmail1">Biography</label>
                                <div class="input-group mb-3">

                                    <span class="input-group-text bg-w">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                                stroke="#00FF84" stroke-width="1.5" stroke-miterlimit="10" />
                                            <path d="M2.92715 7.5H17.0729" stroke="#00FF84" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M2.92743 12.5H17.073" stroke="#00FF84" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M10 17.2985C11.7259 17.2985 13.125 14.0308 13.125 9.99984C13.125 5.9689 11.7259 2.70117 10 2.70117C8.27411 2.70117 6.875 5.9689 6.875 9.99984C6.875 14.0308 8.27411 17.2985 10 17.2985Z"
                                                stroke="#00FF84" stroke-width="1.5" stroke-miterlimit="10" />
                                        </svg>
                                    </span>
                                    <input type="url" class="form-control"
                                        placeholder="Personal website or portfolio url..." style="border-left: none;">
                                </div>



                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card-custom">

                            <form>
                                <label for="exampleInputEmail1">Facebook</label>
                                <div class="input-group mb-3">

                                    <span class="input-group-text bg-w">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M12.6194 3.32083H14.4453V0.140833C14.1303 0.0975 13.0469 0 11.7853 0C9.15276 0 7.34943 1.65583 7.34943 4.69917V7.5H4.44443V11.055H7.34943V20H10.9111V11.0558H13.6986L14.1411 7.50083H10.9103V5.05167C10.9111 4.02417 11.1878 3.32083 12.6194 3.32083Z"
                                                fill="#00FF84" />
                                        </svg>
                                    </span>
                                    <input type="url" class="form-control" placeholder="Username"
                                        style="border-left: none;">
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card-custom">

                            <form>
                                <label for="exampleInputEmail1">Whatsapp</label>
                                <div class="input-group mb-3">

                                    <span class="input-group-text bg-w">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M19.9492 5.88007C19.9023 4.81739 19.7304 4.08681 19.4842 3.45375C19.2302 2.78177 18.8394 2.18015 18.3274 1.68002C17.8272 1.17211 17.2215 0.777437 16.5572 0.527448C15.9203 0.281275 15.1934 0.109427 14.1306 0.0625734C13.0597 0.0117516 12.7198 0 10.0039 0C7.28799 0 6.94805 0.0117516 5.8812 0.0586054C4.81831 0.105459 4.08759 0.27746 3.45456 0.52348C2.7823 0.777437 2.18057 1.16814 1.68034 1.68002C1.17233 2.18015 0.777738 2.78574 0.527549 3.44993C0.281329 4.08681 0.109448 4.81342 0.0625854 5.8761C0.0117538 6.94672 0 7.2866 0 10.002C0 12.7174 0.0117538 13.0572 0.0586166 14.1239C0.105479 15.1866 0.277513 15.9172 0.523733 16.5502C0.777738 17.2222 1.17233 17.8238 1.68034 18.3239C2.18057 18.8319 2.78627 19.2265 3.45059 19.4765C4.08759 19.7227 4.81434 19.8945 5.87738 19.9414C6.94408 19.9884 7.28418 20 10.0001 20C12.716 20 13.0559 19.9884 14.1228 19.9414C15.1857 19.8945 15.9164 19.7227 16.5494 19.4765C17.8938 18.9569 18.9567 17.8942 19.4764 16.5502C19.7225 15.9133 19.8945 15.1866 19.9414 14.1239C19.9882 13.0572 20 12.7174 20 10.002C20 7.2866 19.996 6.94672 19.9492 5.88007ZM18.1478 14.0458C18.1047 15.0225 17.9406 15.55 17.8039 15.9016C17.4677 16.7729 16.7761 17.4644 15.9046 17.8005C15.5529 17.9372 15.0216 18.1013 14.0484 18.1442C12.9933 18.1912 12.6769 18.2028 10.0079 18.2028C7.33882 18.2028 7.01842 18.1912 5.96714 18.1442C4.99019 18.1013 4.46264 17.9372 4.11094 17.8005C3.67727 17.6402 3.28253 17.3863 2.96212 17.0542C2.62996 16.7299 2.37596 16.3391 2.21568 15.9056C2.0789 15.5539 1.91481 15.0225 1.87191 14.0497C1.8249 12.9948 1.8133 12.6783 1.8133 10.0098C1.8133 7.34124 1.8249 7.02089 1.87191 5.96996C1.91481 4.99321 2.0789 4.46576 2.21568 4.11413C2.37596 3.68039 2.62996 3.28587 2.96609 2.96537C3.29031 2.63327 3.68109 2.37932 4.11491 2.21922C4.46661 2.08247 4.99813 1.91841 5.9711 1.87537C7.0262 1.82852 7.34279 1.81677 10.0117 1.81677C12.6847 1.81677 13.0011 1.82852 14.0524 1.87537C15.0293 1.91841 15.5569 2.08247 15.9086 2.21922C16.3423 2.37932 16.737 2.63327 17.0574 2.96537C17.3896 3.28968 17.6436 3.68039 17.8039 4.11413C17.9406 4.46576 18.1047 4.99702 18.1478 5.96996C18.1946 7.02486 18.2064 7.34124 18.2064 10.0098C18.2064 12.6783 18.1946 12.9909 18.1478 14.0458Z"
                                                fill="#00FF84" />
                                            <path
                                                d="M10.004 4.86328C7.16707 4.86328 4.8653 7.16446 4.8653 10.001C4.8653 12.8376 7.16707 15.1388 10.004 15.1388C12.8411 15.1388 15.1427 12.8376 15.1427 10.001C15.1427 7.16446 12.8411 4.86328 10.004 4.86328ZM10.004 13.3337C8.16355 13.3337 6.67066 11.8413 6.67066 10.001C6.67066 8.16075 8.16355 6.6683 10.004 6.6683C11.8446 6.6683 13.3374 8.16075 13.3374 10.001C13.3374 11.8413 11.8446 13.3337 10.004 13.3337Z"
                                                fill="#00FF84" />
                                            <path
                                                d="M16.545 4.66232C16.545 5.32469 16.0078 5.86175 15.3452 5.86175C14.6827 5.86175 14.1455 5.32469 14.1455 4.66232C14.1455 3.9998 14.6827 3.46289 15.3452 3.46289C16.0078 3.46289 16.545 3.9998 16.545 4.66232Z"
                                                fill="#00FF84" />
                                        </svg>
                                    </span>
                                    <input type="url" class="form-control" placeholder="Username"
                                        style="border-left: none;">
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card-custom">

                            <form>
                                <label for="exampleInputEmail1">Linkedin</label>
                                <div class="input-group mb-3">

                                    <span class="input-group-text bg-w">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M19.9947 20.0007V19.9999H19.9997V12.6649C19.9997 9.07664 19.2272 6.3125 15.0323 6.3125C13.0156 6.3125 11.6623 7.41916 11.1098 8.46831H11.0514V6.6475H7.07397V19.9999H11.2156V13.3883C11.2156 11.6475 11.5456 9.96413 13.7014 9.96413C15.8256 9.96413 15.8573 11.9508 15.8573 13.4999V20.0007H19.9947Z"
                                                fill="#00FF84" />
                                            <path d="M0.329956 6.64844H4.47659V20.0008H0.329956V6.64844Z"
                                                fill="#00FF84" />
                                            <path
                                                d="M2.40164 0C1.07582 0 0 1.07582 0 2.40164C0 3.72747 1.07582 4.82579 2.40164 4.82579C3.72747 4.82579 4.80329 3.72747 4.80329 2.40164C4.80246 1.07582 3.72663 0 2.40164 0V0Z"
                                                fill="#00FF84" />
                                        </svg>
                                    </span>
                                    <input type="url" class="form-control" placeholder="Username"
                                        style="border-left: none;">
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card-custom">

                            <form>
                                <label for="exampleInputEmail1">Twitter</label>
                                <div class="input-group mb-3">

                                    <span class="input-group-text bg-w">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M20 4.14641C19.2563 4.47266 18.4637 4.68891 17.6375 4.79391C18.4875 4.28641 19.1363 3.48891 19.4412 2.52766C18.6488 3.00016 17.7738 3.33391 16.8412 3.52016C16.0887 2.71891 15.0162 2.22266 13.8462 2.22266C11.5763 2.22266 9.74875 4.06516 9.74875 6.32391C9.74875 6.64891 9.77625 6.96141 9.84375 7.25891C6.435 7.09266 3.41875 5.45891 1.3925 2.97016C1.03875 3.58391 0.83125 4.28641 0.83125 5.04266C0.83125 6.46266 1.5625 7.72141 2.6525 8.45016C1.99375 8.43766 1.3475 8.24641 0.8 7.94516C0.8 7.95766 0.8 7.97391 0.8 7.99016C0.8 9.98266 2.22125 11.6377 4.085 12.0189C3.75125 12.1102 3.3875 12.1539 3.01 12.1539C2.7475 12.1539 2.4825 12.1389 2.23375 12.0839C2.765 13.7077 4.2725 14.9014 6.065 14.9402C4.67 16.0314 2.89875 16.6889 0.98125 16.6889C0.645 16.6889 0.3225 16.6739 0 16.6327C1.81625 17.8039 3.96875 18.4727 6.29 18.4727C13.835 18.4727 17.96 12.2227 17.96 6.80516C17.96 6.62391 17.9538 6.44891 17.945 6.27516C18.7588 5.69766 19.4425 4.97641 20 4.14641Z"
                                                fill="#00FF84" />
                                        </svg>
                                    </span>
                                    <input type="url" class="form-control" placeholder="Username"
                                        style="border-left: none;">
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card-custom">

                            <form>
                                <label for="exampleInputEmail1">Whatsapp</label>
                                <div class="input-group mb-3">

                                    <span class="input-group-text bg-w">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <g clip-path="url(#clip0_453_3399)">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.6325 3.34007C14.8784 1.58386 12.5455 0.616264 10.0602 0.615234C4.93897 0.615234 0.771034 4.78306 0.768974 9.90566C0.768288 11.5432 1.19607 13.1417 2.00917 14.5507L0.69104 19.3652L5.61646 18.0732C6.97362 18.8135 8.50152 19.2036 10.0564 19.2041H10.0603C15.181 19.2041 19.3494 15.0359 19.3513 9.9131C19.3523 7.43042 18.3868 5.09617 16.6325 3.34007ZM10.0602 17.635H10.057C8.67135 17.6344 7.31236 17.262 6.12653 16.5586L5.84466 16.3911L2.92184 17.1579L3.70198 14.3082L3.5183 14.016C2.74525 12.7865 2.33704 11.3654 2.33773 9.90623C2.33933 5.64846 5.80369 2.18445 10.0633 2.18445C12.126 2.18513 14.0649 2.98943 15.5229 4.44912C16.9809 5.90881 17.7834 7.84904 17.7827 9.91253C17.7808 14.1706 14.3167 17.635 10.0602 17.635ZM14.2961 11.8513C14.064 11.735 12.9226 11.1736 12.7097 11.096C12.4971 11.0185 12.3422 10.9799 12.1875 11.2122C12.0327 11.4445 11.5879 11.9675 11.4524 12.1224C11.3169 12.2773 11.1816 12.2968 10.9494 12.1805C10.7172 12.0644 9.96922 11.8191 9.08242 11.0282C8.39234 10.4126 7.92645 9.6524 7.79095 9.42009C7.65568 9.18755 7.78981 9.07402 7.89281 8.9463C8.14412 8.63422 8.39577 8.30704 8.47314 8.1522C8.55061 7.99725 8.51182 7.86163 8.45368 7.74548C8.39577 7.62932 7.93149 6.48663 7.73808 6.02165C7.54948 5.56915 7.35825 5.63026 7.21566 5.62317C7.08039 5.61642 6.92555 5.61504 6.77071 5.61504C6.61599 5.61504 6.36445 5.67307 6.15159 5.90561C5.93884 6.13804 5.33917 6.6996 5.33917 7.84229C5.33917 8.98499 6.17104 10.0889 6.28709 10.2438C6.40313 10.3988 7.92416 12.7437 10.2529 13.7492C10.8068 13.9886 11.2392 14.1313 11.5764 14.2383C12.1326 14.415 12.6386 14.39 13.0386 14.3303C13.4847 14.2636 14.412 13.7686 14.6057 13.2264C14.7991 12.6841 14.7991 12.2193 14.7409 12.1224C14.683 12.0256 14.5282 11.9675 14.2961 11.8513Z"
                                                    fill="#00FF84" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_453_3399">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <input type="url" class="form-control" placeholder="Phone number"
                                        style="border-left: none;">
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card-custom">

                            <form>
                                <label for="exampleInputEmail1">Youtube</label>
                                <div class="input-group mb-3">

                                    <span class="input-group-text bg-w">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M10 3.33398C10.0402 3.33399 16.2652 3.33577 17.8252 3.7627C18.6818 3.99342 19.3573 4.66863 19.5879 5.52539C20.0163 7.09041 20 10.3525 20 10.3525C20 10.3965 19.9968 13.6076 19.5879 15.1621C19.3572 16.0187 18.6819 16.6942 17.8252 16.9248C16.2625 17.3362 10.0189 17.3369 10 17.3369C10 17.3369 3.75653 17.3374 2.1748 16.9092C1.31818 16.6785 0.642938 16.0029 0.412109 15.1465C0.00268564 13.6069 1.40114e-05 10.3737 0 10.3359C0 10.3359 0.000320821 7.09039 0.412109 5.52539C0.642669 4.66877 1.33466 3.97665 2.1748 3.74609C3.74028 3.33417 10 3.33398 10 3.33398ZM8.00684 13.334L13.2129 10.3359L8.00684 7.33691V13.334Z"
                                                fill="#00FF84" />
                                        </svg>
                                    </span>
                                    <input type="url" class="form-control" placeholder="Username"
                                        style="border-left: none;">
                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="pt-20">
                        <button class="btn btn-primary1 ">Submit For Review</button>
                    </div>

                </div>

            </div>

            <br>

            <!-- Notifications and Password -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="course-summary-card">
                        <div class="card-custom">
                            <p class="page-title2">Notifications</p>
                            <form>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="notify1">
                                    <label class="form-check-label" for="notify1">I want to know who buy my
                                        course.</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="notify2">
                                    <label class="form-check-label" for="notify2">I want to know who write a review on
                                        my course.</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="notify3">
                                    <label class="form-check-label" for="notify3">I want to know who commented on my
                                        lecture.</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="notify4" checked>
                                    <label class="form-check-label" for="notify4">I want to know who download my lecture
                                        notes.</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="notify5" checked>
                                    <label class="form-check-label" for="notify5">I want to know who replied on my
                                        comment.</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="notify6" checked>
                                    <label class="form-check-label" for="notify6">I want to know daily how many people
                                        visited my profile.</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="notify7" checked>
                                    <label class="form-check-label" for="notify7">I want to know who download my lecture
                                        attach file.</label>
                                </div>
                                <div class="pt-20">
                                    <button class="btn btn-primary1 ">Submit For Review</button>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="course-summary-card">
                        <div class="card-custom">
                            <p class="page-title2">Change Password
                            </p>
                            <form>
                                <div class="col-md-12 ">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Current Password</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Password">

                                    </div>
                                </div>
                                <div class="col-md-12 pt-20">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">New Password</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Password">

                                    </div>
                                </div>
                                <div class="col-md-12 pt-20">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Confirm Password</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Password">

                                    </div>
                                </div>

                                <div class="pt-20">
                                    <button class="btn btn-primary1 ">Submit For Review</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>








        </div> <!--end col-->
    </div><!--end row-->
</div><!-- container -->
<!--Start Rightbar-->
<!--Start Rightbar/offcanvas-->
<br>
<!--end Rightbar/offcanvas-->
<!--end Rightbar-->
<!--Start Footer-->



<script>
    document.getElementById("fileInput").addEventListener("change", function (event) {
        const file = event.target.files[0];
        if (file && file.type.startsWith("image/")) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById("preview").src = e.target.result;
            };
            reader.readAsDataURL(file);
        } else {
            alert("Please select a valid image file.");
        }
    });
</script>




<?php include 'partials/footer.php'; ?>