<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.all.min.js"></script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senior Citizen Home</title>
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
                    SENIOR CITIZEN ONLINE REGISTRATION
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
        </div>

    </div>

    

</body>

</html>