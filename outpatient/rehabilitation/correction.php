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
    <main id="content" class="outpatient correction"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
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
                <li role="presentation" class="active">
                    <a href="/outpatient/rehabilitation/correction.php">교정클리닉</a>
                </li>
                <li role="presentation">
                    <a href="/outpatient/rehabilitation/childbirth.php">산후재활클리닉</a>
                </li>
            </ul>
            <section class="clinic">
                <div class="section-header">
                    <h2>교정클리닉</h2>
                </div>
                <div class="section-content">
                    <h3>거북목(일자목) 교정</h3>
                    <p>
                        사람 몸의 기둥이 되는 척추는 위에서부터 경추, 흉추, 요추, 천골로 이루어져 있습니다.  척추에서 맨 위에 위치하는 경추는 옆에서 봤을 때 C자형 곡선을 이루며 머리 무게에 의한  압력을 분산시켜주는 역할을 합니다. 위쪽 목뼈와 머리뼈는 머리를 젖히는 방향으로 배열되어 전체적으로 머리가 숙여지지 않은 상태에서 고개가 앞으로 빠진 자세를 일컫습니다. 이 거북목 상태를 방치하게 되면 목 뼈의 정상적인 역학이 무너져서 목의 관절염이 빠르게 진행되고, 목 디스크에 과부하가 걸려 경추부 추간판탈출증을 유발하거나 악화시킬 수 있으며, 호흡 보조근육들의 움직임을 방해하여 폐활량을 최고 30%까지 감소시킬 수 있습니다.  또한 거북목이 있는 사람들을 장기간 추적 조사해본 결과 정상인에 비해 골절의 위험이 1.7배 높았으며, 노인분들을 대상으로 확인했을 때 사망률이 1.4배나 높은 것으로 확인된 바 있습니다.  그리고 경추의 변형이 오랫동안에 걸쳐 일어난 경우에는 단순한 자세의 교정만으로는 정상 경추 곡선을 회복하기 어려우므로 전문가에게 도수치료 등 교정치료를 적절하게 시행 받으면서  변형된 경추부 및 주변부 근골격계 이상에 대해 치료를 병행하는 것이 도움되겠습니다.
                    </p>
                    <h3>증상</h3>
                    <ul class="arrow-list">
                        <li>자주 뒷목과 어깨가 결리고 아프다.</li>
                        <li>오랫동안 앉아있을 때 뒷통수가 아프거나 두통이 생길 수 있다.</li>
                    </ul>
                    <h3>자세 및 체형 교정</h3>
                    <p>
                        나쁜자세로 인해 척추가 휘기 시작하면 다양한 복합적 증상이 시작됩니다. 휜 척추로 인하여 요통뿐만아니라 목과 어깨에 심한 통증이 시작되며, 원활한 혈핵순환에 문제가 생겨 부종이 생기기도 합니다. 성장기 어린이와 청소년들에게는 이후의 키와 체격 성장에도 필수적이라 할 수 있습니다. 
                    </p>
                    <h3>휜다리 교정</h3>
                    <p>
                        휜다리는 다리뼈 다체가 휘어있는 상태를 말합니다.  미용상 보기 좋지 않은 정도로 가볍게 여겨지기도 하지만 증상이 심해지면 미용상의 문제를 넘어 퇴행성 관절염이 이른나이에 찾아오거나, 척추측만증 혹은 평발이 될 가능성도 있습니다.  휜다리 증상이 있다하여 다리를 묶고 있거나 하는 등의 자가 치료를 하기도 하는데, 오히려 장시간 다리를 묶고 있게 되면 골반 틀어짐, 허리 통증과 같은 부작용이 있을 수 있기 때문에 정확한 진단으로 원인을 파악하는 것이 중요합니다.
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
