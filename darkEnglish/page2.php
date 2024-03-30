<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</head>
<style>
  body {
    margin: 0;
    padding: 0;
    /* height: 100vh; */

  }

  canvas {
    display: block;
    vertical-align: bottom;
  }

  /* ---- particles.js container ---- */
  #particles-JS {
    position: absolute;
    width: 100%;
    height: 10vh;
    background-color: #000000;
  }

  /* ---- stats.js ---- */
  .count-particles {
    background: #000022;
    position: absolute;
    top: 48px;
    left: 0;
    width: 80px;
    color: #13E8E9;
    font-size: .8em;
    text-align: left;
    text-indent: 4px;
    line-height: 14px;
    padding-bottom: 2px;
    font-family: Helvetica, Arial, sans-serif;
    font-weight: bold;
  }

  .js-count-particles {
    font-size: 1.1em;
  }

  #stats,
  .count-particles {
    -webkit-user-select: none;
    margin-top: 5px;
    margin-left: 5px;
  }

  #stats {
    border-radius: 3px 3px 0 0;
    overflow: hidden;
  }

  .count-particles {
    border-radius: 0 0 3px 3px;
  }

  /* button style  start here*/

  #particles-JS {
    margin: -8% -7%;
    height: 30vh;
    width: 101%;
    background-color: rgb(0, 0, 0);
    position: absolute;
    border-radius: 22px;
  }

  .button-container {
    position: absolute;
    top: 48%;
    left: 60%;
    transform: translate(-50%, -50%);
    text-align: center;

  }

  .button-container a {
    position: relative;
    display: inline-block;
    padding: 20px 35px;
    text-decoration: none;
    text-transform: uppercase;
    /* letter-spacing: 2px; */
    color: #ffb400;
    font-weight: bold;
    transition: 0.5s;
    overflow: hidden;
    margin-right: 70px;
    font-size: 19px;
  }



  .button-container a:hover {
    background-color: #ffb400;
    color: black;
    box-shadow: 0 0 5px #ffb400,
      0 0 10px #ffb400,
      0 0 16px #ffb400,
      0 0 50px #ffb400;
    -webkit-box-reflect: below 3px linear-gradient(transparent, #0005);
    text-decoration: none;
  }

  .button-container a span {
    position: absolute;
    display: block;

  }

  .button-container a span:nth-child(1) {
    top: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #ffb400);
    animation: animation 1.2s infinite; /* Slowed down to 1.2s */
}

@keyframes animation {
    0% {
        left: -100%;
    }

    100% {
        left: 100%;
    }
}

.button-container a span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #ffb400);
    animation: animation2 1.2s infinite; /* Slowed down to 1.2s */
    animation-delay: .25s;
}

@keyframes animation2 {
    0% {
        top: -100%;
    }

    100% {
        top: 100%;
    }
}

.button-container a span:nth-child(3) {
    bottom: 0;
    right: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, #ffb400);
    animation: animation3 1.2s infinite; /* Slowed down to 1.2s */
    animation-delay: .5s;
}

@keyframes animation3 {
    0% {
        right: -100%;
    }

    100% {
        right: 100%;
    }
}

.button-container a span:nth-child(4) {
    bottom: -100px;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, #ffb400);
    animation: animation4 1.2s infinite; /* Slowed down to 1.2s */
    animation-delay: .75s;
}

@keyframes animation4 {
    0% {
        bottom: -100%;
    }

    100% {
        bottom: 100%;
    }
}


  @media screen and (max-width: 730px) {
    .button-container {
      top: 48%;
      margin-left: 7%;
    }

    .button-container a {
      display: block;
      margin-top: 27%;
      margin-left: -28%;
      margin-bottom: 75px;
    }
  }
</style>

<body>
  <!-- particles.js container -->

  <div id="particles-JS">
  </div>
  <div class="button-container">
    <a href="http://www.zainal-iraq.com/main/about.html">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      About
    </a>
  </div>


  <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
  <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
  <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>

</body>

</html>
<script>
  particlesJS("particles-JS", {
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
        "value": "#ffb400"
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