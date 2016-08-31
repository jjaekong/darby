<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php');

if($is_member){
	$method="modify";
	$mobile = explode("-",$member["Mobile"]);
	$phone = explode("-",$member["Phone"]);
}else{
	GetAlert('로그인후 이용하시기 바랍니다.',"/mobile/member/login.php");
	exit;
}

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on') {   //https 통신일때 daum 주소 js
	echo '<script src="https://spi.maps.daum.net/imap/map_js_init/postcode.v2.js"></script>';
} else {  //http 통신일때 daum 주소 js
	echo '<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>';
}
?>
<link href="/mobile/css/member.css" rel="stylesheet" />
<link href="/css/jquery-ui.min.css" rel="stylesheet">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="member edit-form">
		<div class="page-title">
			<h2>개인정보수정<br>
				<small>Modify</small>
			</h2>
		</div>
		<div class="container">
			<section class="edit">
				<div class="section-header">
					<h3>회원정보 입력</h3>
					<p>아래의 정보를 빠짐없이 입력해주세요.</p>
				</div>
				<div class="section-content">
					<form class="join-write" name="MemberForm" action="<?=$loc?>/board/module/incmember/member_ok.php" method="post">
					<input type="hidden" name="method" value="<?=$method?>">
					<input type="hidden" name="UserID" value="<?=$member["UserID"]?>">
					<input type="hidden" name="UserName" value="<?=$member["UserName"]?>">
					<input type="hidden" name="NickName" value="<?=$member["NickName"]?>">
					<input type="hidden" name="namechk" value="No">
					<input type="hidden" name="UserLevel" value='<?=$member["UserLevel"]?>'>
					<input type="hidden" name="URI" value="<?=$_SERVER['PHP_SELF']?>">
					<input type='hidden' name='hpchk' id="hpchk" value='Yes'>
					<input type="hidden" name="mailchk" id="mailchk" value="Yes">
					<input type="hidden" name="oEmail" id="old_email" value="<?=$member["Email"]?>">
					<input type="hidden" name="oMobile" id="old_mobile" value="<?=$member["Mobile"]?>">
						<table>
							<colgroup>
								<col style="min-width: 80px" />
								<col style="min-width: 220px" />
							</colgroup>
							<tbody>
								<tr>
									<th><label for="user-id">아이디</label></th>
									<td>
										<?=$member["UserID"]?>
									</td>
								</tr>
								<tr>
									<th><label for="user-name">이름</label></th>
									<td>
										<?=$member["UserName"]?>
									</td>
								</tr>
								<tr>
									<th><label for="Password1">비밀번호</label></th>
									<td>
										<input type="password" class="form-control" name="Password1" id="Password1" exp title="비밀번호">
									</td>
								</tr>
								<tr>
									<th><label for="NPassword1">새비밀번호</label></th>
									<td>
										<input type="password" class="form-control" name="NPassword1" id="NPassword1">
									</td>
								</tr>
								<tr>
									<th><label for="NPassword1">새비밀번호<br>확인</label></th>
									<td>
										<input type="password" class="form-control" name="NPassword2" id="NPassword2">
									</td>
								</tr>
								<tr class="address">
									<th><label for="email-addr">이메일</label></th>
									<td>
										<input type="email" class="form-control" name="Email" exp title="이메일" style="width:54%;float:left;" value="<?=$member["Email"]?>" onchange="javascript:$('#mailchk').val('No');">
										<div class="btn-area">
											<p>
												<a href="javascript:;" onclick="mail_chk();" class="btn btn-gray">중복검사</a>
											</p>
										</div>
									</td>
								</tr>
								<tr class="birthday">
									<th><label for="birthdate">생년월일</label></th>
									<td>
										<input type="date" class="form-control" id="birthdate" name="BirthDay" value="<?=$member["BirthDay"]?>">
									</td>
								</tr>
								<tr class="sex">
									<th>성별</th>
									<td>
										<label><input type="radio" name="Sex" id="sex" value="M" <?=$member["Sex"]=="M"?"checked":""?>>&nbsp;남자</label>
										<label><input type="radio" name="Sex" id="woman" value="F" <?=$member["Sex"]=="F"?"checked":""?>>&nbsp;여자</label>
									</td>
								</tr>
								<tr class="address">
									<th><label for="address">주소</label></th>
									<td>
										<input type="text" class="form-control" name="ZipCode" exp title="우편번호" readonly id="address" placeholder="우편번호" value="<?=$member["ZipCode"]?>">
										<div class="btn-area">
											<p>
												<a href="javascript:;" onclick="win_zip('MemberForm', 'ZipCode', 'Address1', 'Address2', 'Address3', 'AddressType');" class="btn btn-gray">우편번호 검색</a>
											</p>
										</div>
										<label class="sr-only" for="detailed-addr">주소</label><input type="text" class="form-control" name="Address1" exp title="주소" id="detailed-addr" placeholder="기본주소" value="<?=$member["Address1"]?>">
										<label class="sr-only" for="house-number">주소</label><input type="text" class="form-control" name="Address2" exp title="주소" id="house-number" placeholder="상세주소" value="<?=$member["Address2"]?>"/>
										<label class="sr-only" for="house-number">주소</label><input type="text" class="form-control" name="Address3" readonly id="road-addr" placeholder="도로명주소" value="<?=$member["Address3"]?>"><input type="hidden" name="AddressType" value="<?=$member["AddressType"]?>">
									</td>
								</tr>
								<tr>
									<th><label for="tel">전화번호</label></th> 
									<td>
										<input type="text" class="form-control" name="Phone" id="tel" value="<?=$member["Phone"]?>">
									</td>
								</tr>
								<tr>
									<th><label for="phone">휴대전화</label></th>
									<td>
										<input type="text" class="form-control" name="Mobile" id="phone" value="<?=$mobile[0]?>">
									</td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
			</section>
			<div class="btn-area">
				<p>
					<a href="/" class="btn btn-pink">이전으로</a>
					<a href="javascript:;" onclick="javascript:FormOK();" class="btn btn-gray">수정완료</a>
				</p>
			</div>
		</div>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>

	<iframe name="nullframe" width="100%" height="0" frameborder="0"></iframe>

	<script type="text/javascript" src="/board/config/FormCheck.js"></script>
	<script>
	function mail_chk(){
		var f=  document.MemberForm;
		var val1 = f.Email.value;
		var val = val1;

		if(strTrim(val) == "@"){
			alert("이메일주소를 입력해주시기 바랍니다.");
			f.Email1.focus();
			return;
		}

		jQuery.ajax({
			url: "/board/config/ajax/ajax_mailck.php",
			type: 'POST',
			data: "val=" + val + "&old_email="+$("#old_email").val(),

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
				else  $("input[name='mailchk']").val("No");
			}
		});
	}

	function FormOK(){
		var form = document.MemberForm;
		var exps = 0;

		if(FormCheck(form) == true){
		
			if(form.NPassword1.value != "" || form.NPassword2.value != ""){
				if(form.NPassword1.value == form.NPassword2.value){
					if(form.Password1.value == ""){
						alert("기존비밀번호를 입력하시기 바랍니다.");
						form.Password1.focus();
						return;
					}
				}else{
					alert("새로운 비밀번호가 맞지 않습니다.");
					form.NPassword1.value == "";
					form.NPassword2.value == "";
					form.NPassword1.focus();
					return;
				}
			}

			if($("input[name='mailchk']").val()=="No"){
				alert("이메일 중복확인을 하시기 바랍니다.");
				form.Email1.focus();
				return;
			}

			form.submit();
		} else {
			return;
		}
	}


	var win_zip = function(frm_name, frm_zip, frm_addr1, frm_addr2, frm_addr3, frm_jibeon) {
		if(typeof daum === 'undefined'){
			alert("다음 우편번호 postcode.v2.js 파일이 로드되지 않았습니다.");
			return false;
		}

		var zip_case = 2;   //0이면 레이어, 1이면 페이지에 끼워 넣기, 2이면 새창

		var complete_fn = function(data){
			// 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

			// 각 주소의 노출 규칙에 따라 주소를 조합한다.
			// 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
			var fullAddr = ''; // 최종 주소 변수
			var extraAddr = ''; // 조합형 주소 변수

			// 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
			if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
				fullAddr = data.roadAddress;

			} else { // 사용자가 지번 주소를 선택했을 경우(J)
				fullAddr = data.jibunAddress;
			}

			// 사용자가 선택한 주소가 도로명 타입일때 조합한다.
			if(data.userSelectedType === 'R'){
				//법정동명이 있을 경우 추가한다.
				if(data.bname !== ''){
					extraAddr += data.bname;
				}
				// 건물명이 있을 경우 추가한다.
				if(data.buildingName !== ''){
					extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
				}
				// 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
				extraAddr = (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
			}

			// 우편번호와 주소 정보를 해당 필드에 넣고, 커서를 상세주소 필드로 이동한다.
			var of = document[frm_name];

			of[frm_zip].value = data.zonecode;

			of[frm_addr1].value = fullAddr;
			of[frm_addr3].value = extraAddr;

			if(of[frm_jibeon] !== undefined){
				of[frm_jibeon].value = data.userSelectedType;
			}

			of[frm_addr2].focus();
		};

		switch(zip_case) {
			case 1 :    //iframe을 이용하여 페이지에 끼워 넣기
				var daum_pape_id = 'daum_juso_page'+frm_zip,
					element_wrap = document.getElementById(daum_pape_id),
					currentScroll = Math.max(document.body.scrollTop, document.documentElement.scrollTop);
				if (element_wrap == null) {
					element_wrap = document.createElement("div");
					element_wrap.setAttribute("id", daum_pape_id);
					element_wrap.style.cssText = 'display:none;border:1px solid;left:0;width:100%;height:300px;margin:5px 0;position:relative;-webkit-overflow-scrolling:touch;';
					element_wrap.innerHTML = '<img src="//i1.daumcdn.net/localimg/localimages/07/postcode/320/close.png" id="btnFoldWrap" style="cursor:pointer;position:absolute;right:0px;top:-21px;z-index:1" class="close_daum_juso" alt="접기 버튼">';
					jQuery('form[name="'+frm_name+'"]').find('input[name="'+frm_addr1+'"]').before(element_wrap);
					jQuery("#"+daum_pape_id).off("click", ".close_daum_juso").on("click", ".close_daum_juso", function(e){
						e.preventDefault();
						jQuery(this).parent().hide();
					});
				}

				new daum.Postcode({
					oncomplete: function(data) {
						complete_fn(data);
						// iframe을 넣은 element를 안보이게 한다.
						element_wrap.style.display = 'none';
						// 우편번호 찾기 화면이 보이기 이전으로 scroll 위치를 되돌린다.
						document.body.scrollTop = currentScroll;
					},
					// 우편번호 찾기 화면 크기가 조정되었을때 실행할 코드를 작성하는 부분.
					// iframe을 넣은 element의 높이값을 조정한다.
					onresize : function(size) {
						element_wrap.style.height = size.height + "px";
					},
					width : '100%',
					height : '100%'
				}).embed(element_wrap);

				// iframe을 넣은 element를 보이게 한다.
				element_wrap.style.display = 'block';
				break;
			case 2 :    //새창으로 띄우기
				new daum.Postcode({
					oncomplete: function(data) {
						complete_fn(data);
					}
				}).open();
				break;
			default :   //iframe을 이용하여 레이어 띄우기
				var rayer_id = 'daum_juso_rayer'+frm_zip,
					element_layer = document.getElementById(rayer_id);
				if (element_layer == null) {
					element_layer = document.createElement("div");
					element_layer.setAttribute("id", rayer_id);
					element_layer.style.cssText = 'display:none;border:5px solid;position:fixed;width:300px;height:460px;left:50%;margin-left:-155px;top:50%;margin-top:-235px;overflow:hidden;-webkit-overflow-scrolling:touch;z-index:10000';
					element_layer.innerHTML = '<img src="//i1.daumcdn.net/localimg/localimages/07/postcode/320/close.png" id="btnCloseLayer" style="cursor:pointer;position:absolute;right:-3px;top:-3px;z-index:1" class="close_daum_juso" alt="닫기 버튼">';
					document.body.appendChild(element_layer);
					jQuery("#"+rayer_id).off("click", ".close_daum_juso").on("click", ".close_daum_juso", function(e){
						e.preventDefault();
						jQuery(this).parent().hide();
					});
				}

				new daum.Postcode({
					oncomplete: function(data) {
						complete_fn(data);
						// iframe을 넣은 element를 안보이게 한다.
						element_layer.style.display = 'none';
					},
					width : '100%',
					height : '100%'
				}).embed(element_layer);

				// iframe을 넣은 element를 보이게 한다.
				element_layer.style.display = 'block';
		}
	}

	function memberBreak() { //v2.0
		if(confirm("회원탈퇴를 하시겠습니까?\n탈퇴 후 같은 아이디로는 가입이 불가능합니다.\n해당월 및 모든 실적이 소멸됩니다.")){
		   location = "../board/module/incmember/memberBreak_ok.php";
		}
	}

	$(window).load(function(){
	});
	</script>
</body>
</html>