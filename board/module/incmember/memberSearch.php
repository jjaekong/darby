<script type="text/javascript">
<!--
function chk_id(f){
	if(FormCheck(f) == true){
		f.submit();
		return;
	} else {
		return false;
	}
}

function form_reset(f){
	$("form[name='"+f+"']").each(function(){
		this.reset();
	});
}

//-->
</script>

<div class="container">
	<section class="find-section find-id">
		<div class="section-header text-center">
			<h3>아이디 찾기</h3>
			<p>가입하신 이메일로 아이디를 전송해 드립니다.</p>
		</div>
		<div class="find-form find-id-form">
			<form name="idform1" method="post" action="/board/module/incmember/memberSearch_ok.php" onsubmit="return chk_id(this);">
			<input type="hidden" name="workType" value="ID1">
			<input type="hidden" name="URI" value="/member/login.php">
				<div class="form-group">
					<label for="find-id-name" class="sr-only">이름</label>
					<input id="find-id-name" class="form-control" type="text"  name="UserName" exp title="이름" placeholder="이름">
				</div>
				<div class="form-group">
					<label for="find-id-email" class="sr-only">이메일</label>
					<input id="find-id-email" class="form-control" type="email" name="Email" exp title="이메일" placeholder="이메일">
				</div>
				<div class="btn-area">
					<p>
						<button type="submit" class="btn btn-block">확인</button>
					</p>
				</div>
			</form>
		</div>
	</section>
	<section class="find-section find-pw">
		<div class="section-header text-center">
			<h3>비밀번호 찾기</h3>
			<p>가입하신 이메일로 비밀번호를 전송해 드립니다.</p>
		</div>
		<div class="find-form find-pw-form">
			<form name="pwform1" method="post" action="/board/module/incmember/memberSearch_ok.php" onsubmit="return chk_id(this);">
			<input type="hidden" name="workType" value="PW1">
			<input type="hidden" name="URI" value="/member/login.php">
				<div class="form-group">
					<label for="find-pw-name" class="sr-only">이름</label>
					<input id="find-pw-name" class="form-control" type="text" name="UserName" exp title="이름" placeholder="이름">
				</div>
				<div class="form-group">
					<label for="find-pw-id" class="sr-only">아이디</label>
					<input id="find-pw-id" class="form-control" type="text" name="UserID" exp uid title="아이디" placeholder="아이디">
				</div>
				<div class="form-group">
					<label for="find-pw-email" class="sr-only">이메일</label>
					<input id="find-pw-email" class="form-control" type="email" name="Email" exp title="이메일" placeholder="이메일">
				</div>
				<div class="btn-area">
					<p>
						<button type="submit" class="btn btn-block">확인</button>
					</p>
				</div>
			</form>
		</div>
	</section>
</div>