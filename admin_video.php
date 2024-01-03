<html lang="en">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<style>
*,
*::before,
*::after {
  box-sizing: border-box;
}
img {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}
.btn {
  background-color: white;
  border: 1px solid #cccccc;
  color: #696969;
  padding: 0.5rem;
  text-transform: lowercase;
}
.btn--block {
  display: block;
  width: 100%;
  margin: 10px;
}
.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
}
.cards__item {
  display: flex;
  padding: 1rem;
}
@media (min-width: 40rem) {
  .cards__item {
    width: 50%;
  }
}
@media (min-width: 56rem) {
  .cards__item {
    width: 33.3333%;
  }
}
.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}
.card:hover .card__image {
  filter: contrast(100%);
}
.card__content {
  display: flex;
  flex: 1 1 auto;
  flex-direction: column;
  padding: 1rem;
}
.card__image {
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
  filter: contrast(70%);
  overflow: hidden;
  position: relative;
  transition: filter 0.5s cubic-bezier(0.43, 0.41, 0.22, 0.91);
}
.card__image::before {
  content: "";
  display: block;
  padding-top: 56.25%;
}
@media (min-width: 40rem) {
  .card__image::before {
    padding-top: 66.6%;
  }
}
.card__title {
  color: #696969;
  font-size: 1.25rem;
  font-weight: 300;
  letter-spacing: 2px;
  text-transform: uppercase;
}
.card__text {
  flex: 1 1 auto;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;
}
#wrap {
  margin: 50px 100px;
  display: inline-block;
  position: relative;
  height: 100px;
  width: 100%;
  float: right;
  padding: 0;
  position: relative;
}

input[type="text"] {
  height: 60px;
  font-size: 55px;
  display: inline-block;
  font-family: "Lato";
  font-weight: 100;
  border: none;
  outline: none;
  color: #555;
  padding: 3px;
  padding-right: 60px;
  width: 0px;
  position: absolute;
  top: 0;
  right: 0;
  background: none;
  z-index: 3;
  transition: width .4s cubic-bezier(0.000, 0.795, 0.000, 1.000);
  cursor: pointer;
}

input[type="text"]:focus:hover {
  border-bottom: 1px solid #BBB;
}

input[type="text"]:focus {
  width: 700px;
  z-index: 1;
  border-bottom: 1px solid #BBB;
  cursor: text;
}
input[type="submit"] {
  height: 67px;
  width: 63px;
  display: inline-block;
  color:red;
  float: right;
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAADNQTFRFU1NT9fX1lJSUXl5e1dXVfn5+c3Nz6urqv7+/tLS0iYmJqampn5+fysrK39/faWlp////Vi4ZywAAABF0Uk5T/////////////////////wAlrZliAAABLklEQVR42rSWWRbDIAhFHeOUtN3/ags1zaA4cHrKZ8JFRHwoXkwTvwGP1Qo0bYObAPwiLmbNAHBWFBZlD9j0JxflDViIObNHG/Do8PRHTJk0TezAhv7qloK0JJEBh+F8+U/hopIELOWfiZUCDOZD1RADOQKA75oq4cvVkcT+OdHnqqpQCITWAjnWVgGQUWz12lJuGwGoaWgBKzRVBcCypgUkOAoWgBX/L0CmxN40u6xwcIJ1cOzWYDffp3axsQOyvdkXiH9FKRFwPRHYZUaXMgPLeiW7QhbDRciyLXJaKheCuLbiVoqx1DVRyH26yb0hsuoOFEPsoz+BVE0MRlZNjGZcRQyHYkmMp2hBTIzdkzCTc/pLqOnBrk7/yZdAOq/q5NPBH1f7x7fGP4C3AAMAQrhzX9zhcGsAAAAASUVORK5CYII=) center center no-repeat;
  text-indent: -10000px;
  border: none;
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  cursor: pointer;
  opacity: 0.4;
  cursor: pointer;
  transition: opacity .4s ease;
}

input[type="submit"]:hover {
  opacity: 0.8;
}
</style>
</head>

<body style="padding-left: 60px">
    <header>
    <h1 style="text-align:center">Danh sách <text style="color:red">Video</text></h1>
            <h3 style="text-align:center">
                Trang chỉnh sửa video trên hệ thống dành cho Admin
            </h3>
    </header>
    <!--Search button-->
<div id="wrap">
  <input id="search" name="search" type="text" placeholder="What're we looking for ?"><input id="search_submit" value="Rechercher" type="submit">
</div>
<!--Main content-->
  <ul class="cards">
</ul>
</body>
<script>
    $(function(e){
            $.get( "get_video_content.php", 
            { 
                search_value: ""
            },
            function (data, success)
            {
                console.log(data)
                $('.cards').html("");
                data.split("///splithere///").forEach(element => {
                    if(element.length != 0)
                    {
                        var data_values = element.split(";");
                        var id = data_values[2].substr(data_values[2].indexOf("watch?v=")+8, data_values[2].length - data_values[2].indexOf("watch?v="));
                        html = `
                        <li class="cards__item">
                            <div class="card">
                            <img src="http://img.youtube.com/vi/${id}/sddefault.jpg" class = "card__image">
                            <div class="card__content">
                                <div class="card__title">${data_values[1]}</div>
                                <button class="btn btn--block card__btn" onclick="window.open('https://www.youtube.com/embed/${id}','_blank');">Xem</button>
                                <button class="btn btn--block card__btn" onclick="Delete_video(\'${id}\')">Xóa</button>
                            </div>
                            </div>
                        </li>
                        
                        `
                        $('.cards').append(html);
                    }
                });

            }
            )
        })

        function Delete_video(id){
            $.get('delete_video_admin.php',
                {
                    id: id,
                },
                function(){
                    location.reload()
                }
            )
        }

        $('#search').keyup(function(e){
            $.get( "get_video_content.php", 
            { 
                search_value: $('#search').val()
            },
            function (data, success)
            {
                console.log(data)
                $('.cards').html("");
                data.split("///splithere///").forEach(element => {
                    if(element.length != 0)
                    {
                        var data_values = element.split(";");
                        var id = data_values[2].substr(data_values[2].indexOf("watch?v=")+8, data_values[2].length - data_values[2].indexOf("watch?v="));
                        html = `
                        <li class="cards__item">
                            <div class="card">
                            <img src="http://img.youtube.com/vi/${id}/sddefault.jpg" class = "card__image">
                            <div class="card__content">
                                <div class="card__title">${data_values[1]}</div>
                                <button class="btn btn--block card__btn" onclick="window.open('https://www.youtube.com/embed/${id}','_blank');">Xem</button>
                                <button class="btn btn--block card__btn" onclick="Delete_video(\'${id}\')">Xóa</button>
                            </div>
                            </div>
                        </li>
                        
                        `
                        $('.cards').append(html);
                    }
                });

            }
            )
        })
</script>
</html>