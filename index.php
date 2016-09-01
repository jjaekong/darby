<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/main.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1">
        <div id="campaign">
            <ul>
                <li class="fist"></li>
                <li class="second"></li>
                <li class="third"></li>            </ul>
        </div>
        <div id="products">
            <div class="container">
                <ul class="row">
                    <li class="col-xs-3">
                        <figure>
                            <p><img src="/assets/images/main/img_product_1.jpg" alt=""></p>
                            <figcaption>
                                <h4>순종</h4>
                                <p>체계적인 육종프로그램을 활용한<br>고품질의 모계, 부계 순종돈</p>
                            </figcaption>
                        </figure>
                        <a href="/business/product/breeding_pig.php">자세히 보기</a>
                    </li>
                    <li class="col-xs-3">
                        <figure>
                            <p><img src="/assets/images/main/img_product_2.jpg" alt=""></p>
                            <figcaption>
                                <h4>F1</h4>
                                <p>높은 번식성적과 우수한 육질을<br>자랑하는 고능력 청정돈</p>
                            </figcaption>
                        </figure>
                        <a href="/business/product/darbyqueen.php">자세히 보기</a>
                    </li>
                    <li class="col-xs-3">
                        <figure>
                            <p><img src="/assets/images/main/img_product_3.jpg" alt=""></p>
                            <figcaption>
                                <h4>엑스펌</h4>
                                <p>비육돈 품질향상을 위한<br>인공수정용 액상정액</p>
                            </figcaption>
                        </figure>
                        <a href="/business/product/xperm.php">자세히 보기</a>
                    </li>
                    <li class="col-xs-3">
                        <figure>
                            <p><img src="/assets/images/main/img_product_4.jpg" alt=""></p>
                            <figcaption>
                                <h4>얼룩도야지</h4>
                                <p>육질혁명! 맛의 차별화 선언!<br>안전하고 맛있는 한돈</p>
                            </figcaption>
                        </figure>
                        <a href="/business/product/stain_pig.php">자세히 보기</a>
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
                            <a href="/introduce/darby_introduce.php">자세히 보기</a>
                        </div>
                    </section>
                    <section class="col-xs-6 business">
                        <div>
                            <h4>사업 소개</h4>
                            <p>
                                다비육종의 육종 개량 시스템은 한국 돼지 개량을 위한<br>
                                이정표를 제시하는 선도적 역할을 해 나가고 있습니다.
                            </p>
                            <a href="/business/product/breeding_pig.php">자세히 보기</a>
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
