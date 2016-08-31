<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet" />
<link href="/assets/css/promotional.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
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
	<main id="content" tabindex="-1" class="promotional data-write">
		<div class="container">
			<div class="table-wrap">
			    <table class="table table-border">
			        <colgroup>
			            <col style="width: 170px;">
			            <col style="width: 1000px;">
			        </colgroup>
			        <tbody>
			            <tr>
			                <th><label for="subject">제목</label></th>
			                <td><input type="text" id="subject"></td>
			            </tr>
			            <tr>
			                <th><label for="user-name">작성자</label></th>
			                <td><input type="text" id="user-name"></td>
			            </tr>
			            <tr>
			                <th><label for="user-pw">비밀번호</label></th>
			                <td><input type="password" id="user-pw"></td>
			            </tr>
			            <tr>
			                <td colspan="2">
			                    <textarea></textarea>
			                </td>
			            </tr>
			            <tr>
			                <th class="file"><label for="file">첨부파일</label></th>
			                <td><input type="file" id="file"></td>
			            </tr>
			            <tr>
			                <th><label for="link">Youtube 링크</label></th>
			                <td class="youtube"><input type="text" id="link"></td>
			            </tr>
			        </tbody>
			    </table>
			    <div class="btn-area">
			        <p>
			            <a href="#" class="btn btn-gray" role="button">목록보기</a>
			            <a href="#" class="btn btn-green" role="button">저장하기</a>
			        </p>
			    </div>
			</div>
		</div>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
