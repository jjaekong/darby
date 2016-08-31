<?
if (!defined("_MKBOARD_")) exit; // 개별 페이지 접근 불가 

$BoardDateSQL = "select * from $TableConfigDB where Idx=".$date_idx;
$BoardDateRow = sql_fetch($BoardDateSQL);
$BoardName = $BoardDateRow["BoardName"];
$WriterName = $member["UserName"];
$is_html = $BoardDateRow["HtmlFlag"];

$UserPw = $member[Password];
$UserEmail = $member[Email];

if(empty($BoardIdx)) $BoardIdx = $_REQUEST["board_idx"];

$password1 = sql_password($_REQUEST[password1]);

$file_script = "";
$file_length = -1;

if($is_guest) $member["UserLevel"] = 1;

if($BoardDateRow["WriteAuthority"] > $member["UserLevel"] && !$is_admin) GetAlert("사용 권한이 없습니다.",$_SERVER['PHP_SELF']);

if($BoardIdx != ""){
	$BoardSQL = "select * from ".$mode." where BoardIdx=".$BoardIdx;
	$write =sql_fetch($BoardSQL);
	$Content = $write["Content"];
	$Title = $write["Title"];
	$UserPw = $write["UserPw"];

	if(!$member["UserID"] && !$is_admin && !$is_manager){
		if ($UserPw!=$password1){
			GetAlert("비밀번호가 맞지 않습니다.",$URI);
			exit;
		}
	} else {
		if($member["UserLevel"] < 4 && !$is_admin && !$mob){
			if($write["UserID"] != $member["UserID"]){
				GetAlert("접근권한이 없습니다.",$URI);
				exit;
			}
		}
	}

	if(!$is_admin && !$is_manager && $member["UserID"] != $write["UserID"]){
		if($write["Secret"] == 1 && !$password1) GetAlert("비밀번호를 입력해주시기 바랍니다.",$_SERVER['PHP_SELF']);
	}

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
			$file_script .= "add_file(\"<input type='checkbox' name='bf_file_del[$i]' value='1'><a href='{$file[$i][href]}'>{$file[$i][file_name]}</a> 파일 삭제";
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


$Categorys = explode("|",$BoardDateRow[Category]);
$Category_select = "<select name=Category>";
$Category_select .= "<option value=''>선택</option>";
for($l=0;$l<count($Categorys);$l++){
	if($Categorys[$l]==$write['Category']) {
		$Category_select .= "<option value='".$Categorys[$l]."'  selected> ".trim($Categorys[$l])."</option>";
	}else{
		$Category_select .= "<option value='".$Categorys[$l]."'> ".trim($Categorys[$l])."</option>";
	}
}
$Category_select .= "</select>";
?>
<style>
#variableFiles td {border:0px !important;}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="/board/se2/js/HuskyEZCreator.js" charset="utf-8"></script>
<div class="container">
	<form name="write_form" action="<?=$loc?>/board/module/incboard/board_ok.php" method="post" ENCTYPE="MULTIPART/FORM-DATA" onsubmit="return write_chk()">
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
	<input type="hidden" name="HtmlChk" value="<?=$is_html?"Y":"N"?>">
	<? if(!empty($BoardDateRow["Secret"])){ ?>
	<input type="hidden" name="Secret" value='1'>
	<? } ?>
	<input type="hidden" name="wr_key_enabled"  id="wr_key_enabled"   value="" />
	<? if($is_member){ ?>
	<input type="hidden" name="UserName" value="<?=$WriterName?>">
	<input type="hidden" name="UserPw" value="<?=$UserPw?>">
	<input type="hidden" name="UserEmail" value="<?=$UserEmail?>">
	<? } ?>
		<table class="table">
			<colgroup>
				<col style="width: 220px">
				<col>
			</colgroup>
			<tbody>
				<? if($is_guest){ ?>
				<tr class="writer">
					<th><label for="writer">작성자</label></th>
					<td><input id="writer" class="form-control" type="text" name="UserName" exp title="이름" value="<?=$WriterName?>"></td>
				</tr>
				<tr class="password">
					<th><label for="password">비밀번호</label></th>
					<td><input id="password" class="form-control" type="password" name="UserPw" exp title="비밀번호"></td>
				</tr>
				<tr class="password">
					<th><label for="email">이메일</label></th>
					<td><input id="email" class="form-control" type="text" name="UserEmail" value="<?=$UserEmail?>"></td>
				</tr>
				<? } ?>
				<? if($BoardDateRow["Category"]){ ?>
				<tr class="title">
					<th><label for="title">분류</label></th>
					<td><?=$Category_select?></td>
				</tr>
				<? } ?>
				<tr class="title">
					<th><label for="title">제목</label></th>
					<td><input id="title" class="form-control" type="text" name="Title" exp title="제목" value="<?=$Title?>"></td>
				</tr>
				<tr class="details">
					<td colspan="2">
						<textarea class="form-control" cols="99" rows="10" name="Content" id="Content"><?=$write['Content']?></textarea>
					</td>
				</tr>
				<tr class="attach">
					<th>첨부파일</th>
					<td>
						<table id="variableFiles" cellpadding=0 cellspacing=0 style="border:0px;"></table><?// print_r2($file); ?>
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

							objCell.innerHTML = "<input type='file' class='form-control' name='bf_file[]' title='파일 용량 <?=$upload_max_filesize?> 이하만 업로드 가능'>";
							if (delete_code)
								objCell.innerHTML += delete_code;
							else
							{
								<? if ($is_file_content) { ?>
								objCell.innerHTML += "<br><input type='text' class='ed' size=50 name='bf_content[]' title='업로드 이미지 파일에 해당 되는 내용을 입력하세요.'>";
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
					<th>자동등록방지</th>
					<td><?php echo $captcha_html; ?></td>
				</tr>
				<? } ?>
			</tbody>
		</table>
		<div class="btn-area">
			<p>
				<button type="submit" class="btn btn-submit">작성완료</button>
				<a href="#" class="btn btn-cancel">작성취소</a>
			</p>
		</div>
	</form>
</div>
<script type="text/javascript">
<? if($is_html){ ?>
var oEditors = [];
nhn.husky.EZCreator.createInIFrame({
	oAppRef: oEditors,
	elPlaceHolder: "Content",
	sSkinURI: "/board/se2/SmartEditor2Skin.html",
	fCreator: "createSEditor2"
});
<? } ?>

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

function write_chk(){
	<? if($is_guest){ ?>
	if($.trim($("input[name='UserName']").val()) == ""){
		alert("이름을 입력해 주시기 바랍니다.");
		return false;
	}

	if($.trim($("input[name='UserPw']").val()) == ""){
		alert("비밀번호를 입력해 주시기 바랍니다.");
		return false;
	}

	if(!chk_captcha()){
		return;
	}
	<? } ?>

	if($.trim($("input[name='Title']").val()) == ""){
		alert("제목을 입력해 주시기 바랍니다.");
		return false;
	}

	<? if($is_html){ ?>
	oEditors.getById["Content"].exec("UPDATE_CONTENTS_FIELD", []);
	<? } ?>

		return true;

}
</script>