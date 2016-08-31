<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/member.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="member privacy-statsment">
		<div class="page-title">
			<h2>아이디 / 비밀번호 찾기<br>
				<small>ID / PW</small>
			</h2>
		</div>
		<div class="container-wrap">
			<div class="container">
				<section class="id-hunt">
					<div class="section-header">
						<h3>아이디 찾기</h3>
						<p>가입하신 이메일로 아이디를 전송해 드립니다.</p>
					</div>
					<div class="section-content">
						<form class="id-input"> 
							<div class="form-group">
								<label class="sr-only" for="id-user-name">이름</label>
								<input type="text" class="form-control" id="id-user-name" placeholder="이름">
							</div>
							<div class="form-group">
								<label class="sr-only" for="id-user-email">이메일</label>
								<input type="email" class="form-control" id="id-user-email" placeholder="이메일">
							</div>
						</form>
						<div class="btn-area">
							<p>
								<a href="#" class="btn btn-gray">확인</a>
							</p>
						</div>
					</div>
				</section>
				<section class="pw-hunt">
					<div class="section-header">
						<h3>비밀번호 찾기</h3>
						<p>가입하신 이메일로 비밀번호를 전송해 드립니다.</p>
					</div>
					<div class="section-content">
						<form class="pw-input"> 
							<div class="form-group">
								<label class="sr-only" for="pw-user-name">이름</label>
								<input type="text" class="form-control" id="pw-user-name" placeholder="이름">
							</div>
							<div class="form-group">
								<label class="sr-only" for="pw-user-id">아이디</label>
								<input type="text" class="form-control" id="pw-user-id" placeholder="아이디">
							</div>
							<div class="form-group">
								<label class="sr-only" for="pw-user-email">이메일</label>
								<input type="email" class="form-control" id="pw-user-email" placeholder="이메일">
							</div>
						</form>
						<div class="btn-area">
							<p>
								<a href="#" class="btn btn-gray">확인</a>
							</p>
						</div>
					</div>
				</section>
			</div>
		</div>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>