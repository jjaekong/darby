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
                <li class="active">내과/가정의학과</li>
            </ol>
        </div>
    </div>
    <main id="content" class="outpatient internal-secretion"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
        <div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
            <h2>내과/가정의학과</h2>
        </div>
        <!-- 실제 작업 영역 -->
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li role="presentation">
                    <a href="/outpatient/internal/digestion.php">소화기내과</a>
                </li>
                <li role="presentation">
                    <a href="/outpatient/internal/adult_disease.php">성인병클리닉</a>
                </li>
                <li role="presentation" class="active">
                    <a href="/outpatient/internal/internal_secretion.php">내분비클리닉</a>
                </li>
                <li role="presentation">
                    <a href="/outpatient/internal/checkup.php">건강검진</a>
                </li>
                <li role="presentation">
                    <a href="/outpatient/internal/vaccination.php">예방접종안내</a>
                </li>
            </ul>
            <section class="thyroid">
                <div class="section-header">
                    <h2>갑상선 질환</h2>
                </div>
                <p>
                    갑상선은 우리 몸의 대사를 관장하는 갑상선 호르몬이 분비되는 내분비 기관으로 기관의 앞에 위치하고 있습니다. 갑상선 질환은 크게 갑상선 중독증, 갑상선기능 저하증, 갑상선염, 갑상선결절과 암 등이 있습니다.
                </p>
                <h3>갑상선 질환의 증상</h3>
                <ul class="arrow-list">
                    <li>
                        <dl class="inline-dl">
                            <dt>갑상선 중독증</dt>
                            <dd>
                                순환혈액중 갑상선호르몬의 과잉으로 인하여 그 작용이 과다하게 일어나는 증상으로 피로, 심계항진, 체중감소, 발한증가등의 증상을 동반합니다.
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl class="inline-dl">
                            <dt>갑상선 저하증</dt>
                            <dd>
                                갑상선호르몬의 부족으로 말초조직의 대사가 저하된 상태로 피로, 무기력, 체중증가, 부종등의 증상을 동반합니다.
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl class="inline-dl">
                            <dt>갑상선 결절 </dt>
                            <dd>
                                갑상선 결절은 매우 흔한 질환으로 대부분 양성으로 임상적 의의는 없으나 이 중 약 5%의 빈도로 암이 진단되므로 추가적인 검사가 필요합니다.
                            </dd>
                        </dl>
                    </li>
                </ul>
                <h3>관련 질환 및 검사</h3>
                <ul class="arrow-list">
                    <li>
                        <dl class="inline-dl">
                            <dt>관련질환</dt>
                            <dd> 갑상선 기능 저하증, 갑상선 기능 항진증, 갑상선 결절, 갑상선염</dd>
                        </dl>
                    </li>
                    <li>
                        <dl class="inline-dl">
                            <dt>관련검사</dt>
                            <dd> 갑상선 기능 검사, 갑상선 초음파</dd>
                        </dl>
                    </li>
                </ul>
                <h3>관련 증상</h3>
                <ul class="arrow-list">
                    <li>
                        <dl class="inline-dl">
                            <dt>갑상선 기능 저하증</dt>
                            <dd>
                                피로, 의욕 저하, 기억력 감퇴, 거칠고 차가운 피부, 탈모, 추위 불내성, 목소리 변화, 얼굴과 손발의 부종, 식욕 감소, 체중 증가, 월경불순, 불임, 심한 경우 심부전증이나 혼수상태
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl class="inline-dl">
                            <dt>갑상선 기능 항진증</dt>
                            <dd>
                                경부종대, 안구 돌출, 두근거림, 부정맥, 호흡곤란, 피로, 식욕 증가, 체중 감소, 더위를 쉽게 느낌, 다한증, 설사, 예민, 불안, 불면증
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl class="inline-dl">
                            <dt>갑상선 결절</dt>
                            <dd> 우연히 만져지는 경부 종물, 음식을 삼킬 때 걸리는 느낌, 호흡곤란, 목소리 변화</dd>
                        </dl>
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