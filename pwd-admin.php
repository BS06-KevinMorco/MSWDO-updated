<?php
include_once('database/config.php');
session_start();



$result = mysqli_query($mysqli, "SELECT * FROM users WHERE user_id = '" . $_SESSION['user_id'] . "'");
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
    <title>PWD Information</title>
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

        .active {
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

        .bg-green {
            background: lightgreen;
        }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase"><img class="img me-2" style="max-width: 100%;" width="30px" height="30px" src="assets/img/mswdo-logo.png">MWSDO</div>
            <div class="list-group list-group-flush my-3">
                <li class="active">
                    <a href="pwd-admin.php" class="list-group-item bg-transparent second-text border-bottom active"><i class="fa-solid fa-house-user me-2"></i>Dashboard</a>
                </li>
                <li class="">
                    <a href="pwd-requests.php" class="list-group-item bg-transparent second-text border-bottom fw-bold"><i class="fa-solid fa-wheelchair me-2"></i>PWD Requests</a>
                </li>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Pila PWD Federation</h2>
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
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <?php
                        $pwd_no = "select COUNT(pwd_id) from pwd_info";
                        $result = mysqli_query($mysqli, $pwd_no);
                        while ($row = mysqli_fetch_array($result)) {

                            $count_pwd = $row['COUNT(pwd_id)'];
                        }
                        ?>
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">Total: <?php echo "$count_pwd" ?></h3>
                                <p class="fs-5">PWD</p>
                            </div>
                            <i class="fa-solid fa-wheelchair fs-1 primary-text border rounded-full bg-violet p-3"></i>
                        </div>
                    </div>
                    <?php
                    $pwd_pending = "select COUNT(pwd_id) from pwd_info WHERE application_status = 'Pending' ";
                    $result = mysqli_query($mysqli, $pwd_pending);
                    while ($row = mysqli_fetch_array($result)) {

                        $count_pending = $row['COUNT(pwd_id)'];
                    }
                    ?>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">Total: <?php echo "$count_pending" ?></h3>
                                <p class="fs-5">Pending Requests</p>
                            </div>
                            <i class="fa-solid fa-book-open fs-1 primary-text border rounded-full bg-orange p-3"></i>
                        </div>
                    </div>
                    <?php
                    $pwd_approve = "select COUNT(pwd_id) from pwd_info WHERE application_status = 'Approve' ";
                    $result = mysqli_query($mysqli, $pwd_approve);
                    while ($row = mysqli_fetch_array($result)) {

                        $count_approve = $row['COUNT(pwd_id)'];
                    }
                    ?>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">Total: <?php echo "$count_approve" ?></h3>
                                <p class="fs-5">Approved Requests</p>
                            </div>
                            <i class="fa-solid fa-check fs-1 primary-text border rounded-full bg-green p-3"></i>
                        </div>
                    </div>
                    <?php
                    $pwd_reject = "select COUNT(pwd_id) from pwd_info WHERE application_status = 'Rejected' ";
                    $result = mysqli_query($mysqli, $pwd_reject);
                    while ($row = mysqli_fetch_array($result)) {

                        $count_reject = $row['COUNT(pwd_id)'];
                    }
                    ?>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">Total: <?php echo "$count_reject" ?></h3>
                                <p class="fs-5">Rejected Requests</p>
                            </div>
                            <i class="fa-solid fa-x fs-1 primary-text border rounded-full bg-red p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Total Number of PWD Applicants per Barangay</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover" id="sort">
                            <thead>
                                <tr class="heading">
                                    <th scope="col">Barangay</th>
                                    <th scope="col">PWD</th>
                                    <th scope="col">Pending</th>
                                    <th scope="col">Approved</th>
                                    <th scope="col">Rejected</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $aplaya_no = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Aplaya' ";
                                $result = mysqli_query($mysqli, $aplaya_no);
                                while ($row = mysqli_fetch_array($result)) {

                                    $aplaya_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $aplaya_no_pending = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Aplaya' AND application_status = 'Pending' ";
                                $result = mysqli_query($mysqli, $aplaya_no_pending);
                                while ($row = mysqli_fetch_array($result)) {

                                    $aplaya_pending_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $aplaya_no_approve = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Aplaya' AND application_status = 'Approve' ";
                                $result = mysqli_query($mysqli, $aplaya_no_approve);
                                while ($row = mysqli_fetch_array($result)) {

                                    $aplaya_approve_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $aplaya_no_reject = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Aplaya' AND application_status = 'Rejected' ";
                                $result = mysqli_query($mysqli, $aplaya_no_reject);
                                while ($row = mysqli_fetch_array($result)) {

                                    $aplaya_reject_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <tr>
                                    <th scope="row">Aplaya</th>
                                    <td><?php echo "$aplaya_fcount" ?></td>
                                    <td><?php echo "$aplaya_pending_fcount" ?></td>
                                    <td><?php echo "$aplaya_approve_fcount" ?></td>
                                    <td><?php echo "$aplaya_reject_fcount" ?></td>
                                </tr>

                                <?php
                                $bagong_pook_no = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Bagong Pook' ";
                                $result = mysqli_query($mysqli, $bagong_pook_no);
                                while ($row = mysqli_fetch_array($result)) {

                                    $bagong_pook_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <?php
                                $bagong_pook_no_pending = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Bagong Pook' AND application_status = 'Pending' ";
                                $result = mysqli_query($mysqli, $bagong_pook_no_pending);
                                while ($row = mysqli_fetch_array($result)) {

                                    $bagong_pook_pending_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $bagong_pook_no_approve = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Bagong Pook' AND application_status = 'Approve' ";
                                $result = mysqli_query($mysqli, $bagong_pook_no_approve);
                                while ($row = mysqli_fetch_array($result)) {

                                    $bagong_pook_approve_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $bagong_pook_no_reject = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Bagong Pook' AND application_status = 'Rejected' ";
                                $result = mysqli_query($mysqli, $bagong_pook_no_reject);
                                while ($row = mysqli_fetch_array($result)) {

                                    $bagong_pook_reject_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <tr>
                                    <th scope="row">Bagong Pook</th>
                                    <td><?php echo "$bagong_pook_fcount" ?></td>
                                    <td><?php echo "$bagong_pook_pending_fcount" ?></td>
                                    <td><?php echo "$bagong_pook_approve_fcount" ?></td>
                                    <td><?php echo "$bagong_pook_reject_fcount" ?></td>
                                </tr>

                                <?php
                                $bukal_no = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Bukal' ";
                                $result = mysqli_query($mysqli, $bukal_no);
                                while ($row = mysqli_fetch_array($result)) {

                                    $bukal_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>

                                <?php
                                $bukal_no_pending = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Bukal' AND application_status = 'Pending' ";
                                $result = mysqli_query($mysqli, $bukal_no_pending);
                                while ($row = mysqli_fetch_array($result)) {

                                    $bukal_pending_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $bukal_no_approve = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Bukal' AND application_status = 'Approve' ";
                                $result = mysqli_query($mysqli, $bukal_no_approve);
                                while ($row = mysqli_fetch_array($result)) {

                                    $bukal_approve_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $bukal_no_reject = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Bukal' AND application_status = 'Rejected' ";
                                $result = mysqli_query($mysqli, $bukal_no_reject);
                                while ($row = mysqli_fetch_array($result)) {

                                    $bukal_reject_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>

                                <tr>
                                    <th scope="row">Bukal</th>
                                    <td><?php echo "$bukal_fcount" ?></td>
                                    <td><?php echo "$bukal_pending_fcount" ?></td>
                                    <td><?php echo "$bukal_approve_fcount" ?></td>
                                    <td><?php echo "$bukal_reject_fcount" ?></td>
                                </tr>

                                <?php
                                $bulilan_norte_no = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Bulilan Norte' ";
                                $result = mysqli_query($mysqli, $bulilan_norte_no);
                                while ($row = mysqli_fetch_array($result)) {

                                    $bulilan_norte_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <?php
                                $bulilan_norte_no_pending = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Bulilan Norte' AND application_status = 'Pending' ";
                                $result = mysqli_query($mysqli, $bulilan_norte_no_pending);
                                while ($row = mysqli_fetch_array($result)) {

                                    $bulilan_norte_pending_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $bulilan_norte_no_approve = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Bulilan Norte' AND application_status = 'Approve' ";
                                $result = mysqli_query($mysqli, $bulilan_norte_no_approve);
                                while ($row = mysqli_fetch_array($result)) {

                                    $bulilan_norte_approve_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $bulilan_norte_no_reject = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Bulilan Norte' AND application_status = 'Rejected' ";
                                $result = mysqli_query($mysqli, $bulilan_norte_no_reject);
                                while ($row = mysqli_fetch_array($result)) {

                                    $bulilan_norte_reject_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <tr>
                                    <th scope="row">Bulilan Norte</th>
                                    <td><?php echo "$bulilan_norte_fcount" ?></td>
                                    <td><?php echo "$bulilan_norte_pending_fcount" ?></td>
                                    <td><?php echo "$bulilan_norte_approve_fcount" ?></td>
                                    <td><?php echo "$bulilan_norte_reject_fcount" ?></td>
                                </tr>

                                <?php
                                $bulilan_sur_no = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Bulilan Sur' ";
                                $result = mysqli_query($mysqli, $bulilan_sur_no);
                                while ($row = mysqli_fetch_array($result)) {

                                    $bulilan_sur_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <?php
                                $bulilan_sur_no_pending = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Bulilan Sur' AND application_status = 'Pending' ";
                                $result = mysqli_query($mysqli, $bulilan_sur_no_pending);
                                while ($row = mysqli_fetch_array($result)) {

                                    $bulilan_sur_pending_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $bulilan_sur_no_approve = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Bulilan Sur' AND application_status = 'Approve' ";
                                $result = mysqli_query($mysqli, $bulilan_sur_no_approve);
                                while ($row = mysqli_fetch_array($result)) {

                                    $bulilan_sur_approve_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $bulilan_sur_no_reject = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Bulilan Sur' AND application_status = 'Rejected' ";
                                $result = mysqli_query($mysqli, $bulilan_sur_no_reject);
                                while ($row = mysqli_fetch_array($result)) {

                                    $bulilan_sur_reject_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <tr>
                                    <th scope="row">Bulilan Sur</th>
                                    <td><?php echo "$bulilan_sur_fcount" ?></td>
                                    <td><?php echo "$bulilan_sur_pending_fcount" ?></td>
                                    <td><?php echo "$bulilan_sur_approve_fcount" ?></td>
                                    <td><?php echo "$bulilan_sur_reject_fcount" ?></td>
                                </tr>

                                <?php
                                $concepcion_no = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Concepcion' ";
                                $result = mysqli_query($mysqli, $concepcion_no);
                                while ($row = mysqli_fetch_array($result)) {

                                    $concepcion_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <?php
                                $concepcion_no_pending = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Concepcion' AND application_status = 'Pending' ";
                                $result = mysqli_query($mysqli, $concepcion_no_pending);
                                while ($row = mysqli_fetch_array($result)) {

                                    $concepcion_pending_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $concepcion_no_approve = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Concepcion' AND application_status = 'Approve' ";
                                $result = mysqli_query($mysqli, $concepcion_no_approve);
                                while ($row = mysqli_fetch_array($result)) {

                                    $concepcion_approve_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $concepcion_no_reject = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Concepcion' AND application_status = 'Rejected' ";
                                $result = mysqli_query($mysqli, $concepcion_no_reject);
                                while ($row = mysqli_fetch_array($result)) {

                                    $concepcion_reject_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <tr>
                                    <th scope="row">Concepcion</th>
                                    <td><?php echo "$concepcion_fcount" ?></td>
                                    <td><?php echo "$concepcion_pending_fcount" ?></td>
                                    <td><?php echo "$concepcion_approve_fcount" ?></td>
                                    <td><?php echo "$concepcion_reject_fcount" ?></td>
                                </tr>

                                <?php
                                $labuin_no = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Labuin' ";
                                $result = mysqli_query($mysqli, $labuin_no);
                                while ($row = mysqli_fetch_array($result)) {

                                    $labuin_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <?php
                                $labuin_no_pending = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Labuin' AND application_status = 'Pending' ";
                                $result = mysqli_query($mysqli, $labuin_no_pending);
                                while ($row = mysqli_fetch_array($result)) {

                                    $labuin_pending_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $labuin_no_approve = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Labuin' AND application_status = 'Approve' ";
                                $result = mysqli_query($mysqli, $labuin_no_approve);
                                while ($row = mysqli_fetch_array($result)) {

                                    $labuin_approve_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $labuin_no_reject = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Labuin' AND application_status = 'Rejected' ";
                                $result = mysqli_query($mysqli, $labuin_no_reject);
                                while ($row = mysqli_fetch_array($result)) {

                                    $labuin_reject_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <tr>
                                    <th scope="row">Labuin</th>
                                    <td><?php echo "$labuin_fcount" ?></td>
                                    <td><?php echo "$labuin_pending_fcount" ?></td>
                                    <td><?php echo "$labuin_approve_fcount" ?></td>
                                    <td><?php echo "$labuin_reject_fcount" ?></td>
                                </tr>

                                <?php
                                $linga_no = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Linga' ";
                                $result = mysqli_query($mysqli, $linga_no);
                                while ($row = mysqli_fetch_array($result)) {

                                    $linga_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <?php
                                $linga_no_pending = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Linga' AND application_status = 'Pending' ";
                                $result = mysqli_query($mysqli, $linga_no_pending);
                                while ($row = mysqli_fetch_array($result)) {

                                    $linga_pending_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $linga_no_approve = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Linga' AND application_status = 'Approve' ";
                                $result = mysqli_query($mysqli, $linga_no_approve);
                                while ($row = mysqli_fetch_array($result)) {

                                    $linga_approve_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $linga_no_reject = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Linga' AND application_status = 'Rejected' ";
                                $result = mysqli_query($mysqli, $linga_no_reject);
                                while ($row = mysqli_fetch_array($result)) {

                                    $linga_reject_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <tr>
                                    <th scope="row">Linga</th>
                                    <td><?php echo "$linga_fcount" ?></td>
                                    <td><?php echo "$linga_pending_fcount" ?></td>
                                    <td><?php echo "$linga_approve_fcount" ?></td>
                                    <td><?php echo "$linga_reject_fcount" ?></td>
                                </tr>

                                <?php
                                $masico_no = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Masico' ";
                                $result = mysqli_query($mysqli, $masico_no);
                                while ($row = mysqli_fetch_array($result)) {

                                    $masico_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <?php
                                $masico_no_pending = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Masico' AND application_status = 'Pending' ";
                                $result = mysqli_query($mysqli, $masico_no_pending);
                                while ($row = mysqli_fetch_array($result)) {

                                    $masico_pending_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $masico_no_approve = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Masico' AND application_status = 'Approve' ";
                                $result = mysqli_query($mysqli, $masico_no_approve);
                                while ($row = mysqli_fetch_array($result)) {

                                    $masico_approve_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $masico_no_reject = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Masico' AND application_status = 'Rejected' ";
                                $result = mysqli_query($mysqli, $masico_no_reject);
                                while ($row = mysqli_fetch_array($result)) {

                                    $masico_reject_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <tr>
                                    <th scope="row">Masico</th>
                                    <td><?php echo "$masico_fcount" ?></td>
                                    <td><?php echo "$masico_pending_fcount" ?></td>
                                    <td><?php echo "$masico_approve_fcount" ?></td>
                                    <td><?php echo "$masico_reject_fcount" ?></td>
                                </tr>

                                <?php
                                $mojon_no = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Mojon' ";
                                $result = mysqli_query($mysqli, $mojon_no);
                                while ($row = mysqli_fetch_array($result)) {

                                    $mojon_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <?php
                                $mojon_no_pending = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Mojon' AND application_status = 'Pending' ";
                                $result = mysqli_query($mysqli, $mojon_no_pending);
                                while ($row = mysqli_fetch_array($result)) {

                                    $mojon_pending_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $mojon_no_approve = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Mojon' AND application_status = 'Approve' ";
                                $result = mysqli_query($mysqli, $mojon_no_approve);
                                while ($row = mysqli_fetch_array($result)) {

                                    $mojon_approve_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $mojon_no_reject = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Mojon' AND application_status = 'Rejected' ";
                                $result = mysqli_query($mysqli, $mojon_no_reject);
                                while ($row = mysqli_fetch_array($result)) {

                                    $mojon_reject_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <tr>
                                    <th scope="row">Mojon</th>
                                    <td><?php echo "$mojon_fcount" ?></td>
                                    <td><?php echo "$mojon_pending_fcount" ?></td>
                                    <td><?php echo "$mojon_approve_fcount" ?></td>
                                    <td><?php echo "$mojon_reject_fcount" ?></td>
                                </tr>

                                <?php
                                $pansol_no = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Pansol' ";
                                $result = mysqli_query($mysqli, $pansol_no);
                                while ($row = mysqli_fetch_array($result)) {

                                    $pansol_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <?php
                                $pansol_no_pending = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Pansol' AND application_status = 'Pending' ";
                                $result = mysqli_query($mysqli, $pansol_no_pending);
                                while ($row = mysqli_fetch_array($result)) {

                                    $pansol_pending_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $pansol_no_approve = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Pansol' AND application_status = 'Approve' ";
                                $result = mysqli_query($mysqli, $pansol_no_approve);
                                while ($row = mysqli_fetch_array($result)) {

                                    $pansol_approve_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $pansol_no_reject = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Pansol' AND application_status = 'Rejected' ";
                                $result = mysqli_query($mysqli, $pansol_no_reject);
                                while ($row = mysqli_fetch_array($result)) {

                                    $pansol_reject_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <tr>
                                    <th scope="row">Pansol</th>
                                    <td><?php echo "$pansol_fcount" ?></td>
                                    <td><?php echo "$pansol_pending_fcount" ?></td>
                                    <td><?php echo "$pansol_approve_fcount" ?></td>
                                    <td><?php echo "$pansol_reject_fcount" ?></td>
                                </tr>

                                <?php
                                $pinagbayanan_no = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Pinagbayanan' ";
                                $result = mysqli_query($mysqli, $pinagbayanan_no);
                                while ($row = mysqli_fetch_array($result)) {

                                    $pinagbayanan_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <?php
                                $pinagbayanan_no_pending = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Pinagbayanan' AND application_status = 'Pending' ";
                                $result = mysqli_query($mysqli, $pinagbayanan_no_pending);
                                while ($row = mysqli_fetch_array($result)) {

                                    $pinagbayanan_pending_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $pinagbayanan_no_approve = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Pinagbayanan' AND application_status = 'Approve' ";
                                $result = mysqli_query($mysqli, $pinagbayanan_no_approve);
                                while ($row = mysqli_fetch_array($result)) {

                                    $pinagbayanan_approve_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $pinagbayanan_no_reject = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Pinagbayanan' AND application_status = 'Rejected' ";
                                $result = mysqli_query($mysqli, $pinagbayanan_no_reject);
                                while ($row = mysqli_fetch_array($result)) {

                                    $pinagbayanan_reject_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <tr>
                                    <th scope="row">Pinagbayanan</th>
                                    <td><?php echo "$pinagbayanan_fcount" ?></td>
                                    <td><?php echo "$pinagbayanan_pending_fcount" ?></td>
                                    <td><?php echo "$pinagbayanan_approve_fcount" ?></td>
                                    <td><?php echo "$pinagbayanan_reject_fcount" ?></td>
                                </tr>

                                <?php
                                $sanantonio_no = "select COUNT(pwd_id) from pwd_info WHERE barangay ='San Antonio' ";
                                $result = mysqli_query($mysqli, $sanantonio_no);
                                while ($row = mysqli_fetch_array($result)) {

                                    $sanantonio_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <?php
                                $sanantonio_no_pending = "select COUNT(pwd_id) from pwd_info WHERE barangay ='San Antonio' AND application_status = 'Pending' ";
                                $result = mysqli_query($mysqli, $sanantonio_no_pending);
                                while ($row = mysqli_fetch_array($result)) {

                                    $sanantonio_pending_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $sanantonio_no_approve = "select COUNT(pwd_id) from pwd_info WHERE barangay ='San Antonio' AND application_status = 'Approve' ";
                                $result = mysqli_query($mysqli, $sanantonio_no_approve);
                                while ($row = mysqli_fetch_array($result)) {

                                    $sanantonio_approve_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $sanantonio_no_reject = "select COUNT(pwd_id) from pwd_info WHERE barangay ='San Antonio' AND application_status = 'Rejected' ";
                                $result = mysqli_query($mysqli, $sanantonio_no_reject);
                                while ($row = mysqli_fetch_array($result)) {

                                    $sanantonio_reject_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <tr>
                                    <th scope="row">San Antonio</th>
                                    <td><?php echo "$sanantonio_fcount" ?></td>
                                    <td><?php echo "$sanantonio_pending_fcount" ?></td>
                                    <td><?php echo "$sanantonio_approve_fcount" ?></td>
                                    <td><?php echo "$sanantonio_reject_fcount" ?></td>
                                </tr>

                                <?php
                                $sanmiguel_no = "select COUNT(pwd_id) from pwd_info WHERE barangay ='San Miguel' ";
                                $result = mysqli_query($mysqli, $sanmiguel_no);
                                while ($row = mysqli_fetch_array($result)) {

                                    $sanmiguel_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <?php
                                $sanmiguel_no_pending = "select COUNT(pwd_id) from pwd_info WHERE barangay ='San Miguel' AND application_status = 'Pending' ";
                                $result = mysqli_query($mysqli, $sanmiguel_no_pending);
                                while ($row = mysqli_fetch_array($result)) {

                                    $sanmiguel_pending_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $sanmiguel_no_approve = "select COUNT(pwd_id) from pwd_info WHERE barangay ='San Miguel' AND application_status = 'Approve' ";
                                $result = mysqli_query($mysqli, $sanmiguel_no_approve);
                                while ($row = mysqli_fetch_array($result)) {

                                    $sanmiguel_approve_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $sanmiguel_no_reject = "select COUNT(pwd_id) from pwd_info WHERE barangay ='San Miguel' AND application_status = 'Rejected' ";
                                $result = mysqli_query($mysqli, $sanmiguel_no_reject);
                                while ($row = mysqli_fetch_array($result)) {

                                    $sanmiguel_reject_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <tr>
                                    <th scope="row">San Miguel</th>
                                    <td><?php echo "$sanmiguel_fcount" ?></td>
                                    <td><?php echo "$sanmiguel_pending_fcount" ?></td>
                                    <td><?php echo "$sanmiguel_approve_fcount" ?></td>
                                    <td><?php echo "$sanmiguel_reject_fcount" ?></td>
                                </tr>

                                <?php
                                $santa_clara_norte_no = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Santa Clara Norte' ";
                                $result = mysqli_query($mysqli, $santa_clara_norte_no);
                                while ($row = mysqli_fetch_array($result)) {

                                    $santa_clara_norte_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <?php
                                $santa_clara_no_pending = "select COUNT(pwd_id) from pwd_info WHERE barangay ='San Clara Norte' AND application_status = 'Pending' ";
                                $result = mysqli_query($mysqli, $santa_clara_no_pending);
                                while ($row = mysqli_fetch_array($result)) {

                                    $santa_clara_norte_pending_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $santa_clara_no_approve = "select COUNT(pwd_id) from pwd_info WHERE barangay ='San Clara Norte' AND application_status = 'Approve' ";
                                $result = mysqli_query($mysqli, $santa_clara_no_approve);
                                while ($row = mysqli_fetch_array($result)) {

                                    $santa_clara_norte_approve_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $santa_clara_no_reject = "select COUNT(pwd_id) from pwd_info WHERE barangay ='San Clara Norte' AND application_status = 'Rejected' ";
                                $result = mysqli_query($mysqli, $santa_clara_no_reject);
                                while ($row = mysqli_fetch_array($result)) {

                                    $santa_clara_norte_reject_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <tr>
                                    <th scope="row">Santa Clara Norte</th>
                                    <td><?php echo "$santa_clara_norte_fcount" ?></td>
                                    <td><?php echo "$santa_clara_norte_pending_fcount" ?></td>
                                    <td><?php echo "$santa_clara_norte_approve_fcount" ?></td>
                                    <td><?php echo "$santa_clara_norte_reject_fcount" ?></td>
                                </tr>

                                <?php
                                $santa_clara_sur_no = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Santa Clara Sur' ";
                                $result = mysqli_query($mysqli, $santa_clara_sur_no);
                                while ($row = mysqli_fetch_array($result)) {

                                    $santa_clara_sur_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <?php
                                $santa_clara_sur_pending = "select COUNT(pwd_id) from pwd_info WHERE barangay ='San Clara Sur' AND application_status = 'Pending' ";
                                $result = mysqli_query($mysqli, $santa_clara_sur_pending);
                                while ($row = mysqli_fetch_array($result)) {

                                    $santa_clara_sur_pending_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $santa_clara_sur_approve = "select COUNT(pwd_id) from pwd_info WHERE barangay ='San Clara Sur' AND application_status = 'Approve' ";
                                $result = mysqli_query($mysqli, $santa_clara_sur_approve);
                                while ($row = mysqli_fetch_array($result)) {

                                    $santa_clara_sur_approve_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $santa_clara_sur_reject = "select COUNT(pwd_id) from pwd_info WHERE barangay ='San Clara Sur' AND application_status = 'Rejected' ";
                                $result = mysqli_query($mysqli, $santa_clara_sur_reject);
                                while ($row = mysqli_fetch_array($result)) {

                                    $santa_clara_sur_reject_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <tr>
                                    <th scope="row">Santa Clara Sur</th>
                                    <td><?php echo "$santa_clara_sur_fcount" ?></td>
                                    <td><?php echo "$santa_clara_sur_pending_fcount" ?></td>
                                    <td><?php echo "$santa_clara_sur_approve_fcount" ?></td>
                                    <td><?php echo "$santa_clara_sur_reject_fcount" ?></td>
                                </tr>

                                <?php
                                $tubuan_no = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Tubuan' ";
                                $result = mysqli_query($mysqli, $tubuan_no);
                                while ($row = mysqli_fetch_array($result)) {

                                    $tubuan_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <?php
                                $tubuan_no_pending = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Tubuan' AND application_status = 'Pending' ";
                                $result = mysqli_query($mysqli, $tubuan_no_pending);
                                while ($row = mysqli_fetch_array($result)) {

                                    $tubuan_pending_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $tubuan_no_approve = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Tubuan' AND application_status = 'Approve' ";
                                $result = mysqli_query($mysqli, $tubuan_no_approve);
                                while ($row = mysqli_fetch_array($result)) {

                                    $tubuan_approve_fcount = $row['COUNT(pwd_id)'];
                                }

                                ?>
                                <?php
                                $tubuan_no_reject = "select COUNT(pwd_id) from pwd_info WHERE barangay ='Tubuan' AND application_status = 'Rejected' ";
                                $result = mysqli_query($mysqli, $tubuan_no_reject);
                                while ($row = mysqli_fetch_array($result)) {

                                    $tubuan_reject_fcount = $row['COUNT(pwd_id)'];
                                }
                                ?>
                                <tr>
                                    <th scope="row">Tubuan</th>
                                    <td><?php echo "$tubuan_fcount" ?></td>
                                    <td><?php echo "$tubuan_pending_fcount" ?></td>
                                    <td><?php echo "$tubuan_approve_fcount" ?></td>
                                    <td><?php echo "$tubuan_reject_fcount" ?></td>
                                </tr>

                                <?php
                                /*
                        $sql = "select * from pwd_info";
                        $result = mysqli_query($mysqli, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['barangay'] . "</td>";
                            echo "<td>" . $row['fname'] . "</td>";
                            echo "<td>" . $row['mname'] . "</td>";
                            echo "<td>" . $row['lname'] . "</td>";
                            echo "</tr>";
                        }*/
                                ?>
                            </tbody>
                        </table>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src='https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
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
</body>

</html>