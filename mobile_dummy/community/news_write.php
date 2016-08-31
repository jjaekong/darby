<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/community.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="community news-write">
		<div class="page-title">
			<h2>병원소식</h2>
		</div>
		<div class="write">
			<div class="container">
				<form class="write-form">
					<table>
						<colgroup>
							<col style="min-width: 80px" />
							<col style="min-width: 220px" />
						</colgroup>
						<tbody>
							<tr>
								<th><label for="user-name">작성자</label></th>
								<td><input type="text" class="form-control" id="user-name"></td>
							</tr>
							<tr>
								<th><label for="password">비밀번호</label></th>
								<td><input type="password" class="form-control" id="password"></td>
							</tr>
							<tr class="subject">
								<th><label for="subject">제목</label></th>
								<td><input type="text" class="form-control" id="subject"></td>
							</tr>
							<tr class="text-field">
								<td colspan="2"><textarea class="form-control"></textarea></td>
							</tr>
							<tr class="file">
								<th><label for="file">첨부파일</label></th>
								<td><input type="file" class="form-control" id="file"></td>
							</tr>
						</tbody>
					</table>
				</form>
				<div class="btn-area">
					<p>
						<a href="#" class="btn btn-pink">완료</a>
						<a href="#" class="btn btn-gray">목록</a>
					</p>
				</div>
			</div>
		</div>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>