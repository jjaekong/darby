function id_chk(){
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

function mail_chk(){
	var f=  document.MemberForm;
	var val = f.Email.value;

	if(strTrim(val) == "@"){
		alert("이메일주소를 입력해주시기 바랍니다.");
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

function mail_chk2(){
	var f=  document.MemberForm;
	var val = f.Email.value;

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

function hp_chk(){
	var hp = $("#phone").val();

	if(!hp1 || !hp2 || !hp3){
		alert("휴대전화 번호를 입력해주시기 바랍니다.");
		$("#phone").focus();
		return;
	}

	jQuery.ajax({
		url: "/board/config/ajax/ajax_hpck.php",
		type: "post",
		data: "Mobile="+hp,
		
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

function FormOK(){
	var form = document.MemberForm;

	if(FormCheck(form) == true){
		if(form.Password1.value != form.Password2.value){
			alert("비밀번호가 일치하지 않습니다.");
			form.Password1.value == "";
			form.Password2.value == "";
			form.Password1.focus();
			return false;
		}

		if(form.idchk.value=="No"){
			alert("아이디 중복확인을 해주시기 바랍니다.");
			$("#UserID").focus();
			return false;
		}

		if(form.mailchk.value == "No"){
			alert("이메일 중복확인을 해주시기 바랍니다.");
			$("#Email1").focus();
			return false;
		}

		return true;
	} else {
		return false;
	}
}

function EFormOK(){
	var form = document.MemberForm;

	if(FormCheck(form) == true){
		if(form.NPassword1.value != "" || form.NPassword2.value != ""){
			if(form.NPassword1.value == form.NPassword2.value){
				if(form.Password1.value == ""){
					alert("기존비밀번호를 입력하시기 바랍니다.");
					form.Password1.focus();
					return false;
				}
			}else{
				alert("새로운 비밀번호가 맞지 않습니다.");
				form.NPassword1.value == "";
				form.NPassword2.value == "";
				form.NPassword1.focus();
				return false;
			}
		}

		if($("input[name='mailchk']").val()=="No"){
			alert("이메일 중복확인을 하시기 바랍니다.");
			form.Email1.focus();
			return false;
		}

		return true;
	} else {
		return false;
	}
}