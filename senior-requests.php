<?php
include_once('database/config.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel='stylesheet' href='https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css'>
    <title>Senior Information</title>
    <style>
        :root {
            --main-bg-color: #009d63;
            --main-text-color: #009d63;
            --second-text-color: #bbbec5;
            --second-bg-color: #c1efde;
        }

        .primary-text {
            color: white;
        }

        .second-text {
            color: white;
        }

        .primary-bg {
            background-color: var(--main-bg-color);
        }

        .secondary-bg {
            background-color: var(--second-bg-color);
        }

        .rounded-full {
            border-radius: 100%;
        }

        #wrapper {
            overflow-x: hidden;
            background: #F6F7FA;
        }

        #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            -webkit-transition: margin 0.25s ease-out;
            -moz-transition: margin 0.25s ease-out;
            -o-transition: margin 0.25s ease-out;
            transition: margin 0.25s ease-out;
            background-color: #010427;
        }

        #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
        }

        #sidebar-wrapper .list-group {
            width: 15rem;
        }

        #page-content-wrapper {
            min-width: 100vw;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: 0;
        }

        #menu-toggle {
            cursor: pointer;
        }

        .list-group-item {
            border: none;
            padding: 20px 30px;
        }

        .list-group-item.active {
            background-color: transparent;
            color: white;
            font-weight: bold;
            border: none;
        }

        @media (min-width: 768px) {
            #sidebar-wrapper {
                margin-left: 0;
            }

            #page-content-wrapper {
                min-width: 0;
                width: 100%;
            }

            #wrapper.toggled #sidebar-wrapper {
                margin-left: -15rem;
            }
        }

        a:hover {
            color: white;
        }

        li.active {
            background-color: #24279B;
        }

        li {
            text-decoration: none;
            list-style-type: none;
        }

        tr.heading {
            background: #24279B;
            color: white;
        }

        .bg-violet {
            background: #581846;
        }

        .bg-orange {
            background: #FF552F;
        }

        .bg-red {
            background: #F70500;
        }

        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {
            opacity: 0.7;
        }

        /* The Modal (background) */
        .zoom-modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9);
            /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 100%;
            max-width: 500px;
        }

        /* Add Animation */
        .modal-content,
        #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* The Close Button */
        .close-picturemodal {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close-picturemodal:hover,
        .close-picturemodal:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }

        @media (min-width: 768px) {
            .modal-xl {
                width: 90%;
                max-width: 1200px;
            }
        }

        .flash-error {
            color: red;
            display: none;
        }

        .flash-warning {
            color: orange;
            display: none;
        }

        .conditional-input {

            border: 1px solid orange !important;

        }

        .invalid-input {

            border: 1px solid red !important;

        }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase"><img class="img me-2" style="max-width: 100%;" width="30px" height="30px" src="assets/img/mswdo-logo.png">MWSDO</div>
            <div class="list-group list-group-flush my-3">
                <li class="">
                    <a href="senior-admin.php" class="list-group-item bg-transparent second-text border-bottom"><i class="fa-solid fa-house-user me-2"></i>Dashboard</a>
                </li>
                <li class="active">
                    <a href="senior-requests.php" class="list-group-item bg-transparent second-text border-bottom fw-bold active"><i class="fa-solid fa-wheelchair me-2"></i>Senior Requests</a>
                </li>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Office for Senior Citizens Affairs</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Welcome Back, <?php echo $_SESSION['username'] ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="logout.php" style="color: red;"><i class="fa-solid fa-power-off me-2"></i>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Total Number of Senior Applicant Requests</h3>
                    <div class="col">
                        <div style="overflow-x:auto;">
                            <table class="table bg-white rounded shadow-sm  table-hover" id="sort">
                                <thead>
                                    <tr class="heading">
                                        <th scope="col">Senior ID</th>
                                        <th scope="col">Application Type</th>
                                        <th scope="col">Barangay</th>
                                        <th scope="col">Firstname</th>
                                        <th scope="col">Lastname</th>
                                        <th scope="col">Pic</th>
                                        <th scope="col">Medical Cert</th>
                                        <th scope="col">Baranngay Cert</th>
                                        <th scope="col">Voter ID</th>
                                        <th scope="col">Action</th> <!-- column 2&3 -->
                                        <th scope="col"></th> <!-- column 2&3 -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $sql = "select * from senior_info";
                                    $result = mysqli_query($mysqli, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['senior_id'] ?></td>
                                            <td><?php echo $row['reg_type'] ?></td>
                                            <td><?php echo $row['barangay'] ?></td>
                                            <td><?php echo $row['fname'] ?></td>
                                            <td><?php echo $row['lname'] ?></td>
                                            <td><img id="myImg" onclick="showImage(this)" src="assets/uploads/<?php echo $row['formal_pic']; ?>" alt="No Image" height="90px" width="90px"></td>
                                            <td><img id="myImg" onclick="showImage(this)" src="assets/uploads/<?php echo $row['med_cert']; ?>" alt="No Image" height="90px" width="90px"></td>
                                            <td><img id="myImg" onclick="showImage(this)" src="assets/uploads/<?php echo $row['brgy_cert']; ?>" alt="No Image" height="90px" width="90px"></td>
                                            <td><img id="myImg" onclick="showImage(this)" src="assets/uploads/<?php echo $row['voter_id']; ?>" alt="No Image" height="90px" width="90px"></td>
                                            <td>
                                                <button class="btn btn-warning" data-bs-toggle="modal" type="button" data-bs-target="#update_modal<?php echo $row['senior_id'] ?>">
                                                    <i class="fas fa-edit">
                                                    </i></button>
                                            </td>
                                            <div class="modal fade" id="update_modal<?php echo $row['senior_id'] ?>" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content modal-xl">
                                                        <div class="modal-header modal-xl">
                                                            <h3 class="modal-title">Update User</h3>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" action="update-senior.php" enctype="multipart/form-data">
                                                                <div class="col-12 text-center" style="margin-top: 20px; margin-bottom: 20px; font-weight:bolder">
                                                                    SENIOR CITIZEN REGISTRATION FORM
                                                                </div>
                                                                <hr>
                                                                <div class="row jumbotron">
                                                                    <div class="col-sm-6 form-group">
                                                                        <input type="hidden" name="senior_id" >
                                                                        <label for="reg_type">Registration Type</label>
                                                                        <select class="form-control form-select" name="reg_type" id="reg-type" onblur="regtypeEmpty();" required>
                                                                            <option value="<?= $row['reg_type']; ?>" selected><?= $row['reg_type']; ?></option>
                                                                            <option value="new">New</option>
                                                                        </select>
                                                                        <p id="flash-error-regtype" class="flash-error">This field cannot be empty</p>

                                                                    </div>
                                                                    <div class="col-sm-6 form-group">
                                                                        <label for="blood-type">Blood Type</label>
                                                                        <select class="form-control form-select" name="blood_type" id="blood-type" onblur="bloodtypeEmpty();" required>
                                                                            <option value="" disabled selected>Choose Blood Type</option>
                                                                            <option value="<?= $row['blood_type']; ?>" selected><?= $row['blood_type']; ?></option>
                                                                            <option value="a+">A+</option>
                                                                            <option value="a-">A-</option>
                                                                            <option value="b+">B+</option>
                                                                            <option value="b-">B-</option>
                                                                            <option value="o+">O+</option>
                                                                            <option value="o-">O-</option>
                                                                            <option value="ab+">AB+</option>
                                                                            <option value="ab-">AB-</option>
                                                                        </select>
                                                                        <p id="flash-error-bloodtype" class="flash-error">This field cannot be empty</p>

                                                                    </div>
                                                                    <div style="font-weight:bolder">Full Name</div>
                                                                    <input type="hidden" name="senior_id" value="<?php echo $row['senior_id'] ?>" />
                                                                    <div class="col-sm-4 form-group">
                                                                        <input type="text" class="form-control" name="fname" id="fname" value="<?php echo $row['fname'] ?>" onblur="fnameEmpty();" placeholder="First name" required>
                                                                        <p id="flash-error-fname" class="flash-error">This field cannot be empty</p>

                                                                    </div>
                                                                    <div class="col-sm-4 form-group">
                                                                        <input type="text" class="form-control" name="mname" id="mname" value="<?php echo $row['mname'] ?>" onblur="mnameEmpty();" placeholder="Middle name (Optional)"required>
                                                                        <p id="flash-warning-mname" class="flash-warning">You can update this field anytime</p>
                                                                    </div>
                                                                    <div class="col-sm-4 form-group">
                                                                        <input type="text" class="form-control" name="lname" id="lname" value="<?php echo $row['lname'] ?>" onblur="lnameEmpty();" placeholder="Last name" required>
                                                                        <p id="flash-error-lname" class="flash-error">This field cannot be empty</p>
                                                                    </div>
                                                                    <div class="col-sm-4 form-group">
                                                                        <label for="dob">Date of Birth</label>
                                                                        <input type="date" class="form-control" name="dob" id="dob" value="<?php echo $row['dob'] ?>" onblur="dobEmpty();" placeholder="Date of Birth" required>
                                                                        <p id="flash-error-dob" class="flash-error">This field cannot be empty</p>
                                                                    </div>

                                                                    <div class="col-sm-4 form-group">
                                                                        <label for="mobile-no">Contact Number(Optional)</label>
                                                                        <input type="text" class="form-control" name="mobile_no" id="mobile-no" value="<?php echo $row['mobile_no'] ?>" onblur="contactEmpty();" placeholder="+09XXXXXXXXX" required>
                                                                        <p id="flash-warning-mobile" class="flash-warning">You can update this field anytime</p>
                                                                    </div>
                                                                    <div class="col-sm-4 form-group">
                                                                        <label for="email">Email(Optional)</label>
                                                                        <input type="email" class="form-control" name="email" id="email" onblur="emailEmpty();" value="<?php echo $row['email'] ?>" placeholder="example@gmail.com" required>
                                                                        <p id="flash-warning-email" class="flash-warning">You can update this field anytime</p>
                                                                    </div>
                                                                    <div class="col-sm-4 form-group">
                                                                        <label for="gender">Gender</label>
                                                                        <select class="form-control form-select" name="gender" id="gender" onblur="genderEmpty();" required>
                                                                            <option value="" disabled selected>Choose your Gender</option>
                                                                            <option value="<?= $row['gender']; ?>" selected><?= $row['gender']; ?></option>
                                                                            <option value="male">Male</option>
                                                                            <option value="female">Female</option>
                                                                        </select>
                                                                        <p id="flash-error-gender" class="flash-error">This field cannot be empty</p>
                                                                    </div>
                                                                    <div class="col-sm-4 form-group">
                                                                        <label for="civil">Civil Status</label>
                                                                        <select class="form-control form-select" name="civil" id="civil" onblur="civilEmpty();" required>
                                                                            <option value="" disabled selected>Choose your status</option>
                                                                            <option value="<?= $row['civil']; ?>" selected><?= $row['civil']; ?></option>
                                                                            <option value="single">Single</option>
                                                                            <option value="married">Married</option>
                                                                            <option value="widowed">Widowed</option>
                                                                            <option value="divorced">Divorced</option>
                                                                            <option value="separated">Separated</option>
                                                                        </select>
                                                                        <p id="flash-error-civil" class="flash-error">This field cannot be empty</p>
                                                                    </div>
                                                                    <div style="font-weight:bolder">Address</div>
                                                                    <div class="col-sm-4 form-group">
                                                                        <select class="form-control form-select" name="region" id="region">
                                                                            <option value="region_iv-a" selected>REGION IV-A (CALABARZON)</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-4 form-group">
                                                                        <select class="form-control form-select" name="province" id="province">
                                                                            <option value="laguna" selected>Laguna</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-4 form-group">
                                                                        <select class="form-control form-select" name="city" id="city">
                                                                            <option value="pila" selected>Pila</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-4 form-group">
                                                                        <select class="form-control form-select" name="barangay" id="barangay" onblur="barangayEmpty();" required>
                                                                            <option value="" disabled selected>Barangay</option>
                                                                            <option value="<?= $row['barangay']; ?>" selected><?= $row['barangay']; ?></option>
                                                                            <option value="Aplaya">Aplaya</option>
                                                                            <option value="Bagong Pook">Bagong Pook</option>
                                                                            <option value="Bukal">Bukal</option>
                                                                            <option value="Bulilan Norte">Bulilan Norte</option>
                                                                            <option value="Bulilan Sur">Bulilan Sur</option>
                                                                            <option value="Concepcion">Concepcion</option>
                                                                            <option value="Labuin">Labuin</option>
                                                                            <option value="Linga">Linga</option>
                                                                            <option value="Masico">Masico</option>
                                                                            <option value="Mojon">Mojon</option>
                                                                            <option value="Pansol">Pansol</option>
                                                                            <option value="Pinagbayanan">Pinagbayanan</option>
                                                                            <option value="San Antonio">San Antonio</option>
                                                                            <option value="San Miguel">San Miguel</option>
                                                                            <option value="Santa Clara Norte">Santa Clara Norte</option>
                                                                            <option value="Santa Clara Sur">Santa Clara Sur</option>
                                                                            <option value="Tubuan">Tubuan</option>
                                                                        </select>
                                                                        <p id="flash-error-barangay" class="flash-error">This field cannot be empty</p>
                                                                    </div>
                                                                    <div class="col-sm-4 form-group">
                                                                        <input type="text" class="form-control" name="house_no" id="house-no" value="<?php echo $row['house_no'] ?>" placeholder="House No./Street" onblur="housenoEmpty();" required>
                                                                        <p id="flash-error-houseno" class="flash-error">This field cannot be empty</p>
                                                                    </div>
                                                                </div>
                                                                <hr>

                                                                <!-- TAB PERSONNAL INFO END -->
                                                                <!-- PWD Status -->
                                                                <div class="col-12 text-center" style="margin-top: 20px; margin-bottom: 20px; font-weight:bolder">
                                                                    SENIOR STATUS
                                                                </div>
                                                                <hr>
                                                                <div class="row jumbotron">
                                                                    <div class="col-sm-4 form-group">
                                                                        <label for="education">Educational Attainment</label>
                                                                        <select class="form-control form-select" name="education" id="education" onblur="educationEmpty();" required>
                                                                            <option value="" disabled selected>Choose one</option>
                                                                            <option value="<?= $row['education']; ?>" selected><?= $row['education']; ?></option>
                                                                            <option value="elementary">Elementary Graduate</option>
                                                                            <option value="junior_high_school">Junior High School Graduate</option>
                                                                            <option value="senior_high_school">Senior High School (If Applicable) Graduate</option>
                                                                            <option value="college">College Graduate</option>
                                                                        </select>
                                                                        <p id="flash-error-education" class="flash-error">This field cannot be empty</p>

                                                                    </div>
                                                                    <div class="col-sm-4 form-group">
                                                                        <label for="employment-status">Employment Status</label>
                                                                        <select class="form-control form-select" name="employment_status" id="employment-status" value="<?php echo $row['employment_status'] ?>" onblur="employmentstatusEmpty();" required>
                                                                            <option value="" disabled selected>Choose One</option>
                                                                            <option value="<?= $row['employment_status']; ?>" selected><?= $row['employment_status']; ?></option>
                                                                            <option value="employed">Employed</option>
                                                                            <option value="unemployed">Unemployed</option>
                                                                        </select>
                                                                        <p id="flash-error-employmentstatus" class="flash-error">This field cannot be empty</p>
                                                                    </div>

                                                                    <div class="col-sm-4 form-group">
                                                                        <label for="employment-type">Type of Employment (If Applicable)</label>
                                                                        <input type="text" class="form-control" name="employment_type" id="employment-type" value="<?php echo $row['employment_type'] ?>" onblur="employmenttypeEmpty();" placeholder="Type N/A if not employed"required>
                                                                        <p id="flash-warning-employmenttype" class="flash-warning">You can update this field anytime</p>
                                                                    </div>
                                                                    <div class="col-sm-4 form-group">
                                                                        <label for="employer-type">Type of Employer (If Applicable)</label>
                                                                        <input type="text" class="form-control" name="employer_type" id="employer-type" value="<?php echo $row['employer_type'] ?>" onblur="employertypeEmpty();" placeholder="Type N/A if not employed"required>
                                                                        <p id="flash-warning-employertype" class="flash-warning">You can update this field anytime</p>
                                                                    </div>
                                                                    <div class="col-sm-4 form-group">
                                                                        <label for="occupation">Occupation (Choose N/A, if none)</label>
                                                                        <select class="form-control form-select" name="occupation" id="occupation" onblur="occupationEmpty();" required>
                                                                            <option value="" disabled selected>Choose One</option>
                                                                            <option value="<?= $row['occupation']; ?>" selected><?= $row['occupation']; ?></option>
                                                                            <option value="professional">Professional</option>
                                                                            <option value="non-professional">Non-Professional</option>
                                                                            <option value="n/a">N/A</option>
                                                                        </select>
                                                                        <p id="flash-error-occupation" class="flash-error">This field cannot be empty</p>
                                                                    </div>
                                                                    <div class="col-sm-4 form-group">
                                                                        <label for="company-name">Company Name (If Applicable)</label>
                                                                        <input type="text" class="form-control" name="company_name" id="company-name" value="<?php echo $row['company_name'] ?>" onblur="companynameEmpty();" placeholder="Type N/A if not employed"required>
                                                                        <p id="flash-warning-companyname" class="flash-warning">You can update this field anytime</p>
                                                                    </div>
                                                                    <div class="col-sm-4 form-group">
                                                                        <label for="employer-contact">Employer Contact (If Applicable)</label>
                                                                        <input type="text" class="form-control" name="employer_contact" id="employer-contact" value="<?php echo $row['employer_contact'] ?>" onblur="employercontactEmpty();" placeholder="Type N/A if not employed"required>
                                                                        <p id="flash-warning-employercontact" class="flash-warning">You can update this field anytime</p>
                                                                    </div>
                                                                    <div class="col-sm-4 form-group">
                                                                        <label for="philhealth-no">Philhealth Number</label>
                                                                        <input type="text" class="form-control" name="philhealth_no" id="philhealth-no" value="<?php echo $row['philhealth_no'] ?>" placeholder="00-000000000-00" onblur="philhealthEmpty();" required>
                                                                        <p id="flash-error-philhealthno" class="flash-error">This field cannot be empty</p>

                                                                    </div>
                                                                    <div class="col-sm-4 form-group">
                                                                        <label for="sss-no">SSS Number</label>
                                                                        <input type="text" class="form-control" name="sss_no" id="sss-no" value="<?php echo $row['sss_no'] ?>" placeholder="00-0000000-0" onblur="sssEmpty();" required>
                                                                        <p id="flash-error-sssno" class="flash-error">This field cannot be empty</p>
                                                                    </div>
                                                                    <div class="col-sm-4 form-group">
                                                                        <label for="gsis-no">GSIS Number</label>
                                                                        <input type="text" class="form-control" name="gsis_no" id="gsis-no" value="<?php echo $row['gsis_no'] ?>" placeholder="00000000000" onblur="gsisEmpty();" required>
                                                                        <p id="flash-error-gsisno" class="flash-error">This field cannot be empty</p>
                                                                    </div>
                                                                </div>
                                                                <hr>

                                                                <div class="col-12 text-center" style="margin-top: 20px; margin-bottom: 20px; font-weight:bolder">
                                                                    Family Background
                                                                </div>
                                                                <hr>
                                                                <div class="col-sm-12 form-group">
                                                                    <label for="spouse-name">Spouse Name (If married)</label>
                                                                    <input type="text" class="form-control" name="spouse_name" id="spouse-name" value="<?php echo $row['spouse_name'] ?>" onblur="spousenameEmpty();" placeholder="Type here"required>
                                                                    <p id="flash-warning-spousename" class="flash-warning">You can update this field anytime</p>
                                                                </div>
                                                                <div class="col-sm-12 form-group">
                                                                    <label for="children">Number of Child/Children (Choose N/A, if none)</label>
                                                                    <select class="form-control form-select" name="child_no" id="children" onblur="childrenEmpty();" required>
                                                                        <option value="" disabled selected>Choose Any</option>
                                                                        <option value="<?= $row['child_no']; ?>" selected><?= $row['child_no']; ?></option>
                                                                        <option value="one">One (1)</option>
                                                                        <option value="two">Two (2)</option>
                                                                        <option value="three">Three (3)</option>
                                                                        <option value="four">Four (4)</option>
                                                                        <option value="more_than_five">Five and Above (5 - >)</option>
                                                                        <option value="n/a">N/A</option>
                                                                    </select>
                                                                    <p id="flash-error-children" class="flash-error">This field cannot be empty</p>
                                                                </div>
                                                                <hr>
                                                                <div class="col-12 text-center" style="margin-top: 20px; margin-bottom: 20px; font-weight:bolder">
                                                                    Requirements
                                                                </div>
                                                                <hr>
                                                                <div class="container">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <label for="formal-pic">Formal Picture</label>
                                                                        <input type="file" name="formal_pic" class="form-control m-4" id="formal-pic" onblur="formalpicEmpty();" >
                                                                        <p id="flash-error-formalpic" class="flash-error">Picture is required</p>

                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="med-cert"> Medical Certificate</label>
                                                                        <input type="file" name="med_cert" class="form-control m-4" id="med-cert" onblur="medcertEmpty();" >
                                                                        <p id="flash-error-medcert" class="flash-error">Medical Certificate is required</p>

                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="brgy-cert"> Barangay Certificate</label>
                                                                        <input type="file" name="brgy_cert" class="form-control m-4" id="brgy-cert" onblur="brgycertEmpty();" >
                                                                        <p id="flash-error-brgycert" class="flash-error">Barangay Certificate is required</p>

                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="voter-id"> Voter's ID</label>
                                                                        <input type="file" name="voter_id" class="form-control m-4" id="voter-id" onblur="voteridEmpty();" >
                                                                        <p id="flash-error-voter" class="flash-error">Voters ID is required</p>

                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <hr>
                                                                <div class="col-12 text-center" style="margin-top: 20px; margin-bottom: 20px; font-weight:bolder">
                                                                    Remarks and Comments
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-12 form-group">
                                                                        <label for="application-status">Senior Application Status</label>
                                                                        <select class="form-control form-select" name="application_status" id="application-status" onblur="childrenEmpty();" required>
                                                                            <option value="" disabled selected>Choose Any</option>
                                                                            <option value="<?= $row['application_status']; ?>" selected><?= $row['application_status']; ?></option>
                                                                            <option value="approve">Approve</option>
                                                                            <option value="rejected">Rejected</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-12 form-group">
                                                                        <label for="remarks">Remarks</label>
                                                                        <textarea class="form-control" name="remarks" id="remarks" required></textarea>
                                                                    </div>
                                                                </div>

                                                            
                                                        </div>
                                                        <div style="clear:both;"></div>
                                                        <div class="modal-footer">
                                                            <button name="update" class="btn btn-warning" onclick="return confirm('Are you sure you want to save your changes.')"><span class="glyphicon glyphicon-edit"></span> Update</button>
                                                            <button class="btn btn-danger" type="button" data-bs-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <?php

                                            /*if(ISSET($_POST['update'])){
    $pwd_id = $_POST['pwd_id'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
 
    mysqli_query($mysqli, "UPDATE pwd_info SET fname = $fname, mname = '$mname', 'lname' = '$lname' WHERE 'pwd_id' = '$pwd_id'");
 
  }*/
                                            ?> <td>
                                                <a href="delete-senior.php?senior_id=<?php echo $row['senior_id']; ?>">
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('WARNING: Details will be permanently removed.')">
                                                        <i class="far fa-trash-alt"></i> </button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                </tbody>
                </table>
            </div>
        </div>

    </div>
    </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
    <?php include('assets/js/js-jquery-cdn.html') ?>
    <script type="text/javascript" src="assets/js/main-js.js"></script>
    <!--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>-->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src='https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js'></script>

    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
    <script>
        $(document).ready(function() {
            $("#sort").DataTable({
                columnDefs: [{
                    type: 'date',
                    targets: [3]
                }],
            });
        });
    </script>

    <script>
        $(".list-group a").on("click", function() {
            $(".list-group ").find(".active").removeClass("active");
            $(this).parent().addClass("active");
        });
    </script>

    <div id="myModal" class="zoom-modal">
        <span class="close-picturemodal">&times;</span>
        <img class="modal-content" id="img01">
    </div>

    <script>
        var modal = document.getElementById('myModal');
        var modalImg = document.getElementById('img01');

        function showImage(imgElement) {
            var src = imgElement.getAttribute("src");
            modal.style.display = "block";
            modalImg.src = src;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close-picturemodal")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
            modal.style.display = "hide";
        }
    </script>

    <script>
        $(document).ready(function() {

            const nextBtn = document.querySelectorAll(".nextBtn");
            const prevBtn = document.querySelectorAll(".prevBtn");

            nextBtn.forEach(function(item, index) {
                item.addEventListener('click', function() {
                    let id = index + 1;
                    let tabElement = document.querySelectorAll("#myTab li a")[id];
                    var lastTab = new bootstrap.Tab(tabElement);
                    lastTab.show();
                });
            });

            prevBtn.forEach(function(item, index) {
                item.addEventListener('click', function() {
                    let id = index;
                    let tabElement = document.querySelectorAll("#myTab li a")[id];
                    var lastTab = new bootstrap.Tab(tabElement);
                    lastTab.show();
                });
            });
        });
    </script>
</body>

</html>