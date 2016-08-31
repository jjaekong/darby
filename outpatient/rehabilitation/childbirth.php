 <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/css/outpatient.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <div class="page-path">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#">외래진료</a></li>
                <li class="active">재활의학과</li>
            </ol>
        </div>
    </div>
    <main id="content" class="outpatient childbirth"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
        <div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
            <h2>재활의학과</h2>
        </div>
        <!-- 실제 작업 영역 -->
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li role="presentation">
                    <a href="/outpatient/rehabilitation/spine.php">척추질환클리닉</a>
                </li>
                <li role="presentation">
                    <a href="/outpatient/rehabilitation/joint.php">관절클리닉</a>
                </li>
                <li role="presentation">
                    <a href="/outpatient/rehabilitation/surgery.php">수술 후 재활클리닉</a>
                </li>
                <li role="presentation">
                    <a href="/outpatient/rehabilitation/muscle_pain.php">근육통 / 만성통증클리닉</a>
                </li>
                <li role="presentation">
                    <a href="/outpatient/rehabilitation/correction.php">교정클리닉</a>
                </li>
                <li role="presentation" class="active">
                    <a href="/outpatient/rehabilitation/childbirth.php">산후재활클리닉</a>
                </li>
            </ul>
            <section class="clinic">
                <div class="section-header">
                    <h2>산후재활클리닉</h2>
                </div>
                <div class="section-content">
                    <h4>산후재활의 필요성</h4>
                     <p>
                         여성은 임신과 함께 체중이 증가하게 되고 이로 인해 척추전만증과 같은 골반변형이 일어나게 되며 출산 시에 생성되는 호르몬(relaxin)의 영향으로 치골 결합이 느슨해진 상태가 됩니다. 출산을 하면서 여성의 골반은 큰 변화를 겪게 되고 이러한 골반변형 및 근골격계의 변형 상태는 개인에 따라 원상태로 되돌아 오는 사람도 있지만 그렇지 않은 사람들도 있습니다. 이를 제대로 치료 하지 않을 경우 골반통, 요통, 하지통 등을 유발할 수 있기에 반드시 교정해 주는 것이 필요합니다.
                     </p>
                    <h4>산후재활 치료</h4>
                    <p>
                         산후 재활은 잘못된 몸의 상태가 굳어지기 전에 치료하는 것이 중요합니다. 임신을 하면 몸속에서 호르몬 (relaxin)이 분비되어 관절을 부드럽게 하고 이완을 돕게 되는데 이 호르몬이 출산 후 6개월쯤에는 완전히 없어지게 됩니다. 그래서 산후재활 치료는 출산 후 적어도 6개월 안에 받는 것이 좋습니다. SRC 병원에서는 체형 분석을 포함한 근골격계 기능 검진으로 환자의 증상을 정확히 분석하여 1:1 맞춤 산후 교정치료를 시행하여 척추 및 관절의 균형을 잡아주고 근골격계의 긴장을 해소시켜 줍니다. 산후 마사지치료로 림프의 정체와 호르몬의 불균형 등을 조절하여 골격 주변에 둘러싸고 있는 문제의 연부조직을 시원하게 풀어주고 관리합니다. 그리고 산후 운동치료로 근육과 인대를 강화하여 연부 조직을 안정화 시킬 뿐만 아니라 정상적인 일상생활로의 복귀가 가능하도록 도와주고 있습니다.
                     </p>
                </div>
            </section>
        </div>
        <!-- // 실제 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
