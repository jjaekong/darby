<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/introduce.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="introduce location">
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
					<li role="presentation" class="active"><a href="/mobile/introduce/location.php" role="tab">1호차</a></li>
					<li role="presentation"><a href="/mobile/introduce/shuttle_two.php" role="tab">2호차</a></li>
					<li role="presentation"><a href="/mobile/introduce/shuttle_three.php" role="tab">3호차</a></li>
					<li role="presentation"><a href="/mobile/introduce/shuttle_four.php" role="tab">4호차</a></li>
					<li role="presentation"><a href="/mobile/introduce/shuttle_five.php" role="tab">5호차</a></li>
				</ul>
			</div>
		</nav>
		<section class="route-one">
			<div class="section-header">
				<h3>1호차<i>광주시내 방면</i></h3>
				<p>1시간 간격으로 1대씩, 매 시간 10분에 운행됩니다.<br>(도로여건에 따라 도착시간이 변동될 수 있습니다.)</p>
				<p>첫차 : 6시10분 / 막차 : 21시 <br> (셔틀버스는 매시간 운행하며,<br> 13시 점심시간에는 운행을 하지 않습니다. </p>
			</div>
			<div class="section-content">
				<div class="container">
					<img class="img-responsive" src="/mobile/images/introduce/bus1.gif">
					<ol class="sr-only">
						<li>10분 센터출발</li>
						<li>12분 브라운스톤 APT 앞</li>
						<li>14분 경화여중, 경화여고 입구</li>
						<li>17분 파라다이스 APT 앞</li>
						<li>21분 나산 APT 보건소 건너편 꽃집 앞</li>
						<li>20분 광주시 노인복지종합관 *10시~21시 무정차</li>
						<li>22분 동보·현대 APT *19시~21시 무정차</li>
						<li>23분 두진 APT 앞 *19시~21시 무정차</li>
						<li>24분 신용협동조합</li>
						<li>26분 시립도서관 (광주문화원입구)</li>
						<li>27분 서산칼국수 (롯데슈퍼 건너편)</li>
						<li>28분 김미옥 (역말 주유소 건너편)</li>
						<li>29분 역동공용주차장 (구 3번주차장)</li>
						<li>30분 축협건너편 (버스 정류장)</li>
						<li>31분 농협중앙회 (우체국 건너편)</li>
						<li>32분 롯데리아 (제일정형외과)</li>
						<li>33분 제일학원 건너편 (경안천 입구)</li>
						<li>34분 우림필유 건너편 (버스 정류장)</li>
						<li>35분 브라운스톤 APT 건너편 (밥보장터 앞)</li>
						<li>42분 센터도착</li>
					</ol>
				</div>
			</div>
		</section>
		<section class="route-two">
			<div class="container">
				<div class="section-header">
					<h3>1호차 <i>주말 단축운행</i></h3>
					<p>13시 점심시간에는 운행을 하지 않습니다.</p>
				</div>
				<div class="section-content">
					<img class="img-responsive" src="/mobile/images/introduce/bus2.gif">
					<ol class="sr-only">
						<li>10분 센터출발</li>
						<li>12분 참조은병원 앞</li>
						<li>20분 농협중앙회 (우체국 건너편)</li>
						<li>23분 운동장 버스정류장(보건소 건너편)</li>
						<li>25분 제일학원 길건너 (경안천 입구)</li>
						<li>35분 센터도착</li>
					</ol>
				</div>
			</div>
		</section>
		<section class="weekend">
			<div class="container">
				<div class="section-header">
					<h3>운행시간</h3>
					<p>매시간 1대씩 운행</p>
					<p>07:10분 부터 15:10까지는 정상운행시간입니다.<br>(광주시내방면 참조)</p>
				</div>
				<div class="section-content">
					<div class="table-wrap">
						<table class="table">
							<colgroup>
								<col>
								<col>
								<col>
							</colgroup>
							<tbody>
								<tr>
									<th>출발시간</th>
									<td>토요일</td>
									<td>일요일</td>
								</tr>
								<tr>
									<th>07:10</th>
									<td>정상운행</td>
									<td>단축운행</td>
								</tr>
								<tr>
									<th>08:10</th>
									<td>정상운행</td>
									<td>-</td>
								</tr>
								<tr>
									<th>09:10</th>
									<td>정상운행</td>
									<td>단축운행</td>
								</tr>
								<tr>
									<th>10:10</th>
									<td>정상운행</td>
									<td>-</td>
								</tr>
								<tr>
									<th>11:10</th>
									<td>정상운행</td>
									<td>단축운행</td>
								</tr>
								<tr>
									<th>12:10</th>
									<td>정상운행</td>
									<td>-</td>
								</tr>
								<tr>
									<th>13:10</th>
									<td>-</td>
									<td>-</td>
								</tr>
								<tr>
									<th>14:10</th>
									<td>정상운행</td>
									<td>-</td>
								</tr>
								<tr>
									<th>15:10</th>
									<td>정상운행</td>
									<td>단축운행</td>
								</tr>
								<tr>
									<th>16:10</th>
									<td>-</td>
									<td>-</td>
								</tr>
								<tr>
									<th>17:10</th>
									<td>단축운행</td>
									<td>단축운행</td>
								</tr>
								<tr>
									<th>18:10</th>
									<td>단축운행</td>
									<td>단축운행</td>
								</tr>
								<tr>
									<th>19:10</th>
									<td>단축운행</td>
									<td>단축운행</td>
								</tr>
								<tr>
									<th>20:10</th>
									<td>단축운행</td>
									<td>단축운행</td>
								</tr>
								<tr>
									<th>21:10</th>
									<td>단축운행</td>
									<td>단축운행</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>

		

<!-- The Modal -->
<div id="map-modal" class="layer">
  <!-- Modal content -->
  <div class="layer-content">
	<div class="btn-area">
		<p><a href="#"><img src="/mobile/images/introduce/close.png" alt="close"></a></p>
	</div>
	<div>
		<img class="img-responsive" src="/mobile/images/introduce/map.gif" alt="지도">
	</div>
	<dl>
		<dt><img src="/mobile/images/introduce/map_ico.png" alt="주소"></dt>
		<dd><a href="#">경기도 광주시 초월읍 지월리 729-6</a></dd>
		<dt><img src="/mobile/images/introduce/tel_ico.png" alt="전화번호"></dt>
		<dd><a href="#">1577-3622</a></dd>
	</dl>
  </div>
</div>
	</main> 
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>