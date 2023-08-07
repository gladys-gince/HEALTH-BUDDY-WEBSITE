<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard</title>

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

    <script src="app.js"></script>
</head>

<body>
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
                    <li><a href="login.php" class="nav-link scrollto  active">Login</a></li>
                    <li><a href="#Logout" class="nav-link scrollto">Logout</a></li>
                    <li><a href="./blog.html" class="nav-link scrollto">Blog</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <a href="./profile.php" class="profile-btn scrollto"><span class="d-none d-md-inline"></span>Profile</a>
        </div>
    </header><br><br><br><br>
    <!--END HEADER-->
    <div class="overlay">
        <!-- LOG IN FORM -->
        <form action='bmi.php' method='post'>
            <h1>BMI Calculator</h1>

            <p>Height (in cm)</p>

            <input type="text" id="height">

            <p>Weight (in kg)</p>

            <input type="text" id="weight">

            <button id="btn">Calculate</button>

            <div id="result"></div>
        </form>
    </div>
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