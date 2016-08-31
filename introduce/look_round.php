 <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/css/introduce.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <div class="page-path">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#">병원소개</a></li>
                <li class="active">병원둘러보기</li>
            </ol>
        </div>
    </div>
    <main id="content" class="introduce look_round"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
        <div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
            <h2>병원둘러보기<br><small>Hospital navigation</small></h2>
        </div>
        <!-- 실제 작업 영역 -->
        <div class="container">
            <ul class="nav nav-pills nav-justified" role="tablist">
                <li role="presentation" class="active">
                    <a href="#nav-content-1" aria-controls="nav-content-1" role="tab" data-toggle="tab">재활병원</a>
                </li>
                <li role="presentation">
                    <a href="#nav-content-2" aria-controls="nav-content-2" role="tab" data-toggle="tab">요양병원</a>
                </li>
                <li role="presentation">
                    <a href="#nav-content-3" aria-controls="nav-content-3" role="tab" data-toggle="tab">건강증진센터</a>
                </li>
                <li role="presentation">
                    <a href="#nav-content-4" aria-controls="nav-content-4" role="tab" data-toggle="tab">요양원</a>
                </li>
                <li role="presentation">
                    <a href="#nav-content-5" aria-controls="nav-content-5" role="tab" data-toggle="tab">언어심리상담센터</a>
                </li>
                <li role="presentation">
                    <a href="#nav-content-6" aria-controls="nav-content-6" role="tab" data-toggle="tab">보듬터</a>
                </li>
                <li role="presentation">
                    <a href="#nav-content-7" aria-controls="nav-content-7" role="tab" data-toggle="tab">스포츠센터</a>
                </li>
                <li role="presentation">
                    <a href="#nav-content-8" aria-controls="nav-content-8" role="tab" data-toggle="tab">새롬학교</a>
                </li>
                <li role="presentation">
                    <a href="#nav-content-9" aria-controls="nav-content-9" role="tab" data-toggle="tab">법인사무국</a>
                </li>
                <li role="presentation">
                    <a href="#nav-content-10" aria-controls="nav-content-10" role="tab" data-toggle="tab">SRC교육관</a>
                </li>
            </ul>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane ward-1 active" id="nav-content-1">
                    <p>
                        <img src="/images/introduce/view_map.jpg" alt="src병원 조감도">
                        <a href="#" data-toggle="modal" data-target="#look-1" role="button">자세히<br>보기</a>
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane ward-2" id="nav-content-2">
                    <p>
                        <img src="/images/introduce/view_map.jpg" alt="src병원 조감도">
                        <a href="#" data-toggle="modal" data-target="#look-2" role="button">자세히<br>보기</a>
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane ward-3" id="nav-content-3">
                    <p>
                        <img src="/images/introduce/view_map.jpg" alt="src병원 조감도">
                        <a href="#" data-toggle="modal" data-target="#look-3" role="button">자세히<br>보기</a>
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane ward-4" id="nav-content-4">
                    <p>
                        <img src="/images/introduce/view_map.jpg" alt="src병원 조감도">
                        <a href="#" data-toggle="modal" data-target="#look-4" role="button">자세히<br>보기</a>
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane ward-5" id="nav-content-5">
                    <p>
                        <img src="/images/introduce/view_map.jpg" alt="src병원 조감도">
                        <a href="#" data-toggle="modal" data-target="#look-5" role="button">자세히<br>보기</a>
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane ward-6" id="nav-content-6">
                    <p>
                        <img src="/images/introduce/view_map.jpg" alt="src병원 조감도">
                        <a href="#" data-toggle="modal" data-target="#look-6" role="button">자세히<br>보기</a>
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane ward-7" id="nav-content-7">
                    <p>
                        <img src="/images/introduce/view_map.jpg" alt="src병원 조감도">
                        <a href="#" data-toggle="modal" data-target="#look-7" role="button">자세히<br>보기</a>
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane ward-8" id="nav-content-8">
                    <p>
                        <img src="/images/introduce/view_map.jpg" alt="src병원 조감도">
                        <a href="#" data-toggle="modal" data-target="#look-8" role="button">자세히<br>보기</a>
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane ward-9" id="nav-content-9">
                    <p>
                        <img src="/images/introduce/view_map.jpg" alt="src병원 조감도">
                        <a href="#" data-toggle="modal" data-target="#look-9" role="button">자세히<br>보기</a>
                    </p>
                </div>
                <div role="tabpanel" class="tab-pane ward-10" id="nav-content-10">
                    <p>
                        <img src="/images/introduce/view_map.jpg" alt="src병원 조감도">
                        <a href="#" data-toggle="modal" data-target="#look-10" role="button">자세히<br>보기</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- // 실제 작업 영역 -->
    </main>

    <!-- The Modal -->
    <div id="look-1" class="modal look-round">
    <!-- Modal content -->
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">
                <img src="/images/introduce/close_img02.png" alt="닫기">
            </button>
            <h1>SRC 재활병원</h1>
            <p>
                <img src="/images/introduce/detail_img1.jpg" alt="재활병원">
            </p>
        </div>
    </div>
    <!-- The Modal -->
    <div id="look-2" class="modal look-round">
    <!-- Modal content -->
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">
                <img src="/images/introduce/close_img02.png" alt="닫기">
            </button>
            <h1>SRC 재활병원</h1>
            <p>
                <img src="/images/introduce/detail_img2.jpg" alt="요양병원">
            </p>
        </div>
    </div>
    <!-- The Modal -->
    <div id="look-3" class="modal look-round">
    <!-- Modal content -->
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">
                <img src="/images/introduce/close_img02.png" alt="닫기">
            </button>
            <h1>SRC 재활병원</h1>
            <p>
                <img src="/images/introduce/detail_img3.jpg" alt="건강증진센터">
            </p>
        </div>
    </div>
    <!-- The Modal -->
    <div id="look-4" class="modal look-round">
    <!-- Modal content -->
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">
                <img src="/images/introduce/close_img02.png" alt="닫기">
            </button>
            <h1>SRC 재활병원</h1>
            <p>
                <img src="/images/introduce/detail_img4.jpg" alt="요양원">
            </p>
        </div>
    </div>
    <!-- The Modal -->
    <div id="look-5" class="modal look-round">
    <!-- Modal content -->
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">
                <img src="/images/introduce/close_img02.png" alt="닫기">
            </button>
            <h1>SRC 재활병원</h1>
            <p>
                <img src="/images/introduce/detail_img5.jpg" alt="언어심리상담센터">
            </p>
        </div>
    </div>
    <!-- The Modal -->
    <div id="look-6" class="modal look-round">
    <!-- Modal content -->
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">
                <img src="/images/introduce/close_img02.png" alt="닫기">
            </button>
            <h1>SRC 재활병원</h1>
            <p>
                <img src="/images/introduce/detail_img6.jpg" alt="보듬터">
            </p>
        </div>
    </div>
    <!-- The Modal -->
    <div id="look-7" class="modal look-round">
    <!-- Modal content -->
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">
                <img src="/images/introduce/close_img02.png" alt="닫기">
            </button>
            <h1>SRC 재활병원</h1>
            <p>
                <img src="/images/introduce/detail_img7.jpg" alt="스포츠센터">
            </p>
        </div>
    </div>
    <!-- The Modal -->
    <div id="look-8" class="modal look-round">
    <!-- Modal content -->
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">
                <img src="/images/introduce/close_img02.png" alt="닫기">
            </button>
            <h1>SRC 재활병원</h1>
            <p>
                <img src="/images/introduce/detail_img8.jpg" alt="새롬학교">
            </p>
        </div>
    </div>
    <!-- The Modal -->
    <div id="look-9" class="modal look-round">
    <!-- Modal content -->
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">
                <img src="/images/introduce/close_img02.png" alt="닫기">
            </button>
            <h1>SRC 재활병원</h1>
            <p>
                <img src="/images/introduce/detail_img9.jpg" alt="법인사무국">
            </p>
        </div>
    </div>
    <!-- The Modal -->
    <div id="look-10" class="modal look-round">
    <!-- Modal content -->
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">
                <img src="/images/introduce/close_img02.png" alt="닫기">
            </button>
            <h1>SRC 재활병원</h1>
            <p>
                <img src="/images/introduce/detail_img10.jpg" alt="SRC교육관">
            </p>
        </div>
    </div>


































    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
