<?php
$name=$_GET["name"];
$pwd=$_GET["pwd"];
$gender=$_GET["gender"];
$list=$_GET["list"];
echo "你的名字:".$name."<br><br>";
echo "你的學號：".$pwd."(可能喔<br><br>";
echo "你的性別：".$gender."<br><br>";
if($gender=="male"){
	echo "男生啦哈哈哈(失望貌<br><br>";
}else{
	echo "嗨!正妹(流口水<br><br>";
}
echo "你居然喜歡";
if($list=="1"){
	echo "GENJI!!<br><br>";
}elseif($list=="2"){
	echo "MCCREE!!<br><br>";
}elseif($list=="3"){
	echo "PHARAH!<br><br>";
}elseif($list=="4"){
	echo "REAPER!!<br><br>";
}elseif($list=="5"){
	echo "SOLDIER:76!!<br><br>";
}else{
	echo "SOMBRA!!<br><br>";
}
