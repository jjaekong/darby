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
					<a href="javascript:;" onclick="showmap();">지도보기</a>
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