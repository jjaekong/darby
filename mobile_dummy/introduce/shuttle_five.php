<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/introduce.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="introduce shuttle-five">
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
					<li class="active"><a href="/mobile/introduce/location.php">셔틀버스<br>이용</a></li>
					<li><a href="/mobile/introduce/public.php">대중교통<br>이용</a></li>
					<li><a href="/mobile/introduce/car.php">자가용<br>이용</a></li>
					<li><a href="#">길찾기</a></li>
				</ol>
				 <ul class="category" role="tablist">
					<li role="presentation"><a href="/mobile/introduce/location.php" role="tab">1호차</a></li>
					<li role="presentation"><a href="/mobile/introduce/shuttle_two.php" role="tab">2호차</a></li>
					<li role="presentation"><a href="/mobile/introduce/shuttle_three.php" role="tab">3호차</a></li>
					<li role="presentation"><a href="/mobile/introduce/shuttle_four.php" role="tab">4호차</a></li>
					<li role="presentation" class="active"><a href="/mobile/introduce/shuttle_five.php" role="tab">5호차</a></li>
				</ul>
			</div>
		</nav>
		<section class="route-one">
			<div class="section-header">
				<h3>5호차<i>서울 및 광주시내</i></h3>
				<p>출퇴근 시간 서울행 : 9시 ~ 17시 광주시내</p>
				<p>도로 여건에 따라 도착시간이 변동될 수 있습니다.<br>(12, 12시30분 점심시간에는 운행을 하지 않습니다.)</p>
			</div>
			<div class="section-content">
				<div class="container">
					<img class="img-responsive" src="/mobile/images/introduce/bus6.gif">
					<ol class="sr-only">
						<li>10분 / 30분 센터출발</li>
						<li>17분 / 47분 제일학원 (경화여고 입구)</li>
						<li>20분 / 50분 참좋은병원 앞 (E마트 건너편)</li>
						<li>21분 / 51분 국민은행 경안지점 앞</li>
						<li>22분 / 52분 형제종합철물건재 (광주클리닉 건너편)</li>
						<li>23분 / 53분 농협 (우체국 건너편)</li>
						<li>24분 / 54분 롯데리아 앞 (제일 정형외과)</li>
						<li>27분 / 57분 서울보증보험 앞 (구.농협송정지소)</li>
						<li>25분 / 56분 파라다이스 APT (재활용센터 건너편)(구.시청 건너편)</li>
						<li>27분 / 57분 송정동 현대아파트 후문</li>
						<li>30분 / 00분 제일학원 길건너 (경안천 입구)</li>
						<li>36분 / 6분 센터도착</li>
					</ol>
				</div>
			</div>
		</section>
		<section class="attendance">
			<div class="container">
				<div class="section-header">
					<h3>출근버스</h3>
					<p>천호역 - 광주센터</p>
				</div>
				<div class="section-content">
					<img class="img-responsive" src="/mobile/images/introduce/bus7.gif">
					<ol class="sr-only">
						<li>7시 30분 천호역</li>
						<li>7시 34분 강동역</li>
						<li>7시 38분 길동사거리</li>
						<li>7시 46분 상일초등학교</li>
						<li>8시 20분 광주센터 도착</li>
					</ol>
				</div>
			</div>
		</section>
		<section class="finish">
			<div class="container">
				<div class="section-header">
					<h3>퇴근버스</h3>
					<p>광주센터 - 천호역</p>
				</div>
				<div class="section-content">
					<img class="img-responsive" src="/mobile/images/introduce/bus8.gif">
					<ol class="sr-only">
						<li>18시 30분 센터출발</li>
						<li>19시 10분 상일초등학교</li>
						<li>19시 20분 길동사거리</li>
						<li>19시 25분 강동역</li>
						<li>19시 30분 천호역 도착</li>
					</ol>
				</div>
			</div>
		</section>
		<section class="schedule">
			<div class="container">
				<div class="section-header">
					<h3>출발시간</h3>
				</div>
				<div class="section-content">
					<div class="table-wrap">
						<table class="table">
							<colgroup>
								<col>
							</colgroup>
							<thead>
								<th>출발시간</th>
							</thead>
							<tbody>
								<tr>
									<td>07:30<br><p>출근버스</p></td>
								</tr>
								<tr>
									<td>09:10</td>
								</tr>
								<tr>
									<td>09:40</td>
								</tr>
								<tr>
									<td>10:10</td>
								</tr>
								<tr>
									<td>10:40</td>
								</tr>
								<tr>
									<td>11:10</td>
								</tr>
								<tr>
									<td>11:40</td>
								</tr>
								<tr>
									<td>13:10</td>
								</tr>
								<tr>
									<td>13:40</td>
								</tr>
								<tr>
									<td>14:10</td>
								</tr>
								<tr>
									<td>14:40</td>
								</tr>
								<tr>
									<td>15:40</td>
								</tr>
								<tr>
									<td>16:40</td>
								</tr>
								<tr>
									<td>17:40</td>
								</tr>
								<tr>
									<td>07:30<br><p>퇴근버스</p></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
	</main> 
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>