<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Drivedoc</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />
    <link rel="stylesheet" href="assets/css/vendor/simple-line-icons.css" />
    <link rel="stylesheet" href="assets/css/vendor/icofont.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/metropolis.css" />
    <link rel="stylesheet" href="assets/css/vendor/material-design-iconic.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css" />
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

</head>

<body>
    <!-- Modal -->
    <div class="modal fade offcanvas-modal" id="exampleModal">
        <div class="modal-dialog offcanvas-dialog">
            <div class="modal-content">
                <div class="modal-header offcanvas-header">
                    <a class="offcanvas-logo" href="index.php"><img src="assets/images/logo/logo.png" alt="logo" /></a>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- offcanvas-mobile-menu start -->

                <nav id="offcanvasNav" class="offcanvas-menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li>
                           

                          
                            <a href="javascript:void(0)">Pages</a>
                            <ul>
                                <li><a href="faq.php">faq</a></li>
                                <li><a href="team.php">team</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Blog</a>
                            
                        </li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>


                </nav>
                <!-- offcanvas-mobile-menu end -->
            </div>
        </div>
    </div>
    <header id="active-sticky" class="header-section">
        <!-- Header  Start -->
        <div class="container">
            <div class="row align-items-center">
                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="index.php"><img src="assets/images/logo/logo.png" alt="Site Logo" /></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Menu Start -->
                <div class="col text-end">
                    <nav class="main-menu d-none d-lg-block">
                        <ul class="d-flex">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li>
                                <a href="#">Service</a>

                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li class="sub-menu-item">
                                        <a class="sub-menu-link" href="faq.php">faq</a>
                                    </li>
                                    <li class="sub-menu-item">
                                        <a class="sub-menu-link" href="team.php">team</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li class="sub-menu-item">
                                        <a class="sub-menu-link" href="blog.php">Blog</a>
                                    </li>
                                    <li class="sub-menu-item">
                                        <a class="sub-menu-link" href="blog-grid-left-sidebar.php">blog grid left sidebar</a>
                                    </li>
                                    <li class="sub-menu-item">
                                        <a class="sub-menu-link" href="blog-grid-right-sidebar.php">blog grid right sidebar</a>
                                    </li>
                                    <li class="sub-menu-item">
                                        <a class="sub-menu-link" href="blog-details.php">blog details</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                    <button class="toggle" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <span class="icon-top"></span>
                        <span class="icon-middle"></span>
                        <span class="icon-bottom"></span>
                    </button>
                </div>
                <!-- Header Menu End -->
            </div>
        </div>
        <!-- Header  End -->
    </header>