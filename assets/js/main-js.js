$('a').on('click', function () {
    $('a').removeClass('active');
    $(this).addClass('active');
});

$(document).ready(function () {
    $(window).on("scroll", function () {
        var wn = $(window).scrollTop();
        if (wn > 1) {
            $("#navbar").css("background", "#fff");
            $("#navbar").css("color", "black");
            $("#navbar .nav-link").css("color", "black");
        } else {
            $("#navbar").css("background", "transparent");
            $("#navbar").css("color", "#fff");
            $("#navbar .nav-link").css("color", "#fff");
        }
    });
});

/* <!-- <script type="text/javascript" src="../../jquery.ph-locations.js"></script -->
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
    </script>*/

$(document).ready(function () {
    $("#dob").change(function () {
        var dob = $("#dob").val();

        if (dob != null || dob != "") {
            $("#age").val(getAge(dob));
        }
    });

    function getAge(birth) {
        ageMS = Date.parse(Date()) - Date.parse(birth);
        age = new Date();
        age.setTime(ageMS);
        ageYear = age.getFullYear() - 1970;

        return ageYear;
    }
});

$(document).ready(function () {

    const nextBtn = document.querySelectorAll(".btnNext");
    const prevBtn = document.querySelectorAll(".btnPrev");

    nextBtn.forEach(function (item, index) {
        item.addEventListener('click', function () {
            let id = index + 1;
            let tabElement = document.querySelectorAll("#myTab li a")[id];
            var lastTab = new bootstrap.Tab(tabElement);
            lastTab.show();
        });
    });

    prevBtn.forEach(function (item, index) {
        item.addEventListener('click', function () {
            let id = index;
            let tabElement = document.querySelectorAll("#myTab li a")[id];
            var lastTab = new bootstrap.Tab(tabElement);
            lastTab.show();
        });
    });
});


function regtypeEmpty() {
    $(document).ready(function () {
        let reg_type = document.getElementById('reg-type').value; reg_type.trim();

        if (reg_type == "") {
            document.getElementById("flash-error-regtype").style.display = 'block';
            $("#reg-type").addClass("invalid-input");

            return false;
        } else if (reg_type != "") {
            document.getElementById("flash-error-regtype").style.display = 'none';
            $("#reg-type").removeClass("invalid-input");
            return true;
        }

    });

}

function bloodtypeEmpty() {
    $(document).ready(function () {
        let blood_type = document.getElementById('blood-type').value; blood_type.trim();

        if (blood_type == "") {
            document.getElementById("flash-error-bloodtype").style.display = 'block';
            $("#blood-type").addClass("invalid-input");

            return false;
        } else if (blood_type != "") {
            document.getElementById("flash-error-bloodtype").style.display = 'none';
            $("#blood-type").removeClass("invalid-input");
            return true;
        }

    });
}


function fnameEmpty() {
    $(document).ready(function () {
        let fname = document.getElementById('fname').value; fname.trim();

        if (fname == "") {
            document.getElementById("flash-error-fname").style.display = 'block';
            $("#fname").addClass("invalid-input");

            return false;
        } else if (fname != "") {
            document.getElementById("flash-error-fname").style.display = 'none';
            $("#fname").removeClass("invalid-input");
            return true;
        }

    });

}

function mnameEmpty() {
    $(document).ready(function () {
        let mname = document.getElementById('mname').value; mname.trim();

        if (mname == "") {
            document.getElementById("flash-warning-mname").style.display = 'block';
            $("#mname").addClass("conditional-input");

            return false;
        } else if (mname != "") {
            document.getElementById("flash-warning-mname").style.display = 'none';
            $("#mname").removeClass("conditional-input");
            return true;
        }

    });

}

function lnameEmpty() {
    $(document).ready(function () {
        let lname = document.getElementById('lname').value; lname.trim();

        if (lname == "") {
            document.getElementById("flash-error-lname").style.display = 'block';
            $("#lname").addClass("invalid-input");

            return false;
        } else if (lname != "") {
            document.getElementById("flash-error-lname").style.display = 'none';
            $("#lname").removeClass("invalid-input");
            return true;
        }

    });

}

function disabilitytypeEmpty() {
    $(document).ready(function () {
        let disability_type = document.getElementById('disability-type').value; disability_type.trim();

        if (disability_type == "") {
            document.getElementById("flash-error-disabilitytype").style.display = 'block';
            $("#disability-type").addClass("invalid-input");

            return false;
        } else if (disability_type != "") {
            document.getElementById("flash-error-disabilitytype").style.display = 'none';
            $("#disability-type").removeClass("invalid-input");
            return true;
        }

    });

}

function dobEmpty() {
    $(document).ready(function () {
        let dob = document.getElementById('dob').value; dob.trim();

        if (dob == "") {
            document.getElementById("flash-error-dob").style.display = 'block';
            $("#dob").addClass("invalid-input");

            return false;
        } else if (dob != "") {
            document.getElementById("flash-error-dob").style.display = 'none';
            $("#dob").removeClass("invalid-input");
            return true;
        }

    });

}

function contactEmpty() {
    $(document).ready(function () {
        let mobile_no = document.getElementById('mobile-no').value; mobile_no.trim();

        if (mobile_no == "") {
            document.getElementById("flash-warning-mobile").style.display = 'block';
            $("#mobile-no").addClass("conditional-input");

            return false;
        } else if (mobile_no != "") {
            document.getElementById("flash-warning-mobile").style.display = 'none';
            $("#mobile-no").removeClass("conditional-input");
            return true;
        }

    });

}

function emailEmpty() {
    $(document).ready(function () {
        let email = document.getElementById('email').value; email.trim();

        if (email == "") {
            document.getElementById("flash-warning-email").style.display = 'block';
            $("#email").addClass("conditional-input");

            return false;
        } else if (email != "") {
            document.getElementById("flash-warning-email").style.display = 'none';
            $("#email").removeClass("conditional-input");
            return true;
        }

    });

}

function genderEmpty() {
    $(document).ready(function () {
        let gender = document.getElementById('gender').value; gender.trim();

        if (gender == "") {
            document.getElementById("flash-error-gender").style.display = 'block';
            $("#gender").addClass("invalid-input");

            return false;
        } else if (gender != "") {
            document.getElementById("flash-error-gender").style.display = 'none';
            $("#gender").removeClass("invalid-input");
            return true;
        }

    });

}

function civilEmpty() {
    $(document).ready(function () {
        let civil = document.getElementById('civil').value; civil.trim();

        if (civil == "") {
            document.getElementById("flash-error-civil").style.display = 'block';
            $("#civil").addClass("invalid-input");

            return false;
        } else if (civil != "") {
            document.getElementById("flash-error-civil").style.display = 'none';
            $("#civil").removeClass("invalid-input");
            return true;
        }

    });

}

function barangayEmpty() {
    $(document).ready(function () {
        let barangay = document.getElementById('barangay').value; barangay.trim();

        if (barangay == "") {
            document.getElementById("flash-error-barangay").style.display = 'block';
            $("#barangay").addClass("invalid-input");

            return false;
        } else if (barangay != "") {
            document.getElementById("flash-error-barangay").style.display = 'none';
            $("#barangay").removeClass("invalid-input");
            return true;
        }

    });

}

function housenoEmpty() {
    $(document).ready(function () {
        let house_no = document.getElementById('house-no').value; house_no.trim();

        if (house_no == "") {
            document.getElementById("flash-error-houseno").style.display = 'block';
            $("#house-no").addClass("invalid-input");

            return false;
        } else if (house_no != "") {
            document.getElementById("flash-error-houseno").style.display = 'none';
            $("#house-no").removeClass("invalid-input");
            return true;
        }

    });

}

function educationEmpty() {
    $(document).ready(function () {
        let education = document.getElementById('education').value; education.trim();

        if (education == "") {
            document.getElementById("flash-error-education").style.display = 'block';
            $("#education").addClass("invalid-input");

            return false;
        } else if (education != "") {
            document.getElementById("flash-error-education").style.display = 'none';
            $("#education").removeClass("invalid-input");
            return true;
        }

    });

}

function employmentstatusEmpty() {
    $(document).ready(function () {
        let employment_status = document.getElementById('employment-status').value; employment_status.trim();

        if (employment_status == "") {
            document.getElementById("flash-error-employmentstatus").style.display = 'block';
            $("#employment-status").addClass("invalid-input");

            return false;
        } else if (employment_status != "") {
            document.getElementById("flash-error-employmentstatus").style.display = 'none';
            $("#employment-status").removeClass("invalid-input");
            return true;
        }

    });

}

function employmenttypeEmpty() {
    $(document).ready(function () {
        let employment_type = document.getElementById('employment-type').value; employment_type.trim();

        if (employment_type == "") {
            document.getElementById("flash-warning-employmenttype").style.display = 'block';
            $("#employment-type").addClass("conditional-input");

            return false;
        } else if (employment_type != "") {
            document.getElementById("flash-warning-employmenttype").style.display = 'none';
            $("#employment-type").removeClass("conditional-input");
            return true;
        }

    });

}

function employertypeEmpty() {
    $(document).ready(function () {
        let employer_type = document.getElementById('employer-type').value; employer_type.trim();

        if (employer_type == "") {
            document.getElementById("flash-warning-employertype").style.display = 'block';
            $("#employer-type").addClass("conditional-input");

            return false;
        } else if (employer_type != "") {
            document.getElementById("flash-warning-employertype").style.display = 'none';
            $("#employer-type").removeClass("conditional-input");
            return true;
        }

    });

}

function occupationEmpty() {
    $(document).ready(function () {
        let occupation = document.getElementById('occupation').value; occupation.trim();

        if (occupation == "") {
            document.getElementById("flash-error-occupation").style.display = 'block';
            $("#occupation").addClass("invalid-input");

            return false;
        } else if (occupation != "") {
            document.getElementById("flash-error-occupation").style.display = 'none';
            $("#occupation").removeClass("invalid-input");
            return true;
        }

    });

}

function companynameEmpty() {
    $(document).ready(function () {
        let company_name = document.getElementById('company-name').value; company_name.trim();

        if (company_name == "") {
            document.getElementById("flash-warning-companyname").style.display = 'block';
            $("#company-name").addClass("conditional-input");

            return false;
        } else if (company_name != "") {
            document.getElementById("flash-warning-companyname").style.display = 'none';
            $("#company-name").removeClass("conditional-input");
            return true;
        }

    });

}

function employercontactEmpty() {
    $(document).ready(function () {
        let employer_contact = document.getElementById('employer-contact').value; employer_contact.trim();

        if (employer_contact == "") {
            document.getElementById("flash-warning-employercontact").style.display = 'block';
            $("#employer-contact").addClass("conditional-input");

            return false;
        } else if (employer_contact != "") {
            document.getElementById("flash-warning-employercontact").style.display = 'none';
            $("#employer-contact").removeClass("conditional-input");
            return true;
        }

    });

}

function philhealthEmpty() {
    $(document).ready(function () {
        let philhealth_no = document.getElementById('philhealth-no').value; philhealth_no.trim();

        if (philhealth_no == "") {
            document.getElementById("flash-error-philhealthno").style.display = 'block';
            $("#philhealth-no").addClass("invalid-input");

            return false;
        } else if (philhealth_no != "") {
            document.getElementById("flash-error-philhealthno").style.display = 'none';
            $("#philhealth-no").removeClass("invalid-input");
            return true;
        }

    });

}

function sssEmpty() {
    $(document).ready(function () {
        let sss_no = document.getElementById('sss-no').value; sss_no.trim();

        if (sss_no == "") {
            document.getElementById("flash-error-sssno").style.display = 'block';
            $("#sss-no").addClass("invalid-input");

            return false;
        } else if (sss_no != "") {
            document.getElementById("flash-error-sssno").style.display = 'none';
            $("#sss-no").removeClass("invalid-input");
            return true;
        }

    });

}

function gsisEmpty() {
    $(document).ready(function () {
        let gsis_no = document.getElementById('gsis-no').value; gsis_no.trim();

        if (gsis_no == "") {
            document.getElementById("flash-error-gsisno").style.display = 'block';
            $("#gsis-no").addClass("invalid-input");
            return false;
        } else if (gsis_no != "") {
            document.getElementById("flash-error-gsisno").style.display = 'none';
            $("#gsis-no").removeClass("invalid-input");
            return true;
        }

    });

}

function fathernameEmpty() {
    $(document).ready(function () {
        let father_name = document.getElementById('father-name').value; father_name.trim();

        if (father_name == "") {
            document.getElementById("flash-error-fathername").style.display = 'block';
            $("#father-name").addClass("invalid-input");
            return false;
        } else if (father_name != "") {
            document.getElementById("flash-error-fathername").style.display = 'none';
            $("#father-name").removeClass("invalid-input");
            return true;
        }

    });

}

function mothernameEmpty() {
    $(document).ready(function () {
        let mother_name = document.getElementById('mother-name').value; mother_name.trim();

        if (mother_name == "") {
            document.getElementById("flash-error-mothername").style.display = 'block';
            $("#mother-name").addClass("invalid-input");
            return false;
        } else if (mother_name != "") {
            document.getElementById("flash-error-mothername").style.display = 'none';
            $("#mother-name").removeClass("invalid-input");
            return true;
        }

    });

}

function spousenameEmpty() {
    $(document).ready(function () {
        let spouse_name = document.getElementById('spouse-name').value; spouse_name.trim();

        if (spouse_name == "") {
            document.getElementById("flash-warning-spousename").style.display = 'block';
            $("#spouse-name").addClass("conditional-input");
            return false;
        } else if (spouse_name != "") {
            document.getElementById("flash-warning-spousename").style.display = 'none';
            $("#spouse-name").removeClass("conditional-input");
            return true;
        }

    });

}

function childrenEmpty() {
    $(document).ready(function () {
        let children = document.getElementById('children').value; children.trim();

        if (children == "") {
            document.getElementById("flash-error-children").style.display = 'block';
            $("#children").addClass("invalid-input");
            return false;
        } else if (children != "") {
            document.getElementById("flash-error-children").style.display = 'none';
            $("#children").removeClass("invalid-input");
            return true;
        }

    });

}

function guardiannameEmpty() {
    $(document).ready(function () {
        let guardian_name = document.getElementById('guardian-name').value; guardian_name.trim();

        if (guardian_name == "") {
            document.getElementById("flash-error-guardianname").style.display = 'block';
            $("#guardian-name").addClass("invalid-input");
            return false;
        } else if (guardian_name != "") {
            document.getElementById("flash-error-guardianname").style.display = 'none';
            $("#guardian-name").removeClass("invalid-input");
            return true;
        }

    });

}

function guardiancontactEmpty() {
    $(document).ready(function () {
        let guardian_contact = document.getElementById('guardian-contact').value; guardian_contact.trim();

        if (guardian_contact == "") {
            document.getElementById("flash-error-guardiancontact").style.display = 'block';
            $("#guardian-contact").addClass("invalid-input");
            return false;
        } else if (guardian_contact != "") {
            document.getElementById("flash-error-guardiancontact").style.display = 'none';
            $("#guardian-contact").removeClass("invalid-input");
            return true;
        }

    });

}

function guardiancontactEmpty() {
    $(document).ready(function () {
        let guardian_contact = document.getElementById('guardian-contact').value; guardian_contact.trim();

        if (guardian_contact == "") {
            document.getElementById("flash-error-guardiancontact").style.display = 'block';
            $("#guardian-contact").addClass("invalid-input");
            return false;
        } else if (guardian_contact != "") {
            document.getElementById("flash-error-guardiancontact").style.display = 'none';
            $("#guardian-contact").removeClass("invalid-input");
            return true;
        }

    });

}

function formalpicEmpty() {
    $(document).ready(function () {
        let formal_pic = document.getElementById('formal-pic').value; formal_pic.trim();

        if (formal_pic == "") {
            document.getElementById("flash-error-formalpic").style.display = 'block';
            $("#formal-pic").addClass("invalid-input");
            return false;
        } else if (formal_pic != "") {
            document.getElementById("flash-error-formalpic").style.display = 'none';
            $("#formal-pic").removeClass("invalid-input");
            return true;
        }

    });

}

function medcertEmpty() {
    $(document).ready(function () {
        let med_cert = document.getElementById('med-cert').value; med_cert.trim();

        if (med_cert == "") {
            document.getElementById("flash-error-medcert").style.display = 'block';
            $("#med-cert").addClass("invalid-input");
            return false;
        } else if (med_cert != "") {
            document.getElementById("flash-error-medcert").style.display = 'none';
            $("#med-cert").removeClass("invalid-input");
            return true;
        }

    });

}

function brgycertEmpty() {
    $(document).ready(function () {
        let brgy_cert = document.getElementById('brgy-cert').value; brgy_cert.trim();

        if (brgy_cert == "") {
            document.getElementById("flash-error-brgycert").style.display = 'block';
            $("#brgy-cert").addClass("invalid-input");
            return false;
        } else if (brgy_cert != "") {
            document.getElementById("flash-error-brgycert").style.display = 'none';
            $("#brgy-cert").removeClass("invalid-input");
            return true;
        }

    });

}

function voteridEmpty() {
    $(document).ready(function () {
        let voter_id = document.getElementById('voter-id').value; voter_id.trim();

        if (voter_id == "") {
            document.getElementById("flash-error-voter").style.display = 'block';
            $("#voter-id").addClass("invalid-input");
            return false;
        } else if (voter_id != "") {
            document.getElementById("flash-error-voter").style.display = 'none';
            $("#voter-id").removeClass("invalid-input");
            return true;
        }

    });

}


$(document).ready(function () {
    $('form').submit(function () {
        var mname = $('#mname').val();
        if (mname == '') {
            $('#mname').val('N/A');
        }
        var contact = $('#mobile-no').val();
        if (contact == '') {
            $('#mobile-no').val('N/A');
        }
        var email = $('#email').val();
        if (email == '') {
            $('#email').val('N/A@gmail.com');
        }

        var employment_type = $('#employment-type').val();
        if (employment_type == '') {
            $('#employment-type').val('N/A');
        }

        var employer_type = $('#employer-type').val();
        if (employer_type == '') {
            $('#employer-type').val('N/A');
        }

        var occupation = $('#occupation').val();
        if (occupation == '') {
            $('#occupation').val('N/A');
        }

        var company_name = $('#company-name').val();
        if (company_name == '') {
            $('#company-name').val('N/A');
        }

        var employer_contact = $('#employer-contact').val();
        if (employer_contact == '') {
            $('#employer-contact').val('N/A');
        }

        var spouse_name = $('#spouse-name').val();
        if (spouse_name == '') {
            $('#spouse-name').val('N/A');
        }

        var children = $('#children').val();
        if (children == '') {
            $('#children').val('N/A');
        }

        var application_status = $('#application-status').val();
        if (application_status == '') {
            $('#application-status').val('Pending');
        }

        var application_status = $('#application-status').val();
        if (application_status == '') {
            $('#application-status').val('Pending');
        }

        var remarks = $('#remarks').val();
        if (remarks == '') {
            $('#remarks').val('To be determined');
        }

    });
});



function checkvalue() {

    let reg_type = document.getElementById('reg-type').value; reg_type.trim();
    let blood_type = document.getElementById('blood-type').value; blood_type.trim();
    let fname = document.getElementById('fname').value; fname.trim();
    let lname = document.getElementById('lname').value; lname.trim();
    let disability_type = document.getElementById('disability-type').value; disability_type.trim();
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
    let father_name = document.getElementById('father-name').value; father_name.trim();
    let mother_name = document.getElementById('mother-name').value; mother_name.trim();
    let children = document.getElementById('children').value; children.trim();
    let guardian_name = document.getElementById('guardian-name').value; guardian_name.trim();
    let guardian_contact = document.getElementById('guardian-contact').value; guardian_contact.trim();
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

    if (disability_type == "") {
        document.getElementById("flash-error-disabilitytype").style.display = 'block';
        $("#disability-type").addClass("invalid-input");
    } else {
        document.getElementById("flash-error-lname").style.display = 'none';
        $("#disability-type").removeClass("invalid-input");
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

    if (father_name == "") {
        document.getElementById("flash-error-fathername").style.display = 'block';
        $("#father-name").addClass("invalid-input");
    } else {
        document.getElementById("flash-error-fathername").style.display = 'none';
        $("#father-name").removeClass("invalid-input")
    }

    if (mother_name == "") {
        document.getElementById("flash-error-mothername").style.display = 'block';
        $("#mother-name").addClass("invalid-input");
    } else {
        document.getElementById("flash-error-mothername").style.display = 'none';
        $("#mother-name").removeClass("invalid-input")
    }

    if (children == "") {
        document.getElementById("flash-error-children").style.display = 'block';
        $("#children").addClass("invalid-input");
    } else {
        document.getElementById("flash-error-children").style.display = 'none';
        $("#children").removeClass("invalid-input")
    }

    if (guardian_name == "") {
        document.getElementById("flash-error-guardianname").style.display = 'block';
        $("#guardian-name").addClass("invalid-input");
    } else {
        document.getElementById("flash-error-guardianname").style.display = 'none';
        $("#guardian-name").removeClass("invalid-input")
    }

    if (guardian_contact == "") {
        document.getElementById("flash-error-guardiancontact").style.display = 'block';
        $("#guardian-contact").addClass("invalid-input");
    } else {
        document.getElementById("flash-error-guardiancontact").style.display = 'none';
        $("#guardian-contact").removeClass("invalid-input")
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
    || father_name=="" || mother_name=="" || children=="" || guardian_name=="" || guardian_contact=="" || formal_pic=="" || med_cert==""
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

function validateviewRecord(){
    swal({ 
          title: "No Records Found!",
          text: "Please Try Again",
          type: "error" 
    },
         function(){
            //event to perform on click of ok button of sweetalert
    });
}

function wrongCredentials(){
    swal({ 
          title: "Wrong Username or Password!",
          text: "Please Try Again",
          type: "error" 
    },
         function(){
            //event to perform on click of ok button of sweetalert
    });
}
