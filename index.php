<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!--Lib-->
        <!--Jquery-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
        <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/DrawSVGPlugin3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.15/lodash.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <!--Bootstrap5-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@700&display=swap" rel="stylesheet">
        <!--CSS-->
        <link rel="stylesheet" href="./css/homepage.css">
        <link rel="stylesheet" href="./css/cat_homepage.css">
        <link rel="stylesheet" href="./css/robot_homepage.css">
        <link rel="stylesheet" href="./css/book.css">
        <link rel="stylesheet" href="./css/footer.css">
        <!--Script-->
        <script src="./js/homepage.js"></script>
        <script src="./js/text_swap_homepage.js"></script>
        <!--Style-->
        <style>
          .popup-wrap {
            width:100%;
            height:100%;
            display:none;
            position:absolute;
            top:0px;
            left:0px;
            content:'';
          }

          .popup-box {
            width:400px;
            padding:70px;
            transform:translate(-50%, -50%) scale(0.5);
            position:absolute;
            top:50%;
            left:50%;
            box-shadow:0px 2px 16px rgba(0,0,0,0.5);
            border-radius:3px;
            background:#fff;
            text-align:center;
            
            h2 {
              color:#1a1a1a;
            }
            
            h3 {
              color:#888;
            }
            
            .close-btn {
              width:35px;
              height:35px;
              display:inline-block;
              position:absolute;
              top:10px;
              right:10px;
              -webkit-transition:all ease 0.5s;
              transition:all ease 0.5s;
              border-radius:1000px;
              background:#d75f70;
              font-weight:bold;
              text-decoration:none;
              color:#fff;
              line-height:190%;
              
              &:hover {
                -webkit-transform:rotate(180deg);
                transform:rotate(180deg);
              }
            }
          }

          .transform-in, .transform-out {
            display:block;
            -webkit-transition:all ease 0.5s;
            transition:all ease 0.5s;
          }

          .transform-in {
            -webkit-transform:translate(-50%, -50%) scale(1);
            transform:translate(-50%, -50%) scale(1);
          }

          .transform-out {
            -webkit-transform:translate(-50%, -50%) scale(0.5);
            transform:translate(-50%, -50%) scale(0.5);
          }

          @import url(https://fonts.googleapis.com/css?family=Khula:700);
.hidden {
  opacity:0;
}
.console-container {
  font-family:Khula;
  font-size:4em;
  text-align:center;
  height:200px;
  width:600px;
  display:block;
  position:absolute;
  color: blue;
  top:0;
  bottom:0;
  left:0;
  right:0;
  margin:auto;
}
.console-underscore {
   display:inline-block;
  position:relative;
  top:-0.14em;
  left:10px;
}
html,
body {
  background-color: #85b9dd;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
}

* {
  position: relative;
}

.frame {
  width: 500px;
  height: auto;
  margin: 15% auto 0;
  position: absolute;
  width: 100%;
}

svg {
  max-width: 100%;
  height: auto;
  display: block;
}

/**
 * Paper Plane
 */
/*Paper Plane: Container*/
.plane-container {
  width: 200px;
  margin: 0px auto;
  z-index: 3;
}
 /*Paper Plane: Image*/
.plane {
  width: 100%;
  height: 60px;
}

/*Paper Plane: Animation*/
.plane-container {
  -webkit-animation: paper-plane-scoping 2s alternate infinite;
  -moz-animation: paper-plane-scoping 2s alternate infinite;
  animation: paper-plane-scoping 2s alternate infinite;

  -webkit-animation-timing-function: linear;
  -moz-animation-timing-function: linear;
  animation-timing-function: linear;
}

@-webkit-keyframes paper-plane-scoping {
  0% {
    -webkit-transform: translateY(0px);
    -moz-transform: translateY(0px);
    transform: translateY(0px);
  }
  100% {
    -webkit-transform: translateY(100px);
    -moz-transform: translateY(100px);
    transform: translateY(100px);
  }
}

.plane {
  -webkit-animation-timing-function: ease-in-out;
  -moz-animation-timing-function: ease-in-out;
  animation-timing-function: ease-in-out;

  -webkit-animation: paper-plane-soaring 4s forwards infinite;
  -moz-animation: paper-plane-soaring 4s forwards infinite;
  animation: paper-plane-soaring 4s forwards infinite;
}
@-webkit-keyframes paper-plane-soaring {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  40% {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    transform: rotate(15deg);
  }
  50% {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    transform: rotate(15deg);
  }
  60% {
    -webkit-transform: rotate(-10deg);
    -moz-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }
  70% {
    -webkit-transform: rotate(-10deg);
    -moz-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }
  100% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

/**
 * Clouds
 */
.clouds {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  overflow: hidden;
  transform: translateZ(0);
}

.cloud {
  position: absolute;
  top: 20%;
  width: 300px;
  right: 0;
  opacity: 1;
}

.cloud.front {
  z-index: 9;
}

.cloud.distant {
  z-index: 1;
}

.cloud.background {
  z-index: 1;
}

/*Cloud Sizing*/
.cloud.smaller {
  margin-right: 400px;
  width: 100px;
  margin-top: 50px;
}

.cloud.small {
  margin-right: 200px;
  width: 150px;
}

.cloud.big {
  width: 500px;
  margin-top: 50px;
  margin-right: 150px;
}

.cloud.massive {
  width: 600px;
  margin-top: 20px;
  margin-right: 0px;
}


/*Cloud: Animation*/
.cloud {
  -webkit-animation-name: cloud-movement;
  -webkit-animation-timing-function: linear;
  -webkit-animation-direction: forwards;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-duration: 8s;

  -moz-animation-name: cloud-movement;
  -moz-animation-timing-function: linear;
  -moz-animation-direction: forwards;
  -moz-animation-iteration-count: infinite;
  -moz-animation-duration: 8s;

  animation-name: cloud-movement;
  animation-timing-function: linear;
  animation-direction: forwards;
  animation-iteration-count: infinite;
  animation-duration: 8s;
}

.slow {
  -webkit-animation-duration: 9.2s;
  -moz-animation-duration: 9.2s;
  animation-duration: 9.2s;
}

.slower {
  -webkit-animation-duration: 11.2s;
  -moz-animation-duration: 11.2s;
  animation-duration: 11.2s;
}

.slowest {
  -webkit-animation-duration: 13.5s;
  -moz-animation-duration: 13.5s;
  animation-duration: 13.5s;
}

.super-slow {
  -webkit-animation-duration: 20.5s;
  -moz-animation-duration: 20.5s;
  animation-duration: 20.5s;
}

@-webkit-keyframes cloud-movement {
  0% {
    opacity: 0.1;
    -webkit-transform: translateX(300px);
    -moz-transform: translateX(300px);
    transform: translateX(300px);
  }
  10% {

    opacity: 0.7;
  }
  90% {
    opacity: 0;
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-1000px);
    -moz-transform: translateX(-1000px);
    transform: translateX(-1000px);
  }
}


button
{
  margin-top: 10px;
  width: 200px;
  background: none;
  border: none;
  outline: none;
  color: #FFFFFF;
  text-transform: uppercase;
  letter-spacing: 5px;
  font-size: 22px;
  transform: scale(1.5);
  transition: 0.4s all;
  font-family: verdana;
  cursor: pointer;
  transition-delay: 0.6s;
}

button::before
{
  content: '';
  width: 20px;
  height: 20px;
  position: absolute;
  top: 0;
  left: 0;
  border-top: 2px solid #FFFFFF;
  border-left: 2px solid #FFFFFF;
  transition: 0.4s all;
}

button::after
{
  content: '';
  width: 20px;
  height: 20px;
  position: absolute;
  bottom: 0;
  right: 0;
  border-bottom: 2px solid #FFFFFF;
  border-right: 2px solid #FFFFFF;
  transition: 0.4s all;
}

button:hover
{
  background: #FFFFFF;
  color: #5588ff;
  box-shadow: 0 0 40px #FFFFFF;
  text-shadow: 2px 2px 5px #FFFFFF;
}

button:hover::after
{
  width: calc(100% - 2px);
  height: calc(100% - 2px);
}

button:hover::before
{
  width: calc(100% - 2px);
  height: calc(100% - 2px);
}


        </style>
    </head>
    <body>
        <!-- Header -->
        <section class="et-hero-tabs" style="background-color: #1a1e2d;">
                <div class="row" style="width: 90%;">
                <div class="col-8" style="margin: auto;">
                    <div>
                        <h1 id="header_neon">Quản lý tài nguyên môn học</h1>
                        <div class="box" style="margin-top: 20px;">
                        We 
                        <ul class="swap" style="z-index: 100;">
                            <li>recieve</li>
                            <li>learn</li>
                            <li>share</li>
                        </ul>
                        </div>
                        <?php if(isset($_SESSION['username'])): ?>
                            <div class="typewriter" style="margin-top: 40px; z-index: index 99;">
                                <h1 style="font-size: 2em;">Xin chào <?php echo $_SESSION['username'];?></h1>
                                <a href="index.php?logout='1'"><h2>Not me</h2></a>
                            </div>
                        <?php endif ?>
                        <?php if(!isset($_SESSION['username'])): ?>
                        <a href="login.php" id="header_btn">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <h4 style="text-decoration: underline;">Join with us</h4>
                        </a>
                        <?php endif ?>
                    </div>
                </div>
                <div class="cat_container col-4" style="margin: auto">
                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 783.55 354.91">
                        <g id="bongo-cat">
                        <g class="head">
                            <path d="M280.4,221l383.8,62.6a171.4,171.4,0,0,0-9.2-40.5,174,174,0,0,0-28.7-50.5,163.3,163.3,0,0,0,3.2-73.8c-11.6-1.9-42,14.2-44.5,17.5-19.6-24-88.5-52.7-153.7-48.1A78.8,78.8,0,0,0,398,67.1c-9.8,2.9-19,29.7-19.4,33.7a320,320,0,0,0-31.7,23.6c-14,11.8-28.9,24.4-42.5,44.3A173,173,0,0,0,280.4,221Z"></path>
                            <path d="M396.6,178.6c.4.9,2.7,6.5,8.5,8.4s13.4-1.2,17.2-7.9c-.9,7.5,3.8,14.3,10.4,16a14.4,14.4,0,0,0,15-5.7"></path>
                            <path d="M474,179.2a6.6,6.6,0,0,0-4.9,3.6,6,6,0,0,0,1.5,7.3,6,6,0,0,0,7.9-1c2.3-2.6,2-7,.2-8s-5.9,1.6-5.7,3.5,1.9,2.8,3.2,2.3,1.1-2.2,1.1-2.3"></path>
                            <path d="M365.4,168.9c0,.3-.8,3.6,1.5,6a5.9,5.9,0,0,0,7.2,1.4,6.1,6.1,0,0,0,2.2-7.7c-1.5-3.1-5.7-4.5-7.3-3.2s-.8,6,1,6.6,3.3-.7,3.3-2.1-1.5-1.8-1.6-1.9"></path>
                            <g class="headphone headphone-right">
                            <g class="speaker">
                                <path d="M400.7,80.2c-14.1-20.8-40.2.3-50.7,15-8.7,12.2-9.7,30.3,2.8,37.3,5.4-9,11.8-15.6,21-26.2A214.1,214.1,0,0,1,400.7,80.2Z"></path>
                                <path d="M381.5,79.4c-6.6-7.5-9.6-5.8-12.3-5.5-16.3,1.3-32,20.3-27.8,33.9a21.8,21.8,0,0,0,5.9,8.5c1.7-2.6,3.5-5.1,5.4-7.7A150.7,150.7,0,0,1,381.5,79.4Z"></path>
                                <path d="M367.3,77.8a13.1,13.1,0,0,0-5.1-1.8c-8.5-.9-18.7,7.5-18.4,16.1a12.8,12.8,0,0,0,2.6,7c3.1-3.3,6.3-6.8,9.6-10.2S363.6,81.3,367.3,77.8Z"></path>
                            </g>
                            <path class="band" d="M515,40.6c-15.9-4.6-57-14.1-104,2.3a166.9,166.9,0,0,0-60.9,37.3"></path>
                            </g>
                        </g>
                        <g class="music music-right">
                            <g class="note">
                            <g>
                                <path d="M368.5,46.5c.5,2.1,1.2,3.5,3.8,6.3s5.1,4.3,6.5,7.2a11.1,11.1,0,0,1,.7,2,10.5,10.5,0,0,1-.7,6.5"></path>
                                <path d="M368.5,46.5a20.8,20.8,0,0,0,2.4,11.7c2.3,4.4,5,5.4,6.8,9.5a17.5,17.5,0,0,1,.4,11"></path>
                                <line x1="368.5" y1="47.7" x2="368.5" y2="92.8"></line>
                                <path d="M368.5,92.8c.1-3.1-4.7-6.3-9-6.3s-8.7,2.7-8.7,5.8,4.8,5.7,8.7,5.8S368.3,95.8,368.5,92.8Z"></path>
                            </g>
                            <g>
                                <path d="M368.5,46.5c.5,2.1,1.2,3.5,3.8,6.3s5.1,4.3,6.5,7.2a11.1,11.1,0,0,1,.7,2,10.5,10.5,0,0,1-.7,6.5"></path>
                                <path d="M368.5,46.5a20.8,20.8,0,0,0,2.4,11.7c2.3,4.4,5,5.4,6.8,9.5a17.5,17.5,0,0,1,.4,11"></path>
                                <line x1="368.5" y1="47.7" x2="368.5" y2="92.8"></line>
                                <path d="M368.5,92.8c.1-3.1-4.7-6.3-9-6.3s-8.7,2.7-8.7,5.8,4.8,5.7,8.7,5.8S368.3,95.8,368.5,92.8Z"></path>
                            </g>
                            </g>
                            <g class="note">
                            <g>
                                <polyline points="350 81.7 350 43.5 382.7 50.7 382.7 89.5"></polyline>
                                <path d="M350,82.3c0-3.1-4.5-5.7-8.2-5.9s-9.3,2.8-9.2,6,4.7,5.7,8.6,5.7S349.9,85.5,350,82.3Z"></path>
                                <path d="M382.7,89.9c0-3.1-4.4-5.7-8.2-5.8s-9.3,2.7-9.2,5.9,4.7,5.7,8.7,5.7S382.7,93.1,382.7,89.9Z"></path>
                            </g>
                            <g>
                                <polyline points="350 81.7 350 43.5 382.7 50.7 382.7 89.5"></polyline>
                                <path d="M350,82.3c0-3.1-4.5-5.7-8.2-5.9s-9.3,2.8-9.2,6,4.7,5.7,8.6,5.7S349.9,85.5,350,82.3Z"></path>
                                <path d="M382.7,89.9c0-3.1-4.4-5.7-8.2-5.8s-9.3,2.7-9.2,5.9,4.7,5.7,8.7,5.7S382.7,93.1,382.7,89.9Z"></path>
                            </g>
                            </g>
                            <g class="note">
                            <polyline points="388.2 73.6 388.2 34.6 354.9 42.6 354.9 82.4"></polyline>
                            <path d="M388.2,74.1c0-3-4.4-5.6-8.1-5.8s-9.2,2.8-9.1,6,4.6,5.6,8.6,5.6S388.2,77.3,388.2,74.1Z"></path>
                            <path d="M354.9,81.9c0-3.1-4.4-5.7-8.2-5.9s-9.3,2.8-9.2,6,4.7,5.7,8.7,5.7S354.9,85.1,354.9,81.9Z"></path>
                            <line x1="354.9" y1="48.4" x2="388.2" y2="40.3"></line>
                            <line x1="354.9" y1="54.6" x2="388.2" y2="47"></line>
                            </g>
                            <g class="note">
                            <g>
                                <path d="M371.8,79.5c0-3.1-4.5-5.8-8.3-5.9s-9.3,2.8-9.2,6,4.7,5.7,8.7,5.7S371.8,82.7,371.8,79.5Z"></path>
                                <line x1="371.8" y1="79.5" x2="371.8" y2="33.3"></line>
                                <path d="M371.8,33.4a26.6,26.6,0,0,0,3.6,7.8c3.7,5.7,7.6,7,8.8,11.6.5,1.7.7,4.4-.9,8.3"></path>
                            </g>
                            <g>
                                <path d="M371.8,79.5c0-3.1-4.5-5.8-8.3-5.9s-9.3,2.8-9.2,6,4.7,5.7,8.7,5.7S371.8,82.7,371.8,79.5Z"></path>
                                <line x1="371.8" y1="79.5" x2="371.8" y2="33.3"></line>
                                <path d="M371.8,33.4a26.6,26.6,0,0,0,3.6,7.8c3.7,5.7,7.6,7,8.8,11.6.5,1.7.7,4.4-.9,8.3"></path>
                            </g>
                            </g>
                        </g>
                        <g class="table">
                            <polygon points="25.3 158.5 783.2 293 513 354.9 25.3 158.5"></polygon>
                            <line x1="25.3" y1="158.5" x2="783.2" y2="293" fill="none" stroke="#8d00fc" stroke-miterlimit="10" stroke-width="4"></line>
                            <line x1="783.2" y1="293" x2="25.3" y2="158.5" fill="none"></line>
                        </g>
                        <polygon class="laptop-base" points="103.2 263.6 258.9 219.3 636.5 294.4 452.1 339 103.2 263.6"></polygon>
                        <g class="laptop-keyboard">
                            <polygon points="369.6 265.6 255.3 244.3 255.5 243.5 264.7 241.9 380.9 262.3 380.8 263.1 369.6 265.6"></polygon>
                            <polygon points="235.9 256.4 219.8 253.2 219.9 252.5 228.7 251 245.3 253.4 245.1 254.2 235.9 256.4"></polygon>
                            <polygon points="473.1 303.7 248.4 258.9 248.6 258.1 257.7 256.6 486.2 300.4 486 301.3 473.1 303.7"></polygon>
                            <polygon points="410.3 300.2 202.7 257.5 202.9 256.8 211.4 255.3 422.4 297.1 422.2 298 410.3 300.2"></polygon>
                            <polygon points="448.5 308.1 427 303.7 427.3 302.8 439.2 301.4 461.2 304.9 461 305.8 448.5 308.1"></polygon>
                            <polygon points="200.1 264.7 186 261.7 186.2 261 194.5 259.5 208.9 261.8 208.8 262.5 200.1 264.7"></polygon>
                            <polygon points="221.1 269.1 206.6 266.1 206.8 265.3 215.4 263.9 230.3 266.2 230.1 267 221.1 269.1"></polygon>
                            <polygon points="361.4 298.9 230 271 230.2 270.3 239.2 268.9 372.7 295.9 372.5 296.7 361.4 298.9"></polygon>
                            <polygon points="442.8 279.2 383.7 268.2 383.9 267.3 395.1 265.7 455.4 275.9 455.2 276.7 442.8 279.2"></polygon>
                            <polygon points="524.6 294.4 458.6 282.1 458.8 281.2 471.3 279.7 538.6 291 538.4 291.9 524.6 294.4"></polygon>
                            <polygon points="424.7 312.4 374.6 301.7 374.8 300.9 385.9 299.5 437 309.3 436.8 310.2 424.7 312.4"></polygon>
                            <polygon points="409.1 277.3 397.6 278.8 397.4 279.6 498.4 299.1 511.8 296.7 512 295.8 409.1 277.3"></polygon>
                            <polygon points="394.2 274.5 394.4 273.6 246.7 246.5 237.7 248.1 237.5 248.8 382.8 276.8 394.2 274.5"></polygon>
                        </g>
                        <g class="paw paw-right">
                            <path class="down" d="M289.1,181.7c-12.1,9.8-20.6,20.7-20.7,32.1-.2,9,3.8,20.4,13.3,25.2s20.1.6,29.6-3.4c13.4-5.7,23.9-14.6,29.4-21.5"></path>
                            <g class="up">
                            <path d="M327.3,170c-.4-1.4-6.3-18.8-23.5-23.5-.8-.2-18.6-4.7-28.9,6.3-8.4,9.1-6,22.5-4.6,30.2a54.3,54.3,0,0,0,8.1,19.9"></path>
                            <g class="pads">
                                <path d="M297.2,154.8c1-.5,2.7-.1,3,.6s-1.4,2.4-2.6,2.1a1.6,1.6,0,0,1-1.1-1.2A1.6,1.6,0,0,1,297.2,154.8Z"></path>
                                <path d="M285.8,159.4c.3-.4,1-1.1,1.7-.8s.9,1.4.8,2.2-1.8,2.1-2.5,1.5S285.2,160.4,285.8,159.4Z"></path>
                                <path d="M276.9,171c.5-.4,2.7-.3,3.2.6s-.6,1.8-1.4,1.8S276.2,171.6,276.9,171Z"></path>
                                <path d="M296.4,168.6c2.3-.9,6.4,6.3,7.6,9s-5.2,4.5-7.4,6-5.1-6.1-5.9-8.3S293.7,169.8,296.4,168.6Z"></path>
                            </g>
                            </g>
                        </g>
                        <polygon class="terminal-frame" points="93.8 63.3 284.1 73 335.9 230.5 146.2 197.6 93.8 63.3"></polygon>
                        <g class="terminal-code">
                            <line x1="260.2" y1="92.3" x2="212.2" y2="88.7"></line>
                            <line x1="197.3" y1="87.5" x2="145.2" y2="83.5"></line>
                            <line x1="251" y1="104.2" x2="223.4" y2="101.8"></line>
                            <line x1="209.4" y1="100.5" x2="154.4" y2="95.6"></line>
                            <line x1="256.4" y1="117.9" x2="227.5" y2="114.7"></line>
                            <line x1="215.9" y1="113.4" x2="183.5" y2="109.8"></line>
                            <line x1="169.1" y1="108.2" x2="142.9" y2="105.3"></line>
                            <line x1="275.4" y1="132.8" x2="249.4" y2="129.6"></line>
                            <line x1="234.4" y1="127.8" x2="197.3" y2="123.3"></line>
                            <line x1="185.6" y1="121.9" x2="149.1" y2="117.5"></line>
                            <line x1="261" y1="144.6" x2="244.5" y2="142.5"></line>
                            <line x1="235.5" y1="141.3" x2="214.9" y2="138.7"></line>
                            <line x1="203.4" y1="137.2" x2="180.4" y2="134.3"></line>
                            <line x1="169.3" y1="132.9" x2="155.1" y2="131.1"></line>
                            <line x1="264.7" y1="158.3" x2="221.9" y2="152.1"></line>
                            <line x1="208.2" y1="150.1" x2="191.7" y2="147.7"></line>
                            <line x1="291.3" y1="174.3" x2="268.8" y2="170.9"></line>
                            <line x1="257.8" y1="169.2" x2="226.5" y2="164.4"></line>
                            <line x1="217.3" y1="163" x2="185" y2="158.1"></line>
                            <line x1="173.8" y1="156.4" x2="152.9" y2="153.2"></line>
                            <line x1="278.5" y1="185.6" x2="257.3" y2="182.2"></line>
                            <line x1="243.8" y1="179.9" x2="230.3" y2="177.7"></line>
                            <line x1="216.5" y1="175.8" x2="196.7" y2="172.5"></line>
                            <line x2="262.1" y2="196.1" x1="280.5" y1="199.2"></line>
                            <line x2="213.8" y2="187.9" x1="251.1" y1="194.2"></line>
                            <line x2="180.8" y2="182.3" x1="202.7" y1="186"></line>
                        </g>
                        <polygon class="laptop-cover" points="103.2 263.6 452.1 339 360.8 12.4 2 2 103.2 263.6"></polygon>
                        <g class="paw paw-left">
                            <g class="up">
                            <path d="M586.6,208.8c-.6-2.3-4.2-15.6-17.2-22.2-2.7-1.3-12.8-6.4-23.6-1.8s-14.6,16.5-14.8,18.4c-1.2,9-.7,18.4,2.4,26.1,2.4,6,7.5,17.2,9.7,20.2"></path>
                            <g class="pads">
                                <path d="M561.4,194.9a2.7,2.7,0,0,1,3,.5c.4,1-1.4,2.4-2.6,2.2a1.5,1.5,0,0,1-1.1-1.3A1.2,1.2,0,0,1,561.4,194.9Z"></path>
                                <path d="M550.7,200.4c.4-.5,1.1-1.1,1.7-.8a2,2,0,0,1,.8,2.2c-.3,1.2-1.8,2-2.5,1.5S550.1,201.3,550.7,200.4Z"></path>
                                <path d="M541.1,211.1c.5-.4,2.7-.4,3.2.5s-.6,1.8-1.5,1.9S540.4,211.6,541.1,211.1Z"></path>
                                <path d="M560.6,209.2c2.3-.9,6.4,6.3,7.6,9s-5.3,4.5-7.4,6-5.1-6-5.9-8.3S557.9,210.4,560.6,209.2Z"></path>
                            </g>
                            </g>
                            <path class="down" d="M534.1,231.4c-19.7,6-32.9,18.4-34.2,29.1a30.1,30.1,0,0,0,1.7,14.1,24.8,24.8,0,0,0,6.1,8.8c6,5.1,16.8,4,38-3.9a288.7,288.7,0,0,0,46.5-22.1"></path>
                        </g>
                        <g class="headphone headphone-left">
                            <g class="speaker">
                            <path d="M609.5,137.3c-17.1,6.3-20.7,51.4-4.5,67.3,1.4,1.5,5.5,5.5,11.3,5.9,8.2.5,14.5-6.3,16.9-8.9,10.1-11,11.5-27.5,8.1-40.1-1.4-4.8-3.9-14-12.7-19.9C627.4,140.8,617.7,134.3,609.5,137.3Z"></path>
                            <path d="M626.5,196.1c2.7-.4,5.9-2.6,9.3-6,6.6-6.6,6.8-16.6,5.8-24s-4.2-16.1-11.3-19.7a18.7,18.7,0,0,0-10.9-1.9C614,149.3,615.3,192.6,626.5,196.1Z"></path>
                            <path d="M631.6,151c-4.5,3.3-.5,27.1,3.8,28.2s6.9-6.6,6.2-13.1S637.4,153.5,631.6,151Z"></path>
                            </g>
                            <path class="band" d="M638.9,157.7c-4-16.8-25.9-61.9-75.3-95.3A155.5,155.5,0,0,0,515,40.6"></path>
                        </g>
                        <g class="music music-left">
                            <g class="note">
                            <g>
                                <path d="M633.3,119.9c.6,2,1.3,3.5,3.8,6.3s5.2,4.3,6.5,7.2a6.9,6.9,0,0,1,.7,1.9,10.2,10.2,0,0,1-.7,6.6"></path>
                                <path d="M633.3,119.9a23,23,0,0,0,2.4,11.7c2.4,4.3,5.1,5.4,6.8,9.5a16.9,16.9,0,0,1,.5,11"></path>
                                <line x1="633.3" y1="121.1" x2="633.3" y2="166.2"></line>
                                <path d="M633.3,166.2c.2-3.2-4.6-6.3-8.9-6.3s-8.7,2.6-8.7,5.7,4.7,5.7,8.7,5.8S633.1,169.2,633.3,166.2Z"></path>
                            </g>
                            <g>
                                <path d="M633.3,119.9c.6,2,1.3,3.5,3.8,6.3s5.2,4.3,6.5,7.2a6.9,6.9,0,0,1,.7,1.9,10.2,10.2,0,0,1-.7,6.6"></path>
                                <path d="M633.3,119.9a23,23,0,0,0,2.4,11.7c2.4,4.3,5.1,5.4,6.8,9.5a16.9,16.9,0,0,1,.5,11"></path>
                                <line x1="633.3" y1="121.1" x2="633.3" y2="166.2"></line>
                                <path d="M633.3,166.2c.2-3.2-4.6-6.3-8.9-6.3s-8.7,2.6-8.7,5.7,4.7,5.7,8.7,5.8S633.1,169.2,633.3,166.2Z"></path>
                            </g>
                            </g>
                            <g class="note">
                            <g>
                                <polyline points="614.8 155 614.8 116.8 647.5 124 647.5 162.9"></polyline>
                                <path d="M614.8,155.7c0-3.1-4.4-5.7-8.2-5.9s-9.2,2.8-9.2,6,4.7,5.6,8.7,5.6S614.8,158.8,614.8,155.7Z"></path>
                                <path d="M647.5,163.3c.1-3.1-4.4-5.7-8.2-5.9s-9.2,2.8-9.1,6,4.7,5.7,8.6,5.7S647.5,166.5,647.5,163.3Z"></path>
                            </g>
                            <g>
                                <polyline points="614.8 155 614.8 116.8 647.5 124 647.5 162.9"></polyline>
                                <path d="M614.8,155.7c0-3.1-4.4-5.7-8.2-5.9s-9.2,2.8-9.2,6,4.7,5.6,8.7,5.6S614.8,158.8,614.8,155.7Z"></path>
                                <path d="M647.5,163.3c.1-3.1-4.4-5.7-8.2-5.9s-9.2,2.8-9.1,6,4.7,5.7,8.6,5.7S647.5,166.5,647.5,163.3Z"></path>
                            </g>
                            </g>
                            <g class="note">
                            <polyline points="646.5 148.5 646.5 109.4 613.2 117.4 613.2 157.2"></polyline>
                            <path d="M646.5,149c0-3.1-4.4-5.7-8.1-5.8s-9.2,2.7-9.1,5.9,4.7,5.6,8.6,5.6S646.5,152.1,646.5,149Z"></path>
                            <path d="M613.2,156.7c.1-3.1-4.4-5.7-8.2-5.8s-9.3,2.7-9.2,6,4.7,5.6,8.7,5.6S613.2,159.9,613.2,156.7Z"></path>
                            <line x1="613.2" y1="123.2" x2="646.5" y2="115.1"></line>
                            <line x1="613.2" y1="129.4" x2="646.5" y2="121.8"></line>
                            </g>
                            <g class="note">
                            <g>
                                <path d="M636.6,152.9c0-3.2-4.4-5.8-8.2-5.9s-9.3,2.8-9.3,6,4.8,5.7,8.7,5.7S636.6,156.1,636.6,152.9Z"></path>
                                <line x1="636.6" y1="152.9" x2="636.6" y2="106.6"></line>
                                <path d="M636.6,106.8a33.2,33.2,0,0,0,3.6,7.8c3.8,5.7,7.6,6.9,8.9,11.5a13.3,13.3,0,0,1-.9,8.4"></path>
                            </g>
                            <g>
                                <path d="M636.6,152.9c0-3.2-4.4-5.8-8.2-5.9s-9.3,2.8-9.3,6,4.8,5.7,8.7,5.7S636.6,156.1,636.6,152.9Z"></path>
                                <line x1="636.6" y1="152.9" x2="636.6" y2="106.6"></line>
                                <path d="M636.6,106.8a33.2,33.2,0,0,0,3.6,7.8c3.8,5.7,7.6,6.9,8.9,11.5a13.3,13.3,0,0,1-.9,8.4"></path>
                            </g>
                            </g>
                        </g>
                        </g>
                    </svg>
                </div>
                
                
                </div>
            </div>
            <div class="et-hero-tabs-container">
                <a class="et-hero-tab" href="#tab-PDF">PDF</a>
                <a class="et-hero-tab" href="#tab-video">Video</a>
                <a class="et-hero-tab" href="#tab-your_file">Tài liệu của bạn</a>
                <a class="et-hero-tab" href="#tab-tool">Công cụ</a>
                <a class="et-hero-tab" href="#tab-feedback">Feedback</a>
                <?php if(isset($_SESSION['username']) && isset($_SESSION['admin']) && $_SESSION['admin'] == '1'): ?>
                  <a class="et-hero-tab" href="#tab-admin">Admin</a>
                <?php endif ?>
                <span class="et-hero-tab-slider"></span>
            </div>
        </section>

        <!-- Body -->
        <main class="et-main" style="background: linear-gradient(
#5588ff,
#00b8ff,
#00fff9);">
            <section class="et-slide" id="tab-PDF" style="background: none;">
                <div class="row" style="width: 100%;">
                    <div class="col-9 justify-content-center align-items-center">
                        <div>
                        <h1>Tài liệu lý thuyết</h1>
                        <h3>Chúng tôi tập hợp các tài liệu lý thuyết từ nhiều nguồn về đây</h3>
                        </div>
                    </div>
                    <div class="component col-3 justify-content-center align-items-center">
                        <!-- Book 1 -->
    <li>
      <figure class='book'>        
        <!-- Front -->        
        <ul class='hardcover_front'>
          <li>
            <img src="./img/book_cover.png" alt="" width="100%" height="100%">
            <span class="ribbon bestseller">Nº1</span>
          </li>
          <li></li>
        </ul>        
        <!-- Pages -->        
        <ul class='page'>
          <li></li>
          <li>
            <a class="btn" href="./display_file.php">Xem tiếp</a>
          </li>
          <li></li>
          <li></li>
          <li></li>
        </ul>        
        <!-- Back -->        
        <ul class='hardcover_back'>
          <li></li>
          <li></li>
        </ul>
        <ul class='book_spine'>
          <li></li>
          <li></li>
        </ul>
      </figure>
    </li>  
                    </div>
	
                </div>
            </section>
            <section class="et-slide" id="tab-video">
                <div class="row position-relative" style="width: 100%">
                    <div class="col-7 d-flex justify-content-center d-flex align-items-center">
                        <div>
                            <h1>Video hướng dẫn</h1>
                            <h3>Lý thuyết đi đôi với thực hành</h3>
                            <div class="center">
                              <button onclick="location.href='video_content.php'">
                               >>>
                              </button>
                            </div>
                            <div class="sq"></div>
                            <div class="sq"></div>
                        </div>
                    </div>
                    <div class="col-5 col-5 d-flex justify-content-center d-flex align-items-center order-first">
                    <div class="frame">
                      <div class="plane-container">
                      <a href='video_content.php' target="_blank">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      width="1131.53px" height="379.304px" viewBox="0 0 1131.53 379.304" enable-background="new 0 0 1131.53 379.304"
                      xml:space="preserve" class="plane">
                      <polygon fill="#D8D8D8" points="72.008,0 274.113,140.173 274.113,301.804 390.796,221.102 601.682,367.302 1131.53,0.223  "/>
                      <polygon fill="#C4C4C3" points="1131.53,0.223 274.113,140.173 274.113,301.804 390.796,221.102   "/>
                      </svg></a>

                      </div>
                      </div>
                      <div class="clouds">

                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="762px"
                      height="331px" viewBox="0 0 762 331" enable-background="new 0 0 762 331" xml:space="preserve" class="cloud big front slowest">
                      <path fill="#FFFFFF" d="M715.394,228h-16.595c0.79-5.219,1.201-10.562,1.201-16c0-58.542-47.458-106-106-106
                      c-8.198,0-16.178,0.932-23.841,2.693C548.279,45.434,488.199,0,417.5,0c-84.827,0-154.374,65.401-160.98,148.529
                      C245.15,143.684,232.639,141,219.5,141c-49.667,0-90.381,38.315-94.204,87H46.607C20.866,228,0,251.058,0,279.5
                      S20.866,331,46.607,331h668.787C741.133,331,762,307.942,762,279.5S741.133,228,715.394,228z"/>
                      </svg>
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="762px"
                      height="331px" viewBox="0 0 762 331" enable-background="new 0 0 762 331" xml:space="preserve" class="cloud distant smaller">
                      <path fill="#FFFFFF" d="M715.394,228h-16.595c0.79-5.219,1.201-10.562,1.201-16c0-58.542-47.458-106-106-106
                      c-8.198,0-16.178,0.932-23.841,2.693C548.279,45.434,488.199,0,417.5,0c-84.827,0-154.374,65.401-160.98,148.529
                      C245.15,143.684,232.639,141,219.5,141c-49.667,0-90.381,38.315-94.204,87H46.607C20.866,228,0,251.058,0,279.5
                      S20.866,331,46.607,331h668.787C741.133,331,762,307.942,762,279.5S741.133,228,715.394,228z"/>
                      </svg>

                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="762px"
                      height="331px" viewBox="0 0 762 331" enable-background="new 0 0 762 331" xml:space="preserve" class="cloud small slow">
                      <path fill="#FFFFFF" d="M715.394,228h-16.595c0.79-5.219,1.201-10.562,1.201-16c0-58.542-47.458-106-106-106
                      c-8.198,0-16.178,0.932-23.841,2.693C548.279,45.434,488.199,0,417.5,0c-84.827,0-154.374,65.401-160.98,148.529
                      C245.15,143.684,232.639,141,219.5,141c-49.667,0-90.381,38.315-94.204,87H46.607C20.866,228,0,251.058,0,279.5
                      S20.866,331,46.607,331h668.787C741.133,331,762,307.942,762,279.5S741.133,228,715.394,228z"/>
                      </svg>

                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="762px"
                      height="331px" viewBox="0 0 762 331" enable-background="new 0 0 762 331" xml:space="preserve" class="cloud distant super-slow massive">
                      <path fill="#FFFFFF" d="M715.394,228h-16.595c0.79-5.219,1.201-10.562,1.201-16c0-58.542-47.458-106-106-106
                      c-8.198,0-16.178,0.932-23.841,2.693C548.279,45.434,488.199,0,417.5,0c-84.827,0-154.374,65.401-160.98,148.529
                      C245.15,143.684,232.639,141,219.5,141c-49.667,0-90.381,38.315-94.204,87H46.607C20.866,228,0,251.058,0,279.5
                      S20.866,331,46.607,331h668.787C741.133,331,762,307.942,762,279.5S741.133,228,715.394,228z"/>
                      </svg>

                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="762px"
                      height="331px" viewBox="0 0 762 331" enable-background="new 0 0 762 331" xml:space="preserve" class="cloud slower">
                      <path fill="#FFFFFF" d="M715.394,228h-16.595c0.79-5.219,1.201-10.562,1.201-16c0-58.542-47.458-106-106-106
                      c-8.198,0-16.178,0.932-23.841,2.693C548.279,45.434,488.199,0,417.5,0c-84.827,0-154.374,65.401-160.98,148.529
                      C245.15,143.684,232.639,141,219.5,141c-49.667,0-90.381,38.315-94.204,87H46.607C20.866,228,0,251.058,0,279.5
                      S20.866,331,46.607,331h668.787C741.133,331,762,307.942,762,279.5S741.133,228,715.394,228z"/>
                      </svg>

                      </div>

                    </div>
            </section>
            <section class="et-slide" id="tab-your_file">
                <div class="row align-items-center justify-content-around" ;>
                    <div class="col-3">
                        <img src="./img/saved_doc2.png" style="width: 100%;">
                    </div>
                    <div class="col-4">
                        <h1>Lưu trữ tài liệu</h1>
                        <h3>Cho bạn và cho mọi người</h3>
                        <?php if(!empty($_SESSION['username'])):?>
                          <div class="center">
                              <button onclick="location.href='save_file.php'">
                               >>>
                              </button>
                            </div>
                            <div class="sq"></div>
                            <div class="sq"></div>
                        <?php else: ?>
                          <div class="center">
                              <button class="popup-btn">
                               >>>
                              </button>
                            </div>
                            <div class="sq"></div>
                            <div class="sq"></div>

                          <div class="popup-wrap">
                            <div class="popup-box">
                              <h2>Yêu cầu đăng nhập</h2>
                              <h3>Không đăng nhập là không dùng chức năng này được đâu</h3>
                              <img src="./img/need_login.gif" width="100"/>
                              <a class="close-btn popup-close" href="#">x</a>
                            </div>
                          </div>
                          <?php endif; ?>
                    </div>
                    <div class="col-3">
                        <img src="./img/saved_doc1.png" style="width: 100%;">
                    </div>
                </div>
            </section>
            <section class="et-slide" id="tab-tool">
                <div class="row">
                    <h1>Công cụ hỗ trợ</h1>
                </div>
                <div class="center">
                              <button onclick="location.href='tool_page.php'">
                               >>>
                              </button>
                            </div>
                            <div class="sq"></div>
                            <div class="sq"></div>
                <div class="row">
                <div id="webgl"></div>
                    <div id="bg-box">
                    </div>
                    <div class="svg-box">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 600">
                        <defs />
                        <defs>
                        <clipPath id="clip-path">
                            <rect id="graph-line-mask" width="105.2" height="66.7" x="439.5" y="186.6" fill="none" />
                        </clipPath>
                        <clipPath id="clip-path-2">
                            <path id="body-mask" fill="none" d="M490.4 368.3c0 63.7-38 140-84.7 140s-84.8-76.3-84.8-140 38-90.6 84.8-90.6 84.7 26.9 84.7 90.6z" />
                        </clipPath>
                        </defs>
                        <g id="Ship">

                        <g id="mid-display">
                            <rect width="320.3" height="207" x="248.8" y="116.3" fill="#282e39" stroke="#0ff" stroke-miterlimit="10" stroke-width="5" opacity=".8" rx="18.4" />
                            <g id="graph-btm">
                            <path id="graph-left" fill="#0ff" d="M439.7 292.1s4.5-19.4 8.7-19c3.6.3 4.6 9.2 7.3 9 3.4-.2 4-14 7.3-14.3 3-.2 4.7 10 8.3 10 4 0 5.1-12.6 8.8-12.8 4.1-.2 7.2 27.1 7.2 27.1z" />
                            <path id="graph-morph1" fill="none" d="M439.7 292.1s2.2-10.8 6.5-10.4c3.5.3 8.3-18.9 11-19 3.4-.3 5.6 9 9 8.7 3-.3 3.5-3.2 7-3.2 4 0 5.9 10.6 9.5 10.4 4.2-.2 4.7 13.5 4.7 13.5z" />
                            <path id="graph-right" fill="#34496a" d="M502.6 292.1s4.5-19.4 8.8-19c3.5.3 4.6 9.2 7.3 9 3.4-.2 3.9-14 7.3-14.3 3-.2 4.7 10 8.3 10 4 0 5-12.6 8.7-12.8 4.2-.2 7.3 27.1 7.3 27.1z" />
                            <path id="graph-morph2" fill="none" d="M502.6 292.1s4.5-9.8 8.8-9.4c3.5.3 4.6-6.8 7.3-7 3.4-.2 3.9 6.6 7.3 6.4 3-.3 4.7-17.9 8.3-17.9 4 0 5 16.5 8.7 16.3 4.2-.2 7.3 11.6 7.3 11.6z" />
                            </g>
                            <g id="planet">
                            <circle id="planet-base" cx="332.2" cy="207.8" r="37.3" fill="#34496a" />
                            <ellipse id="planet-circle" cx="331.5" cy="207.8" fill="none" stroke="#0ff" stroke-miterlimit="10" stroke-width="5" rx="61.8" ry="12.7" />
                            <path id="planet-top" fill="#34496a" d="M294.9 207.8a37.3 37.3 0 0174.6 0z" />
                            </g>
                            <g class="graph-circle-lb" id="graph-cir-left">
                            <circle cx="290.4" cy="287.5" r="20.8" fill="#34496a" />
                            <path fill="#0ff" d="M290.4 287.5l5.3-20.1a20.8 20.8 0 0115.5 20z" />
                            </g>
                            <g class="graph-circle-lb" id="graph-cir-mid">
                            <circle cx="345.4" cy="287.5" r="20.8" fill="#34496a" />
                            <path fill="#0ff" d="M345.4 287.5l5.2-20.1a20.8 20.8 0 0115.5 20z" />
                            </g>
                            <g id="graph-cir">
                            <circle cx="396.4" cy="292.1" r="16.4" fill="none" stroke="#34496a" stroke-miterlimit="10" stroke-width="2" />
                            <circle cx="396.4" cy="292.1" r="20.8" fill="none" stroke="#34496a" stroke-miterlimit="10" stroke-width="2" />
                            <circle cx="396.4" cy="292.1" r="11.6" fill="none" stroke="#34496a" stroke-miterlimit="10" stroke-width="2" />
                            <circle id="graph-cir-1" cx="408" cy="292.1" r="2.3" fill="#0ff" />
                            <circle id="graph-cir-2" cx="396.4" cy="275.7" r="2.3" fill="#0ff" />
                            <circle id="graph-cir-3" cx="417.2" cy="292.1" r="2.3" fill="#0ff" />
                            <circle id="graph-cir-mid-2" cx="396.4" cy="292.1" r="2.3" fill="#0ff" data-name="graph-cir-mid" />
                            </g>
                            <g id="graph-big" clip-path="url(#clip-path)">
                            <path id="graph-line" fill="none" stroke="#0ff" stroke-miterlimit="10" stroke-width="5" d="M439.7 206.4c26.3 0 26.3 34.2 52.6 34.2s26.3-34.2 52.6-34.2 26.3 34.2 52.6 34.2 26.3-34.2 52.6-34.2" />
                            </g>
                            <circle cx="275.7" cy="139.7" r="11.8" fill="#34496a" />
                            <circle id="left-top-circle" cx="275.7" cy="139.7" r="11.8" fill="#0ff" />
                            <line x1="300.8" x2="387.1" y1="134.3" y2="134.9" fill="none" stroke="#34496a" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5" />
                            <line x1="300.8" x2="338.5" y1="143.7" y2="143.9" fill="none" stroke="#34496a" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5" />
                            <circle cx="448.1" cy="161.4" r="13.3" fill="none" stroke="#34496a" stroke-miterlimit="10" stroke-width="5" />
                            <path class="circles-top" id="circle-l" fill="none" stroke="#0ff" stroke-miterlimit="10" stroke-width="5" d="M448 148.2a13.3 13.3 0 11-13.2 13.3 13.3 13.3 0 0113.3-13.3" />
                            <circle cx="491.2" cy="161.4" r="13.3" fill="none" stroke="#34496a" stroke-miterlimit="10" stroke-width="5" />
                            <path class="circles-top" id="circle-m" fill="none" stroke="#0ff" stroke-miterlimit="10" stroke-width="5" d="M491.2 148.2a13.3 13.3 0 11-13.3 13.3 13.3 13.3 0 0113.3-13.3" />
                            <circle cx="534.4" cy="161.4" r="13.3" fill="none" stroke="#34496a" stroke-miterlimit="10" stroke-width="5" />
                            <path class="circles-top" id="circle-r" fill="none" stroke="#0ff" stroke-miterlimit="10" stroke-width="5" d="M534.4 148.2a13.3 13.3 0 11-13.3 13.3 13.3 13.3 0 0113.3-13.3" />
                        </g>
                        <g id="btm-display">
                            <g id="right-display">
                            <g id="right-display-display">
                                <path fill="#282e39" stroke="#0ff" stroke-miterlimit="10" stroke-width="5" d="M654.7 461H508.6c-10.5 0-15.8-8.5-12-19l26.2-72a29.9 29.9 0 0125.8-18.9h146c10.5 0 15.8 8.5 12 19l-26.2 72a29.9 29.9 0 01-25.7 18.8z" opacity=".8" />
                                <g id="bars">
                                <polygon id="bar-3-btm" fill="#34496a" points="656.9 441.2 642.4 441.2 667.6 371.7 682.2 371.7 656.9 441.2" />
                                <polygon id="bar-3-top" fill="#0ff" points="656.9 441.2 642.4 441.2 653 412 667.5 412 656.9 441.2" />
                                <polygon id="bar-2-btm" fill="#34496a" points="633.7 441.2 619.2 441.2 644.5 371.7 659 371.7 633.7 441.2" />
                                <polygon id="bar-2-top" fill="#0ff" points="633.7 441.2 619.2 441.2 636 395.1 650.5 395.1 633.7 441.2" />
                                <polygon id="bar-1-btm" fill="#34496a" points="610.6 441.2 596.1 441.2 621.4 371.7 635.9 371.7 610.6 441.2" />
                                <polygon id="bar-1-top" fill="#0ff" points="610.6 441.2 596.1 441.2 604 419.5 618.5 419.5 610.6 441.2" />
                                </g>
                                <g id="btns" fill="#0ff">
                                <ellipse cx="546.8" cy="379.3" rx="6.5" ry="4.6" transform="rotate(-39.8 546.8 379.3)" />
                                <ellipse cx="562.7" cy="379.3" rx="6.5" ry="4.6" transform="rotate(-39.8 562.7 379.3)" />
                                <ellipse cx="578.6" cy="379.3" rx="6.5" ry="4.6" transform="rotate(-39.8 578.6 379.3)" />
                                <ellipse cx="594.5" cy="379.3" rx="6.5" ry="4.6" transform="rotate(-39.8 594.5 379.3)" />
                                <ellipse cx="540.6" cy="396.3" rx="6.5" ry="4.6" transform="rotate(-39.8 540.6 396.3)" />
                                <ellipse cx="556.5" cy="396.3" rx="6.5" ry="4.6" transform="rotate(-39.8 556.5 396.3)" />
                                <ellipse cx="572.4" cy="396.3" rx="6.5" ry="4.6" transform="rotate(-39.8 572.4 396.3)" />
                                <ellipse cx="588.3" cy="396.3" rx="6.5" ry="4.6" transform="rotate(-39.8 588.4 396.3)" />
                                <ellipse cx="534.4" cy="413.3" rx="6.5" ry="4.6" transform="rotate(-39.8 534.4 413.3)" />
                                <ellipse cx="550.3" cy="413.3" rx="6.5" ry="4.6" transform="rotate(-39.8 550.3 413.3)" />
                                <ellipse cx="566.2" cy="413.3" rx="6.5" ry="4.6" transform="rotate(-39.8 566.2 413.3)" />
                                <ellipse cx="582.1" cy="413.3" rx="6.5" ry="4.6" transform="rotate(-39.8 582.2 413.3)" />
                                <ellipse cx="528.2" cy="430.3" rx="6.5" ry="4.6" transform="rotate(-39.8 528.2 430.3)" />
                                <ellipse cx="544.1" cy="430.3" rx="6.5" ry="4.6" transform="rotate(-39.8 544.1 430.3)" />
                                <ellipse cx="560" cy="430.3" rx="6.5" ry="4.6" transform="rotate(-39.6 562.3 429.7)" />
                                <ellipse cx="575.9" cy="430.3" rx="6.5" ry="4.6" transform="rotate(-39.8 576 430.3)" />
                                </g>
                            </g>
                            <ellipse id="right-display-shadow" cx="593.3" cy="508.4" fill="#1e3855" rx="74" ry="10.9" />
                            </g>
                            <g id="left-display">
                            <g id="left-display-display">
                                <path fill="#282e39" stroke="#0ff" stroke-miterlimit="10" stroke-width="5" d="M299 461H153c-10.4 0-22-8.5-25.8-19L101 370c-3.8-10.4 1.6-18.9 12-18.9h146c10.5 0 22 8.5 25.9 18.9l26.2 72c3.8 10.4-1.6 19-12 19z" opacity=".8" />
                                <polygon fill="#0ff" points="153.1 433.3 155.7 440.3 158.2 447.3 153.6 443.8 148.9 440.3 151 436.8 153.1 433.3" />
                                <polygon fill="#0ff" points="143 433.3 146.4 433.3 151.9 448.4 148.5 448.4 143 433.3" />
                                <polygon fill="#0ff" points="193.8 448.4 191.3 441.4 188.7 434.4 193.4 437.9 198 441.4 195.9 444.9 193.8 448.4" />
                                <polygon fill="#0ff" points="203.9 448.4 200.6 448.4 195.1 433.3 198.4 433.3 203.9 448.4" />
                                <polygon fill="#0ff" points="164.4 433.3 167.8 433.3 173.3 448.4 169.9 448.4 164.4 433.3" />
                                <polygon fill="#0ff" points="174 433.3 177.4 433.3 182.9 448.4 179.5 448.4 174 433.3" />
                                <ellipse cx="199" cy="377.7" fill="#34496a" rx="5.4" ry="7.7" transform="rotate(-50.2 199 377.7)" />
                                <polygon fill="#0ff" points="198.2 380.9 197 377.7 195.9 374.6 199.2 376.1 202.6 377.7 200.4 379.3 198.2 380.9" />
                                <line x1="217.3" x2="267.5" y1="377.7" y2="377.7" fill="#282e39" stroke="#0ff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5" opacity=".8" />
                                <ellipse cx="206.2" cy="397.6" fill="#34496a" rx="5.4" ry="7.7" transform="rotate(-50.2 206.2 397.6)" />
                                <polygon fill="#0ff" points="205.4 400.7 204.2 397.6 203.1 394.4 206.4 396 209.8 397.6 207.6 399.2 205.4 400.7" />
                                <line x1="224.5" x2="274.8" y1="397.6" y2="397.6" fill="#282e39" stroke="#0ff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5" opacity=".8" />
                                <ellipse cx="213.5" cy="417.5" fill="#34496a" rx="5.4" ry="7.7" transform="rotate(-50.2 213.4 417.4)" />
                                <polygon fill="#0ff" points="212.6 420.6 211.5 417.5 210.3 414.3 213.7 415.9 217 417.5 214.8 419 212.6 420.6" />
                                <line x1="231.8" x2="282" y1="417.5" y2="417.5" fill="#282e39" stroke="#0ff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5" opacity=".8" />
                                <ellipse cx="220.7" cy="437.3" fill="#34496a" rx="5.4" ry="7.7" transform="rotate(-50.2 220.7 437.3)" />
                                <polygon fill="#0ff" points="219.8 440.5 218.7 437.3 217.6 434.2 220.9 435.8 224.3 437.3 222.1 438.9 219.8 440.5" />
                                <line x1="239" x2="289.2" y1="437.3" y2="437.3" fill="#282e39" stroke="#0ff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5" opacity=".8" />
                                <path fill="#34496a" d="M190.5 424.4h-46a7.4 7.4 0 01-6.5-4.7l-15.8-43.5c-1-2.6.4-4.7 3-4.7h46a7.4 7.4 0 016.5 4.7l15.8 43.5c1 2.6-.4 4.7-3 4.7z" />
                                <ellipse cx="157.8" cy="398" fill="#282e39" rx="17.5" ry="25.1" transform="rotate(-50.2 157.8 398)" />
                                <ellipse cx="157.8" cy="398" fill="#282e39" rx="5.1" ry="7.3" transform="rotate(-50.2 157.8 398)" />
                                <path fill="#0ff" d="M159.8 405a10 10 0 01-8.8-6.4 5.8 5.8 0 01.5-5.4 5.3 5.3 0 014.4-2.2 10 10 0 018.8 6.4 5.8 5.8 0 01-.5 5.4 5.3 5.3 0 01-4.4 2.1zm-3.9-10.6a2 2 0 00-1.6.7 2.5 2.5 0 000 2.3 6.6 6.6 0 005.4 4 2 2 0 001.7-.6 2.5 2.5 0 000-2.3 6.6 6.6 0 00-5.5-4zM173.6 405h14.5l-5.1-14h-14.4a1.8 1.8 0 00-1.7 2.6l3.2 8.7a4.1 4.1 0 003.5 2.6z" />
                            </g>
                            <ellipse id="left-display-shadow" cx="224.5" cy="511.5" fill="#1e3855" rx="74" ry="10.9" />
                            </g>
                        </g>
                        <g id="robot">
                            <path id="body-base" fill="#fff" d="M490.4 368.3c0 63.7-38 140-84.7 140s-84.8-76.3-84.8-140 38-90.6 84.8-90.6 84.7 26.9 84.7 90.6z" />
                            <g id="robot-body">
                            <ellipse id="robot-shadow" cx="405.6" cy="543.9" fill="#1e3855" rx="44.5" ry="7.1" />
                            <g clip-path="url(#clip-path-2)">
                                <g id="faces">
                                <g id="face">
                                    <ellipse id="face-back" cx="560" cy="340.9" fill="#34496a" rx="61.5" ry="32.2" />
                                    <g class="eyes" id="eyes" fill="#0ff">
                                    <ellipse cx="539.8" cy="340.9" rx="7.3" ry="13.7" />
                                    <ellipse cx="579.1" cy="340.9" rx="7.3" ry="13.7" />
                                    </g>
                                </g>
                                <g id="face-2" data-name="face">
                                    <ellipse id="face-back-2" cx="256.9" cy="340.9" fill="#34496a" data-name="face-back" rx="61.5" ry="32.2" />
                                    <g class="eyes" id="eyes-2" fill="#0ff" data-name="eyes">
                                    <ellipse cx="236.7" cy="340.9" rx="7.3" ry="13.7" />
                                    <ellipse cx="275.9" cy="340.9" rx="7.3" ry="13.7" />
                                    </g>
                                </g>
                                <g id="charge">
                                    <circle cx="406.8" cy="340.9" r="16.2" fill="#34496a" />
                                    <rect width="4.1" height="13.9" x="398.7" y="334" fill="#fff" />
                                    <rect width="4.1" height="13.9" x="410.8" y="334" fill="#fff" />
                                </g>
                                </g>
                            </g>
                            </g>
                            <path id="right-hand" fill="#fff" d="M549.7 400.7c0 15.6-31.2 28.2-56.2 28.2s-34.2-12.6-34.2-28.2 9.2-28 34.2-28 56.2 12.5 56.2 28z" />
                            <path id="left-hand" fill="#fff" d="M255.6 400.7c0-15.5 31.2-28 56.2-28s34.2 12.5 34.2 28-9.3 28.2-34.2 28.2-56.2-12.6-56.2-28.2z" />
                        </g>
                        <path id="note-1" fill="none" d="M180 317l-3.5-3.8a1 1 0 00-1.7.7v8.1a6 6 0 00-2-.3c-2.5 0-4.6 1.6-4.6 3.5s2 3.5 4.7 3.5 4.6-1.5 4.6-3.5a3 3 0 00-.7-1.9v-6.8l1.7 1.8a1 1 0 101.5-1.4z" />
                        <path id="note-2" fill="none" d="M203.4 323.4v-9.5a1 1 0 00-1-1h-9.3a1 1 0 00-1 1v8.1a6 6 0 00-2-.3c-2.5 0-4.6 1.6-4.6 3.5s2 3.5 4.7 3.5 4.6-1.5 4.6-3.5a2.9 2.9 0 00-.7-1.9V315h7.3v7.1a5.8 5.8 0 00-1.9-.3c-2.6 0-4.7 1.6-4.7 3.5s2.1 3.5 4.7 3.5 4.7-1.5 4.7-3.5a2.9 2.9 0 00-.8-1.8z" />
                        </g>
                    </svg>
                    </div>
                    <canvas class="webgl2"></canvas>
                </div>
            </section>
            <section class="et-slide" id="tab-feedback">
                <div class="row">
                    <h1>Gửi ý kiến</h1>
                </div>
                <div class="row">
                  <img class="col" src="./img/feedback.png" height="200px" >
                  <div class="center col align-self-center">
                    <button onclick="location.href='feedback.php'">
                      >>>
                    </button>
                  </div>
                  <div class="sq"></div>
                  <div class="sq"></div>
                </div>
            </section>
            <?php if(isset($_SESSION['username']) && isset($_SESSION['admin']) && $_SESSION['admin'] == '1'): ?>
            <section class="et-slide" id="tab-admin">
              <div class="console-container"><span id="text" style="color: red"></span>
              <div class="console-underscore hidden" id="console">_</div></div>
              <div class="center">
                              <button onclick="location.href='admin_panel.php'" style="z-index: 10;">
                               >>>
                              </button>
                            </div>
                            <div class="sq"></div>
                            <div class="sq"></div>
            </section>
            <?php endif ?>
        </main>

        <!--Footer-->
          <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Đây là đồ án môn học</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Danh sách thành viên</h6>
            <ul class="footer-links">
              <li>Trần Quang Nhật - 20520675</li>
              <li>Nguyễn Phúc Hưng - 20520527</li>
              <li>Phạm Phước An - 20520375</li>
              <li>Nguyễn Thị Mỹ Huyền - 20520559</li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
          <p><?php echo date("d"); ?>/<?php echo date("m"); ?>/<?php echo date("Y"); ?>
         <a href="#">UIT</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
        

        <!--Cat-->
        <script>
            "use strict";
            // Inspired By
            // https://codepen.io/abeatrize/pen/LJqYey
            var _a, _b;
            // Bongo Cat originally created by @StrayRogue and @DitzyFlama
            const ID = "bongo-cat";
            const s = (selector) => `#${ID} ${selector}`;
            const notes = document.querySelectorAll(".note");
            for (let note of notes) {
                (_a = note === null || note === void 0 ? void 0 : note.parentElement) === null || _a === void 0 ? void 0 : _a.appendChild(note.cloneNode(true));
                (_b = note === null || note === void 0 ? void 0 : note.parentElement) === null || _b === void 0 ? void 0 : _b.appendChild(note.cloneNode(true));
            }
            const music = { note: s(".music .note") };
            const cat = {
                pawRight: {
                    up: s(".paw-right .up"),
                    down: s(".paw-right .down"),
                },
                pawLeft: {
                    up: s(".paw-left .up"),
                    down: s(".paw-left .down"),
                },
            };
            const style = getComputedStyle(document.documentElement);
            const green = style.getPropertyValue("--green");
            const pink = style.getPropertyValue("--pink");
            const blue = style.getPropertyValue("--blue");
            const orange = style.getPropertyValue("--orange");
            const cyan = style.getPropertyValue("--cyan");
            gsap.set(music.note, { scale: 0, autoAlpha: 1 });
            const animatePawState = (selector) => gsap.fromTo(selector, { autoAlpha: 0 }, {
                autoAlpha: 1,
                duration: 0.01,
                repeatDelay: 0.19,
                yoyo: true,
                repeat: -1,
            });
            const tl = gsap.timeline();
            tl.add(animatePawState(cat.pawLeft.up), "start")
                .add(animatePawState(cat.pawRight.down), "start")
                .add(animatePawState(cat.pawLeft.down), "start+=0.19")
                .add(animatePawState(cat.pawRight.up), "start+=0.19")
                .timeScale(1.6);
            gsap.from(".terminal-code line", {
                drawSVG: "0%",
                duration: 0.1,
                stagger: 0.1,
                ease: "none",
                repeat: -1,
            });
            // typing for pipe function doesn't seem to be working for usage when partially applied?
            const noteElFn = gsap.utils.pipe(gsap.utils.toArray, gsap.utils.shuffle);
            const noteEls = noteElFn(music.note);
            const numNotes = noteEls.length / 3;
            const notesG1 = noteEls.splice(0, numNotes);
            const notesG2 = noteEls.splice(0, numNotes);
            const notesG3 = noteEls;
            const colorizer = gsap.utils.random([green, pink, blue, orange, cyan, "#a3a4ec", "#67b5c0", "#fd7c6e"], true);
            const rotator = gsap.utils.random(-50, 50, 1, true);
            const dir = (amt) => `${gsap.utils.random(["-", "+"])}=${amt}`;
            const animateNotes = (els) => {
                els.forEach((el) => {
                    gsap.set(el, {
                        stroke: colorizer(),
                        rotation: rotator(),
                        x: gsap.utils.random(-25, 25, 1),
                    });
                });
                return gsap.fromTo(els, {
                    autoAlpha: 1,
                    y: 0,
                    scale: 0,
                }, {
                    duration: 2,
                    autoAlpha: 0,
                    scale: 1,
                    ease: "none",
                    stagger: {
                        from: "random",
                        each: 0.5,
                    },
                    rotation: dir(gsap.utils.random(20, 30, 1)),
                    x: dir(gsap.utils.random(40, 60, 1)),
                    y: gsap.utils.random(-200, -220, 1),
                    onComplete: () => animateNotes(els),
                });
            };
            tl.add(animateNotes(notesG1)).add(animateNotes(notesG2), ">0.05").add(animateNotes(notesG3), ">0.25");
        </script>
        <!--Robot-->
        <script>
            /* SVG ANIMATION */

function animation() {
  let isLeft = false;

  /**
   * Robot
   */

  gsap.set("#left-hand", {
    x: 30,
    transformOrigin: "right center"
  });
  gsap.set("#right-hand", {
    x: -30,
    transformOrigin: "left center"
  });

  const eyesTl = gsap
    .timeline({
      repeat: -1,
      repeatDelay: 1
    })
    .to(".eyes", {
      opacity: 0,
      duration: 0.1
    })
    .to(".eyes", {
      opacity: 1,
      duration: 0.1
    });

  const robotTl = gsap
    .timeline({
      repeat: -1
    })
    .to(
      "#robot",
      {
        x: 100,
        onStart: () => {
          isLeft = false;
        }
      },
      "right"
    )
    .to(
      "#faces",
      {
        x: -60
      },
      "right"
    )
    .to(
      "#left-hand",
      {
        x: 80
      },
      "right"
    )
    .to(
      "#charge",
      {
        scaleX: 0.8
      },
      "right"
    )
    .to("#right-hand", {
      rotation: 20,
      repeat: 2,
      yoyo: true,
      ease: "power2.inOut",
      duration: 0.4
    })
    .to(
      "#robot",
      {
        x: -100,
        onStart: () => {
          isLeft = true;
        }
      },
      "left"
    )
    .to(
      "#faces",
      {
        x: 60
      },
      "left"
    )
    .to(
      "#charge",
      {
        scaleX: 0.8
      },
      "left"
    )
    .to(
      "#left-hand",
      {
        x: 30
      },
      "left"
    )
    .to(
      "#right-hand",
      {
        x: -80
      },
      "left"
    )
    .to("#left-hand", {
      rotation: -20,
      repeat: 3,
      yoyo: true,
      ease: "power1.inOut",
      duration: 0.4
    })
    .to(
      "#robot",
      {
        x: 0
      },
      "center"
    )
    .to(
      "#faces",
      {
        x: 0
      },
      "center"
    )
    .to(
      "#charge",
      {
        scaleX: 1
      },
      "center"
    )
    .to("#left-hand", {
      y: -50,
      x: -10,
      rotation: 30
    })
    .to("#left-hand", {
      rotation: 50,
      repeat: 1,
      yoyo: true,
      ease: "sine.inOut"
    })
    .to("#left-hand", {
      y: 0,
      x: 30,
      rotation: 0
    });
  robotTl.timeScale(0.8);

  /**
   * Main display
   */

  //left-top-circle
  gsap.set("#left-top-circle", {
    transformOrigin: "center",
    scale: 0
  });

  gsap.to("#left-top-circle", {
    transformOrigin: "center",
    scale: 1,
    fill: "#34496a",
    repeat: -1,
    duration: 2
  });

  //graph-left-btm
  gsap.to(".graph-circle-lb", {
    rotation: 360,
    transformOrigin: "center",
    duration: 2,
    stagger: {
      amount: 1,
      ease: "sine.inOut",
      repeat: -1
    }
  });

  //planet
  const planetTl = gsap
    .timeline({
      repeat: -1,
      yoyo: true
    })
    .set("#planet-circle", {
      rotation: 10,
      transformOrigin: "center"
    })
    .to("#planet-circle", {
      rotation: -10,
      transformOrigin: "center",
      ease: "power1.inOut"
    });

  //circle-btm-graph
  gsap.to("#graph-cir-1", {
    rotation: 360,
    ease: "none",
    transformOrigin: "-9px center",
    duration: 3,
    repeat: -1
  });

  gsap.to("#graph-cir-2", {
    rotation: 360,
    ease: "none",
    transformOrigin: "center 18px",
    duration: 4,
    repeat: -1
  });

  gsap.to("#graph-cir-3", {
    rotation: 360,
    ease: "none",
    transformOrigin: "-19px center",
    duration: 5,
    repeat: -1
  });

  gsap.to("#graph-cir-mid-2", {
    scale: 1.5,
    ease: "sine.inOut",
    transformOrigin: "center",
    repeat: -1,
    yoyo: true
  });

  //bottom-right-graph
  gsap.to("#graph-left", {
    morphSVG: "#graph-morph1",
    repeat: -1,
    yoyo: true,
    ease: Elastic.easeOut.config(1, 0.8),
    duration: 2
  });

  gsap.to("#graph-right", {
    morphSVG: "#graph-morph2",
    repeat: -1,
    yoyo: true,
    ease: "power3.inOut",
    duration: 1
  });
  //top right circle

  gsap.to(".circles-top", {
    rotation: 360,

    duration: 10,
    transformOrigin: "center",
    stagger: {
      each: 0.5,
      ease: "none",
      repeat: -1
    }
  });

  gsap.to("#circle-l", {
    drawSVG: "20",
    repeat: -1,
    yoyo: true,
    ease: Bounce.easeOut,
    duration: 1
  });

  gsap.to("#circle-m", {
    drawSVG: "80 30",
    repeat: -1,
    yoyo: true,
    ease: Bounce.easeOut,
    duration: 1.5
  });

  gsap.to("#circle-r", {
    drawSVG: "0",
    repeat: -1,
    yoyo: true,
    ease: SteppedEase.config(12),
    duration: 3
  });

  /**
   * Left Display
   */
  gsap.to("#left-display-display", {
    y: 10,
    ease: "sine.inOut",
    repeat: -1,
    yoyo: true,
    duration: 2
  });
  gsap.to("#left-display-shadow", {
    scale: 1.1,
    transformOrigin: "center",
    ease: "sine.inOut",
    repeat: -1,
    yoyo: true,
    duration: 2
  });

  //song
  const songTl = gsap
    .timeline({
      repeat: -1
    })
    .to("#left-display-display line", {
      stroke: "#34496a",
      stagger: {
        each: 0.5
      }
    })
    .to("#left-display-display line", {
      stroke: "#0ff",
      stagger: {
        each: 0.5
      }
    });

  for (let i = 0; i < 3; i++) {
    let clone1 = document.querySelector("#note-1").cloneNode(true);
    let clone2 = document.querySelector("#note-2").cloneNode(true);
    clone1.classList.add("notes");
    clone2.classList.add("notes");
    gsap.set(clone1, {
      attr: {
        d:
          "M180 317l-3.5-3.8a1 1 0 00-1.7.7v8.1a6 6 0 00-2-.3c-2.5 0-4.6 1.6-4.6 3.5s2 3.5 4.7 3.5 4.6-1.5 4.6-3.5a3 3 0 00-.7-1.9v-6.8l1.7 1.8a1 1 0 101.5-1.4z",
        fill: "#0ff"
      },
      y: 40,
      opacity: 0
    });
    gsap.set(clone2, {
      attr: {
        d:
          "M203.4 323.4v-9.5a1 1 0 00-1-1h-9.3a1 1 0 00-1 1v8.1a6 6 0 00-2-.3c-2.5 0-4.6 1.6-4.6 3.5s2 3.5 4.7 3.5 4.6-1.5 4.6-3.5a2.9 2.9 0 00-.7-1.9V315h7.3v7.1a5.8 5.8 0 00-1.9-.3c-2.6 0-4.7 1.6-4.7 3.5s2.1 3.5 4.7 3.5 4.7-1.5 4.7-3.5a2.9 2.9 0 00-.8-1.8z",
        fill: "#0ff"
      },
      x: -10,
      y: 40,
      opacity: 0
    });
    document.querySelector("svg").appendChild(clone1);
    document.querySelector("svg").appendChild(clone2);
  }

  gsap.to(".notes", {
    y: gsap.utils.random(-50, -100, 10, true),
    x: gsap.utils.random(-50, 50, 25, true),
    opacity: 1,
    duration: gsap.utils.random(1.5, 3, 1.5, true),
    stagger: {
      each: 0.5,
      ease: "sine.in",
      repeat: -1
    }
  });

  /**
   * Right Display
   */
  gsap.to("#right-display-display", {
    y: 10,
    ease: "sine.inOut",
    repeat: -1,
    yoyo: true,
    duration: 2,
    delay: 1.5
  });
  gsap.to("#right-display-shadow", {
    scale: 1.1,
    transformOrigin: "center",
    ease: "sine.inOut",
    repeat: -1,
    yoyo: true,
    duration: 2,
    delay: 1.5
  });

  //graph-lines
  gsap.to("#graph-line", {
    x: -105,
    ease: "none",
    repeat: -1,
    duration: 2
  });

  gsap.to("#bar-1-top", {
    morphSVG: "#bar-1-btm",
    repeat: -1,
    yoyo: true
  });
  gsap.to("#bar-2-top", {
    morphSVG: "#bar-2-btm",
    repeat: -1,
    yoyo: true,
    duration: 1.5
  });
  gsap.to("#bar-3-top", {
    morphSVG: "#bar-3-btm",
    repeat: -1,
    yoyo: true,
    duration: 2
  });

  //btns
  gsap.to("#btns ellipse", {
    fill: "#34496a",
    stagger: {
      amount: 1,
      grid: [4, 4],
      repeat: -1,
      yoyo: true,
      from: "random"
    }
  });

  const sizes = {
    width: window.innerWidth,
    height: window.innerHeight
  };

  /**
   * Mouse
   */

  let mouseX = 0;
  let mouseY = 0;

  window.addEventListener("mousemove", (e) => {
    mouseX = (e.clientX / sizes.width) * 2 - 1;
    mouseY = -(e.clientY / sizes.height) * 2 + 1;

    gsap.to("#mid-display", {
      x: -mouseX * 10,
      y: mouseY * 10
    });

    gsap.to("#btm-display", {
      x: -mouseX * 20,
      y: mouseY * 10
    });
  });

  document.getElementById("robot").addEventListener("click", () => {
    robotTl.pause();

    const helloTl = gsap
      .timeline({
        paused: true
      })
      .to("#faces", {
        x: isLeft ? 150 : -150,
        ease: "sine.inOut",
        repeatDelay: 1,
        repeat: 1,
        yoyo: true,

        onComplete: () => {
          robotTl.resume();
        }
      });

    helloTl.restart();
  });
}
animation();

/* stars */
//reference https://redstapler.co/space-warp-background-effect-three-js/
let scene, camera, renderer, stars, startGeometry;
const count = 5000;

function init() {
  scene = new THREE.Scene();

  startGeometry = new THREE.BufferGeometry();

  const positions = new Float32Array(count * 3);
  for (let i = 0; i < count; i++) {
    positions[i] = Math.random() * 600 - 300;
  }
  startGeometry.setAttribute(
    "position",
    new THREE.BufferAttribute(positions, 3)
  );

  let sprite = new THREE.TextureLoader().load(
    "https://i.postimg.cc/T25jx3S9/circle-05.png"
  );
  let starMaterial = new THREE.PointsMaterial({
    size: 2,
    sizeAttenuation: true,
    transparent: true,
    alphaMap: sprite
  });

  stars = new THREE.Points(startGeometry, starMaterial);
  scene.add(stars);

  /**
   * camera1
   */
  camera = new THREE.PerspectiveCamera(
    60,
    window.innerWidth / window.innerHeight,
    1,
    1000
  );
  camera.position.z = 1;
  camera.rotation.x = Math.PI / 2;

  window.addEventListener("resize", () => {
    camera.aspect = 800 / 600;
    camera.updateProjectionMatrix();
    renderer.setSize(800, 600);
  });

  renderer = new THREE.WebGLRenderer();
  renderer.setSize(800, 600);
  renderer.setClearColor("#282e39", 0.5);
  document.getElementById("webgl").appendChild(renderer.domElement);

  /**
   * Animate
   */

  function animate() {
    for (let i = 0; i < count; i++) {
      const i3 = i * 3;

      startGeometry.attributes.position.array[i3 + 1] -= 3;

      if (startGeometry.attributes.position.array[i3 + 1] < -100) {
        startGeometry.attributes.position.array[i3 + 1] = 300;
      }
    }
    startGeometry.attributes.position.needsUpdate = true;
    stars.rotation.y += 0.002;

    renderer.render(scene, camera);
    requestAnimationFrame(animate);
  }
  animate();
}

init();

/* OBJECTS */

function objects() {
  // Canvas
  const canvas = document.querySelector("canvas.webgl2");

  // scene2
  const scene2 = new THREE.Scene();

  /**
   * Objects
   */
  const objects = [];
  const objectGeometry = new THREE.IcosahedronGeometry(1, 0);
  const objectMaterial = new THREE.MeshStandardMaterial({
    color: 0x6699ff,
    metalness: 0,
    roughness: 0
  });
  for (let i = 0; i < 3; i++) {
    const object = new THREE.Mesh(objectGeometry, objectMaterial);
    object.scale.set(0.4, 0.4, 0.4);
    scene2.add(object);
    objects.push(object);
  }
  objects[0].position.set(3, 0.5, 0);
  objects[1].position.set(-3.5, 2, 0);
  objects[2].position.set(1, 3, 0);

  objects.forEach((object) => {
    gsap
      .to(object.rotation, {
        x: Math.PI * 2,
        z: Math.PI * 2,
        repeat: -1,
        ease: "none",
        duration: 8 + Math.random() * 5,
        delay: Math.random() * 50
      })
      .seek(100);

    gsap
      .to(object.position, {
        y: 1.5,
        z: -1,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut",
        duration: 4 + Math.random() * 5
      })
      .seek(100);
  });

  /**
   * Lights
   */
  const light = new THREE.AmbientLight(0xffffff, 1.0);
  scene2.add(light);

  const directionalLight = new THREE.DirectionalLight(0xff0000, 0.8);
  directionalLight.position.set(5, 10, 0);
  scene2.add(directionalLight);

  const directionalLight2 = new THREE.DirectionalLight(0xff000, 0.7);
  directionalLight2.position.set(-5, -5, 2);
  scene2.add(directionalLight2);

  /**
   * Sizes
   */
  const sizes = {
    width: window.innerWidth,
    height: window.innerHeight
  };

  window.addEventListener("resize", () => {
    // Update sizes
    sizes.width = window.innerWidth;
    sizes.height = window.innerHeight;

    // Update camera2
    camera2.aspect = sizes.width / sizes.height;
    camera2.updateProjectionMatrix();

    // Update renderer2
    renderer2.setSize(sizes.width, sizes.height);
    renderer2.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  });

  /**
   * camera2
   */
  // Base camera2
  const camera2 = new THREE.PerspectiveCamera(
    75,
    sizes.width / sizes.height,
    0.1,
    100
  );
  camera2.position.z = 5;
  scene2.add(camera2);

  /**
   * renderer2
   */
  const renderer2 = new THREE.WebGLRenderer({
    canvas: canvas,
    alpha: true
  });
  renderer2.setSize(sizes.width, sizes.height);
  renderer2.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  renderer2.setClearColor(0xffffff, 0);

  /**
   * Animate
   */
  const clock = new THREE.Clock();

  let currentIntersect = null;

  const tick = () => {
    const elapsedTime = clock.getElapsedTime();

    // Render
    renderer2.render(scene2, camera2);

    window.requestAnimationFrame(tick);
  };

  tick();
}
objects();

            </script>
            <script>
              $(document).ready(function() {
  $('.popup-btn').click(function(e) {
    $('.popup-wrap').fadeIn(500);
    $('.popup-box').removeClass('transform-out').addClass('transform-in');

    e.preventDefault();
  });

  $('.popup-close').click(function(e) {
    $('.popup-wrap').fadeOut(500);
    $('.popup-box').removeClass('transform-in').addClass('transform-out');

    e.preventDefault();
  });
});
            </script>

            <!--Admin script-->
            <script>
// function([string1, string2],target id,[color1,color2])    
consoleText(['Hello Admin', 'Đây là phần dành cho Admin'], 'text', ['blue']);

function consoleText(words, id, colors) {
  if (colors === undefined) colors = ['#fff'];
  var visible = true;
  var con = document.getElementById('console');
  var letterCount = 1;
  var x = 1;
  var waiting = false;
  var target = document.getElementById(id);
  target.setAttribute('style', 'color:' + colors[0]);
  window.setInterval(function () {

    if (letterCount === 0 && waiting === false) {
      waiting = true;
      target.innerHTML = words[0].substring(0, letterCount);
      window.setTimeout(function () {
        var usedColor = colors.shift();
        colors.push(usedColor);
        var usedWord = words.shift();
        words.push(usedWord);
        x = 1;
        target.setAttribute('style', 'color:' + colors[0]);
        letterCount += x;
        waiting = false;
      }, 1000);
    } else if (letterCount === words[0].length + 1 && waiting === false) {
      waiting = true;
      window.setTimeout(function () {
        x = -1;
        letterCount += x;
        waiting = false;
      }, 1000);
    } else if (waiting === false) {
      target.innerHTML = words[0].substring(0, letterCount);
      letterCount += x;
    }
  }, 120);
  window.setInterval(function () {
    if (visible === true) {
      con.className = 'console-underscore hidden';
      visible = false;

    } else {
      con.className = 'console-underscore';

      visible = true;
    }
  }, 400);
}
    </script>
    </body>
</html>