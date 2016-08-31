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
                <li class="active">VIP병동 입원안내</li>
            </ol>
        </div>
    </div>
    <main id="content" class="inpatient vip">
        <div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
            <h2>VIP병동 입원안내</h2>
            <small>VIP Hospital Guide</small>
        </div>
        
        <!-- 실제 작업 영역 -->
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li role="presentation">
                    <a href="/inpatient/rehab_guide.php">입원안내</a>
                </li>
                <li role="presentation">
                    <a href="/inpatient/business_team.php">사회사업팀(환자지원프로그램)</a>
                </li>
                <li role="presentation">
                    <a href="/inpatient/menu_guide.php">입원식단안내</a>
                </li>
                <li role="presentation" class="active">
                    <a href="/inpatient/vip.php">VIP 입원안내</a>
                </li>
                <li role="presentation">
                    <a href="/inpatient/rehabilitation.php">재활요양병원안내</a>
                </li>
            </ul>
			<p><img src="../images/inpatient/vip_img01.jpg" alt=""/></p>

			<div class="partCon">
				<ul>
					<li>
						<h1>VIP 병동<br />SRC만의 특별한 병실로 모시겠습니다.</h1>
						<p>VIP병동은 특별히 준비된 생활편의시설과 SRC만의  VIP간호서비스로 여러분을 <br />모실 준비가 되어있습니다.<br /><br />병실은 VVIP병실 3개와 VIP 11개로 준비되어있습니다.<br />각 병실은 가정집과 같은 인테리어로 되어있어 환자가 내집에서 진료를 받는 느낌을<br />받아 심신의 안정을 찾고 빠른 치료를 도울 수 있습니다.<br /><br />환자 뿐만 아니라 보호자와 가족들도 편히 보낼 수 있는 편의 시설을 마련해<br />오로지 환자의 치료에 집중 할 수 있도록 시설과 서비스에 최선을 다하였습니다.</p>
						<a href="javascript:;" class="view">병동 둘러보기</a>
					</li>
					<li class="tar"><img src="../images/inpatient/vip_img02.jpg" alt=""/></li>
				</ul>
			</div>
			<hr />

			<div class="vipCon">
				<h1>최고의 편의시설 <span>VIP병동은 특별히 준비된 생활편의시설과 SRC만의 VIP간호서비스로 여러분을 모실 준비가 되어있습니다.</span></h1>
				<ul>
					<li>
						<img src="../images/inpatient/vip_img03.jpg" alt=""/>
						<p>병실내에는 고급스러운 자재로 환자와 간병인들을 위한 생활 편의시설들이 구성 되어있습니다.</p>
					</li>
					<li>
						<img src="../images/inpatient/vip_img04.jpg" alt=""/>
						<p>VVIP실에는 개인별 PC가 제공됩니다.<br />또한 모든 병실은 무료 WIFI가 제공됩니다.</p>
					</li>
					<li>
						<img src="../images/inpatient/vip_img05.jpg" alt=""/>
						<p>TV, 전자레인지, 커피포트등의 편의 가정 용품이 구성되어 있으며 피톤치드 아로마가 병실의 쾌적함을 유지 시킵니다.</p>
					</li>
					<li>
						<img src="../images/inpatient/vip_img06.jpg" alt=""/>
						<p>넒은 화장실은 환자 중심으로 설계되어있으며 환자 샤워에 필요한 의자와 샤워침대가 제공됩니다.</p>
					</li>
				</ul>
			</div>
			<hr />

			<div class="vipCon">
				<h1>VIP 서비스 <span>특별한 환자를 위한 VIP 서비스를 제공합니다.</span></h1>
				<ul>
					<li>
						<img src="../images/inpatient/vip_img07.jpg" alt=""/>
						<p>24시간 특별간호서비스가 제공됩니다.<br />특별히 준비된 VIP간호서비스로 병동의 환자분들을 모십니다.</p>
					</li>
					<li>
						<img src="../images/inpatient/vip_img08.jpg" alt=""/>
						<p>1식 8찬의 VIP영양식이 제공됩니다.<br />또한 환자의상태에 따른 특별식도 가능합니다.</p>
					</li>
					<li>
						<img src="../images/inpatient/vip_img09.jpg" alt=""/>
						<p>VIP병동의 환자분들께 수준높은 치료사들이 배치되어 VIP를 위한 치료서비스를 제공합니다. </p>
					</li>
					<li>
						<img src="../images/inpatient/vip_img10.jpg" alt=""/>
						<p>최신의 의료장비와 최고의 의료진으로 VIP환자들의 빠른 쾌유가 될 수 있게 최선의 노력을 다하겠습니다.</p>
					</li>
				</ul>
			</div>


        </div>
        <!-- // 실제 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>