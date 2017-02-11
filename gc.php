<?php

$id = 26090160;
$url = "https://api.imjad.cn/cloudmusic/?type=lyric&id=".$id;

$refer = "https://api.imjad.cn";
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查  
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);  // 从证书中检查SSL加密算法是否存在  
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
curl_setopt($ch, CURLOPT_REFERER, $refer);
$output = curl_exec($ch);
curl_close($ch);
echo $output;

?>