<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/member.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="member login">
		<div class="page-title">
			<h2>로그인<br>
				<small>Login</small>
			</h2>
		</div>
		<div class="container-wrap">
			<div class="container">
				<section class="login">
					<div class="section-header">
						<h3>LOGIN</h3>
						<p>SRC 재활병원 서비스를 이용하시려면<br> 로그인이 필요합니다.</p>
					</div>
					<div class="section-content">
						<form class="login-input"> 
							<div class="form-group">
								<label class="sr-only" for="user-id">아이디</label>
								<input type="text" class="form-control" id="user-id" placeholder="아이디를 입력해주세요.">
							</div>
							<div class="form-group">
								<label class="sr-only" for="user-password">비밀번호</label>
								<input type="password" class="form-control" id="user-password" placeholder="비밀번호를 입력해주세요.">
							</div>
						</form>
						<div class="btn-area">
							<p>
								<a href="#" class="btn btn-pink">로그인</a>
							</p>
						</div>
						<ul>
							<li><a href="/mobile/member/login_terms.php">회원가입</a></li>
							<li><a href="/mobile/member/privacy_statsment.php">아이디 / 비밀번호찾기</a></li>
						</ul>
					</div>
				</section>
			</div>
		</div>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>