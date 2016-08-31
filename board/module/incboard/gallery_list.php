<?
if (!defined("_MKBOARD_")) exit; // 개별 페이지 접근 불가 
$BoardDateSQL = "select * from $TableConfigDB where Idx=".$date_idx;
$BoardDateRow = sql_fetch($BoardDateSQL);

$BoardNameArr = explode("_",$mode);
$BoardNameArrSize = count($BoardNameArr);
$BoardName = $BoardNameArr[$BoardNameArrSize-1];
$PageBlock   = 10;  //넘길 페이지 갯수
$board_list_num = 4;                     //게시판 게시글 수
$pagebt1=$loc."/image/board_img/first_btn.png";
$pagebt2=$loc."/image/board_img/prev_btn.png";
$pagebt3=$loc."/image/board_img/next_btn.png";
$pagebt4=$loc."/image/board_img/end_btn.png";
$fileURL = "../board/upload/".$BoardName."/";


$TotalSQL = "select * from ".$mode." where 1 ";

if($sF || $sT){
	$TotalSQL .= " AND ".$sT." like '%".$sF."%'";
}

if($Category){
	$TotalSQL .= " and Category = '".$Category."' ";
}

if(empty($order_flag) && empty($order_type)){
	$order_flag = "border";
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

$write_pages = get_paging($PageBlock, $page, $total_page, $_SERVER["PHP_SELF"]."?".$searchVal."&board_code=".$board_code."&start_page=0&category=".$category."&page=");
$mod = 4;

$thmPath = $dir."/upload/".$BoardName."/thumbs/";

$dir_ck = is_dir($thmPath);

if($dir_ck != "1"){
	if(!@mkdir("$thmPath", 0707)){ echo "디렉토리 생성실패"; exit;}
	if(!@chmod("$thmPath", 0707)){ echo "퍼미션변경 실패"; exit;}
}

include_once($dir."/config/skin.lib.php");

if (!function_exists("imagecopyresampled")) alert("GD 2.0.1 이상 버전이 설치되어 있어야 사용할 수 있는 갤러리 게시판 입니다.");

$thumb_width = 280;
$thumb_height = 300;
?>
<div class="container">
	<div class="search-bar">
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
	<div class="photo-list">
		<ul class="proList">
			<?
			for($i=0;$row = sql_fetch_array($Result);$i++){
				$Title = $row[Title];
				$Title = cut_string($Title, 75);

				$new_img = "";
				$wdate = $row["RegDate"];
				$img = "";

				$row["files"] = get_file($mode,$row["BoardIdx"]);

				$img = "<img src='".$row["files"][0]["path"]."/".$row["files"][0]["file_source"]."'>";
				$img2 = "<img src='".$row["files"][1]["path"]."/".$row["files"][1]["file_source"]."'>";

				$auth_link = $_SERVER["PHP_SELP"].'?board_code=board_view&board_idx='.$row["BoardIdx"].'&page='.$page.'&'.$searchVal;
				$pwd_link = "javascript:pwd_ck('".$row[BoardIdx]."');";

				$list_href = $auth_link;
			?>
			<li class="proItem">
				<figure>
					<p><?=$img?><?=$img2?></p>
					<figcaption>
						<ul>
							<li>나이 : <?=$row["bd1"]?></li>
							<li>성별 : <?=$row["bd2"]?></li>
							<li>치료일자 : <?=$row["bd3"]?></li>
						</ul>
					</figcaption>
				</figure>
			</li>
			<?
			}
			// 나머지 td 를 채운다.
			//if (($cnt = $i%$mod) != 0)
			//	for ($l=$cnt; $l<$mod; $l++)
			//		echo "<li>&nbsp;</li>\n";
			
			if($Count == 0){ echo "<li>게시물이 없습니다.</li>"; }
			?>
		</ul>
	</div>
	<div class="btn-area photoMore">
		<p><a href="javascript:;" class="btn btn-more" id="btnMore">더보기</a></p>
	</div>
</div>
<form name="list_form" method="post" >
<input type="hidden" name="mode" value="<?=$mode?>" />
<input type="hidden" name="totalCount" id="totalCount" value="<?=$TotalCount?>"/>
<input type="hidden" name="from_record" id="from_record" value="<?=$Count?>" />
<input type="hidden" name="load_rows" id="load_rows" value="8" />
<input type="hidden" name="BoardName" value="<?=$BoardName?>" />
<input type="hidden" name="sT" value="<?php echo $_GET["sT"]?>" />
<input type="hidden" name="sF" value="<?php echo $_GET["sF"]?>" />
</form>