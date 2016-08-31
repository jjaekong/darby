<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/css/introduce.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <div class="page-path">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#">병원소개</a></li>
                <li class="active">오시는 길</li>
            </ol>
        </div>
    </div>
    <main id="content" class="introduce location"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
        <div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
            <h2>오시는 길</h2>
            <small>Location</small>
        </div>
        
        <!-- 실제 작업 영역 -->
        <div class="container">
			<p class="viewMap"><a href="javascript:;" id="viewMap"><img src="../images/introduce/icon_map.gif" alt=""/>지도보기</a></p>
            <ul class="nav nav-pills nav-justified">
                <li role="presentation"><a href="bus.php">셔틀버스 이용</a></li>
                <li role="presentation" class="active"><a href="public.php">대중교통 이용</a></li>
                <li role="presentation"><a href="car.php">자가용 이용</a></li>
                <li role="presentation"><a href="http://dmaps.kr/27w7c" target="_blank">길찾기</a></li>
            </ul>
        </div>
		
		<div class="locationTit" style="margin-top:40px;">
			<img src="../images/icon_title.png" alt=""/>
			<h1><b>대중교통 이용</b></h1>
			<p>대중교통 이용시 광주시 보건소 (나산화원) 앞 또는 경안동사무소앞에서 하차하여 <i>* SRC재활병원 셔틀버스나 택시를 이용바랍니다.(10분 소요)</i></p>
		</div>
		<div class="container">
			<ul class="public">
				<li>
					<p><img src="../images/introduce/public_img01.gif" alt="강변역 2호선"/></p>
					테크노마트 좌측 버스정류장<br />직행좌석 1113번, 1113 - 1번
				</li>
				<li>
					<p><img src="../images/introduce/public_img02.gif" alt="잠실역 2호선"/></p>
					주공5단지 방향 출구 버스정류장<br />일반버스 32번
				</li>
				<li>
					<p><img src="../images/introduce/public_img03.gif" alt="모란역 8호선"/></p>
					시외버스터비널 방면 버스정류장<br />3번, 3-3번, 31-1번, 32번
				</li>
			</ul>
		</div>
		<!-- 실제 작업 영역 -->
		<div id="popWrap" style="position:absolute;top:0px;width:100%;height:100%;background:#000;opacity:85;filter:alpha(opacity=85);z-index:99999;" class="dnone" >
			<div id="popMap">
				<p><a href="javascript:;" id="mapClose"><img src="../images/introduce/btn_close.png" alt="닫기"/></a></p>
				<div class="map" id="edu_map"></div>
				<span>Adress : 경기도 광주시 초월읍 지월리 729-6   /   Tel : 1577-3622</span>
			</div>
		</div>
		<!-- // 실제 작업 영역 -->
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
	<script type="text/javascript" src="//apis.daum.net/maps/maps3.js?apikey=5c7d369e0bfc7e62b9e3eb12abe7884e&libraries=services"></script>
	<script type="text/javascript">
	$(document).on("click", "#viewMap", function(){
		$("body,html").css({"height":$(window).height()+"px","overflow":"hidden"});
		$("#popWrap").removeClass("dnone");

		var mapContainer = document.getElementById('edu_map'), // 지도를 표시할 div 
			mapOption = {
				center: new daum.maps.LatLng(0,0), // 지도의 중심좌표
				level: 3 // 지도의 확대 레벨
			};  

		// 지도를 생성합니다    
		var map = new daum.maps.Map(mapContainer, mapOption); 

		// 주소-좌표 변환 객체를 생성합니다
		var geocoder = new daum.maps.services.Geocoder();

		// 주소로 좌표를 검색합니다
		geocoder.addr2coord('경기도 광주시 초월읍 지월리 729-6', function(status, result) {
			// 정상적으로 검색이 완료됐으면 
			 if (status === daum.maps.services.Status.OK) {
				var coords = new daum.maps.LatLng(result.addr[0].lat, result.addr[0].lng);
				map.setCenter(coords);
				// 결과값으로 받은 위치를 마커로 표시합니다
				var marker = new daum.maps.Marker({
					map: map,
					position: coords
				});

				var zoomControl = new daum.maps.ZoomControl();
				map.addControl(zoomControl, daum.maps.ControlPosition.RIGHT);
				var mapTypeControl = new daum.maps.MapTypeControl();
				map.addControl(mapTypeControl, daum.maps.ControlPosition.TOPRIGHT);

				// 인포윈도우로 장소에 대한 설명을 표시합니다
				var infowindow = new daum.maps.InfoWindow({
					content: '<div style="padding:5px;">사회복지법인 SRC 병원</div>'
				});
				infowindow.open(map, marker);
			} 
		});

	});
	$(document).on("click", "#mapClose", function(){
		$("#popWrap").addClass("dnone");
		$("body,html").css({"overflow":"auto","height":$(document).height()+"px"});
		$("#edu_map").html('');
	});

	</script>
</body>
</html>