<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recover Account</title>
    <!-- CSS BOOTSTRAP CDN AND DOWNLOADED FONTS -->
    <?php include('assets/css/css-cdn-fonts.html') ?>
    <!-- CSS Main File -->
    <link href="assets/css/styles.css" rel="stylesheet" />
</head>

<body>
    <?php include('assets/nav/before-login-nav.php') ?>

    <div class="px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center forgot-password">
        <div class="card-body m-5">
            <h3>Forgot Password?</h3>
            <form name="forgot-pass">
                <div class="form-group">
                    <small id="emailHelp" class="form-text text-muted" style="font-weight: bold;">Seems like you've
                        forgotten your password. Please
                        enter your email address to reset your password.</small></br>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="text-right">
                    <a onclick="goBack()" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn" style="background-color: #07AEDB; color: #fff;" onclick="return EmailValidation();">Reset Password</button>
                    <div>
            </form>
        </div>
    </div>

    <script>
        function EmailValidation() {
            if (document.forms['forgot-pass'].email.value == "") {
                alert("Please Fill up the field");
            } else if ($('#email').val().indexOf('@gmail.com') > -1 || $('#email').val().indexOf('@yahoo.com') > -1) {
                alert("Please Check your Email for Recovery Details");
            } else {
                alert("Enter Valid Email Address");
            }
        }

        function goBack() {
            window.history.back();
        }
    </script>

</body>

</html>