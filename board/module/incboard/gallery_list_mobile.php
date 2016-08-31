<?
if (!defined("_MKBOARD_")) exit; // 개별 페이지 접근 불가 
$BoardDateSQL = "select * from $TableConfigDB where Idx=".$date_idx;
$BoardDateRow = sql_fetch($BoardDateSQL);

$BoardNameArr = explode("_",$mode);
$BoardNameArrSize = count($BoardNameArr);
$BoardName = $BoardNameArr[$BoardNameArrSize-1];
$PageBlock   = 5;  //넘길 페이지 갯수
$board_list_num = 6;                     //게시판 게시글 수
$pagebt1=$loc."/mobile/images/ico_double_arrow_left.png";
$pagebt2=$loc."/mobile/images/ico_arrow_left.png";
$pagebt3=$loc."/mobile/images/ico_arrow_right.png";
$pagebt4=$loc."/mobile/images/ico_double_arrow_right.png";
$fileURL = "../../board/upload/".$BoardName."/";


$TotalSQL = "select * from ".$mode." where 1 ";

if($sF || $sT){
	$TotalSQL .= " AND ".$sT." like '%".$sF."%'";
}

if($Category){
	$TotalSQL .= " and Category = '".$Category."' ";
}

if(empty($order_flag) && empty($order_type)){
	$order_flag = "RegDate";
	$order_type = "desc";
}

$TotalSQL.= "order by $order_flag $order_type";
$TotalResult = mysql_query($TotalSQL);
$TotalCount  = mysql_num_rows($TotalResult);

$total_page  = ceil($TotalCount / $board_list_num);  // 전체 페이지 계산

if (!$page) $page = 1; // 페이지가 없으면 첫 페이지 (1 페이지)

if($page > 1) $prev_page = intval($page-1);
else $prev_page = "";

if($page == $total_page) $next_page = "";
else $next_page = intval($page+1);

if($TotalCount < $board_list_num){
	$prev_page = "";
	$next_page = "";
}

$from_record = ($page - 1) * $board_list_num; // 시작 열을 구함

$SQL = $TotalSQL." limit $from_record, $board_list_num";
$Result      = mysql_query($SQL);
$Count       = mysql_num_rows($Result);

$write_pages = get_paging_mobile($PageBlock, $page, $total_page, $_SERVER["PHP_SELF"]."?".$searchVal."&board_code=".$board_code."&start_page=0&category=".$category."&page=");
$mod = 4;

$thmPath = $dir."/upload/".$BoardName."/thumbs/";

$dir_ck = is_dir($thmPath);

if($dir_ck != "1"){
	if(!@mkdir("$thmPath", 0707)){ echo "디렉토리 생성실패"; exit;}
	if(!@chmod("$thmPath", 0707)){ echo "퍼미션변경 실패"; exit;}
}

include_once($dir."/config/skin.lib.php");

if (!function_exists("imagecopyresampled")) alert("GD 2.0.1 이상 버전이 설치되어 있어야 사용할 수 있는 갤러리 게시판 입니다.");

$thumb_width = 435;
$thumb_height = 471;
?>
<section class="photo">
	<div class="container">
		<div class="section-header">
			<div class="search-area">
				<form name="search_form" action="" method="get">
				<input type="hidden" name="workType" value="<?=$workType?>">
					<div class="form-group">
						<select class="form-control" name="sT">
							<option value="Title">제목</option>
							<option value="Content" <?=$_GET["sT"]=="Content"?"selected":""?>>내용</option>
							<option value="UserName" <?=$_GET["sT"]=="UserName"?"selected":""?>>작성자</option>
						</select>
					</div>
					<div class="form-group">
						<label for="search-keyword" class="sr-only">검색어</label>
						<input id="search-keyword" type="text" class="form-control" name="sF" value="<?=$_GET["sF"]?>">
					</div>
					<button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button>
				</form>
			</div>
		</div>
		<form name="list_form" method="post">
		<input type="hidden" name="board_code" value="<?=$board_code?>">
		<input type="hidden" name="board_idx" value="">
		<input type="hidden" name="page" value="<?=$page?>">
		<input type="hidden" name="Category" value="<?=$Category?>">
		<input type="hidden" name="workType" value="<?=$workType?>">
		<input type="hidden" name="mode" value="<?=$mode?>">
		<input type="hidden" name="sT" value="<?=$sT?>">
		<input type="hidden" name="sF" value="<?=$sF?>">
		<input type="hidden" name="pwdck" value='1'>
		<input type="hidden" name="URI" value="<?=$_SERVER['REQUEST_URI']?>"/>
		<div class="section-content">
			<ul class="photo-review row">
				<?
					$num = $TotalCount - ($page-1)*$board_list_num;
					for($i=0;$row = sql_fetch_array($Result);$i++){
						$Title = $row[Title];
					$Title = cut_string($Title, 75);

					$new_img = "";
					$wdate = $row["RegDate"];
					$img = "";

					$row["files"] = get_file($mode,$row["BoardIdx"]);
					switch($row["files"][0][image_type]){
						case "1":
						case "2":
						case "3":
							if(file_exists($fileURL."/thumbs/".$row["files"][0][file_source])){
								$row["files"][0]["thumb_src"] = "/board/upload/".$BoardName."/thumbs/".$row["files"][0][file_source];
							} else {
								if($row["files"][0]["image_width"] <= $thumb_width && $row["files"][0]["image_height"] <= $thumb_height){
									$row["files"][0]["thumb_src"] = "/board/upload/".$BoardName."/".$row["files"][0][file_source];
								} else {
									$row["files"][0]["thumb_src"] = makeThumbs($fileURL, $row["files"][0][file_source], $thumb_width, $thumb_height, "thumbs","");
									if(file_exists($fileURL."/thumbs/".$row["files"][0][file_source])){
										$row["files"][0]["thumb_src"] = "/board/upload/".$BoardName."/thumbs/".$row["files"][0][file_source];
									} else {
										$row["files"][0]["thumb_src"] = "/board/upload/".$BoardName."/".$row["files"][0][file_source];
									}
								}
							}
							break;
						case "6":
							$img_ck = true;
							$row["files"][0]["thumb_src"] = "/board/upload/".$BoardName."/".$row["files"][0][file_source];
							break;
						default:
							$row["files"][0]["thumb_src"] = "/image/about_img/noimg.gif";
					}

					$img = "<img src='".$row["files"][0]["thumb_src"]."' class='img-responsive'>";

					$auth_link = $_SERVER["PHP_SELP"].'?board_code=board_view&board_idx='.$row["BoardIdx"].'&page='.$page.'&'.$searchVal;
					$pwd_link = "javascript:pwd_ck('".$row[BoardIdx]."');";

					$list_href = $auth_link;
				?>
				<li class="col-xs-6">
					<figure>
						<a href="<?=$list_href?>"><?=$img?></a>
						<figcaption>
							<?=$Title?><br>
							<small><?=substr($row["RegDate"],0,10)?></small>
						</figcaption>
					</figure>
				</li>
				<?
				}
				if($Count == 0) echo "<li style='text-align:center;padding:50px 0px;'>등록된 게시물이 없습니다</li>";
				?>
			</ul>
		</div>
		</form>
		<? if($BoardDateRow["WriteAuthority"]<=$levelchk || $is_admin){ ?>
		<div class="btn-area">
			<p>
				<a href="<?=$_SERVER["PHP_SELF"]?>?board_code=board_write&<?=$searchVal?>" class="btn btn-pink">글쓰기</a>
			</p>
		</div>
		<? } ?>
		<nav class="paging">
			<ul class="pagination">
				<?
				if($Count>0){
					$write_pages = str_replace("처음", "<img src='$pagebt1' border='0' align='absmiddle' height='7' title='처음'>", $write_pages);
					$write_pages = str_replace("이전", "<img src='$pagebt2' border='0' align='absmiddle' height='7' title='이전'>", $write_pages);
					$write_pages = str_replace("다음", "<img src='$pagebt3' border='0' align='absmiddle' height='7' title='다음'>", $write_pages);
					$write_pages = str_replace("맨끝", "<img src='$pagebt4' border='0' align='absmiddle' height='7' title='맨끝'>", $write_pages);
					//$write_pages = preg_replace("/<span>([0-9]*)<\/span>/", "$1", $write_pages);
					$write_pages = preg_replace("/<b>([0-9]*)<\/b>/", "<b><span style=\"color:#4D6185; font-size:12px; text-decoration:underline;\">$1</span></b>", $write_pages);
					echo $write_pages;
				}
				?>
			</ul>
		</nav>
	</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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

<?
switch($BoardName){
	case "reviewforeign":
	case "reviewenter":
		echo '$(".container").parent().removeClass("news").addClass("review-list");';
		break;
}
?>
</script>