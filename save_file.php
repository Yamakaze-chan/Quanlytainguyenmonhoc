<?php include ('server.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>RLS</title>
        <meta charset="UTF-8">
        <meta name="description" contents="About CM Cawley Biography website in PHP">
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
        <!--CSS-->
        <link rel="stylesheet" href="./css/save_file.css">
        <!--Script-->
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/saved_file_table.css">

</head>
<body style="overflow-x:hidden;">
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
    <div class="row" style="height: 100vh; padding-top: 100px;">
        <div class="col-3" style="background-color:blanchedalmond; text-align:center; padding-top: 20px">
        <!--add PDF file-->
        <form action="" method="post" enctype="multipart/form-data" id="pdf_form">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Tải lên file PDF</label>
                        <div class="dropzone-wrapper">
                        <div class="dropzone-desc">
                            <i class="glyphicon glyphicon-download-alt"></i>
                            <p>Choose an PDF file or drag it here.</p>
                        </div>
                        <input type="file" name="fileToUpload" id="fileToUpload" class="dropzone" accept="application/pdf" multiple>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="radio" id="share" name="share" value=1 checked> I want to share <br>
                        <input type="radio" id="share" name="share" value=0> I don't want to share
                        <input type="submit" value="Upload PDF" id="upload_file" name="upload_file" class="btn btn-primary pull-right">
                    </div>
                </div>
            </div>               
        </form>
        
        <!-- add Youtube file -->
        <form action="" method="post">
            <h3>Upload Youtube video</h3>
            <?php include('upload_file.php')?>
            <input type="text" id="input_Youtube_vid" name="input_Youtube_vid" onchange="show_thumbnail()" style="width: 90%;">
            <div>
                <p>Preview</p>
                <img id="preview_youtube_thumbnail" style="width: 90%; min-height: 200px"/>
            </div>
            <input onclick="upload_vid()" type="submit" value="Save video" id="save_vid" name="save_vid" class="btn btn-primary pull-right" >
        </form>
        </div>
        <div class="col-9" style="background: linear-gradient(45deg, #49a09d, #5f2c82);">
            <div class="row">
                <div class="table-responsive">
                    <form method="post">
                    <table class = "table table-bordered table-striped table-hover save_file_table">
                        <thead>
                            <tr>
                                <th>File</th>
                                <th>Upload time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('get_file.php') ?>
                        </tbody>
                    </table>
                    </form>
                    <?php include('delete_file.php') ?>
                </div>
            </div>
            <div class="row">
                <div class="content">
                    <h1>Đã lưu</h1>
                    <div class="scroller">
                        <ol id="video_list">
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function del(e, filename){
    $.post('delete_file.php',
    {
        file: filename,
    },
    function()
    {
        location.reload();
    }
    )
    }
    </script>
    <script>
        $(document).ready(function(){
            $('#pdf_form input').change(function () {
                $('#pdf_form p').text(this.files.length + " file(s) selected");
            });
            });
    </script>
    <script>
        function show_thumbnail()
        {
            var youtube_link = document.getElementById("input_Youtube_vid").value;
            var id = youtube_link.substr(youtube_link.indexOf("watch?v=")+8, youtube_link.length - youtube_link.indexOf("watch?v="));
            document.getElementById("preview_youtube_thumbnail").src = "https://img.youtube.com/vi/"+id+"/sddefault.jpg";
        }

        function upload_vid(){
            if(!document.getElementById("input_Youtube_vid").value)
            {
                document.getElementById("Youtube_error").style.display = "block";
            }
            else
            {
            var youtube_link = document.getElementById("input_Youtube_vid").value;
            var id = youtube_link.substr(youtube_link.indexOf("watch?v=")+8, youtube_link.length - youtube_link.indexOf("watch?v="));
            $.post('upload_file.php',
            {
                youtube_id_vid: id,
            },
            function(data){
                console.log(data);
            }
            )
            }
        }

        $(function(e){
            $.get( "get_video_content_user.php", 
            { 
                search_value: ""
            },
            function (data, success)
            {
                $('#video_list').html("");
                data.split("///splithere///").forEach(element => {
                    if(element.length != 0)
                    {
                        var data_values = element.split(";");
                        var id = data_values[2].substr(data_values[2].indexOf("watch?v=")+8, data_values[2].length - data_values[2].indexOf("watch?v="));
                        html = `
                        <li style="--bg: #FC6A03;">
                            <a href="${data_values[2]}">
                            <img src="http://img.youtube.com/vi/${id}/sddefault.jpg" min-width=300 width=480 class="align-self-center">
                            <h2>${data_values[1]}</h2>
                            </a>
                            <input type='button' id="vid_watch_later" onclick="location.href='https://www.youtube.com/watch?v=${id}';" value="Xem ngay"/>
                            <button id="vid_watch_later" onclick="delete_vid(\'${id}\')">Xóa lưu</button>
                        </li>
                        `
                        $('#video_list').append(html);
                    }
                });

            }
            )
        })

        function delete_vid(id){
        $.get('delete_video_user.php',
            {
                id: id
            },
            function(data){
                location.reload();
            }
            )
            }
    </script>
</body>