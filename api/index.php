
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
            	请求地址 http://42.51.8.139/api/163.php <br>
            	请求方式 : GET 
            必须参数 type 指定api的工作方式 <br>
歌曲信息:
type=sang<br>
必要参数：<br>
&nbsp;&nbsp;id：歌曲ID<br>
<br><hr>
搜索:
type=so<br>
必要参数：<br>
&nbsp;&nbsp;s：搜索的内容<br>
&nbsp;&nbsp;limit：获取的数量<br>
&nbsp;&nbsp;stype：搜索的类型<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;歌曲 1<br>
&nbsp;&nbsp;&nbsp;&nbsp;专辑 10<br>
&nbsp;&nbsp;&nbsp;&nbsp;歌手 100<br>
&nbsp;&nbsp;&nbsp;&nbsp;歌单 1000<br>
&nbsp;&nbsp;&nbsp;&nbsp;用户 1002<br>
&nbsp;&nbsp;&nbsp;&nbsp;mv 1004<br>
&nbsp;&nbsp;&nbsp;&nbsp;歌词 1006<br>
&nbsp;&nbsp;&nbsp;&nbsp;主播电台 1009<br>
<br><hr>
歌单
type=playlist<br>
必要参数：1<br>
&nbsp;&nbsp;id：歌单ID<br>

歌词:
type=lrc<br>
必要参数：<br>
id：歌曲ID<br>
lv：值为-1，是否搜索lyric格式<br>
tv：值为-1，是否搜索tlyric格式<br>
            </p>
        </div>
    </body>
</html>
