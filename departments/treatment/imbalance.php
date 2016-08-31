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
                <li class="active">SRC치료법</li>
            </ol>
        </div>
    </div>
    <main id="content" class="departments imbalance"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
        <div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
            <h2>SRC 치료법</h2>
        </div>
        <!-- 실제 작업 영역 -->
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li role="presentation">
                    <a href="/departments/treatment/adult_exercise.php">성인운동치료</a>
                </li>
                <li role="presentation">
                    <a href="/departments/treatment/young_exercise.php">소아운동치료</a>
                </li>
                <li role="presentation">
                    <a href="/departments/treatment/adult_treatment.php">성인작업치료</a>
                </li>
                <li role="presentation">
                    <a href="/departments/treatment/young_treatment.php">소아작업치료</a>
                </li>
                <li role="presentation">
                    <a href="/departments/treatment/breathe.php">호흡재활치료</a>
                </li>
                <li role="presentation">
                    <a href="/departments/treatment/underwater.php">수중재활치료</a>
                </li>
                <li role="presentation">
                    <a href="/departments/treatment/balance.php">균형치료</a>
                </li>
                <li role="presentation">
                    <a href="/departments/treatment/pain.php">통증치료</a>
                </li>
                <li role="presentation">
                    <a href="/departments/treatment/nonoral_feeding.php">삼킴장애치료</a>
                </li>
                <li role="presentation" class="active">
                    <a href="/departments/treatment/imbalance.php">자세불균형</a>
                </li>
                <li role="presentation">
                    <a href="/departments/treatment/lymphedema.php">림프부종치료</a>
                </li>
            </ul>
            <section class="treatment">
                <div class="section-header">
                    <h2>자세불균형</h2>
                </div>
                <div class="section-content">
                    <p>
                        자세불균형은 빠르면 청소년기부터 발생할 수 있는 다양한 병증 및 통증의 원인이 될 수 있는 문제로, 적합한 포괄적 재활치료를 꾸준히 받아야 그 진행을 막고 올바른 자세를 만들어 나갈 수 있습니다. 각 환자의 자세불균형의 원인이 다르기 대문에 각각의 경향에 맞춘 치료와 일관적인 관리가 이루어지는것이 중요합니다. 본원에서는 최신식 장비를 이용하여 자세불균형을 자세히 분석해 문제를 정확히 확인하고, 이를 해결하고 추후의 악화를 방지하기 위한 여러 치료들을 제공하고 있습니다.
                    </p>
                    <h3>치료대상</h3>
                    <ul class="arrow-list">
                        <li>습관성 목, 어깨, 허리, 무릎, 발 통증의 재발</li>
                        <li>외관성 자세의 이상</li>
                        <li>척추측만증</li>
                        <li>보행이상</li>
                    </ul>
                    <h3>치료방법</h3>
                    <p>
                        본원에서는 운동치료, 온열치료, 척추자세교정기기 (Spine MT), 체외충격파기기, 주사요법 및 생활습관개선안내 등을 통하여 각 환자분들에게 맞춤으로 치료를 제공합니다.
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