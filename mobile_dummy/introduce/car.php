<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/introduce.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="introduce car">
		<div class="page-title">
			<h2>
				오시는길<br>
				<small>Location</small>
			</h2>
		</div>
		<nav class="tabmenu-wrap">
			<div class="container">
				<p>
					<a href="#">지도보기</a>
				</p>
				<ol class="tab-menu">
					<li><a href="/mobile/introduce/location.php">셔틀버스<br>이용</a></li>
					<li><a href="/mobile/introduce/public.php">대중교통<br>이용</a></li>
					<li class="active"><a href="/mobile/introduce/car.php">자가용<br>이용</a></li>
					<li><a href="#">길찾기</a></li>
				</ol>
			</div>
		</nav>
		<div class="private-car">
			<h3>자가용 이용</h3>
			<p>경기도 광주시 초월읍 지월리 729-6<br>Tel : 1577-3622</p>
		</div>
		<section class="expressway">
			<div class="container">
				<div class="section-header">
					<h3>중부고속도로를 이용할 경우</h3>
				</div>
				<div class="section-content">
					<img class="img-responsive" src="/mobile/images/introduce/car1.gif">
					<ol class="sr-only">
						<li>중부고속도로</li>
						<li>경안 IC</li>
						<li>45번 국도 진입</li>
						<li>광주시청 표지와 좌측에 GS주유소가 보이면 좌회전</li>
						<li>좌측 유가네 칼국수 간판 지나면서 좌회전</li>
						<li>뚝방길 일방통행</li>
						<li>SRC 재활병원 표지를 따라오세요.</li>
					</ol>
				</div>
			</div>
		</section>
		<section class="route">
			<div class="container">
				<div class="section-header">
					<h3>3번 국도를 이용할 경우</h3>
				</div>
				<div class="section-content">
					<img class="img-responsive" src="/mobile/images/introduce/car2.gif">
					<ol class="sr-only">
						<li>성남 (모란)</li>
						<li>산업도로 (3번국도)</li>
						<li>광주 진입 후 좌회전</li>
						<li>3개의 신호등 지난 후 우회전</li>
						<li>SRC 재활병원 표지를 따라오세요.</li>
					</ol>
				</div>
			</div>
		</section>
	</main> 
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>