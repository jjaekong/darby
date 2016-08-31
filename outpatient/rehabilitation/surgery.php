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
    <main id="content" class="outpatient surgery"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
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
                <li role="presentation" class="active">
                    <a href="/outpatient/rehabilitation/surgery.php">수술 후 재활클리닉</a>
                </li>
                <li role="presentation">
                    <a href="/outpatient/rehabilitation/muscle_pain.php">근육통 / 만성통증클리닉</a>
                </li>
                <li role="presentation">
                    <a href="/outpatient/rehabilitation/correction.php">교정클리닉</a>
                </li>
                <li role="presentation">
                    <a href="/outpatient/rehabilitation/childbirth.php">산후재활클리닉</a>
                </li>
            </ul>
            <section class="clinic">
                <div class="section-header">
                    <h2>수술 후 재활 클리닉</h2>
                </div>
                <div class="section-content">
                    <p>
                        재활치료가 발달하지 못하였던 예전에는 디스크나 어깨, 무릎, 고관절 그리고 사고에 의한 골절수술 등 이후에 자연적으로 회복되기만을 기다리며 약만 먹고 버티거나, 단순히 통증 완화 목적의 물리치료만을 시행받다가, 결국 돌이킬 수 없는 후유증이 남아 평생 괴로워하시는 분들이 많았습니다. 이에 대한 문제의식하에 본원에서는 국내 최고 최대의 재활센터라는 명성이 부끄럽지 않도록 최고의 의료 전문가들을 통해 다음과 같은 최적화된 수술 후 집중 재활치료를 실시하고 있습니다.  
                    </p>
                    <ul class="arrow-list">
                        <li>
                            <dl class="inline-dl">
                                <dt>상태 분석 및 진단</dt>
                                <dd>본 클리닉에서는 해당 분야 전문의사가 먼저 환자분들의 상태를 면밀히 분석하여 맞춤형 치료 계획을 설정합니다.<br>이후 치료 계획에 따라 다음과 같은 치료 과정을 진행하게 됩니다.</dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-dl">
                                <dt>통증 완화</dt>
                                <dd>수술 후 통증 완화를 위한 다양한 치료방법을 환자 상태에 맞추어 적용해 드리고 있습니다.</dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-dl">
                                <dt>관절 구축 예방</dt>
                                <dd>수술부위의 유착과 구축으로 관절이 굳어 버리는 것을 예방해주기 위해 관절이동술 및 연부조직 이동술 기법의 이완도수치료를 포함한 다양한 치료를 제공하고 있습니다.</dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-dl">
                                <dt>주변부 근력 회복 및 강화</dt>
                                <dd>수술 부위를 안정적으로 지탱해줄 근육들을 여러가지 치료방법들을 통하여 회복 및 강화하여 드립니다.</dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-dl">
                                <dt>기능 평가 및 훈련</dt>
                                <dd>
                                    골반이나 다리 쪽을 수술하신 경우 체중지지나 보행에 후유증이 남는 경우가 매우 많습니다. 이의 예방을 위해 기능적 평가를 통하여 서고 걸으시는 데 후유증을 최소화시켜 드립니다. 또한 어깨나 팔, 손을 수술하시는 경우 일상생활 하실 때 손을 쓰기가 불편한 후유증이 남는 경우도 많습니다. 마찬가지로 이의 예방을 위한 전문적인 재활치료 프로그램을 진행하여 일상으로 조속히 다시 복귀하실 수 있도록 도와드리고 있습니다. 
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <!-- // 실제 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
