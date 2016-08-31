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
                <li class="active">재활요양병원안내</li>
            </ol>
        </div>
    </div>
    <main id="content" class="inpatient rehabilitation"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
        <div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
            <h2>재활요양병원안내</h2>
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
                <li role="presentation">
                    <a href="/inpatient/vip.php">VIP 입원안내</a>
                </li>
                <li role="presentation" class="active">
                    <a href="/inpatient/rehabilitation.php">재활요양병원안내</a>
                </li>
            </ul>
            <section class="recuperation">
                <div class="section-header"> 
                    <h2>SRC 재활요양</h2>
                </div>
                <p>
                    SRC 재활요양병원은 환자가 치료후 정상적인 생활을 하며 삶의 질을 향상할 수있도록 재활치료가 필요한 환자들에게 요양을 통한 장기치료를 제공해 드립니다.
                </p>
            </section>
            <section class="business">
                <div class="section-header">
                    <h2>재활치료서비스</h2>
                </div>
                <p>
                    중추신경 (뇌와 척수) 이나 말초신경 및 근골격계  (근육, 뼈, 인대) 의 손상에 의한 장애, 후유증, 통증 등에 대해 정밀한 진단을 통해 물리치료, 작업치료, 심리치료, 약물치료 등 포괄적인 재활치료를 제공합니다.
                </p>
            </section>
            <section class="characteristic">
                <div class="section-header">
                    <h2>SRC 재활요양병원의 특징</h2>
                    <ul class="arrow-list">
                        <li>장기간 입원치료</li>
                        <li>차별화된 의료진</li>
                        <li>
                            <dl class="inline-dl">
                                <dt>차별화된 재활치료시스템 (SRC재활병원과의 협진시스템)</dt>
                                <dd> 특정 질환별 맞춤 1:1 재활 치료, 전문 재활치료팀과 최신재활치료프로그램</dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-dl">
                                <dt>차별화된 양한방통합 치료</dt>
                                <dd> 양방과 한방의 개인별 맞춤 통합치료로 후유증을 최소화하고 재발을 예방합니다.</dd>
                            </dl>
                        </li>
                        <li>가정의학과 협진</li>
                    </ul>
                </div>
            </section>
            <section class="treatment">
                <div class="section-header">
                    <h2>진료 및 치료영역</h2>
                </div>
                <ul>
                    <li>
                        <a href="/inpatient/stroke.php">
                           <p class="icon">
                               <img src="/images/inpatient/treatment_img01.png" alt="뇌신경재활 버튼이미지">
                           </p>
                           <p class="details">뇌신경재활</p>
                        </a>
                    </li>
                    <li>
                        <a href="/inpatient/spine.php">
                            <p class="icon">
                               <img src="/images/inpatient/treatment_img02.png" alt="척추손상재활 버튼이미지">
                           </p>
                           <p class="details">척추손상재활</p>
                        </a>
                    </li>
                    <li>
                        <a href="/inpatient/breath.php">
                            <p class="icon">
                               <img src="/images/inpatient/treatment_img03.png" alt="호흡재활 버튼이미지">
                           </p>
                           <p class="details">호흡재활</p>
                        </a>
                    </li>
                    <li>
                        <a href="/inpatient/joint.php">
                            <p class="icon">
                               <img src="/images/inpatient/treatment_img04.png" alt="근골격재활 버튼이미지">
                           </p>
                           <p class="details">근골격재활</p>
                        </a>
                    </li>
                    <li>
                        <a href="/outpatient/rehabilitation/surgery.php">
                            <p class="icon">
                               <img src="/images/inpatient/treatment_img05.png" alt="수술후재활 버튼이미지">
                           </p>
                           <p class="details">수술후재활</p>
                        </a>
                    </li>
                </ul>
            </section>
        </div>
        <!-- // 실제 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>