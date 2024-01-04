<html lang="en"><head>
  <meta charset="UTF-8">
  
  <title>RLS</title>
    <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">

    <meta name="apple-mobile-web-app-title" content="CodePen">

    <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">

    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111">



  
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>


  <title>CodePen - Sticky Notes</title>

    <link rel="canonical" href="https://codepen.io/gibsonmurray/pen/gOqMmvE">
  
  
  
  
<style>
@import url('https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@400;500;600&display=swap');

:root {
  --pink: #f45891;
  --yellow: #fbee9d;
  --green: #a9ef58;
  --blue: #34add1;
  --purple: #c97fe5;
}

* {
  margin: 0;
}

#board {
  position: relative;
  width: 100vw;
  height: 100vh;
  background-color: #cd995f;
  overflow: hidden;
  perspective: 1600px;
  display: flex;
  justify-content: end;
  align-items: end;
  box-sizing: border-box;
  padding: 50px;
}

.stickynote {
  position: absolute;
  width: 200px;
  height: 200px;
  box-sizing: border-box;
  padding: 10px;
  transform: rotateX(5deg);
  box-shadow: -1px 10px 5px -4px rgba(0, 0, 0, 0.012), 
              inset 0 24px 30px -12px rgba(0, 0, 0, 0.3);
  display: flex;
  justify-content: center;
  align-items: center;
}

.stickynote:nth-child(n) {
  background: var(--purple);
}

.stickynote:nth-child(2n) {
  background: var(--pink);
}

.stickynote:nth-child(3n) {
  background: var(--green);
}

.stickynote:nth-child(4n) {
  background: var(--blue);
}

.stickynote:nth-child(5n) {
  background: var(--yellow);
}

.stickynote-text {
  border-radius: 10px;
  color: #373C49;
  font-size: 18px;
  font-weight: 600;
  border: none;
  background: transparent;
  outline: none;
  text-align: center;
  resize: none;
  overflow: hidden;
  font-family: 'Playpen Sans', cursive;
}

.stickynote-text:focus {
  background-color: rgba(0,0,0,0.1);
}

.stickynote-text::placeholder {
  color: black;
  opacity: 30%;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
</head>

<body translate="no" data-new-gr-c-s-check-loaded="14.1146.0" data-gr-ext-installed="">
<a href="tool_page.php" style="text-decoration:none"><div style="background-color: #cd995f; font-size: 2rem; color: red; ">Return</div></a>
  <main id="board"><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div><div class="stickynote" style="translate: none; rotate: none; scale: none; touch-action: none; cursor: grab; user-select: none;"><textarea placeholder="Drag Me" maxlength="100" class="stickynote-text" style="height: 58px; touch-action: none;"></textarea></div></main>
  <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
<script src="https://unpkg.com/gsap@3/dist/Draggable.min.js"></script>
<script src="https://assets.codepen.io/16327/InertiaPlugin.min.js"></script>
      <script id="rendered-js">
// Create stack of sticky notes
const board = document.querySelector("#board");
for (let i = 0; i < 100; i++) {if (window.CP.shouldStopExecution(0)) break;
  const sticky = document.createElement("div");
  sticky.classList.add("stickynote");

  const text = document.createElement("textarea");
  text.type = "text";
  text.placeholder = "Drag Me";
  text.maxLength = 100;
  text.classList.add("stickynote-text");

  sticky.appendChild(text);

  board.appendChild(sticky);
}

// Dynamically change height of textarea
window.CP.exitedLoop(0);document.querySelectorAll('textarea').forEach(textarea => {
  function setHeight() {
    textarea.style.height = 'auto';
    textarea.style.height = `${textarea.scrollHeight}px`;
  }
  setHeight();
  textarea.addEventListener('input', setHeight);
  textarea.addEventListener('change', setHeight);
});

// Make list of draggable sticky notes
// Also add some cool adjustments that make it respond to speed of drag
// If you are reading this you can actually place stickies with an angle if you do it fast enough ;)
const draggables = Draggable.create(".stickynote", {
  type: "x,y",
  onDragStart: function () {
    InertiaPlugin.track(this.target, "x");
    grabNoteAnimation(this.target);
    const inputField = this.target.querySelector('.stickynote-text');
    inputField.placeholder = "Stick Me";
  },
  onDrag: function () {
    let dx = InertiaPlugin.getVelocity(this.target, "x");
    gsap.to(this.target, {
      rotation: dx * -0.003,
      duration: 0.5,
      ease: "elastic.out(1.8, 0.6)",
      onComplete: function () {
        gsap.to(this.target, {
          rotation: 0,
          duration: 0.5,
          ease: "elastic.out(1.8, 0.6)" });

      } });

  },
  onDragEnd: function () {
    releaseNoteAnimation(this.target);
    const inputField = this.target.querySelector('.stickynote-text');
    inputField.placeholder = "Write On Me";
  },
  dragClickables: false });


// Rotates backward on X axis and changes scale to appear like it is being ripped up
function grabNoteAnimation(target) {
  const timeline = gsap.timeline();
  timeline.
  to(target, {
    rotateX: 30,
    boxShadow: "-1px 14px 40px -4px rgba(0, 0, 0, 0.12), inset 0 14px 20px -12px rgba(0, 0, 0, 0.3)",
    duration: 0.3 }).

  to(target, {
    rotation: 0,
    rotateX: 5,
    scale: 1.1,
    boxShadow: "-1px 14px 40px -4px rgba(0, 0, 0, 0.12), inset 0 24px 30px -12px rgba(0, 0, 0, 0.3)",
    ease: "elastic.out(0.8, 0.5)" },
  0.15);
  timeline.play();
}

// Does the reverse of the previous function with a few different modifications to stick back down
function releaseNoteAnimation(target) {
  const timeline = gsap.timeline();
  timeline.
  to(target, {
    rotateX: 30,
    boxShadow: "-1px 10px 5px -4px rgba(0, 0, 0, 0.2), inset 0 24px 30px -12px rgba(0, 0, 0, 0.3)",
    duration: 0.3 }).

  to(target, {
    scale: 1 },
  0).
  to(target, {
    rotateX: 5,
    boxShadow: "-1px 10px 5px -4px rgba(0, 0, 0, 0.2), inset 0 24px 30px -12px rgba(0, 0, 0, 0.3)",
    ease: "elastic.out(0.8, 0.5)" },
  0.2);
  timeline.play();
}

// Fixes weirdness of typing on text box and dragging
document.querySelectorAll(".stickynote-text").forEach(textField => {
  textField.addEventListener("focus", () => {
    draggables.forEach(instance => {
      if (instance.target.contains(textField)) {
        instance.disable();
      }
    });
  });

  textField.addEventListener("blur", () => {
    draggables.forEach(instance => {
      if (instance.target.contains(textField)) {
        instance.enable();
      }
    });
  });
});
//# sourceURL=pen.js
    </script>

  



</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>