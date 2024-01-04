<?php include('server.php') ?>
<html lang="en">
    <head>
    <title>RLS</title>
<style>
@import url(https://fonts.googleapis.com/css?family=Merriweather);
*,
*:before,
*:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

html, body {
  background: #f1f1f1;
  font-family: 'Merriweather', sans-serif;
  padding: 1em;
}

h1 {
  text-align: center;
  color: #a8a8a8;
  text-shadow: 1px 1px 0 white;
}

form {
  max-width: 900px;
  text-align: center;
  margin: 20px auto;
}
form input, form textarea {
  border: 0;
  outline: 0;
  padding: 1em;
  -moz-border-radius: 8px;
  -webkit-border-radius: 8px;
  border-radius: 8px;
  display: block;
  width: 100%;
  margin-top: 1em;
  font-family: 'Merriweather', sans-serif;
  -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  resize: none;
}
form input:focus, form textarea:focus {
  -moz-box-shadow: 0 0px 2px #e74c3c !important;
  -webkit-box-shadow: 0 0px 2px #e74c3c !important;
  box-shadow: 0 0px 2px #e74c3c !important;
}
form #input-submit {
  color: white;
  background: #e74c3c;
  cursor: pointer;
}
form #input-submit:hover {
  -moz-box-shadow: 0 1px 1px 1px rgba(170, 170, 170, 0.6);
  -webkit-box-shadow: 0 1px 1px 1px rgba(170, 170, 170, 0.6);
  box-shadow: 0 1px 1px 1px rgba(170, 170, 170, 0.6);
}
form textarea {
  height: fit-content;
  min-height: 200px;
}

.half {
  float: left;
  width: 48%;
  margin-bottom: 1em;
}

.right {
  width: 50%;
}

.left {
  margin-right: 2%;
}

@media (max-width: 480px) {
  .half {
    width: 100%;
    float: none;
    margin-bottom: 0;
  }
}
/* Clearfix */
.cf:before,
.cf:after {
  content: " ";
  /* 1 */
  display: table;
  /* 2 */
}

.cf:after {
  clear: both;
}

.feedback {
  --normal: #414052;
  --normal-shadow: #313140;
  --normal-shadow-top: #4c4b60;
  --normal-mouth: #2e2e3d;
  --normal-eye: #282734;
  --active: #f8da69;
  --active-shadow: #f4b555;
  --active-shadow-top: #fff6d3;
  --active-mouth: #f05136;
  --active-eye: #313036;
  --active-tear: #76b5e7;
  --active-shadow-angry: #e94f1d;
  --hover: #454456;
  --hover-shadow-top: #59586b;
  margin: 0;
  padding: 0;
  list-style: none;
  display: flex;
}
.feedback label {
  position: relative;
  transition: transform 0.3s;
  cursor: pointer;
}
.feedback label:not(:last-child) {
  margin-right: 20px;
}
.feedback label input {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  outline: none;
  border: none;
  display: block;
  position: absolute;
  width: 40px;
  height: 40px;
  left: 0;
  top: 0;
  margin: 0;
  padding: 0;
  border-radius: 50%;
  background: var(--sb, var(--normal));
  box-shadow: inset 3px -3px 4px var(--sh, var(--normal-shadow)), inset -1px 1px 2px var(--sht, var(--normal-shadow-top));
  transition: background 0.4s, box-shadow 0.4s, transform 0.3s;
  -webkit-tap-highlight-color: transparent;
}
.feedback label div {
  width: 40px;
  height: 40px;
  position: relative;
  transform: perspective(240px) translateZ(4px);
}
.feedback label div svg, .feedback label div:before, .feedback label div:after {
  display: block;
  position: absolute;
  left: var(--l, 9px);
  top: var(--t, 13px);
  width: var(--w, 8px);
  height: var(--h, 1px);
  transform: rotate(var(--r, 0deg)) scale(var(--sc, 1)) translateZ(0);
}
.feedback label div svg {
  fill: none;
  stroke: var(--s);
  stroke-width: 1.5px;
  stroke-linecap: round;
  stroke-linejoin: round;
  transition: stroke 0.4s;
}
.feedback label div svg.eye {
  --s: var(--e, var(--normal-eye));
  --t: 17px;
  --w: 7px;
  --h: 4px;
}
.feedback label div svg.eye.right {
  --l: 23px;
}
.feedback label div svg.mouth {
  --s: var(--m, var(--normal-mouth));
  --l: 11px;
  --t: 23px;
  --w: 18px;
  --h: 7px;
}
.feedback label div:before, .feedback label div:after {
  content: "";
  z-index: var(--zi, 1);
  border-radius: var(--br, 1px);
  background: var(--b, var(--e, var(--normal-eye)));
  transition: background 0.4s;
}
.feedback label.angry {
  --step-1-rx: -24deg;
  --step-1-ry: 20deg;
  --step-2-rx: -24deg;
  --step-2-ry: -20deg;
}
.feedback label.angry div:before {
  --r: 20deg;
}
.feedback label.angry div:after {
  --l: 23px;
  --r: -20deg;
}
.feedback label.angry div svg.eye {
  stroke-dasharray: 4.55;
  stroke-dashoffset: 8.15;
}
.feedback label.angry input:checked {
  -webkit-animation: angry 1s linear;
          animation: angry 1s linear;
}
.feedback label.angry input:checked + div:before {
  --middle-y: -2px;
  --middle-r: 22deg;
  -webkit-animation: toggle 0.8s linear forwards;
          animation: toggle 0.8s linear forwards;
}
.feedback label.angry input:checked + div:after {
  --middle-y: 1px;
  --middle-r: -18deg;
  -webkit-animation: toggle 0.8s linear forwards;
          animation: toggle 0.8s linear forwards;
}
.feedback label.sad {
  --step-1-rx: 20deg;
  --step-1-ry: -12deg;
  --step-2-rx: -18deg;
  --step-2-ry: 14deg;
}
.feedback label.sad div:before, .feedback label.sad div:after {
  --b: var(--active-tear);
  --sc: 0;
  --w: 5px;
  --h: 5px;
  --t: 15px;
  --br: 50%;
}
.feedback label.sad div:after {
  --l: 25px;
}
.feedback label.sad div svg.eye {
  --t: 16px;
}
.feedback label.sad div svg.mouth {
  --t: 24px;
  stroke-dasharray: 9.5;
  stroke-dashoffset: 33.25;
}
.feedback label.sad input:checked + div:before, .feedback label.sad input:checked + div:after {
  -webkit-animation: tear 0.6s linear forwards;
          animation: tear 0.6s linear forwards;
}
.feedback label.ok {
  --step-1-rx: 4deg;
  --step-1-ry: -22deg;
  --step-1-rz: 6deg;
  --step-2-rx: 4deg;
  --step-2-ry: 22deg;
  --step-2-rz: -6deg;
}
.feedback label.ok div:before {
  --l: 12px;
  --t: 17px;
  --h: 4px;
  --w: 4px;
  --br: 50%;
  box-shadow: 12px 0 0 var(--e, var(--normal-eye));
}
.feedback label.ok div:after {
  --l: 13px;
  --t: 26px;
  --w: 14px;
  --h: 2px;
  --br: 1px;
  --b: var(--m, var(--normal-mouth));
}
.feedback label.ok input:checked + div:before {
  --middle-s-y: 0.35;
  -webkit-animation: toggle 0.2s linear forwards;
          animation: toggle 0.2s linear forwards;
}
.feedback label.ok input:checked + div:after {
  --middle-s-x: 0.5;
  -webkit-animation: toggle 0.7s linear forwards;
          animation: toggle 0.7s linear forwards;
}
.feedback label.good {
  --step-1-rx: -14deg;
  --step-1-rz: 10deg;
  --step-2-rx: 10deg;
  --step-2-rz: -8deg;
}
.feedback label.good div:before {
  --b: var(--m, var(--normal-mouth));
  --w: 5px;
  --h: 5px;
  --br: 50%;
  --t: 22px;
  --zi: 0;
  opacity: 0.5;
  box-shadow: 16px 0 0 var(--b);
  filter: blur(2px);
}
.feedback label.good div:after {
  --sc: 0;
}
.feedback label.good div svg.eye {
  --t: 15px;
  --sc: -1;
  stroke-dasharray: 4.55;
  stroke-dashoffset: 8.15;
}
.feedback label.good div svg.mouth {
  --t: 22px;
  --sc: -1;
  stroke-dasharray: 13.3;
  stroke-dashoffset: 23.75;
}
.feedback label.good input:checked + div svg.mouth {
  --middle-y: 1px;
  --middle-s: -1;
  -webkit-animation: toggle 0.8s linear forwards;
          animation: toggle 0.8s linear forwards;
}
.feedback label.happy div {
  --step-1-rx: 18deg;
  --step-1-ry: 24deg;
  --step-2-rx: 18deg;
  --step-2-ry: -24deg;
}
.feedback label.happy div:before {
  --sc: 0;
}
.feedback label.happy div:after {
  --b: var(--m, var(--normal-mouth));
  --l: 11px;
  --t: 23px;
  --w: 18px;
  --h: 8px;
  --br: 0 0 8px 8px;
}
.feedback label.happy div svg.eye {
  --t: 14px;
  --sc: -1;
}
.feedback label.happy input:checked + div:after {
  --middle-s-x: 0.95;
  --middle-s-y: 0.75;
  -webkit-animation: toggle 0.8s linear forwards;
          animation: toggle 0.8s linear forwards;
}
.feedback label input:checked {
  --sb: var(--active);
  --sh: var(--active-shadow);
  --sht: var(--active-shadow-top);
}
.feedback label input:checked + div {
  --m: var(--active-mouth);
  --e: var(--active-eye);
  -webkit-animation: shake 0.8s linear forwards;
          animation: shake 0.8s linear forwards;
}
.feedback label input:not(:checked):hover {
  --sb: var(--hover);
  --sht: var(--hover-shadow-top);
}
.feedback label input:not(:checked):active {
  transform: scale(0.925);
}
.feedback label input:not(:checked):active + div {
  transform: scale(0.925);
}
.feedback label:hover {
  transform: scale(1.08);
}

@-webkit-keyframes shake {
  30% {
    transform: perspective(240px) rotateX(var(--step-1-rx, 0deg)) rotateY(var(--step-1-ry, 0deg)) rotateZ(var(--step-1-rz, 0deg)) translateZ(10px);
  }
  60% {
    transform: perspective(240px) rotateX(var(--step-2-rx, 0deg)) rotateY(var(--step-2-ry, 0deg)) rotateZ(var(--step-2-rz, 0deg)) translateZ(10px);
  }
  100% {
    transform: perspective(240px) translateZ(4px);
  }
}

@keyframes shake {
  30% {
    transform: perspective(240px) rotateX(var(--step-1-rx, 0deg)) rotateY(var(--step-1-ry, 0deg)) rotateZ(var(--step-1-rz, 0deg)) translateZ(10px);
  }
  60% {
    transform: perspective(240px) rotateX(var(--step-2-rx, 0deg)) rotateY(var(--step-2-ry, 0deg)) rotateZ(var(--step-2-rz, 0deg)) translateZ(10px);
  }
  100% {
    transform: perspective(240px) translateZ(4px);
  }
}
@-webkit-keyframes tear {
  0% {
    opacity: 0;
    transform: translateY(-2px) scale(0) translateZ(0);
  }
  50% {
    transform: translateY(12px) scale(0.6, 1.2) translateZ(0);
  }
  20%, 80% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    transform: translateY(24px) translateX(4px) rotateZ(-30deg) scale(0.7, 1.1) translateZ(0);
  }
}
@keyframes tear {
  0% {
    opacity: 0;
    transform: translateY(-2px) scale(0) translateZ(0);
  }
  50% {
    transform: translateY(12px) scale(0.6, 1.2) translateZ(0);
  }
  20%, 80% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    transform: translateY(24px) translateX(4px) rotateZ(-30deg) scale(0.7, 1.1) translateZ(0);
  }
}
@-webkit-keyframes toggle {
  50% {
    transform: translateY(var(--middle-y, 0)) scale(var(--middle-s-x, var(--middle-s, 1)), var(--middle-s-y, var(--middle-s, 1))) rotate(var(--middle-r, 0deg));
  }
}
@keyframes toggle {
  50% {
    transform: translateY(var(--middle-y, 0)) scale(var(--middle-s-x, var(--middle-s, 1)), var(--middle-s-y, var(--middle-s, 1))) rotate(var(--middle-r, 0deg));
  }
}
@-webkit-keyframes angry {
  40% {
    background: var(--active);
  }
  45% {
    box-shadow: inset 3px -3px 4px var(--active-shadow), inset 0 8px 10px var(--active-shadow-angry);
  }
}
@keyframes angry {
  40% {
    background: var(--active);
  }
  45% {
    box-shadow: inset 3px -3px 4px var(--active-shadow), inset 0 8px 10px var(--active-shadow-angry);
  }
}
html {
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
}

* {
  box-sizing: inherit;
}
*:before, *:after {
  box-sizing: inherit;
}

</style>  
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body>
    <h3 onclick="location.href='index.php'">Quay về</h3>
  <h1>Feedback Form</h1>
<form class="cf">
  <div class="half left cf">
    <label for="input-name">Tên người dùng</label>
    <input type="text" id="input-name" value=<?php if(isset($_SESSION['username'])){ echo $_SESSION['username'];} else {echo "Anonymous";}?> readonly>
    <div style=" padding-top: 20px">
    <label>Mức dộ hài lòng của bạn về trang web (từ 1 đến 5)</label>
    <div class="feedback" style="margin-top: 20px; justify-content: center;">
    <label class="angry">
        <input type="radio" value="1" name="feedback" />
        <div>
            <svg class="eye left">
                <use xlink:href="#eye">
            </svg>
            <svg class="eye right">
                <use xlink:href="#eye">
            </svg>
            <svg class="mouth">
                <use xlink:href="#mouth">
            </svg>
        </div>
    </label>
    <label class="sad">
        <input type="radio" value="2" name="feedback" />
        <div>
            <svg class="eye left">
                <use xlink:href="#eye">
            </svg>
            <svg class="eye right">
                <use xlink:href="#eye">
            </svg>
            <svg class="mouth">
                <use xlink:href="#mouth">
            </svg>
        </div>
    </label>
    <label class="ok">
        <input type="radio" value="3" name="feedback" />
        <div></div>
    </label>
    <label class="good">
        <input type="radio" value="4" name="feedback" />
        <div>
            <svg class="eye left">
                <use xlink:href="#eye">
            </svg>
            <svg class="eye right">
                <use xlink:href="#eye">
            </svg>
            <svg class="mouth">
                <use xlink:href="#mouth">
            </svg>
        </div>
    </label>
    <label class="happy">
        <input type="radio" value="5" name="feedback" checked/>
        <div>
            <svg class="eye left">
                <use xlink:href="#eye">
            </svg>
            <svg class="eye right">
                <use xlink:href="#eye">
            </svg>
        </div>
    </label>
</div>
        
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 4" id="eye">
        <path d="M1,1 C1.83333333,2.16666667 2.66666667,2.75 3.5,2.75 C4.33333333,2.75 5.16666667,2.16666667 6,1"></path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 7" id="mouth">
        <path d="M1,5.5 C3.66666667,2.5 6.33333333,1 9,1 C11.6666667,1 14.3333333,2.5 17,5.5"></path>
    </symbol>
</svg>
    </div>
  </div>
  <div class="half right cf">
    <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
  </div>  
  <input type="submit" value="Submit" id="input-submit">
</form>
  
  <script>
    $(document).ready(function(){
        $('#input-submit').on('click', function(){
            $.get('submit_feedback.php',{
                username: $('#input-name').val(),
                point: $('input[name="feedback"]:checked').val(),
                content: $('#input-message').val()
            }, function(data){
                if (data == "submit success")
                    {
                        console.log("done")
                    }
            })
        })
    })
  </script>
  



</body></html>