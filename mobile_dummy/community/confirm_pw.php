<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/community.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="community confirm-pw">
		<div class="page-title">
			<h2>비밀번호 확인</h2>
		</div>
		<div class="container">
			<section class="pw-check">
				<div class="section-header">
					<h4>글작성시 입력하신 비밀번호를 입력해주세요.</h4>
				</div>
				<div class="section-content">
					<form class="pw-input"> 
						<div class="form-group">
							<label class="sr-only" for="user-password">비밀번호</label>
							<input type="password" class="form-control" id="user-password" placeholder="비밀번호를 입력해주세요.">
						</div>
						<div class="btn-area">
							<p>
								<a href="#" class="btn btn-pink">확인</a>
								<a href="#" class="btn btn-gray">취소</a>
							</p>
						</div>
					</form>
				</div>
			</section>
		</div>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>