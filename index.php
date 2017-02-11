
<!DOCTYPE html>
<?php
/**
* Created by yeyuxingchen
* Date: 2017年2月9日22:27:45
*/
error_reporting(E_ALL || ~E_NOTICE);
require './so.php';
$id_arr = so($type =  $_POST["type"],$s =$_POST["name"],$limit= $_POST["limit"]);

for($x = 0;$x<$limit;$x++){
	$musicp_arr[$x] = getmusicp($id_arr[$x]);
	//echo $musicp_arr[$x][0].$musicp_arr[$x][1].$musicp_arr[$x][2].$musicp_arr[$x][3];
	//echo "127.0.0.1/wyyy/goto.php?go=".$id_arr[$x]."<br>";
}
				?>
<html>
    <head>
        <title>网易云音乐搜索</title>
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
        <div>
        搜索<br>
            <form action="index.php" method="post">
				Name: <input type="text" name="name" value= "小小"><br>
				type: <input type="text" name="type" value= 1><br>
				limit: <input type="text" name="limit" value = 10><br>
				<input type="submit">
			</form>
			<ul type="none">
			<?php
			for($x = 0;$x<$limit;$x++){
				echo "<li><img src=\"".$musicp_arr[$x][2]."\" width=\"50\" height=\"50\">";
				echo $musicp_arr[$x][1]." - ".$musicp_arr[$x][0];
				echo "&nbsp;下载:"."<a href=\./goto.php?go=".$id_arr[$x]."\">下载</a>"."<li>";
			}
			?>
			</ul>
        </div>
		<audio autoplay="autopaly">
			<source src="<?php echo "./goto.php?go=".$id_arr[0];?>" type="audio/mp3" />
		</audio>
    </body>
</html>
