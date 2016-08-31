<?
if (!defined("_MKBOARD_")) exit; // 개별 페이지 접근 불가 
$BoardDateSQL = "select * from $TableConfigDB where Idx=".$date_idx;
$BoardDateRow = sql_fetch($BoardDateSQL);
$BoardNameArr = explode("_",$mode);
$BoardNameArrSize = count($BoardNameArr);
$BoardName = $BoardNameArr[$BoardNameArrSize-1];
$PageBlock   = 5;  //넘길 페이지 갯수
$board_list_num = 5;                     //게시판 게시글 수
$pagebt1=$loc."/image/board_img/prev_btn02.gif";
$pagebt2=$loc."/image/board_img/prev_btn.gif";
$pagebt3=$loc."/image/board_img/next_btn.gif";
$pagebt4=$loc."/image/board_img/next_btn02.gif";
$fileURL = "../board/upload/".$BoardName."/";

$thmPath = $dir."/upload/".$BoardName."/thumbs/";

$dir_ck = is_dir($thmPath);

if($dir_ck != "1"){
	if(!@mkdir("$thmPath", 0707)){ echo "디렉토리 생성실패"; exit;}
	if(!@chmod("$thmPath", 0707)){ echo "퍼미션변경 실패"; exit;}
}

$TotalSQL = "select * from ".$mode." where Notice != '1' ";

if($sF && $sT){
	$TotalSQL .= " AND ".$sT." like '%".$sF."%'";
}

if($Category){
	$TotalSQL .= " and Category = '".$Category."' ";
}

if(($BoardName == "qna" && !$is_admin) || $mypage){
	$TotalSQL .= " and UserID = '".$member["UserID"]."' ";
}

$TotalSQL.= "order by Ref desc, ReLevel asc, ReStep asc";
$TotalResult = mysql_query($TotalSQL);
$TotalCount  = mysql_num_rows($TotalResult);

$total_page  = ceil($TotalCount / $board_list_num);  // 전체 페이지 계산
if (!$page) { $page = 1; } // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $board_list_num; // 시작 열을 구함

$SQL = $TotalSQL." limit $from_record, $board_list_num";
$Result      = mysql_query($SQL);
$Count       = mysql_num_rows($Result);

$new_img = "&nbsp;<img src=\"/image/board_img/new_icon.gif\" align=\"absmiddle\" >";

$write_pages = get_paging($PageBlock, $page, $total_page, $_SERVER["PHP_SELF"]."?".$searchVal."&board_code=".$board_code."&start_page=0&category=".$category."&page=");

include_once($dir."/config/skin.lib.php");

if (!function_exists("imagecopyresampled")) alert("GD 2.0.1 이상 버전이 설치되어 있어야 사용할 수 있는 갤러리 게시판 입니다.");

$thumb_width = 163;
$thumb_height = 130;


$thumb_width2 = 290;
$thumb_height2 = 230;

$tsql = " select * from ".$mode." where bd1 = 'Y' order by border asc limit 0, 3 ";
$tresult = sql_query($tsql);
$tcnt = @mysql_num_rows($tresult);
?>
<div class="bbs_zone01">
	<!--게시판 리스트-->
	<div class="bbs_list">
		<?
		$num = $TotalCount - ($page-1)*$board_list_num;
		for($i=0;$row = sql_fetch_array($Result);$i++){
			$Title = cut_string($row["Title"],75);
			
			$new_img = "";
			$wdate = $row["RegDate"];
			$today		= date("Y-m-d H:i:s");
			$chk		= strtotime($today) - strtotime($wdate);			
			$chk_new	= (60 * 60 * 24) * 1;
			if(($chk_new - $chk)<0){
				$new_ck = true;
			}

			$c_sql = " select count(*) as cnt from ".$CommentName." where DBName = '".$mode."' and BoardIdx = '".$row[BoardIdx]."' ";
			$c_row = sql_fetch($c_sql);
			$Comment_count = $c_row[cnt];

			$img = "";

			if($row[Secret]){
				$secret_img = '<img style="margin-left:5px;" src="/image/board_img/secret.gif" alt="Secret" />';
			} else {
				$secret_img = "";
			}

			$row["files"] = get_file($mode,$row["BoardIdx"]);

			$is_list_img = false;

			switch($row["files"][0][image_type]){
				case "1":
				case "2":
				case "3":
					if(file_exists($fileURL."/thumbs/".$row["files"][0][file_source])){
						$row["img"] = "<img src='/board/upload/".$BoardName."/thumbs/".$row["files"][0][file_source]."' width='".$thumb_width."' height='".$thumb_height."' >";
					} else {
						if($row["files"][0]["image_width"] <= $thumb_width2 && $row["files"][0]["image_height"] <= $thumb_height2){
							$row["img"] = "<img src='/board/upload/".$BoardName."/".$row["files"][0][file_source]."' width='".$thumb_width."' height='".$thumb_height."'>";
						} else {
							$row["img"] = makeThumbs($fileURL, $row["files"][0][file_source], $thumb_width2, $thumb_height2, "thumbs","");
							$row["img"] = "<img src='/board/upload/".$BoardName."/thumbs/".$row["files"][0][file_source]."' width='".$thumb_width."' height='".$thumb_height."' >";
						}
					}
					break;
				case "6":
					$row["img"] = "<img src='".$row["files"][0]["path"]."/thumbs/".$row["files"][0][file_source]."' width='".$thumb_width."' height='".$thumb_height."'>";
					break;
				default:
					$row["img"] = "";
			}

			$username = $row["UserName"];

			$auth_link = '<a href="'.$_SERVER["PHP_SELP"].'?board_code=board_view&BoardIdx='.$row["BoardIdx"].'&page='.$page.'&'.$searchVal.'" class="bt">';
			$pwd_link = "<a href=\"javascript:pwd_ck('".$row[BoardIdx]."');\" class='bt'>";

			if($secret_img){
				if(!$is_admin && (($BoardName != "notice" && $BoardName != "newspaper") && !$is_manager)){
					if(!empty($row[UserID]) && $user[ID] == $row[UserID]) $list_href = $auth_link;
					else {
						$list_href = $pwd_link;
						$osql = " select * from ".$mode." where Ref = '".$row["Ref"]."' and ReLevel = 0 ";
						$orow = sql_fetch($osql);
						if($row["ReLevel"] > 0 && $user["ID"] == $orow["UserID"]){
							$list_href = $auth_link;
							if($is_guest) $list_href = $pwd_link;
						}
					}
				} else {
					$list_href = $auth_link;
				}
			} else {
				$list_href = $auth_link;
			}

			switch($row["Category"]){
				case "공지사항":
					$print_cat = '<span class="orange_txt">[공지사항]</span>&nbsp;';
					break;
				case "이벤트":
					$print_cat = '<span class="red_txt">[이벤트]</span>&nbsp;';
					break;
				case "뉴스":
					$print_cat = '<span class="green_txt">[뉴스]</span>&nbsp;';
					break;
			}
		?>
		<div class="list_con">
			<? if($row["img"] != ""){ ?>
			<p class="photo"><?=$list_href.$row["img"]?></a></p> 
			<div class="bc">
			<? } else { ?>
			<div class="bc02">
			<? } ?>
				<h2><?=$list_href.$print_cat.$Title?></a></h2>
				<p class="txt"><?=utf8_strcut(strip_tags($row["Content"]),230)?></a></p>
				<ul>
					<li class="f50"><?=$username?></li>
					<li class="f75 pl10 pr10">┃</li>
					<li class="f75"><?=substr($row["RegDate"],0,10)?></li>
					<li class="f75 pl10 pr10">┃</li>
					<li class="f75">HIT <?=number_format($row["ReadNum"])?></li>
				</ul>
			</div>
		</div>
		<?
		}
		?>

	</div>
	<!--//게시판 리스트-->

	<!--게시판 리스트 페이지-->
	<div class="bbs_page">
		<?
		if($Count>0){
			$write_pages = str_replace("처음", "<img src='$pagebt1' border='0' align='absmiddle' class='pt2' title='처음'>", $write_pages);
			$write_pages = str_replace("이전", "<img src='$pagebt2' border='0' align='absmiddle' class='pt2' title='이전'>", $write_pages);
			$write_pages = str_replace("다음", "<img src='$pagebt3' border='0' align='absmiddle' class='pt2' title='다음'>", $write_pages);
			$write_pages = str_replace("맨끝", "<img src='$pagebt4' border='0' align='absmiddle' class='pt2' title='맨끝'>", $write_pages);
			//$write_pages = preg_replace("/<span>([0-9]*)<\/span>/", "$1", $write_pages);
			$write_pages = preg_replace("/<b>([0-9]*)<\/b>/", "<b><span style=\"color:#4D6185; font-size:12px; text-decoration:underline;\">$1</span></b>", $write_pages);
			echo $write_pages;
		}
		?>
	</div>
	<!--//게시판 리스트 페이지-->

	<? if($BoardDateRow["WriteAuthority"]<=$levelchk || $is_admin){ ?>
	<div class="bbs_btn pb20"><a href="<?=$_SERVER["PHP_SELF"]?>?board_code=board_write&<?=$searchVal?>"><img src="../image/board_img/write_btn.jpg" alt="글쓰기"></a></div>
	<? } ?>

	<form name="search_form" action="" method="get">
	<input type="hidden" name="workType" value="<?=$workType?>">
	<div class="bbs_search fcenter">
		<ul>
			<li>
				<select name="sT" class="input03" id="sT" style="width:125px;">
					<option value="Title">제목</option>
					<option value="Content" <?=$_GET["sT"]=="Content"?"selected":""?>>내용</option>
					<option value="UserName" <?=$_GET["sT"]=="UserName"?"selected":""?>>작성자</option>
				</select>
			</li>
			<li class="pl5"><input name="sF" type="text" class="input03" id="sF" style="width:390px;" value="<?=$_GET[sF]?>"></li>
			<li><input type="image" src="../image/board_img/search_btn.gif" alt="검색하기"></a></li>
		</ul>
	</div>
	</form>
</div>
<script type="text/javascript">
function pwd_ck(idx){
	var f = document.list_form;
	f.board_code.value = "board_view";
	f.board_idx.value = idx;
	f.action = "<?=$_SERVER['PHP_SELF']?>";
	f.submit();
}
function all_checked(sw) {
    var f = document.list_form;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_idx[]")
            f.elements[i].checked = sw;
    }
}

function check_confirm(str) {
    var f = document.list_form;
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_idx[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(str + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }
    return true;
}

// 선택한 게시물 삭제
function list_del() {
    var f = document.list_form;

    str = "삭제";
    if (!check_confirm(str))
        return;

    if (!confirm("선택한 게시물을 정말 "+str+" 하시겠습니까?\n\n한번 "+str+"한 자료는 복구할 수 없습니다"))
        return;

    f.action = loc+"/board/config/delete_all.php";
    f.submit();
}
</script>
