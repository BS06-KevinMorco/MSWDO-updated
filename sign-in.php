<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.all.min.js"></script>

<?php
include_once('database/config.php');
session_start();

if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if a user exists with given username & password

    $sql = "select * from users where username='" . $username . "' AND password='" . $password . "' ";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($result);



    // Check If usertype exists, store username in session and redirect to user dashboard
    if ($row !== null && $row["usertype"] == "pwd_admin") {
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $_SESSION["usertype"] = $row['position'];;
        header("location:pwd-admin.php");
    } else if ($row !== null && $row["usertype"] == "senior_admin") {
        $_SESSION['id'] = $row['id'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['mname'] = $row['mname'];
        $_SESSION['lname'] = $row['lname'];
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['bdate'] = $row['bdate'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['contact_no'] = $row['contact_no'];
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        header("location:senior-admin.php");
    } else if ($row !== null && $row["usertype"] == "student") {
        $_SESSION['id'] = $row['id'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['mname'] = $row['mname'];
        $_SESSION['lname'] = $row['lname'];
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['bdate'] = $row['bdate'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['contact_no'] = $row['contact_no'];
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        header("location:student_profile.php");
    } else if ($row !== null && $row["usertype"] == "superuser") {
        $_SESSION['id'] = $row['id'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['mname'] = $row['mname'];
        $_SESSION['lname'] = $row['lname'];
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['bdate'] = $row['bdate'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['contact_no'] = $row['contact_no'];
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        header("location:super_user_profile.php");
    } else {
        $_SESSION['errMsg'] = "Invalid Username or Password";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- CSS Main File -->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <style>
        .warning {
            background: linear-gradient(0deg, rgba(242, 209, 213, .5), rgba(242, 209, 213, .5));
            padding: 5px 5px 5px 5px;
            color: red;
            text-align: center;
            font-weight: 600;
        }
    </style>

</head>

<body class="sign-in">
    <?php include('assets/nav/before-login-nav.php') ?>

    <div class="form-container">
        <h3>Login Your Account</h3>
        <div class="credential">
            <form action="sign-in.php" method="POST">
            <?php if (!empty($_SESSION['errMsg'])) {
                        echo '<div class="warning">';
                        echo $_SESSION['errMsg'];
                        echo '</div></br>';
                    } ?>
                    <?php unset($_SESSION['errMsg']); ?>
                <div>
                    <input type="text" class="credential" name="username" id="username" required>
                    <label>Username</label>
                </div>
                <div>
                    <input type="password" class="credential" name="password" id="password" required>
                    <label>Password</label>

                </div>
        </div>

        <input type="submit" value="Log In" name="login" class="btn btn-primary" id="login">
        </form>
        <div class="footer">
            <label>Don't have an account?</label><a href="register.php">Sign Up</a></br>
            <a href="forgot-password.php">Forgot Password?</a>
        </div>
    </div>

    <script>
        $('a').on('click', function() {
            $('a').removeClass('active');
            $(this).addClass('active');
        });
    </script>

    <!-- scroll navbar color -->
    <script>
        $(document).ready(function() {
            $(window).on("scroll", function() {
                var wn = $(window).scrollTop();
                if (wn > 1) {
                    $(".navbar").css("background", "#fff");
                    $(".navbar").css("color", "black");
                    $(".nav-link").css("color", "black");
                } else {
                    $(".navbar").css("background", "transparent");
                    $(".navbar").css("color", "#fff");
                    $(".nav-link").css("color", "#fff");
                }
            });
        });
    </script>

</body>

</html>