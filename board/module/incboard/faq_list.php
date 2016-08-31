<?
if (!defined("_MKBOARD_")) exit; // 개별 페이지 접근 불가 
$BoardDateSQL = "select * from $TableConfigDB where Idx=".$date_idx;
$BoardDateRow = sql_fetch($BoardDateSQL);
$BoardNameArr = explode("_",$mode);
$BoardNameArrSize = count($BoardNameArr);
$BoardName = $BoardNameArr[$BoardNameArrSize-1];
$PageBlock   = 10;  //넘길 페이지 갯수
$board_list_num = 1000;                     //게시판 게시글 수
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

$TotalSQL.= "order by border asc, BoardIdx desc";
$TotalResult = @mysql_query($TotalSQL);
$TotalCount  = @mysql_num_rows($TotalResult);



$total_page  = ceil($TotalCount / $board_list_num);  // 전체 페이지 계산
if (!$page) { $page = 1; } // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $board_list_num; // 시작 열을 구함

$SQL = $TotalSQL." limit $from_record, $board_list_num";
$Result      = @mysql_query($SQL);
$Count       = @mysql_num_rows($Result);

$new_img = "&nbsp;<img src=\"/images/bbs/icon_new.gif\" align=\"absmiddle\" >";

$write_pages = get_paging($PageBlock, $page, $total_page, $_SERVER["PHP_SELF"]."?".$searchVal."&board_code=".$board_code."&start_page=0&category=".$category."&page=");
?>
<div class="container">
	<div class="search-bar">
		<div class="search-form">
			<form lpformnum="1" name="search_form" method="get">
			<input type="hidden" name="workType" value="<?=$workType?>">
				<div class="form-group">
					<select class="form-control" name="sT">
						<option value="Title">질문</option>
						<option value="Content" <?=$_GET["sT"]=="Content"?"selected":""?>>답변</option>
					</select>
					<label for="search-keyword" class="sr-only">검색어</label>
					<input id="search-keyword" type="text" class="form-control" name="sF" value="<?=$_GET["sF"]?>">
				</div>
				<button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button>
			</form>
		</div>
	</div>
	<div class="faq-list">
		<ul>
			<?
			$num = $TotalCount - ($page-1)*$board_list_num;
			for($i=0;$row = sql_fetch_array($Result);$i++){
				$Title = $row[Title];
				$Title = cut_string($Title, 95);
				
				$str="";
				$new_img = "";
				$wdate = $row["RegDate"];
				$today		= date("Y-m-d H:i:s");
				$chk		= strtotime($today) - strtotime($wdate);			
				$chk_new	= (60 * 60 * 24) * 1;
				if(($chk_new - $chk)>0){
					$new_ck = true;
				}

				$list_href = "<a href='javascript:;'>";

				$files = get_file($mode,$row[BoardIdx]);
				$file_num = $files[count];
			?>
			<li>
				<a class="question" href="javascript:;"><i class="icon">Q</i><?=$row["Title"]?></a>
				<div class="answer">
					<i class="icon">A</i>
					<?
					$fstart = 0;
					for($i=$fstart;$i<$file_num;$i++){
						if($files[$i][file_source]){
							if($files[$i][image_type]=="1" || $files[$i][image_type]=="2" || $files[$i][image_type]=="3" || $files[$i][image_type]=="6"){
								$dir2 = $files[$i]["path"]."/".$files[$i][file_source];
								?>
									<img src="<?=$dir2?>"  name='target_resize_image[]' ><br>
								<?
							 } else if(preg_match("/\.(avi|wmv|asf)$/i",$files[$i][file_source])){
							?>
								<embed src="../board/upload/<?=$BoardName?>/<?=$files[$i][file_source]?>" AutoStart="true" width=600 height=420><br>
							<?
							}
						}
					}
					?>
					</center>
					<br>
					<?
					if($row["HtmlChk"]=="Y" && $BoardName != "free"){
						 echo $row["Content"];
					} else {
						echo nl2br($row["Content"]);
					}
					?>
				</div>
			</li>
			<?
				$num--;
			}

			if($Count == 0){ echo "<ul class='faq_q'><li style='width:100%;padding:40px 0px 40px 0px; text-align:center;' class='faq_title'>게시물이 없습니다</li></ul>"; }
			?>
		</ul>
	</div>
</div>