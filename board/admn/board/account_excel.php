<?
header( "Content-type: application/vnd.ms-excel" ); 
header( "Content-Disposition: attachment; filename=memberlist".date("YmdHis").".xls" ); 
header( "Content-Description: PHP4 Generated Data" ); 

include $_SERVER['DOCUMENT_ROOT']."/board/config/use_db.php";
include $dir."/config/common_top.php";

$mode = $site_prefix."board_account";

if($sdate && $edate) $sql_common .= " and bd1 >= ".strtotime($sdate)." and bd1 <= ".strtotime($edate)." ";

if($aname) $sql_common .= " and UserName like '%".$aname."%' ";

if($acat) $sql_common .= " and Category = '".$acat."' ";

if($acharge) $sql_common .= " and bd3 = '".$acharge."' ";

$sql = "select * from ".$mode." where 1=1 $sql_common order by BoardIdx desc ";
$result = sql_query($sql);

switch($acat){
	case "온라인예약":
?>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
	<tr>
		<td width="100" align="center" bgcolor="eff1ee">분류</td>
		<td width="150" align="center" bgcolor="eff1ee">예약날짜</td>
		<td width="100" align="center" bgcolor="eff1ee">예약시간</td>
		<td width="150" align="center" bgcolor="eff1ee">예약센터</td>
		<td width="150" align="center" bgcolor="eff1ee">담당의사</td>
		<td width="250" align="center" bgcolor="eff1ee">예약자명</td>
		<td width="50" align="center" bgcolor="eff1ee">성별</td>
		<td width="150" align="center" bgcolor="eff1ee">생년월일</td>
		<td width="150" align="center" bgcolor="eff1ee">연락처</td>
		<td width="500" align="center" bgcolor="eff1ee">주소</td>
	</tr>
	<?
	for($i=0;$row = sql_fetch_array($result);$i++){
		$account_info = get_member($row["UserID"]);

		switch($account_info["Sex"]){
			case "M":
				$sex = "남자";
				break;
			default:
				$sex = "여자";
		}

		$csql = " select * from ".$site_prefix."charge where idx = '".$row["bd3"]."' ";
		$crow = sql_fetch($csql);

	?>
	<tr>
		<td align="center"><?=$row["Category"]?></td>
		<td align="center"><?=date("Y년 m월 d일",$row["bd1"])?></td>
		<td align="center"><?=$row["bd4"]?></td>
		<td align="center"><?=$row["bd2"]?></td>
		<td align="center"><?=$crow["name"]?></td>
		<td align="center"><?=$row["UserName"]?></td>
		<td align="center"><?=$sex?></td>
		<td align="center" style="mso-number-format:\@"><?=$account_info["Mobile"]?></td>
		<td align="center" style="mso-number-format:\@"><?=$account_info["BirthDay"]?></td>
		<td align="center">[<?=$account_info["ZipCode"]?>] <?=$account_info["Address1"]?> <?=$account_info["Address2"]?></td>
	</tr>
	<?
	}
	?>
</table> 
<?
		break;
	case "간편예약":
?>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
	<tr>
		<td width="100" align="center" bgcolor="eff1ee">분류</td>
		<td width="150" align="center" bgcolor="eff1ee">예약날짜</td>
		<td width="100" align="center" bgcolor="eff1ee">예약시간</td>
		<td width="150" align="center" bgcolor="eff1ee">예약센터</td>
		<td width="150" align="center" bgcolor="eff1ee">담당의사</td>
		<td width="150" align="center" bgcolor="eff1ee">연락처</td>
	</tr>
	<?
	for($i=0;$row = sql_fetch_array($result);$i++){
		$csql = " select * from ".$site_prefix."charge where idx = '".$row["bd3"]."' ";
		$crow = sql_fetch($csql);

	?>
	<tr>
		<td align="center"><?=$row["Category"]?></td>
		<td align="center"><?=date("Y년 m월 d일",$row["bd1"])?></td>
		<td align="center"><?=$row["bd4"]?></td>
		<td align="center"><?=$row["bd2"]?></td>
		<td align="center"><?=$crow["name"]?></td>
		<td align="center" style="mso-number-format:\@"><?=$row["UserName"]?></td>
	</tr>
	<?
	}
	?>
</table> 
<?
		break;
}
?>