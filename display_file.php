<html>
    <head>
<style>
body{
    overflow: hidden;
}
#holder {
  background: #eee;
  padding: 32px 0 16px 0;
}
.canvas-wrapper {
  margin-bottom: 16px;
}
canvas {
  margin: 0 auto;
  display: block;
}
</style>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="./css/admin_PDF.css" rel="stylesheet">
<link href="./css/header.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans|Maven+Pro:500' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js" integrity="sha512-q+4liFwdPC/bNdhUpZx6aXDx/h77yEQtn4I1slHydcbZK34nLaR3cAeYSJshoxIOq3mjEf7xJE8YWIUHMn+oCQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js" integrity="sha512-BbrZ76UNZq5BhH7LL7pn9A4TKQpQeNCHOo65/akfelcIBbcVvYWOFQKPXIrykE3qZxYjmDX573oa4Ywsc7rpTw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<header class="header">
    <a class="logo" href="index.php">RLS</a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
            <li><a href="display_file.php" class="link link-theme link-arrow">Tài liệu PDF</a></li>
            <li><a href="video_content.php" class="link link-theme link-arrow">Video</a></li>
            <li><a href="save_file.php" class="link link-theme link-arrow">Tài liệu của bạn</a></li>
            <li><a href="tool_page.php" class="link link-theme link-arrow">Công cụ</a></li>
        </ul>
</header>
    <div class="row">
        <!--List PDF-->
        
            <h2 style="text-align:center; margin-top:100px; color:red; font-size: 3em; font-weight: bold">
                Tài liệu lý thuyết
            </h2>
        <div class="col-7"> 
        <h4 style="text-align:center">Danh sách file PDF</h4>
            <section class="list-wrap">

            
            <input type="text" id="search-text" placeholder="Tìm kiếm" class="search-box">
                <span class="list-count"></span>
                
                
            <ul id="list" style="    overflow-y: scroll;height: 90vh; width: 100%">
            <span class="empty-item">Không tìm thấy kết quả</span>
            </ul>
            </section>
        </div>
        <!--Display PDF-->
        <div class="col-5">
            <h4 style="text-align:center">Nội dung file PDF</h4>
        <div id="holder"  style="height: 100vh; overflow:scroll; background: none;"></div>
        </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/pdfjs-dist@2.0.385/build/pdf.min.js"></script>
<!--display PDF-->
<script>
function renderPDF(url, canvasContainer, options) {

options = options || { scale: 1 };
    
function renderPage(page) {
    var viewport = page.getViewport(options.scale);
    var wrapper = document.createElement("div");
    wrapper.className = "canvas-wrapper";
    var canvas = document.createElement('canvas');
    var ctx = canvas.getContext('2d');
    var renderContext = {
      canvasContext: ctx,
      viewport: viewport
    };
    
    canvas.height = viewport.height;
    canvas.width = viewport.width;
    wrapper.appendChild(canvas)
    canvasContainer.appendChild(wrapper);
    
    page.render(renderContext);
}

function renderPages(pdfDoc) {
    for(var num = 1; num <= pdfDoc.numPages; num++)
        pdfDoc.getPage(num).then(renderPage);
}

PDFJS.disableWorker = true;
PDFJS.getDocument(url).then(renderPages);

}   
    </script>

    <!--List PDF-->
    <script>
        $(document).ready(function() {

var jobCount = $('#list .in').length;
$('.list-count').text(jobCount + ' kết quả');
  

$("#search-text").keyup(function () {
   //$(this).addClass('hidden');

  var searchTerm = $("#search-text").val();
  var listItem = $('#list').children('li');

  
  var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
  
    //extends :contains to be case insensitive
$.extend($.expr[':'], {
'containsi': function(elem, i, match, array)
{
  return (elem.textContent || elem.innerText || '').toLowerCase()
  .indexOf((match[3] || "").toLowerCase()) >= 0;
}
});
  
  
  $("#list li").not(":containsi('" + searchSplit + "')").each(function(e)   {
    $(this).addClass('hiding out').removeClass('in');
    setTimeout(function() {
        $('.out').addClass('hidden');
      }, 300);
  });
  
  $("#list li:containsi('" + searchSplit + "')").each(function(e) {
    $(this).removeClass('hidden out').addClass('in');
    setTimeout(function() {
        $('.in').removeClass('hiding');
      }, 1);
  });
  

    var jobCount = $('#list .in').length;
  $('.list-count').text(jobCount + ' kết quả');
  
  //shows empty state text when no jobs found
  if(jobCount == '0') {
    $('#list').addClass('empty');
  }
  else {
    $('#list').removeClass('empty');
  }
  
});


                
   /*  
   An extra! This function implements
   jQuery autocomplete in the searchbox.
   Uncomment to use :)
   
   
function searchList() {                
  //array of list items
  var listArray = [];

   $("#list li").each(function() {
  var listText = $(this).text().trim();
    listArray.push(listText);
  });
  
  $('#search-text').autocomplete({
      source: listArray
  });
  
  
}
                                 
searchList();
*/

                  
});
    </script>
    <!--Get all PDF content-->
    <script>
        $().ready(function(event) {
        $.get("get_PDF_file_content.php",
        {
            user: "",
        },
        function(data,success){
            data.split("///splithere///").forEach(element => {
                if(element.length != 0)
                {
                    var data_values = element.split(";");
                    //It is important that you use the file and not the filepath (The file path won't work because of security issues)
                    fetch("uploads\\"+data_values[1]).then(res => res.blob()).then(res => {
                    var header = data_values[1].replaceAll(".pdf","");
                    var user = data_values[0];
                    var time = data_values[2];
                    var fileReader = new FileReader();  
                    fileReader.onload = function() {
                        var typedarray = new Uint8Array(this.result);
                        //replaced the old function with the new api
                        const loadingTask = pdfjsLib.getDocument(typedarray).promise.then(function(pdf) {
                            thePdf = pdf;
                            viewer = document.getElementById('pdf-viewer');
                            ////Many pages
                            // for(page = 1; page <= pdf.numPages; page++) {
                            //   canvas = document.createElement("canvas");    
                            //   canvas.className = 'pdf-page-canvas';         
                            //   viewer.appendChild(canvas);            
                            //   renderPage(page, canvas);
                            // }

                            ////First page
                            canvas = document.createElement("canvas");    
                            canvas.className = 'pdf-page-canvas';         
                            //viewer.appendChild(canvas);  
                            //renderPage(1, canvas);
                            //console.log(renderPage(1, canvas))

                            renderPage(1, canvas, header, user, time)
                            
                        });

                    };
                    fileReader.readAsArrayBuffer(res);})
                }}
                
                )}
            )
            
})
    
    function renderPage(pageNumber, canvas, header, user, time) {
        thePdf.getPage(pageNumber).then(function(page) {
          viewport = page.getViewport({ scale: 1 });
          canvas.height = viewport.height;
          canvas.width = viewport.width;   
          //ctx = canvas.getContext("2d");
          //console.log(page)
          //document.getElementById('demo123').src = page
          //return canvas.getContext('2d')
          var renderTask = page.render({canvasContext: canvas.getContext('2d'), viewport: viewport});
          renderTask.promise.then(function() {
            //return canvas.toDataURL('image/jpeg')})
            html = `
                    <li class="in">
                        <img src="${canvas.toDataURL('image/jpeg')}" alt="" style="max-height:200px;max-width:100%"/>
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">
                                ${header}</h4>
                            <p class="group inner list-group-item-text">
                                Posted by: ${user}</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        Post on: ${time}</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="uploads/${header}.pdf" download>Download</a>
                                    <a class="btn btn-success" onclick="preview_PDF(\'./uploads/${header}.pdf\')">Xem</a>
                                </div>
                            </div>
                        </div>
                    </li>
            `
            $('#list').append(html)
            var jobCount = $('#list .in').length;
            $('.list-count').text(jobCount + ' kết quả');
          //return canvas.toDataURL();  
        })});
    }

    function preview_PDF(url){
        document.getElementById('holder').innerHTML = "";
        renderPDF(url, document.getElementById('holder'));
    }
    </script>
</body>
</html>