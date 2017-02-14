<?php
error_reporting(E_ALL || ~E_NOTICE);
require 'so.php';
$goto = $_GET["go"];
if ($goto == NULL)
{
	echo "weikong";
 exit();
}
else
{
   if (getmusicc($goto) == "invalid resources 163 .")
{
  echo "官方没有资源";
}
else {
	header('Content-Type:audio/mp3');
	header("Location:"."http://link.hhtjim.com/163/".$goto.".mp3");
}

}
?>