<?
if($is_member) err_back("Already Login.");
?>
<script>
function chk_frm(){
	var f = document.agree;
	if(f.agree11.checked == false){
		alert('회원가입약관에 동의하시기 바랍니다.');
		return false;
	} else if(f.agree21.checked == false){
		alert('개인정보 취급방침에 동의하시기 바랍니다.');
		return false;
	}
/*
	if(f.mailchk.value == "No"){
		alert("회원가입여부를 확인해주시기 바랍니다.");
		return false;
	}
*/
	if(FormCheck(f) == true){
		f.action = "/member/join_form.php";
		f.submit();
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

<div class="member-content">
<form name="agree" method="post" onsubmit="return chk_frm();">
	<div class="terms-section">
		<section>
			<div class="section-header">
				<h3>개인정보 취급방침</h3>
			</div>
			<div class="terms-area">
				<?=get_agree(2)?>
			</div>
			<div class="agree-terms">
				<p>SRC재활병원 개인정보취급방침에 동의합니다.</p>
				<p>
					<label><input type="radio" name="agree2" id="agree21" value="1"> 동의함</label>
					<label><input type="radio" name="agree2" id="agree22" value="2"> 동의안함</label>
				</p>
			</div>
		</section>
		<section>
			<div class="section-header">
				<h3>이용약관</h3>
			</div>
			<div class="terms-area">
				<?=get_agree(1)?>
			</div>
			<div class="agree-terms">
				<p>SRC재활병원 이용약관에 동의합니다.</p>
				<p>
					<label><input type="radio" name="agree1" id="agree11" value="1"> 동의함</label>
					<label><input type="radio" name="agree1" id="agree12" value="2"> 동의안함</label>
				</p>
			</div>
		</section>
		<div class="btn-area">
			<p>
				<a href="javascript:;" onclick="document.agree.onsubmit();" class="btn btn-next">다음</a>
				<a href="/" class="btn btn-cancel">취소</a>
			</p>
		</div>
	</div>
</form>
</div>