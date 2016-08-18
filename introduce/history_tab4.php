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
				<li class="active">연혁</li>
			</ol>
			<hr>
			<h1>연혁</h1>
			<p>다비육종이 한국돼지의 표준을 만들어 온 발자취입니다.</p>
		</div>
	</div>
	<main id="content" tabindex="-1" class="introduce history">
		<div class="container">
			<nav class="navbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="/introduce/history_tab4.php">1980년대</a></li>
					<li><a href="/introduce/history_tab3.php">1990년대</a></li>
					<li><a href="/introduce/history_tab2.php">2000년대</a></li>
					<li><a href="/introduce/history.php">2010년대</a></li>
				</ul>
			</nav>
			<div class="history-list">
				<div class="history-img">
					<p>
						<img src="/assets/images/introduce/history_img15.jpg" alt="기업연혁이미지">
					</p>
					<p>
						<img src="/assets/images/introduce/history_img16.jpg" alt="기업연혁이미지">
					</p>
				</div>
				<ol>
					<li>
						<hr>
						<h3>1983년</h3>
						<dl>
							<dt>08</dt>
							<dd>다비육종의 모체인 대월종돈 설립</dd>
						</dl>
					</li>
					<li>
						<hr>
						<h3>1984년</h3>
						<dl>
							<dt>07</dt>
							<dd>제1회 공인능력검정 챔피언돈 수상</dd>
						</dl>
					</li>
					<li>
						<hr>
						<h3>1986년</h3>
						<dl>
							<dt>11</dt>
							<dd>㈜다비육종설립, 일죽GGP농장 준공</dd>
						</dl>
					</li>
					<li>
						<hr>
						<h3>1988년</h3>
						<dl>
							<dt>07</dt>
							<dd>국내최초 MEW(Medicated Early Weaning) 방식의 청정돈군 조성</dd>
						</dl>
					</li>
				</ol>
			</div>
		</div>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
