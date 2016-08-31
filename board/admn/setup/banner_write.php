<?
include_once $_SERVER['DOCUMENT_ROOT']."/board/admn/include/head.php";
include $dir.$configDir."/admin_check.php";

$t100 = "top_mon";
$t105 = "navi_mon";
$left = "l1";

include_once $dir."/admn/include/admin_top.php";
include_once $dir."/admn/include/admin_left.php";
$mode = $site_prefix."banner";
$searchVal = "page=".$page;

$workType = "I";

$searchVal = "bloc=".urlencode($bloc)."&sfl=".$sfl."&stx=".$stx."&page=".$page;

$file_script = "";
$file_length = -1;

if($idx){
	$workType = "M";
	$sql = " select * from ".$mode." where idx = '".$idx."' ";
	$row = sql_fetch($sql);

	$row["files"] = get_file($mode,$idx);
	for ($i=0; $i<$row["files"]["count"]; $i++){
		$frow = sql_fetch(" select file_source from $fileTable where board_table = '$mode' and board_idx = '$idx' and file_no = '$i' ");
		if ($frow[file_source])
		{
			$file_script .= "add_file(\"<input type='checkbox' name='bf_file_del[$i]' value='1'><a href='{$row[files][$i][href]}'>{$row[files][$i][file_name]}</a> 파일 삭제";
			if ($is_file_content)
				//$file_script .= "<br><input type='text' class=ed size=50 name='bf_content[$i]' value='{$row[bf_content]}' title='업로드 이미지 파일에 해당 되는 내용을 입력하세요.'>";
				// 첨부파일설명에서 ' 또는 " 입력되면 오류나는 부분 수정
				$file_script .= "<br><input type='text' class=ed size=50 name='bf_content[$i]' title='업로드 이미지 파일에 해당 되는 내용을 입력하세요.'>";
			$file_script .= "\");\n";
		}
		else
			$file_script .= "add_file('');\n";
	}
	$file_length = $row["files"][count] - 1;
}

if ($file_length < 0){
	$file_script .= "add_file('');\n";
	$file_length = 0;
}
?>
<div id="container">
	<div class="content_view">
		<div class="con_title">배너관리</div>
		<form name="banner_form" method="post" action="/board/admn/_proc/setup/_banner_proc.php" enctype="MULTIPART/FORM-DATA">
		<input type="hidden" name="URI" value="/board/admn/setup/banner.php?page=<?=$page?>">
		<input type="hidden" name="workType" value="<?=$workType?>">
		<input type="hidden" name="idx" value="<?=$row["idx"]?>">
		<input type="hidden" name="page" value="<?=$page?>">
		<table class="write_table mt15">
			<colgroup>
				<col width="15%">
				<col width="85%">
			</colgroup>	
			<tr>
				<th>배너위치 </th>
				<td>
					<select name="bloc" id="bloc" onchange="bloc_ck(this.value);">
						<option value='M'>메인-비쥬얼</option>
						<option value='M2' <?=$row["bloc"]=="M2"?"selected":""?>>메인-하단협력기관</option>
						<option value='M3' <?=$row["bloc"]=="M3"?"selected":""?>>메인-동영상링크</option>
						<option value='M4' <?=$row["bloc"]=="M4"?"selected":""?>>모바일메인-비쥬얼</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>노출순서 </th>
				<td><input type="text" class="input wd100" name="border" value="<?=$row["border"]?>" exp num title="노출순서" ></td>
			</tr>
			<tr>
				<th>링크주소 </th>
				<td>
					<input type="text" class="input" name="blink" value="<?=$row["blink"]?>" style="width:80%" >
					<select name="btarget" align="absmiddle">
						<option value='_self'>현재창</option>
						<option value='_blank' <?=$row["btarget"]=="_blank"?"selected":""?>>새창</option>
					</select>
				</td>
			</tr>
			<tr class="M M4 bsize">
				<th>배너분류 </th>
				<td>
					<input type="text" class="input" name="bcat" title="배너분류" value="<?=$row["bcat"]?>" style="width:120px;" >
				</td>
			</tr>
			<tr class="M M4 bsize">
				<th>간단설명 </th>
				<td>
					<input type="text" class="input" name="bcon" value="<?=$row["bcon"]?>" style="width:80%" >
				</td>
			</tr>
			<tr>
				<th>이미지</th>
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
			<tr class="M bsize">
				<td colspan="2"><span style="color:#e00000;font-weight:bold;">※ 이미지사이즈는 (너비 3000 이하, 높이 598) 입니다.</span></td>
			</tr>
			<tr class="M1 M2 bsize">
				<td colspan="2"><span style="color:#e00000;font-weight:bold;">※ 이미지사이즈는 (너비 260, 높이 140) 입니다.</span></td>
			</tr>
			<tr class="M3 bsize">
				<td colspan="2"><span style="color:#e00000;font-weight:bold;">※ 이미지사이즈는 (너비 370, 높이 320) 입니다.</span></td>
			</tr>
			<tr class="M4 bsize">
				<td colspan="2"><span style="color:#e00000;font-weight:bold;">※ 이미지사이즈는 (너비 960, 높이 660) 입니다.</span></td>
			</tr>
			<tr>
				<th>사용여부</th>
				<td>
					<select name="bstatus">
						<option value='N'>사용안함</option>
						<option value='Y' <?=$row["bstatus"]=="Y"?"selected":""?>>사용함</option>
					</select>
				</td>
			</tr>
		</table>
		</form>

		<div class="mt5 btn_group">
			<button type="button" class="btn_a_n" onclick="board_check();"><?=$workType=="I"?"등 록":"수 정"?></button>&nbsp;
			<button type="button" class="btn_a_b" onclick="location.href='/board/admn/setup/banner.php?<?=$searchVal?>';">취 소</button>
		</div>
		<div class="cboth"></div>
	</div>
	<div class="mt100"></div>
</div>
<script language="javascript">
$(".bsize").hide();
function bloc_ck(val){
	$(".bsize").hide();
	$("."+val).show();
}
function board_check(){
	var f = document.banner_form;

	if(FormCheck(f) == true){
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

window.onload = function(){
	bloc_ck($("#bloc").val());
}
</script>
<?
include_once $dir."/admn/include/tail.php";
?>