<?php
error_reporting(E_ALL || ~E_NOTICE);
$goto = $_GET["go"];
if ($goto == NULL)
	echo "weikong";
else
	header('Content-Type:audio/mp3');
	header("Location:"."http://link.hhtjim.com/163/".$goto.".mp3");

?>