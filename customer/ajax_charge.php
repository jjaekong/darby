<?
include_once $_SERVER['DOCUMENT_ROOT']."/board/config/use_db.php";

$idx_array = array();

$asql = " select count(*) as cnt, bd3 from ".$site_prefix."board_account where Category = '온라인예약' and bd1 = '".$cymd."' and bd2 = '".$part."' group by bd3 ";
$aresult = sql_query($asql);
for($i=0;$arow = sql_fetch_array($aresult);$i++){
	if($arow["cnt"] == "9")
		array_push($idx_array,$arow["bd3"]);
}
$not_idx = implode(",",$idx_array);

if(!empty($not_idx)) $sql_common = " and idx not in(".$not_idx.") ";

echo "<ul>";

$sql = " select * from ".$site_prefix."charge where part = '".$part."' ".$sql_common." order by chargeorder desc, name asc ";
$result = sql_query($sql);
for($i=0;$row = sql_fetch_array($result);$i++){
	$row["files"] = get_file($site_prefix."charge",$row["idx"]);
	if(!empty($row["files"][0]["file_source"])) $row["img"] = "<img src='/board/upload/category/".$row["files"][0]["file_source"]."' />";
	else $row["img"] = "<img src='/images/community/img_photo_gray.png' alt='noimg' />";
?>
<li>
	<figure>
		<?=$row["img"]?>
		<figcaption>
			<strong><?=$row["name"]?></strong>
			<small><?=$row["part"]?> 전문의</small>
		</figcaption>
	</figure>
	<?
	$time_array = array();

	$asql = " select * from ".$site_prefix."board_account where Category = '온라인예약' and bd1 = '".strtotime($cymd)."' and bd2 = '".$part."' and bd3 = '".$row["idx"]."' and bd10 != 'Y' ";
	$aresult = sql_query($asql);
	for($i=0;$arow = sql_fetch_array($aresult);$i++){
		array_push($time_array,$arow["bd4"]);
	}

	$tsql = " select * from ".$site_prefix."charge where idx = '".$row["idx"]."' ";
	$trow = sql_fetch($tsql);
	$tarray = explode("|",$trow[strtolower(date("D",strtotime($cymd)))."_day"]);

	if(empty($tarray[0])){
		echo "예약가능한 시간이 없습니다.";
	} else {
	?>
	<div class="btn-group" data-toggle="buttons" id="chargeBtn">
		<?
		for($i=0;$i<sizeof($tarray);$i++){
			if(in_array($tarray[$i],$time_array)) continue;
		?>
		<label class="btn">
			<input type="radio" name="atime" autocomplete="off" atime="<?=$tarray[$i]?>" chargeIdx="<?=$row["idx"]?>"> <?=$tarray[$i]?>
		</label>
		<?
		}
		?>
	</div>
	<?
	}

	$time_array = $asql = $aresult = $arow = $tsql = $trow = $tarray = "";
	?>
</li>
<?
}
?>
</ul>