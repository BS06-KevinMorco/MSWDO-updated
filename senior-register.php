<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.all.min.js"></script>

<?php include_once('database/config.php') ?>

<?php
session_start();

if (isset($_POST['submit'])) {
    $reg_type = ucwords(strtolower($_POST['reg_type']));
    $blood_type = strtoupper($_POST['blood_type']);
    $fname = ucwords($_POST['fname']);
    $mname = ucwords($_POST['mname']);
    $lname = ucwords($_POST['lname']);
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $mobile_no = $_POST['mobile_no'];
    $email = $_POST['email'];
    $gender = ucwords(strtolower($_POST['gender']));
    $civil = ucwords(strtolower($_POST['civil']));
    $region = $_POST['region'];
    $province = $_POST['province'];
    $city = $_POST['city'];
    $barangay = ucwords($_POST['barangay']);
    $house_no = $_POST['house_no'];
    $education = ucwords($_POST['education']);
    $employment_status = ucwords($_POST['employment_status']);
    $employment_type = ucwords($_POST['employment_type']);
    $employer_type = ucwords($_POST['employer_type']);
    $occupation = ucwords($_POST['occupation']);
    $company_name = ucwords($_POST['company_name']);
    $employer_contact = $_POST['employer_contact'];
    $philhealth_no = $_POST['philhealth_no'];
    $sss_no = $_POST['sss_no'];
    $gsis_no = $_POST['gsis_no'];
    $spouse_name = ucwords($_POST['spouse_name']);
    $child_no = ucwords($_POST['child_no']);
    $application_status = ucwords($_POST['application_status']);
    $remarks = ucwords($_POST['remarks']);
    $formal_pic = $_FILES['formal_pic']['name'];
    $med_cert = $_FILES['med_cert']['name'];
    $brgy_cert = $_FILES['brgy_cert']['name'];
    $voter_id = $_FILES['voter_id']['name'];
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $ref_code = substr(str_shuffle($chars), 0, 8);

    $allow = array("jpg", "jpeg", "gif", "png");

    $todir = 'assets/uploads/';

    if (!!$_FILES['formal_pic']['tmp_name']) // is the file uploaded yet?
    {
        $info = explode('.', strtolower($_FILES['formal_pic']['name'])); // whats the extension of the file

        if (in_array(end($info), $allow)) // is this file allowed
        {
            if (move_uploaded_file($_FILES['formal_pic']['tmp_name'], $todir . basename($_FILES['formal_pic']['name']))) {
                // the file has been moved correctly
            }
        } else {
            // error this file ext is not allowed
        }
    }

    if (!!$_FILES['med_cert']['tmp_name']) // is the file uploaded yet?
    {
        $info = explode('.', strtolower($_FILES['med_cert']['name'])); // whats the extension of the file

        if (in_array(end($info), $allow)) // is this file allowed
        {
            if (move_uploaded_file($_FILES['med_cert']['tmp_name'], $todir . basename($_FILES['med_cert']['name']))) {
                // the file has been moved correctly
            }
        } else {
            // error this file ext is not allowed
        }
    }

    if (!!$_FILES['brgy_cert']['tmp_name']) // is the file uploaded yet?
    {
        $info = explode('.', strtolower($_FILES['brgy_cert']['name'])); // whats the extension of the file

        if (in_array(end($info), $allow)) // is this file allowed
        {
            if (move_uploaded_file($_FILES['brgy_cert']['tmp_name'], $todir . basename($_FILES['brgy_cert']['name']))) {
                // the file has been moved correctly
            }
        } else {
            // error this file ext is not allowed
        }
    }

    if (!!$_FILES['voter_id']['tmp_name']) // is the file uploaded yet?
    {
        $info = explode('.', strtolower($_FILES['voter_id']['name'])); // whats the extension of the file

        if (in_array(end($info), $allow)) // is this file allowed
        {
            if (move_uploaded_file($_FILES['voter_id']['tmp_name'], $todir . basename($_FILES['voter_id']['name']))) {
                // the file has been moved correctly
            }
        } else {
            // error this file ext is not allowed
        }
    }




    $sqlinsert = "INSERT INTO senior_info (application_status,ref_code,reg_type,blood_type,fname,mname,lname,dob,age,mobile_no,email,gender,
    civil,region,province,city,barangay,house_no,education,employment_status,employment_type,employer_type,occupation,company_name,
    employer_contact,philhealth_no,sss_no,gsis_no,spouse_name,child_no,formal_pic,med_cert,brgy_cert,voter_id,remarks) 
    VALUES ('$application_status','$ref_code','$reg_type','$blood_type','$fname','$mname','$lname','$dob','$age','$mobile_no',
    '$email','$gender','$civil','$region','$province','$city','$barangay','$house_no','$education','$employment_status',
    '$employment_type','$employer_type','$occupation','$company_name','$employer_contact','$philhealth_no',
    '$sss_no','$gsis_no','$spouse_name','$child_no','$formal_pic','$med_cert','$brgy_cert','$voter_id','$remarks')";

    if (mysqli_query($mysqli, $sqlinsert)) {

        echo '<script>
            setTimeout(function() {
                swal({
                    title: "Account Registered!",
                    text: "Your referral code is ' . $ref_code . '" ,
                    type: "success"
                  }).then(function() {
                      window.location.href = "senior-register.php";
                });
            }, 1000);
        </script>';
    } else {

        die("Unable to insert : " . mysqli_connect_error());
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Senior Citizen Registration</title>
    <!-- CSS BOOTSTRAP CDN AND DOWNLOADED FONTS -->
    <?php include('assets/css/css-cdn-fonts.html') ?>
    <link href="assets/css/styles.css" rel="stylesheet" />
    <style>
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

        @media only screen and (max-width: 480px) {
            .tab-content {
                font-size: 12px;
            }

            #pwd-requirements img {
                width: 100%;
            }
        }
    </style>
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
                    SENIOR ONLINE REGISTRATION
                </div>
                <div class="col-2">
                    <img class="img" style="max-width: 100%;" width="90px" height="90px" src="assets/img/mswdo-logo.png">
                </div>
                <div class="row text-center">
                    <div class="col-6">
                        <a href="senior-register.php" id="link" class="btn btn-outline-success" style="width:50%">Register Now</a>
                    </div>
                    <div class="col-6">
                        <a href="senior_view.php" id="link2" class="btn btn-outline-warning" style="width:50%">Check Registration Status</a>
                    </div>
                </div>
            </div>

            <div class="pwd-register" style="margin-top: 50px;">
                <div class="container">
                    <ul class="nav nav-pills" id="myTab">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#personal-info">Personal Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#pwd-status">Senior Status</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#pwd-family-background">Family Background</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#pwd-requirements">Requirements</a>
                        </li>
                    </ul>
                    <hr>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane container active" id="personal-info">
                        <form action="senior-register.php" id="form" method="post" enctype="multipart/form-data">
                            <div class="col-12 text-center" style="margin-top: 20px; margin-bottom: 20px; font-weight:bolder">
                                SENIOR REGISTRATION FORM
                            </div>
                            <hr>
                            <div class="row jumbotron">
                                <div class="col-sm-6 form-group">
                                    <label for="reg_type">Registration Type</label>
                                    <input type="hidden" name="application_status" value="Pending">
                                    <input type="hidden" name="remarks" value="To be announced">
                                    <select class="form-control form-select" name="reg_type" id="reg-type" onblur="regtypeEmpty();" required>
                                        <option value="" disabled selected>Choose Registration Type</option>
                                        <option value="new">New</option>
                                        <option value="old">Old</option>
                                        <option value="lost">Lost</option>
                                    </select>
                                    <p id="flash-error-regtype" class="flash-error">This field cannot be empty</p>

                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="blood-type">Blood Type</label>
                                    <select class="form-control form-select" name="blood_type" id="blood-type" onblur="bloodtypeEmpty();" required>
                                        <option value="" disabled selected>Choose Blood Type</option>
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
                                <div class="col-sm-4 form-group">
                                    <input type="text" class="form-control" name="fname" id="fname" onblur="fnameEmpty();" placeholder="First name" required>
                                    <p id="flash-error-fname" class="flash-error">This field cannot be empty</p>

                                </div>

                                <div class="col-sm-4 form-group">
                                    <input type="text" class="form-control" name="mname" id="mname" onblur="mnameEmpty();" placeholder="Middle name (Optional)">
                                    <p id="flash-warning-mname" class="flash-warning">You can update this field anytime</p>
                                </div>
                                <div class="col-sm-4 form-group">
                                    <input type="text" class="form-control" name="lname" id="lname" onblur="lnameEmpty();" placeholder="Last name" required>
                                    <p id="flash-error-lname" class="flash-error">This field cannot be empty</p>
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" class="form-control" name="dob" id="dob" onblur="dobEmpty();" placeholder="Date of Birth" required>
                                    <p id="flash-error-dob" class="flash-error">This field cannot be empty</p>
                                </div>

                                <!-- Age -->
                                <input type="text" class="form-control" name="age" id="age" placeholder="Age" hidden>

                                <div class="col-sm-4 form-group">
                                    <label for="mobile-no">Contact Number(Optional)</label>
                                    <input type="text" class="form-control" name="mobile_no" id="mobile-no" onblur="contactEmpty();" placeholder="+09XXXXXXXXX">
                                    <p id="flash-warning-mobile" class="flash-warning">You can update this field anytime</p>
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="email">Email(Optional)</label>
                                    <input type="email" class="form-control" name="email" id="email" onblur="emailEmpty();" placeholder="example@gmail.com">
                                    <p id="flash-warning-email" class="flash-warning">You can update this field anytime</p>
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="gender">Gender</label>
                                    <select class="form-control form-select" name="gender" id="gender" onblur="genderEmpty();" required>
                                        <option value="" disabled selected>Choose your Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    <p id="flash-error-gender" class="flash-error">This field cannot be empty</p>
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="civil">Civil Status</label>
                                    <select class="form-control form-select" name="civil" id="civil" onblur="civilEmpty();" required>
                                        <option value="" disabled selected>Choose your status</option>
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
                                    <input type="text" class="form-control" name="house_no" id="house-no" placeholder="House No./Street" onblur="housenoEmpty();" required>
                                    <p id="flash-error-houseno" class="flash-error">This field cannot be empty</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <div class="text-end">
                                        <a class="btn btn-info float-end btnNext" style="color: #fff !important">Next</a>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <!-- PWD Status -->
                    <div class="tab-pane container fade" id="pwd-status">
                        <div class="col-12 text-center" style="margin-top: 20px; margin-bottom: 20px; font-weight:bolder">
                            SENIOR STATUS
                        </div>
                        <hr>
                        <div class="row jumbotron">
                            <div class="col-sm-4 form-group">
                                <label for="education">Educational Attainment</label>
                                <select class="form-control form-select" name="education" id="education" onblur="educationEmpty();" required>
                                    <option value="" disabled selected>Choose one</option>
                                    <option value="elementary">Elementary Graduate</option>
                                    <option value="junior_high_school">Junior High School Graduate</option>
                                    <option value="senior_high_school">Senior High School (If Applicable) Graduate</option>
                                    <option value="college">College Graduate</option>
                                </select>
                                <p id="flash-error-education" class="flash-error">This field cannot be empty</p>

                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="employment-status">Employment Status</label>
                                <select class="form-control form-select" name="employment_status" id="employment-status" onblur="employmentstatusEmpty();" required>
                                    <option value="" disabled selected>Choose One</option>
                                    <option value="employed">Employed</option>
                                    <option value="unemployed">Unemployed</option>
                                </select>
                                <p id="flash-error-employmentstatus" class="flash-error">This field cannot be empty</p>
                            </div>

                            <div class="col-sm-4 form-group">
                                <label for="employment-type">Type of Employment (If Applicable)</label>
                                <input type="text" class="form-control" name="employment_type" id="employment-type" onblur="employmenttypeEmpty();" placeholder="Type N/A if not employed">
                                <p id="flash-warning-employmenttype" class="flash-warning">You can update this field anytime</p>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="employer-type">Type of Employer (If Applicable)</label>
                                <input type="text" class="form-control" name="employer_type" id="employer-type" onblur="employertypeEmpty();" placeholder="Type N/A if not employed">
                                <p id="flash-warning-employertype" class="flash-warning">You can update this field anytime</p>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="occupation">Occupation (Choose N/A, if none)</label>
                                <select class="form-control form-select" name="occupation" id="occupation" onblur="occupationEmpty();" required>
                                    <option value="" disabled selected>Choose One</option>
                                    <option value="professional">Professional</option>
                                    <option value="non-professional">Non-Professional</option>
                                    <option value="n/a">N/A</option>
                                </select>
                                <p id="flash-error-occupation" class="flash-error">This field cannot be empty</p>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="company-name">Company Name (If Applicable)</label>
                                <input type="text" class="form-control" name="company_name" id="company-name" onblur="companynameEmpty();" placeholder="Type N/A if not employed">
                                <p id="flash-warning-companyname" class="flash-warning">You can update this field anytime</p>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="employer-contact">Employer Contact (If Applicable)</label>
                                <input type="text" class="form-control" name="employer_contact" id="employer-contact" onblur="employercontactEmpty();" placeholder="Type N/A if not employed">
                                <p id="flash-warning-employercontact" class="flash-warning">You can update this field anytime</p>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="philhealth-no">Philhealth Number</label>
                                <input type="text" class="form-control" name="philhealth_no" id="philhealth-no" placeholder="00-000000000-00" onblur="philhealthEmpty();" required>
                                <p id="flash-error-philhealthno" class="flash-error">This field cannot be empty</p>

                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="sss-no">SSS Number</label>
                                <input type="text" class="form-control" name="sss_no" id="sss-no" placeholder="00-0000000-0" onblur="sssEmpty();" required>
                                <p id="flash-error-sssno" class="flash-error">This field cannot be empty</p>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="gsis-no">GSIS Number</label>
                                <input type="text" class="form-control" name="gsis_no" id="gsis-no" placeholder="00000000000" onblur="gsisEmpty();" required>
                                <p id="flash-error-gsisno" class="flash-error">This field cannot be empty</p>
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

                    <!-- SENIOR Family Background -->
                    <div class="tab-pane container fade" id="pwd-family-background">
                        <div class="col-12 text-center" style="margin-top: 20px; margin-bottom: 20px; font-weight:bolder">
                            Family Background
                        </div>
                        <hr>
                        <div class="col-sm-12 form-group">
                            <label for="spouse-name">Spouse Name (If married)</label>
                            <input type="text" class="form-control" name="spouse_name" id="spouse-name" onblur="spousenameEmpty();" placeholder="Type here">
                            <p id="flash-warning-spousename" class="flash-warning">You can update this field anytime</p>
                        </div>
                        <div class="col-sm-12 form-group">
                            <label for="children">Number of Child/Children (Choose N/A, if none)</label>
                            <select class="form-control form-select" name="child_no" id="children" onblur="childrenEmpty();" required>
                                <option value="" disabled selected>Choose Any</option>
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
                        <div class="row">
                            <div class="col">
                                <div class="text-end">
                                    <a class="btn btn-info float-end btnNext" style="color: #fff !important">Next</a>
                                    <a class="btn btn-secondary float-end btnPrev">Previous</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PWD Family Background end-->


                    <div class="tab-pane container fade" id="pwd-requirements">
                        <div class="col-12 text-center" style="margin-top: 20px; margin-bottom: 20px; font-weight:bolder">
                            Requirements
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="formal-pic">Formal Picture</label>
                                <input type="file" name="formal_pic" class="form-control m-4" id="formal-pic" onblur="formalpicEmpty();" required>
                                <img id="formal-pic-prev" class="preview m-4" src="#" alt="Image Preview" width="200px" height="200px" onclick="showImage(this)" />
                                <p id="flash-error-formalpic" class="flash-error">Picture is required</p>

                            </div>
                            <div class="col-6">
                                <label for="med-cert"> Medical Certificate</label>
                                <input type="file" name="med_cert" class="form-control m-4" id="med-cert" onblur="medcertEmpty();" required>
                                <img id="med-cert-pic-prev" class="preview m-4" src="" alt="Image Preview" width="200px" height="200px" onclick="showImage(this)" />
                                <p id="flash-error-medcert" class="flash-error">Medical Certificate is required</p>

                            </div>
                            <div class="col-6">
                                <label for="brgy-cert"> Barangay Certificate</label>
                                <input type="file" name="brgy_cert" class="form-control m-4" id="brgy-cert" onblur="brgycertEmpty();" required>
                                <img id="brgy-cert-pic-prev" class="preview m-4" src="" alt="Image Preview" width="200px" height="200px" onclick="showImage(this)" />
                                <p id="flash-error-brgycert" class="flash-error">Barangay Certificate is required</p>

                            </div>
                            <div class="col-6">
                                <label for="voter-id"> Voter's ID</label>
                                <input type="file" name="voter_id" class="form-control m-4" id="voter-id" onblur="voteridEmpty();" required>
                                <img id="voter-id-pic-prev" class="preview m-4" src="" alt="Image Preview" width="200px" height="200px" onclick="showImage(this)" />
                                <p id="flash-error-voter" class="flash-error">Voters ID is required</p>

                            </div>
                        </div>
                        <div style="margin-top: 50px;">
                            <div class="col-sm-12 form-group mb-0">
                                <input type="submit" name="submit" value="Register" onclick="checkvalueSenior();" class="btn btn-primary">
                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  

    <script>
        function formalpicPrev(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#formal-pic-prev').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#formal-pic").change(function() {
            formalpicPrev(this);
        });
    </script>

    <script>
        function medcertPrev(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#med-cert-pic-prev').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#med-cert").change(function() {
            medcertPrev(this);
        });
    </script>

    <script>
        function brgycertPrev(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#brgy-cert-pic-prev').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#brgy-cert").change(function() {
            brgycertPrev(this);
        });
    </script>

    <script>
        function voteridPrev(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#voter-id-pic-prev').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#voter-id").change(function() {
            voteridPrev(this);
        });
    </script>








    <!-- script type="text/javascript" src="../../jquery.ph-locations.js"></script -->
    <!-- 
    <script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>
    <script type="text/javascript">
        var my_handlers = {

            fill_provinces: function() {

                var region_code = $(this).val();
                $('#province').ph_locations('fetch_list', [{
                    "region_code": region_code
                }]);

            },

            fill_cities: function() {

                var province_code = $(this).val();
                $('#city').ph_locations('fetch_list', [{
                    "province_code": province_code
                }]);
            },


            fill_barangays: function() {

                var city_code = $(this).val();
                $('#barangay').ph_locations('fetch_list', [{
                    "city_code": city_code
                }]);
            }
        };

        $(function() {
            $('#region').on('change', my_handlers.fill_provinces);
            $('#province').on('change', my_handlers.fill_cities);
            $('#city').on('change', my_handlers.fill_barangays);

            $('#region').ph_locations({
                'location_type': 'regions'
            });
            $('#province').ph_locations({
                'location_type': 'provinces'
            });
            $('#city').ph_locations({
                'location_type': 'cities'
            });
            $('#barangay').ph_locations({
                'location_type': 'barangays'
            });

            $('#region').ph_locations('fetch_list');
        });
    </script>-->

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

    <script>
        function checkvalueSenior() {

let reg_type = document.getElementById('reg-type').value; reg_type.trim();
let blood_type = document.getElementById('blood-type').value; blood_type.trim();
let fname = document.getElementById('fname').value; fname.trim();
let lname = document.getElementById('lname').value; lname.trim();
let dob = document.getElementById('dob').value; dob.trim();
let gender = document.getElementById('gender').value; gender.trim();
let civil = document.getElementById('civil').value; civil.trim();
let barangay = document.getElementById('barangay').value; barangay.trim();
let house_no = document.getElementById('house-no').value; house_no.trim();
let education = document.getElementById('education').value; education.trim();
let employment_status = document.getElementById('employment-status').value; employment_status.trim();
let occupation = document.getElementById('occupation').value; occupation.trim();
let philhealth_no = document.getElementById('philhealth-no').value; philhealth_no.trim();
let sss_no = document.getElementById('sss-no').value; sss_no.trim();
let gsis_no = document.getElementById('gsis-no').value; gsis_no.trim();
let children = document.getElementById('children').value; children.trim();
let formal_pic = document.getElementById('formal-pic').value; formal_pic.trim();
let med_cert = document.getElementById('med-cert').value; med_cert.trim();
let brgy_cert = document.getElementById('brgy-cert').value; brgy_cert.trim();
let voter_id = document.getElementById('voter-id').value; voter_id.trim();




/*if (fname == "" && lname == "") {
    document.getElementById("flash-error-fname").style.display = 'block';
    $("#fname").addClass("invalid-input");
    document.getElementById("flash-error-lname").style.display = 'block';
    $("#lname").addClass("invalid-input");
    if (fname != "" && lname != "" ) {
        document.getElementById("flash-error-fname").style.display = 'none';
        $("#fname").removeClass("invalid-input");
        document.getElementById("flash-error-lname").style.display = 'none';
        $("#lname").removeClass("invalid-input");
        return true;
    }
} */
if (reg_type == "") {
    document.getElementById("flash-error-regtype").style.display = 'block';
    $("#reg-type").addClass("invalid-input");
}
else {
    document.getElementById("flash-error-fname").style.display = 'none';
    $("#fname").removeClass("invalid-input");
}

if (blood_type == "") {
    document.getElementById("flash-error-bloodtype").style.display = 'block';
    $("#blood-type").addClass("invalid-input");
}
else {
    document.getElementById("flash-error-fname").style.display = 'none';
    $("#fname").removeClass("invalid-input");
}

if (fname == "") {
    document.getElementById("flash-error-fname").style.display = 'block';
    $("#fname").addClass("invalid-input");
}
else {
    document.getElementById("flash-error-fname").style.display = 'none';
    $("#fname").removeClass("invalid-input");
}

if (lname == "") {
    document.getElementById("flash-error-lname").style.display = 'block';
    $("#lname").addClass("invalid-input");
} else {
    document.getElementById("flash-error-lname").style.display = 'none';
    $("#lname").removeClass("invalid-input");
}

if (dob == "") {
    document.getElementById("flash-error-dob").style.display = 'block';
    $("#dob").addClass("invalid-input");
} else {
    document.getElementById("flash-error-dob").style.display = 'none';
    $("#dob").removeClass("invalid-input")
}

if (gender == "") {
    document.getElementById("flash-error-gender").style.display = 'block';
    $("#gender").addClass("invalid-input");
} else {
    document.getElementById("flash-error-gender").style.display = 'none';
    $("#gender").removeClass("invalid-input")
}

if (civil == "") {
    document.getElementById("flash-error-civil").style.display = 'block';
    $("#civil").addClass("invalid-input");
} else {
    document.getElementById("flash-error-civil").style.display = 'none';
    $("#civil").removeClass("invalid-input")
}

if (barangay == "") {
    document.getElementById("flash-error-barangay").style.display = 'block';
    $("#barangay").addClass("invalid-input");
} else {
    document.getElementById("flash-error-barangay").style.display = 'none';
    $("#barangay").removeClass("invalid-input")
}

if (house_no == "") {
    document.getElementById("flash-error-houseno").style.display = 'block';
    $("#house-no").addClass("invalid-input");
} else {
    document.getElementById("flash-error-barangay").style.display = 'none';
    $("#house-no").removeClass("invalid-input")
}

if (education == "") {
    document.getElementById("flash-error-education").style.display = 'block';
    $("#education").addClass("invalid-input");
} else {
    document.getElementById("flash-error-education").style.display = 'none';
    $("#education").removeClass("invalid-input")
}

if (employment_status == "") {
    document.getElementById("flash-error-employmentstatus").style.display = 'block';
    $("#employment-status").addClass("invalid-input");
} else {
    document.getElementById("flash-error-employmentstatus").style.display = 'none';
    $("#employment-status").removeClass("invalid-input")
}

if (occupation == "") {
    document.getElementById("flash-error-occupation").style.display = 'block';
    $("#occupation").addClass("invalid-input");
} else {
    document.getElementById("flash-error-occupation").style.display = 'none';
    $("#occupation").removeClass("invalid-input")
}

if (philhealth_no == "") {
    document.getElementById("flash-error-philhealthno").style.display = 'block';
    $("#philhealth-no").addClass("invalid-input");
} else {
    document.getElementById("flash-error-philhealthno").style.display = 'none';
    $("#philhealth-no").removeClass("invalid-input")
}

if (sss_no == "") {
    document.getElementById("flash-error-sssno").style.display = 'block';
    $("#sss-no").addClass("invalid-input");
} else {
    document.getElementById("flash-error-sssno").style.display = 'none';
    $("#sss-no").removeClass("invalid-input")
}

if (gsis_no == "") {
    document.getElementById("flash-error-gsisno").style.display = 'block';
    $("#gsis-no").addClass("invalid-input");
} else {
    document.getElementById("flash-error-gsisno").style.display = 'none';
    $("#gsis-no").removeClass("invalid-input")
}

if (children == "") {
    document.getElementById("flash-error-children").style.display = 'block';
    $("#children").addClass("invalid-input");
} else {
    document.getElementById("flash-error-children").style.display = 'none';
    $("#children").removeClass("invalid-input")
}


if (formal_pic == "") {
    document.getElementById("flash-error-formalpic").style.display = 'block';
    $("#formal-pic").addClass("invalid-input");
} else {
    document.getElementById("flash-error-formalpic").style.display = 'none';
    $("#formal-pic").removeClass("invalid-input")
}

if (med_cert == "") {
    document.getElementById("flash-error-medcert").style.display = 'block';
    $("#med-cert").addClass("invalid-input");
} else {
    document.getElementById("flash-error-medcert").style.display = 'none';
    $("#med-cert").removeClass("invalid-input")
}

if (brgy_cert == "") {
    document.getElementById("flash-error-brgycert").style.display = 'block';
    $("#brgy-cert").addClass("invalid-input");
} else {
    document.getElementById("flash-error-brgycert").style.display = 'none';
    $("#brgy-cert").removeClass("invalid-input")
}

if (voter_id == "") {
    document.getElementById("flash-error-voter").style.display = 'block';
    $("#voter-id").addClass("invalid-input");
} else {
    document.getElementById("flash-error-voter").style.display = 'none';
    $("#voter-id").removeClass("invalid-input")
}

if(reg_type =="" || blood_type=="" || fname=="" || lname=="" || disability_type=="" || dob=="" || gender=="" || civil=="" || barangay==""
|| house_no=="" || education=="" || employment_status=="" || occupation=="" || philhealth_no=="" || sss_no=="" || gsis_no==""
|| children=="" || formal_pic=="" || med_cert==""
|| brgy_cert=="" || voter_id=="" ){
    setTimeout(function() {
        swal({
            title: "Some Fields Are Empty",
            text: "Please Fill Up the Required Fields",
            type: "error"
          })
    }, 1000);
}
}
    </script>


</body>

</html>