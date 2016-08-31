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
    <main id="content" class="outpatient muscle-pain"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
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
                <li role="presentation" class="active">
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
                    <h2>근육통 / 만성통증클리닉</h2>
                </div>
                <p>
                    대다수의 사람들은 어깨나 허리에 근육의 결림 혹은 뭉침 같은 증상을 갖고 살고 있습니다. 사람들은 이를 통증보다는 불편감으로 인지하면서 생활하고 있으나 이는 명백하게 통증이며, 일상생활에 방해를 주지 않는다 하더라도 통증 자체가 몸에서 보내는 위험신호이기 때문에 조심해야 합니다.  근육의 뭉침 증상의 경우에도 당장은 통증이 심하지 않기 때문에 방심할 수 있겠으나 쌓이게 되면 주변 구조에 영향을 주면서 다양한 증상이 올 수 있습니다. 이와 같은 근육이 뭉치는 듯한 증상들이 오래 지속되면 그 강도와 빈도가 증가하게 되면서 만성통증으로 발달하게 됩니다. 만성 통증은 그 원인을 찾기가 어려우며 치료도 쉽지 않기 때문에 해당 정도까지 진행되기 전에 해결하는 것이 좋으며, 만약 진행이 되었다 하면 전문적인 통증재활치료를 통해 체계적으로 풀어나가야 합니다. 이에 대해서는 도수치료, 주사치료, 자세교정 등 다양한 치료가 필요하며, 추후 재발을 막기 위해 충분한 교육 및 일상생활습관 개선이 중요합니다.
                </p>
            </section>
        </div>
        <!-- // 실제 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
