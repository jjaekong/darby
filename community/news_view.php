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
    <main id="content" class="community news view">
        <div class="page-header">
            <h2>병원소식</h2>
        </div>
        <div class="container">
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
            <article class="article">
                <h4> 소아병동 식목일체험활동 "단호박 밭에 예쁜 채소나무를 심어요" 소아병동 식목일체험활동 "단호박 밭에 예쁜 채소나무를 심어요" 소아병동 식목일체험활동 "단호박 밭에 예쁜 채소나무를 심어요" 소아병동 식목일체험활동 "단호박 밭에 예쁜 채소나무를 심어요" <small>2016. 04. 03</small></h4>
                <div class="article-body">
                    <p><img src="/images/community/img_article_content.png" alt=""></p>
                    <br>
                    <p>
                        지난 4월 5일 식목일에 SRC재활병원 영양팀에서는 소아병동의 친구들과 함께 식목일 체험활동을 진행하였습니다. 
                        자연주의적인 SRC식단을 통해 소아친구들의 편식교정을 하기위한 이색적인 체험이었습니다. 
                        단호박샐러드를 땅으로, 블로콜리, 콜리플라워, 방울토마토들이 나무가 되어 직접 밭에 심는 체험이었습니다. 
                        반응이 굉장히 좋아서! 시작한지 5분만에 준비한 땅과 나무들이 동이 났다고 합니다!! 
                        환자들을 위해 즐거운 이벤트를 준비하고 있는 SRC재활병원 영양팀에게 박수를!</p>
                    <br>
                    <p>저희 SRC병원은 늘 환자의 즐거운 재활을 위해 최선을 다하겠습니다.</p>
                </div>
                <p class="article-attach">
                    <a href="#">20160413789456.jpg</a>
                </p>
            </article>
            <div class="btn-area">
                <p>
                    <a href="#" class="btn-edit">수정</a>
                    <a href="#" class="btn-delete">삭제</a>
                    <a href="#" class="btn btn-list">목록</a>
                </p>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>