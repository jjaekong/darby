<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/introduce.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="introduce public">
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
					<li class="active"><a href="/mobile/introduce/public.php">대중교통<br>이용</a></li>
					<li><a href="/mobile/introduce/car.php">자가용<br>이용</a></li>
					<li><a href="#">길찾기</a></li>
				</ol>
			</div>
		</nav>
		<section class="public-traffic">
			<div class="section-header">
				<h3>대중교통 이용</h3>
				<p>대중교통 이용시 광주시 보건소(나산화원) 앞 또는<br>경안동사무소앞에서 하차하여<br><i>SRC재활병원 셔틀버스나 택시를 이용바랍니다.(10분 소요)</i></p>
			</div>
			<div class="container">
				<div class="section-content row">
					<div class="gangbyeon col-sm-4">
						<h4>강변역 2호선</h4>
						<p>테크노마트 좌측 버스정류장<br>직행좌석 1113번, 1113 - 1번</p>
					</div>
					<div class="jamsil col-sm-4">
						<h4>잠실역 2호선</h4>
						<p>주공5단지 방향 출구 버스정류장<br>일반버스 32번</p>
					</div>
					<div class="moran col-sm-4">
						<h4>모란역 8호선</h4>
						<p>시외버스터비널 방면 버스정류장<br>3번, 3-3번, 31-1번, 32번</p>
					</div>
				</div>
			</div>
		</section>
	</main> 
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>