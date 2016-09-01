<?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/dochead.php'); ?>
<link href="/en/assets/css/sub.css" rel="stylesheet" />
<link href="/en/assets/css/promotional.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/header.php'); ?>
	<div class="page-header page-header-1">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li><a href="#">홍보센터</a></li>
				<li class="active">보도자료</li>
			</ol>
			<hr>
			<h1>보도자료</h1>
			<p>언론에 소개된 다비육종</p>
		</div>
	</div>
	<main id="content" tabindex="-1" class="promotional notice-list qna">
		<div class="container">
			<div class="search-area" style="margin:30px 0;">
                <form>
                    <div class="form-group">
                        <select class="form-control">
                            <option value="title">제목</option>
                            <option value="content">내용</option>
                            <option value="username">작성자</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="search-keyword" class="sr-only">검색어</label>
                        <input id="search-keyword" type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button>
                </form>
            </div>
            <div class="table-wrap">
                <table class="table table-border">
                    <colgroup>
                        <col style="width: 150px;">
                        <col style="width: 570px;">
                        <col style="width: 150px;">
                        <col style="width: 150px;">
                        <col style="width: 150px;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>번호</th>
                            <th>제목</th>
                            <th>작성자</th>
                            <th>등록일</th>
                            <th>조회수</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="subject">
                                <a href="#">
                                    동아텍에 대해 (1)
                                </a>
                            </td>
                            <td>(주)비알테크놀로지</td>
                            <td>2016-01-01</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="subject">
                                <a href="#">
                                    <span class="reply">RE</span> 동아텍에 대해
                                </a>
                            </td>
                            <td>다비육종</td>
                            <td>2016-01-01</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="subject">
                                <a href="#">
                                    대요크셔돼지 몸길이 꼭좀 알고싶습니다. (2)
                                </a>
                            </td>
                            <td>홍길동</td>
                            <td>2016-01-01</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="subject">
                                <a href="#">
                                    흑돼지 품종에 대한 문의입니다.
                                </a>
                            </td>
                            <td>홍길동</td>
                            <td>2016-01-01</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="subject">
                                <a href="#">
                                    제발 빠른답변 부탁드려요!!
                                </a>
                            </td>
                            <td>홍길동</td>
                            <td>2016-01-01</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="subject">
                                <a href="#">
                                    흑돼지 품종에 대한 문의입니다.
                                </a>
                            </td>
                            <td>홍길동</td>
                            <td>2016-01-01</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="subject">
                                <a href="#">
                                    제발 빠른답변 부탁드려요!!
                                </a>
                            </td>
                            <td>홍길동</td>
                            <td>2016-01-01</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="subject">
                                <a href="#">
                                    대요크셔돼지 몸길이 꼭좀 알고싶습니다.
                                </a>
                            </td>
                            <td>홍길동</td>
                            <td>2016-01-01</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="subject">
                                <a href="#">
                                    제발 빠른답변 부탁드려요!!
                                </a>
                            </td>
                            <td>홍길동</td>
                            <td>2016-01-01</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="subject">
                                <a href="#">
                                    흑돼지 품종에 대한 문의입니다.
                                </a>
                            </td>
                            <td>홍길동</td>
                            <td>2016-01-01</td>
                            <td>100</td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-green" role="button">글쓰기</a>
                    </p>
                </div>
                <nav class="paging">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="first-Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&lsaquo;</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next" >
                                <span aria-hidden="true">&rsaquo;</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="end-Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
		</div>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/docfoot.php'); ?>
</body>
</html>
