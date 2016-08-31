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
                <li class="active">한의과</li>
            </ol>
        </div>
    </div>
    <main id="content" class="outpatient oriental-medicine"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
        <div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
            <h2>한의과</h2>
        </div>
        <!-- 실제 작업 영역 -->
        <div class="container">
            <section class="intro">
                <div class="section-header">
                    <h2>한의과 소개</h2>
                </div>
                <p>
                    한의과는 인체의 질병에 대한 한의학적 진단과 치료를 담당하고 있으며, 신경손상으로 인한 마비질환, 근골격계 질환, 기타 재활치료를 필요로 하는 질환 및 인체의 기혈허손으로 나타나는 병리적인 상태와 불균형 상태에 대한 관리까지 담당하여 건강한 삶의 증진을 위해 노력합니다. 또한 본원 양방진료와의 유기적인 협진을 통하여 입원환자들의 편리하고 다양한 치료를 받으실 수 있습니다. 
                </p>
                
                <div class="panel-group medicine-list" id="oriental-list">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#oriental-list" href="#collapse-1" >
                                    침구 치료
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <h4>정의</h4>
                                <p>
                                    경혈에 침치료를 통해 기혈의 흐름을 조절하고, 기의 순환 통로인 경락을 통해서 인체 내외의 근육 골격 및 오장육부의 부조화상태를 적절히 조절함으로써 건강한 상태에 도달하게 하는 방법입니다. 통증 및 마비질환의 치료에 많이 사용되고 있으며, 특히 관절 및 척추질환에 의한 통증 및 신경손상에 의한 마비질환에 탁월한 효과를 나타내고 있습니다. 아시아 국가에서 오랜 기간 동안 사용되어 온 치료 방법으로 현재 전 세계 거의 모든 나라에서 침구치료가 의학적 관점에서 시도되고 있으며, 특히 WHO(세계보건기구)와 NIH(미국국립보건원)에서도 침구치료의 효과에 대해 인정하고 효과를 연구하고 있습니다. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#oriental-list" href="#collapse-2" class="collapsed">
                                    통증 및 마비 질환
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-2" class="panel-collapse collapse">
                            <div class="panel-body">
                               <h4>정의</h4>
                                <p>
                                    내용
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#oriental-list" href="#collapse-3" class="collapsed">
                                    봉약침
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h4>정의</h4>
                                <p>
                                   내용
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#oriental-list" href="#collapse-4" class="collapsed">
                                    한약 클리닉
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h4>정의</h4>
                                <p>
                                   내용
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#oriental-list" href="#collapse-5" class="collapsed">
                                    보약 클리닉  
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h4>정의</h4>
                                <p>
                                    내용
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#oriental-list" href="#collapse-6" class="collapsed">
                                    항암 관리 
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-6" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h4>정의</h4>
                                <p>
                                    내용
                                </p>
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
</body>
</html>