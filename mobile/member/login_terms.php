<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/member.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="member login-terms">
		<div class="page-title">
			<h2>회원가입<br>
				<small>Join</small>
			</h2>
		</div>
		<form name="agree" method="post">
		<div class="container">
			<section class="privacy">
				<div class="section-header">
					<h3>개인정보 취급방침</h3>
				</div>
				<div class="section-content">
					<?=get_agree(2)?>
				</div>
				<div class="privacy-choice">
					<label class="radio-inline">
						<input type="radio" name="agree2" id="first-consent" value="1" checked>동의합니다.
					</label>
					<label class="radio-inline">
						<input type="radio" name="agree2" id="first-not-consent" value="2">동의하지않습니다.
					</label>
				</div>
			</section>
			<section class="terms">
				<div class="section-header">
					<h3>이용약관</h3>
				</div>
				<div class="section-content">
					<?=get_agree(1)?>
				</div>
				<div class="terms-choice">
					<label class="radio-inline">
						<input type="radio" name="agree1" id="consent" value="1" checked>동의합니다.
					</label>
					<label class="radio-inline">
						<input type="radio" name="agree1" id="not-consent" value="2">동의하지않습니다.
					</label>
				</div>
			</section>
			<div class="btn-area">
				<p>
					<a href="/" class="btn btn-gray">취소</a>
					<a href="javascript:;" onclick="chk_frm();" class="btn btn-pink">다음</a>
				</p>
			</div>
		</div>
		</form>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
		
	<script type="text/javascript" src="/board/config/FormCheck.js"></script>
	<script>
	function chk_frm(){
		var f = document.agree;
		if($("#consent").prop("checked") == false){
			alert('회원가입약관에 동의하시기 바랍니다.');
			return;
		} else if($("#first-consent").prop("checked") == false){
			alert('개인정보 취급방침에 동의하시기 바랍니다.');
			return;
		}
	/*
		if(f.mailchk.value == "No"){
			alert("회원가입여부를 확인해주시기 바랍니다.");
			return false;
		}
	*/
		if(FormCheck(f) == true){
			f.action = "/mobile/member/join_form.php";
			f.submit();
		} else {
			return;
		}
	}
	function email_ck(){
		jQuery.ajax({
			url: "/board/config/ajax/ajax_mailck.php",
			type: 'POST',
			data: "val=" + $("#Email1").val() + "@" + $("#Email2").val(),

			error: function(xhr,textStatus,errorThrown){
				alert('An error occurred! by cv \n'+(errorThrown ? errorThrown : xhr.status));
			},
			success: function(data){
				$("#span_dupeck").html(data);
			}
		});
	}
	</script>
</body>
</html>



