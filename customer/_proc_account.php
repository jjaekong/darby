<?
include_once $_SERVER['DOCUMENT_ROOT']."/board/config/use_db.php";
?>
<!DOCTYPE HTML>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>SRC 재활병원</title>
</head>
<?

foreach($_REQUEST as $KEY => $VALUES){
	if($KEY == "Content" || $KEY == "Etc1"){
		${$KEY} = get_text($VALUES);
		//echo $KEY." : ".${$KEY};
	} else {
		${$KEY} = preg_replace("/\"/", "&#034;", get_text($VALUES));
	}
}

switch($Category){
	case "간편예약":
	//	$bd5 = $hp1."-".$hp2."-".$hp3;
	//	$UserName = $bd5;
		$UserPw = sql_password(rand(0000,9999));
		break;
}

$BoardNameArr = explode("_",$mode);
$BoardNameArrSize = count($BoardNameArr);
$BoardName = $BoardNameArr[$BoardNameArrSize-1];

$Title = $UserName."님의 ".$Category."글 입니다.";

$bd1 = strtotime($bd1);

$sql_common = "bd1 = '".$bd1."', bd2 = '".$bd2."', bd3 = '".$bd3."', bd4 = '".$bd4."', bd5 = '".$bd5."', bd6 = '".$bd6."', bd7 = '".$bd7."', bd8 = '".$bd8."', bd9 = '".$bd9."', bd10 = '".$bd10."', ";

$UserID = $user[ID];
$UserIP = $_SERVER["REMOTE_ADDR"];
$Re_url = $_REQUEST["returnpage"];
if($rp){
	$Re_url = $rp;
}

if(empty($UserEmail)) $UserEmail = $Email1."@".$Email2;

if($is_guest){
	$UserPw = sql_password($UserPw);
	$UserEmail = $UserEmail;
} else {
	if($user[Level] > 4){
		$sql = "select admin_pwd from ".$site_prefix."admin where admin_id = '".$member[UserID]."' ";
		$get_pwd = sql_fetch($sql);
		$UserEmail = $get_pwd[admin_mail];
		$UserPw = sql_password($get_pwd[admin_pwd]);
	} else {
		$get_pwd = get_member($user[ID],"Password");
		$UserEmail = $get_pwd[Email];
		$UserPw = $get_pwd[Password];
	}
}

switch($workType){
	case "I":
		$Ref      = get_max($mode,"BoardIdx","") + 1;
		$ReStep  = 0;
		$ReLevel = 0;

		$SQL  = "insert into ".$mode." 
					set Notice = '$Notice',
						Category = '$Category',
						Title = '$Title',
						Content = '$Content',
						UserIdx = '$UserIdx',
						UserID = '$UserID',
						UserName = '$UserName',
						UserEmail = '$UserEmail',
						UserPw = '$UserPw',
						UserIP = '$UserIP',
						Secret = '$Secret',
						SecretFlag = '$SecretFlag',
						HtmlChk = '$HtmlChk',
						Link1 = '$Link1',
						Link2 = '$Link2',
						$sql_common
						Ref = '$Ref',
						ReStep = '$ReStep',
						ReLevel = '$ReLevel',
						RegDate = now() ";
		$Result = mysql_query($SQL);

		$idx = get_max($mode,"BoardIdx");
		
		switch($Category){
			case "간편예약":
			//	GetAlert("간편예약이 완료되었습니다. 자세한 예약을 원하시면 회원가입 후 온라인예약메뉴를 이용해주시기 바랍니다.","/");
				echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />";
				echo "<script>";
				echo "alert('예약신청이 완료되었습니다.\\n예약완료는 예약 담당자와의 상담 후 확정이 됩니다.\\n(상담전화 : 031-799-3713,3817)');";
				echo "location.href = '/';";
				echo "</script>";
				break;
			case "온라인예약":
				GetAlert('',$URI."?Category=".urlencode($Category)."&idx=".$idx);
				break;
		}
		break;
	case "D":
		$fsql = " select * from ".$mode." where BoardIdx = '".$idx."' ";
		$frow = sql_fetch($fsql);
		if($frow["UserID"] == $member["UserID"] || $is_manager || $is_admin){
			$dsql = " update ".$site_prefix."board_account set bd10 = 'Y' where BoardIdx = '".$idx."' ";
			$dresult = sql_query($dsql);
			GetAlert("정상적으로 예약이 취소되었습니다.",$URI);
		} else {
			GetAlert("본인의 예약내역 외에는 취소가 불가능합니다.",$URI);
		}
		break;
}
?>