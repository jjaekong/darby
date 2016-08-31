<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/css/departments.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <div class="page-path">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#">진료과목</a></li>
                <li class="active">가정의학과/소아과</li>
            </ol>
        </div>
    </div>
    <main id="content" class="departments pediatric">
        <div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
            <h2>가정의학과 / 소아과</h2>
            <small>Family Medicine / Pediatric</small>
        </div>
        
        <!-- 실제 작업 영역 -->
        <div class="container">
            
			<div class="partCon">
				<h1>가정의학과 / 소아과에서는</h1>
				<p>나이, 성별, 질병의 종류에 구애됨 없이 지속적이고 포괄적인 1차진료를 담당함으로써 각종 의학적 문제로 처음 병원을 방문한 환자에 대한 진단 및 치료를 결정을 하며 <br />또한 노인의학, 성인병, 비만 등의 종합적인 질병 예방책과 평생 건강관리 프로그램을 통하여 예방, 조기진단 및 치료를 제공합니다.</p>
				<img src="../images/departments/pediatric_img01.jpg" alt=""/>
			</div>

			<div class="clinicPart">
				<h1>치료분야</h1>
				<ul>
					<li>
						<a href="javascript:;">
							<p><img src="../images/departments/pediatric_part01.gif" onmouseover="this.src='../images/departments/pediatric_part01_on.gif'" onmouseout="this.src='../images/departments/pediatric_part01.gif'" alt=""/></p>
							<span>갱년기 장애</span>
						</a>
					</li>
					<li>
						<a href="javascript:;">
							<p><img src="../images/departments/pediatric_part02.gif" onmouseover="this.src='../images/departments/pediatric_part02_on.gif'" onmouseout="this.src='../images/departments/pediatric_part02.gif'" alt=""/></p>
							<span>만성피로</span>
						</a>
					</li>
					<li>
						<a href="javascript:;">
							<p><img src="../images/departments/pediatric_part03.gif" onmouseover="this.src='../images/departments/pediatric_part03_on.gif'" onmouseout="this.src='../images/departments/pediatric_part03.gif'" alt=""/></p>
							<span>건강증진</span>
						</a>
					</li>
					<li>
						<a href="javascript:;">
							<p><img src="../images/departments/pediatric_part04.gif" onmouseover="this.src='../images/departments/pediatric_part04_on.gif'" onmouseout="this.src='../images/departments/pediatric_part04.gif'" alt=""/></p>
							<span>비만</span>
						</a>
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