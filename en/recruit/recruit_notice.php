<?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/dochead.php'); ?>
<link href="/en/assets/css/sub.css" rel="stylesheet" />
<link href="/en/assets/css/recruit.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/header.php'); ?>
	<div class="page-header page-header-1">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li><a href="#">채용정보</a></li>
				<li class="active">채용공지</li>
			</ol>
			<hr>
			<h1>채용공지</h1>
			<p>채용 중인 다비육종의 공고를 확인하세요.</p>
		</div>
	</div>
	<main id="content" tabindex="-1" class="recruit recruit-notice">
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
                        <col style="width: 300px;">
                        <col style="width: 150px;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>번호</th>
                            <th>제목</th>
                            <th>접수기한</th>
                            <th>진행상황</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="subject">
                                <a href="#">
                                    2015년 하반기 직원채용 공고
                                </a>
                            </td>

                            <td class="date">2016-01-01 ~ 2016-12-31</td>
                            <td><span class="ongoing">접수중</span></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="subject">
                                <a href="#">
                                    2015년 상반기 직원채용 공고
                                </a>
                            </td>
                            <td>2016-01-01 ~ 2016-12-31</td>
                            <td><span class="deadline">접수마감</span></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="subject">
                                <a href="#">
                                    2014년 하반기 직원채용 공고
                                </a>
                            </td>
                            <td>2016-01-01 ~ 2016-12-31</td>
                            <td><span class="deadline">접수마감</span></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="subject">
                                <a href="#">
                                    2014년 상반기 직원채용 공고
                                </a>
                            </td>
                            <td>2016-01-01 ~ 2016-12-31</td>
                            <td><span class="deadline">접수마감</span></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="subject">
                                <a href="#">
                                    2013년도 하반기 신입 직원채용 공고
                                </a>
                            </td>
                            <td>2016-01-01 ~ 2016-12-31</td>
                            <td><span class="deadline">접수마감</span></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="subject">
                                <a href="#">
                                    2013년도 상반기 신입 직원채용 공고
                                </a>
                            </td>
                            <td>2016-01-01 ~ 2016-12-31</td>
                            <td><span class="deadline">접수마감</span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="subject">
                                <a href="#">
                                    장교 전역(예정)자 특별채용 공고
                                </a>
                            </td>
                            <td>2016-01-01 ~ 2016-12-31</td>
                            <td><span class="deadline">접수마감</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="subject">
                                <a href="#">
                                    영업관리 직원 채용
                                </a>
                            </td>
                            <td>2016-01-01 ~ 2016-12-31</td>
                            <td><span class="deadline">접수마감</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="subject">
                                <a href="#">
                                    다비육종과 함께 할 인재를 모집합니다.(회계사무원)
                                </a>
                            </td>
                            <td>2016-01-01 ~ 2016-12-31</td>
                            <td><span class="deadline">접수마감</span></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="subject">
                                <a href="#">
                                    유능한 인재를 모집합니다.
                                </a>
                            </td>
                            <td>2016-01-01 ~ 2016-12-31</td>
                            <td><span class="deadline">접수마감</span></td>
                        </tr>
                    </tbody>
                </table>
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
