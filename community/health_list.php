<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/css/community.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <div class="page-path">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#">커뮤니티</a></li>
                <li class="active">건강정보</li>
            </ol>
        </div>
    </div>
    <main id="content" class="community health list">
        <div class="page-header">
            <h2>건강정보</h2>
        </div>
		<?
		$workType = "healthlist";
		include $dir."/module/board.php";
		?>
        <!--div class="container">
            <div class="search-bar">
                <div class="search-form">
                    <form>
                        <div class="form-group">
                            <select class="form-control">
                                <option value="">전체</option>
                            </select>
                            <label for="search-keyword" class="sr-only">검색어</label>
                            <input id="search-keyword" type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button>
                    </form>
                </div>
            </div>
            <table class="table">
                <colgroup>
                    <col style="width: 90px;">
                    <col>
                    <col style="width: 120px;">
                    <col style="width: 120px;">
                </colgroup>
                <thead>
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>등록일</th>
                        <th>조회수</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>19</td>
                        <td><a href="#">소아병동 식목일체험활동 "단호박 밭에 예쁜 채소나무를 심어요" </a></td>
                        <td>2016. 04. 03</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td><a href="#">[SRC소식지] NEWS LETTER 13호 (발행일 : 16.04.05) </a></td>
                        <td>2016. 04. 03</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td><a href="#">SRC병원 김형빈 진료부장 국제의료기전시회 강의</a></td>
                        <td>2016. 04. 03</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td><a href="#">JTBC 드라마 마리앙트완 촬영협조</a></td>
                        <td>2016. 04. 03</td>
                        <td>15</td>
                    </tr>
                </tbody>
            </table>
            <div class="btn-area">
                <p>
                    <a href="#" class="btn btn-write">글쓰기</a>
                </p>
            </div>
            <nav class="paging">
                <ul class="pagination">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li class="ellipsis"><span class="glyphicon glyphicon-option-horizontal"></span></li>
                    <li><a href="#">10</a></li>
                </ul>
            </nav>
        </div-->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>