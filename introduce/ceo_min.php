<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet" />
<link href="/assets/css/introduce.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	<div class="page-header page-header-1">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li><a href="#">회사소개</a></li>
				<li class="active">인사말</li>
			</ol>
			<hr>
			<h1>인사말</h1>
			<p>다비육종을 찾아주신 여러분 안녕하세요.</p>
		</div>
	</div>
	<main id="content" tabindex="-1" class="introduce ceo-min">
		<div class="container">
			<nav class="navbar">
				<ul class="nav navbar-nav">
					<li><a href="/introduce/greeting.php">인사말</a></li>
					<li><a href="/introduce/ceo_yoon.php">CEO 윤희진</a></li>
					<li class="active"><a href="/introduce/ceo_min.php">CEO 민동수</a></li>
				</ul>
			</nav>
			<div class="ceo-info">
				<div class="ceo-header">
					<img src="/assets/images/introduce/ceo_img02.png" alt="ceo 윤희진" />
					<div class="ceo-history">
						<h2><small>CEO</small>민동수</h2>
						<ul>
							<li>서울대학교 수의학과 졸업</li>
							<li>前 한국바이엘화학㈜ 근무</li>
							<li>前 (사)한국양돈연구회 회장</li>
							<li>前 한국양돈수의사회 부회장 </li>
							<li>(사)한국종축개량협회 종돈이사</li>
							<li>한국동물자원과학회 동물유전육종연구회 부회장</li>
							<li>골든시드프로젝트 운영위원</li>
							<li>(주)다비육종 대표이사 (사장) </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
