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

$BoardName = $board_setting["BoardName"];
$mode = $site_prefix."board_".$BoardName;
$is_html = $board_setting["HtmlFlag"];
$workType = "I";
if($BoardName == "photo") $is_html = 0;
$file_script = "";
$file_length = -1;

if($idx != ""){
	$workType = "M";
	$sql = "select * from ".$mode." where BoardIdx=".$idx;
	$write = sql_fetch($sql);
	$write["files"] = get_file($mode, $idx);

	if($BoardName == "product"){
		$bd3_array = explode(",",$write["bd3"]);
	}

	for ($i=0; $i<$write["files"]["count"]; $i++)
	{
		$row = sql_fetch(" select file_source from $fileTable where board_table = '$mode' and board_idx = '$idx' and file_no = '$i' ");
		if ($row[file_source])
		{
			$file_script .= "add_file(\"<input type='checkbox' name='bf_file_del[$i]' value='1'><a href='{$write[files][$i][href]}'>{$write[files][$i][file_name]}</a> 파일 삭제";
			if ($is_file_content)
				//$file_script .= "<br><input type='text' class=ed size=50 name='bf_content[$i]' value='{$row[bf_content]}' title='업로드 이미지 파일에 해당 되는 내용을 입력하세요.'>";
				// 첨부파일설명에서 ' 또는 " 입력되면 오류나는 부분 수정
				$file_script .= "<br><input type='text' class=ed size=50 name='bf_content[$i]' title='업로드 이미지 파일에 해당 되는 내용을 입력하세요.'>";
			$file_script .= "\");\n";
		}
		else
			$file_script .= "add_file('');\n";
	}
	$file_length = $write["files"][count] - 1;

	if($mob == "reply"){
		if(!$board_setting["HtmlFlag"]) $br = "\n";
		else $br = "<br>";
		$write['Content'] = "==================================== [원 문] ====================================".$br.$br.$write['Content'].$br.$br.$br.$br."==================================== [답 변] ====================================".$br.$br;
		$write["Title"] = "[답변] ".$write["Title"];
		$file_script = "add_file('');\n";
		$file_length = 0;
		$WriterName = $member["UserName"];
		$write["UserID"] = $member["UserID"];
		$workType = "I";
	}
} else {
	$write["RegDate"] = date("Y-m-d H:i:s",time());
}

if ($file_length < 0){
	$file_script .= "add_file('');\n";
	$file_length = 0;
}

$searchVal = "Category=".urlencode($Category)."&sfl=".$sfl."&stx=".$stx."&page=".$page."&bidx=".$bidx;

$Category = explode("|",$board_setting["Category"]);
$Category_select = "<select name='Category'>";
$Category_select .= "<option value=''>선택</option>";
for($l=0;$l<count($Category);$l++){
	$Categorys[$l] = $Category[$l];
	if($Category[$l]==$write['Category']) {
		$Category_select .= "<option value='".$Category[$l]."'  selected> ".trim($Categorys[$l])."</option>";
	}else{
		$Category_select .= "<option value='".$Category[$l]."'> ".trim($Categorys[$l])."</option>";
	}
}
$Category_select .= "</select>";

$contit = "내용";

if($BoardName == "medicalteam"){
	$img_size_info = "첫번째 이미지는 목록이미지이며 사이즈는 : 170 x 170, 두번째 이미지는 팝업창안의 이미지이며 사이즈는 241 x 256 입니다.";
} else if($BoardName == "news" || $BoardName == "press" || $BoardName == "volstory"){
	$img_size_info = "상위노출시 이미지사이즈는 : 290 x 230 입니다. 상위노출을 사용하지 않는경우엔 첫번째 파일을 비워두고 사용하시기 바랍니다.";
} else if($BoardName == "photo"){
	$img_size_info = "첫번째 이미지는 시술전사진, 두번째 이미지는 시술후 사진입니다. 너비는 270 높이는 자율입니다. ";
} else if($BoardName == "movie"){
	$img_size_info = "이미지사이즈는 250 x 260 입니다. ";
}

$use_notice = false;

switch($BoardName){
	case "webzine":
	case "broadcast":
	case "news":
	case "story":
	case "qna":
	case "faq":
	case "press":
	case "volstory":
		$use_notice = false;
		break;
}
?>
<div id="container">
	<div class="content_view">
		<div class="con_title"><?=$board_setting["BoardTitle"]?></div>
		<form name="write_form" method="post" enctype="MULTIPART/FORM-DATA" action="/board/admn/_proc/board/_board_proc.php">
		<input type="hidden" name="mob" value="<?=$mob?>">
		<? if($mob=="reply"){?>
		<input type="hidden" name="idx" value="">
		<input type="hidden" name="ppw" value="<?=$write["UserPw"]?>">
		<? }else{?>
		<input type="hidden" name="idx" value="<?=$write["BoardIdx"]?>">
		<? }?>
		<input type="hidden" name="Ref" value="<?=$_REQUEST["Ref"]?>">
		<input type="hidden" name="ReStep" value="<?=$_REQUEST["ReStep"]?>">
		<input type="hidden" name="ReLevel" value="<?=$_REQUEST["ReLevel"]?>">
		<input type="hidden" name="URI" value="/board/admn/board/board_view.php?<?=$searchVal?>&idx=">
		<input type="hidden" name="workType" value="<?=$workType?>">
		<input type="hidden" name="bidx" value="<?=$bidx?>">
		<input type="hidden" name="HtmlChk" value="<?=$is_html?"Y":"N"?>">
		<table class="write_table mt15">
			<colgroup>
				<col width="15%">
				<col width="85%">
			</colgroup>
			<? if(($write["UserID"] && ($write["UserID"] != $member["ID"])) || (empty($write["UserID"]) && !empty($write["BoardIdx"]))) { ?>
			<tr>
				<th>작성자 </th>
				<td>
					<input type="hidden" name="UserID" value="<?=$write["UserID"]?>">
					<input type="hidden" name="UserEmail" value="<?=$write["UserEmail"]?>">
					<input type="hidden" name="UserIP" value="<?=$write["UserIP"]?>">
					<input type="text" class="input wd120" name="UserName" value="<?=$write["UserName"]?>">
				</td>
			</tr>
			<? 
			}
			if($board_setting["Secret"]){
			?>
			<tr>
				<th>비밀글</th>
				<td><input type="checkbox" name='Secret' value='1' <?=$write["Secret"]?"checked":""?> /></td>
			</tr>
			<? } ?>
			<tr>
				<th>제목<?=$BoardName=="medicalteam"?"(의료진명)":""?> </th>
				<td>
					<input type="text" class="input wd320" name="Title" value="<?=$write["Title"]?>" exp title="제목" >
					<? if($use_notice){ ?>
					<input type="checkbox" name="Notice" value="1" <? if($write["Notice"]==1){echo "checked";}?>> : 공지
					<? } ?>
				</td>
			</tr>
			<? if($board_setting["Category"]){?>
			<tr>
				<th>분류 </th>
				<td><?=$Category_select?></td>
			</tr>
			<? } ?>
			<? if($BoardName == "faq" || $BoardName == "mainAfter" || $BoardName == "medicalteam" || $BoardName == "photo" || $BoardName == "movie"){ ?>
			<tr>
				<th>노출순서</th>
				<td><input type="text" class="input" style="width:50px;" num name="border" value="<?=$write["border"]?>" > <span style="color:#e00000;font-weight:bold;">※ 노출순서가 클수록 먼저 나타납니다</span></td>
			</tr>
			<? } ?>
			<? if($BoardName == "mainAfter"){ ?>
			<tr>
				<th>사용여부 </th>
				<td>
					<select name="bd1" class="input">
						<option value=''>선택</option>
						<option value="Y" <?=$write["bd1"]=="Y"?"selected":""?>>사용함</option>
						<option value="N" <?=$write["bd1"]=="N"?"selected":""?>>사용안함</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>링크주소 </th>
				<td><input type="text" class="input" name="bd2" value="<?=$write["bd2"]?>" style="width:100px;"></td>
			</tr>
			<? } ?>
			<? if($BoardName == "movie"){ ?>
			<tr>
				<th>영상주소 </th>
				<td><input type="text" class="input" name="bd1" value="<?=$write["bd1"]?>" style="width:90%;"></td>
			</tr>
			<? } ?>
			<? if($BoardName == "photo"){ ?>
			<tr>
				<th>나이 </th>
				<td><input type="text" class="input" name="bd1" value="<?=$write["bd1"]?>" style="width:100px;"></td>
			</tr>
			<tr>
				<th>성별 </th>
				<td><input type="text" class="input" name="bd2" value="<?=$write["bd2"]?>" style="width:100px;"></td>
			</tr>
			<tr>
				<th>치료날짜 </th>
				<td><input type="text" class="input" name="bd3" value="<?=$write["bd3"]?>" style="width:100px"></td>
			</tr>
			<? } ?>
			<? if($BoardName == "medicalteam"){ ?>
			<tr>
				<th>학과명 </th>
				<td><input type="text" class="input" name="bd1" value="<?=$write["bd1"]?>" style="width:90%;"></td>
			</tr>
			<? } ?>
			<tr>
				<th>작성일 </th>
				<td><input type="text" class="input wd140" name="RegDate" value="<?=$write["RegDate"]?>" ></td>
			</tr>
			<? if($BoardName != "photo"){ ?>
			<tr>
				<th>내용 </th>
				<td colspan="5">
					<textarea name="Content" id="Content" class='txtarea02'><?=$write['Content']?></textarea>
				</td>
			</tr>
			<? } ?>
			<? if(!empty($img_size_info)){ ?>
			<tr>
				<td colspan='2'><span style="color:#e00000;font-weight:bold;">※ <?=$img_size_info?></span></td>
			</tr>
			<? } ?>
			<tr>
				<th>첨부파일 <span onclick="add_file();" style="cursor:pointer;"><img src="/board/admn/images/btn/btn_file_add.gif"></span> <span onclick="del_file();" style="cursor:pointer;"><img src="/board/admn/images/btn/btn_file_minus.gif"></span></th>
				<td>
					<table id="variableFiles" cellpadding=0 cellspacing=0></table><?// print_r2($file); ?>
					<script type="text/javascript">
					var flen = 0;
					function add_file(delete_code)
					{
						var upload_count = <?=(int)$board_setting[FileCnt]?>;
						if (upload_count && flen >= upload_count)
						{
							alert("이 게시판은 "+upload_count+"개 까지만 파일 업로드가 가능합니다.");
							return;
						}

						var objTbl;
						var objRow;
						var objCell;
						if (document.getElementById)
							objTbl = document.getElementById("variableFiles");
						else
							objTbl = document.all["variableFiles"];

						objRow = objTbl.insertRow(objTbl.rows.length);
						objCell = objRow.insertCell(0);
						objCell.className = "bd0";

						objCell.innerHTML = "<input type='file' class='input' name='bf_file[]' title='파일 용량 <?=$upload_max_filesize?> 이하만 업로드 가능'>";
						if (delete_code)
							objCell.innerHTML += delete_code;
						else
						{
							<? if ($is_file_content) { ?>
							objCell.innerHTML += "<br><input type='text' class='input' size=50 name='bf_content[]' title='업로드 이미지 파일에 해당 되는 내용을 입력하세요.'>";
							<? } ?>
							;
						}

						flen++;
					}

					<?=$file_script; //수정시에 필요한 스크립트?>

					function del_file()
					{
						// file_length 이하로는 필드가 삭제되지 않아야 합니다.
						var file_length = <?=(int)$file_length?>;
						var objTbl = document.getElementById("variableFiles");
						if (objTbl.rows.length - 1 > file_length)
						{
							objTbl.deleteRow(objTbl.rows.length - 1);
							flen--;
						}
					}
					</script>
				</td>
			</tr>
		</table>
		</form>

		<div class="mt5 btn_group">
			<button type="button" class="btn_a_n" onclick="board_check();"><?=$workType=="I"?"쓰 기":"수 정"?></button>
			<button type="button" class="btn_a_b" onclick="location.href='/board/admn/board/board.php?<?=$searchVal?>';">목 록</button>
		</div>
		<div class="cboth"></div>
	</div>
	<div class="mt100"></div>
</div>
<div id="campaign_div" style="position:absolute;top:100px;left:50%;margin-left:-350px;width:700px;z-index:999999999999;display:none;background:#fff;">
	<img src="/board/admn/images/campaigntop.jpg" width="700"><Br>
	<p style="width:100%;margin-top:15px;font-weight:bold;color:red;">※ 1번과 3번은 이미지 사이즈 222 x 360, 2번은 이미지 사이즈 472 x 200 입니다.</p>
	<p style="width:100%;margin-top:5px;font-weight:bold;color:red;">※ 상단 고정시 이미지 사이즈를 정확히 맞춰주셔야 이미지가 정상적으로 출력됩니다.</p>
	<p style="width:100%;text-align:right;font-weight:bold;"><a href="javascript:fix_ck('close');">[확인]</a></p>
</div>
<script language="javascript">
<? if($is_html){ ?>
var oEditors = [];
nhn.husky.EZCreator.createInIFrame({
	oAppRef: oEditors,
	elPlaceHolder: "Content",
	sSkinURI: "/board/se2/SmartEditor2Skin.html",
	fCreator: "createSEditor2"
});
<? } ?>

function board_check(){
	var f = document.write_form;

	if(FormCheck(f) == true){
		<? if($is_html){ ?>
		oEditors.getById["Content"].exec("UPDATE_CONTENTS_FIELD", []);
		<? } ?>
		f.submit();
	} else {
		return;
	}
}

function nextFocus(sFormName,sNow,sNext){
	var sForm = 'document.'+ sFormName +'.'
	var oNow = eval(sForm + sNow);

	if (typeof oNow == 'object')
	{
		if ( oNow.value.length == oNow.maxLength)
		{
			var oNext = eval(sForm + sNext);

			if ((typeof oNext) == 'object')
				oNext.focus();
		}
	}
}

function cat_sel(val){
	jQuery.ajax({
		url: "ajax_cat.php",
		type: 'POST',
		data: "ca_id="+val+"&sel_id=<?=$write['bd2']?>",

		error: function(xhr,textStatus,errorThrown){
			alert('An error occurred! \n'+(errorThrown ? errorThrown : xhr.status));
		},
		success: function(data){
			$("#cat2").html(data);
		}
	});
}

function fix_ck(type){
	switch(type){
		case "open":
			if($("#top_fix").is(":checked") == true){
				$.blockUI({"message":""});
				$("#campaign_div").show();
				$("#loc_span").show();
				$("#top_loc").val("<?=$write['bd2']?>");
			} else {
				$("#top_loc").val('');
				$("#loc_span").hide();
			}
			break;
		case "close":
			$("#campaign_div").hide();
			$.unblockUI({"message":""});
			break;
	}
}

window.onload = function(){
	<? if($workType == "M"){ ?>
	fix_ck('open');
	<? } ?>
}
</script>
<?
include_once $dir."/admn/include/tail.php";
?>