<?
if($is_member){
	$method="modify";
}else{
	GetAlert('로그인후 이용하시기 바랍니다.',$loc."/member/login.php");
	exit;
}

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on') {   //https 통신일때 daum 주소 js
	echo '<script src="https://spi.maps.daum.net/imap/map_js_init/postcode.v2.js"></script>';
} else {  //http 통신일때 daum 주소 js
	echo '<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>';
}
//print_r2($ZipCode);
?>

<div class="member-content">
	<section class="join-section"> 
		<div class="section-header">
			<h3>회원정보입력 <small>아래의 정보를 빠짐없이 입력해주세요.</small></h3>
		</div>
		<div class="join-form">
			<form name="MemberForm" action="<?=$loc?>/board/module/incmember/member_ok.php" method="post" onsubmit="return EFormOK();">
			<input type="hidden" name="method" value="<?=$method?>">
			<input type="hidden" name="UserID" value="<?=$member["UserID"]?>">
			<input type="hidden" name="namechk" value="No">
			<input type="hidden" name="UserLevel" value='<?=$member["UserLevel"]?>'>
			<input type="hidden" name="URI" value="<?=$_SERVER['PHP_SELF']?>">
			<input type="hidden" name="mailchk" id="mailchk" value="Yes">
			<input type="hidden" name="oEmail" id="old_email" value="<?=$member["Email"]?>">
			<input type="hidden" name="oMobile" id="old_mobile" value="<?=$member["Mobile"]?>">
			<input type="hidden" name="UserName" value="<?=$member["UserName"]?>">
			<input type="hidden" name="NickName" value="<?=$member["NickName"]?>">
				<table class="table">
					<colgroup>
						<col style="width: 220px;">
						<col>
					</colgroup>
					<tbody>
						<tr>
							<th>아이디</th>
							<td><?=$member["UserID"]?></td>
						</tr>
						<tr>
							<th>이름</th>
							<td><?=$member["UserName"]?></td>
						</tr>
						<tr>
							<th><label for="edit-pw">비밀번호</label></th>
							<td><input id="join-pw" class="form-control" type="password" name="Password1" exp title="비밀번호"></td>
						</tr>
						<tr>
							<th><label for="edit-repw">새로운비밀번호</label></th>
							<td><input id="edit-repw" class="form-control" type="password" name="NPassword1" title="새로운비밀번호"></td>
						</tr>
						<tr>
							<th><label for="edit-repw2">새로운비밀번호 확인</label></th>
							<td><input id="edit-repw2" class="form-control" type="password" name="NPassword2" title="비밀번호 확인"></td>
						</tr>
						<tr>
							<th><label for="edit-email">이메일</label></th>
							<td><input id="edit-email" class="form-control" type="email" name="Email" exp title="이메일" onchange="javascript:$('#mailchk').val('No');" value="<?=$member["Email"]?>" /> <button type="button" class="btn" onclick="mail_chk2();">중복확인</button></td>
						</tr>
						<tr class="birth">
							<th><label for="edit-birth">생년월일</label></th>
							<td>
								<input id="edit-birth" class="form-control" type="text" name="BirthDay" readonly exp title="생년월일" value="<?=$member["BirthDay"]?>" />
							</td>
						</tr>
						<tr class="gender">
							<th>성별</th>
							<td>
								<label>
									<input type="radio" name="Sex" value="M" <?=$member["Sex"]=="M"?"checked":""?>> 남자
								</label>
								<label>
									<input type="radio" name="Sex" value="F" <?=$member["Sex"]=="F"?"checked":""?>> 여자
								</label>
							</td>
						</tr>
						<tr class="addr">
							<th><label for="join-addr-zipcode">주소</label></th>
							<td>
								<div class="zipcode">
									<input id="join-addr-zipcode" class="form-control" type="text" name="ZipCode" exp title="우편번호" readonly value="<?=$member["ZipCode"]?>"/>
									<button type="button" class="btn" onclick="win_zip('MemberForm', 'ZipCode', 'Address1', 'Address2', 'Address3', 'AddressType');">우편번호 검색</button>
								</div>
								<div class="default">
									<label for="join-addr-default" class="sr-only">기본주소</label>
									<input id="join-addr-default" class="form-control" type="text" name="Address1" exp title="주소" value="<?=$member["Address1"]?>" />
								</div>
								<div class="default">
									<label for="join-addr-details" class="sr-only">상세주소</label>
									<input id="join-addr-details" class="form-control" type="text" name="Address2" exp title="주소" value="<?=$member["Address2"]?>" />
								</div>
								<div class="details">
									<label for="join-addr-details" class="sr-only">도로명주소</label>
									<input id="join-addr-details" class="form-control" type="text" name="Address3" readonly value="<?=$member["Address3"]?>" /><input type="hidden" name="AddressType" value="<?=$member["AddressType"]?>" />
								</div>
							</td>
						</tr>
						<tr class="phone">
							<th><label for="join-phone">전화번호</label></th>
							<td><input id="join-phone" class="form-control" type="text" name="Phone" id="phone" value="<?=$member["Phone"]?>" /></td>
						</tr>
						<tr class="mobile">
							<th><label for="join-mobile">휴대전화</label></th>
							<td><input id="join-mobile" class="form-control" type="text" name="Mobile" id="mobile" value="<?=$member["Mobile"]?>" /></td>
						</tr>
					</tbody>
				</table>
				<div class="btn-area">
					<p>
						<button type="submit" class="btn btn-join">수정완료</button>
						<a href="#" class="btn btn-back">이전으로</a>
					</p>
				</div>
			</form>
		</div>
	</section>
</div>

<!-- form_Start -->
<iframe name="hiddenframe" width="100%" height="500" frameborder="0" id="hiddenframe"></iframe>

<script>

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