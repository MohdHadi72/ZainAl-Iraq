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
    body {
        background-color: black;
    }

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

<body class="portfolio">
    <!-- Header Starts -->
    <header class="header" id="navbar-collapse-toggle">
        <!-- Fixed Navigation Starts -->
        <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
            <li class="icon-box active">
                <i class="fa fa-home"></i>
                <a href="index.php">
                    <h2>رئيسي</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-user"></i>
                <a href="about.php">
                    <h2>معلومات</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-briefcase"></i>
                <a href="projects.php">
                    <h2>المشاريع</h2>
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
                <a href="contact.php">
                    <h2>اتصل</h2>
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
                    <li><a href="index.php"><i class="fa fa-home"></i><span>رئيسي</span></a></li>
                    <li><a href="about.php"><i class="fa fa-user"></i><span>معلومات</span></a></li>
                    <!-- <li><a href="portfolio.php"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li> -->
                    <li class="active"><a href="projects.php"><i class="fa fa-briefcase"></i><span>المشاريع</span></a></li>
                    <li><a href="contact.php"><i class="fa fa-envelope-open"></i><span>اتصل</span></a></li>

                </ul>
            </div>
        </nav>
        <!-- Mobile Menu Ends -->
    </header>
    <!-- Header Ends -->
    <!-- Page Title Starts -->
    <section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
        <h1> ريحانة <span> حديقة </span></h1>
        <span class="title-bg">عربات </span>
    </section>

    <!-- Page Title Ends -->
    <!-- Main Content Starts -->
    <section class="main-content text-center revealator-slideup revealator-once revealator-delay1">
        <div id="grid-gallery" class="container grid-gallery">
            <!-- Portfolio Grid Starts -->
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


            <!-- Template JS Files -->
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
<script>
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 80,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            }

            ,
            "color": {
                "value": "#ffd400"
            }

            ,
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                }

                ,
                "polygon": {
                    "nb_sides": 5
                }

                ,
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            }

            ,
            "opacity": {
                "value": 0.5130918594769673,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            }

            ,
            "size": {
                "value": 6,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            }

            ,
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            }

            ,
            "move": {
                "enable": true,
                "speed": 6,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        }

        ,
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "repulse"
                }

                ,
                "onclick": {
                    "enable": false,
                    "mode": "push"
                }

                ,
                "resize": true
            }

            ,
            "modes": {
                "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 1
                    }
                }

                ,
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                }

                ,
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                }

                ,
                "push": {
                    "particles_nb": 4
                }

                ,
                "remove": {
                    "particles_nb": 2
                }
            }
        }

        ,
        "retina_detect": true
    });
    var count_particles,
        stats,
        update;
    stats = new Stats;
    stats.setMode(0);
    stats.domElement.style.position = 'absolute';
    stats.domElement.style.left = '0px';
    stats.domElement.style.top = '0px';
    document.body.appendChild(stats.domElement);
    count_particles = document.querySelector('.js-count-particles');

    update = function() {
        stats.begin();
        stats.end();

        if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
            count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
        }

        requestAnimationFrame(update);
    }

    ;
    requestAnimationFrame(update);;
</script>