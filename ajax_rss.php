<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/board/config/use_db.php";
include_once $_SERVER['DOCUMENT_ROOT']."/board/config/XMLParse.php";
$rss = "http://blog.rss.naver.com/srcdream.xml";
$snoopy=new snoopy; 
$snoopy->fetch($rss); //외환은행 
$content = $snoopy->results;

$parser = new XMLParser($content);
$parser->Parse();
$con = $parser->document;
?>
<style>
.list_con						{padding:20px 0 20px 0; border-bottom:1px #d8d8d8 solid; overflow:hidden;}
.list_con p.photo				{float:left; width:230px; overflow:hidden;}
.list_con .bc					{float:left; width:740px; margin-left:30px; overflow:hidden;}
.list_con .bc h2				{font-size:16px; color:#3c3c3c; font-weight:bold; padding-top:7px;}
.list_con .bc p.txt				{font-size:13px; color:#757575; font-weight:bold; line-height:170%; padding-top:15px;}
.list_con .bc ul				{float:left; padding-top:35px; margin:0 auto; overflow:hidden;}
.list_con .bc ul li				{float:left; display:block;}
</style>
<?

function set_html($str){
    /* 3.22 막음 (HTML 체크 줄바꿈시 출력 오류때문)
    $source[] = "/  /";
    $target[] = " &nbsp;";
    */
   
    $source[] = "<";
    $target[] = "/\&lt\;/";

    $source[] = ">";
    $target[] = "/\&gt\;/";

    $source[] = "\"";
    $target[] = "/\&quot\;/";

    $source[] = "'";
    $target[] = "/\&\#039\;/";

	$source[] = "&";
	$target[] = "/\&amp\;/";

    return preg_replace($target, $source, $str);
}

for($i=0;$i<15;$i++){
	$title = $con->tagChildren[0]->item[$i]->title[0]->tagData;
	$description = $con->tagChildren[0]->item[$i]->description[0]->tagData;
	$link = $con->tagChildren[0]->item[$i]->link[0]->tagData;
	$date = $con->tagChildren[0]->item[$i]->pubdate[0]->tagData;
	$author = $con->tagChildren[0]->item[$i]->author[0]->tagData;
	$category = $con->tagChildren[0]->item[$i]->category[0]->tagData;
?>
<div class="list_con">
	<div class="bc" style="margin-left:5px;">
		<h2><a href="<?=$link?>" target="_blank" class="bt"><?=$title?></a></h2>
		<p class="txt"><a href="<?=$link?>" target="_blank" class="tm"><?=strip_tags(set_html($description))?></a></p>
		<ul>
			<li class="f9513"><?=$category?></li>
			<li class="f9513 pl10 pr10">┃</li>
			<li class="f9513"><?=date("Y-m-d",strtotime($date))?></li>
		</ul>
	</div>
</div>
<?
} 
?>