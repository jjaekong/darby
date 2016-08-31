<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/community.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="community photo-list">
		<div class="page-title">
			<h2>
				영상게시판
			</h2>
		</div>
		<?
		$is_mobile = true;
		$workType = "movie";
		include $dir."/module/board.php";
		?>
		<!--section class="photo">
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
					<ul class="photo-review row">
						<li class="col-xs-6">
							<figure>
								<img class="img-responsive" src="/mobile/images/community/photo_img1.gif" alt="재활치료 전/후 사진">
								<figcaption>
									김** 님의 재활치료 전/후 사진입니다.<br>
									<small>2016. 04. 03</small>
								</figcaption>
							</figure>
						</li>
						<li class="col-xs-6">
							<figure>
								<img class="img-responsive" src="/mobile/images/community/photo_img2.gif" alt="재활치료 전/후 사진">
								<figcaption>
									김** 님의 재활치료 전/후 사진입니다.<br>
									<small>2016. 04. 03</small>
								</figcaption>
							</figure>
						</li>
						<li class="col-xs-6">
							<figure>
								<img class="img-responsive" src="/mobile/images/community/photo_img1.gif" alt="재활치료 전/후 사진">
								<figcaption>
									김** 님의 재활치료 전/후 사진입니다.<br>
									<small>2016. 04. 03</small>
								</figcaption>
							</figure>
						</li>
						<li class="col-xs-6">
							<figure>
								<img class="img-responsive" src="/mobile/images/community/photo_img2.gif" alt="재활치료 전/후 사진">
								<figcaption>
									김** 님의 재활치료 전/후 사진입니다.<br>
									<small>2016. 04. 03</small>
								</figcaption>
							</figure>
						</li>
						<li class="col-xs-6">
							<figure>
								<img class="img-responsive" src="/mobile/images/community/photo_img1.gif" alt="재활치료 전/후 사진">
								<figcaption>
									김** 님의 재활치료 전/후 사진입니다.<br>
									<small>2016. 04. 03</small>
								</figcaption>
							</figure>
						</li>
						<li class="col-xs-6">
							<figure>
								<img class="img-responsive" src="/mobile/images/community/photo_img2.gif" alt="재활치료 전/후 사진">
								<figcaption>
									김** 님의 재활치료 전/후 사진입니다.<br>
									<small>2016. 04. 03</small>
								</figcaption>
							</figure>
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