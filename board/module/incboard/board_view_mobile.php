<?
if (!defined("_MKBOARD_")) exit; // 개별 페이지 접근 불가 
//$date_idx = $_REQUEST["date_idx"];
$BoardDateSQL = "select * from $TableConfigDB where Idx=".$date_idx;
$BoardDateRow = sql_fetch($BoardDateSQL);

$BoardNameArr = explode("_",$mode);
$BoardNameArrSize = count($BoardNameArr);
$BoardName = $BoardNameArr[$BoardNameArrSize-1];
$fileURL="../board/upload/".$BoardName."/";

if(empty($BoardIdx)) $BoardIdx = $_REQUEST["board_idx"];

$BoardViewSQL = "select * from ".$mode." where BoardIdx=".$BoardIdx;
$view = sql_fetch($BoardViewSQL);

$auth_msg = "권한이 없습니다. 회원이시라면 로그인 후 이용하시기 바랍니다.";
if($BoardName == "after") $auth_msg = "의료법상 모든 치료후기는 로그인 없이 열람할 수 없습니다. 번거로우시더라도 로그인 후 열람하여 주시기 바랍니다.";

if(!$is_admin && !$is_manager && !empty($BoardDateRow["ViewAuthority"]) && $member["UserLevel"] < $BoardDateRow["ViewAuthority"]){
	GetAlert($auth_msg,"BACK");
} else if(!$is_admin && !$is_manager && $view["Secret"] == "1"){
	if($view["ReLevel"] > 0){
		$osql = " select * from ".$mode." where Ref = '".$view["Ref"]."' and ReLevel = '0' ";
		$orow = sql_fetch($osql);
		if($member["UserID"] != $orow["UserID"]) GetAlert($auth_msg,"BACK");
	}
}

$sql1 = "update ".$mode." set ReadNum=ReadNum+1 where BoardIdx=".$BoardIdx;
mysql_query($sql1);

$q_next = "select BoardIdx, Title, RegDate from ".$mode." where ReLevel = 0 and BoardIdx>".$BoardIdx;
if($Category){
   $q_next .= " AND Category='".$Category."' ";
}
$q_next .= " order by BoardIdx  limit 0,1";
$q_next_row = sql_fetch($q_next);

$q_prev = "select BoardIdx, Title, RegDate from ".$mode." where ReLevel = 0 and BoardIdx<".$BoardIdx;
if($Category){
   $q_prev .= " AND Category='".$Category."' ";
}
$q_prev .= "  order by BoardIdx desc limit 0,1";
$q_prev_row = sql_fetch($q_prev);


$view["files"] = get_file($mode,$BoardIdx);

if($password1){
	$upw = sql_password($password1);

	if($upw != $view[UserPw]){
		GetAlert('비밀번호가 맞지 않습니다.',$URI);
		exit;
	}
}

if($is_member || $is_admin){
	$modify_link_in_view = "modify_chk(document.view_form);";
	$delete_link_in_view = "delete_chk();";
} else {
	$modify_link_in_view = "pwd_ck('".$view["BoardIdx"]."','board_write');";
	$delete_link_in_view = "pwd_ck('".$view["BoardIdx"]."','board_delete');";
}
$fstart = 0;

?>
<section class="view">
	<div class="container">
		<div class="section-header">
		</div>
		<div class="section-content">
			<div class="view-header">
				<?=!empty($view["Category"])?"<span class='tag'>[".$view["Category"]."]</span>":""?>
				<h4><?=$view["Title"]?></h4>
				<dl>
					<dt>등록일</dt>
					<dd><?=substr($view["RegDate"],0,10)?></dd>
					<dt>조회수</dt>
					<dd><?=number_format($view["ReadNum"])?></dd>
				</dl>
			</div>
			<div class="view-content">
				<?
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
				if($view["HtmlChk"]=="Y"){
					$view["Content"] = preg_replace("/(\<img )([^\>]*)(\>)/i", "\\1 name='target_resize_image[]' \\2 \\3", $view["Content"]);
					echo $view["Content"];
				} else {
					echo nl2br($view["Content"]);
				}
				?>
				<div class="file">
					<?
					for($i=$fstart;$i<$view["files"]["count"];$i++){
					//	if($files[$i][image_type]=="1" || $files[$i][image_type]=="2" || $files[$i][image_type]=="3" || $files[$i][image_type]=="6") continue;
						if($i > 0) echo ", ";
						echo "<p><a href='".$view["files"][$i][href]."'>".$view["files"][$i][file_name]."</a></p>";
					}
					?>
				</div>
			</div>
		</div>
		<form name="view_form" method="post" action="/board/module/incboard/board_ok.php">
		<input type="hidden" name="board_code" value="board_delete">
		<input type="hidden" name="BoardIdx" value="<?=$view[BoardIdx]?>">
		<input type="hidden" name="mode" value="<?=$mode?>">
		<input type="hidden" name="URI" value="<?=$_SERVER['PHP_SELF']?>">
		<input type="hidden" name="page" value="<?=$page?>">
		<input type="hidden" name="start_page" value="<?=$start_page?>">
		<input type="hidden" name="Category" value="<?=$Category?>">
		<input type="hidden" name="workType" value="<?=$workType?>">
		<input type="hidden" name="sT" value="<?=$sT?>">
		<input type="hidden" name="sF" value="<?=$sF?>">
		<input type="hidden" name="mob" value="">
		<input type="hidden" name="Ref" value="">
		<input type="hidden" name="ReStep" value="">
		<input type="hidden" name="ReLevel" value="">
		<input type="hidden" name="returnpage" value="">
		<input type="hidden" name="pwdck">
		<div class="btn-area">
			<p>
				<? if($view[UserID] == $member[UserID] || $is_admin ){ ?>
				<a href="javascript:;" onclick="<?=$modify_link_in_view?>" class="btn btn-gray">수정</a>
				<a href="javascript:;" onclick="<?=$delete_link_in_view?>"  class="btn btn-gray">삭제</a>
				<? } ?>
				<a href="<?=$_SERVER['PHP_SELF']?>?board_code=board_list&page=<?=$page?>&<?=$searchVal?>" class="btn btn-gray">목록</a>
			</p>
		</div>
		</form>
	</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
function reply_ck(f){
	f.method = "get";
	f.board_code.value = "board_write";
	f.action = "<?=$_SERVER['PHP_SELF']?>";
	f.Ref.value = "<?=$view['Ref']?>";
	f.ReStep.value = "<?=$view[ReStep]?>";
	f.ReLevel.value = "<?=$view[ReLevel]?>";
	f.mob.value = '1';
	f.submit();
}
function modify_chk(f){
	f.method = "get";
	f.board_code.value = "board_write";
	f.action = "<?=$_SERVER['PHP_SELF']?>";
	f.submit();
}
function pwd_ck(idx,code){
	var f = document.view_form;
	f.board_code.value = code;
	f.BoardIdx.value = idx;
	f.pwdck.value = "1";
	if(code == "board_delete"){
		if(!confirm("정말 삭제하시겠습니까?")) return;
		f.returnpage.value = "/board/module/incboard/board_delete_ok.php";
	}
	f.action = "<?=$_SERVER['PHP_SELF']?>";
	f.submit();
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
	resizeBoardImage(parseInt($(".view-content").width()));

	$("#content").removeClass("news-list").addClass("news-view");
}
</script>
<?
if($BoardDateRow[ViewInList] == "1"){
	include_once("../board/module/incboard/board_list.php");
}
?>
