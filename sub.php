<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	<div class="page-header page-header-1">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li><a href="#">회사소개</a></li>
				<li class="active">다비육종은</li>
			</ol>
			<hr>
			<h1>다비육종은</h1>
			<p>다비육종을 소개합니다.</p>
		</div>
	</div>
	<main id="content" tabindex="-1" class="sub">
		<div class="container">
			<section>
				<div class="section-header">
					<h3>복지제도</h3>
					<hr>
				</div>

				<div style="margin:30px 0;">
					<nav class="navbar">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">종동</a></li>
							<li><a href="#">F1</a></li>
							<li><a href="#">엑스펌</a></li>
							<li><a href="#">한돈</a></li>
							<li><a href="#">구입문의</a></li>
						</ul>
					</nav>
				</div>

				<div style="margin:30px 0;">
					<ul class="dot-list">
						<li>주 40시간 근무제 실시</li>
						<li>장기근속자 포상금픔 지급 및 국내 또는 해외여행기회부여 (부부동반)</li>
						<li>본인 및 배우자의 매년 정기적인 건강검진실시 (보험수가 이외의 추가 검진항목 설계)</li>
						<li>본인생일 및 자녀출산시 축하금-품 제공</li>
						<li>퇴직자 기념금품 제공</li>
					</ul>
				</div>

				<div style="margin:30px 0;">
					<ul class="arrow-list">
						<li>중부고속국도 일죽IC 진입</li>
						<li>삼거리에서 좌회전</li>
						<li>장호원, 충주 방향으로 1.7km 주행</li>
						<li>일죽IC타운 직전 교통신호에서 U턴</li>
						<li>현대오일뱅크 끼고 우회전</li>
						<li>도착</li>
					</ul>
				</div>

				<div class="table-wrap">
					<table class="table table-border">
						<colgroup>
							<col style="width:100px;"/>
							<col style="width:100px;"/>
							<col style="width:100px;"/>
							<col style="width:100px;"/>
						</colgroup>
						<thead>
							<tr>
								<th>subject</th>
								<th>subject</th>
								<th>subject</th>
								<th>subject</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>content</td>
								<td>content</td>
								<td>content</td>
								<td>content</td>
							</tr>
							<tr>
								<td>content</td>
								<td>content</td>
								<td>content</td>
								<td>content</td>
							</tr>
							<tr>
								<td>content</td>
								<td>content</td>
								<td>content</td>
								<td>content</td>
							</tr>
							<tr>
								<td>content</td>
								<td>content</td>
								<td>content</td>
								<td>content</td>
							</tr>
						</tbody>
					</table>
				</div>

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

				<div style="margin:30px 0;">
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
				<div class="btn-area" style="margin:30px 0;">
					<p>
						<a href="#" class="btn btn-green" role="button">목록보기</a>
						<a href="#" class="btn btn-gray" role="button">삭제하기</a>
					</p>
				</div>
				<div class="btn-area" style="margin:30px 0;">
					<p>
						<button type="submit" class="btn btn-green">확인</button>
					</p>
				</div>
			</section>
		</div>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>