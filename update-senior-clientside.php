<?php 
 include_once('database/config.php');

 if(ISSET($_POST['update'])){
    $senior_id = $_POST['senior_id'];
    $mname = ucwords($_POST['mname']);
    $mobile_no = $_POST['mobile_no'];
    $email = $_POST['email'];
    $employment_status = ucwords($_POST['employment_status']);
    $employment_type = ucwords($_POST['employment_type']);
    $employer_type = ucwords($_POST['employer_type']);
    $occupation = ucwords($_POST['occupation']);
    $company_name = ucwords($_POST['company_name']);
    $employer_contact = $_POST['employer_contact'];
    $spouse_name = ucwords($_POST['spouse_name']);
    $child_no = ucwords($_POST['child_no']);

    mysqli_query($mysqli, "UPDATE senior_info SET mname = '$mname',mobile_no = '$mobile_no', email = '$email' ,
     employment_status = '$employment_status' , employment_type = '$employment_type',
     employer_type = '$employer_type' , occupation = '$occupation' , company_name = '$company_name' , employer_contact = '$employer_contact',
     spouse_name = '$spouse_name', child_no = '$child_no' WHERE senior_id = '$senior_id'");
    header("location: senior_view.php");
  }
?>        