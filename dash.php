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
</head>

<body style="background-image: linear-gradient(-225deg, #64bff3 0%, #ffffff 100%)">
      <!--TOP BAR-->
  <div id=" topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
        <div class="contact-info d-flex align-item-center">
            <i class="bi bi-envelope"></i><a href="mailto:technox404@gmail.com">technox404@gmail.com</a>
        </div>
    </div>
    </div>
    <!--HEADER-->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.php">HEALTH-BUDDY</a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="index.php" class="nav-link scrollto">Home</a></li>
                    <li><a href="dash.php" class="nav-link scrollto  active">Dashboard</a></li>
                    <li><a href="login.php" class="nav-link scrollto">Login</a></li>
                    <li><a href="#Logout" class="nav-link scrollto">Logout</a></li>
                    <li><a href="./blog.html" class="nav-link scrollto">Blog</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <a href="./profile.php" class="profile-btn scrollto"><span class="d-none d-md-inline"></span>Profile</a>
        </div>
    </header>
    <!--END HEADER-->
    <main id="main">
        <!--DASHBOARD SECTION-->

        <section id="appointment" class="appointment section-bg">
            <div class="container"><br><br><br>
                <h1 style="text-align: center"><a href="dashboard.php">DASHBOARD</a></h1><br>
                <p><b>Set new medicines reminder?</b> </p>
                <form action="partials/_medicines.php" method="post">
                    <div class="setmedreminder">
                        <label for="medname">Name of medicine? </label>
                        <input type="text" class="form-control" name="medname">
                    </div>
                    <div class="setmedreminder">
                        <label for="whentotake">When to take?</label>
                        <input type="time" class="form-control" name="whentotake">
                    </div>
                    <div class="setmedreminder">
                        <label for="doctorname">Prescribed by?</label>
                        <input type="text" class="form-control" name="docname">
                    </div> <br>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form><br><br><br>
                <p> <b>Set new doctors visit reminder?</b></p>
                <form action="partials/_doctorvisit.php" method="post">
                    <div class="setdocreminder">
                        <label for="docname">Name of doctor? </label>
                        <input type="text" class="form-control" name="docname">
                    </div>
                    <div class="setdocreminder">
                        <label for="whentotake">When to visit?</label>
                        <input type="date" class="form-control" name="whentovisit">
                    </div>
                    <div class="setdocreminder">
                        <label for="doctorname">At what time?</label>
                        <input type="time" class="form-control" name="visittime">
                    </div> <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </td><br><br>
                <td rowspan="2">
                    <p><b>Your existing reminders: </b></p>
                    Medicines reminder: <br>
                    <?php require 'partials/_printingmeds.php' ?><br>
                    Doctor's Visits:<br>
                    <?php require 'partials/_printingdoc.php' ?>
                </td>
                </tr>
                </table><br><br>
                <p> <b>Upload reports?</b></p>
                <form action="partials/_reports.php" method="POST" enctype="multipart/form-data">
                    <label for="">Choose Your PDF File</label><br>
                    <input id="pdf" type="file" name="pdf" value="" required><br><br>
                    <input id="upload" type="submit" name="submit" value="Upload">
                </form>
            </div>
        </section>
    </main>
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
