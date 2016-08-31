<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php');
if(!$hcat) $hcat = "경기도광주성숙기";
?>
<link href="/css/introduce.css" rel="stylesheet">
<style>
.history .tabArea a.on{width:100px;height:115px;margin:0 20px;padding:25px 0;font-family: 'Lato', sans-serif;color:#fff;font-size:20px;font-weight:400;line-height:20px;text-decoration:none;display:inline-block;background:url(../images/introduce/tab_sty01_on.png);}
</style>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <div class="page-path">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#">병원소개</a></li>
                <li class="active">연혁</li>
            </ol>
        </div>
    </div>
    <main id="content" class="introduce history"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
        <div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
            <h2>연혁</h2>
            <small>Hisotory</small>
        </div>
        
        <!-- 실제 작업 영역 -->
        <div class="tabArea">
			<a href="<?=$_SERVER["PHP_SELF"]?>?hcat=<?=urlencode("용문동설립기")?>" <?=$hcat=="용문동설립기"?"class='on'":""?>>1952<br />/<br />1957</a><a href="<?=$_SERVER["PHP_SELF"]?>?hcat=<?=urlencode("신대방동도약기")?>" <?=$hcat=="신대방동도약기"?"class='on'":""?>>1957<br />/<br />1972</a><a href="<?=$_SERVER["PHP_SELF"]?>?hcat=<?=urlencode("봉천동성장기")?>" <?=$hcat=="봉천동성장기"?"class='on'":""?>>1972<br />/<br />1993</a><a href="<?=$_SERVER["PHP_SELF"]?>?hcat=<?=urlencode("경기도광주성숙기")?>" <?=$hcat=="경기도광주성숙기"?"class='on'":""?>>1993<br />/<br />2011</a><a href="<?=$_SERVER["PHP_SELF"]?>?hcat=<?=urlencode("경기도광주신도약기")?>" <?=$hcat=="경기도광주신도약기"?"class='on'":""?>>2012<br />/<br /><?=date("Y",time())?></a>
        </div>
            
        <div class="container">
			<div class="historyTit">
				<?
				switch($hcat){
					case "용문동설립기":
						echo '<h1><b>용문동</b>설립기</h1><h2>1952 ~ 1957</h2><p><img src="../images/introduce/history_img01.jpg" alt=""/></p>';
						break;
					case "신대방동도약기":
						echo '<h1><b>신대방동</b>도약기</h1><h2>1957 ~ 1972</h2><p><img src="../images/introduce/history_img02.jpg" alt=""/></p>';
						break;
					case "봉천동성장기":
						echo '<h1><b>봉천동</b>성장기</h1><h2>1972 ~ 1993</h2><p><img src="../images/introduce/history_img03.jpg" alt=""/></p>';
						break;
					case "경기도광주성숙기":
						echo '<h1><b>경기도광주</b>성숙기</h1><h2>1993 ~ 2011</h2><p><img src="../images/introduce/history_img04.jpg" alt=""/></p>';
						break;
					case "경기도광주신도약기":
						echo '<h1><b>경기도광주</b>신도약기</h1><h2>2012 ~ '.date("Y",time()).'</h2><p><img src="../images/introduce/history_img05.jpg" alt=""/></p>';
						break;
				}
				?>
			</div>
			<div class="historyCon">
				<dl>
					<?
					$sql = " select * from ".$site_prefix."history where hcat = '".$hcat."' order by hyear asc, hmonth asc, hday asc ";
					$result = sql_query($sql);
					for($i=0;$row = sql_fetch_array($result);$i++){
						if($row["hday"]){
							$row["hdate"] = date("Y. m. d",strtotime($row["hyear"]."-".$row["hmonth"]."-".$row["hday"]));
						} else {
							$row["hdate"] = date("Y. m",strtotime($row["hyear"]."-".$row["hmonth"]."-1"));
						}

						$list[$i] = $row;

						if($i > 0 && $list[$i]["hdate"] == $list[$i-1]["hdate"]) $hdate = "&nbsp;";
						else $hdate = $list[$i]["hdate"];
					?>
					<dt><?=$hdate?></dt>
					<dd><?=$list[$i]["htext"]?></dd>
					<?
					}
					?>
				</dl>
			</div>
        </div>
        <!-- // 실제 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>