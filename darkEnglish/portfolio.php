<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Portfolio - Zain Al Iraq</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/preloader.min.css" rel="stylesheet">
    <link href="css/circle.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/fm.revealator.jquery.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- CSS Skin File -->
    <link href="css/skins/yellow.css" rel="stylesheet">

    <!-- Modernizr JS File -->
    <script src="js/modernizr.custom.js"></script>
</head>
<style>
    .card {
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
        border-radius: 20px;
        display: block;
        background-color: black;
        /* border: 3px solid #ffb400; */
        color: white;
    }

    @media screen and (max-width: 968px) {
        .col {
            width: 100%;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .card-body {
            height: auto;
            padding: 20px;
        }
    }


    @media screen and (max-width: 730px) {

        .col,
        .col-1,
        .col-10,
        .col-11,
        .col-12,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-auto,
        .col-lg,
        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-auto,
        .col-md,
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-auto,
        .col-sm,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-auto,
        .col-xl,
        .col-xl-1,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-auto {
            position: relative;
            width: 65%;
            margin-top: 10%;
            padding-right: 24px;
            padding-left: 27px;
            margin-bottom: 10%;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #ffb450;
        }


        ::-webkit-scrollbar-thumb {
            background: #ffb400;
            border-radius: 5px;
        }


        ::-webkit-scrollbar-thumb:hover {
            background: #ffb400;
        }


    }


    .col,
    .col-1,
    .col-10,
    .col-11,
    .col-12,
    .col-2,
    .col-3,
    .col-4,
    .col-5,
    .col-6,
    .col-7,
    .col-8,
    .col-9,
    .col-auto,
    .col-lg,
    .col-lg-1,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-lg-auto,
    .col-md,
    .col-md-1,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-md-auto,
    .col-sm,
    .col-sm-1,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-sm-auto,
    .col-xl,
    .col-xl-1,
    .col-xl-10,
    .col-xl-11,
    .col-xl-12,
    .col-xl-2,
    .col-xl-3,
    .col-xl-4,
    .col-xl-5,
    .col-xl-6,
    .col-xl-7,
    .col-xl-8,
    .col-xl-9,
    .col-xl-auto {
        position: relative;
        width: 65%;
        margin-top: 1%;
        padding-right: 24px;
        padding-left: 27px;
        margin-bottom: 5%;
    }

    .card-body {
        flex-grow: 1;
        width: 39%;
        height: 29vh;
        display: block;
    }

    ::-webkit-scrollbar {
        width: 6px;
    }

    ::-webkit-scrollbar-track {
        background: #ffff;
    }


    ::-webkit-scrollbar-thumb {
        background: #ffb400;
        border-radius: 5px;
    }


    ::-webkit-scrollbar-thumb:hover {
        background: #ffb400;
    }
</style>

<body class="portfolio" style="color: black;">
    <!-- Header Starts -->
    <header class="header" id="navbar-collapse-toggle">
        <!-- Fixed Navigation Starts -->
        <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
            <li class="icon-box active">
                <i class="fa fa-home"></i>
                <a href="index.php">
                    <h2>Home</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-user"></i>
                <a href="about.php">
                    <h2>About</h2>
                </a>
            </li>

            <!-- <li class="icon-box">
                <i class="fa fa-briefcase"></i>
                <a href="portfolio.php">
                    <h2>Portfolio</h2>
                </a>
            </li> -->
            <li class="icon-box">
                <i class="fa fa-envelope-open"></i>
                <a href="./contact.php">
                    <h2>Contact</h2>
                </a>
            </li>
        </ul>

        <!-- Fixed Navigation Ends -->
        <!-- Mobile Menu Starts -->

        <nav role="navigation" class="d-block d-lg-none">
            <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <ul class="list-unstyled" id="menu">
                    <li><a href="index.php"><i class="fa fa-home"></i><span>Home</span></a></li>
                    <li><a href="about.php"><i class="fa fa-user"></i><span>About</span></a></li>
                    <!-- <li><a href="portfolio.php"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li> -->
                    <li class="active"><a href="projects.php"><i class="fa fa-briefcase"></i><span>Projects</span></a>
                    </li>
                    <li><a href="contact.php"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>

                </ul>
            </div>
        </nav>
        <!-- Mobile Menu Ends -->
    </header>
    <!-- Header Ends -->
    <!-- Page Title Starts -->
    <section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
        <h1>Raihana<span>Park </span></h1>
        <span class="title-bg">Carts</span>
    </section>
    <!-- Page Title Ends -->
    <!-- Main Content Starts -->
    <section class="main-content text-center revealator-slideup revealator-once revealator-delay1">
        <div id="grid-gallery" class="container grid-gallery">
            <section class="grid-wrap">
                <ul class="row grid">
                    <div class="container">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <?php
                                        require("page1.php");
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <?php
                                        require("page2.php");
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <?php
                                        require("page3.php");
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <?php
                                        require("page4.php");
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <?php
                                        require("page5.php");
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <?php
                                        require("page6.php");
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </section>
            <!-- Portfolio Grid Ends -->
            <!-- Portfolio Details Starts -->
            <section class="slideshow">

                <ul>
                    <figcaption>

                    </figcaption>


                </ul>
                <!-- Portfolio Navigation Starts -->
                <!-- <nav>
                    <span class="icon nav-prev"><img src="img/projects/navigation/left-arrow.png" alt="previous"></span>
                    <span class="icon nav-next"><img src="img/projects/navigation/right-arrow.png" alt="next"></span>
                    <span class="nav-close"><img src="img/projects/navigation/close-button.png" alt="close"> </span>
                </nav> -->
                <!-- Portfolio Navigation Ends -->
            </section>
        </div>
    </section>
    <!-- Main Content Ends -->

    <!-- Template JS Files -->
    <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>

    <script src="js/jquery-3.5.0.min.js"></script>
    <script src="js/preloader.min.js"></script>
    <script src="js/fm.revealator.jquery.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpGridGallery.js"></script>
    <script src="js/jquery.hoverdir.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>