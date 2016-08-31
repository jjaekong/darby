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
    <main id="content" class="outpatient spine"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
        <div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
            <h2>재활의학과</h2>
        </div>
        <!-- 실제 작업 영역 -->
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li role="presentation" class="active">
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
                <li role="presentation">
                    <a href="/outpatient/rehabilitation/childbirth.php">산후재활클리닉</a>
                </li>
            </ul>
            <section class="spine-joint">
                <div class="section-header">
                    <h2>척추관절재활센터</h2>
                </div>
                <div class="section-content row">
                    <div class="col-xs-6 col-sm-6">
                        <p>
                            흔히 우리 몸에 통증이 있을 때 신체검사 후에 엑스레이와 초음파, 혹은 CT, MRI 등의 검사를 진행하고, 물리치료나 주사치료, 심할 경우 수술을 실시하는 것이 일반적입니다. 
                        </p>
                        <p>
                            그러나 이러한 치료를 통해 통증이 사라진다고 해도, 근본적인 원인까지 해결됐을지는 확답할 수 없는 상황임에도 불구하고 통증 치료 시에 환자들, 심지어 의료인들마저도 통증을 일으키는 부위만 치료하는데 그치는 경우가 대부분입니다. 통증을 느끼게 되면 그 상황을 최대한 빨리 밝혀내고, 본질적인 원인을 찾아서 해결하는 것이 중요합니다. 근육 및 뼈의 만성 통증은 대부분 특정 부위의 과도한 반복 사용으로 인한 질환이 원인이며
                        </p>
                        <p>
                            또한 해당 부위에 압력이 불균형하게 가해지거나, 이 부위를 안정화시켜 주는 다른 구조에 문제가 생기면서 발생할 수도 있습니다. 때문에 환자의 신체 상태, 자세, 평소의 생활습관까지 종합적으로 확인해서 근본적인 원인을 해결해야, 같은 질환의 재발 및 악화를 막을 수 있습니다. SRC 재활병원의 척추 관절 재활 센터에서는 척추와 관절의 통증에 대한 비수술적 치료를 목표로 하고 있습니다.
                        </p>
                    </div>
                    <div class="col-xs-6 col-sm-6">
                        <p>
                            정확한 진단을 위한 X ray, CT, 근골격계 초음파 등의 검사와 함께 통증의 완화를 위한 주사치료 및 체외충격파치료 등을 시행하고 있습니다. 병원 내에 체형분석, 족저압 분석, 보행 분석을 위한 완벽한 시스템이 갖추어져 있으며 이를 통한 통증의 원인분석을 시행하고 있습니다. 통증의 원인에 따른 환자 맞춤형의 치료를 시행하여 뼈와 관절의 정렬 이상 및 이탈구 등을 해결하고, 이완도수치료 및 강화도수치료를 통하여 특정 근육과 힘줄, 인대 구조의 단축과 변형 등의 문제를 해결하고 척추 및 관절 안정화 근육들을 강화하여 통증의 원인을 근본적으로 해결하고자 하고 있습니다.
                        </p>
                        <p>
                            또한 자연적으로는 잘 회복되지 않는 인대, 힘줄 그리고 연골의 손상에 대해서는 DNA 주사 및 프롤로 요법 등을 포함한 재생치료를 시행하여 수술 없이 통증의 근본원인 해결이 이루어지도록 하고 있습니다. 통증으로 고생하는 모든 분들이 아프지 않는 그날까지 저희 SRC 재활병원 척추 관절 재활 센터가 노력하겠습니다. 
                        </p>
                        <p>
                            감사합니다.
                        </p>
                    </div>
                </div>
            </section>
            <section class="spine-clinic">
                <div class="section-header">
                    <h2>척추클리닉</h2>
                </div>
                <div class="section-content">
                    <div class="panel-group therapy-list" id="therapy">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#therapy" href="#collapse-1" class="collapsed">
                                        허리디스크 - 요추간판탈출증
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-1" class="panel-collapse collapse">
                                <div class="panel-body">

                                    <p>
                                        척추는 목에서부터 경추, 흉추, 요추, 천골로 이루어져 있습니다. 척추뼈 사이에 물렁뼈를 디스크 라고 하며 외측 섬유륜과 내측의 수핵으로 되어있습니다. 건강한 수핵은 풍부한 수분으로 이루어져 있으나 퇴행성 변화가 일어나면서 수분 함량이 떨어지고 탄력성을 잃게 됩니다. 퇴행성 변화로 디스크의 수핵을 둘러싸고 있는 섬유륜이 찢어지고 그 사이로 수핵이 빠져나오게 되는데 이를 추간판 탈출증 이라고 하고 흔히 디스크 라고 합니다. 빠져나온 디스크는 신경을 누르게 되어 증상을 일으키게 됩니다. 
                                    </p>
                                    <h5>증상</h5>
                                    <ul class="arrow-list">
                                        <li>허리가 아프고 쑤신다. </li>
                                        <li>오래 앉아있으면 허리가 아프다.</li>
                                        <li>엉치, 허벅지, 종아리나 발끝이 저리거나 아프다.</li>
                                        <li>허리에서 다리까지 당기고 저리는 통증이 있다. </li>
                                        <li>서 있을 때 보다 앉아있을 때 허리가 더 아프다. </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#therapy" href="#collapse-2" class="collapsed">
                                        경추(목)디스크 - 경추간판탈출증
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        경추(목뼈) 사이사이의 디스크가 튀어나와 신경을 누르는 것으로 통증이 발생합니다
                                    </p>
                                    <h5>증상</h5>
                                    <ul class="arrow-list">
                                        <li>목디스크의 초기 증상은 보통 목과 어깨가 뻐근하고 결리는 증상에서 시작된다. </li>
                                        <li>손가락 및 손바닥이 저리거나 아픈 경우</li>
                                        <li>통증은 없지만 팔과 손에 힘이 빠지는 경우</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#therapy" href="#collapse-3" class="collapsed">
                                        척추측만증
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        건강한 척추의 경우 정면에서 보았을 때 일자로 반듯하지만, 척추측만증은 C자 혹은 S자로 척추가 휘어져 있습니다.   
                                    </p>
                                    <h5>증상</h5>
                                    <ul class="arrow-list">
                                        <li>허리를 굽혀보았을 때 양쪽 등의 높이가 다른 경우</li>
                                        <li>발의 길이가 차이나고 신발 굽이 한쪽만 먼저 닳는 경우</li>
                                        <li>거울을 보았을 때 허리라인의 좌우가 다른 경우</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#therapy" href="#collapse-4" class="collapsed">
                                        척추협착증(척추관협착증)
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        척추강 협착증은 척추강의 내경이 협소해짐에 따라 척추강 내 혈관과 신경조직의 압박을 초래하여 발생하는 척추통증입니다. 협착은 경막 안에 있는 내용물들을 압박하게 되거나 또는 주변 신경근의 국소적 압박을 가하게 되어 통증이 유발됩니다.
                                    </p>
                                    <h5>증상</h5>
                                    <ul class="arrow-list">
                                        <li>허리와 다리가 아프고 쑤신다 </li>
                                        <li>다리전체에 힘이 빠지고 마비가 된 느낌이 든다.</li>
                                        <li>다리가 저리고 당기면서 아프고 감각이 둔해진다.</li>
                                        <li>허리를 뒤로 젖히면 통증이 심하다.</li>
                                        <li>등산 중 산에 오를 때 보다 내려올 때 더 힘들다.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#therapy" href="#collapse-5" class="collapsed">
                                        후관절증후군
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        척추뼈와 뼈사이를 연결하는 척추뼈 뒤쪽에 존재하는 관절인 후관절의 디스크가 퇴화되어 퇴행성 변화에 의해 후관절이 손상되어 발생하는 질환입니다. 
                                    </p>
                                    <h5>증상</h5>
                                    <ul class="arrow-list">
                                        <li>비가 오거나 날씨가 흐릴 때 허리가 쑤신다.</li>
                                        <li>허리를 똑바로 펴기만 해도 아파서 허리를 구부정하게 유지하게 된다.</li>
                                        <li>허리를 앞으로 구부릴때는 통증이 호전되지만 뒤로 젖힐 때 통증이 심해진다.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#therapy" href="#collapse-6" class="collapsed">
                                        전방전위증 (척추전방전위증)
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                       한 척추뼈가 다른 척추 뼈 위 전방으로 튀어나오게 된 상태를 말합니다. 
                                    </p>
                                    <h5>증상</h5>
                                    <ul class="arrow-list">
                                        <li>허리가 아프고 쑤신다.</li>
                                        <li>오래 앉아있으면 허리가 아프다.</li>
                                        <li>엉치, 허벅지, 종아리나 발끝이 저리거나 아프다.</li>
                                        <li>허리에서 다리까지 당기고 저리는 통증이 있다. </li>
                                        <li>서 있을 때 보다 앉아있을 때 허리가 더 아프다. </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#therapy" href="#collapse-7" class="collapsed">
                                        척추분리증
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-7" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        말그대로 척추뼈가 분리된 상태를 말합니다. 척추추궁에 문제가 생겨 하나의 척추뼈가 분리되어 따로따로 움직이는 상태를 말합니다.
                                    </p>
                                    <h5>증상</h5>
                                    <ul class="arrow-list">
                                        <li>대부분 별 이상없이 지내다 나이가 들어 퇴행성 변화와 함께 악화된다.  </li>
                                        <li>평상시는 통증이 없으나 무리하면 요통 등이 나타날 때</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#therapy" href="#collapse-8" class="collapsed">
                                        척추압박골절
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-8" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        외부의 강한 힘에 의해 척추 모양이 납작해진 것처럼 변형되는 골절의 형태를 말합니다. 목뼈와허리에 자주 보입니다. 무거운 물체에 떨어진 것에 맞거나, 바닥에 부딪혔을 때, 엉덩이로 넘어져 척추에 과한 충격을 받은 경우에 발병합니다. 골다공증처럼 뼈 자체에 이상이 있을 때도 잘 발생합니다. 척추안의 척수도 손상될 우려가 있으며, 기침이나 재채기와 같이 가벼운 신체활동에 의해서 악화될 가능성이 있습니다. 
                                    </p>
                                    <h5>증상</h5>
                                    <ul class="arrow-list">
                                        <li>목뼈에 압박골절이 오게 되면 음식을 삼키기 어렵다. </li>
                                        <li>기침이나 재채기 등에 통증이 동반되고 안정을 취하면 증세가 조금 나아지는 것 같으면서도 통증이 지속된다.</li>
                                    </ul>
                                </div>
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
