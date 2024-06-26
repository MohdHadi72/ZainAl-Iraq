<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- particles.js container -->

    <div id="particles-js">
        <div class="overlay"></div>
    </div>

    <div class="button-container">
        <a href="/darkEnglish/index.php">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            English
        </a>
        <a href="/darkArabic/index.php" style="letter-spacing: px;">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            عربي
        </a>
    </div>

    <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>

</body>

</html>
<script>
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 80, "density": {
                    "enable": true, "value_area": 800
                }
            }

            , "color": {
                "value": "#ffd400"
            }

            , "shape": {
                "type": "circle", "stroke": {
                    "width": 0, "color": "#000000"
                }

                , "polygon": {
                    "nb_sides": 5
                }

                , "image": {
                    "src": "img/github.svg", "width": 100, "height": 100
                }
            }

            , "opacity": {
                "value": 0.5130918594769673, "random": false, "anim": {
                    "enable": false, "speed": 1, "opacity_min": 0.1, "sync": false
                }
            }

            , "size": {
                "value": 6, "random": true, "anim": {
                    "enable": false, "speed": 40, "size_min": 0.1, "sync": false
                }
            }

            , "line_linked": {
                "enable": true, "distance": 150, "color": "#ffffff", "opacity": 0.4, "width": 1
            }

            , "move": {
                "enable": true, "speed": 6, "direction": "none", "random": false, "straight": false, "out_mode": "out", "bounce": false, "attract": {
                    "enable": false, "rotateX": 600, "rotateY": 1200
                }
            }
        }

        , "interactivity": {
            "detect_on": "canvas", "events": {
                "onhover": {
                    "enable": true, "mode": "repulse"
                }

                , "onclick": {
                    "enable": false, "mode": "push"
                }

                , "resize": true
            }

            , "modes": {
                "grab": {
                    "distance": 400, "line_linked": {
                        "opacity": 1
                    }
                }

                , "bubble": {
                    "distance": 400, "size": 40, "duration": 2, "opacity": 8, "speed": 3
                }

                , "repulse": {
                    "distance": 200, "duration": 0.4
                }

                , "push": {
                    "particles_nb": 4
                }

                , "remove": {
                    "particles_nb": 2
                }
            }
        }

        , "retina_detect": true
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

    update = function () {
        stats.begin();
        stats.end();

        if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
            count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
        }

        requestAnimationFrame(update);
    }

        ;
    requestAnimationFrame(update);
    ;
</script>