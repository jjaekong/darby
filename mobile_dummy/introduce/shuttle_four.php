<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/introduce.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="introduce shuttle-four">
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
					<li role="presentation" class="active"><a href="/mobile/introduce/shuttle_four.php" role="tab">4호차</a></li>
					<li role="presentation"><a href="/mobile/introduce/shuttle_five.php" role="tab">5호차</a></li>
				</ul>
			</div>
		</nav>
		<section class="route-one">
			<div class="section-header">
				<h3>4호차<i>시내 이마트 방면</i></h3>
				<p>매시간 2회 운행합니다.<br>(매시간 정각, 30분 센터출발,<br> 12시, 12시 30분 점심시간에는 운행을 하지 않습니다.)</p>
				<p>도로 여건에 따라 도착시간이 변동 될 수 있습니다.</p>
			</div>
			<div class="section-content">
				<div class="container">
					<img class="img-responsive" src="/mobile/images/introduce/bus5.gif">
					<ol class="sr-only">
						<li>정각 / 30분 센터출발</li>
						<li>5분 / 35분 제일학원 (경화여고 입구)</li>
						<li>7분 / 37분 참좋은병원 앞 (E마트 건너편)</li>
						<li>8분 / 38분 국민은행 경안지점 앞</li>
						<li>9분 / 39분 형제종합철물건재 (광주클리닉 건너편)</li>
						<li>10분 / 40분 농협 (우체국 건너편)</li>
						<li>11분 / 41분 롯데리아 앞 (제일정형외과)</li>
						<li>12분 / 42분 서울보증보험 앞 (구.농협송정지소)</li>
						<li>13분 / 43분 파라다이스 APT (재활용센터 건너편) (구.시청 건너편)</li>
						<li>14분 / 44분 송정동 현대아파트 후문</li>
						<li>15분 / 45분 제일학원 길건너 (경안천 입구)</li>
						<li>20분 / 50분 센터 도착</li>
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
									<td>07:00</td>
								</tr>
								<tr>
									<td>08:00</td>
								</tr>
								<tr>
									<td>08:30</td>
								</tr>
								<tr>
									<td>09:00</td>
								</tr>
								<tr>
									<td>09:30</td>
								</tr>
								<tr>
									<td>10:00</td>
								</tr>
								<tr>
									<td>10:30</td>
								</tr>
								<tr>
									<td>11:00</td>
								</tr>
								<tr>
									<td>11:30</td>
								</tr>
								<tr>
									<td>13:00</td>
								</tr>
								<tr>
									<td>13:30</td>
								</tr>
								<tr>
									<td>14:00</td>
								</tr>
								<tr>
									<td>14:30</td>
								</tr>
								<tr>
									<td>15:00</td>
								</tr>
								<tr>
									<td>16:00</td>
								</tr>
								<tr>
									<td>17:00</td>
								</tr>
								<tr>
									<td>18:20</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
		<section class="weekend">
			<div class="container">
				<div class="section-header">
					<h3>주말운행시간</h3>
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
									<td>08:30</td>
								</tr>
								<tr>
									<td>09:00</td>
								</tr>
								<tr>
									<td>09:30</td>
								</tr>
								<tr>
									<td>10:00</td>
								</tr>
								<tr>
									<td>10:30</td>
								</tr>
								<tr>
									<td>11:00</td>
								</tr>
								<tr>
									<td>11:30</td>
								</tr>
								<tr>
									<td>13:00</td>
								</tr>
								<tr>
									<td>13:30</td>
								</tr>
								<tr>
									<td>14:00</td>
								</tr>
								<tr>
									<td>14:30</td>
								</tr>
								<tr>
									<td>15:00</td>
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