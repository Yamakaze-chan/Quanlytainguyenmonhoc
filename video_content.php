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
        <link rel="stylesheet" href="./css/video_content.css">
        <!--Script-->
        
    </head>
    <body>
        <header class="header">
            <a class="logo" href=".page-top">PixelStretch</a>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
                <ul class="menu">
                    <li><a href="#one" class="link link-theme link-arrow">PART 1</a></li>
                    <li><a href="#two" class="link link-theme link-arrow">PART 2</a></li>
                    <li><a href="#three" class="link link-theme link-arrow">PART 3</a></li>
                    <li><a href="#four" class="link link-theme link-arrow">PART 4</a></li>
                </ul>
        </header>
        <div id="wrap" style="width: 100%;">
            <form action="GET" autocomplete="on" action="video_content.php">
                <input id="search" name="search" type="text" placeholder="What're we looking for ?"><input id="search_submit" value="Rechercher" type="submit">
            </form>
        </div>
        <div class="content">
            <h1>Tất cả</h1>
            <div class="scroller">
                <ol id="video_list">
                </ol>
            </div>
            <h1>Đã lưu</h1>
        </div>
    </body>
    <script>
        $(function(e){
            $.get( "get_video_content.php", 
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
                            <img src="http://img.youtube.com/vi/${id}/sddefault.jpg" width=480 class="align-self-center">
                            <h2>${data_values[1]}</h2>
                            </a>
                            <button id="vid_watch_later">Hover 2</button>
                        </li>
                        `
                        $('#video_list').append(html);
                    }
                });

            }
            )
        })

        $('#search').keypress(function (e) {
        if (e.which == 13) {
            $.get( "get_video_content.php", 
            { 
                search_value: $(this).val()
            },
            function (data, success)
            {
                $('#video_list').html("");
                if (data.length === 0)
                {
                        $('#video_list').append(`
                            <div style="width: 100%; height: 600px">
                                
                                <h1 style="text-align: center; font-size: 3em; color: gray">Sorry, not found</h1>
                                <div style="text-align:center">
                                    <img src="./img/Not_found(1).gif" class="align-self-center" style="width:100%; max-width:400px">
                                <div>
                            </div>
                        `);
                }
                else{
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
                            <button id="vid_watch_later">Hover 2</button>
                            </a>
                        </li>
                        `
                        $('#video_list').append(html);
                    }
                    
                });
                }
            }
            )
            return false;    //<---- Add this line
        }
        });
    </script>
</html>