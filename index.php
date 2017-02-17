
<!DOCTYPE html>
<html>
    <head>
        <title>网易云音乐api</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <link rel="shortcut icon" href="favicon.png">
        <style>
            a{
                color:#333;
                text-decoration: none;
            }
            p.copyright{
                font-size: 0.8em;
            }
            p a img{
                width: 17px;
                height: 17px;
            }
            span.checked{
                background-color: #ccc;
            }
            span.version{
                cursor: pointer;
            }
            ::selection {
                color: #414141;
                background-color: rgba(0,0,0,0.2);
            }
        </style>
    </head>
    <body>
        <div class="content new" style="display:block">
            <p>请求参数<br>
            	请求地址 http://42.51.8.139/api/ <br>
                search 搜索词<br>
                type 指定类型，对应关系如下，默认为 1<br>
                &nbsp;&nbsp;1 单曲&nbsp;支持！<br>
                &nbsp;&nbsp;10 专辑 <br>
                &nbsp;&nbsp;100 歌手<br>
                &nbsp;&nbsp;1000 歌单<br>
                &nbsp;&nbsp;1002 用户<br>
                &nbsp;&nbsp;1004 mv<br>
                &nbsp;&nbsp;1006 歌词<br>
                &nbsp;&nbsp;1009 主播电台<br>
                limit 指定返回结果数量，默认为 20<br>
                offset 指定偏移数量，用于分页，默认为 0<br>
            </p>
        </div>
    </body>
</html>
