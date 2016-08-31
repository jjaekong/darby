<script type="text/javascript">
<!--
function check_login() {
	var f=document.loginForm;
	if(FormCheck(f) == true){
		return true;
	} else {
		return false;
	}
}
//-->
</script>
<?
if(empty($URI)) $URI = "/";
if($user[ID]) move_to($URI); 
?>
<!--login start-->
<!-- Contents 시작 -->
<div class="member-content">
	<section class="login-section">
		<div class="section-header text-center">
			<h3>LOGIN</h3>
			<p>SRC 재활병원 서비스를 이용하시려면 로그인이 필요합니다.</p>
		</div>
		<div class="login-form">
			<form name="loginForm" method="post" action="<?=$loc?>/board/module/incmember/login_ok.php" onsubmit="return check_login();">
			<input type="hidden" name="URI" value="<?=$URI?>">
				<div class="form-group">
					<label for="login-id" class="sr-only">아이디</label>
					<input id="login-id" class="form-control" type="text" name="UserID" exp title="아이디" placeholder="아이디를 입력해 주세요">
				</div>
				<div class="form-group">
					<label for="login-pw" class="sr-only">비밀번호</label>
					<input id="login-pw" class="form-control" type="password" name="Password1" exp title="비밀번호" placeholder="비밀번호를 입력해 주세요">
				</div>
				<div class="btn-area">
					<p>
						<button type="submit" class="btn btn-block">로그인</button>
					</p>
				</div>
			</form>
			<div class="help-member">
				<ul>
					<li><a href="/member/join_terms.php">회원가입</a></li>
					<li><a href="/member/find.php">아이디, 비밀번호 찾기</a></li>
				</ul>
			</div>
		</div>
	</section>
</div>

