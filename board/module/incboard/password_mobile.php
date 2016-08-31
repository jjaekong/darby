<div class="container">
	<section class="pw-check">
		<div class="section-header">
			<h4>글작성시 입력하신 비밀번호를 입력해주세요.</h4>
		</div>
		<div class="section-content">
			<form class="pw-input" name="pass_form" method="post" action="<?=$returnpage?>" onsubmit="return pwd_submit(this);"> 
			<input type="hidden" name="BoardIdx" value="<?=$BoardIdx?$BoardIdx:$board_idx?>">
			<input type="hidden" name="board_code" value="<?=$board_code?>">
			<input type="hidden" name="page" value="<?=$page?>">
			<input type="hidden" name="Category" value="<?=$Category?>">
			<input type="hidden" name="workType" value="<?=$workType?>">
			<input type="hidden" name="mode" value="<?=$mode?>">
			<input type="hidden" name="sT" value="<?=$sT?>">
			<input type="hidden" name="sF" value="<?=$sF?>">
			<input type="hidden" name="URI" value="<?=$URI?>">
				<div class="form-group">
					<label class="sr-only" for="user-password">비밀번호</label>
					<input type="password" class="form-control" id="user-password" placeholder="비밀번호를 입력해주세요." name="password1" exp title="비밀번호">
				</div>
				<div class="btn-area">
					<p>
						<a href="javascript:;" onclick="document.pass_form.onsubmit();" class="btn btn-pink">확인</a>
						<a href="javascript:history.back(-1);" class="btn btn-gray">취소</a>
					</p>
				</div>
			</form>
		</div>
	</section>
</div>

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