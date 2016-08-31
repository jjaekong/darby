<?
include "../../../board/config/use_db.php";
include "../../../board/config/common_top.php";

$reason="";
$mode=$site_prefix."member_break";
	for($i=1;$i<=4;$i++){
		$aa="reason".$i;
		if($$aa!=""){
			$reason = $reason.$$aa.",";
		}
	}
	$q = "select * from $memberdb where  UserID='".$user['ID']."' AND Password = password('".$Password1."') and Email  = '$Email' ";
	$rs = mysql_query($q);
	//$row = mysql_fetch_assoc($rs);

if(!$user['ID']){
	err_back("잘못된 접근입니다.");
}else{
	$q = "update $memberdb set Flag = '0', UserLevel='0' where UserID ='".$user['ID']."'";
	$set = mysql_query($q);
	//echo $q;
	if($set == "1"){
		$SQL = "insert into $mode (";
		$SQL.= " UserIdx,UserID,UserName,UserEmail,UserIP,Content,note,RegDate) Value('";
		$SQL = $SQL.$UserIdx."','";
		$SQL = $SQL.$user['ID']."','";
		$SQL = $SQL.$UserName."','";
		$SQL = $SQL.$UserEmail."','";
		$SQL = $SQL.$UserIP."','";
		$SQL = $SQL.$Content."','";
		$SQL = $SQL.$reason."',";
		$SQL = $SQL."now())";
		$Result = mysql_query($SQL);

		$tsql = " delete from 8578_tel_member where UserID = '".$user['ID']."' AND UserName = '".$user['NAME']."' ";
		$tresult = mysql_query($tsql);

		$tusql = " update 8578_tel_member set ReStep = ReStep-1 where Ref=".$Ref;
					$SQL .= " AND ReStep > ".$r_row["ReStep"];

		if(!$tresult) err_back("실적현황 삭제 실패");

		setcookie("MemberIdx","", time()-60*60*24, '/', $_SERVER['HTTP_HOST'], false);
		setcookie("MemberID","", time()-60*60*24, '/', $_SERVER['HTTP_HOST'], false);
		setcookie("MemberName","", time()-60*60*24, '/', $_SERVER['HTTP_HOST'], false);
		setcookie("MemberEmail","", time()-60*60*24, '/', $_SERVER['HTTP_HOST'], false);
		setcookie("MemberBarCode","", time()-60*60*24, '/', $_SERVER['HTTP_HOST'], false);
		if(!$Result){
		   err_back("회원 탈퇴에 실패했습니다. 오류 1-1");
		}

		echo "<script>alert('회원님의 회원 탈퇴가 성공적으로 처리 되었습니다. 탈퇴 하신후 동일 아이디로  재가입 할 수 없습니다.');location.href='/members/logout.php';</script>";
	}else{
		err_back('회원탈퇴에 실패 하였습니다. 정상적인 접근인지 확인하세요.');
	}
}
?>