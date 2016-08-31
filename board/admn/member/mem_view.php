<?
include_once $_SERVER['DOCUMENT_ROOT']."/board/admn/include/head.php";
include $dir.$configDir."/admin_check.php";

$t400 = "top_mon";
$t401 = "navi_mon";
$left = "l4";

include_once $dir."/admn/include/admin_top.php";
include_once $dir."/admn/include/admin_left.php";

$mode = $site_prefix."member";
$workType = "I";

if($idx != ""){
	$workType = "M";
	$sql = "select * from ".$mode." where idx=".$idx;
	$write = sql_fetch($sql);
	$Email = explode("@",$write["Email"]);
	$mobile = explode("-",$write["Mobile"]);
	$zipcode = explode("-",$write["ZipCode"]);
}

$searchVal = "mtype=".$mtype."&sfl=".$sfl."&stx=".$stx."&page=".$page;

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on') {   //https 통신일때 daum 주소 js
	echo '<script src="https://spi.maps.daum.net/imap/map_js_init/postcode.v2.js"></script>';
} else {  //http 통신일때 daum 주소 js
	echo '<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>';
}
?>
<div id="container">
	<div class="content_view">
		<div class="con_title">회원관리</div>
		<form name="MemberForm" method="post" action="/board/admn/_proc/member/_member_proc.php">
		<input type="hidden" name="workType" value="<?=$workType?>">
		<input type="hidden" name="URI" value="/board/admn/member/mem_lst.php?<?=$searchVal?>">
		<input type="hidden" name="old_email" id="old_email" value="<?=$write["Email"]?>">
		<? if($workType == "I"){ ?>
		<input type='' name='idchk' value='No'>
		<input type='' name='hpchk' value='No'>
		<input type="" name="mailchk" value="No">
		<input type="" name="mem_photo" value="">
		<? } ?>
		<table class="write_table mt15">
			<colgroup>
				<col width="15%">
				<col width="85%">
			</colgroup>
			<tbody>
			<tr>
				<th>아이디 </th>
				<td>
					<? if($workType == "I"){ ?>
					<input type="text" class="input wd140" name="UserID" value="<?=$write["UserID"]?>" > <button type="button" class="btn_a_b" onclick="idCheck();">중복검사</button>
					<span id="span_idck"></span>
					<?
					} else {
						echo $write["UserID"];
						echo "<input type='hidden' name='UserID' value='".$write["UserID"]."'>";
						echo "<input type='hidden' name='idchk' value='Yes'>";
					}
					?>
				</td>
			</tr>
			<tr>
				<th>비밀번호 </th>
				<td><input type="password" class="input wd100" name="Password" ></td>
			</tr>
			<tr>
				<th>이름</th>
				<td>
					<? if($workType == "I"){ ?>
					<input type="text" class="input wd140" name="UserName" value="<?=$write["UserName"]?>" >
					<?
					} else {
						echo $write["UserName"];
						echo "<input type='hidden' name='UserName' value='".$write["UserName"]."'>";
					}
					?>
				</td>
			</tr>
			<tr>
				<th>성별 </th>
				<td><input type="radio" name="Sex" id="male" value="M" <?=$write["Sex"]=="M"?"checked":""?>><label for="male" class="pl5 pr20">남자</label><input type="radio" name="Sex" id="female" value="F" <?=$write["Sex"]=="F"?"checked":""?>><label for="female" class="pl5 ">여자</label></td>
			</tr>
			<tr>
				<th>생년월일 </th>
				<td><input name="BirthDay" type="text" class="input datepick" id="BirthDay" readonly style="width:80px;" title="생년월일" value="<?=$write["BirthDay"]?>"></td>
			</tr>
			<tr>
				<th>이메일 </th>
				<td>
					<input type="text" class="input wd100" name="Email1" value="<?=$Email[0]?>" > @ <input type="text" class="input wd100" name="Email2" value="<?=$Email[1]?>" > 
					<button type="button" class="btn_a_b" onclick="mail_chk();">중복검사</button>
					<? if($workType == "I"){ ?>
					<span id="span_mailck"></span>
					<? } else { ?>
					<span id="span_mailck"><input type='hidden' name='mailchk' value='Yes'></span>
					<? } ?>
				</td>
			</tr>
			<tr>
				<th>주소 </th>
				<td>
					<input type="text" class="input" name="ZipCode" readonly style="width:50px;" value="<?=$write["ZipCode"]?>" > <button type="button" class="btn_a_b" onclick="win_zip('MemberForm', 'ZipCode', 'Address1', 'Address2', 'Address3', 'AddressType');">우편번호찾기</button><br>
					<input type="text" class="input" name="Address1" id="Address1" readonly style="width:350px;" value="<?=$write["Address1"]?>"><br>
					<input type="text" class="input" name="Address2" id="Address2" style="width:350px;" value="<?=$write["Address2"]?>">
					<input name="Address3" type="text" class="input" id="Address3" readonly style="width:350px;" value="<?=$write["Address3"]?>">
					<input type="hidden" name="AddressType" value="<?=$write["AddressType"]?>">
				</td>
			</tr>
			<tr>
				<th>전화번호 </th>
				<td><input type="text" class="input" name="Phone" style="width:150px;" value="<?=$write["Phone"]?>" ></td>
			</tr>
			<tr>
				<th>핸드폰번호 </th>
				<td><input type="text" class="input" name="Mobile" id="mobile" style="width:150px;" value="<?=$write["Mobile"]?>" ></td>
			</tr>
			</tbody>
		</table>
		</form>

		<div class="mt5 btn_group">
			<button type="button" class="btn_a_n" onclick="board_check();"><?=$workType=="I"?"등 록":"수 정"?></button>&nbsp;
			<button type="button" class="btn_a_b" onclick="location.href='/board/admn/member/mem_lst.php?<?=$searchVal?>';">취 소</button>
		</div>
		<div class="cboth"></div>
	</div>
	<div class="mt100"></div>
</div>

<iframe name="nullframe" width="400" height="400" style="display:none;"></iframe>

<script language="javascript">
function mail_chk(){
	var f=  document.MemberForm;
	var val1 = f.Email1.value;
	var val2 = f.Email2.value;
	var val = val1 + "@" + val2;

	if(strTrim(val1) == "" || strTrim(val2) == "") {
		alert("이메일 주소를 입력해주시기 바랍니다.");
		f.Email1.focus();
		return;
	}

	jQuery.ajax({
		url: "/board/config/ajax/ajax_mailck.php",
		type: 'POST',
		data: "val=" + val,

		error: function(){
			alert('error');
		},
		success: function(data){
			var msg = "";
			var dupe_ck = false;

			switch(data){
				case "100":
					msg = "금지단어가 포함되어있습니다.";
					dupe_ck = false;
					break;
				case "110":
					msg = "이메일주소 형식에 맞지않습니다.";
					dupe_ck = false;
					break;
				case "120":
					msg = "이미 사용중인 이메일주소 입니다.";
					dupe_ck = false;
					break;
				case "000":
					msg = "사용 가능한 이메일주소 입니다.";
					dupe_ck = true;
					break;
			}

			alert(msg);
			if(dupe_ck) $("input[name='mailchk']").val("Yes");
		}
	});

}

function board_check(){
	var f = document.MemberForm;

	if(f.idchk.value == "No"){
		alert("아이디 중복검사를 해주시기 바랍니다.");
		return;
	}

	if(f.mailchk.value == "No"){
		alert("이메일 중복검사를 해주시기 바랍니다.");
		return;
	}

	if(FormCheck(f) == true){
		f.submit();
	}
}

function idCheck() {
	var f = document.MemberForm;
	var val = document.MemberForm.UserID.value;

	if(strTrim(val) == ""){
		alert('아이디를 입력해주시기 바랍니다.');
		f.UserID.focus();
		return;
	}

	jQuery.ajax({
		url: "/board/config/ajax/ajax_idck.php",
		type: 'POST',
		data: "val=" + val,

		error: function(){
			alert('error');
		},
		success: function(data){
			var msg = "";
			var dupe_ck = false;

			switch(data){
				case "100":
					msg = "사용할 수 없는 아이디 입니다.";
					dupe_ck = false;
					break;
				case "110":
					msg = "이미 사용중인 아이디 입니다.";
					dupe_ck = false;
					break;
				case "200":
					msg = "아이디의 첫글자는 영문이어야 합니다.";
					dupe_ck = false;
					break;
				case "210":
					msg = "아이디는 영문, 숫자, _ 만 사용할 수 있습니다.";
					dupe_ck = false;
					break;
				case "220":
					msg = "공백없이 3~16자로 영문 소문자, 숫자, _, 만 가능합니다.";
					dupe_ck = false;
					break;
				case "000":
					msg = "사용 가능한 아이디 입니다.";
					dupe_ck = true;
					break;
			}

			alert(msg);
			if(dupe_ck){
				$("input[name='idchk']").val("Yes");
				$("input[name='uid']").val(val);
				$("input[name='UserID']").attr("readonly",true).css({"background-color":"#dedede"});
			}
		}
	});
}


function hp_chk(){
	var hp1 = $("#phone1").val();
	var hp2 = $("#phone2").val();
	var hp3 = $("#phone3").val();

	if(!hp1 || !hp2 || !hp3){
		alert("휴대전화 번호를 입력해주시기 바랍니다.");
		$("#phone1").focus();
		return;
	}

	jQuery.ajax({
		url: "/board/config/ajax/ajax_hpck.php",
		type: "post",
		data: "Mobile="+hp1+"-"+hp2+"-"+hp3,
		
		error: function(){
			alert('error');
		},
		success: function(data){
			var msg = "";
			var dupe_ck = false;

			switch(data){
				case "100":
					msg = "숫자만 입력하시기 바랍니다.";
					dupe_ck = false;
					break;
				case "200":
					msg = "이미 등록된 휴대전화 입니다.";
					dupe_ck = false;
					break;
				case "000":
					msg = "사용 가능한 휴대전화번호 입니다.";
					dupe_ck = true;
					break;
			}

			alert(msg);
			if(dupe_ck) $("input[name='hpchk']").val("Yes");
		}
	});
}


var win_zip = function(frm_name, frm_zip, frm_addr1, frm_addr2, frm_addr3, frm_jibeon) {
	new daum.Postcode({
		oncomplete: function(data) {
			// 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

			// 도로명 주소의 노출 규칙에 따라 주소를 조합한다.
			// 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
			var fullRoadAddr = data.roadAddress; // 도로명 주소 변수
			var extraRoadAddr = ''; // 도로명 조합형 주소 변수

			// 법정동명이 있을 경우 추가한다. (법정리는 제외)
			// 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
			if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
				extraRoadAddr += data.bname;
			}
			// 건물명이 있고, 공동주택일 경우 추가한다.
			if(data.buildingName !== '' && data.apartment === 'Y'){
			   extraRoadAddr += (extraRoadAddr !== '' ? ', ' + data.buildingName : data.buildingName);
			}
			// 도로명, 지번 조합형 주소가 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
			if(extraRoadAddr !== ''){
				extraRoadAddr = ' (' + extraRoadAddr + ')';
			}
			// 도로명, 지번 주소의 유무에 따라 해당 조합형 주소를 추가한다.
			if(fullRoadAddr !== ''){
				fullRoadAddr += extraRoadAddr;
			}

			var of = document[frm_name];

			of[frm_zip].value = data.zonecode;
			of[frm_addr1].value = fullRoadAddr;
			of[frm_addr3].value = extraRoadAddr;
			if(of[frm_jibeon] !== undefined){
				of[frm_jibeon].value = data.userSelectedType;
			}

			of[frm_addr2].focus();

			/* 사용자가 '선택 안함'을 클릭한 경우, 예상 주소라는 표시를 해준다.
			if(data.autoRoadAddress) {
				//예상되는 도로명 주소에 조합형 주소를 추가한다.
				var expRoadAddr = data.autoRoadAddress + extraRoadAddr;
				document.getElementById('guide').innerHTML = '(예상 도로명 주소 : ' + expRoadAddr + ')';

			} else if(data.autoJibunAddress) {
				var expJibunAddr = data.autoJibunAddress;
				document.getElementById('guide').innerHTML = '(예상 지번 주소 : ' + expJibunAddr + ')';

			} else {
				document.getElementById('guide').innerHTML = '';
			}
			*/
		}
	}).open();
}
</script>
<?
include_once $dir."/admn/include/tail.php";
?>