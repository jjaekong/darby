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
    <main id="content" class="departments nonoral-feeding"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
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
                <li role="presentation" class="active">
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
                    <h2>삼킴장애치료</h2>
                </div>
                <div class="section-content">
                    <p>
                        여러 신경학적 질환과 흔히 연관되어 있으며, 일상생활에는 큰 장애가 될 수 있는 병증입니다. 이로인해 적절한 음식섭취가 이루어지지 않아 충분한 영양공급에 방해가 될 수 있으며 삼킴장애가 최소한으로만 있는 분들도 수분섭취의 빈도가 줄어들어 탈수가 생길 수가 있습니다. 또한 음식물 등의 기도흡인으로 인하여 흡인성 폐렴이 발생할 수도 있으며 이는 생명을 위협할 수 있는 심각한 질환으로 사전예방이 가장 중요하기 때문에 삼킴장애에 대한 적절한 진단 및 치료가 중요합니다.
                    </p>
                    <h3>치료대상</h3>
                    <ul class="arrow-list">
                        <li>뇌졸중 후 삼킴장애</li>
                        <li>경추수술 후 삼킴장애</li>
                        <li>이비인후과적 수술 (후두암, 인두암, 설암제거 및 재건술 등) 후 삼킴장애</li>
                        <li>파킨슨병 연관 삼킴장애</li>
                        <li>노인성 치매관련 삼킴장애</li>
                        <li>기타 (비관, 위루관을 통한 음식섭취 중인 분)</li>
                    </ul>
                    <h3>평가 및 상담</h3>
                    <p>
                        본원에서는 비디오연하영상조영술 (Videofluoroscopic Study Of Swallowing) 을 시행하여 기도 내 흡인여부는 물론 삼킴과정 중 어느요소에 문제가 있는지를 정확히 확인하고, 이에 대하여 구강치료, 작업치료, 전기자극치료 및 다양한 경우에 맞춘 삼킴 기술 교육을 시행함과 더불어  환자의 상태에 맞는 삼킴장애용 특수식이를 처방하여 환자분들이 보다 편하고 건강함 삶을 즐길 수 있도록 치료하고 있습니다.
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