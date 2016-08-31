<?
include_once $_SERVER['DOCUMENT_ROOT']."/board/admn/include/head.php";
include $dir.$configDir."/admin_check.php";

$t200 = "top_mon";
$t202 = "navi_mon";
$left = "l2";

include_once $dir."/admn/include/admin_top.php";
include_once $dir."/admn/include/admin_left.php";

if($bidx){
	$blist = get_board_setting($bidx);
	$board_setting = $blist[0];
	unset($blist);
}
$mode = $site_prefix."board_".$board_setting["BoardName"];
$sql = " select * from ".$mode." where BoardIdx = '".$idx."' ";
$view = sql_fetch($sql);
$view["files"] = get_file($mode,$idx);
$BoardName = $board_setting["BoardName"];

$view_cnt = sql_query("update ".$mode." set ReadNum=ReadNum+1 where BoardIdx = '".$idx."' ");

$q_next = "select BoardIdx, Title, RegDate from ".$mode." where ReLevel = 0 and BoardIdx>".$idx;
if($Category){
   $q_next .= " AND Category='".$Category."' ";
}
$q_next .= " order by BoardIdx  limit 0,1";
$q_next_row = sql_fetch($q_next);

$q_prev = "select BoardIdx, Title, RegDate from ".$mode." where ReLevel = 0 and BoardIdx<".$idx;
if($Category){
   $q_prev .= " AND Category='".$Category."' ";
}
$q_prev .= "  order by BoardIdx desc limit 0,1";
$q_prev_row = sql_fetch($q_prev);

$searchVal = "Category=".urlencode($Category)."&sfl=".$sfl."&stx=".$stx."&cat2=".$cat2."&page=".$page."&bidx=".$bidx;

$username = $view["UserName"];
?>
<div id="container">
	<div class="content_view">
		<div class="con_title"><?=$board_setting["BoardTitle"]?></div>
		<table class="view_table mt15">
			<colgroup>
				<col width="70">
				<col width="10">
				<col width="">
			</colgroup>
			<tbody>
			<tr>
				<td colspan="3" class="subject"><?=$BoardName=="spineinfo"?"[".get_category($view["bd1"])." - ".get_category($view["bd2"])."] ":""?><?=$BoardName=="newspaper"?"[".$view["bd1"]."] ":""?><?=!empty($view["Category"])?"[".$view["Category"]."] ":""?><?=$view["Title"]?><?=$BoardName=="webzine" && $view["bd1"]=="Y"?"[상위노출]":""?></th>
			</tr>
			<tr>
				<td colspan='3' class="name"><strong><?=$username?></strong> <span class='d_bar'>|</span> <?=$view["ReadNum"]?> <span class='d_bar'>|</span> <?=substr($view["RegDate"],0,10)?></td>
			</tr>
			<tr>
				<td class='file center pl10'>파&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;일</td>
				<td class="file"> <span class='d_bar'>|</span></td>
				<td class="file pl10 pt5 pb5">
					<?
					if($view["files"]["count"] > 0){
						for($i=0;$i<$view["files"]["count"];$i++){
						//	if($view["files"][$i][image_type]=="1" || $view["files"][$i][image_type]=="2" || $view["files"][$i][image_type]=="3" || $view["files"][$i][image_type]=="6") continue;
							echo "<a href='".$view["files"][$i][href]."' > ".$view["files"][$i][file_name]."</a><br>";
						}
					}
					?>
				</td>
			</tr>
			<tr>
				<td class="file center pl10">이&nbsp;메&nbsp;일</td>
				<td colspan="3" class="file pl10"> <span class='d_bar'>|</span><?=$view["UserEmail"]?></td>
			</tr>
			<? if($BoardName == "customer"){ ?>
			<tr>
				<td class="file center pl10">연&nbsp;락&nbsp;처</td>
				<td colspan="3" class="file pl10"> <span class='d_bar'>|</span><?=$view["bd1"]."-".$view["bd2"]."-".$view["bd3"]?></td>
			</tr>
			<? } ?>
			<tr>
				<td colspan="3" class="content">
					<?
					if($BoardName == "medicalteam"){
						echo "학과명 : ".$view["bd1"]."<br>";
					}
					if($BoardName == "photo"){
						echo "나이 : ".$view["bd1"]."<br>";
						echo "성별 : ".$view["bd2"]."<br>";
						echo "치료 : ".$view["bd3"]."<br><br>";
					}
					if($BoardName == "movie"){
						echo preg_replace("/\&\#034\;/i","\"",$view["bd1"])."<br><br><br>";
					}
					if($BoardName == "account"){
						switch($view["Category"]){
							case "첫방문고객":
							case "종합검진":
								echo "생년월일 : ".date("Y년 m월 d일",strtotime($view["bd1"]))."<br><br>";
								if($view["bd2"] == "1") $gender = "남자";
								else $gender = "여자";
								echo "성별 : ".$gender."<br><br>";
								echo "통신사 : ".$view["bd3"]."<br><br>";
								echo "연락처 : ".substr($view["bd4"],0,3)."-".substr($view["bd4"],3,4)."-".substr($view["bd4"],7,4)."<br><br>";
								break;
							case "온라인예약":
								$csql = " select * from ".$site_prefix."charge where idx = '".$view["bd3"]."' ";
								$crow = sql_fetch($csql);

								$account_info = get_member($view["UserID"]);

								echo "==========예약 정보==========<br><Br>";
								echo "예약날짜 : ".date("Y년 m월 d일",$view["bd1"])."<br><br>";
								echo "예약센터 : ".$view["bd2"]."<br><br>";
								echo "담당의사 : ".$crow["name"]."<br><br>";
								echo "예약시간 : ".$view["bd4"]."<br><br>";
								echo "==========예약자 정보==========<br><Br>";
								echo "예약자명 : ".$view["UserName"]."<br><br>";
								echo "연락처 : ".$account_info["Mobile"]."<br><Br>";
								echo "생년월일 : ".$account_info["BirthDay"]."<br><Br>";
								echo "주소 : [".$account_info["ZipCode"]."] ".$account_info["Address1"]." ".$account_info["Address2"]."<br><Br>";
								break;
							case "간편예약":
								$csql = " select * from ".$site_prefix."charge where idx = '".$view["bd3"]."' ";
								$crow = sql_fetch($csql);

								$account_info = get_member($view["UserID"]);

								echo "==========예약 정보==========<br><Br>";
								echo "예약날짜 : ".date("Y년 m월 d일",$view["bd1"])."<br><br>";
								echo "예약센터 : ".$view["bd2"]."<br><br>";
								echo "담당의사 : ".$crow["name"]."<br><br>";
								echo "예약시간 : ".$view["bd4"]."<br><br>";
								echo "==========예약자 정보==========<br><Br>";
								echo "예약자명 : ".$view["UserName"]."<br><Br>";
								echo "연락처 : ".$view["bd5"]."<br><Br>";
								break;
							default:
								$csql = " select * from ".$site_prefix."charge where idx = '".$view["bd3"]."' ";
								$crow = sql_fetch($csql);

								$account_info = get_member($view["UserID"]);

								echo "==========예약 정보==========<br><Br>";
								echo "예약날짜 : ".date("Y년 m월 d일",$view["bd1"])."<br><br>";
								echo "예약센터 : ".$view["bd2"]."<br><br>";
								echo "담당의사 : ".$crow["name"]."<br><br>";
								echo "예약시간 : ".$view["bd4"]."<br><br>";
								echo "==========예약자 정보==========<br><Br>";
								echo "예약자명 : ".$view["UserName"]."<br><br>";
								echo "연락처 : ".$account_info["Mobile"]."<br><Br>";
								echo "생년월일 : ".$account_info["BirthDay"]."<br><Br>";
								echo "주소 : [".$account_info["ZipCode"]."] ".$account_info["Address1"]." ".$account_info["Address2"]."<br><Br>";
								
						}
						echo "<br><Br>";
						echo "<form name='write_form' method='post' action='/board/admn/_proc/board/_board_proc.php'>";
						echo "<input type='hidden' name='workType' value='SM'>";
						echo "<input type='hidden' name='idx' value='".$view["BoardIdx"]."'>";
						echo "<input type='hidden' name='sfl' value='".$sfl."'>";
						echo "<input type='hidden' name='stx' value='".$stx."'>";
						echo "<input type='hidden' name='page' value='".$page."'>";
						echo "<input type='hidden' name='sdate' value='".$sdate."'>";
						echo "<input type='hidden' name='edate' value='".$edate."'>";
						echo "<input type='hidden' name='aname' value='".$aname."'>";
						echo "<input type='hidden' name='acat' value='".$acat."'>";
						echo "<input type='hidden' name='acharge' value='".$acharge."'>";
						echo "<input type='hidden' name='cat' value='".$cat."'>";
						echo '<table class="write_table"><colgroup><col style="width:10%"></col><col style="width:35%"></col><col style="width:10%"></col><col style="width:35%"></col><col style="width:10%"></col></colgroup><tbody>';
						echo '<tr>';
						echo '<th><label>예약상태</label></th>';
						echo '<td><select id="bd8" name="bd8"><option value=""></option><option value="전화상담완료">전화상담완료</option><option value="예약완료">예약완료</option><option value="연결보류">연결보류</option></td>';
						echo '<th><label>상담자명</label></th>';
						echo '<td><input type="text" name="bd9" class="input wd140" value="'.$view["bd9"].'"></td>';
						echo '<td><button type="button" class="btn_a_n" onclick="this.form.submit();">상태저장</button></td>';
						echo '</tr>';
						echo '</tbody></table>';
						echo '</form>';
					}
					$fstart = 0;
					for($i=$fstart;$i<$view["files"]["count"];$i++){
						if($view["files"][$i][file_source]){
							if($view["files"][$i][image_type]=="1" || $view["files"][$i][image_type]=="2" || $view["files"][$i][image_type]=="3" || $view["files"][$i][image_type]=="6"){
								$dir2 = $view["files"][$i]["path"]."/".$view["files"][$i][file_source];
								?>
									<img src="<?=$dir2?>"  name='target_resize_image[]' ><br>
								<?
							 } else if(preg_match("/\.(avi|wmv|asf)$/i",$view["files"][$i][file_source])){
							?>
								<embed src="../board/upload/<?=$BoardName?>/<?=$view["files"][$i][file_source]?>" AutoStart="true" width=600 height=420><br>
							<?
							}
						}
					}
					?>
					</center>
					<br>
					<?
					if($board_setting["HtmlFlag"]){
						$view["Content"] = preg_replace("/(\<img )([^\>]*)(\>)/i", "\\1 name='target_resize_image[]' \\2 \\3", $view["Content"]);
						echo $view["Content"];
					} else {
						echo nl2br($view["Content"]);
					}

					if($BoardName == "qna" && $view["bd1"]){
						echo "<div style='width:100%;margin-top:10px;background:#dedede;'><div style='padding:10px;'>[답변] ".$view["Title"]."<br><br>".nl2br($view["bd1"])."</div></div>";
					}
					?>
				</td>
			</tr>
			</tbody>
		</table>

		<div class="mt10"></div>

		<table class="write_table">
			<colgroup>
				<col style="width:120px;"></col>
				<col></col>
			</colgroup>
			<tbody>
			<? if($q_prev_row["BoardIdx"]){ ?>
			<tr>
				<th><label>이전글</label></th>
				<td><a href="<?=$_SERVER['PHP_SELF']?>?<?=$searchVal?>&idx=<?=$q_prev_row["BoardIdx"]?>"><?=$q_prev_row["Title"]?></a></td>
			</tr>
			<? } ?>
			<? if($q_next_row["BoardIdx"]){ ?>
			<tr>
				<th><label>다음글</label></th>
				<td><a href="<?=$_SERVER['PHP_SELF']?>?<?=$searchVal?>&idx=<?=$q_next_row["BoardIdx"]?>"><?=$q_next_row["Title"]?></a></td>
			</tr>
			<? } ?>
			</tbody>
		</table>
		
		<div class="mt5 btn_group">
			<? if($BoardName != "qna"){ ?>
			<button type="button" class="btn_a_n" onclick="board_write();">작 성</button>
			<button type="button" class="btn_a_b" onclick="board_reple('<?=$view["BoardIdx"]?>','reply');">답 변</button>
			<button type="button" class="btn_a_b" onclick="board_modify('<?=$view["BoardIdx"]?>');">수 정</button>
			<? } else { ?>
			<button type="button" class="btn_a_b" onclick="board_modify('<?=$view["BoardIdx"]?>');">답변하기</button>
			<? } ?>
			<button type="button" class="btn_a_b" onclick="board_delete('<?=$view["BoardIdx"]?>');">삭 제</button>
			<button type="button" class="btn_a_b" onclick="board_list_move();">목 록</button>
		</div>
		
		<? if($board_setting["CommentFlag"]){ include_once $dir."/admn/board/comment.php"; } ?>

		<div class="cboth"></div>
	</div>
	<div class="mt100"></div>
</div>
<form name="view_form" method="post" action="/board/admn/_proc/board/_board_proc.php">
<input type="hidden" name="workType" value="">
<input type="hidden" name="URI" value="">
<input type="hidden" name="idx" value="">
<input type="hidden" name="bidx" value="<?=$bidx?>">
</form>
<script>
function board_list_move(){
	location.href = "/board/admn/board/board.php?<?=$searchVal?>";
}
function board_delete(board_idx){
	if(!confirm("게시물을 삭제하시겠습니까?")) return;
	var f = document.view_form;
	f.workType.value = "D";
	f.idx.value = board_idx;
	f.URI.value = "/board/admn/board/board.php?<?=$searchVal?>";
	f.submit();
}
function board_modify(board_idx){
	location.href = "/board/admn/board/board_write.php?<?=$searchVal?>&idx="+board_idx;
}
function board_reple(board_idx,mob){
	location.href = "/board/admn/board/board_write.php?<?=$searchVal?>&idx="+board_idx+"&Ref=<?=$view[Ref]?>&ReStep=<?=$view[ReStep]?>&ReLevel=<?=$view[ReLevel]?>&mob="+mob;
}
function board_write(){
	location.href = "/board/admn/board/board_write.php?<?=$searchVal?>";
}
function resizeBoardImage(imageWidth, borderColor) {
	var target = document.getElementsByName('target_resize_image[]');
	var imageHeight = 0;

	if (target) {
		for(i=0; i<target.length; i++) { 
			// 원래 사이즈를 저장해 놓는다
			target[i].tmp_width  = target[i].width;
			target[i].tmp_height = target[i].height;
			// 이미지 폭이 테이블 폭보다 크다면 테이블폭에 맞춘다
			if(target[i].width > imageWidth) {
				imageHeight = parseFloat(target[i].width / target[i].height)
				target[i].width = imageWidth;
				target[i].height = parseInt(imageWidth / imageHeight);
			//	target[i].style.cursor = 'pointer';

				// 스타일에 적용된 이미지의 폭과 높이를 삭제한다
				target[i].style.width = '';
				target[i].style.height = '';
			}

			if (borderColor) {
				target[i].style.borderWidth = '1px';
				target[i].style.borderStyle = 'solid';
				target[i].style.borderColor = borderColor;
			}
		}
	}
}

window.onload = function(){
	resizeBoardImage(parseInt($(window).width()-240));
}
</script>
<?
include_once $dir."/admn/include/tail.php";
?>