<?
include_once $_SERVER['DOCUMENT_ROOT']."/board/config/use_db.php";

$time_array = array();

$asql = " select * from ".$site_prefix."board_account where bd1 = '".strtotime($cymd)."' and bd2 = '".$part."' and bd3 = '".$idx."' and bd10 != 'Y' ";
$aresult = sql_query($asql);
for($i=0;$arow = sql_fetch_array($aresult);$i++){
	array_push($time_array,$arow["bd4"]);
}

echo "<select name='bd4' exp title='진료시간' class='form-control'>";
echo	"<option value=''>선택</option>";

$tsql = " select * from ".$site_prefix."charge where idx = '".$idx."' ";
$trow = sql_fetch($tsql);
$tarray = explode("|",$trow[strtolower(date("D",strtotime($cymd)))."_day"]);

if(!empty($tarray[0])){
	for($i=0;$i<sizeof($tarray);$i++){
		if(in_array($tarray[$i],$time_array)) continue;
?>
	<option value="<?=$tarray[$i]?>"><?=$tarray[$i]?></option>
<?
	}
}
?>
</select>