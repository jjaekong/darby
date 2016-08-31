<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php');

$workType = "faq";
$mode = $site_prefix."board_".$workType;

$BoardName = "faq";
$PageBlock   = 10;  //넘길 페이지 갯수
$board_list_num = 1000;                     //게시판 게시글 수
$pagebt1=$loc."/mobile/images/ico_double_arrow_left.png";
$pagebt2=$loc."/mobile/images/ico_arrow_left.png";
$pagebt3=$loc."/mobile/images/ico_arrow_right.png";
$pagebt4=$loc."/mobile/images/ico_double_arrow_right.png";
$fileURL = "../../board/upload/".$BoardName."/";

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

$write_pages = get_paging_mobile($PageBlock, $page, $total_page, $_SERVER["PHP_SELF"]."?".$searchVal."&board_code=".$board_code."&start_page=0&category=".$category."&page=");
?>
<link href="/mobile/css/customer.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="customer faq">
		<div class="page-title">
			<h2>자주하는 질문</h2>
		</div>
		<div class="faq-view">
			<div class="container">
				<div class="section-header">
					<div class="search-area">
						<form name="search_form" method="get">
							<div class="form-group">
								<select class="form-control">
									<option value="Title">질문</option>
									<option value="Content" <?=$_GET["sT"]=="Content"?"selected":""?>>답변</option>
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
				<div class="section-content">
					<div class="panel-group accordion-list" id="faq-list">
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
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#faq-list" href="#reply-<?=$row["BoardIdx"]?>" >
										<i>Q</i> <?=$row["Title"]?>
									</a>
								</h4>
							</div>
							<div id="reply-<?=$row["BoardIdx"]?>" class="panel-collapse collapse">
								<div class="panel-body">
									<i>A</i>
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
									if($row["HtmlChk"]=="Y"){
										 echo $row["Content"];
									} else {
										echo nl2br($row["Content"]);
									}
									?>
									
								</div>
							</div>
						</div>
						<?
							$num--;
						}

						if($Count == 0){ echo "<ul class='faq_q'><li style='width:100%;padding:40px 0px 40px 0px; text-align:center;' class='faq_title'>게시물이 없습니다</li></ul>"; }
						?>
					</div>
				</div>
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
		</div>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
		
