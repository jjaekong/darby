<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php');
if($is_member) GetAlert("","appoint_step1.php");
?>
<link href="/mobile/css/customer.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="customer appoint-login">
		<div class="page-title">
			<h2>온라인 예약</h2>
		</div>
		<div class="container">
			<ol class="steps">
				<li>
					<img src="/mobile/images/customer/reserve1_on.png" alt=""><br>
					<h3>로그인</h3>
				</li>
				<li>
					<img src="/mobile/images/customer/reserve2.png" alt=""><br>
					<h3>희망날짜, 의료진 및 진료시간 선택</h3>
				</li>
				<li>
					<img src="/mobile/images/customer/reserve3.png" alt=""><br>
					<h3>예약 신청 내용 확인</h3>
				</li>
				<li>
					<img src="/mobile/images/customer/reserve4.png" alt=""><br>
					<h3>완료 후 예약일에 방문</h3>
				</li>
			</ol>
			<section class="online-reserve">
				<div class="section-header">
					<h3>LOGIN</h3>
					<p>SRC 재활병원 서비스를 이용하시려면<br> 로그인이 필요합니다.</p>
				</div>
				<div class="section-content">
					<form class="login-input" name="loginForm" method="post" action="/board/module/incmember/login_ok.php"> 
					<input type="hidden" name="URI" value="<?=$_SERVER["PHP_SELF"]?>">
						<div class="form-group">
							<label class="sr-only" for="user-id">아이디</label>
							<input type="text" class="form-control" id="user-id" placeholder="아이디를 입력해주세요." name="UserID" exp title="아이디">
						</div>
						<div class="form-group">
							<label class="sr-only" for="user-password">비밀번호</label>
							<input type="password" class="form-control" id="user-password" placeholder="비밀번호를 입력해주세요."  name="Password1" exp title="비밀번호">
						</div>
					</form>
					<div class="btn-area">
						<p>
							<a href="javascript:;" onclick="check_login();" class="btn btn-pink">로그인</a>
						</p>
					</div>
					<ul>
						<li><a href="/mobile/member/login_terms.php">회원가입</a></li>
						<li><a href="/mobile/member/privacy_statsment.php">아이디 / 비밀번호찾기</a></li>
					</ul>
				</div>
			</section>
		</div>
		<script type="text/javascript" src="/board/config/FormCheck.js"></script>
		<script type="text/javascript">
		<!--
		function check_login() {
			var f=document.loginForm;
			if(FormCheck(f) == true){
				f.submit();
			} else {
				return;
			}
		}
		//-->
		</script>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
