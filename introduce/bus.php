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
				<li role="presentation" class="active"><a href="bus.php">셔틀버스 이용</a></li>
				<li role="presentation"><a href="public.php">대중교통 이용</a></li>
				<li role="presentation"><a href="car.php">자가용 이용</a></li>
                <li role="presentation"><a href="http://dmaps.kr/27w7c" target="_blank">길찾기</a></li>
			</ul>
			<div class="tabArea">
				<ul class="tab02" role="tablist">
					<li role="presentation" class="active"><a href="#nav-content-1" aria-controls="nav-content-1" role="tab" data-toggle="tab">1호차</a></li>
					<li role="presentation"><a href="#nav-content-2" aria-controls="nav-content-2" role="tab" data-toggle="tab">2호차</a></li>
					<li role="presentation"><a href="#nav-content-3" aria-controls="nav-content-3" role="tab" data-toggle="tab">3호차</a></li>
					<li role="presentation"><a href="#nav-content-4" aria-controls="nav-content-4" role="tab" data-toggle="tab">4호차</a></li>
					<li role="presentation"><a href="#nav-content-5" aria-controls="nav-content-5" role="tab" data-toggle="tab">5호차</a></li>
				</ul>
			</div>
		</div>
		
		<div class="tab-content">
			<!--1호차-->
			<div role="tabpanel" class="tab-pane active" id="nav-content-1">
				<div class="locationTit">
					<img src="../images/icon_title.png" alt=""/>
					<h1><b>1호차</b> 광주시내 방면</h1>
					<p>* <b>1시간 간격으로 1대씩, 매 시간 10분에 운행됩니다</b> (도로여건에 따라 도착시간이 변동될 수 있습니다.)</p>
					<p>* 첫차 : 6시10분   /   막차 : 21시 (셔틀버스는 매시간 운행하며, 13시 점심시간에는 운행을 하지 않습니다.)</p>
				</div>
				<div class="container">
					<img src="../images/introduce/bus01_img01.gif" alt=""/>
					<hr />
					<p><b>1호차</b> 주말 단축운행<span> ( *13시 점심시간에는 운행을 하지 않습니다. )</span></p>
					<img src="../images/introduce/bus01_img02.gif" alt=""/>
					<h1>운행시간 <span>(매시간 1대씩 운행 )</span></h1>
					<img src="../images/introduce/bus01_img03.gif" alt=""/>
					<table class="table02">
						<colgroup>
							<col style="width:10%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
						</colgroup>
						<thead>
							<tr>
								<th>출발시간</th>
								<th>07:10</th>
								<th>08:10</th>
								<th>09:10</th>
								<th>10:10</th>
								<th>11:10</th>
								<th>12:10</th>
								<th>13:10</th>
								<th>14:10</th>
								<th>15:10</th>
								<th>16:10</th>
								<th>17:10</th>
								<th>18:10</th>
								<th>19:10</th>
								<th>20:10</th>
								<th>21:10</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>토요일</td>
								<td>단축운행</td>
								<td>정상운행</td>
								<td>정상운행</td>
								<td>정상운행</td>
								<td>정상운행</td>
								<td>정상운행</td>
								<td>-</td>
								<td>정상운행</td>
								<td>정상운행</td>
								<td>-</td>
								<td>단축운행</td>
								<td>단축운행</td>
								<td>단축운행</td>
								<td>단축운행</td>
								<td>단축운행</td>
							</tr>
							<tr>
								<td>일요일</td>
								<td>단축운행</td>
								<td>-</td>
								<td>단축운행</td>
								<td>-</td>
								<td>단축운행</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>단축운행</td>
								<td>-</td>
								<td>단축운행</td>
								<td>단축운행</td>
								<td>단축운행</td>
								<td>단축운행</td>
								<td>단축운행</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!--//1호차-->
			<!--2호차-->
			<div role="tabpanel" class="tab-pane" id="nav-content-2">
				<div class="locationTit">
					<img src="../images/icon_title.png" alt=""/>
					<h1><b>2호차</b> 광주외곽 방면 - 양벌리</h1>
					<p>* <b>첫차와 막차를 제외하고 매시간 1대씩 운행 됩니다. (매시간 5분 센터출발)</b></p>
					<p>* 도로 여건에 따라 도착시간이 변동될 수 있으며, 13시 점심시간에는 운행을 하지 않습니다.</p>
				</div>
				<div class="container">
					<img src="../images/introduce/bus02_img01.gif" alt=""/>
					<h1 style="margin-top:100px;">첫차 / 막차 시간 <span>(첫차와 막차를 제외하고 매시간 1대 운행 (매시간 5분 센터 출발) )</span></h1>
					<table class="table02">
						<colgroup>
							<col style="width:34%">
							<col style="width:33%">
							<col style="width:33%">
						</colgroup>
						<thead>
							<tr>
								<th>정류장</th>
								<th>첫차</th>
								<th>막차</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>센터출발</td>
								<td>07 : 40</td>
								<td>18 : 20</td>
							</tr>
							<tr>
								<td>장지리 경인중 앞</td>
								<td>07 : 52</td>
								<td>18 : 32</td>
							</tr>
							<tr>
								<td>정자2동 버스정류장</td>
								<td>07 : 53</td>
								<td>18 : 33</td>
							</tr>
							<tr>
								<td>GS편의점 앞</td>
								<td>07 : 54</td>
								<td>18 : 34</td>
							</tr>
							<tr>
								<td>태전 / 현대APT 앞</td>
								<td>07 : 55</td>
								<td>18 : 35</td>
							</tr>
							<tr>
								<td>미진 APT 앞</td>
								<td>07 : 56</td>
								<td>18 : 36</td>
							</tr>
							<tr>
								<td>광남동사무소 앞 (성원 APT)</td>
								<td>07 : 58</td>
								<td>18 : 38</td>
							</tr>
							<tr>
								<td>태전쌍용 APT 앞</td>
								<td>07 : 59</td>
								<td>18 : 39</td>
							</tr>
							<tr>
								<td>광남중학교 입구</td>
								<td>08 : 00</td>
								<td>18 : 42</td>
							</tr>
							<tr>
								<td>오포소방서 앞</td>
								<td>08 : 02</td>
								<td>18 : 42</td>
							</tr>
							<tr>
								<td>대주2차 대성 APT 앞</td>
								<td>08 : 05</td>
								<td>18 : 45</td>
							</tr>
							<tr>
								<td>매곡초등학교 앞</td>
								<td>08 : 07</td>
								<td>18 : 47</td>
							</tr>
							<tr>
								<td>양벌초등학교 입구</td>
								<td>08 : 09</td>
								<td>18 : 49</td>
							</tr>
							<tr>
								<td>쌍용APT 앞</td>
								<td>08 : 11</td>
								<td>18 : 50</td>
							</tr>
							<tr>
								<td>세경자동차 공업사 앞</td>
								<td>08 : 12</td>
								<td>18 : 51</td>
							</tr>
							<tr>
								<td>쌍령리 로타리</td>
								<td>08 : 13</td>
								<td>18 : 52</td>
							</tr>
							<tr>
								<td>브라운스톤 APT 건너편</td>
								<td>08 : 18</td>
								<td>18 : 57</td>
							</tr>
							<tr>
								<td><span>센터도착</span></td>
								<td>08 : 23</td>
								<td>17 : 02</td>
							</tr>
						</tbody>
					</table>
					<h1>주말버스 운행시간</h1>
					<table class="table02">
						<colgroup>
							<col style="width:16%">
							<col style="width:14%">
							<col style="width:14%">
							<col style="width:14%">
							<col style="width:14%">
							<col style="width:14%">
							<col style="width:14%">
						</colgroup>
						<tbody>
							<tr>
								<th>주말버스 운행시간</th>
								<td>08 : 05</td>
								<td>09 : 05</td>
								<td>10 : 05</td>
								<td>11 : 05</td>
								<td>12 : 05</td>
								<td>14 : 05</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!--//2호차-->
			<!--3호차-->
			<div role="tabpanel" class="tab-pane" id="nav-content-3">
				<div class="locationTit">
					<img src="../images/icon_title.png" alt=""/>
					<h1><b>3호차</b> 광주시내 방면</h1>
					<p>*첫차와 막차 시간을 제외한 시간에는 9시5분 부터 매 시간 5분에 운행됩니다. (셔틀버스는 매시간 운행하며, 13시 점심시간에는 운행을 하지 않습니다.)</p>
				</div>
				<div class="container">
					<img src="../images/introduce/bus03_img01.gif" alt=""/>
					<h1 style="margin-top:100px;">첫차 / 막차 시간</h1>
					<table class="table02">
						<colgroup>
							<col style="width:25%">
							<col style="width:25%">
							<col style="width:25%">
							<col style="width:25%">
						</colgroup>
						<thead>
							<tr>
								<th>정류장</th>
								<th>첫차</th>
								<th>막차</th>
								<th>토요일 첫차</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>센터출발</td>
								<td>07 : 30</td>
								<td>18 : 20</td>
								<td>07 : 58</td>
							</tr>
							<tr>
								<td>비둘기 공원 앞</td>
								<td>07 : 33</td>
								<td>18 : 23</td>
								<td>07 : 59</td>
							</tr>
							<tr>
								<td>우림 APT 앞 (도평리)</td>
								<td>07 : 35</td>
								<td>18 : 25</td>
								<td>08 : 00</td>
							</tr>
							<tr>
								<td>대주 APT 앞 (신일 APT 건너편)</td>
								<td>07 : 36</td>
								<td>18 : 26</td>
								<td>08 : 02</td>
							</tr>
							<tr>
								<td>GS 편의점 앞</td>
								<td>07 : 37</td>
								<td>18 : 27</td>
								<td>08 : 04</td>
							</tr>
							<tr>
								<td>신일 APT GS철강 앞</td>
								<td>07 : 38</td>
								<td>18 : 28</td>
								<td>08 : 07</td>
							</tr>
							<tr>
								<td>용수리 버스정류장</td>
								<td>07 : 40</td>
								<td>18 : 30</td>
								<td>08 : 10</td>
							</tr>
							<tr>
								<td>월드마트</td>
								<td>07 : 42</td>
								<td>18 : 32</td>
								<td>08 : 13</td>
							</tr>
							<tr>
								<td>선동사거리</td>
								<td>07 : 45</td>
								<td>18 : 35</td>
								<td>08 : 15</td>
							</tr>
							<tr>
								<td>늑현리 버스정류장</td>
								<td>07 : 50</td>
								<td>18 : 38</td>
								<td>-</td>
							</tr>
							<tr>
								<td>킴스 APT 앞 (킴스마트)</td>
								<td>-</td>
								<td>18 : 40</td>
								<td>08 : 20</td>
							</tr>
							<tr>
								<td>곤지암터미널 앞</td>
								<td>08 : 00</td>
								<td>18 : 50</td>
								<td>08 : 21</td>
							</tr>
							<tr>
								<td>곤지암 구. 읍사무소</td>
								<td>08 : 02</td>
								<td>18 : 52</td>
								<td>08 : 25</td>
							</tr>
							<tr>
								<td>킴스 / 현진 APT 앞 (기업은행)</td>
								<td>08 : 09</td>
								<td>18 : 57</td>
								<td>08 : 27</td>
							</tr>
							<tr>
								<td>빙그레 입구 건너편</td>
								<td>08 : 10</td>
								<td>18 : 59</td>
								<td>08 : 28</td>
							</tr>
							<tr>
								<td>하나로마트 앞 (구. 나이키)</td>
								<td>08 : 11</td>
								<td>19 : 00</td>
								<td>08 : 30</td>
							</tr>
							<tr>
								<td>경기주유소 건너편</td>
								<td>08 : 13</td>
								<td>19 : 02</td>
								<td>08 : 32</td>
							</tr>
							<tr>
								<td>롯데낙천대 / APT 건너편</td>
								<td>08 : 15</td>
								<td>19 : 04</td>
								<td>08 : 33</td>
							</tr>
							<tr>
								<td>동광 / e편한세상 APT 건너편</td>
								<td>08 : 16</td>
								<td>19 : 05</td>
								<td>08 : 36</td>
							</tr>
							<tr>
								<td>초월 읍사무소 건너편</td>
								<td>08 : 19</td>
								<td>19 : 08</td>
								<td>08 : 38</td>
							</tr>
							<tr>
								<td>남촌 주유소 건너편</td>
								<td>08 : 21</td>
								<td>19 : 10</td>
								<td>08 : 39</td>
							</tr>
							<tr>
								<td>현대 / 동성 APT 앞</td>
								<td>08 : 22</td>
								<td>19 : 11</td>
								<td>08 : 41</td>
							</tr>
							<tr>
								<td>쌍령동 앞</td>
								<td>08 : 24</td>
								<td>19 : 13</td>
								<td>08 : 43</td>
							</tr>
							<tr>
								<td>브라운스톤 APT 건너편</td>
								<td>08 : 26</td>
								<td>19 : 15</td>
								<td>08 : 48</td>
							</tr>
							<tr>
								<td><span>센터도착</span></td>
								<td>08 : 31</td>
								<td>19 : 21</td>
								<td>-</td>
							</tr>
						</tbody>
					</table>
					<h1 style="margin-top:100px;">주말버스 운행시간</h1>
					<table class="table02">
						<colgroup>
							<col style="width:18%">
							<col style="width:16%">
							<col style="width:16%">
							<col style="width:16%">
							<col style="width:16%">
							<col style="width:16%">
						</colgroup>
						<tbody>
							<tr>
								<th>주말버스 운행시간</th>
								<td>07 : 05</td>
								<td>09 : 05</td>
								<td>11 : 05</td>
								<td>12 : 05</td>
								<td>14 : 05</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!--//3호차-->
			<!--4호차-->
			<div role="tabpanel" class="tab-pane" id="nav-content-4">
				<div class="locationTit">
					<img src="../images/icon_title.png" alt=""/>
					<h1><b>4호차</b> 시내 이마트 방면</h1>
					<p>* <b>* 매시간 2회 운행합니다. (매시간 정각, 30분 센터출발, </b>12시,  12시 30분 점심시간에는 운행을 하지 않습니다. )</p>
					<p>* 도로 여건에 따라 도착시간이 변동 될 수 있습니다.</p>
				</div>
				<div class="container">
					<img src="../images/introduce/bus04_img01.gif" alt=""/>
					<h1 style="margin-top:100px;">출발시간</h1>
					<table class="table02">
						<colgroup>
							<col style="width:15%">
							<col style="width:5%">
							<col style="width:5%">
							<col style="width:5%">
							<col style="width:5%">
							<col style="width:5%">
							<col style="width:5%">
							<col style="width:5%">
							<col style="width:5%">
							<col style="width:5%">
							<col style="width:5%">
							<col style="width:5%">
							<col style="width:5%">
							<col style="width:5%">
							<col style="width:5%">
							<col style="width:5%">
							<col style="width:5%">
							<col style="width:5%">
						</colgroup>
						<tbody>
							<tr>
								<th>출발시간</th>
								<td>07 : 00</td>
								<td>08 : 00</td>
								<td>08 : 30</td>
								<td>09 : 00</td>
								<td>09 : 30</td>
								<td>10 : 00</td>
								<td>10 : 30</td>
								<td>11 : 00</td>
								<td>11 : 30</td>
								<td>13 : 00</td>
								<td>13 : 30</td>
								<td>14 : 00</td>
								<td>14 : 30</td>
								<td>15 : 00</td>
								<td>16 : 00</td>
								<td>17 : 00</td>
								<td>18 : 20</td>
							</tr>
						</tbody>
					</table>
					<h1>주말운행시간</h1>
					<table class="table02">
						<colgroup>
							<col style="width:16%">
							<col style="width:7%">
							<col style="width:7%">
							<col style="width:7%">
							<col style="width:7%">
							<col style="width:7%">
							<col style="width:7%">
							<col style="width:7%">
							<col style="width:7%">
							<col style="width:7%">
							<col style="width:7%">
							<col style="width:7%">
							<col style="width:7%">
						</colgroup>
						<tbody>
							<tr>
								<th>출발시간</th>
								<td>08 : 30</td>
								<td>09 : 00</td>
								<td>09 : 30</td>
								<td>10 : 00</td>
								<td>10 : 30</td>
								<td>11 : 00</td>
								<td>11 : 30</td>
								<td>13 : 00</td>
								<td>13 : 30</td>
								<td>14 : 00</td>
								<td>14 : 30</td>
								<td>15 : 00</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!--//4호차-->
			<!--5호차-->
			<div role="tabpanel" class="tab-pane" id="nav-content-5">
				<div class="locationTit">
					<img src="../images/icon_title.png" alt=""/>
					<h1><b>5호차</b> 서울 및 광주시내</h1>
					<p>*출퇴근 시간 서울행 : 9시~17시 광주시내 / *도로 여건에 따라 도착시간이 변동될 수 있습니다. </p>
					<p>(12시, 12시30분 점심시간에는 운행을 하지 않습니다.)</p>
				</div>
				<div class="container">
					<img src="../images/introduce/bus05_img01.gif" alt=""/>
				</div>
				<div class="locationTit">
					<img src="../images/icon_title.png" alt=""/>
					<h1><b>출근버스</b><br />천호역 - 광주센터</h1>
				</div>
				<div class="container">
					<img src="../images/introduce/bus05_img02.gif" alt=""/>
				</div>
				<div class="locationTit">
					<img src="../images/icon_title.png" alt=""/>
					<h1><b>퇴근버스</b><br />광주센터 - 천호역</h1>
				</div>
				<div class="container">
					<img src="../images/introduce/bus05_img03.gif" alt=""/>
					<h1 style="margin-top:100px;">출발시간</h1>
					<table class="table02">
						<colgroup>
							<col style="width:10%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
							<col style="width:6%">
						</colgroup>
						<tbody>
							<tr>
								<th>출발시간</th>
								<td><span>출근버스</span><br />07 : 30</td>
								<td>09 : 10</td>
								<td>09 : 40</td>
								<td>10 : 10</td>
								<td>10 : 40</td>
								<td>11 : 10</td>
								<td>11 : 40</td>
								<td>13 : 10</td>
								<td>13 : 40</td>
								<td>14 : 10</td>
								<td>14 : 40</td>
								<td>15 : 40</td>
								<td>16 : 40</td>
								<td>17 : 40</td>
								<td><span>퇴근버스</span><br />18 : 30</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!--//5호차-->
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