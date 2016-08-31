<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');
if($is_mobile) GetAlert("","/mobile");
?>
<link href="/css/jquery-ui.min.css" rel="stylesheet">
<link href="/css/main.css" rel="stylesheet">
<script type="text/javascript" src="/board/config/FormCheck.js"></script>
<style>
.list_con						{width:100%;padding:20px 0 20px 0; border-bottom:1px #d8d8d8 solid; overflow:hidden;}
.list_con p.photo				{float:left; width:230px; overflow:hidden;}
.list_con .bc					{float:left; padding:0px 10px; overflow:hidden;}
.list_con .bc h2				{font-size:16px; color:#3c3c3c; font-weight:bold; padding-top:7px;}
.list_con .bc p.txt				{font-size:13px; color:#757575; font-weight:bold; line-height:170%; padding-top:15px;}
.list_con .bc ul				{float:left; padding-top:35px; margin:0 auto; overflow:hidden;}
.list_con .bc ul li				{float:left; display:block;}

a.bt:link    										{color:#3c3c3c; text-decoration:none;}
a.bt:active  										{color:#3c3c3c; text-decoration:none;}
a.bt:visited										{color:#3c3c3c; text-decoration:none;}
a.bt:hover   										{color:#3c3c3c; text-decoration:none;}

a.tm:link    										{color:#757575; text-decoration:none; font-weight:normal;}
a.tm:active  										{color:#757575; text-decoration:none; font-weight:normal;}
a.tm:visited										{color:#757575; text-decoration:none; font-weight:normal;}
a.tm:hover   										{color:#3c3c3c; text-decoration:none; font-weight:normal;}
</style>
</head>
<body>
<?=get_popup()?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
	<main id="content">
		<div class="visual">
			<div class="slider">
				<?
				$j = 1;
				$vAr = get_banner("M");
				for($i=0;$i<sizeof($vAr);$i++){
				?>
				<div class="item" id="visual-<?=$j?>" style="background-image: url(<?=$vAr[$i]["files"][0]["path"]?>/<?=$vAr[$i]["files"][0]["file_source"]?>);">
					<? if($vAr[$i]["bcat"] && $vAr[$i]["bcon"]){ ?>
					<div class="details">
						<h3><?=$vAr[$i]["bcat"]?></h3>
						<hr>
						<p>
							<?=$vAr[$i]["bcon"]?>
						</p>
						<? if($vAr[$i]["blink"]){ ?>
						<a href="<?=$vAr[$i]["blink"]?>">자세히 보기</a>
						<? } ?>
					</div>
					<? } ?>
				</div>
				<?
					$j++;
				}
				?>
			</div>
			<div class="nav-container">
				<div class="container">
					<ul class="nav nav-pills nav-justified">
						<?
						for($i=0;$i<sizeof($vAr);$i++){
						?>
						<li role="presentation" class="<?=$i==0?"active":""?>"><a href="javascript:;"><?=$vAr[$i]["bcat"]?></a></li>
						<?
						}
						?>
					</ul>
				</div>
			</div>
		</div>
		<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/find_treatments.php'); ?>
		<div class="key-contents">
			<div class="container-fluid">
				<div class="row">
					<section class="col-xs-6 staff">
						<h3>SRC재활병원 <b>전<span>문</span>의료진</b>이<br><b>최고의 의료서비스</b>를 제공합니다.</h3>
						<p>
							국내 재활의료서비스를 선도하는<br>
							대한민국 대표 SRC재활병원의 의료진을 소개합니다.
						</p>
						<p class="docters-img">
							<img class="img-responsive" src="/images/main/img_doctors.png" alt="의료진 사진">
						</p>
					</section>
					<section class="col-xs-6 appointment">
						<h3>빠르고 간단한<br><b>온라인 진료 예약</b> 신청하세요.</h3>
						<p>보건복지부에서 인증한 의료기관<br>경기도 광주에서 통증치료 가장 잘 하는 병원 SRC입니다.</p>
						
						<form name="account_form" id="forms" method="post" action="./customer/_proc_account.php" onsubmit="return write_chk()">
						<input type="hidden" name="mode" value="<?=$site_prefix."board_account"?>">
						<input type="hidden" name="Category" value="간편예약">
						<input type="hidden" name="UserName" value="<?=$member["UserName"]?>">
						<input type="hidden" name="UserEmail" value="<?=$member["Email"]?>">
						<input type="hidden" name="URI" value="/">
						<input type="hidden" name="workType" value="I">
							<div class="row">
								<div class="col-xs-5">
									<label for="appoint-name">예약하시는 분 성함</label>
								</div>
								<div class="col-xs-7">
									<input type="text" class="form-control" id="appoint-name" name="UserName">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-5">
									<label for="appoint-depart">진료과목 및 의료진 선택</label>
								</div>
								<div class="col-xs-7">
									<select class="form-control" id="appoint-depart" name="bd2" onchange="charge_ck(this.value);">
										<option value="">진료과목</option>
										<?
										$sql = " select distinct(part) from ".$site_prefix."charge where 1=1 order by partorder desc, chargeorder desc, idx asc ";
										$result = sql_query($sql);
										for($i=0;$row = sql_fetch_array($result);$i++){
											echo "<option value='".$row["part"]."'>".$row["part"]."</option>";
										}
										?>
									</select>
									<span id="charge_list">
									<select class="form-control">
										<option value="">의료진</option>
									</select>
									</span>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-5">
									<label for="appoint-date">희망 진료시간 및 날짜선택</label>
								</div>
								<div class="col-xs-7">
									<input type="text" class="form-control" id="appoint-date" name="bd1" readonly onchange="time_ck(this.value);" placeholder="날짜선택">
									<span id="span_time_list">
									<select class="form-control" name="bd4" exp title='진료시간'>
										<option value="">진료시간</option>
										<option value="오전">오전</option>
										<option value="오후">오후</option>
									</select>
									</span>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-5">
									<label for="appoint-contact">예약하시는 분 연락처</label>
								</div>
								<div class="col-xs-7">
									<input type="text" class="form-control" id="appoint-contact" exp title="연락처" name="bd5">
								</div>
							</div>
							<button type="submit" class="btn btn-block">간편 온라인 진료 예약하기</button>
						</form>
					</section>
				</div>
			</div>
		</div>
		<div class="community">
			<div class="container">
				<div class="row">
					<div class="col-xs-8">
						<section class="news">
							<h4>SRC 소식</h4>
							<ol>
								<?
								$sql = "select * from ".$site_prefix."board_notice where 1=1 order by BoardIdx desc limit 0, 5";
								$result = sql_query($sql);
								for($i=0;$row = sql_fetch_array($result);$i++){
									switch($row["Category"]){
										case "공지":
											$lcat = '<span class="label label-primary">공지</span>';
											break;
										case "언론보도":
											$lcat = '<span class="label">언론보도</span>';
											break;
										case "소식":
											$lcat = '<span class="label">소식</span>';
											break;
									}
								?>
								<li><a href="/community/news_list.php??board_code=board_view&board_idx=<?=$row["BoardIdx"]?>&page=1"><?=$lcat?> <?=cut_string($row["Title"], 120)?><time><?=substr($row["RegDate"],0,10)?></time></a></li>
								<?
								}
								?>
							</ol>
							<a href="/community/news_list.php"><span class="glyphicon glyphicon-plus"></span><span class="sr-only"></span></a>
						</section>
					</div>
					<div class="col-xs-4">
						<div class="review">
							
							<ul>
								<?
								$sql = " select * from ".$site_prefix."board_mainAfter where bd1 = 'Y' and Category = '웹' order by border desc ";
								$result = sql_query($sql);
								for($i=0;$row = sql_fetch_array($result);$i++){
								?>
								<li>
									<?
									if($row["bd2"]){
										$link = $row["bd2"];
									} else {
										$link = "javascript:;";
									}
									?>
									<a href="<?=$link?>">
										<h3>치료후기</h3>
										<p><?=nl2br($row["Content"])?></p>
										<span><?=$row["Title"]?></span>
									</a>
								</li>
								<? } ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4">
						<section class="bus">
							<h4>셔틀버스 노선표</h4>
							<p>보다 편리한 SRC재활병원 이용을 위해<br>무료 셔틀버스를 운행하고 있습니다.</p>
							<a href="#">노선표 보러가기</a>
						</section>
					</div>
					<div class="col-xs-4">
						<?
						$blist = get_banner("M3");
						if($blist[0]["files"][0]["file_source"]){
						?>
						<div class="movie">
							<a href="<?=$blist[0]["blink"]?>" target="<?=$blist[0]["btarget"]?>">
								<img src="<?=$blist[0]["files"][0]["path"]?>/<?=$blist[0]["files"][0]["file_source"]?>" width="370" height="320" alt="">
							</a>
						</div>
						<? } else { ?>
						<div class="movie">
							<a href="#">
								<img src="/images/main/img_movie.jpg" alt="">
							</a>
						</div>
						<? } ?>
					</div>
					<div class="col-xs-4">
						<div class="social">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#social-naver" aria-controls="social-naver" role="tab" data-toggle="tab">NAVER BLOG</a></li>
								<li role="presentation"><a href="#social-facebook" aria-controls="social-facebook" role="tab" data-toggle="tab"><img src="/images/ico_facebook.gif" alt="FACEBOOK" width="40"></a></li>
								<li role="presentation"><a href="https://www.youtube.com/channel/UCNj73RbM-is0pqoqvHc-ysA" target="_blank"><img src="/images/ico_youtube.gif" alt="YOUTUBE" width="40"></a></li>
							 </ul>
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="social-naver" style="height:280px;overflow-y:scroll;">
									<?
									include_once $_SERVER['DOCUMENT_ROOT']."/board/config/XMLParse.php";
									$rss = "http://blog.rss.naver.com/srcdream.xml";
									$snoopy=new snoopy; 
									$snoopy->fetch($rss); //외환은행 
									$content = $snoopy->results;

									$parser = new XMLParser($content);
									$parser->Parse();
									$con = $parser->document;
									function set_html($str){
										/* 3.22 막음 (HTML 체크 줄바꿈시 출력 오류때문)
										$source[] = "/  /";
										$target[] = " &nbsp;";
										*/
									   
										$source[] = "<";
										$target[] = "/\&lt\;/";

										$source[] = ">";
										$target[] = "/\&gt\;/";

										$source[] = "\"";
										$target[] = "/\&quot\;/";

										$source[] = "'";
										$target[] = "/\&\#039\;/";

										$source[] = "&";
										$target[] = "/\&amp\;/";

										return preg_replace($target, $source, $str);
									}

									for($i=0;$i<15;$i++){
										$title = $con->tagChildren[0]->item[$i]->title[0]->tagData;
										$description = $con->tagChildren[0]->item[$i]->description[0]->tagData;
										$link = $con->tagChildren[0]->item[$i]->link[0]->tagData;
										$date = $con->tagChildren[0]->item[$i]->pubdate[0]->tagData;
										$author = $con->tagChildren[0]->item[$i]->author[0]->tagData;
										$category = $con->tagChildren[0]->item[$i]->category[0]->tagData;
									?>
									<div class="list_con">
										<div class="bc" style="margin-left:5px;">
											<h2><a href="<?=$link?>" target="_blank" class="bt"><?=$title?></a></h2>
											<p class="txt"><a href="<?=$link?>" target="_blank" class="tm"><?=strip_tags(set_html($description))?></a></p>
											<ul>
												<li class="f9513"><?=$category?></li>
												<li class="f9513 pl10 pr10">┃</li>
												<li class="f9513"><?=date("Y-m-d",strtotime($date))?></li>
											</ul>
										</div>
									</div>
									<?
									} 
									?>
								</div>
								<div role="tabpanel" class="tab-pane" id="social-facebook">
									<div id="fb-root"></div>
									<script>(function(d, s, id) {
									  var js, fjs = d.getElementsByTagName(s)[0];
									  if (d.getElementById(id)) return;
									  js = d.createElement(s); js.id = id;
									  js.src = "//connect.facebook.net/ko_KR/sdk.js#xfbml=1&version=v2.6";
									  fjs.parentNode.insertBefore(js, fjs);
									}(document, 'script', 'facebook-jssdk'));</script>
									<div class="fb-page" data-href="https://www.facebook.com/srcgivedreams/" data-tabs="timeline" data-width="370" data-height="280" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"></div>
								</div>
								<div role="tabpanel" class="tab-pane" id="social-youtube">

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section class="about">
			<div class="container">
				<h3>행복한 SRC재활병원은<br>1961년에 개원한 국내 최고의 전통을 자랑하는<br><b>재활전문 특수진료기관</b>입니다.</h3>
			</div>
		</section>
	</main>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_main.php'); ?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
	<script src="/js/jquery-ui.min.js"></script>
	<script src="/js/main.js"></script>
	<script type="text/javascript">
	function charge_ck(val){ //진료과 선택
		jQuery.ajax({
			url: "ajax_charge_selectbox.php",
			type: 'POST',
			data: "part="+val,

			error: function(xhr,textStatus,errorThrown){
				alert('An error occurred! \n'+(errorThrown ? errorThrown : xhr.status));
			},
			success: function(data){
				$("#charge_list").html(data);
				date_reset();
			},
			complete: function(){
			}
		});
	}

	function time_ck(val){
		if(val){
			jQuery.ajax({
				url: "ajax_time_selectbox.php",
				type: 'POST',
				data: "cymd="+$("#cymd").val()+"&idx="+$("#charge_idx").val()+"&part="+$("#appoint-depart").val(),

				error: function(xhr,textStatus,errorThrown){
					alert('An error occurred! \n'+(errorThrown ? errorThrown : xhr.status));
				},
				success: function(data){
					$("#span_time_list").html(data);
				},
				complete: function(){
				}
			});
		}
	}

	function write_chk(){
		var form = document.account_form;
		if(FormCheck(form) == true){
			return true;
		} else {
			return false;
		}
	}

	function date_reset(){
		$("#cymd").val('');
	}
	</script>
</body>
</html>