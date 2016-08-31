<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/community.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="community health">
		<div class="page-title">
			<h2>건강정보</h2>
		</div>
		<?
		$is_mobile = true;
		$workType = "healthlist";
		include $dir."/module/board.php";
		?>
		<!--section class="health-info">
			<div class="container">
				<div class="section-header">
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
				</div>
				<div class="section-content">
					<ul class="board-list">
						<li>
							<a href="#">
								<span class="tag">[건강정보]</span>
								<p>뒷통수, 뒷목, 어깨가 뻣뻣하나요? 통증이 심한가뒷통수, 뒷목, 어깨가 뻣뻣하나요? 통증이 심한가</p>
								<small>2016.04.03</small>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="tag">[건강정보]</span>
								<p>근골격계질환 - 체외충격파치료</p>
								<small>2016.04.03</small>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="tag">[건강정보]</span>
								<p>오십견 - 유착성 견관절염의 치료</p>
								<small>2016.04.03</small>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="tag">[건강정보]</span>
								<p>당신의 척추는 안녕하신가요?</p>
								<small>2016.04.03</small>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="tag">[건강정보]</span>
								<p>체형 및 자세분석의 필요성</p>
								<small>2016.04.03</small>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="tag">[건강정보]</span>
								<p>뒷통수, 뒷목, 어깨가 뻣뻣하나요? 통증이 심한가뒷통수, 뒷목, 어깨가 뻣뻣하나요? 통증이 심한가</p>
								<small>2016.04.03</small>
							</a>
						</li>
					</ul>
				</div> 
				<div class="btn-area">
					<p>
						<a href="#" class="btn btn-pink">글쓰기</a>
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
			</div>
		</section-->
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>