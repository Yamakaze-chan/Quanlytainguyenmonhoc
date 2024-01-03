<?php include('server.php') ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" contents="About CM Cawley Biography website in PHP">
        <!--Lib-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js" integrity="sha512-q+4liFwdPC/bNdhUpZx6aXDx/h77yEQtn4I1slHydcbZK34nLaR3cAeYSJshoxIOq3mjEf7xJE8YWIUHMn+oCQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js" integrity="sha512-BbrZ76UNZq5BhH7LL7pn9A4TKQpQeNCHOo65/akfelcIBbcVvYWOFQKPXIrykE3qZxYjmDX573oa4Ywsc7rpTw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!--Jquery-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
        <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/DrawSVGPlugin3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.15/lodash.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <!--Bootstrap5-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <!--CSS-->
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/display_file.css">
        <!--Script-->
        
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
                    <li><a href="#four" class="link link-theme link-arrow">Công cụ</a></li>
                </ul>
        </header>
        <div class="container" style="padding-top: 100px">
            <div class="well well-sm">
                <strong>Display</strong>
                <div class="btn-group">
                    <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
                    </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                        class="glyphicon glyphicon-th"></span>Grid</a>
                </div>
            </div>
            <div id="products" class="row">
            </div>
        </div>
        <script>   
    var scale = 1;
                    
    $().ready(function(event) {
        $.get("get_PDF_file_content.php",
        {

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
                }})}
            )
            
})
    
    function renderPage(pageNumber, canvas, header, user, time) {
        thePdf.getPage(pageNumber).then(function(page) {
          viewport = page.getViewport({ scale: scale });
          canvas.height = viewport.height;
          canvas.width = viewport.width;   
          //ctx = canvas.getContext("2d");
          //console.log(page)
          //document.getElementById('demo123').src = page
          //return canvas.getContext('2d')
          var renderTask = page.render({canvasContext: canvas.getContext('2d'), viewport: viewport});
          renderTask.promise.then(function() {
            console.log(canvas.toDataURL('image/jpeg'))
            //return canvas.toDataURL('image/jpeg')})
            html = `
            <div class="item  col-xs-4 col-lg-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="${canvas.toDataURL('image/jpeg')}" alt="" />
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `
            $('#products').append(html)
          //return canvas.toDataURL();  
        })});
    }
</script>


    </body>
    <script>
        $(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});
    </script>
</html>