<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/introduce.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="introduce shuttle-two">
		<div class="page-title">
			<h2>
				오시는길<br>
				<small>Location</small>
			</h2>
		</div>
		<nav class="tabmenu-wrap">
			<div class="container">
				<p>
					<a href="javascript:;" onclick="showmap();">지도보기</a>
				</p>
				<ol class="tab-menu">
					<li class="active"><a href="/mobile/introduce/location.php">셔틀버스<br>이용</a></li>
					<li><a href="/mobile/introduce/public.php">대중교통<br>이용</a></li>
					<li><a href="/mobile/introduce/car.php">자가용<br>이용</a></li>
					<li><a href="#">길찾기</a></li>
				</ol>
				 <ul class="category" role="tablist">
					<li role="presentation"><a href="/mobile/introduce/location.php" role="tab">1호차</a></li>
					<li role="presentation" class="active"><a href="/mobile/introduce/shuttle_two.php" role="tab">2호차</a></li>
					<li role="presentation"><a href="/mobile/introduce/shuttle_three.php" role="tab">3호차</a></li>
					<li role="presentation"><a href="/mobile/introduce/shuttle_four.php" role="tab">4호차</a></li>
					<li role="presentation"><a href="/mobile/introduce/shuttle_five.php" role="tab">5호차</a></li>
				</ul>
			</div>
		</nav>
		<section class="route-one">
			<div class="section-header">
				<h3>2호차<i>광주시내 방면</i></h3>
				<p>첫차와 막차를 제외하고 매시간 1대씩 운행 됩니다. <br> (매시간 5분 센터출발)</p>
				<p>도로여건에 따라 도착시간이 변동될수 있으며, <br> 13시 점심시간에는 운행을 하지 않습니다.</p>
			</div>
			<div class="section-content">
				<div class="container">
					<img class="img-responsive" src="/mobile/images/introduce/bus3.gif">
					<ol class="sr-only">
						<li>5분 센터출발</li>
						<li>17분 장지리 경인중 앞</li>
						<li>18분 정자 2동 버스정류장</li>
						<li>19분 GS 편의점 앞</li>
						<li>20분 태전 / 현대APT 앞</li>
						<li>21분 미진 APT 앞</li>
						<li>23분 광남동사무소 앞</li>
						<li>24분 태전 / 쌍용APT 앞</li>
						<li>25분 광남중학교 입구</li>
						<li>27분 오포소방서 앞</li>
						<li>30분 대주 2차 대성 APT 앞</li>
						<li>32분 매곡초등학교 앞</li>
						<li>34분 양벌초등학교 앞</li>
						<li>36분 쌍용 APT 앞</li>
						<li>37분 세경자동차 공업사 앞</li>
						<li>38분 쌍령리 로타리</li>
						<li>43분 브라운스톤 APT 건너편</li>
						<li>42분 센터도착</li>
					</ol>
				</div>
			</div>
		</section>
		<section class="schedule">
			<div class="container">
				<div class="section-header">
					<h3>운행시간</h3>
					<p>첫차와 막차를 제외하고 매시간 1대 운행<br>(매시간 5분 센터 출발)</p>
				</div>
				<div class="section-content">
					<div class="table-wrap">
						<table class="table">
							<colgroup>
								<col>
								<col>
								<col>
							</colgroup>
							<thead>
								<th>정류장</th>
								<th>첫차</th>
								<th>막차</th>
							</thead>
							<tbody>
								<tr>
									<td>센터출발</td>
									<td>07:40</td>
									<td>18:20</td>
								</tr>
								<tr>
									<td>장지리 경인중 앞</td>
									<td>07:52</td>
									<td>18:32</td>
								</tr>
								<tr>
									<td>정자2동<br>버스정류장</td>
									<td>07:53</td>
									<td>18:33</td>
								</tr>
								<tr>
									<td>GS편의점 앞</td>
									<td>07:54</td>
									<td>18:34</td>
								</tr>
								<tr>
									<td>태전 / 현대 APT 앞</td>
									<td>07:55</td>
									<td>18:35</td>
								</tr>
								<tr>
									<td>미진 APT 앞</td>
									<td>07:56</td>
									<td>18:36</td>
								</tr>
								<tr>
									<td>광남동사무소 앞<br>(성원 APT)</td>
									<td>07:58</td>
									<td>18:38</td>
								</tr>
								<tr>
									<td>태전쌍용 APT 앞</td>
									<td>07:59</td>
									<td>18:39</td>
								</tr>
								<tr>
									<td>광남중학교 입구</td>
									<td>08:00</td>
									<td>18:40</td>
								</tr>
								<tr>
									<td>오포소방서 앞</td>
									<td>08:02</td>
									<td>18:42</td>
								</tr>
								<tr>
									<td>대주 2차<br>대성 APT앞</td>
									<td>08:05</td>
									<td>18:45</td>
								</tr>
								<tr>
									<td>매곡초등학교 앞</td>
									<td>08:07</td>
									<td>18:47</td>
								</tr>
								<tr>
									<td>양벌초등학교 입구</td>
									<td>08:09</td>
									<td>18:49</td>
								</tr>
								<tr>
									<td>쌍용 APT 앞</td>
									<td>08:11</td>
									<td>18:50</td>
								</tr>
								<tr>
									<td>세경자동차<br>공업사 앞</td>
									<td>08:12</td>
									<td>18:51</td>
								</tr>
								<tr>
									<td>쌍령리 로타리</td>
									<td>08:13</td>
									<td>18:52</td>
								</tr>
								<tr>
									<td>브라운스톤 APT<br>건너편</td>
									<td>08:18</td>
									<td>18:57</td>
								</tr>
								<tr>
									<td>센터도착</td>
									<td>08:23</td>
									<td>19:02</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
		<!-- The Modal -->
		<div id="map-modal" class="layer" style="display:none;">
		  <!-- Modal content -->
		  <div class="layer-content">
			<div class="btn-area">
				<p><a href="javascript:;" onclick="$('#map-modal').hide();"><img src="/mobile/images/introduce/close.png" alt="close"></a></p>
			</div>
			<div id="edu_map" style="width:100%;height:300px;">
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
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script>
	var geocoder;
	var map;
	function google_init() {
		geocoder = new google.maps.Geocoder();
		var myLatlng = new google.maps.LatLng('>', '');
		var myOptions = {
			zoom: 17,
			center: myLatlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}

		var map = new google.maps.Map(document.getElementById("edu_map"), myOptions);

		var image = "";

		var marker = new google.maps.Marker({
			position: myLatlng, 
			map: map,
			icon: image
		});

		
		var address = "경기도 광주시 초월읍 지월리 729-6";
		geocoder.geocode( { 'address': address}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				map.setCenter(results[0].geometry.location);
				var marker = new google.maps.Marker({
					map: map, 
					position: results[0].geometry.location,
					icon: image
				});
			} else {
				alert("Geocode was not successful for the following reason: " + status);
			}
		});
	}

	function showmap(){
		$('#map-modal').show();
		google_init();
	}
	</script>
</body>
</html>