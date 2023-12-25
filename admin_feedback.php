<html>
    <head>
  
  
  <style>

/* this declares a better box model */
* { -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; }



.list-wrap label {
  color:#00BDE8;
}
.search-box {
  clear:left;
  width:100%;
  padding:0.4em;
  font-size:1em;
  color:#555;
}



li {
  transition-property: margin, background-color, border-color;
  transition-duration: .4s, .2s, .2s;
  transition-timing-function: ease-in-out, ease, ease;
}

.empty-item {
  transition-property: opacity;
  transition-duration: 0s;
  transition-delay: 0s;
  transition-timing-function: ease;
}

.empty .empty-item {
  transition-property: opacity;
  transition-duration: .2s;
  transition-delay: .3s;
  transition-timing-function: ease;
}

.hiding {
  margin-left:-100%;
  opacity:0.5;
}

.hidden {
  display:none;
}

ul {
  float:left;
  width:100%;
  margin:2em 0;
  padding:0;
  position:relative;
}

ul:before {
  position:absolute;
  left:-2.8em;
  font-size:3em;
  text-align:right;
  top:1.5em;
  color:#ededed;
  font-weight:bold;
  font-family: 'Maven Pro', sans-serif;
  transform:rotate(-90deg);
}

li {
  float:left;
  clear:left;
  width:100%;
  margin:0.2em 0;
  padding:0.5em 0.8em;
  list-style:none;
  background-color:#f2f2f2;
  border-left:5px solid #003842;
  cursor:pointer;
  color:#333;
  position:relative;
  z-index:2;

}

li:hover {
  background-color:#f9f9f9;
  border-color:#00BDE8;
}

.empty-item {
  background:#fff;
  color:#ddd;
  margin:0.2em 0;
  padding:0.5em 0.8em;
  font-style:italic;
  border:none;
  text-align:center;
  visibility:hidden;
  opacity:0;
  float:left;
  clear:left;
  width:100%;
}

.empty .empty-item {
  opacity:1;
  visibility:visible;
}







/*
The following are styles purely for the surroundings
*/



body {
  background-color:#fff;
  font-family:'Open Sans', sans-serif;
  margin:0;
  padding:0;
  font-size:1em;
}

a {color:#00BDE8;}

h1 {
  font-size:2.6em;
  margin:0;
  padding-top:1.5em;
  text-align:center;
  font-family: 'Maven Pro', sans-serif;
}
h3 {
  margin:0 0 2em;
  text-align:center;
font-weight:normal;
font-family: georgia, times;
font-style:italic;
  color:#777;
  font-size:1em;
}

.info {
  float:left;
  width:60%;
  margin:2em 20%;
  padding:2em 0;
  background:#f9f9f9;
  border-left:5px solid #003842;
  padding:10px 20px;
}

.list-wrap {
  float:left;
  width:40%;
  margin:2em 30%;
  padding:2em 0;
}

p {
  text-align:left;
  font-size:1em;
}

.cta {
  float:left;
  width:100%;
  text-align:center;
  color:#999;
  font-family:georgia, times;
  font-style:italic;
  margin:2em 0;
}

.cta a {
  font-size:1.5em;
  font-style:normal;
  font-family: 'Maven Pro', sans-serif;
  text-decoration:none;
  line-height:1.5em;
}

.topdeco {
  float:left;
  width:100%;
  height:10px;
  position:fixed;
  z-index:10;
}

.topdeco span {
  float:left;
  width:25%;
  height:100%;
}

.deco span:nth-child(1) {
  background:#FF8220;
}
.deco span:nth-child(2) {
  background:#000;
}
.deco span:nth-child(3) {
  background:#FFA00A;
}
.deco span:nth-child(4) {
  background:#00BDE8;
}

.feedback_header_name{
    color: blue;
    font-size: 2em;
}
.feedback_header_time{
    font-size: 1.5em;
    color: #555;
}
.feedback_main_content{
    padding: 10px;
    margin: 10px;
    font-size: 1.3em;
}
.feedback_button_delete{
    z-index: 2;
}

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
  
  <h1>Danh sách Feedback</h1>
  <h3>
    Nơi tổng hợp các feedback
  </h3>

 <section class="list-wrap">

  <input type="text" id="search-text" placeholder="Tìm kiếm" class="search-box">
    
    
<ul id="list">
  <span class="empty-item">no results</span>
</ul>
   </section>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
      <script>
$(document).ready(function () {

  var jobCount = $('#list .in').length;
  $('.list-count').text(jobCount + ' items');


  $("#search-text").keyup(function () {
    //$(this).addClass('hidden');

    var searchTerm = $("#search-text").val();
    var listItem = $('#list').children('li');


    var searchSplit = searchTerm.replace(/ /g, "'):containsi('");

    //extends :contains to be case insensitive
    $.extend($.expr[':'], {
      'containsi': function (elem, i, match, array)
      {
        return (elem.textContent || elem.innerText || '').toLowerCase().
        indexOf((match[3] || "").toLowerCase()) >= 0;
      } });



    $("#list li").not(":containsi('" + searchSplit + "')").each(function (e) {
      $(this).addClass('hiding out').removeClass('in');
      setTimeout(function () {
        $('.out').addClass('hidden');
      }, 300);
    });

    $("#list li:containsi('" + searchSplit + "')").each(function (e) {
      $(this).removeClass('hidden out').addClass('in');
      setTimeout(function () {
        $('.in').removeClass('hiding');
      }, 1);
    });


    var jobCount = $('#list .in').length;
    $('.list-count').text(jobCount + ' items');

    //shows empty state text when no jobs found
    if (jobCount == '0') {
      $('#list').addClass('empty');
    } else
    {
      $('#list').removeClass('empty');
    }

  });
});
    </script>
    <script>
        $(document).ready(function(){
            $.get('get_admin_feedback.php',{

            },
            function(data){
                data.split("///splithere///").forEach(element => {
                    if(element.length != 0){
                        var data = element.split(";");
                        var star = "";
                        for(var i = 0; i< data[3]; i++)
                        {star = star + `<i class="fa-solid fa-star" style="color: yellow"></i>`;}
                html=`
                <li class="in">
                    <div class="feedback_header row justify-content-between">
                        <div class="col">
                            <text class="feedback_header_name row" style="margin-left: 0px">${data[0]}</text>
                            ${star}
                        </div>
                        <div class="feedback_header_time col" style="text-align: end;">${data[1]}</div>
                    </div>
                    <div class="feedback_content row">
                        <text class="feedback_main_content">${data[2]}</text>
                    </div>
                    <div class="feedback_button row">
                        <button class="feedback_button_delete" onclick="delete_feedback(this, \'${data[0]}\', \'${data[1]}\', \'${data[2]}\', \'${data[3]}\')">Xóa</button>
                    </div>
                </li>
                `
                $('#list').append(html);
                    }
                })
            })
        })

        function delete_feedback(t, username, time, content, point){
            $.get('delete_admin_feedback.php',{
                username: username,
                time: time,
                content: content,
                point: point,
            },
            function(){
                t.parentNode.parentNode.parentNode.removeChild(t.parentNode.parentNode);
            })
        }
    </script>

  



</body></html>