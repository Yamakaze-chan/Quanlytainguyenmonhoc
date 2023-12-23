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
                    <a href="#">
                       <i class="fa fa-camera-retro fa-2x"></i>
                        <span class="nav-text">
                            Survey Photos
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-film fa-2x"></i>
                        <span class="nav-text">
                            Surveying Tutorials
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-book fa-2x"></i>
                        <span class="nav-text">
                           Surveying Jobs
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                       <i class="fa fa-cogs fa-2x"></i>
                        <span class="nav-text">
                            Tools & Resources
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <span class="nav-text">
                            Member Map
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Documentation
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="#">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
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