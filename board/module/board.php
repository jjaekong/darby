<?
$today=date("Y-m-d");

$sql = " select * from ".$site_prefix."board_setting where BoardName = '".$workType."' ";
$row = sql_fetch($sql);
$date_idx = $row[Idx];
$levelchk = $member["UserLevel"];
if(!$levelchk) $levelchk = 0;

$mode = $site_prefix."board_".$workType;

$searchVal = "Category=".urlencode($Category)."&sF=".$sF."&sT=".$sT."&workType=".$workType."&mode=".$mode;
if($is_mobile) $mobile_surffix = "_mobile";
switch($workType){
	case "reviewenter":
	case "reviewforeign":
	case "news":
	case "notice":
	case "healthlist":
		if($board_code=="" || $board_code=="board_list"){ include $dir."/module/incboard/board_list".$mobile_surffix.".php";	}
		if($pwdck){
			include $dir."/module/incboard/password".$mobile_surffix.".php";
		} else {
			if($board_code=="board_write"){ include $dir."/module/incboard/board_write".$mobile_surffix.".php";	}
			if($board_code=="board_view"){ include $dir."/module/incboard/board_view".$mobile_surffix.".php";	}
		}
		break;
	case "recruit":
		if($board_code=="" || $board_code=="board_list"){ include $dir."/module/incboard/rboard_list".$mobile_surffix.".php";	}
		if($pwdck){
			include $dir."/module/incboard/password".$mobile_surffix.".php";
		} else {
			if($board_code=="board_write"){ include $dir."/module/incboard/board_write".$mobile_surffix.".php";	}
			if($board_code=="board_view"){ include $dir."/module/incboard/board_view".$mobile_surffix.".php";	}
		}
		break;
	case "photo":
		if($board_code=="" || $board_code=="board_list"){ include $dir."/module/incboard/gallery_list".$mobile_surffix.".php";	}
	//	if($board_code=="board_write"){ include $dir."/module/incboard/board_write.php";	}
		if($board_code=="board_view"){ include $dir."/module/incboard/board_view".$mobile_surffix.".php";	}
		break;
	case "movie":
		if($board_code=="" || $board_code=="board_list"){ include $dir."/module/incboard/movie_list".$mobile_surffix.".php";	}
	//	if($board_code=="board_write"){ include $dir."/module/incboard/board_write.php";	}
		if($board_code=="board_view"){ include $dir."/module/incboard/board_view".$mobile_surffix.".php";	}
		break;
	case "faq":
		include $dir."/module/incboard/faq_list.php";
		break;
}

?>
<script type="text/javascript" src="<?=$loc?>/board/config/FormCheck.js"></script>
