<?php 
 include_once('database/config.php');

 if(ISSET($_POST['update'])){
    $senior_id = $_POST['senior_id'];
    $application_status = ucwords(strtolower($_POST['application_status']));
    $reg_type = ucwords(strtolower($_POST['reg_type']));
    $blood_type = strtoupper($_POST['blood_type']);
    $fname = ucwords($_POST['fname']);
    $mname = ucwords($_POST['mname']);
    $lname = ucwords($_POST['lname']);
    $dob = $_POST['dob'];
    $mobile_no = $_POST['mobile_no'];
    $email = $_POST['email'];
    $gender = ucwords(strtolower($_POST['gender']));
    $civil = ucwords(strtolower($_POST['civil']));
    $region = $_POST['region'];
    $province = $_POST['province'];
    $city = $_POST['city'];
    $barangay = ucwords($_POST['barangay']);
    $house_no = $_POST['house_no'];
    $education = ucwords(strtolower($_POST['education']));
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
    $child_no = ucwords(strtolower($_POST['child_no']));
    $formal_pic = $_FILES['formal_pic']['name'];
    $med_cert = $_FILES['med_cert']['name'];
    $brgy_cert = $_FILES['brgy_cert']['name'];
    $voter_id = $_FILES['voter_id']['name'];
    $remarks = ucwords(strtolower($_POST['remarks']));

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
 
    mysqli_query($mysqli, "UPDATE senior_info SET application_status='$application_status', reg_type = '$reg_type', blood_type = '$blood_type', fname = '$fname', mname = '$mname', lname = '$lname',
     dob = '$dob', mobile_no = '$mobile_no', email = '$email' , gender = '$gender', civil = '$civil',
     region = '$region', province = '$province' , city = '$city',barangay = '$barangay', house_no = '$house_no' , education = '$education', employment_status = '$employment_status' , employment_type = '$employment_type',
     employer_type = '$employer_type' , occupation = '$occupation' , company_name = '$company_name' , employer_contact = '$employer_contact', philhealth_no = '$philhealth_no', 
     sss_no = '$sss_no' , gsis_no = '$gsis_no', spouse_name = '$spouse_name',
     child_no = '$child_no',formal_pic = '$formal_pic' , med_cert = '$med_cert' , brgy_cert = '$brgy_cert', voter_id = '$voter_id', remarks='$remarks' WHERE senior_id = '$senior_id'");
    header("location: senior-requests.php");
  }
?>        