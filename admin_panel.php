<html>
  <head>
    <link rel="stylesheet" href="./css/header_admin_panel.css"> 
    <style>
        body{
    overflow: hidden;
}
    </style>
  </head>
  <body>
    <div class="area">
        <iframe id="main_content" src="./admin_PDF.php" style="width: 100vw; height:100vh"></iframe>
    </div>
    <nav class="main-menu">
            <ul>
                <li>
                    <a onclick="change_page('./admin_PDF.php')">
                        <i class="fa fa-file fa-2x"></i>
                        <span class="nav-text">
                           File
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a onclick="change_page('./admin_video.php')">
                        <i class="fa fa fa-play-circle fa-2x"></i>
                        <span class="nav-text">
                            Video
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a onclick="change_page('./admin_user.php')">
                       <i class="fa fa-user fa-2x"></i>
                        <span class="nav-text">
                            User
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a onclick="change_page('./admin_feedback.php')">
                       <i class="fa fa-smile-o fa-2x"></i>
                        <span class="nav-text">
                            Feedback
                        </span>
                    </a>
                   
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="index.php">
                         <i class="fa fa-angle-left fa-2x"></i>
                        <span class="nav-text">
                            Quay về
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
  </body>
  <script>
    function change_page(page){
        document.getElementById('main_content').src = page;
    }
  </script>
    </html>