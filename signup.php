<!DOCTYPE html>
<html lang="en">
<?php
    include 'signupPhp.php';
?>
<head>
        <script>
            // localStorage.setItem("name", "dhruvi");
            function storeData() {
                localStorage.setItem("email", document.myForm.email.value);
                localStorage.setItem("pwd", document.myForm.password.value);
            }
        </script>

    <meta charset="utf-8">
    <title>CakeZone - Cake Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/f1866aebf7.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <div class="col-lg-2 text-left py-3" style="margin-left: 70px;">
            <div class="d-inline-flex align-items-center justify-content-center">
                <a href="index.php" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary font-primary"><i class="fa fa-birthday-cake fs-1 text-white me-3"></i>CakeZone</h1>
                </a>
            </div>
        </div>
        <!-- <a href="index.php" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-primary me-3"></i>CakeZone</h1>
        </a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto mx-lg-auto py-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About Us</a>
                <a href="menu.php" class="nav-item nav-link">Menu & Pricing</a>
                <a href="team.php" class="nav-item nav-link">Master Chefs</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="service.php" class="dropdown-item">Our Service</a>
                        <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact Us</a>
            </div>
        </div>
        <div class="col-lg-1 text-right py-3 mx-n5">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa-solid fa-cart-shopping text-primary display-6"></i>
                </a>
                <div class="dropdown-menu m-0">
                    <a href="#" class="dropdown-item">1</a>
                    <a href="#" class="dropdown-item">2</a>
                    <a href="#" class="dropdown-item">3</a>
                    <a href="#" class="dropdown-item">4</a>
                    <a href="#" class="dropdown-item">5</a>
                </div>
            </div>
        </div>
        <div class="rounded-circle col-lg-1 mx-5" style="width: 45px; height: 45px; background-color: #FFF;">
        <i class="fa-solid fa-user m-2" style="font-size: 30px; color: #000;"></i>
        <?php
            #$sql = "select image from user where id = 1";
            #$result = mysqli_query($conn, $sql);

            #while ($res = mysqli_fetch_assoc($result)) {
            ?>
                <!-- <img src="img/
                <p?= $res['image'] ?> Change here******
                " style="width:100%; height:100%; border-radius: 50%;"> -->
            <?php
            #}
            ?>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-dark bg-img p-5 mb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-uppercase text-white">Sign up here!!!</h1>
                <!-- <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">Contact</a> -->
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid contact position-relative px-5" style="margin-top: 90px;">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <i class="bi bi-geo-alt fs-1 text-white"></i>
                        <h6 class="text-uppercase my-2">Our Office</h6>
                        <span>123 Street, New York, USA</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <i class="bi bi-envelope-open fs-1 text-white"></i>
                        <h6 class="text-uppercase my-2">Email Us</h6>
                        <span>info@example.com</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <i class="bi bi-phone-vibrate fs-1 text-white"></i>
                        <h6 class="text-uppercase my-2">Call Us</h6>
                        <span>+012 345 6789</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form method="post" name="myForm" id="myForm" action="signup.php" enctype="multipart/form-data">
                        <div class="row g-3">
                            <!-- <div class="col-sm-6">
                                <input type="text" class="form-control bg-light border-0 px-4" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" class="form-control bg-light border-0 px-4" placeholder="Your Email" style="height: 55px;">
                            </div> -->
                            <div class="col-sm-12">
                                <input type="text" class="form-control bg-light border-0 px-4"  name="uname" placeholder="Enter name" style="height: 55px;">
                            </div>
                            <div class="col-sm-12">
                                <input type="text" a class="form-control bg-light border-0 px-4 py-3" rows="4" name="email" placeholder="Enter email">
                            </div>
                            <div class="col-sm-12">
                                <input type="password" class="form-control bg-light border-0 px-4" name="password" placeholder="Enter password" style="height: 55px;">
                            </div>
                            <div class="col-sm-12">
                                <input type="text" class="form-control bg-light border-0 px-4" name="phone" placeholder="Enter phone no" style="height: 55px;">
                            </div>
                            <div class="col-sm-12">
                                <input type="file" style="background-color:#656565;color:white;padding:10px;" name="my_image" value="Upload image" class="form-control bg-light border-0 px-4">
                            </div>
                            <div class="col-sm-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="submit" onclick="storeData()">Sign up</button>
                            </div>
                        </div>
                    </form>
                    <!-- <br><br>
                    <div class="col-sm-12">
                                <button class="border-inner w-100 py-3" style="background-color:black;color:orange;width:40%;font-size:25px;font-weight:bold" type="submit" name="submit">See All Feedback Here</button>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark bg-img text-secondary" style="margin-top: 235px">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 mt-lg-n5">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary border-inner p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-dark me-3"></i>CakeZone</h1>
                        </a>
                        <p class="mt-3">Lorem diam sit erat dolor elitr et, diam lorem justo labore amet clita labore stet eos magna sit. Elitr dolor eirmod duo tempor lorem, elitr clita ipsum sea. Nonumy rebum et takimata ea takimata amet gubergren, erat rebum magna lorem stet eos. Diam amet et kasd eos duo dolore no.</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">Get In Touch</h4>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">info@example.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+012 345 67890</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">Quick Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-secondary" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">Newsletter</h4>
                            <p>Amet justo diam dolor rebum lorem sit stet sea justo kasd</p>
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-secondary py-4" style="background: #111111;">
        <div class="container text-center">
            <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Your Site Name</a>. All Rights Reserved. 
			
			<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
			Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a></p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-inner py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>