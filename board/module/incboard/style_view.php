<?
if (!defined("_MKBOARD_")) exit; // 개별 페이지 접근 불가 
//$date_idx = $_REQUEST["date_idx"];
$BoardDateSQL = "select * from $TableConfigDB where Idx=".$date_idx;
$BoardDateRow = sql_fetch($BoardDateSQL);

if(!$is_admin && !empty($BoardDateRow["ViewAuthority"]) && $member["Level"] < $BoardDateRow["ViewAuthority"]) err_back("권한이 없습니다.");

$BoardNameArr = explode("_",$mode);
$BoardNameArrSize = count($BoardNameArr);
$BoardName = $BoardNameArr[$BoardNameArrSize-1];
$fileURL="../board/upload/".$BoardName."/";

if(empty($BoardIdx)) $BoardIdx = $_REQUEST["board_idx"];

$BoardViewSQL = "select * from ".$mode." where BoardIdx=".$BoardIdx;
$view = sql_fetch($BoardViewSQL);

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


$files = get_file($mode,$BoardIdx);
$file_num = $files[count];

if($password1){
	$upw = sql_password($password1);

	if($upw != $view[UserPw]){
		err_back('비밀번호가 맞지 않습니다.');
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
?>
<!--img-->
<div class="style_warp">
	<p class="pt10 pl10"><img src="/images/story/style_title.gif"></p>
	<div class="sum_img">
		<img src="<?=$files[0]["path"]?>/<?=$files[0]["file_source"]?>" width="745" height="504">
	</div>
	<p class="click">
		<a href="<?=$_SERVER['PHP_SELF']?>?board_code=board_list&lview=1&<?=$searchVal?>" title="목록"><img src="/images/story/click_btn.png"></a>
	</p>
</div>
<!--img-->

<!--event-->
<div style="padding-bottom:50px;">
	<div class="mt30">
	<?
	if($view["HtmlChk"]=="Y"){
		$view["Content"] = preg_replace("/(\<img )([^\>]*)(\>)/i", "\\1 name='target_resize_image[]' \\2 \\3", $view["Content"]);
		echo $view["Content"];
	} else {
		echo nl2br($view["Content"]);
	}
	?>
	</div>
	<img src="/images/story/style_t1.gif" class="mt30 ml100">
	<img src="/images/story/style_t2.gif" class="mt30 ml250">
</div>
<?
if($BoardDateRow["CommentFlag"]){
	include $dir."/module/incboard/scomment.php";
}
?>

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
		f.returnpage.value = "/board/module/incboard/board_ok.php";
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
	resizeBoardImage(745);
}
</script>
<?
if($BoardDateRow[ViewInList] == "1"){
	include_once("../board/module/incboard/board_list.php");
}
?>
