<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/css/inpatient.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <div class="page-path">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#">입원안내</a></li>
                <li class="active">재활병원 입원안내</li>
            </ol>
        </div>
    </div>
    <main id="content" class="inpatient rehabGuide">
        <div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
            <h2>재활병원 입원안내</h2>
            <small>Rehabilitation Guidance In Hospital</small>
        </div>
        
        <!-- 실제 작업 영역 -->
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li role="presentation" class="active">
                    <a href="/inpatient/rehab_guide.php">입원안내</a>
                </li>
                <li role="presentation">
                    <a href="/inpatient/business_team.php">사회사업팀(환자지원프로그램)</a>
                </li>
                <li role="presentation">
                    <a href="/inpatient/menu_guide.php">입원식단안내</a>
                </li>
                <li role="presentation">
                    <a href="/inpatient/vip.php">VIP 입원안내</a>
                </li>
                <li role="presentation">
                    <a href="/inpatient/rehabilitation.php">재활요양병원안내</a>
                </li>
            </ul>
			<h1>재활병원 입원안내</h1>
			<ul class="clinicProcess">
				<li>
					<img src="../images/inpatient/rehab_guide_img01.gif" alt=""/>
					<p>내원 (팩스)</p>
				</li>
				<li>
					<img src="../images/inpatient/rehab_guide_img02.gif" alt=""/>
					<p>예약 및 상담접수</p>
				</li>
				<li>
					<img src="../images/inpatient/rehab_guide_img03.gif" alt=""/>
					<p>입원수속<br /><span>(입원시 보호자 동행필요)</span></p>
				</li>
				<li>
					<img src="../images/inpatient/rehab_guide_img04.gif" alt=""/>
					<p>병실배정</p>
				</li>
			</ul>

			<div class="infoBox">
				<h2>방문접수시</h2>
				<ul>
					<li>재진일 경우 주치의 진료 시간에 내원하셔야 하며, 소견서 및 건강보험증을  지참하시고 1층 원무부에서 예약을 하시면 됩니다.</li>
					<li><span>준비물 : 진료소견서(최근 1개월이내), 진료기록(MRI, X-ray 필름등), 건강보험증</span></li>
				</ul>
			</div>

			<div class="infoBox">
				<h2>팩스 접수시</h2>
				<ul>
					<li>팩스 접수 시 소견서에 연락처를 기재해 주시고, 입원 결정은 자문의사의 결정이 필요하므로 2 ~ 3일 정도 시일이 경과된 후에 통보 받으실 수 있습니다. </li>
					<li><span><b>Fax : 031-762-3651</b></span></li>
				</ul>
			</div>

			<div class="infoBox">
				<h2>입원시 준비사항</h2>
				<ul>
					<li>퇴원소견서</li>
					<li>퇴원약 3 ~ 4일분 (약 처방전 지참)</li>
					<li>진료기록 (MRI, X-ray 필름등)</li>
					<li>건강보험증, 산재전원승인서(산재환자), 의료급여증(의료보호)</li>
					<li>장애인복지카드</li>
				</ul>
			</div>
			<hr />

			<h1>재활병원 퇴원안내</h1>
			<ul class="clinicProcess">
				<li>
					<img src="../images/inpatient/rehab_guide_img01.gif" alt=""/>
					<p>퇴원결정<br /><span>(담당주치의가 퇴원결정을 하면 간호부에 접수됩니다.)</span></p>
				</li>
				<li>
					<img src="../images/inpatient/rehab_guide_img02.gif" alt=""/>
					<p>퇴원접수</p>
				</li>
				<li>
					<img src="../images/inpatient/rehab_guide_img03.gif" alt=""/>
					<p>진료비수납<br /><span>(1층 원무부에 진료비 수납을 하시면 됩니다.)</span></p>
				</li>
				<li>
					<img src="../images/inpatient/rehab_guide_img04.gif" alt=""/>
					<p>퇴원수속 후 귀가<br /><span>(수속이 완료되면 진료비 영수증이 발부되며 간호사실에 확인 후 귀가하시면 됩니다.)</span></p>
				</li>
			</ul>
			<hr />

			<div class="infoBox">
				<h2>면회시간</h2>
				<ul>
					<li>오전 09:00 ~ 10:00</li>
					<li>오후 16:00 ~ 20:00</li>
				</ul>
			</div>

			<div class="infoBox">
				<h2>면회시 주의사항</h2>
				<ul>
					<li><span>원내 질서 및 환자의 안정을 위하여 저녁 9시 이후의 면회를 제한하고 있으니 양해하여 주시기 바랍니다.</span></li>
				</ul>
			</div>
            
			<div class="reservationBox">
				<p>진료예약</p>
				<span>인터넷으로 진료 예약이 가능합니다.<br />안내에 따라 원하시는 의료진과 시간을 등록하시면 자동으로 예약 접수가 완료됩니다.</span>
				<a href="javascript:;"><i>진료예약하기</i></a>
			</div>

        </div>
        <!-- // 실제 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>