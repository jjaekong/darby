<?
if (!defined("_MKBOARD_")) exit; // 개별 페이지 접근 불가 
$BoardDateSQL = "select * from $TableConfigDB where Idx=".$date_idx;
$BoardDateRow = sql_fetch($BoardDateSQL);
$BoardNameArr = explode("_",$mode);
$BoardNameArrSize = count($BoardNameArr);
$BoardName = $BoardNameArr[$BoardNameArrSize-1];
$PageBlock   = 5;  //넘길 페이지 갯수
if(!$board_list_num) $board_list_num = 5;                     //게시판 게시글 수
if(!$list_type) $list_type = "thumbs";
$pagebt1=$loc."/image/board_img/prev_btn02.gif";
$pagebt2=$loc."/image/board_img/prev_btn.gif";
$pagebt3=$loc."/image/board_img/next_btn.gif";
$pagebt4=$loc."/image/board_img/next_btn02.gif";


$TotalSQL = "select * from ".$mode." where Notice != '1' ";

$is_search = false;

if($BoardName == "bbbqna" && !$is_admin){
	$TotalSQL .= " and UserID = '".$member["UserID"]."' ";
	$is_search = true;
}

if($sF && $sT){
	$TotalSQL .= " AND ".$sT." like '%".$sF."%'";
	$is_search = true;
}

if($Category){
	$TotalSQL .= " and Category = '".$Category."' ";
	$is_search = true;
}

$TotalSQL.= "order by RegDate desc, Ref desc, ReLevel asc, ReStep asc";
$TotalResult = mysql_query($TotalSQL);
$TotalCount  = mysql_num_rows($TotalResult);

$total_page  = ceil($TotalCount / $board_list_num);  // 전체 페이지 계산
if (!$page) { $page = 1; } // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $board_list_num; // 시작 열을 구함

$SQL = $TotalSQL." limit $from_record, $board_list_num";
$Result      = mysql_query($SQL);
$Count       = mysql_num_rows($Result);

$new_img = "&nbsp;<img src='/images/community/icon_new.gif' align='absmiddle' />";

//$searchVal .= "&list_type=".$list_type."&board_list_num=".$board_list_num."&bd4=".$bd4."&bd5=".$bd5;

$write_pages = get_paging($PageBlock, $page, $total_page, $_SERVER["PHP_SELF"]."?".$searchVal."&board_code=".$board_code."&category=".$category."&page=");
?>
<div class="container">
	<div class="filter-bar">
		<div class="row">
			<? if($BoardDateRow["Category"]){ ?>
			<div class="col-xs-6">
				<div class="filter-dropdown">
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?=$Category?$Category:"분류별 보기"?> <span class="glyphicon glyphicon-menu-down"></span>
						</button>
						<ul class="dropdown-menu">
							<?
							$bcat = explode("|",$BoardDateRow["Category"]);
							for($i=0;$i<sizeof($bcat);$i++){
							?>
							<li><a href="javascript:;" onclick="location.href='<?=$_SERVER["PHP_SELF"]?>?Category=<?=urlencode($bcat[$i])?>';"><?=$bcat[$i]?></a></li>
							<?
							}
							?>
						</ul>
					</div>
				</div>
			</div>
			<? } ?>
			<div class="col-xs-6 text-right">
				<div class="search-form">
					<form name="search_form" action="" method="get">
						<div class="form-group">
							<select class="form-control" name="sT">
								<option value="Title">제목</option>
								<option value="Content" <?=$_GET["sT"]=="Content"?"selected":""?>>내용</option>
							</select>
							<label for="search-keyword" class="sr-only">검색어</label>
							<input id="search-keyword" type="text" class="form-control" name="sF" value="<?=$_GET['sF']?>">
						</div>
						<button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<form name="list_form" method="post">
	<input type="hidden" name="board_code" value="<?=$board_code?>">
	<input type="hidden" name="BoardIdx" value="">
	<input type="hidden" name="page" value="<?=$page?>">
	<input type="hidden" name="Category" value="<?=$Category?>">
	<input type="hidden" name="workType" value="<?=$workType?>">
	<input type="hidden" name="mode" value="<?=$mode?>">
	<input type="hidden" name="sT" value="<?=$sT?>">
	<input type="hidden" name="sF" value="<?=$sF?>">
	<input type="hidden" name="URI" value="<?=$_SERVER['PHP_SELF']?>">
	<input type="hidden" name="pwdck" value='1'>
	<table class="table">
		<colgroup>
			<col style="width: 90px;">
			<col style="width: 70px;">
			<col>
			<col style="width: 120px;">
			<col style="width: 120px;">
		</colgroup>
		<thead>
			<tr>
				<th>번호</th>
				<th>채용</th>
				<th>제목</th>
				<th>등록일</th>
				<th>조회수</th>
			</tr>
		</thead>
		<tbody>
			<?
			$nsql = " select * from ".$mode." where Notice = '1' order by BoardIdx desc ";
			$nresult = sql_query($nsql);
			for($i=0;$nrow = sql_fetch_array($nresult);$i++){
				$Title = $nrow[Title];
				$Title = cut_string($Title, 120);
				$wdate = $nrow["RegDate"];
				$today		= date("Y-m-d H:i:s");
				$chk		= strtotime($today) - strtotime($wdate);			
				$chk_new	= (60 * 60 * 24) * 1;
				if(($chk_new - $chk)>0){
					$new_ck = true;
				}
				$auth_link = '<a href="'.$_SERVER["PHP_SELP"].'?board_code=board_view&board_idx='.$nrow["BoardIdx"].'&page='.$page.'&'.$searchVal.'">';
				$list_href = $auth_link;
				
				if($new_ck) echo $new_img;
				echo $secret_img;
			?>
			<tr>
				<td>[공지]</td>
				<td><?=$nrow["Category"]?></td>
				<td>
					<?=$list_href.$Title?></a>
					<?
					if($new_ck) echo $new_img;
					echo $secret_img;
					?>
				</td>
				<td><?=substr($nrow["RegDate"],0,10)?></td>
				<td><?=number_format($nrow["ReadNum"])?></td>
			</tr>
			<?
			}
			$num = $TotalCount - ($page-1)*$board_list_num;
			for($i=0;$row = sql_fetch_array($Result);$i++){
				$Title = $row[Title];
				$Title = cut_string($Title, 120);
				
				$str="";
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
					$secret_img = '<img style="margin-left:5px;" src="/images/community/icon_secret.gif" alt="Secret" />';
				} else {
					$secret_img = "";
				}

				$username = $row["UserName"];

				$auth_link = '<a href="'.$_SERVER["PHP_SELP"].'?board_code=board_view&board_idx='.$row["BoardIdx"].'&page='.$page.'&'.$searchVal.'">';
				$pwd_link = "<a href=\"javascript:pwd_ck('".$row[BoardIdx]."');\">";

				if($secret_img){
					if(!$is_admin && !$is_manager){
						if(!empty($row["UserID"]) && $member["UserID"] == $row["UserID"]) $list_href = $auth_link;
						else {
							$list_href = $pwd_link;
							$osql = " select * from ".$mode." where Ref = '".$row["Ref"]."' and ReLevel = 0 ";
							$orow = sql_fetch($osql);
							if($row["ReLevel"] > 0 && $member["UserID"] == $orow["UserID"]){
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
			?>
			<tr>
				<td><?=$num?></td>
				<td><?=$row["Category"]?></td>
				<td><?=$row["Secret"]?>
					<?=$list_href.$Title?></a>
					<?
					if($new_ck) echo $new_img;
					echo $secret_img;
					?>
				</td>
				<td><?=substr($row["RegDate"],0,10)?></td>
				<td><?=number_format($row["ReadNum"])?></td>
			</tr>
			<?
				$num--;
			}

			if($Count == 0){ echo "<tr><td colspan='5' style='text-align:center;padding:100px 0px;'>게시물이 없습니다</td></tr>"; }
			?>
		</tbody>
	</table>
	</form>
	<? if($BoardDateRow["WriteAuthority"]<=$levelchk || $is_admin) { ?>
	<div class="btn-area">
		<p>
			<a href="<?=$_SERVER["PHP_SELF"]?>?board_code=board_write&<?=$searchVal?>" class="btn btn-write">글쓰기</a>
		</p>
	</div>
	<? } ?>
	<nav class="paging">
		<ul class="pagination">
			<?
			if($Count>0){
				$write_pages = str_replace("처음", "<<", $write_pages);
				$write_pages = str_replace("이전", "<", $write_pages);
				$write_pages = str_replace("다음", ">", $write_pages);
				$write_pages = str_replace("맨끝", ">>", $write_pages);
				//$write_pages = preg_replace("/<span>([0-9]*)<\/span>/", "$1", $write_pages);
			//	$write_pages = preg_replace("/<b>([0-9]*)<\/b>/", "<b><span style=\"color:#4D6185; font-size:12px; text-decoration:underline;\">$1</span></b>", $write_pages);
				echo $write_pages;
			}
			?>
		</ul>
	</nav>
</div>
<script type="text/javascript">
function pwd_ck(idx){
	var f = document.list_form;
	f.board_code.value = "board_view";
	f.BoardIdx.value = idx;
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
