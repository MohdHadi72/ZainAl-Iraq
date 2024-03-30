<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    min-height: 100vh;
    background-color: #000000;
    position: absolute";

  }

  .container {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
  }

  .bubbels {
    position: relative;
    display: flex;
  }

  .bubbels span {
    position: relative;
    width: 20px;
    height: 20px;
    background-color: #ffaa00fd;
    margin: 0 4px;
    border-radius: 50%;
    box-shadow: 0 0 3px 3px #f6b214c2,
      0 0 10px 5px #f6b214c2,
      0 0 20px 10px #f6b214c2;
    animation: animation 15s linear infinite;
    animation-duration: calc(200s / var(--i));
  }

  .bubbels span:nth-child(even) {
    box-shadow: 0 0 0 3px 3px #f6b214c2,
      0 0 10px 5px #f6b214c2,
      0 0 20px 10px #f6b214c2;
  }

  @keyframes animation {
    0% {
      transform: translateY(100vh) scale(0);
    }

    100% {
      transform: translateY(-10vh) scale(1);
    }
  }
</style>


<body>

  <div class="container">
    <div class="bubbels">
      <span style="--i:11"></span>
      <span style="--i:12"></span>
      <span style="--i:24"></span>
      <span style="--i:10"></span>
      <span style="--i:14"></span>
      <span style="--i:23"></span>
      <span style="--i:18"></span>
      <span style="--i:16"></span>
      <span style="--i:19"></span>
      <span style="--i:20"></span>
      <span style="--i:22"></span>
      <span style="--i:25"></span>
      <span style="--i:18"></span>
      <span style="--i:21"></span>
      <span style="--i:15"></span>
      <span style="--i:13"></span>
      <span style="--i:26"></span>
      <span style="--i:17"></span>
      <span style="--i:28"></span>
      <span style="--i:11"></span>
      <span style="--i:12"></span>
      <span style="--i:24"></span>
      <span style="--i:10"></span>
      <span style="--i:14"></span>
      <span style="--i:23"></span>
      <span style="--i:18"></span>
      <span style="--i:16"></span>
      <span style="--i:19"></span>
      <span style="--i:20"></span>
      <span style="--i:22"></span>
      <span style="--i:25"></span>
      <span style="--i:18"></span>
      <span style="--i:21"></span>
      <span style="--i:15"></span>
      <span style="--i:13"></span>
      <span style="--i:26"></span>
      <span style="--i:17"></span>
      <span style="--i:28"></span>
      <span style="--i:23"></span>
      <span style="--i:18"></span>
      <span style="--i:16"></span>
      <span style="--i:19"></span>
      <span style="--i:20"></span>
      <span style="--i:22"></span>
      <span style="--i:25"></span>
      <span style="--i:18"></span>
      <span style="--i:21"></span>
      <span style="--i:15"></span>
      <span style="--i:13"></span>
      <span style="--i:26"></span>
      <span style="--i:17"></span>
      <span style="--i:28"></span>
      <!-- <h1 style="color:white; >dlasdlfas</h1> -->

    </div>
  </div>

</body>

</html>