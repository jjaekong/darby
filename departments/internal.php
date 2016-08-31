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
                <li class="active">내과</li>
            </ol>
        </div>
    </div>
    <main id="content" class="departments internal">
        <div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
            <h2>내과</h2>
            <small>Internal Medicine Department</small>
        </div>
        
        <!-- 실제 작업 영역 -->
        <div class="container">

            <div class="partCon">
				<ul>
					<li>
						<h1>내과에서는 인체의 주요 질병에 대한 진단 및 치료를 담당하고 <br />있으며, 외과적 수술요법을 사용하지 않고 약물과 병행치료를 통해<br />환자분들께 보다 편안하고 정확한 진료를 제공합니다.</h1>
						<h2>진료 과목</h2>
						<dl>
							<dt>순환기 내과</dt>
							<dd>고혈압, 허혈성 심장질환, 선천성 심장질환, 부정맥, 심부전증 등의 질환 진료</dd>
							<dt>소화기 내과</dt>
							<dd>식도, 위, 소장, 대장, 간, 담도 및 췌장 등 광범위한 장기들의 질환을 치료</dd>
							<dt>내분비 내과</dt>
							<dd>신체의 호르몬 이상, 대사이상, 내분비 기관에서 발행하는 종양 등을 진료</dd>
						</dl>
					</li>
					<li class="tar"><img src="../images/departments/internal_img01.jpg" alt=""/></li>
				</ul>
			</div>

			<div class="clinicPart">
				<h1>치료분야</h1>
				<ul>
					<li>
						<a href="javascript:;">
							<p><img src="../images/departments/internal_part01.gif" onmouseover="this.src='../images/departments/internal_part01_on.gif'" onmouseout="this.src='../images/departments/internal_part01.gif'" alt=""/></p>
							<span>호흡기 질환</span>
						</a>
					</li>
					<li>
						<a href="javascript:;">
							<p><img src="../images/departments/internal_part02.gif" onmouseover="this.src='../images/departments/internal_part02_on.gif'" onmouseout="this.src='../images/departments/internal_part02.gif'" alt=""/></p>
							<span>당뇨병</span>
						</a>
					</li>
					<li>
						<a href="javascript:;">
							<p><img src="../images/departments/internal_part03.gif" onmouseover="this.src='../images/departments/internal_part03_on.gif'" onmouseout="this.src='../images/departments/internal_part03.gif'" alt=""/></p>
							<span>위 / 십이지장 질환</span>
						</a>
					</li>
					<li>
						<a href="javascript:;">
							<p><img src="../images/departments/internal_part04.gif" onmouseover="this.src='../images/departments/internal_part04_on.gif'" onmouseout="this.src='../images/departments/internal_part04.gif'" alt=""/></p>
							<span>소장 / 대장 질환</span>
						</a>
					</li>
					<li>
						<a href="javascript:;">
							<p><img src="../images/departments/internal_part05.gif" onmouseover="this.src='../images/departments/internal_part05_on.gif'" onmouseout="this.src='../images/departments/internal_part05.gif'" alt=""/></p>
							<span>간질환</span>
						</a>
					</li>

					<li>
						<a href="javascript:;">
							<p><img src="../images/departments/internal_part06.gif" onmouseover="this.src='../images/departments/internal_part06_on.gif'" onmouseout="this.src='../images/departments/internal_part06.gif'" alt=""/></p>
							<span>담 / 췌장 질환</span>
						</a>
					</li>
					<li>
						<a href="javascript:;">
							<p><img src="../images/departments/internal_part07.gif" onmouseover="this.src='../images/departments/internal_part07_on.gif'" onmouseout="this.src='../images/departments/internal_part07.gif'" alt=""/></p>
							<span>뇌하수체 이상</span>
						</a>
					</li>
					<li>
						<a href="javascript:;">
							<p><img src="../images/departments/internal_part08.gif" onmouseover="this.src='../images/departments/internal_part08_on.gif'" onmouseout="this.src='../images/departments/internal_part08.gif'" alt=""/></p>
							<span>갑상선 이상</span>
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