<?php
/**
* Created by yeyuxingchen
* Date: 2017年2月10日21:38:47
* action： 函数
*/
/**
* 必要参数
s：搜索的内容
offset：偏移量（分页用）
limit：获取的数量
type：搜索的类型
歌曲 1
专辑 10
歌手 100
歌单 1000
用户 1002
mv 1004
歌词 1006
主播电台 1009
*/

//搜索
function so($type = 1,$s = "小小",$limit = 0) {  
  
  $id_arr[100] = 0;
  $post_string = "type=".$type."&s=".$s."&limit=".$limit."&offset=0";  

  $remote_server = "http://music.163.com/api/search/get/web?";
  $ch = curl_init();  
  curl_setopt($ch, CURLOPT_URL, $remote_server);  
  curl_setopt($ch, CURLOPT_POSTFIELDS, $post_string); 
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
  $header =array('Referer: http://music.163.com/search/',);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  $data = curl_exec($ch);  
  curl_close($ch);
  $data_arr = json_decode($data, true);
  for ($x = 0; $x < $limit; $x++) {
    $m_id = $data_arr["result"]["songs"][$x]["id"];
	$id_arr[$x] = $m_id;
	//echo $id_arr[$x] ." ".$x . "<br>  ";
  } 

  return $id_arr;  
}

//获取music的信息
function getmusicp($id){
	$url = "http://music.163.com/api/song/detail/?id=" . $id . "&ids=%5B" . $id . "%5D";
	$refer = "http://music.163.com/";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
	curl_setopt($ch, CURLOPT_REFERER, $refer);
	$output = curl_exec($ch);
	curl_close($ch);
	//echo $output;
	$musicp_arr[4] = 0;
	
	$output_arr = json_decode($output, true);
	$musicp_arr[0] = $output_arr["songs"][0]["name"];
	$musicp_arr[1] = $output_arr["songs"][0]["artists"][0]["name"];
	$musicp_arr[2] = $output_arr["songs"][0]["album"]["blurPicUrl"];	
	$musicp_arr[3] = $output_arr["songs"][0]["mp3Url"];
	
	

//	echo "<img src=\"".$blurpicurl."\" alt=\"snowy landscape \">";
	return $musicp_arr; 
}
?>