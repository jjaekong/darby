<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/board/config/use_db.php";
$fileURL = "../board/upload/".$BoardName."/";

$thmPath = $dir."/upload/".$BoardName."/thumbs/";

$dir_ck = is_dir($thmPath);

if($dir_ck != "1"){
	if(!@mkdir("$thmPath", 0707)){ echo "디렉토리 생성실패"; exit;}
	if(!@chmod("$thmPath", 0707)){ echo "퍼미션변경 실패"; exit;}
}

include_once($dir."/config/skin.lib.php");

if (!function_exists("imagecopyresampled")) alert("GD 2.0.1 이상 버전이 설치되어 있어야 사용할 수 있는 갤러리 게시판 입니다.");

$thumb_width = 280;
$thumb_height = 300;

if($sF || $sT){
	$sql_common = " AND ".$sT." like '%".$sF."%'";
}

$sql = " select * from ".$mode." where 1=1 $sql_common order by RegDate desc limit $from_record, $load_rows ";
$result = sql_query($sql);
for($i=0;$row = sql_fetch_array($result);$i++){
	$Title = $row[Title];
	$Title = cut_string($Title, 75);

	$new_img = "";
	$wdate = $row["RegDate"];
	$img = "";

	$row["files"] = get_file($mode,$row["BoardIdx"]);

	$img = "<img src='".$row["files"][0]["path"]."/".$row["files"][0]["file_source"]."'>";
	$img2 = "<img src='".$row["files"][1]["path"]."/".$row["files"][1]["file_source"]."'>";

	$auth_link = $_SERVER["PHP_SELP"].'?board_code=board_view&board_idx='.$row["BoardIdx"].'&page='.$page.'&'.$searchVal;
	$pwd_link = "javascript:pwd_ck('".$row[BoardIdx]."');";

	$list_href = $auth_link;
?>
<li class="proItem">
	<figure>
		<p><?=$img?><?=$img2?></p>
		<figcaption>
			<ul>
				<li>나이 : <?=$row["bd1"]?></li>
				<li>성별 : <?=$row["bd2"]?></li>
				<li>치료일자 : <?=$row["bd3"]?></li>
			</ul>
		</figcaption>
	</figure>
</li>
<?
}
?>