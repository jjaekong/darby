<?
include_once $_SERVER['DOCUMENT_ROOT']."/board/config/use_db.php";

$idx_array = array();

echo "<select name='bd3' exp title='의료진' id='charge_idx' class='form-control' onchange='date_reset();'>";
echo	"<option value=''>선택</option>";
$sql = " select * from ".$site_prefix."charge where part = '".$part."' ".$sql_common." order by chargeorder desc, name asc ";
$result = sql_query($sql);
for($i=0;$row = sql_fetch_array($result);$i++){
?>
	<option value="<?=$row["idx"]?>"><?=$row["name"]?></option>
<?
}
?>
</select>