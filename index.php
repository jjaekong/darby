<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/main.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1">
        <div id="campaign">
            <ul>
                <li>
                    <img src="/assets/images/main/img_campaign_1.jpg" alt="">
                </li>
                <li>
                    <img src="/assets/images/main/img_campaign_2.jpg" alt="">
                </li>
                <li>
                    <img src="/assets/images/main/img_campaign_3.jpg" alt="">
                </li>
            </ul>
        </div>
        <div id="products">
            <div class="container">
                <ul class="row">
                    <li class="col-xs-3">
                        <figure>
                            <p><img src="/assets/images/main/img_product_1.jpg" alt=""></p>
                            <figcaption>
                                <h4>종돈</h4>
                                <p>자체 육종 프로그램으로<br>최대두수 검정, BLUP, 계통별 분리 육종</p>
                            </figcaption>
                        </figure>
                        <a href="#">자세히 보기</a>
                    </li>
                    <li class="col-xs-3">
                        <figure>
                            <p><img src="/assets/images/main/img_product_2.jpg" alt=""></p>
                            <figcaption>
                                <h4>F1</h4>
                                <p>강건성과 육질 향상 두마리 토끼를 잡는<br>균일성이 뛰어난 고능력 청정돈</p>
                            </figcaption>
                        </figure>
                        <a href="#">자세히 보기</a>
                    </li>
                    <li class="col-xs-3">
                        <figure>
                            <p><img src="/assets/images/main/img_product_3.jpg" alt=""></p>
                            <figcaption>
                                <h4>엑스펌</h4>
                                <p>최고급 육질을 보장하는 웅돈과<br>고급육 생산의 분만율과 산자수 증가를 위한<br>인공수정용 액상 정액</p>
                            </figcaption>
                        </figure>
                        <a href="#">자세히 보기</a>
                    </li>
                    <li class="col-xs-3">
                        <figure>
                            <p><img src="/assets/images/main/img_product_4.jpg" alt=""></p>
                            <figcaption>
                                <h4>웰팜포크</h4>
                                <p>육질혁명! 맛의 차별화 선언!<br>마블링, 보수성 및 연도가 뛰어난 최고급육</p>
                            </figcaption>
                        </figure>
                        <a href="#">자세히 보기</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="introduce">
            <div class="container-fluid">
                <div class="row">
                    <section class="col-xs-6 company">
                        <div>
                            <h4>다비육종 소개</h4>
                            <p>
                                다비육종은 1983년 설립 이래로 한국 양돈산업의<br>
                                발전을 선도해온 기업으로서 그 행보 하나 하나가 <br>
                                한국 돼지의 표준을 제시하여 왔습니다.
                            </p>
                            <a href="#">자세히 보기</a>
                        </div>
                    </section>
                    <section class="col-xs-6 business">
                        <div>
                            <h4>사업 소개</h4>
                            <p>
                                다비육종의 육종 개량 시스템은 한국 돼지 개량을 위한<br>
                                이정표를 제시하는 선도적 역할을 해 나가고 있습니다.
                            </p>
                            <a href="#">자세히 보기</a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div id="promotion">
            <div class="container">
                <h3>다비육종 <b>홍보센터</b></h3>
                <ul class="row">
                    <li class="col-xs-4">
                        <a href="#">
                            <p style="background-image: url(/assets/images/main/img_pr_1.jpg);"><span></span></p>
                            <h4>제27회 다비퀸 세미나 성황리 개최 - PSY 30두 고객과</h4>
                            <span class="date">2015-11-20</span>
                        </a>
                    </li>
                    <li class="col-xs-4">
                        <a href="#">
                            <p style="background-image: url(/assets/images/main/img_pr_2.jpg);"><span></span></p>
                            <h4>제27회 다비퀸 세미나 성황리 개최 - PSY 30두 고객과</h4>
                            <span class="date">2015-11-20</span>
                        </a>
                    </li>
                    <li class="col-xs-4">
                        <a href="#">
                            <p style="background-image: url(/assets/images/main/img_pr_3.jpg);"><span></span></p>
                            <h4>제27회 다비퀸 세미나 성황리 개최 - PSY 30두 고객과</h4>
                            <span class="date">2015-11-20</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/js/jquery.bxslider.min.js"></script>
    <script>
        (function($) {
            $('#campaign ul').bxSlider();
        })(jQuery);
    </script>
</body>
</html>