<!--//

/* ���ڿ����� ���� */
function trim(str) {
	return replace(str," ","");
}

/* ���ڿ��� �ִ� Ư������������ �ٸ� ������������ �ٲٴ� �Լ�. */
function replace(targetStr, searchStr, replaceStr) {
	var len, i, tmpstr;

	len = targetStr.length;
	tmpstr = "";

	for ( i = 0 ; i < len ; i++ ) {
		if ( targetStr.charAt(i) != searchStr ) {
			tmpstr = tmpstr + targetStr.charAt(i);
		} else {
			tmpstr = tmpstr + replaceStr;
		}
	}
	return tmpstr;
}

/* ���� �Է� üũ */
function numOnly(obj,frm) {
	if (event.keyCode == 9 || event.keyCode == 37 || event.keyCode == 39) return;
	var returnValue = "";
	for (var i = 0; i < obj.value.length; i++) {
		if (parseInt(obj.value.charAt(i)) >= 0 && parseInt(obj.value.charAt(i)) <= 9){
			returnValue += obj.value.charAt(i);
		}
	}

	obj.value = returnValue;
}

/* �ػ󵵿� ������� ȭ�� �߾ӿ� ��â ���� */
function MidWindow(url,winname,features) {

	features = features.toLowerCase();
	len = features.length;
	sumchar= '';

	for(i=1; i <= len; i++){	// ��ĭ ����
		onechar = features.substr(i-1, 1);
		if(onechar != ' ') sumchar += onechar;
	}

	features = sumchar; 
	sp = new Array();
	sp = features.split(',', 10);	// �迭�� �ɼ��� �и��ؼ� �Է�
	splen = sp.length;	// �迭 ����

	for(i=0; i < splen; i++){	// width, height ���� ���ϱ� ���� �κ�
		if(sp[i].indexOf('width=') == 0){	// width ���϶�
			width = Number(sp[i].substring(6)); 
		} else if (sp[i].indexOf('height=') == 0){	// height ���϶�
			height = Number(sp[i].substring(7)); 
		}
	}

	sleft = (screen.width - width) / 2-100;
	stop = (screen.height - height) / 2+100;
	features = features + ',left=' + sleft + ',top=' + stop;
	popwin = window.open(url,winname,features); 
}

/*  ���� �޽��� ���ڼ� ��� */
function ChkLen() {
	var tmpStr;
	var temp=0;
	var onechar;
	var tcount;
	tcount = 0;

	tmpStr = new String(document.MsgForm.strMsg.value);
	temp = tmpStr.length;

	for (k=0;k<temp;k++) {
		onechar = tmpStr.charAt(k);
		if (escape(onechar) =='%0D') { } else if (escape(onechar).length > 4) { tcount += 2; } else { tcount++; }
	}

	// �ʵ弱�ÿ� ���� ���Ѱ� �����ϱ�

	MsgForm.msg_txt_cnt.value = tcount;

	if(tcount > 80) {

		reserve = tcount-80;

		alert("������ 80����Ʈ �̻��� �Է� �ϽǼ� �����ϴ�.\r\n �Է��Ͻ� ������ "+reserve+"����Ʈ�� �ʰ��Ǿ����ϴ�.\r\n �ʰ��� �κ��� �ڵ����� �����˴ϴ�."); 
		cutText();
		return;
	}
	
	return tcount;
}

function cutText() {
	nets_check(document.MsgForm.strMsg.value);
}

function nets_check(aquery) {

	var tmpStr;
	var temp=0;
	var onechar;
	var tcount;
	tcount = 0;

	tmpStr = new String(aquery);
	temp = tmpStr.length;

	for(k=0;k<temp;k++) {
		onechar = tmpStr.charAt(k);

		if(escape(onechar).length > 4) {
			tcount += 2;
		} else {
			// ���Ͱ��� �������� ��(\r\n)�� �ι�����Ǵµ� ù��° ��(\n)�� �������� tcount�� ������Ű�� �ʴ´�.
			if(escape(onechar)=='%0A') {
			} else {
				tcount++;
			}
		}

		if(tcount>80) {
			tmpStr = tmpStr.substring(0,k);
			break;
		}

	}
	document.MsgForm.strMsg.value = tmpStr;
	ChkLen(tmpStr);
}
	

/*  ���� �ּ� �Է� */
function subins() {

// �Է·¼��Ź�ȣ ����üũ
	if (document.MsgForm.imsinum.value=="") {
		document.MsgForm.imsinum.focus();
		return;
	}

	// �ּҹڽ� �ּҰ��� üũ�� ������ �ο� üũ
	var len = document.MsgForm.GROUP.length;
	var tel = document.MsgForm.imsinum.value;

	for (i=0;i<len;i++) {
		if(document.MsgForm.GROUP[i].value == tel) {
			return;
		}
	}

	if(document.createElement) {
		var op = document.createElement("OPTION");
		op.text = tel ;
		op.setAttribute("value", tel);
		op.setAttribute("selected", false);
	} else { 
		var op=new Option(tel,tel,false,false);
	}

	document.MsgForm.GROUP[len] = op;
	document.MsgForm.imsinum.value = '';
	document.MsgForm.inwon.value = len+1;	
}

/*  �ּҷϹڽ� ���� �ּ� �Է� */
function multi_subins(in_value){
		
	if(trim(in_value) != ''){
	var cur_tel = '';

	in_value = trim(in_value);

		for(i=0; i<in_value.length ;i++) {

			if(in_value.charAt(i) == '\;') {

				var len = document.MsgForm.GROUP.length;

				if(document.createElement) {
					var op = document.createElement("OPTION")
					op.text = cur_tel ;
					op.setAttribute("value", cur_tel)
					op.setAttribute("selected", false)
				} else { 
					var op=new Option(cur_tel,cur_tel,false,false)
				}
				document.MsgForm.GROUP[len] = op;
				cur_tel = '';

			}else{
				cur_tel += in_value.charAt(i);
			}
		}
	}
	document.MsgForm.inwon.value = document.MsgForm.GROUP.length;
}

/*  �Է� �ּ� ���� */
function subdel(){

	var len = document.MsgForm.GROUP.length;

	for(i=0;i<document.MsgForm.GROUP.length;i++) {
		if(document.MsgForm.GROUP[i].selected == true) {
			document.MsgForm.GROUP.options[i] = null;
			i--;
			document.MsgForm.inwon.value = document.MsgForm.GROUP.length;
		}
	}	
}

/* ���� ��� ����(��� ���� ���ۿ� ���� �ڵ��� ���������̹��� �ҷ�����,  ��� ���� ���ۿ� ���� �Է� ���� ����)  */
function clickhandler(mode)
{
  
	if (mode=="NOW")
	{
		document.all.backimg.background="img/phone_01.gif";
		document.all.phone01.style.display="block";
		document.all.phone02.style.display="none";
	} else if (mode=="LATER") {
		document.all.backimg.background="img/phone_03.gif";
		document.all.phone01.style.display="none";
		document.all.phone02.style.display="block";
	} else {
		document.all.backimg.background="img/phone_01.gif";
		document.all.phone01.style.display="block";
		document.all.phone02.style.display="none";
	}
}

/*  ���� Ȯ�� ���� üũ */
function Check(form) {

	   if (form.msg_txt_cnt.value < 1) {
	      alert('������ �޽����� �Է����ּ���.');
	      form.strMsg.focus();
	      return;
	   }

	   if (form.msg_txt_cnt.value > 80) {
	      alert('�޽����� ũ�Ⱑ �ʹ� Ů�ϴ�.');
	      form.strMsg.focus();
	      return;
	   }

       if (form.GROUP.length == 0) {
	      alert('�޴� ���� ��ȭ��ȣ�� �Է��ϼ���.');
		  form.imsinum.focus();
	      return;
	   } 

	   for(i=0 ; i<form.GROUP.length ; i++){
	   		form.GROUP[i].selected = true;
	   }

		if (form.NOWLATER[1].checked == true) {

			if (form.rsvYear.value == "") {
				alert("���� �⵵�� �Է��ϼ���");
				return; 
			} else if (form.rsvMonth.value == "") { 
				alert("���� ���� �Է��ϼ���");
				return; 
			} else if (form.rsvDay.value == "") {
				alert("���� ���� �Է��ϼ���");
				return;
			} else if (form.rsvHour.value == "") {
				alert("���� �ð��� �Է��ϼ���");
				return; 
			} else if (form.rsvMinute.value == "") {
				alert("���� ���� �Է��ϼ���");
				return; 
			}

			if ( form.rsvMonth.value < 0 ||  form.rsvMonth.value > 12 ) {
				alert("���೯¥�� ���� �߸��ԷµǾ����ϴ�");
				return;
			}

			if ( form.rsvDay.value < 0 || form.rsvDay.value > 31 ) {
				alert("���೯¥�� ���� �߸��ԷµǾ����ϴ�");
				return;
			}

			if ( form.rsvHour.value < 0 || form.rsvHour.value >= 24 ) {
				alert("���೯¥�� �ð��� �߸��ԷµǾ����ϴ�");
				return;
			}

			if ( form.rsvMinute.value < 0 || form.rsvMinute.value >= 60 ) {
				alert("���೯¥�� ���� �߸��ԷµǾ����ϴ�");
				return;
			}
		}

	   if(confirm('�����Ͻðڽ��ϱ�?')){

			var arrGR = new Array();

			for(i=0; i<form.GROUP.length; i++) {
				var arrValue = "";
				arrValue = form.GROUP.options[i].value;
				arrGR.push(arrValue);
				form.arrCallNo.value = arrGR;
			}

			form.submit();
	   }
	}

//-->