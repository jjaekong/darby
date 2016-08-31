<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php');
if($is_member) GetAlert("","appoint_step1.php");
?>
<link href="/css/customer.css" rel="stylesheet">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	<div class="page-path">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
				<li><a href="#">고객서비스</a></li>
				<li class="active">온라인 예약</li>
			</ol>
		</div>
	</div>
	<main id="content" class="customer appoint login">
		<div class="page-header">
			<h2>온라인 예약</h2>
		</div>
		<div class="steps">
			<div class="container">
				<ol>
					<li class="active"><p>로그인<br><small>(비회원일 경우<br>회원가입을 먼저 해주세요)</small></p></li>
					<li><p>희망날짜,<br>의료진 및 진료시간 선택</p></li>
					<li><p>예약 신청 내용 확인</p></li>
					<li><p>완료 후 예약일에 방문</p></li>
				</ol>
			</div>
		</div>
		<div class="container">
			<section class="login-section">
				<div class="section-header text-center">
					<h3>LOGIN</h3>
					<p>SRC 재활병원 서비스를 이용하시려면 로그인이 필요합니다.</p>
				</div>
				<div class="login-form">
					<form name="loginForm" method="post" action="<?=$loc?>/board/module/incmember/login_ok.php" onsubmit="return check_login();">
					<input type="hidden" name="URI" value="<?=$_SERVER["PHP_SELF"]?>">
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
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>