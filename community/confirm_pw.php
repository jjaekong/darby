<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/css/community.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <div class="page-path">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#">비밀번호 확인</a></li>
            </ol>
        </div>
    </div>
    <main id="content" class="community confirm-pw">
        <div class="page-header">
            <h2>비밀번호 확인</h2>
        </div>
        <section class="confirm-section">
            <div class="container">
                <div class="confirm-form">
                    <h4>글 작성시 입력하신 비밀번호를 입력해주세요.</h4>
                    <form>
                        <div class="form-group">
                            <label for="login-pw" class="sr-only">비밀번호</label>
                            <input id="login-pw" class="form-control" type="password" name="#" placeholder="비밀번호를 입력해 주세요">
                        </div>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-confirm">확인</button>
                                <a href="#" class="btn btn-cancel">취소</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>