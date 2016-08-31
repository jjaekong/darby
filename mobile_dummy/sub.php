<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>

</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content" class="">
        <div class="page-title">
            <h2>
                인사말<br>
                <small>CEO Message</small>
            </h2>
        </div>
        <div class="container">
            <section>
                <div class="section-header">
                    <h3>SRC재활병원은 1961년 물리치료실을 개원하여 오늘에 이르기까지 국내 재활의료서비스를 선도하는 대한민국 대표 재활병원으로 운영되고 있습니다.</h3>
                </div>
            </section>
            <div clas="btn-area" style="padding-top: 50px; padding-bottom: 50px;">
                <p style="text-align: center;">
                    <a href="#" class="btn btn-pink">동의서 다운로드</a>
                    <a href="#" class="btn btn-gray">위임장 다운로드</a>
                    <a href="#" class="btn btn-line">동의서 다운로드</a>
                </p>
            </div>
            <nav class="paging">
                <ul class="pagination">
                    <li>
                        <a class="first" href="#" aria-label="처음 페이지"><img src="/mobile/images/ico_double_arrow_left.png" height="7" alt=""></a>
                    </li>
                    <li>
                        <a class="prev" href="#" aria-label="이전 페이지"><img src="/mobile/images/ico_arrow_left.png" height="7" alt=""></a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a class="next" href="#" aria-label="다음 페이지"><img src="/mobile/images/ico_arrow_right.png" height="7" alt=""></a>
                    </li>
                    <li>
                        <a class="last" href="#" aria-label="마지막 페이지"><img src="/mobile/images/ico_double_arrow_right.png" height="7" alt=""></a>
                    </li>
                </ul>
            </nav>
            <div class="search-area">
                <form>
                    <div class="form-group">
                        <select class="form-control">
                            <option value="">전체</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="search-keyword" class="sr-only">검색어</label>
                        <input id="search-keyword" type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button>
                </form>
            </div>
            <ul class="category" role="tablist">
                <li role="presentation" class="active"><a href="#" role="tab">분류#1</a></li>
                <li role="presentation"><a href="#" role="tab">분류#2</a></li>
                <li role="presentation"><a href="#" role="tab">분류#3</a></li>
                <li role="presentation"><a href="#" role="tab">분류#4</a></li>
                <li role="presentation"><a href="#" role="tab">분류#5</a></li>
                <li role="presentation"><a href="#" role="tab">분류#6</a></li>
                <li role="presentation"><a href="#" role="tab">분류#2</a></li>
                <li role="presentation"><a href="#" role="tab">분류#3</a></li>
                <li role="presentation"><a href="#" role="tab">분류#4</a></li>
                <li role="presentation"><a href="#" role="tab">분류#5</a></li>
                <li role="presentation"><a href="#" role="tab">분류#6</a></li>
            </ul>
            <ul class="board-list">
                <li>
                    <a href="#">
                        <span class="tag">[통증외래]</span>
                        <p>SRC 병원이 있어 든든합니다. SRC 병원이 있어 든든합니다. SRC 병원이 있어 든든합니다. SRC 병원이 있어 든든합니다. SRC 병원이 있어 든든합니다. SRC 병원이 있어 든든합니다.</p>
                        <small>2016.04.03</small>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="tag">[통증외래]</span>
                        <p>SRC 병원이 있어 든든합니다.</p>
                        <small>2016.04.03</small>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="tag">[통증외래]</span>
                        <p>SRC 병원이 있어 든든합니다.</p>
                        <small>2016.04.03</small>
                    </a>
                </li>
            </ul>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>