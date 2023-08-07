<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Profile</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body style="background-color: #c6dff5">
    <!--TOP BAR-->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-between">
            <div class="contact-info d-flex align-item-center">
                <i class="bi bi-envelope"></i><a href="mailto:technox404@gmail.com">technox404@gmail.com</a>
            </div>
        </div>
    </div>
    <!--HEADER-->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.html">HEALTH-BUDDY</a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="index.php" class="nav-link scrollto">Home</a></li>
                    <li><a href="dash.php" class="nav-link scrollto">Dashboard</a></li>
                    <li><a href="login.php" class="nav-link scrollto">Login</a></li>
                    <li><a href="#Logout" class="nav-link scrollto">Logout</a></li>
                    <li><a href="./blog.html" class="nav-link scrollto">Blog</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <a href="./profile.php" class="profile-btn scrollto active"><span class="d-none d-md-inline"></span>Profile</a>
        </div>
    </header><br><br>
    <!--END HEADER-->
    <!--PROFILE SECTION-->
    <main id="main">
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Your Profile</span><span class="text-black-50">user@gmail.com</span><span> </span></div>

                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <form action="partials/_addprofile.php" method='POST' class='new'>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="labels">Name</label>
                                    <input type="text" class="form-control" placeholder="First name" name='fname' value="">
                                </div>
                                <div class="col-md-6">
                                    <label class="labels">Surname</label>
                                    <input type="text" class="form-control" value="" placeholder="Surname" name='sname'>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class="labels">Mobile Number</label>
                                    <input type="text" class="form-control" placeholder="Enter phone number" value="" name='phno'>
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Address</label>
                                    <input type="text" class="form-control" placeholder="Enter address" value="" name='addr'>
                                </div>

                            </div>
                            <div class="mt-5 text-center">
                              <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                            </div>
                            </form>
                        </div>


                </div>
            </div>
        </div>
        </div>
        </div>
        <!-- Vendor JS Files -->
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/glightbox/js/glightbox.min.js"></script>
        <script src="vendor/php-email-form/validate.js"></script>
        <script src="vendor/purecounter/purecounter.js"></script>
        <script src="vendor/swiper/swiper-bundle.min.js"></script>

        <!-- Template Main JS File -->
        <script src="js/main.js"></script>
        <!--FOOTER-->
        <footer id="footer">
            <div class="footer-tag">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-lg-6">
                            <div class="footer-info">
                                <h3>HEALTH-BUDDY</h3>
                                <p>Team Techno 404,<br>
                                    Room 806, 8th floor,<br>
                                    Fr. Conceicao Rodrigues College of Engineering,<br>
                                    Bandra West, Mumbai, Maharashtra.</p>
                                <strong>Mobile No.: </strong>+91 9823451902<br>
                                <strong>Email: </strong>technox404@gmail.com<br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>HEALTH-BUDDY</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="#">Team Techno 404</a>
                </div>
            </div>

        </footer>
</body>

</html>
