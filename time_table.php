<html lang="en"><head>
  <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,700" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<style>
:root{
  --mainColor: #14162B;
  --background: #1A1E36;
  
  --fadedText: #36384D;
  
  --mainButtons: rgb(241, 48, 78);
  
  --colorRed: rgb(241, 48, 78);
  --colorBlue: rgb(66, 134, 244);
  --colorGreen: rgb(78, 241, 48);
  --colorOrange: rgb(255, 186, 48);
  --colorYellow: rgb(239, 219, 45);
  --colorPurple: rgb(144, 45, 237);
  --colorPink: rgb(239, 98, 237);
  --colorCyan: rgb(44, 232, 185);
  
}

body {
  background: linear-gradient(to right, #396afc, #2948ff);
  
  
}
.container {
  font-family: 'Montserrat', sans-serif;
  position: fixed;
  background: var(--mainColor);
  /*height: 490px;
  width: 800px; */
  height: 100%;
  width: 100%;
/*   overflow: scroll; */
  border-radius: 6px;
  box-shadow: 0px 0px 47px -1px rgba(0,0,0,0.75);
  /*   centering a fixed element in the middle of screen */
  /*margin: -245px -400px;*/
  top: 0px;
  left: 0px;
  
}

.topHeader {
  
  color: white;
  background: var(--mainColor);
  height: 80px;
  width: 100%;
  padding: 15px 0px 15px 0px;
  text-align: center;
  z-index: 30;
  box-shadow: 0px 10px 28px -11px rgba(0,0,0,0.35);
}

h1 {
  font-size: 30px;
  margin-top: 0px;
  margin-bottom: 0px;
  display: inline-block;
  font-weight: 100;
  
}

.topHeader, th { 
  font-size: 15px;
}

.tableHeader th {
  color: rgba(255,255,255,0.6);
  font-weight: 200;
}

table {
  width: 100%;
  border-spacing: 0px;
}
td, th {
  width: calc(100% / 8);
}
td {
  height: 32px;
  border-left: 1px solid rgba(120,120,255,0.5);
  
}
.time {
  color: rgba(255,255,255,1);
  font-size: 1em;
  text-align: center;
  font-weight: bold;
  
}

tr:nth-child(2n) {
  background: rgba(120,120,255,0.06);
}

.myClass {
  background-color: var(--mainButtons);
  width: calc(100% / 8);
  height: 30px;
/* !important needed so on resize it doesnt come back to relative   */
  position: absolute !important;
  cursor: -webkit-grab; cursor:-moz-grab;
  z-index: 10;
  border-radius: 3px;
}

.myClass p {
  margin: 6px 6px;
  height: 30px;
}
.fa-trash-o {
  cursor: pointer; 
  float: right;
  transition: 300ms;
}
.fa-trash-o:hover {
  color: rgba(0,0,0,0.5);
  transition: 300ms;
} 
.myClass:active {
  cursor: -webkit-grabbing; cursor:-moz-grabbing;
  opacity: 0.7;
}

tr {
  height: 10px;
}

.title {
  margin: 0px 0px;
  text-align: center;
}

.topHeader button {
 float: right; 
 margin-right: 15px;
}


button {
  
    background-color: var(--mainButtons);
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    border-radius: 2px;
    cursor: pointer;
    transition: 300ms;
}

button:focus {
  border: none;
  outline: none;
}

button:hover {
  transform: translateY(-3px);
  transition: 300ms;
}

button:active {
  transform: translateY(4px);
  background: rgba(201, 48, 78, 1);
}

.addNew {
  margin-left: 150px;
  display: inline;
  position: absolute;
  font-size: 12px;
  font-weight: 100;
  box-shadow: 0px 10px 47px -6px rgba(0,0,0,0.75);
}

.addButton {
  height: 3em;
  margin: 20px auto;
  font-weight:200;
  display: block;
  font-size: 24px;
  box-shadow: 0px 10px 47px -6px rgba(0,0,0,0.25);
}

.triangle {
  margin: -5px 338px; 
  background: inherit;
  height: 50px;
  width: 50px;
  transform: rotate(45deg);
  z-index: 29;
}

.popUp {
  text-align: center;
  /*margin: 80px 380px;*/
  position: fixed;
  height: 400px;
  width: 400px;
  background: white;
  z-index: 30;
  border-radius: 3px;
  display: none;
  top: 50%; 
  left: 50%; 
  transform: translate(-50%, -50%)
  
}

input {
  margin-top: 20px;
  width: 70%;
  font-size: 25px;
  border: 0px solid black;
  outline: none;
  font-weight: 700;
  color: grey;
  text-align: center;
  
}

.nameInput {
  border-bottom: 5px solid var(--fadedText);
}

.enterTime {
  width: 15%;
}
.popUp {
  font-size: 20px;
}
.shake {
/*   border-bottom: 5px solid red; */
  animation-name: alertAnimation;
  animation-duration: 100ms;
  animation-iteration-count: 3;
}

@keyframes alertAnimation {
  0% {}
  50% {transform: rotate(-3deg);}
  100% {
    transform: rotate(3deg);
    
  }
}

.nameInput::-webkit-input-placeholder {
   text-align: center;
  color: rgba(0,0,0,0.2);
}
/* WEEKDAYS  */
input[type=checkbox] {
	margin: 0px 11px;
}
.checkBox {
  display:inline-block;
}

.week div {
  font-size: 15px;
  margin-top: 10px;
  text-align: center;
}

/* TIME  */
.timeBox {
  font-size: 15px;
}
.enterTime {
  width: 48px;
}
.hour{
  text-align: right;
}
.hour::-webkit-input-placeholder {
   text-align: right;
}
.halfHour{
  text-align: left;
}
.halfHour::-webkit-input-placeholder {
   text-align: left;
} 

/* COLOR */
.colorPick {  
  width: 30px;
  height: 30px;
  
}

.colorContainer {
  margin-top: 20px;
}

.color {
  margin: 0px 2px;
  display: inline-block;
  width: 25px;
  height: 25px;
  background: red;
  border-radius: 50%;
  transition: 300ms;
}

.color:hover {
  
  transform: scale(1.4, 1.4);
  transition: 300ms;
  box-shadow: inset 0px 0px 0px 4px rgba(255,255,255,0.25);
  
}

.color:active {
  transform: scale(1.2, 1.2);
}

#colorRed {background-color: var(--colorRed)}
#colorBlue {background-color: var(--colorBlue)}
#colorGreen {background-color: var(--colorGreen)}
#colorOrange {background-color: var(--colorOrange)}
#colorYellow {background-color: var(--colorYellow)}
#colorPurple {background-color: var(--colorPurple)}
#colorPink {background-color: var(--colorPink)}
#colorCyan {background-color: var(--colorCyan)}




@media print {

}

#inputDate, #Dateafterweek{
    background-color: transparent;
    border-bottom: rgba(255,255,255,0.25);
    border-radius: 1px;
    border-style: dashed;
    font-size: 1.2em;
    width: 100px
}
</style>

  
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
</head>

<body>


<div class="container">
  <div class="popUp">
 <!--  name   -->
    <input class="nameInput" type="text" placeholder="Name of the class">
 <!--  weekdays   --> 
    <div class="week">
      
      <div class="checkBox">S<input type="checkbox" value="100"></div>
      <div class="checkBox">M<input type="checkbox" value="200"></div>
      <div class="checkBox">T<input type="checkbox" value="300"></div>
       <div class="checkBox">W<input type="checkbox" value="400"></div>
       <div class="checkBox">T<input type="checkbox" value="500"></div>
       <div class="checkBox">F<input type="checkbox" value="600"></div>
       <div class="checkBox">S<input type="checkbox" value="700"></div>
      
           
    </div>
    
<!--  time   -->   
<p>Từ 7 giờ sáng đến 6 giờ 30 chiều</p> 
<div class="timeBox">   
    From: <input id="fromTimeHour" class="fromTime enterTime hour" type="number" placeholder="0" min="1" max="12">:
  <input id="fromTimeHalf" class="fromTime enterTime halfHour" type="number" placeholder="0" min="0" max="30" step="30" value="0">  

  
    To: <input id="toTimeHour" class="toTime enterTime hour" type="number" placeholder="0" min="1" max="12">:
  <input id="toTimeHalf" class="toTime enterTime halfHour" type="number" placeholder="00" min="0" max="30" step="30" value="0">  
</div>  
<!--  colors   -->
  
<!--     <div class="colorSelect"> <input type="color" class="colorPick"> </div> -->
    <div class="colorContainer">
      <div class="color" id="colorRed"></div>
      <div class="color" id="colorBlue"></div>
      <div class="color" id="colorGreen"></div>
      <div class="color" id="colorOrange"></div>
      <div class="color" id="colorYellow"></div>
      <div class="color" id="colorPurple"></div>
      <div class="color" id="colorPink"></div>
      <div class="color" id="colorCyan"></div>
    </div>
    
    <button class="addButton">Create Class!</button>
    
  </div>
  
  
  <div class="topHeader"> 
    <div style="width: 100%; display: flex; justify-content: center">
        <div>
        <h1>Thời gian biểu</h1>
        <div style="display: flex; ;margin-top: 0px;">
            <input  type="input" id="inputDate">
            <p style="margin: 20px 0px auto 0px"> - </p>
            <input  type="input" id="Dateafterweek">
        </div>
        </div>
        <div>
            <button class="addNew">Thêm</button>
        </div>
    
    </div>
    
    <table class="tableHeader" style="height: 32px">
    <tbody><tr>
      <th>Time</th>
      <th>Sunday</th>
      <th>Monday</th>
      <th>Tuesday</th>
      <th>Wednesday</th>
      <th>Thursday</th>
      <th>Friday</th>
      <th>Saturday</th>
    </tr> 
  </tbody></table>
  </div>
  
  <div class="scheduleArea" style=" position: relative; top:20px">
    
    
  <table class="tableTimes">
    
    <tbody><tr>
      <th class="time">7:00</th>
      <td class="sunday"></td>
      <td class="monday"></td>
      <td class="tuesday"></td>
      <td class="wednesday"></td>
      <td class="thursday"></td>
      <td class="friday"></td>
      <td class="saturday"></td>
    </tr>
    
    <tr>
      <th class="time ">7:30</th>
      <td class="sunday"></td>
      <td class="monday"></td>
      <td class="tuesday"></td>
      <td class="wednesday"></td>
      <td class="thursday"></td>
      <td class="friday"></td>
      <td class="saturday"></td>
    </tr>
    
    <tr>
      <th class="time">8:00</th>
      <td class="sunday"></td>
      <td class="monday"></td>
      <td class="tuesday"></td>
      <td class="wednesday"></td>
      <td class="thursday"></td>
      <td class="friday"></td>
      <td class="saturday"></td>
    </tr>
    
    <tr>
      <th class="time">8:30</th>
      <td class="sunday"></td>
      <td class="monday"></td>
      <td class="tuesday"></td>
      <td class="wednesday"></td>
      <td class="thursday"></td>
      <td class="friday"></td>
      <td class="saturday"></td>
    </tr>
    
    <tr>
      <th class="time">9:00</th>
      <td class="sunday"></td>
      <td class="monday"></td>
      <td class="tuesday"></td>
      <td class="wednesday"></td>
      <td class="thursday"></td>
      <td class="friday"></td>
      <td class="saturday"></td>
    </tr>
    
    <tr>
      <th class="time">9:30</th>
      <td class="sunday"></td>
      <td class="monday"></td>
      <td class="tuesday"></td>
      <td class="wednesday"></td>
      <td class="thursday"></td>
      <td class="friday"></td>
      <td class="saturday"></td>
    </tr>
    
    <tr>
      <th class="time">10:00</th>
      <td class="sunday"></td>
      <td class="monday"></td>
      <td class="tuesday"></td>
      <td class="wednesday"></td>
      <td class="thursday"></td>
      <td class="friday"></td>
      <td class="saturday"></td>
    </tr>
    
    <tr>
      <th class="time">10:30</th>
      <td class="sunday"></td>
      <td class="monday"></td>
      <td class="tuesday"></td>
      <td class="wednesday"></td>
      <td class="thursday"></td>
      <td class="friday"></td>
      <td class="saturday"></td>
    </tr>
    
    <tr>
      <th class="time">11:00</th>
      <td class="sunday"></td>
      <td class="monday"></td>
      <td class="tuesday"></td>
      <td class="wednesday"></td>
      <td class="thursday"></td>
      <td class="friday"></td>
      <td class="saturday"></td>
    </tr>
    
    <tr>
      <th class="time">11:30</th>
      <td class="sunday"></td>
      <td class="monday"></td>
      <td class="tuesday"></td>
      <td class="wednesday"></td>
      <td class="thursday"></td>
      <td class="friday"></td>
      <td class="saturday"></td>
    </tr>
    
    <tr>
      <th class="time">12:00</th>
      <td class="sunday"></td>
      <td class="monday"></td>
      <td class="tuesday"></td>
      <td class="wednesday"></td>
      <td class="thursday"></td>
      <td class="friday"></td>
      <td class="saturday"></td>
    </tr>
    
    <tr>
      <th class="time">12:30</th>
      <td class="sunday"></td>
      <td class="monday"></td>
      <td class="tuesday"></td>
      <td class="wednesday"></td>
      <td class="thursday"></td>
      <td class="friday"></td>
      <td class="saturday"></td>
    </tr>
    
    <tr>
      <th class="time">1:00</th>
      <td class="sunday"></td>
      <td class="monday"></td>
      <td class="tuesday"></td>
      <td class="wednesday"></td>
      <td class="thursday"></td>
      <td class="friday"></td>
      <td class="saturday"></td>
    </tr>
    
    <tr>
      <th class="time">1:30</th>
      <td class="sunday"></td>
      <td class="monday"></td>
      <td class="tuesday"></td>
      <td class="wednesday"></td>
      <td class="thursday"></td>
      <td class="friday"></td>
      <td class="saturday"></td>
    </tr>
    
    <tr>
      <th class="time">2:00</th>
      <td class="sunday"></td>
      <td class="monday"></td>
      <td class="tuesday"></td>
      <td class="wednesday"></td>
      <td class="thursday"></td>
      <td class="friday"></td>
      <td class="saturday"></td>
    </tr>
    
    <tr>
      <th class="time">2:30</th>
      <td class="sunday"></td>
      <td class="monday"></td>
      <td class="tuesday"></td>
      <td class="wednesday"></td>
      <td class="thursday"></td>
      <td class="friday"></td>
      <td class="saturday"></td>
    </tr>
    
    <tr>
      <th class="time">3:00</th>
      <td class="sunday"></td>
      <td class="monday"></td>
      <td class="tuesday"></td>
      <td class="wednesday"></td>
      <td class="thursday"></td>
      <td class="friday"></td>
      <td class="saturday"></td>
    </tr>
    
    <tr>
      <th class="time">3:30</th>
      <td class="sunday"></td>
      <td class="monday"></td>
      <td class="tuesday"></td>
      <td class="wednesday"></td>
      <td class="thursday"></td>
      <td class="friday"></td>
      <td class="saturday"></td>
    </tr>
    
    <tr>
      <th class="time">4:00</th>
      <td class="sunday"></td>
      <td class="monday"></td>
      <td class="tuesday"></td>
      <td class="wednesday"></td>
      <td class="thursday"></td>
      <td class="friday"></td>
      <td class="saturday"></td>
    </tr>
    
    <tr>
      <th class="time">4:30</th>
      <td class="sunday"></td>
      <td class="monday"></td>
      <td class="tuesday"></td>
      <td class="wednesday"></td>
      <td class="thursday"></td>
      <td class="friday"></td>
      <td class="saturday"></td>
    </tr>
    
    <tr>
      <th class="time">5:00</th>
      <td class="sunday"></td>
      <td class="monday"></td>
      <td class="tuesday"></td>
      <td class="wednesday"></td>
      <td class="thursday"></td>
      <td class="friday"></td>
      <td class="saturday"></td>
    </tr>
    
    <tr>
      <th class="time">5:30</th>
      <td class="sunday"></td>
      <td class="monday"></td>
      <td class="tuesday"></td>
      <td class="wednesday"></td>
      <td class="thursday"></td>
      <td class="friday"></td>
      <td class="saturday"></td>
    </tr>
    
    <tr>
      <th class="time">6:00</th>
      <td class="sunday"></td>
      <td class="monday"></td>
      <td class="tuesday"></td>
      <td class="wednesday"></td>
      <td class="thursday"></td>
      <td class="friday"></td>
      <td class="saturday"></td>
    </tr>
    
    <tr>
      <th class="time">6:30</th>
      <td class="sunday"></td>
      <td class="monday"></td>
      <td class="tuesday"></td>
      <td class="wednesday"></td>
      <td class="thursday"></td>
      <td class="friday"></td>
      <td class="saturday"></td>
    </tr>

    <tr>
      <th class=""><a href="index.php" style="text-decoration: none; color:Yellow">Quay về</a></th>
      <td class="" style="text-align: center"><button id="downloadPDF">Lưu về máy</button></td>
      <td class=""></td>
      <td class=""></td>
      <td class=""></td>
      <td class=""></td>
      <td class=""></td>
      <td class=""></td>
    </tr>
    
     
  </tbody></table>
    
    
    
  </div>
<!-- end of schedule area   -->
  
</div>
<!--  end of container  -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>

$('#downloadPDF').click(function () {
    html2canvas(document.querySelector(".container")).then((canvas) => {
      canvas.toBlob((blob) => {
        const url = URL.createObjectURL(blob); //creates location of image
        var a = document.createElement('a');
        a.href = url;
        a.download = "output.png";
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
      });})
    

    });  

/*

- application doesnt handle negative inputs
- to time alwasy > fromtime

*/

//for existent elements in the page
updateElements();
makeDeletable();


/*
ON CLICK EVENTS
*/

//pop up menu to add class
$(".addNew").on("click", function(){
  
  $(".popUp").fadeToggle();
  
});

//clicking to add class
$(".addButton").on("click", function(){
  
  var title = $(".nameInput").val();
  
  var checkboxValue = []; 
  
//retrives the values from selected checkboxes and pushes it into array
 $.each($("input:checked"), function(){            
        checkboxValue.push($(this).val());
   });
  
  var fromTimeHour = $("#fromTimeHour").val();
  var fromTimeHalf = $("#fromTimeHalf").val();
  
  var toTimeHour = $("#toTimeHour").val();
  var toTimeHalf = $("#toTimeHalf").val();
  
  var color = $(this).css('backgroundColor');
  // alert(color);
  
  // alert(checkboxValue + " " + typeof checkboxValue[0] + " " + checkboxValue.length); //string 
  
  //VALIDADE INPUTS
  
  if(title != "") {
    //create new div with class element and fadeout popup
    
    //CREATE NEW ELEMENTS
    for(var i = 0; i < checkboxValue.length; i++) {
      
      createNew(title, fromTimeHour, fromTimeHalf, toTimeHour, toTimeHalf, Number(checkboxValue[i]), color);
     
    } 
    
      makeDeletable();
      updateElements()
    $(".nameInput").val("");
    $(".popUp").fadeToggle();
    
    
  } else {
    //shake textbox
    //toggle
    shake();
    //untoggles after animation is done
    setTimeout(shake,310);
  }
  
});

 //clicking colors
$(".color").on("click", function() {
  
  let myColor = $(this).css('backgroundColor');
  
  $(".addButton").css('backgroundColor', myColor);
  
});

function shake () {
  $(".nameInput").toggleClass("shake");
}

function createNew(title, fromTimeHour, fromTimeHalf, toTimeHour, toTimeHalf, weekDay, color) {
  
  
  var unit = 15;
  //create new element using title+weekday as ID
  var newElement = '<div id=' + title + weekDay + ' class="myClass ui-draggable ui-draggable-handle ui-resizable"><p class="title">' + title + '<i class="fa fa-trash-o" aria-hidden="true"></i></p><div class="ui-resizable-handle ui-resizable-s" style="z-index:90;"></div></div>';
  
  //inserts it
  $(newElement).insertBefore(".tableTimes");
   
  
  //this is how we will control where the elements will appear on the grid
  //left for the day of the week
  //top for starting time
  //height interval of time
  $("#" + title + weekDay).css({
    "left": (document.documentElement.clientWidth/8)*(weekDay/100),
    "top": getStartHour(fromTimeHour, fromTimeHalf),
    "height": getToHour(fromTimeHour, fromTimeHalf, toTimeHour, toTimeHalf),
    "background-color": "" + color,
    
  });
  
  updateElements();
}

function makeResizable() {
  $( ".myClass" ).resizable({
  handles: 's',
  grid: [ 0, 15 ]
});
}

function makeDraggable() {
  $(".myClass").draggable({
  containment: 'parent',
    grid: [document.documentElement.clientWidth/8,15]
});
  console.log("dragable");
}



function updateElements() {
  makeDraggable();
  makeResizable();
  
}

function makeDeletable() {
  
  $(".fa-trash-o").on("click", function() {
    
  $(this).parent().parent().remove();
   
  
});
}

/*
NOTE: need to make sure inputs are valid on functions bellow and test more
- FROM needs to be smaller than TO
- create function validate input
*/

function correctHour(toHour) {
  
        var result;

        if(toHour < 7) {
          result = 12 + Number(toHour);
        } else {
          result = toHour;
        }
        // alert(result);
        return result;
      }

function getToHour(fromHour, fromHalf, toHour, toHalf) {
  //needs to handle 9am to 1pm types of entry
  var compensation;
  
  if(fromHalf == 30 && toHalf == 30) {
    
    compensation = 0;
    
  } else if (fromHalf == 30 ){
    
    compensation = -32;
    
  } else if(toHalf == 30){
    
    compensation = 32;
    
  } else {
    
    compensation = 0;
  }
  
    var correctedToHour = correctHour(toHour);
    var correctedFromHour = correctHour(fromHour);
    // alert(correctedHour);
    return ((correctedToHour - correctedFromHour) * 64) + compensation;
  
}

function getStartHour(fromHour, fromHalf) {
  
  let base = 0; //that gives 7am
  var unitHalf;
  
  //this rounds down or up
  if (fromHalf >= 30) {
    
    unitHalf = 32; //half an hour
  
  } else {
    
    unitHalf = 0;
  }
  
  
  if(fromHour >= 7) {
    
    return base + ((fromHour - 7) * 64) + unitHalf;
    
  } else {
    //260 is the base for anything after 12
    return  base + (32*10) + (fromHour * 64) + unitHalf;
    
  }
  
};

function validateInput (number1, number2) {
  //tittle cant be an empty string
  //fromHour > toHour
  //array of weekdays is not empty
  //color with r,g or b lower than 130 makes color of text white
}

$('#inputDate').datepicker({
    onSelect: function(_date, _datepicker){
      var myDate = new Date(_date);
      myDate.setDate(myDate.getDate()+7);
      document.getElementById('Dateafterweek').value = myDate.getMonth() + "/" + myDate.getDate() + "/" + myDate.getFullYear();}
});

    </script>
</body>
</html>