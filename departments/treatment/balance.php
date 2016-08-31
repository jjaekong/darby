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
    <main id="content" class="departments balance"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
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
                <li role="presentation" class="active">
                    <a href="/departments/treatment/balance.php">균형치료</a>
                </li>
                <li role="presentation">
                    <a href="/departments/treatment/pain.php">통증치료</a>
                </li>
                <li role="presentation">
                    <a href="/departments/treatment/nonoral_feeding.php">삼킴장애치료</a>
                </li>
                <li role="presentation">
                    <a href="/departments/treatment/imbalance.php">자세불균형</a>
                </li>
                <li role="presentation">
                    <a href="/departments/treatment/lymphedema.php">림프부종치료</a>
                </li>
            </ul>
            <section class="treatment">
                <div class="section-header">
                    <h2>균형치료</h2>
                </div>
                <p>
                    중추신경계 손상 및 근골격계 손상 등으로 인해 균형과 보행능력저하를 가진 환자에 균형장애에 관련한 다양한 원인을 파악하고 환자 각자게 맞는 프로그램을 제공하여 치료에 접근하고 있습니다.
                </p>
                <h3>치료대상</h3>
                <ul class="arrow-list">
                    <li>
                        <dl class="inline-dl">
                            <dt>성인</dt>
                            <dd>
                                뇌졸중, 외상성 뇌손상, 척수손상, 성인뇌성마비, 파킨슨병 등의 중추신경계 손상 및 근골격계 질환자 중 독립적으로 서있는 자세가 가능한 환자
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl class="inline-dl">
                            <dt>소아</dt> 
                            <dd>
                                BPPM은 1930년 바드라가즈에서 개발되었습니다. 바드라가즈링은 움직임의 범위, 긴장완화, 늘임, 지구력, 특별한 저항 패턴들을 이용하여 근육을 재교육하는 방법으로 등척성, 등장성, 등속성 운동과 수동적 활동이 포함되어 정상적인 운동패턴의 형식과 신경근을 촉진하기 위한 기초적인 감각 수용기의 혼합으로 이루어져 있습니다.
                            </dd>
                        </dl>
                    </li>
                </ul>
                <h3>평가 및 치료방법</h3>
                <p>
                    독립적인 4개의 지면반력 장치 (Force Plate) 를 이용하여 4영역 (좌, 우측 각각의 TOE 및 HEEL) 을 측정하여 각 영역간 상호작용 및 동조화현상 (Interaction / Synchronization) 을 분석하여 균형장애의 다양한 원인을 파악하며, 11가지의 바이오피드백 훈련 프로그램을 이용하여 균형능력 증진과 낙상정도를 감소시켜 보다 효율적인 보행능력향상에 도움을 주는 치료방법입니다.
                </p>
            </section>
        </div>
        <!-- // 실제 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>