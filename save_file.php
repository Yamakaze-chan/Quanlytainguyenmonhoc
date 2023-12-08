<!DOCTYPE html>
<html lang="en">
    <head>
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
        <!--Script-->
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/saved_file_table.css">
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
    <div class="row" style="height: 100vh; padding-top: 100px;">
        <div class="col-3" style="background-color:blanchedalmond; text-align:center; padding-top: 20px">
        <form action="" method="post" enctype="multipart/form-data">
            <div style="display: inline-grid;">
                Select file to upload (PDF only):
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="radio" id="share" name="share" value=1 checked> I want to share <br>
                <input type="radio" id="share" name="share" value=0> I don't want to share
                <input type="submit" value="Upload Image" id="upload_file" name="upload_file">
            </div>
        </form>
        <?php include('upload_file.php')?>
        </div>
        <div class="col-9" style="background: linear-gradient(45deg, #49a09d, #5f2c82);">
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
</body>