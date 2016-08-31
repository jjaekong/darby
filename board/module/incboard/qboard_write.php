<?
if (!defined("_MKBOARD_")) exit; // 개별 페이지 접근 불가 

$BoardDateSQL = "select * from $TableConfigDB where Idx=".$date_idx;
$BoardDateRow = sql_fetch($BoardDateSQL);
$BoardName = $BoardDateRow["BoardName"];
$WriterName = $member["Name"];
$is_html = $BoardDateRow["HtmlFlag"];

$UserPw = $member[Password];
$UserEmail = $member[UserEmail];

if(empty($BoardIdx)) $BoardIdx = $_REQUEST["board_idx"];

$password1 = sql_password($_REQUEST[password1]);

$file_script = "";
$file_length = -1;

if($BoardIdx != ""){
	$BoardSQL = "select * from ".$mode." where BoardIdx=".$BoardIdx;
	$write =sql_fetch($BoardSQL);
	$Content = $write["Content"];
	$Title = $write["Title"];
	$UserPw = $write["UserPw"];

	if(!$member[ID] && !$is_admin && !$is_manager){
		if ($UserPw!=$password1){
			GetAlert("비밀번호가 맞지 않습니다.",$URI);
			exit;
		}
	} else {
		if($member[Level] < 4 && !$is_admin && !$mob){
			if($write[UserID] != $member[ID]){
				GetAlert("접근권한이 없습니다.",$URI);
				exit;
			}
		}
	}
	if($write["Secret"] == 1 && !$password1) GetAlert("비밀번호를 입력해주시기 바랍니다.",$_SERVER['PHP_SELF']);

	if($BoardName == "qna"){
		$tel = explode("-",$write["bd1"]);
	}

	$WriterName = $write["UserName"];
	$UserEmail = $write["UserEmail"];

	$file = get_file($mode, $BoardIdx);

	for ($i=0; $i<$file[count]; $i++)
	{
		$row = sql_fetch(" select file_source from $fileTable where board_table = '$mode' and board_idx = '$BoardIdx' and file_no = '$i' ");
		if ($row[file_source])
		{
			$file_script .= "add_file(\"<input type='checkbox' name='bf_file_del[$i]' value='1'>&nbsp;<a href='{$file[$i][href]}' class='bbs'>{$file[$i][file_name]}</a> 파일 삭제";
			if ($is_file_content)
				//$file_script .= "<br><input type='text' class=ed size=50 name='bf_content[$i]' value='{$row[bf_content]}' title='업로드 이미지 파일에 해당 되는 내용을 입력하세요.'>";
				// 첨부파일설명에서 ' 또는 " 입력되면 오류나는 부분 수정
				$file_script .= "<br><input type='text' class=ed size=50 name='bf_content[$i]' title='업로드 이미지 파일에 해당 되는 내용을 입력하세요.'>";
			$file_script .= "\");\n";
		}
		else
			$file_script .= "add_file('');\n";
	}
	$file_length = $file[count] - 1;

	if(!empty($mob)){
		if(!$is_html) $br = "\n";
		else $br = "<br>";
		$write["Content"] = "================================ [원 문] ================================".$br.$br.$Content.$br.$br.$br.$br."================================ [답 변] ================================".$br.$br;
		$Title = "[답변] ".$Title;
		$file_script = "add_file('');\n";
		$file_length = 0;
		$WriterName = $member["NAME"];
		$write["UserID"] = $member["ID"];
	}

}

if ($file_length < 0)
{
    $file_script .= "add_file('');\n";
    $file_length = 0;
}


$Category = explode("|",$BoardDateRow[Category]);
$Category_select = "<select name=Category>";
$Category_select .= "<option value=''>선택</option>";
for($l=0;$l<count($Category);$l++){
	if($Category[$l]==$write['Category']) {
		$Category_select .= "<option value='".$Category[$l]."'  selected> ".trim($Category[$l])."</option>";
	}else{
		$Category_select .= "<option value='".$Category[$l]."'> ".trim($Category[$l])."</option>";
	}
}
$Category_select .= "</select>";
?>
<form name="write_form" action="<?=$loc?>/board/module/incboard/board_ok.php" method="post" ENCTYPE="MULTIPART/FORM-DATA">
<input type="hidden" name="date_idx" value="<?=$date_idx?>">
<input type="hidden" name="mode" value="<?=$mode?>">
<input type="hidden" name="BoardType" value="<?=$BoardType?>">
<? if(!empty($mob)){?>
<input type="hidden" name="BoardIdx" value="">
<input type="hidden" name="ppw" value="<?=$write["UserPw"]?>">
<? }else{?>
<input type="hidden" name="BoardIdx" value="<?=$write["BoardIdx"]?>">
<? }?>
<input type="hidden" name="Ref" value="<?=$_REQUEST["Ref"]?>">
<input type="hidden" name="ReStep" value="<?=$_REQUEST["ReStep"]?>">
<input type="hidden" name="ReLevel" value="<?=$_REQUEST["ReLevel"]?>">
<input type="hidden" name="Category" value="<?=$_REQUEST[Category]?>">
<input type="hidden" name="UserID" value="<?=$write[UserID]?>">
<input type="hidden" name="URI" value="<?=$_SERVER["PHP_SELF"]?>">
<input type="hidden" name="FileCnt" value="<?=$BoardDateRow[FileCnt]?>">
<input type="hidden" name="HtmlChk" value="N">
<input type="hidden" name="bd10" value="N">
<? if(!empty($BoardDateRow["Secret"])){ ?>
<input type="hidden" name="Secret" value='1'>
<? } ?>
<input type="hidden" name="wr_key_enabled"  id="wr_key_enabled"   value="" />
<div class="pt30">
	<table border="0" cellspacing="0" class="tb02">
		<? if($is_guest){ ?>
		<tr>
			<th>이름</th>
			<td><input type="text" class="input01" style="width:150px;" name="UserName" exp title="이름" value="<?=$WriterName?>"/></td>
		</tr>
		<tr>
			<th>비밀번호</th>
			<td><input type="password" class="input01" style="width:150px;" name="UserPw" exp title="비밀번호"/></td>
		</tr>
		<tr>
			<th>이메일</th>
			<td><input type="text" class="input01" style="width:300px;" name="UserEmail" exp eml value="<?=$UserEmail?>"/></td>
		</tr>
		<? } else { ?>
		<input type="hidden" name="UserName" value="<?=$WriterName?>">
		<input type="hidden" name="UserPw" value="<?=$UserPw?>">
		<input type="hidden" name="UserEmail" value="<?=$UserEmail?>">
		<? } ?>
		<tr>
			<th>제목</th>
			<td><input type="text" class="input01" style="width:870px;" name="Title" exp title="제목" value="<?=$Title?>"/></td>
		</tr>
		<tr>
			<th>내용</th>
			<td><textarea class="textarea01" name='Content'><?=$write['Content']?></textarea></td>
		</tr>
		<tr>
			<th>첨부파일</th>
			<td>
				<table id="variableFiles" cellpadding=0 cellspacing=0></table><?// print_r2($file); ?>
				<script type="text/javascript">
				var flen = 0;
				function add_file(delete_code)
				{
					var upload_count = <?=(int)$BoardDateRow[FileCnt]?>;
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
					objCell.style.border = "none";

					objCell.innerHTML = "<input type='file' class='input01' style='width:870px;' name='bf_file[]' title='파일 용량 <?=$upload_max_filesize?> 이하만 업로드 가능'>";
					if (delete_code)
						objCell.innerHTML += delete_code;
					else
					{
						<? if ($is_file_content) { ?>
						objCell.innerHTML += "<br><input type='text' class='input01' style='width:870px;' name='bf_content[]' title='업로드 이미지 파일에 해당 되는 내용을 입력하세요.'>";
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
		<? if($is_guest){ ?>
		<tr>
			<th><img id="scaptcha_image" border='0' style="cursor:pointer;" src="" alt="자동등록방지 코드" /></th>
			<td><input type="text" class="input01" style="width:150px;" maxlength="5" name="wr_key" id="reg_wr_key"  onkeyup="reg_wr_key_check()"/><span id='msg_wr_key'>자동등록코드</span></td>
		</tr>
		<? } ?>
	</table>

	<p class="right pt20 pr10"><a href="javascript:write_chk();"><img src="../image/story_img/write_btn.gif" alt="글쓰기"></a></p>

</div>
</form>
<?
if($is_guest){
?>
<script type="text/javascript" src="<?="/board/config/securimage/jquery.scaptcha.js"?>"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
	$('#wr_key_enabled').val("");
});

//자동등록코드 방지검사
function reg_wr_key_check() {
	if ($('#wr_key_enabled').val() !='000') {
		if($('#reg_wr_key').val().length == 5){
			jQuery.ajax({
				url: "/board/config/securimage/ajax_wr_key_check.php",
				data: "reg_wr_key="+encodeURIComponent($('#reg_wr_key').val()),
				async: false,
				error: function(xhr,textStatus,errorThrown){
					alert('An error occurred! \n'+(errorThrown ? errorThrown : xhr.status));
				},
				success: function(msg){
					return_reg_wr_key_check(msg);
				}
			});
		} else {
			return_reg_wr_key_check('120');
		}
	} else {
		return;
	}
}

function return_reg_wr_key_check(req) {
	var msg = $('#msg_wr_key');
	switch(req) {
		case '110' : msg.text('숫자만 입력하세요.').css( "color", "red" ); break;
		case '120' : msg.text('5자리 숫자를 입력하세요.').css( "color", "red" ); break;
		case '130' : msg.text('자동가입방지 코드를 정확히 입력하세요.').css( "color", "red" ); break;
		case '000' : { msg.text('자동가입방지 숫자를 정확히 입력하셨습니다.').css( "color", "blue" ); $('#reg_wr_key').attr("readonly",true); $('#scaptcha_image').attr("disabled",true); break; }
	}
	$('#wr_key_enabled').val(req);
}
</script>
<?
}
?>
<script type="text/javascript">
function changeEmail(fName){		
	if (fName.Email3.value != "==직접입력==") {
		fName.Email2.value = fName.Email3.value;
	//	fName.Email2.style.display = "none";
	} else {
	//	fName.Email2.style.display = "inline";
		fName.Email2.value = "";
		fName.Email2.focus();
	}
}
function tip_view(){
	var tops = $("body,html").scrollTop()+100;
	var tg = $("#tip");
	tg.animate({ opacity : "toggle" } , "slow");
	tg.css("top", tops);
}
function write_chk(){
	var form = document.write_form;
	if(FormCheck(form) == true){
		<? if($is_guest){ ?>
		if($('#wr_key_enabled').val() != "000"){
			alert("자동등록방지 숫자를 정확히 입력하세요.");
		} else {
			form.submit();
		}
		<? } else { ?>
			form.submit();
		<? } ?>
	} else {
		return;
	}
}
</script>