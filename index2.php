<?php
/**
* Created by yeyuxingchen
* Date: 2017年2月9日22:27:45

$id = $_GET["sid"];
$goto = $id
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
$output_arr = json_decode($output, true);
$mp3_url = $output_arr["songs"][0]["mp3Url"];
$blurpicurl = $output_arr["songs"][0]["album"]["blurPicUrl"];
$m_name = $output_arr["songs"][0]["name"];
$a_name = $output_arr["songs"][0]["artists"][0]["name"];
echo $a_name . $m_name . $blurpicurl . $mp3_url;
echo "<img src=\"".$blurpicurl."\" alt=\"snowy landscape \">";
echo goto
//header('Content-Type:audio/mp3');
//header("Location:"."http://link.hhtjim.com/163/".$id.".mp3");
*/
				/**
				* Created by yeyuxingchen
				* Date: 2017年2月9日22:27:45
				*/
				require './so.php';
				$id_arr = so($type =  1,$s ="小小",$limit= 5);
				
				for($x = 0;$x<$limit;$x++){
					
				$musicp_arr[$x] = getmusicp($id_arr[$x]);
				
					echo $musicp_arr[$x][0].$musicp_arr[$x][1].$musicp_arr[$x][2].$musicp_arr[$x][3]."<br>";
					//echo "127.0.0.1/wyyy/goto.php?go=".$id_arr[0];
				}
				
foreach($musicp_arr as $k=>$val) //意思是for $book each $value( as )      
   echo $k.'=>'.$val."<br>"; 
?>
<audio autoplay="autopaly">
	<source src="<?php echo $mp3_url;?>" type="audio/mp3" />
</audio> 