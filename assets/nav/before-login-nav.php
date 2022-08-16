<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar">
        <div class="container-fluid">
            <a href="index.php"><img class="navbar-brand" src="assets/img/mswdo-logo.png" width="50px" height="60px" alt=""> </a>
            <div>MSWDO</div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-lable="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="toggleMobileMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="citizens-charter.php">Citizen's Charter</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="pwd-home.php">PWD</a></li>
                            <li><a class="dropdown-item" href="senior-home.php">Senior Citizens</a></li>
                            <li><a class="dropdown-item" href="#">Solo Parents</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="mandate.php">Mandate</a></li>
                            <li><a class="dropdown-item" href="mission.php">Mission & Vision</a></li>
                            <li><a class="dropdown-item" href="#">Organizational Chart</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="sign-in.php">Sign Up </a>
                    </li>
                </ul>
            </div>
    </nav>
    <!-- JS AND JQUERY CDN -->
    <?php include('assets/js/js-jquery-cdn.html') ?>
    <script type="text/javascript" src="assets/js/main-js.js"></script>
</body>

</html>

<script>

</script>