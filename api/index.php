<?php
<?php
/**
* Created by yeyuxingchen
* Date: 2017年2月18日01:48:47
* action： api主页
*/
/**
/*请求参数
type 指定类型，对应关系如下，默认为 song
  song 单曲
  lyric 歌词 
  comments 评论
  detail 歌曲详情
  artist 歌手
  album 专辑
  playlist 歌单
  mv MV
  djradio 主播电台
  dj 主播电台单曲 id
  detail_dj 主播电台歌曲详情
  search 搜索
id 分类对应的ID
br 当 type 为单曲时，指定歌曲码率，可用值为 128000,198000,320000 ，默认为 128000
limit 当 type 为搜索、歌手、评论时，指定返回结果数量，默认为 20
offset 当 type 为搜索、歌手、评论时，指定偏移数量，用于分页，默认为 0
*/
require 'so.php';
$type = $_GET["type"];
if($type == "sang")
	echo so($_GET["stype"],$_GET["s"],$_GET["limit"]);
else if($type == "lrc")
	echo getmusiclyric($_GET["id"],$_GET["lv"],$_GET["tv"]);
else if ($type == "playlist")
	echo getmusicplaylist($_GET["id"]);
?>