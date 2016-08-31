<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/introduce.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="introduce shuttle-three">
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
					<li role="presentation" class="active"><a href="/mobile/introduce/shuttle_three.php" role="tab">3호차</a></li>
					<li role="presentation"><a href="/mobile/introduce/shuttle_four.php" role="tab">4호차</a></li>
					<li role="presentation"><a href="/mobile/introduce/shuttle_five.php" role="tab">5호차</a></li>
				</ul>
			</div>
		</nav>
		<section class="route-one">
			<div class="section-header">
				<h3>3호차<i>광주시내 방면</i></h3>
				<p>
					첫차와 막차 시간을 제외한 시간에는<br>9시5분 부터 매 시간 5분에 운행됩니다.<br>(셔틀버스는 매시간 운행하며,<br>13시 점심시간에는 운행을 하지 않습니다.)
				</p>
			</div>
			<div class="section-content">
				<div class="container">
					<img class="img-responsive" src="/mobile/images/introduce/bus4.gif">
					<ol class="sr-only">
						<li>5분 센터출발</li>
						<li>8분 비둘기 공원 앞</li>
						<li>10분 우림 APT 앞 (도평리)</li>
						<li>11분 대주 APT 앞 (신일APT 앞)</li>
						<li>12분 GS편의점 앞</li>
						<li>13분 신일 APT GS철강 앞</li>
						<li>15분 용수리 버스정류장</li>
						<li>17분 월드마트</li>
						<li>20분 선동사거리</li>
						<li>23분 늑현리 버스정류장</li>
						<li>25분 킴스 APT 앞 (킴스마트) *19시~21시 무정차</li>
						<li>9~17시 무정차 곤지암터미널 앞</li>
						<li>9~17시 무정차 곤지암 구.읍사무소</li>
						<li>26분 킴스 / 현진 ATP 앞 (기업은행)</li>
						<li>27분 빙그레 입구 건너편</li>
						<li>28분 하나로마트 앞 (구.나이키)</li>
						<li>30분 경기주유소 건너편</li>
						<li>32분 롯데낙천대 / APT 건너편</li>
						<li>33분 동광 / 편한세상 APT 건너편</li>
						<li>36분 초월 읍사무소 건너편</li>
						<li>38분 남촌 주유소 건너편</li>
						<li>39분 현대 / 동성 APT 앞</li>
						<li>41분 쌍령동 앞</li>
						<li>43분 브라운스톤 APT 건너편</li>
						<li>48분 센터도착</li>
					</ol>
				</div>
			</div>
		</section>
		<section class="schedule">
			<div class="container">
				<div class="section-header">
					<h3>첫차 / 막차 시간</h3>
				</div>
				<div class="section-content">
					<div class="table-wrap">
						<table class="table">
							<colgroup>
								<col style="width: 100px">
								<col style="width: 73px">
								<col style="width: 73px">
								<col style="width: 74px">
							</colgroup>
							<thead>
								<th>정류장</th>
								<th>첫차</th>
								<th>막차</th>
								<th>토요일 첫차</th>
							</thead>
							<tbody>
								<tr>
									<td>센터출발</td>
									<td>센터출발</td>
									<td>07:30</td>
									<td>07:58</td>
								</tr>
								<tr>
									<td>비둘기 공원 앞</td>
									<td>07:33</td>
									<td>18:20</td>
									<td>07:59</td>
								</tr>
								<tr>
									<td>우림 APT 앞<br>(도평리)</td>
									<td>07:35</td>
									<td>18:23</td>
									<td>08:00</td>
								</tr>
								<tr>
									<td>대주 APT 앞<br>(신일 APT 건너편)</td>
									<td>07:36</td>
									<td>18:26</td>
									<td>08:02</td>
								</tr>
								<tr>
									<td>GS편의점 앞</td>
									<td>07:37</td>
									<td>18:27</td>
									<td>08:04</td>
								</tr>
								<tr>
									<td>신일 APT<br>GS 철강 앞</td>
									<td>07:38</td>
									<td>18:28</td>
									<td>08:07</td>
								</tr>
								<tr>
									<td>용수리<br>버스정류장</td>
									<td>07:40</td>
									<td>18:30</td>
									<td>08:10</td>
								</tr>
								<tr>
									<td>월드마트</td>
									<td>07:42</td>
									<td>18:32</td>
									<td>08:13</td>
								</tr>
								<tr>
									<td>선동사거리</td>
									<td>07:45</td>
									<td>18:35</td>
									<td>08:15</td>
								</tr>
								<tr>
									<td>늑현리<br>버스정류장</td>
									<td>07:50</td>
									<td>18:38</td>
									<td>-</td>
								</tr>
								<tr>
									<td>킴스 APT 앞<br>(킴스마트)</td>
									<td>-</td>
									<td>18:40</td>
									<td>08:20</td>
								</tr>
								<tr>
									<td>곤지암터미널 앞</td>
									<td>08:00</td>
									<td>18:50</td>
									<td>08:21</td>
								</tr>
								<tr>
									<td>곤지암<br>구. 읍사무소</td>
									<td>08:02</td>
									<td>18:52</td>
									<td>08:25</td>
								</tr>
								<tr>
									<td>킴스 / 현진 APT 앞<br>(기업은행)</td>
									<td>08:09</td>
									<td>18:57</td>
									<td>08:27</td>
								</tr>
								<tr>
									<td>빙그레 입구<br>건너편</td>
									<td>08:10</td>
									<td>18:59</td>
									<td>08:28</td>
								</tr>
								<tr>
									<td>하나로마트 앞<br>(구. 나이키)</td>
									<td>08:11</td>
									<td>19:00</td>
									<td>08:30</td>
								</tr>
								<tr>
									<td>경기주유소 건너편</td>
									<td>08:13</td>
									<td>19:02</td>
									<td>08:32</td>
								</tr>
								<tr>
									<td>롯데낙천대 / APT<br>건너편</td>
									<td>08:15</td>
									<td>19:04</td>
									<td>08:33</td>
								</tr>
								<tr>
									<td>동광 / e편한세상<br>APT 건너편</td>
									<td>08:16</td>
									<td>19:05</td>
									<td>08:36</td>
								</tr>
								<tr>
									<td>초월읍사무소<br>건너편</td>
									<td>08:19</td>
									<td>19:08</td>
									<td>08:38</td>
								</tr>
								<tr>
									<td>남촌주유소<br>건너편</td>
									<td>08:21</td>
									<td>19:10</td>
									<td>08:39</td>
								</tr>
								<tr>
									<td>현대 /<br>동성 APT 앞</td>
									<td>08:22</td>
									<td>19:11</td>
									<td>08:41</td>
								</tr>
								<tr>
									<td>쌍령동 앞</td>
									<td>08:24</td>
									<td>19:13</td>
									<td>08:43</td>
								</tr>
								<tr>
									<td>브라운스톤 APT<br>건너편</td>
									<td>08:26</td>
									<td>19:15</td>
									<td>08:48</td>
								</tr>
								<tr>
									<td>센터도착</td>
									<td>08:31</td>
									<td>19:21</td>
									<td>-</td>
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
					<h3>주말버스 운행 시간</h3>
				</div>
				<div class="section-content">
					<div class="table-wrap">
						<table class="table">
							<colgroup>
								<col>
							</colgroup>
							<thead>
								<th>주말버스 운행시간</th>
							</thead>
							<tbody>
								<tr>
									<td>07:05</td>
								</tr>
								<tr>
									<td>09:05</td>
								</tr>
								<tr>
									<td>11:05</td>
								</tr>
								<tr>
									<td>12:05</td>
								</tr>
								<tr>
									<td>14:05</td>
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