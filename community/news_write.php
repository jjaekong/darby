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
                <li class="active">병원소식</li>
            </ol>
        </div>
    </div>
    <main id="content" class="community news write">
        <div class="page-header">
            <h2>병원소식</h2>
        </div>
        <div class="container">
            <form>
                <table class="table">
                    <colgroup>
                        <col style="width: 220px">
                        <col>
                    </colgroup>
                    <tbody>
                        <tr class="writer">
                            <th><label for="writer">작성자</label></th>
                            <td><input id="writer" class="form-control" type="text" name=""></td>
                        </tr>
                        <tr class="password">
                            <th><label for="password">비밀번호</label></th>
                            <td><input id="password" class="form-control" type="password" name=""></td>
                        </tr>
                        <tr class="title">
                            <th><label for="title">제목</label></th>
                            <td><input id="title" class="form-control" type="text" name=""></td>
                        </tr>
                        <tr class="details">
                            <td colspan="2">
                                <textarea class="form-control" cols="100" rows="10" name=""></textarea>
                            </td>
                        </tr>
                        <tr class="attach">
                            <th>첨부파일</th>
                            <td><input class="form-control" type="file" name=""></td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-area">
                    <p>
                        <button type="submit" class="btn btn-submit">작성완료</button>
                        <a href="#" class="btn btn-cancel">작성취소</a>
                    </p>
                </div>
            </form>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>