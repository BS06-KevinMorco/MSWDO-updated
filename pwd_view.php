<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.all.min.js"></script>

<?php include_once('database/config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PWD Registration</title>
    <!-- CSS BOOTSTRAP CDN AND DOWNLOADED FONTS -->
    <?php include('assets/css/css-cdn-fonts.html') ?>
    <!-- CSS Main File -->
    <link href="assets/css/styles.css" rel="stylesheet" />
</head>

<body class="pwd-body">
    <?php include('assets/nav/before-login-nav.php') ?>

    <div class="container">
        <div class="pwd-home">
            <div class="row text-center">
                <div class="col-2">
                    <img class="img" style="max-width: 100%;" width="90px" height="90px" src="assets/img/pila-logo.png">
                </div>
                <div class="col-8" style="margin-top: 20px; font-weight:bolder">
                    PWD ONLINE REGISTRATION
                </div>
                <div class="col-2">
                    <img class="img" style="max-width: 100%;" width="90px" height="90px" src="assets/img/mswdo-logo.png">
                </div>
                <div class="row text-center">
                    <div class="col-6">
                        <a href="pwd-register.php" id="link" class="btn btn-outline-success" style="width:50%">Register Now</a>
                    </div>
                    <div class="col-6">
                        <a href="pwd_view.php" id="link2" class="btn btn-outline-warning" style="width:50%">Check Registration Status</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <form action="" method="GET">
                    <div class="container mt-5 text-center">
                        <h2>Enter your referral code here</h2>
                    </div>
                    <div class="form-group me-5">
                        <div class="row">
                            <div class="col-8">
                                <input type="text" name="ref_code" id="ref-code" placeholder="Referral Code" value="<?php if (isset($_GET['ref_code'])) {
                                                                                                                        echo $_GET['ref_code'];
                                                                                                                    } ?>" class="form-control" required>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn-warning form-control">Search</button>
                            </div>
                        </div>
                    </div>
            </div>
            </form>

            <?php

            if (isset($_GET['ref_code'])) {
                $ref_code = $_GET['ref_code'];
                $query = "SELECT * FROM pwd_info WHERE ref_code='$ref_code' ";
                $query_run = mysqli_query($mysqli, $query);

                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $row) {
            ?>

                        <div class="pwd-register" style="margin-top: 50px;">
                            <div class="container">
                                <ul class="nav nav-pills" id="myTab">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#remarks">Remarks</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#personal-info">Personal Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#pwd-status">PWD Status</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#pwd-family-background">Family Background</a>
                                    </li>

                                </ul>
                                <hr>
                            </div>



                            <div class="tab-content" id="myTabContent">
                                <!-- PWD Remarks -->
                                <div class="tab-pane container active" id="remarks">
                                    <div class="col-12 text-center" style="margin-top: 20px; margin-bottom: 20px; font-weight:bolder">
                                        Registration Status & Remarks
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label for="ref-code">Your Referral Code</label>
                                            <input type="text" class="form-control" name="ref_code" id="ref-code" value="<?= $row['ref_code']; ?>" placeholder="Type here" disabled>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label for="application-status">Application Status</label>
                                            <input type="text" class="form-control" name="application_status" value="<?= $row['application_status']; ?>" id="application-status" placeholder="Pending" disabled>
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label for="remarks">Remarks</label>
                                            <textarea class="form-control" name="remarks" id="remarks" placeholder="Type here" disabled><?= $row['remarks']; ?> </textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 form-group mb-0">
                                    <div class="row">
                                            <div class="col">
                                                <div class="text-end">
                                                    <a class="btn btn-info float-end btnNext" style="color: #fff !important">Next</a>
                                                </div>
                                            </div>
                                        </div>                                    </div>
                                </div>
                                <!-- PWD Remarks end-->
                                <div class="tab-pane container fade" id="personal-info">
                                    <form method="post" id="form" action="update-pwd-clientside.php">
                                        <input type="hidden" name="pwd_id">
                                        <div class="col-12 text-center" style="margin-top: 20px; margin-bottom: 20px; font-weight:bolder">
                                            PWD REGISTRATION FORM
                                        </div>
                                        <hr>
                                        <div class="row jumbotron">
                                            <div class="col-sm-6 form-group">
                                                <label for="reg">Registration Type</label>
                                                <input type="hidden" name="pwd_id" value="<?= $row['pwd_id']; ?>">
                                                <select class="form-control form-select" name="reg_type" id="reg-type" disabled>
                                                    <option value="<?= $row['reg_type']; ?>" disabled selected><?= $row['reg_type']; ?></option>
                                                    <option></option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label for="blood-type">Blood Type</label>
                                                <select class="form-control form-select" name="blood_type" id="blood-type" disabled>
                                                    <option value="<?= $row['blood_type']; ?>" disabled selected><?= $row['blood_type']; ?></option>
                                                    <option value="a+">A+</option>
                                                    <option value="a-">A-</option>
                                                    <option value="b+">B+</option>
                                                    <option value="b-">B-</option>
                                                    <option value="o+">O+</option>
                                                    <option value="o-">O-</option>
                                                    <option value="ab+">AB+</option>
                                                    <option value="ab-">AB-</option>
                                                </select>
                                            </div>
                                            <div style="font-weight:bolder">Full Name</div>
                                            <div class="col-sm-4 form-group">
                                                <input type="text" class="form-control" name="fname" id="fname" value="<?= $row['fname']; ?>" placeholder="First name" disabled>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <input type="text" class="form-control" name="mname" id="mname" value="<?= $row['mname']; ?>" placeholder="Middle name (Optional)">
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <input type="text" class="form-control" name="lname" id="lname" value="<?= $row['lname']; ?>" placeholder="Last name" disabled>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label for="disability-type">Type of Disability</label>
                                                <select class="form-control form-select" name="disability_type" id="disability-type" disabled>
                                                    <option value="" disabled selected>Choose Disability Category</option>
                                                    <option value="<?= $row['disability_type']; ?>" selected><?= $row['disability_type']; ?></option>
                                                    <option value="communtication_disability">Communication Disability</option>
                                                    <option value="chronic_illness">Disability Due To Chronic Illness</option>
                                                    <option value="learning_disability">Learning Disability</option>
                                                    <option value="mental_disability">Mental Disability</option>
                                                    <option value="orthopedic_disability">Orthopedic Disability</option>
                                                    <option value="psychosocial_disability">Psychosocial Disability</option>
                                                    <option value="visual_disability">Visual Disability</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label for="dob">Date of Birth</label>
                                                <input type="date" class="form-control" name="dob" id="dob" value="<?= $row['dob']; ?>" placeholder="Date of Birth" disabled>
                                            </div>

                                            <!-- Age -->
                                            <input type="text" class="form-control" name="age" id="age" placeholder="Age" hidden>

                                            <div class="col-sm-4 form-group">
                                                <label for="mobile_no">Contact(Optional)</label>
                                                <input type="text" class="form-control" name="mobile_no" id="mobile-no" value="<?= $row['mobile_no']; ?>" placeholder="+09XXXXXXXXX">
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label for="email">Email(Optional)</label>
                                                <input type="email" class="form-control" name="email" id="email" value="<?= $row['email']; ?>" placeholder="example@gmail.com">
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label for="gender">Gender</label>
                                                <select class="form-control form-select" name="gender" id="gender" disabled>
                                                    <option value="<?= $row['gender']; ?>" selected><?= $row['gender']; ?></option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <label for="civil">Civil Status</label>
                                                <select class="form-control form-select" name="civil" id="civil" value="<?= $row['civil']; ?>" disabled>
                                                    <option disabled selected><?= $row['civil']; ?></option>
                                                    <option value="<?= $row['civil']; ?>" selected><?= $row['civil']; ?></option>
                                                    <option value="single">Single</option>
                                                    <option value="married">Married</option>
                                                    <option value="widowed">Widowed</option>
                                                    <option value="divorced">Divorced</option>
                                                    <option value="separated">Separated</option>
                                                </select>
                                            </div>
                                            <div style="font-weight:bolder">Address</div>
                                            <div class="col-sm-4 form-group">
                                                <select class="form-control form-select" name="region" id="region" disabled>
                                                    <option value="region_iv-a" selected>REGION IV-A (CALABARZON)</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <select class="form-control form-select" name="province" id="province" disabled>
                                                    <option value="laguna" selected>Laguna</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <select class="form-control form-select" name="city" id="city" disabled>
                                                    <option value="pila" selected>Pila</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <select class="form-control form-select" name="barangay" id="barangay" disabled>
                                                    <option disabled selected><?= $row['barangay']; ?></option>
                                                    <option value="<?= $row['barangay']; ?>" selected><?= $row['barangay']; ?></option>
                                                    <option value="aplaya">Aplaya</option>
                                                    <option value="bagong_pook">Bagong Pook</option>
                                                    <option value="bukal">Bukal</option>
                                                    <option value="bulilan_norte">Bulilan Norte</option>
                                                    <option value="bulilan_sur">Bulilan Sur</option>
                                                    <option value="concepcion">Concepcion</option>
                                                    <option value="labuin">Labuin</option>
                                                    <option value="linga">Linga</option>
                                                    <option value="masico">Masico</option>
                                                    <option value="mojon">Mojon</option>
                                                    <option value="pansol">Pansol</option>
                                                    <option value="pinagbayanan">Pinagbayanan</option>
                                                    <option value="san_antonio">San Antonio</option>
                                                    <option value="san_miguel">San Miguel</option>
                                                    <option value="santa_clara_norte">Santa Clara Norte</option>
                                                    <option value="santa_clara_sur">Santa Clara Sur</option>
                                                    <option value="tubuan">Tubuan</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 form-group">
                                                <input type="text" class="form-control" name="house_no" id="house_no" value="<?= $row['house_no']; ?>" placeholder="House No./Street" disabled>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <div class="text-end">
                                                    <a class="btn btn-info float-end btnNext" style="color: #fff !important">Next</a>
                                                    <a class="btn btn-secondary float-end btnPrev">Previous</a>
                                                </div>
                                            </div>
                                        </div>
                                </div>

                                <!-- PWD Status -->
                                <div class="tab-pane container fade" id="pwd-status">
                                    <div class="col-12 text-center" style="margin-top: 20px; margin-bottom: 20px; font-weight:bolder">
                                        PWD STATUS
                                    </div>
                                    <hr>
                                    <div class="row jumbotron">
                                        <div class="col-sm-4 form-group">
                                            <label for="educ">Educational Attainment</label>
                                            <select class="form-control form-select" name="education" id="educ" disabled>
                                                <option disabled selected><?= $row['education']; ?></option>
                                                <option value="<?= $row['education']; ?>" selected><?= $row['education']; ?></option>
                                                <option value="elementary">Elementary Graduate</option>
                                                <option value="junior_high_school">Junior High School Graduate</option>
                                                <option value="senior_high_school">Senior High School (If Applicable) Graduate</option>
                                                <option value="college">College Graduate</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label for="employment">Employment Status</label>
                                            <select class="form-control form-select" name="employment_status" id="employment">
                                                <option value="<?= $row['employment_status']; ?>" selected><?= $row['employment_status']; ?></option>
                                                <option value="employed">Employed</option>
                                                <option value="unemployed">Unemployed</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-4 form-group">
                                            <label for="employment-type">Type of Employment (If Applicable)</label>
                                            <input type="text" class="form-control" name="employment_type" id="employment-type" value="<?= $row['employment_type']; ?>" placeholder="Type N/A if not employed">
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label for="employer-type">Type of Employer (If Applicable)</label>
                                            <input type="text" class="form-control" name="employer_type" id="employer-type" value="<?= $row['employer_type']; ?>" placeholder="Type N/A if not employed">
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label for="occupation">Occupation (If Applicable)</label>
                                            <select class="form-control form-select" name="occupation" id="occupation" value="<?= $row['occupation']; ?>">
                                                <option><?= $row['occupation']; ?></option>
                                                <option value="<?= $row['occupation']; ?>" selected><?= $row['occupation']; ?></option>
                                                <option value="professional">Professional</option>
                                                <option value="non-professional">Non-Professional</option>
                                                <option value="n/a">N/A</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label for="company-name">Company Name (If Applicable)</label>
                                            <input type="text" class="form-control" name="company_name" id="company-name" value="<?= $row['company_name']; ?>" placeholder="Type N/A if not employed">
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label for="employer-contact">Employer Contact (If Applicable)</label>
                                            <input type="text" class="form-control" name="employer_contact" id="employer-contact" value="<?= $row['employer_contact']; ?>" placeholder="Type N/A if not employed">
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label for="philhealth_no">Philhealth Number</label>
                                            <input type="text" class="form-control" name="philhealth_no" id="philhealth_no" value="<?= $row['philhealth_no']; ?>" placeholder="00-000000000-00" disabled>
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label for="philhealth_no">SSS Number</label>
                                            <input type="text" class="form-control" name="sss_no" id="sss_no" placeholder="00-0000000-0" value="<?= $row['sss_no']; ?>" disabled>
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label for="philhealth_no">GSIS Number</label>
                                            <input type="text" class="form-control" name="gsis_no" id="gsis_no" placeholder="00000000000" value="<?= $row['gsis_no']; ?>" disabled>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-end">
                                                <a class="btn btn-info float-end btnNext" style="color: #fff !important">Next</a>
                                                <a class="btn btn-secondary float-end btnPrev">Previous</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- PWD Status end-->

                                <!-- PWD Family Background -->
                                <div class="tab-pane container fade" id="pwd-family-background">
                                    <div class="col-12 text-center" style="margin-top: 20px; margin-bottom: 20px; font-weight:bolder">
                                        Family Background
                                    </div>
                                    <hr>
                                    <div class="col-sm-12 form-group">
                                        <label for="father_name">Father's Name</label>
                                        <input type="text" class="form-control" name="father_name" id="father_name" value="<?= $row['father_name']; ?>" placeholder="Type here" disabled>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="mother_name">Mother's Name</label>
                                        <input type="text" class="form-control" name="mother_name" id="mother_name" value="<?= $row['mother_name']; ?>" placeholder="Type here" disabled>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="spouse-name">Spouse Name (If married)</label>
                                        <input type="text" class="form-control" name="spouse_name" id="spouse-name" value="<?= $row['spouse_name']; ?>" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="child_no">Number of Child/Children (If any)</label>
                                        <select class="form-control form-select" name="child_no" id="child_no">
                                            <option><?= $row['child_no']; ?></option>
                                            <option value="<?= $row['child_no']; ?>" selected><?= $row['child_no']; ?></option>
                                            <option value="one">One (1)</option>
                                            <option value="two">Two (2)</option>
                                            <option value="three">Three (3)</option>
                                            <option value="four">Four (4)</option>
                                            <option value="more_than_five">Five and Above (5 - >)</option>
                                            <option value="n/a">N/A</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="guardian_name">Guardian's Name</label>
                                        <input type="text" class="form-control" name="guardian_name" id="guardian_name" value="<?= $row['guardian_name']; ?>" placeholder="Type here" disabled>
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="guardian_contact">Guardian's Contact Number</label>
                                        <input type="text" class="form-control" name="guardian_contact" id="guardian_contact" value="<?= $row['guardian_contact']; ?>" placeholder="+09XXXXXXXXX" disabled>
                                    </div>

                                    <div class="col-sm-12 form-group mb-0">
                                        <input type="submit" name="update" value="Save Changes" onclick="return confirm('Are you sure you want to save your changes.')" class="btn btn-primary">
                                    </div>
                                </div>
                                <!-- PWD Family Background end-->
                                </form>

                    <?php
                    }
                } else {
                    echo '<script type="text/javascript">
                        validateviewRecord();
      </script>';
                }
            }

                    ?>

                            </div>
                        </div>
        </div>

    </div>
    </div>

</body>

</html>