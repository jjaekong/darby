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
    <main id="content" class="outpatient joint"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
        <div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
            <h2>재활의학과</h2>
        </div>
        <!-- 실제 작업 영역 -->
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li role="presentation">
                    <a href="/outpatient/rehabilitation/spine.php">척추질환클리닉</a>
                </li>
                <li role="presentation" class="active">
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
                <li role="presentation">
                    <a href="/outpatient/rehabilitation/childbirth.php">산후재활클리닉</a>
                </li>
            </ul>
            <section class="shoulder">
                <div class="section-header">
                    <h2>어깨</h2>
                </div>
                <div class="panel-group shoulder-list" id="shoulder">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#shoulder" href="#collapse-1" class="collapsed">
                                    어깨충돌증후군
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    어깨충돌증후군이란 어깨 관절을 덮는 지붕 역할의 뼈(견봉)및 그 주변구조와 어깨를 움직이는 힘줄(회전근개)이 서로 충돌하여 나타나는 통증을 말합니다. 이후 회전근개파열이나 석회화건염등으로 진행 될 수 있기 때문에 초기 진료가 중요합니다. 
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>팔을 머리 위로 들어올리기 어렵다. </li>
                                    <li>어깨에서 소리가 나거나 무언가 걸리는 느낌이 든다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#shoulder" href="#collapse-2" class="collapsed">
                                    회전근개파열
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    어깨의 안정성을 유지시켜주는 회전근개가 무리한 사용으로 인해 부풀어오르거나 끊어지기도 합니다. 손상된 근육으로 인해 팔과 어깨에 통증이 발생하는 질환입니다. 오십견과 그 증상이 비슷하며 중년 이후 어깨통증의 가장 흔한 원인 중 하나입니다.  
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>팔을 들거나 돌릴 때 통증이 느껴진다.</li>
                                    <li>팔을 특정 위치로 움직이면 마찰음이나 잡음이 발생한다.</li>
                                    <li>문제가 있는 어깨 쪽으로 돌아누워 자기 어렵다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#shoulder" href="#collapse-3" class="collapsed">
                                    오십견 (유착성관절염)
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    어깨 관절을 감싸고 있는 관절낭이 어깨 관절과 달라 붙고, 그 부위에 염증과 통증이 나타나 관절의 움직임을 제한하는 질환입니다. 특별한 외상이 없음에도 어깨 관절 부위에서 둔통이 시작되어 서서히 통증이 심해지게 됩니다. 
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>팔이 끝까지 올라가지 못한다.</li>
                                    <li>어깨 관절이 뻣뻣하고 통증이 있을 때엔 어깨에 움직임이 없어도 아프다. </li>
                                    <li>통증이 어깨 뒤에서 앞으로 팔을 타고 내려와 나중엔 손까지 통증이 전해진다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section class="elbow">
                <div class="section-header">
                    <h2>팔꿈치</h2>
                </div>
                <div class="panel-group elbow-list" id="elbow">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#elbow" href="#elbow-1" >
                                    테니스엘보 (주관절 외상과염)
                                </a>
                            </h4>
                        </div>
                        <div id="elbow-1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    팔꿈치 외측 힘줄에 염증이 생긴 증상입니다. 손목을 움직이는 힘줄의 문제가 지속될 때 손상이 완전히 재생되지 못하고 구조상 변형이 생기면서 문제가 발생합니다. 특히 치유과정에서도 반복적인 부하가 가해지면 정상적으로 치유되지 못하고 불완전하고 비정상적인 상태로 치유되어 만성 통증이 발생합니다.  
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>팔꿈치의 바깥쪽에서 시작되는 통증이 손등 쪽으로 뻗어가는 증상이 나타난다.</li>
                                    <li>손을 움직일 때 통증이 악화된다.</li>
                                    <li>통증이 심각해지면 밤에 잠을 못 잘 정도로 심하게 될 수 있으며, 세수나 식사 등의 일상생활이 어려운 경우도 생긴다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#elbow" href="#elbow-2" class="collapsed">
                                   골프엘보 (주관절 내측상과염)
                                </a>
                            </h4>
                        </div>
                        <div id="elbow-2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    골프를 할 때 발생하는 팔꿈치 안쪽의 통증을 ‘골프엘보’라고 합니다. 골프엘보의 정확한 진단명은 ‘내측상과염’으로 팔꿈치의 안쪽 돌출된 부위인 팔꿈치 관절에 흔히 발생하는 염증성 질환 중 하나입니다. 반복적으로 손목을 굽히는 동작을 할 경우, 이들 근육은 무리한 힘을 받게 되고 이에 따라 근육과 뼈를 이어주는 힘줄이 반복적으로 파열되면서 염증이 발생하게됩니다. 
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>팔꿈치 안쪽에서의 통증, 화끈거림, 손목까지 이어지는 통증이 나타난다.</li>
                                    <li>걸레나 행주를 짜거나 손잡이를 돌릴 때 통증이 느껴진다.</li>
                                    <li>주먹을 쥐거나 손목을 돌릴 때 통증이 느껴진다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#elbow" href="#elbow-3" class="collapsed">
                                    팔꿈치 윤활막염
                                </a>
                            </h4>
                        </div>
                        <div id="elbow-3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    팔꿈치 뒷부분에 있는 체액낭과 윤활막에 통증과 열감, 발적 등이 생기는 질환입니다. 팔꿈치를 책상에 대고 컴퓨터작업이나 공부하는 사람에게 흔히 나타납니다. 골프, 테니스 등 팔을 많이 사용하는 운동을 할 경우에도 발생할 수 있습니다. 
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>팔꿈치 뒷부분에 말랑말랑하게 물이 차있는 체액낭이 생긴다.</li>
                                    <li>통증이 동반될 수 있고 이 체액낭이 커질 경우 관절 운동범위가 감소한다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#elbow" href="#elbow-4" class="collapsed">
                                    삼두근건염
                                </a>
                            </h4>
                        </div>
                        <div id="elbow-4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    삼두근이 팔꿈치 뼈에 붙는 부위의 힘줄에 건염이 생겨 통증이 발생하는 질환입니다. 팔을 펴거나 미는 동장을 반복적으로 하는 경우 발생합니다. 따라서 물건을 옮기는 직업을 가진 사람이나 무거운 역기를 드는 운동을 하는 사람에게 흔히 생길 수 있는 질환입니다.
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>팔을 사용 할 때 팔꿈치 뒷 부분에 통증이 있다.</li>
                                    <li>주로 팔꿈치를 펴는 힘을 줄 대 통증이 있으며 부종 등이 동반할 수 있다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#elbow" href="#elbow-5" class="collapsed">
                                    이두근건염
                                </a>
                            </h4>
                        </div>
                        <div id="elbow-5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    흔히 ‘알통’이라고 불리고 팔 안쪽에 위치한 근육을 상완이두근이라한다. 이 상완이두근을 연결해주는 힘줄을 이두근건이라 부르고 여기에 염증이 생긴 것을 이두근건염이라 부른다. 무거운 것을 자주 옮기거나 드는 직업을 가지거나, 테니스, 야구, 배구, 수영등 팔을 위로 드는 운동을 자주하는 사람들에게서도 나타납니다.  
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>팔을 들어올리면 통증이 심각해진다.</li>
                                    <li>어깨가 ‘덜그덕’ 거리는 느낌이 든다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#elbow" href="#elbow-6" class="collapsed">
                                    팔꿈치 관절염
                                </a>
                            </h4>
                        </div>
                        <div id="elbow-6" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    다양한 원인에 의해 팔꿈치 관절 내에 염증이 생기면 관절 내 유착 및 부종으로 팔을 끝까지 뻗기 어려워지고 통증이 나타납니다. 
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>팔이 끝까지 안 뻗어진다.</li>
                                    <li>팔을 뻗으려 할 때 마다 아프거나 ‘으득’거리는 소리가 난다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="hand">
                <div class="section-header">
                    <h2>손목과 손</h2>
                </div>
                <div class="panel-group hand-list" id="hand">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#hand" href="#hand-1" >
                                    손목터널증후군
                                </a>
                            </h4>
                        </div>
                        <div id="hand-1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    손목터널(수근관)은 손목을 이루는 뼈와 인대들로 형성된 작은 통로인데, 이 통로가 좁아지면서 신경이 눌려 지배영역에 증상이 생기는 증후군입니다.   
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>밤에 엄지, 검지 및 중지, 손바딕 부분의 저림증상이 심해진다.</li>
                                    <li>엄지쪽의 감각이 떨어져 엄지 근육의 위축이 나타나기도 한다.</li>
                                    <li>찬물에 손을 넣거나 날씨가 추우면 손끝이 유난이 시리고 저리기도 한다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#hand" href="#hand-2" class="collapsed">
                                   드퀘르뱅 건초염(손목건초염)
                                </a>
                            </h4>
                        </div>
                        <div id="hand-2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    손목건초염은 손목의 내측과 외층, 중앙에 있는 여러 개의 힘줄을 감싸고 있는 막에 생긴 염증을 말합니다. 손목건초염은 손을 과도하게 사용하여 손목에서 엄지손가락으로 이어지는 2개의 힘줄과 이를 싸고 있는 막(건초)사이의 마찰을 유발하여 발생되는 염증성 질환을 뜻합니다. 무리하게 손목을 쓰는 사무업무를 보는 사람에게 많이 발생하는 것으로 알려져 있습니다. 
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>염증이 생기면 엄지를 움직이기 어려워져 젓가락질이나 글씨 쓰기가 힘들어진다.</li>
                                    <li>손목의 저림이 심해지고 찌릿찌릿한 증상과 함께 물건을 잡기 힘들어진다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#hand" href="#hand-3" class="collapsed">
                                    방아쇠 수지
                                </a>
                            </h4>
                        </div>
                        <div id="hand-3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                   손가락을 움직이는 힘줄이 지나가는 통로 역할을 하는 손가락 관절의 인대가 두꺼워져 힘줄이 걸리는 현상을 말합니다. 
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>손가락을 구부렸다 펼 때 걸리는 느낌이 나거나 잘 펴지지 않는다.</li>
                                    <li>걸리는 부위에서 마찰이 심한 경우 통증이 온다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#hand" href="#hand-4" class="collapsed">
                                    손가락 관절염
                                </a>
                            </h4>
                        </div>
                        <div id="hand-4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    여러 원인에 의해 손가락 관절에 염증이 오는 경우 관절이 붓거나 변형이 일어납니다. 
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>손가락 관절이 붓고 아프다.</li>
                                    <li>손가락을 움직일 때 뻑뻑하다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pelvis">
                <div class="section-header">
                    <h2>골반과 고관절</h2>
                </div>
                <div class="panel-group pelvis-list" id="pelvis">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#pelvis" href="#pelvis-1" >
                                    골반통증 - 천장관절 증후군
                                </a>
                            </h4>
                        </div>
                        <div id="pelvis-1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    천장관절은 골반에서 엉치뼈와 엉덩이뼈가 만나는 부위를 말합니다. 이 관절을 지지해주는 인대가 약화되거나 손상되면 허리와 엉덩이 주변으로 통증이 나타나는 질환입니다. 허리가 아픈것도 아니고 디스크도 아닌 데, 오래 앉아 있으면 엉치쪽이 배기듯이 아픈 경우가 있습니다. 이런 경우에는 고관절염이나 꼬리뼈 통증과 잘 구분을 해야 합니다. 우리 몸의 엉치관절(천장관절)은 천골과 장골 두 뼈가 강력한 인대로 고정되어 있으며, 아주 조금씩 움직이게 돼 있습니다. 그런데 만성적으로 영양적은 문제, 호르몬 문제 또는 출산으로 인해서 이 부분 인대가 많이 약해져 버린 경우에는 조그만 오래 앉아 있거나 딱딱한 데에 앉아 있을 때에도 배기는 듯한 통증이 나타나게 됩니다.   
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>허리통증과 천장관절 주변의 통증이 나타나며 굽히거나 펴는 동작을 하기 어렵다.</li>
                                    <li>허리부터 사타구니, 고관절, 대퇴부부터 종아리와 발가락까지 연관통이 나타난다.</li>
                                    <li>천장관절증후군이 있는 환자는 흔히 가부좌로 앉기가 힘들며 골반에 힘을 주는 자세로 변화시킬 때 통증이 더 심해진다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#pelvis" href="#pelvis-2" class="collapsed">
                                   엉덩이 통증 - 샅굴부위 좌상
                                </a>
                            </h4>
                        </div>
                        <div id="pelvis-2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    엉덩관절과 샅굴부위에 통증을 유발하는 원인으로 엉덩관절 모음근의 좌상이나 힘줄염이 흔하고 요추나 천장관절에서 기인하는 관련통인 경우도 있습니다. 샅굴부위 좌상은 달리기, 점프, 몸통 비틀기나 공을 찰 때처럼 강하게 엉덩관절을 굽히거나 돌릴 시 발생할 수 있습니다. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#pelvis" href="#pelvis-3" class="collapsed">
                                    좌골신경통
                                </a>
                            </h4>
                        </div>
                        <div id="pelvis-3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                   좌골신경통의 원인은 요추 4-5번이나 요추 5번과 천추 1번의 허리디스크에서 올 수도 있지만 대부분 골반(좌골)이 틀어지거나 골반의 근육(이상근)이 긴장을 해서 좌골신경을 눌러서 나타나게 되는 것입니다. 여성에게 흔하며 궁둥 구멍근의 유연성이 부족한 것이 원인이 될 수 있습니다.  좌골신경(궁둥뼈신경)에 발생한 압박, 손상, 염증 등으로 인해 좌골신경과 관련된 부위(대퇴부, 종아리, 발 등)를 따라 통증이 나타납니다. 좌골신경과 관련된 통증은 엉덩이에서부터 아래쪽으로 대퇴부와 다리까지 통증이 있을 수 있고 발과 발가락의 통증을 동반할 수도 있습니다.  40대에 발병률이 가장 높고 50대 이후부터는 빈도가 감소하는 것으로 알려져있습니다. 종양이나 좌골신경이 지나가는 근육 등에 의해 좌골신경이 눌리거나, 좌골신경 자체에 손상이 나거나 염증이 나 발생할 수 있습니다. 이 좌골신경통은 추간판탈출증이나 척추관 협착증의 원인이 되기도 합니다. 단순히 엉덩이 부분이나 대퇴부 뒤쪽이 아픈 것을 좌골신경통이라하지만 상당수는 근육통이나 근근막통증에 의한 경우도 있어 내방하여 진료를 받아보아야 합니다. 
 
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>허리통증, 대퇴부 뒤쪽의 통증, 종아리나 발의 통증이 있을 수 있다.</li>
                                    <li>통증과 함께 화끈거리거나 저린 느낌이 난다.</li>
                                    <li>감각이 둔해지고 다리에 힘이 빠지는 등의 증상이 있을 수 있다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#pelvis" href="#pelvis-4" class="collapsed">
                                    윤활낭염(=점액낭염)
                                </a>
                            </h4>
                        </div>
                        <div id="pelvis-4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    어깨, 팔, 무릎, 골반, 엉덩이, 아킬레스힘줄에 존재하는 윤활낭에 많이 생깁니다. 뼈가 많이 돌출된 부위에 불거져나온 혹이 대부분은 윤활낭염입니다. 외상, 간염, 반성적 자극 등 외적요인으로 인해 염증이 생기는데 그 통증이 심합니다. 특히 오랫동안 앉아서 일하는 경우에는 고관절(엉덩이관절) 주위에 있는 윤활낭에도 이 질병이 생길 수 있습니다. 혹은 너비가 좁거나 높은 구두를 신는 사람들은 발부위에 이 질병이 생길 수 있습니다. 
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>통증이 심하며 염증 부위의 움직임이 어렵다.</li>
                                    <li>반복적 외상에 의한 만성 외상성 윤활낭염은 윤활낭의 벽이 점차 두꺼워지고, 섬유화되며, 동통성 종창이 생기기도 한다.</li>
                                    <li>합병증으로 관절 운동이 어려운 경우도 나타날 수 있다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="knee">
                <div class="section-header">
                    <h2>무릎</h2>
                </div>
                <div class="panel-group pelvis-list" id="knee">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#knee" href="#knee-1" >
                                    퇴행성관절염
                                </a>
                            </h4>
                        </div>
                        <div id="knee-1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    뼈와 근육, 인대가 퇴행되어 염증이 일어나 기능이 손상되고 통증이 발생하는 질환입니다. 관절의 염증성 질환 중 가장 높은 비율을 가지고 있습니다. 대부분 고령에서 질환이 발생하고, 노화와 연관된 변화가 퇴행성 관절염의 발생 위험을 증가시키기는 하지만 노화 자체를 원인으로 보기만은 어렵습니다.    
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>초기에 해당관절을 움직일 때 통증이 심해지는 양상이 보인다.</li>
                                    <li>관절 운동 범위가 감소할 수 있다.</li>
                                    <li>관절의 마찰음이 느껴지며 증상이 좋아졌다 나빠지는 간헐적인 경과를 보이기도 한다.</li>
                                    <li>관절염이 생긴 부위별로 특징적인 증상이 보이기도 하는데, 무릎의 경우 관절 모양의 변형과 걸음걸이에 이상을 보일 수 있고, 손가락 관절염의 경우 손가락 끝 마디에 뼈가 덧 자라나는 형상을 보이기도 한다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#knee" href="#knee-2" class="collapsed">
                                   류마티스관절염
                                </a>
                            </h4>
                        </div>
                        <div id="knee-2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    다발성 관절염을 특징으로 하는 자가 면역성 만성 염증 질환입니다. 초기에는 관절을 싸고 있는 활막에 염증이 발생하다 점차 연골과 뼈로 염증이 퍼져 관절의 파괴와 변형을 초래하게 됩니다.  
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>전신에 피로감이 들고 열이나며 입맛이 없고 체중이 감소한다.</li>
                                    <li>아침 혹은 오랜시간 한 자세로 서 있는 경우 관절이 뻣뻣해져 움직이기 힘든 조조강직이 1시간 이상 지속된다.</li>
                                    <li>관절을 만지면 아프고 움직임이 제한되며 손물을 뒤로 굽히는데 장애가 생긴다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#knee" href="#knee-3" class="collapsed">
                                    반월상연골파열
                                </a>
                            </h4>
                        </div>
                        <div id="knee-3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                   반월상연골은 넙다리뼈와 정강뼈 사이에 있는 C형의 반달모양의 연골로, 무릎의 충격을 흡수하는 섬유 연골성 조직입니다. 무릅이 굴곡하며 동시에 회전운동이 가해질 때 손상이 일어나게 됩니다. 생활 중 갑자기 무릎에서 소리가 난 후 통증이 일어나지만 방치하는 경우가 많은데, 이럴 때는 연골파열을 의심해야 합니다. 단순히 넘긴 반월상 연골파열이 퇴행성관절염을 일으킬 수 있는 위험요인이 되기도 하기 때문입니다. 
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>압통 : 관절부위를 따라 압통이 발생된다.</li>
                                    <li>딱딱 소리등이 들리며 걷기 어렵거나 운동장애가 나타나게 된다.</li>
                                    <li>무릎에 힘이 빠져 ‘주저앉음’ 증상이 순간적으로 나타납니다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#knee" href="#knee-4" class="collapsed">
                                    전방십자인대 손상
                                </a>
                            </h4>
                        </div>
                        <div id="knee-4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    십자인대는 무릎을 움질 일 때 뼈가 앞으로 이탈되거나 뒤로 이탈되는 것을 막아주는 역할을 합니다. 보통 축구나, 농구, 스키와 같이 격렬한 스포츠 활동을 할 때 갑작스런 방향전환 및 무릎의 회전이 큰 운동으로 인해 부상이 발생하는 경우가 많습니다. 교통사고나 낙상과 같은 외부충격으로도 십자인대의 손상이 발생됩니다. 이런 인대가 파열되어도 보행에 무리가 없거나 통증이 심하지 않은 경우도 있습니다. 통증이 없더라도 십자인대의 파열은 무릎의 불안정을 초래하여 퇴행성관절염으로 발전될 수 있기 때문에 전문가의 치료를 받아야 합니다. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#knee" href="#knee-5" class="collapsed">
                                    후방십자인대 손상
                                </a>
                            </h4>
                        </div>
                        <div id="knee-5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    후방십자인대는 견골이 대퇴골에 대하여 후방으로 움직이는 것을 막아주는 역할을 합니다. 넘어지면서 무릎을 땅에 부딪히는 경우 무릎 아래의 경골이 뒤로 밀리거나, 조수석에 앉아있다 사고가 날 경우 차의 구조물이 뒤로 밀리면서 후방십자인대 손상이 생기기도 합니다. 십자인대가 손상될 때 ‘뚝’하는 소리의 파열음이 들릴 수는 있으나 항상 들리지는 않습니다. 
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>손상이후 하루 이내에 무릎이 붓기 시작한다.</li>
                                    <li>급성기에는 걸을 수 없을 정도의 통증이 생긴다.</li>
                                    <li>2-3주이후에 가라앉지만 운동중이나 계단, 비탈길 등에서 무릎이 휘청거리거나 어긋나는 기분이 들 수 있으며 무릎에 만성 통증이 발생할 수 있다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#knee" href="#knee-6" class="collapsed">
                                    슬개골연골연화증
                                </a>
                            </h4>
                        </div>
                        <div id="knee-6" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    슬개골의 안쪽 연골이 단단함을 잃고 약해지는 증상입니다. 주로 슬관절의 앞쪽에서 통증이 발생합니다. 이러한 슬개골연골연화증은 만성적인 무릎 통증의 원인으로서 육상선수 뿐만 아니라 성인이나 노인에게서도 발생할 수 있습니다. 장시간 가부좌로 앉는 자세나 무릎을 꿇고 앉아있는 자세가 증상을 악화시킬 수 있습니다. 
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>일반적으로 슬관절 주위의 통증에 국한되며 슬개골 전방부에 뻐근한 통증이 심하다.</li>
                                    <li>슬관절을 구부릴 때 마찰소리가 나며 통증이 있다. </li>
                                    <li>장기간 통증이 지속되어 슬개골이 연화되면 열감이 느껴지며 슬관절 주변부에 부종이 발생한다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#knee" href="#knee-7" class="collapsed">
                                    슬개대퇴증후군
                                </a>
                            </h4>
                        </div>
                        <div id="knee-7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    슬개대퇴증후군의 증상은 갑자기 계단을 오르내리거나 오랫동안 의자에 앉아있다 무릎에 통증을 느끼는 경우가 많습니다. 슬개대퇴증후군은 무릎앞쪽의 슬개골과 대퇴골이 잘 맞물리지 않기 때문입니다. 슬개골은 무릎을 직각으로 구부리면 만져지는 삼각형 모양의 편편한 뼈를 말하고, 대퇴골은 허벅지 뼈를 말합니다. 이 두 뼈(슬개골과 대퇴골)가 잘 맞지 않으면 무릎을 굽힐 때 뼈가 어긋나게되고 주변 인대가 다른 방향으로 당혀기면서 무릎에 통증을 느끼게 되는 것입니다. 슬개대퇴증후군을 방치하게되면 퇴행성 관절염과 슬개골연골연화증으로 악화될 수 있기 때문에 초기에 정확히 진단받고 적절한 치료를 병행하는 것이 중요합니다. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#knee" href="#knee-8" class="collapsed">
                                    슬개건염
                                </a>
                            </h4>
                        </div>
                        <div id="knee-8" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    슬개건은 무릎의 힘줄로, 무릎을 펴는 데 매우 중요한 역할을 합니다. 슬개건염은 이 힘줄을 무리하게 사용하거나 자극을 많이 주는 경우, 혹은 다쳐서 부어 오르고 아프게 되면 균이 침범하여 발생 할 수 있습니다. 
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>무릎 앞쪽의 힘줄을 따라 통증이 있다. </li>
                                    <li>농구, 테니스, 조깅 등의 운동을 하면 증상이 심해지며 열감이 나며 붓기도 한다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#knee" href="#knee-9" class="collapsed">
                                    햄스트링 통증 - 뒷넙다리근 좌상
                                </a>
                            </h4>
                        </div>
                        <div id="knee-9" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    운동선수 뿐만 아니라 운동을 즐겨하는 일반인에게도 흔하게 볼 수 있는 근육손상으로 햄스트링 근-힘줄 이행부에서 부상 시 뚝 소리와 함께 가장 흔히 발생합니다. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ankle">
                <div class="section-header">
                    <h2>발목과 발</h2>
                </div>
                <div class="panel-group pelvis-list" id="ankle">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#ankle" href="#ankle-1" >
                                    발바닥 통증 - 족저근막염 (발바닥근막염)
                                </a>
                            </h4>
                        </div>
                        <div id="ankle-1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    발바닥의 근막을 과다하게 사용하여 염증이 생기는 증상입니다. 일반적으로 운동을 처음 시작하거나 갑자기 운동량을 늘려서 발에 긴장을 가할 때 발생합니다. 처음 몇 걸음을 옮길 때 발바닥의 근막이 긴장되기 때문에, 아침에 일어났을때, 앉았다가 일어날 때 통증이 가장 심합니다. 만성적인 통증이 진행될 수 있고, 보행습관이 변화되기 때문에 무릎, 엉치부분, 허리에도 통증이 올 수 있습니다. 주된 원인은 엄지발가락을 올린 상태에서 체중을 실을 때 발바닥 근막이 심하게 스트레스를 받기 때문입니다.     
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>아침에 일어났을 때, 앉았다 일어날 때 발바닥에 통증이 힘하게 느껴진다.</li>
                                    <li>서 있지 않으면 증상이 나아진다. </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#ankle" href="#ankle-2" class="collapsed">
                                   아킬레스 건염
                                </a>
                            </h4>
                        </div>
                        <div id="ankle-2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    아킬레스건은 장딴지근육의 힘줄로 우리 몸에서 가장 강력하고 큰 힘줄입니다. 활동적인 중년에 종아리 뒤쪽 통증이 야기되며 심한 경우엔 파열이 되기도 합니다.   
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>아킬레스건의 힘줄이 서서히 붉어지거나 열이나며 붓는다.</li>
                                    <li>운동 전/후에 통증이 있으며 굳어지는 느낌이 있다.</li>
                                    <li>발목을 움직일 때 소리가 나기도 한다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#ankle" href="#ankle-3" class="collapsed">
                                    족부건염
                                </a>
                            </h4>
                        </div>
                        <div id="ankle-3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                   발에는 발과 발가락, 발목을 움직이는 수많은 힘줄이 지나갑니다. 발 부위의 힘줄은 보행과 신체 활동 시 끊임없이 작용하고 긴장하기 때문에 건염이 흔하게 발생할 수 있습니다. 외상이 있거나 스포츠등의 활동으로 발이 과사용 될 시 발생할 수 있습니다. 
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>힘줄이 지나가는 부위의 통증, 부종, 압통이 발생한다. </li>
                                    <li>보행이나 신체적 활동 시 이 통증이 악화된다. </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#ankle" href="#ankle-4" class="collapsed">
                                    지간신경종
                                </a>
                            </h4>
                        </div>
                        <div id="ankle-4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    족지에 분포하는 지간신경 주위 조직에 섬유화가 나타나 전체발의 통증을 일으키는 질환입니다. 앞볼이 좁은 신발을 신거나, 굽이 높은 신발을 신는 경우에는 이러한 신경 압박 증세가 악화되기도 한다. 
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>걸을 때 앞 발바닥에 타는 듯한 통증이 느껴진다.</li>
                                    <li>발가락의 저린 느낌이나 무감각한 느낌이 동반되기도 한다.</li>
                                    <li>발을 완전히 폈을 때 통증이 나타나고 굽히면 통증이 사라진다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#ankle" href="#ankle-5" class="collapsed">
                                    족부관절염
                                </a>
                            </h4>
                        </div>
                        <div id="ankle-5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    족부관절은 보행과 일상생활 동작 중 지속적인 체중부하를 받는 구조이기 때문에 관절염이 흔하게 발생할 수 있습니다. 주로 스포츠를 많이 하는 사람에게 흔하게 발생되며 오래 서 있거나 걷는 직업을 가진 사람에게서 흔히 발생합니다. 일부에선 류마티스 관절염과 같은 염증성 관절염이 원인이 되기도 합니다. 증상이 지속될 경우 편평족, 외전족과 같은 구조적 변형이 발생할 수 있습니다. 
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>발이 붓고 걷는데 문제가 생긴다.</li>
                                    <li>발이 민감해지며 통증이 느껴지고 발이 뻐근해지며 발을 움직이는 능력이 줄어듭니다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#ankle" href="#ankle-6" class="collapsed">
                                    중족골통
                                </a>
                            </h4>
                        </div>
                        <div id="ankle-6" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    오래서있거나 걸을 때와 같이 발이 심한 압박을 받을 때 발의 앞부분에 생기는 통증을 말합니다. 중족골은 발 앞쪽의 가장 넓은 부위를 말하며 이 부위에 통증이 생기는 질환입니다. 이를 방치할 시 피부가 딱딱해지는 티눈이나 못이 생기고 엄지발가락뼈가 휘는 무지외반증으로 진행되기도 합니다. 중족골통은 성장과정에서 발의 아치가 불안정하게 발달하거나, 잘못된 보행습관등에 의해 아치의 구조적 안정성에 문제가 생기는 경우가 많습니다. 장시간 서있거나 무리한 운동이 과도한 압력을 만들기 때문에 운동을 하는 남성이나 높은 구두를 즐겨신는 여성에게 많이 나타납니다.  
                                </p>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>발바닥 앞쪽에 통증이 느껴지며 발바닥이 화끈거리는 느낌이 들 수 있다.</li>
                                    <li>신발을 신고 걸을 때 모래나 이물질이 들어있는 기분이 든다. </li>
                                    <li>발 앞쪽에 굳은살이 생기고 이 굳은 살에 의해 통증이 더 심해진다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#ankle" href="#ankle-7" class="collapsed">
                                    피로골절(족부)
                                </a>
                            </h4>
                        </div>
                        <div id="ankle-7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    뼈의 피로현상으로 일어나는 골절을 피로골절이라 합니다. 반복적인 외부 힘에 의해 골조직 파손되어 골절됩니다. 토끼뜀뛰기에 의해 비골의 피로골절이 이루어 지는 것으로 피로골절이 가장 많이 알려져있습니다. 반복적인 달리기나 점프의 반복에 의해 일어납니다. 뼈에 과도한 스트레스가 지속적으로 쌓여 미세한 골절형태로 나타나는 부상으로 골절부의 이상가동성이 없어 일반인이 진단하기 어렵습니다. 전문가의 정확한 진단이 필수적입니다. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#ankle" href="#ankle-8" class="collapsed">
                                    발목염좌
                                </a>
                            </h4>
                        </div>
                        <div id="ankle-8" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>
                                    ‘삐끗했다’,’삐었다’고 하는 증상으로 인대나 근육이 늘어나거나 끊어지는 것을 말합니다.  이 과정에서 발목을 지탱하는 인대들이 손상되어 발목이 뒤틀리게 되는데 적절한 시기에 치료를 받지 않으면 인대가 느슨한 위치에서 아물어 반복적인 손상이 발생될 수 있습니다. 
                                </p>
                                <dl>
                                    <dt>1도 염좌</dt>
                                    <dd>인대가 조금 늘어난 상태로 발목의 불안정성은 없고 경도의 통증과 부종이 생길 수 있습니다.</dd>
                                    <dt>2도 염좌</dt>
                                    <dd>인대에 부분 파열이 있으며 발목관절에 약간의 불안정성과 중등도의 통증과 부종이 생길 수 있습니다.</dd>
                                    <dt>3도 염좌</dt>
                                    <dd>인대의 완전 파열로 발목관절에 불안정성이 생기며 심한 통증과 부종이 동반됩니다.</dd>
                                </dl>
                                <h5>증상</h5>
                                <ul class="arrow-list">
                                    <li>급성기 발목염좌에는 서있기가 힘들 정도의 통증이 있다.</li>
                                    <li>통증부위가 쓰리고 시큰거리는 느낌이 든다.</li>
                                    <li>서거나 걸을 때 발목이 불안정한 느낌이 든다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- // 실제 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
	<? if($cnum){ ?>
	<script>
	(function(){
		var ptop = $(".panel-default").eq(<?=$cnum-1?>).offset().top - 100;
		$("body, html").stop().animate({"scrollTop":ptop+"px"}, 600, function(){ $(".panel-default").eq(<?=$cnum-1?>).find("a:first").trigger("click"); });
	})(jQuery)
	</script>
	<? } ?>
</body>
</html>
