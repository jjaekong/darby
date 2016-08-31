<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet" />
<link href="/assets/css/promotional.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	<div class="page-header page-header-1">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li><a href="#">홍보센터</a></li>
				<li class="active">보도자료</li>
			</ol>
			<hr>
			<h1>보도자료</h1>
			<p>언론에 소개된 다비육종</p>
		</div>
	</div>
	<main id="content" tabindex="-1" class="promotional pw-confirm">
		<div class="container">
			<div class="confirm">
			    <p>게시물 작성시 입력하신 비밀번호를 입력해주세요.</p>
			    <label for="user-pw" class="sr-only">비밀번호입력</label>
			    <input type="password" id="user-pw">
			    <div class="btn-area">
			        <p>
			            <a href="#" class="btn btn-gray" role="button">취소</a>
			            <a href="#" class="btn btn-green" role="button">확인</a>
			        </p>
			    </div>
			</div>
		</div>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
