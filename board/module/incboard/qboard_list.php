<?
if (!defined("_MKBOARD_")) exit; // 개별 페이지 접근 불가 
$BoardDateSQL = "select * from $TableConfigDB where Idx=".$date_idx;
$BoardDateRow = sql_fetch($BoardDateSQL);
$BoardNameArr = explode("_",$mode);
$BoardNameArrSize = count($BoardNameArr);
$BoardName = $BoardNameArr[$BoardNameArrSize-1];
$PageBlock   = 5;  //넘길 페이지 갯수
$board_list_num = 5;                     //게시판 게시글 수
$pagebt1=$loc."/image/story_img/prev_btn2.gif";
$pagebt2=$loc."/image/story_img/prev_btn.gif";
$pagebt3=$loc."/image/story_img/next_btn.gif";
$pagebt4=$loc."/image/story_img/next_btn2.gif";
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

?>
<!--search-->
<form name="search_form" action="" method="get">
<input type="hidden" name="workType" value="<?=$workType?>">
<div class="search">
	<ul>
		<li>
			<select name="search_list" class="search_form" id="search_list" style="width:100px;">
				<option value="Title">제목</option>
				<option value="Content" <?=$_GET["sT"]=="Content"?"selected":""?>>내용</option>
			</select>
		</li>
		<li class="pl5"><input name="sF" type="text" class="form" id="search_txt" style="width:300px;" value="<?=$_GET[sF]?>"></li>
		<li class="pl5"><input type="image" src="../image/story_img/search_btn.gif" alt="검색"></li>
	</ul>
</div>
</form>
<!--//search-->

<form name="list_form" method="post">
<input type="hidden" name="board_code" value="<?=$board_code?>">
<input type="hidden" name="board_idx" value="">
<input type="hidden" name="page" value="<?=$page?>">
<input type="hidden" name="URI" value="<?=$_SERVER['PHP_SELF']?>">
<input type="hidden" name="Category" value="<?=$Category?>">
<input type="hidden" name="workType" value="<?=$workType?>">
<input type="hidden" name="mode" value="<?=$mode?>">
<input type="hidden" name="sT" value="<?=$sT?>">
<input type="hidden" name="sF" value="<?=$sF?>">
<input type="hidden" name="pwdck" value='1'>
<div class="qna_list">
	<?
	$nsql = " select * from ".$mode." where Notice = '1' order by BoardIdx desc ";
	$nresult = sql_query($nsql);
	for($i=0;$nrow = sql_fetch_array($nresult);$i++){
		$Title = $nrow[Title];
		$Title = cut_string($Title, 75);
	?>
	<div class="qna_con">
		<ul>
			<li class="qna_title">
				<?
				$wdate = $nrow["RegDate"];
				$today		= date("Y-m-d H:i:s");
				$chk		= strtotime($today) - strtotime($wdate);			
				$chk_new	= (60 * 60 * 24) * 1;
				if(($chk_new - $chk)>0){
					$new_ck = true;
				}
				$auth_link = '<a href="'.$_SERVER["PHP_SELP"].'?board_code=board_view&board_idx='.$nrow["BoardIdx"].'&page='.$page.'&'.$searchVal.'" class="bbs">';
				$list_href = $auth_link;
				echo $list_href.$Title;
				if($Comment_count>0) echo " (".$Comment_count.")";
				echo "</a>";
				if($new_ck) echo $new_img;
				echo $secret_img;
				?>
			</li>
			<li class="qna_txt">[공지]<img src="../image/story_img/title_line.gif" alt="" class="pl10 pr10">사용자<img src="../image/story_img/title_line.gif" alt="" class="pl10 pr10"><?=substr($nrow["RegDate"],0,10)?><img src="../image/story_img/title_line.gif" alt="" class="pl10 pr10">&nbsp;</li>
		</ul>
	</div>
	<?
	}
	$num = $TotalCount - ($page-1)*$board_list_num;
	for($i=0;$row = sql_fetch_array($Result);$i++){
		$Title = $row[Title];
		$Title = cut_string($Title, 75);
		
		$str="";
		$new_img = "";
		$wdate = $row["RegDate"];
		$today		= date("Y-m-d H:i:s");
		$chk		= strtotime($today) - strtotime($wdate);			
		$chk_new	= (60 * 60 * 24) * 1;
		if(($chk_new - $chk)>0){
			$new_ck = true;
		}
		$c_sql = " select count(*) as cnt from ".$CommentName." where DBName = '".$mode."' and BoardIdx = '".$row[BoardIdx]."' ";
		$c_row = sql_fetch($c_sql);
		$Comment_count = $c_row[cnt];
		$img = "";

		if($row[Secret]){
			$secret_img = '<img style="margin-left:5px;" src="/image/cscenter_img/secret_icon.gif" alt="Secret" />';
		} else {
			$secret_img = "";
		}
	//	$bmember = get_member($row["UserID"],"UserName");
	//	$username = $bmember["UserName"];
		$name_surfix = "";
		$username = $row["UserName"];
		if($BoardName == "advice"){
			for($i=0;$i<intval((strlen($username)/3)-1);$i++){
				$name_surfix .= "*";
			}
			$username = substr($username,0,3).$name_surfix;
		} else {
			$username = cut_string($username,14);
		}
	?>
	<div class="qna_con">
		<ul>
			<li class="qna_title">
				<?
				for($i=1;$i <= $row["ReLevel"];$i++){
					if($i == $row["ReLevel"]){
						echo "&nbsp;<img src='/image/board_img/icon_re.jpg'>&nbsp;"; 
					} else {
						echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					}
				}

				$auth_link = '<a href="'.$_SERVER["PHP_SELP"].'?board_code=board_view&board_idx='.$row["BoardIdx"].'&page='.$page.'&'.$searchVal.'" class="bbs">';
				$pwd_link = "<a href=\"javascript:pwd_ck('".$row[BoardIdx]."');\" class='bbs'>";
			//	$pwd_link = "<a href='javascript:alert(\"본인이 아닐경우 비밀글은 열람하실 수 없습니다.\");'>";

				if($Category) echo "<a href='".$_SERVER['PHP_SELF']."?Category=".urlencode($row["Category"])."' class='bbs'>[".$row["Category"]."]</a> ";

				if($secret_img){
					if(!$is_admin){
						if(!empty($row[UserID]) && $user[ID] == $row[UserID]) $list_href = $auth_link;
						else {
							$list_href = $pwd_link;
							$osql = " select * from ".$mode." where BoardIdx = '".$row["Ref"]."' ";
							$orow = sql_fetch($osql);
							if($row["ReLevel"] > 0 && $user["ID"] == $orow["UserID"]) $list_href = $auth_link;
						}
					} else {
						$list_href = $auth_link;
					}
				} else {
					$list_href = $auth_link;
				}
				
				echo $list_href.$Title;
				
				if($Comment_count>0) echo " (".$Comment_count.")";
				echo "</a>";
				if($new_ck) echo $new_img;
				echo $secret_img;
				?>
			</li>
			<li class="qna_txt">No. <?=$num?><img src="../image/story_img/title_line.gif" alt="" class="pl10 pr10"><?=$username?><img src="../image/story_img/title_line.gif" alt="" class="pl10 pr10"><?=substr($row["RegDate"],0,10)?><img src="../image/story_img/title_line.gif" alt="" class="pl10 pr10"><img src="../image/cscenter_img/<?=$row["bd1"]?"icon_finish":"icon_ready"?>.gif" alt=""/></li>
		</ul>
	</div>
	<?
		$num--;
	}

	if($Count == 0){
	?>
	<div class="qna_con">
		<ul>
			<li class="qna_title"><a href="javascript:;" class="bbs">게시물이 없습니다.</a></li>
			<li class="qna_txt">&nbsp;</li>
		</ul>
	</div>
	<? } ?>
</div>
<!--//list-->
</form>
<!--page-->
<div>
	<ul style="width:1000px;display:block;">
		<li style="float:left;width:480px;" class="pt30">
			<a href="<?=$_SERVER["PHP_SELF"]?>?board_code=board_write&<?=$searchVal?>"><img src="../image/story_img/write_btn.gif" alt=""/></a>
		</li>
		<li style="float:right;width:300px;">
			<div class="page pt20">
				<ul>
					<?
					if($Count>0){
						$write_pages = str_replace("처음", "<img src='$pagebt1' border='0' align='absmiddle' title='처음'>", $write_pages);
						$write_pages = str_replace("이전", "<img src='$pagebt2' border='0' align='absmiddle' title='이전'>", $write_pages);
						$write_pages = str_replace("다음", "<img src='$pagebt3' border='0' align='absmiddle' title='다음'>", $write_pages);
						$write_pages = str_replace("맨끝", "<img src='$pagebt4' border='0' align='absmiddle' title='맨끝'>", $write_pages);
						//$write_pages = preg_replace("/<span>([0-9]*)<\/span>/", "$1", $write_pages);
						$write_pages = preg_replace("/<b>([0-9]*)<\/b>/", "<b><span style=\"color:#4D6185; font-size:12px; text-decoration:underline;\">$1</span></b>", $write_pages);
						echo $write_pages;
					}
					?>
				</ul>
			</div>
		</li>
	</ul>
</div>
<!--//page-->


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
