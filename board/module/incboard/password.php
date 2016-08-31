<section class="confirm-section" style="display:none;">
	<div class="container">
		<div class="confirm-form">
			<h4>글 작성시 입력하신 비밀번호를 입력해주세요.</h4>
			<form name="pass_form" method="post" action="<?=$returnpage?>" onsubmit="return pwd_submit(this);">
			<input type="hidden" name="BoardIdx" value="<?=$BoardIdx?$BoardIdx:$board_idx?>">
			<input type="hidden" name="board_code" value="<?=$board_code?>">
			<input type="hidden" name="page" value="<?=$page?>">
			<input type="hidden" name="Category" value="<?=$Category?>">
			<input type="hidden" name="workType" value="<?=$workType?>">
			<input type="hidden" name="mode" value="<?=$mode?>">
			<input type="hidden" name="sT" value="<?=$sT?>">
			<input type="hidden" name="sF" value="<?=$sF?>">
			<input type="hidden" name="URI" value="<?=$URI?>">
			<input type="hidden" name="is_password" value="1">
				<div class="form-group">
					<label for="login-pw" class="sr-only">비밀번호</label>
					<input id="login-pw" class="form-control" type="password" placeholder="비밀번호를 입력해 주세요" name="password1" exp title="비밀번호">
				</div>
				<div class="btn-area">
					<p>
						<button type="submit" class="btn btn-confirm">확인</button>
						<a href="javascript:history.back(-1);" class="btn btn-cancel">취소</a>
					</p>
				</div>
			</form>
		</div>
	</div>
</section>

<script type="text/javascript" src="/board/config/FormCheck.js"></script>
<script language='JavaScript'>
document.pass_form.password1.focus();

function pwd_submit(f)
{
	if(FormCheck(f) == true){
		f.submit();
	} else {
		return false;
	}
}
</script>