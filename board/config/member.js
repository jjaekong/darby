function js_IsEmail(strEmail) {
    /** 금지사항
     - @가 2개이상
     - .이 붙어서 나오는 경우
     -  @.나  .@이 존재하는 경우
     - 맨처음이.인 경우 **/
    var regDoNot = /(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/; 
    /** 필수사항
     - @이전에 하나이상의 문자가 있어야 함
     - @가 하나있어야 함
     - Domain명에 .이 하나 이상 있어야 함
     - Domain명의 마지막 문자는 영문자 2~3개이어야 함 **/
    var regMust = /^[a-zA-Z0-9\-\.\_]+\@[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,3})$/;
    
    if ( !regDoNot.test(strEmail) && regMust.test(strEmail) )
        return true;
    else    
        return false;
}

function js_Trim(str) {
    var count = str.length;
    var len = count;
    var st = 0;
    while ((st < len) && (str.charAt(st) <= ' '))  st++;
    while ((st < len) && (str.charAt(len - 1) <= ' ')) len--;
    return ((st > 0) || (len < count)) ? str.substring(st, len) : str ;
}
// 회원가입폼 체크
function checkSignFormAfter()
{
        var frm = document.f;

        frm.mem_id.value = js_Trim( frm.mem_id.value );
        if( frm.mem_id.value == '' )
        {
                alert( '아이디를 입력해 주세요.' );
                frm.mem_id.focus();
                return false;
        }
		
        var msgIDCheck;
        msgIDCheck = chkId( frm.mem_id.value );	// 아이디 입력 내용 확인
        if( msgIDCheck != "" )
        {
        	alert( msgIDCheck );
			frm.mem_id.focus();
        	return false;
        }
        
        frm.mem_nick.value = js_Trim( frm.mem_nick.value )
        var msgNickCheck;
        msgNickCheck = chkNick( frm.mem_nick.value );	// 닉네임 입력 내용 확인
        if( msgNickCheck != "" )
        {
        	alert( msgNickCheck );
			frm.mem_nick.focus();
            return false;
        }

        if( frm.mem_pw.value != frm.mem_pw2.value )
        {
                alert( '비밀번호를 확인 해주세요.' );
                frm.mem_pw.focus();
                return false;
        }
        
        if( !passwd_check( frm.mem_pw ) )	// 비번 조합 확인
        {
        	return false;
        }

        var mem_email = frm.mem_email_id.value + "@" + frm.mem_email_domain.value;
        if( !js_IsEmail( mem_email ) )
        {
            alert( '이메일을 확인 해주세요.' );
            frm.mem_email_id.focus();
            return false;
        }
        
        
        

        return true;
}
// 아이디 체크
function chkId(strId) {
	var alphaDigit= "_abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"
	if(!strId) return "아이디를 입력하세요!";
	
	if (strId.length < 4 || strId.length > 15) return "아이디는 4~15자 이내여야 합니다.(한글아이디 사용불가)";
	
	if (strId.indexOf(" ") >= 0) return "아이디는 공백이 들어가면 안됩니다.";
	
	if( !noneAllowID( strId ) ) return "이용 불가능 아이디 입니다.";

	for (i=0; i<strId.length; i++)  {
		if (alphaDigit.indexOf(strId.substring(i, i+1)) == -1) {
			return "아이디는 영문과 숫자의 조합만 사용할 수 있습니다.";
		}
	}
	
	return "";
}

function chkNick( strNick )
{
	var noneAllowNick = "'|&";
	if( !strNick ) return "닉네임을 입력하세요!";

	if ( strNick.length < 2 || strNick.length >16 ) "닉네임은 2~16자 이내여야 합니다.";

	if ( strNick.indexOf(" ") >= 0) return "닉네임은 공백이 들어가면 안됩니다.";
	
	for (i=0; i<strNick.length; i++)  {
		if ( noneAllowNick.indexOf( strNick.substring(i, i+1) ) != -1 ) {
			return "['][|][&] 는 사용 할 수 없습니다.";
		}
	}

	return "";
}
function chkName( strNick )
{
	var noneAllowNick = "'|&";
	if( !strNick ) return "이름을 입력하세요!";

	if ( strNick.length < 2 || strNick.length >16 ) "이름은 2~16자 이내여야 합니다.";

	if ( strNick.indexOf(" ") >= 0) return "이름은 공백이 들어가면 안됩니다.";
	
	for (i=0; i<strNick.length; i++)  {
		if ( noneAllowNick.indexOf( strNick.substring(i, i+1) ) != -1 ) {
			return "['][|][&] 는 사용 할 수 없습니다.";
		}
	}

	return "";
}

function noneAllowID( strId ) {
	var returnValue = true;
	switch( strId ) {
		case "manager" : 
		case "sex" :
			returnValue = false;
			break;
		default :
			returnValue = true;
			break;
	}
	return returnValue;
}

// 비밀번호 체크
function passwd_check(passwd) {
	passwd_val = passwd.value;
	c_cnt = 0;
	n_cnt = 0;
	var tmp = "";

	if (passwd_val.length == 0) {
		alert("비밀번호는 반드시 입력하셔야 합니다.");
		passwd.focus();
		return 0;
	}
	else if (passwd_val.length < 4) {
		alert("비밀번호는 4자리 이상 입력하셔야 합니다.");
		passwd.focus();
		return 0;
	}
			
	for (var k = 0 ; k < passwd_val.length ; k++ ) {
		if (isNaN(parseInt(passwd_val.charAt(k))))
			c_cnt++;
	    else
	    	n_cnt++;
	}
	
	if (c_cnt < 1 || n_cnt < 1) {
		alert("비밀번호는 영자와 숫자를 혼합하셔야 합니다.");
		passwd.focus();
		return 0;
	} 
		
	return 1;
}

// 영문 숫자 조함 체크
function check_eng_num( fieldname, str )
{
	// 영문 숫자 정규식
	var filter_eng = /[^a-zA-z]/g;
	var filter_num = /[^0-9]/g;
	var filter_kor = /[^a-zA-z0-9]/g;
	
	if ( !filter_eng.test(str) )
	{
		//alert( '! ' + fieldname + ' 오류::<br>반드시 숫자를 포함하여야 합니다.' );
		alert( fieldname + ' 는 반드시 숫자를 포함하여야 합니다.' );
		return false;
	}
	else if( !filter_num.test(str) )
	{
		alert( fieldname + ' 는 반드시 영문을 포함하여야 합니다.' );
		return false;
	}
	else if( filter_kor.test( str) )
	{
		alert( fieldname + ' 는 영문과 숫자 조합을 사용해 주십시오.' );
		return false;
	}
	else
	{
		return true;
	}
}

function setDomain()
{
	var frm = document.f;
	if( frm.domain_select.value != "direct" )
	{
		frm.email2.readOnly = true;
	    frm.email2.value = frm.domain_select.value;
    }
    if( frm.domain_select.value == 'direct' )
	{
		frm.email2.readOnly = false;
		frm.email2.value = "";
        frm.email2.focus();
    }
}

