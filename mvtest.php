<?
include_once $_SERVER["DOCUMENT_ROOT"]."/board/config/use_db.php";

/*
기존 notice 게시판과 news 게시판 합병

notice2 테이블로 병합후 날짜정렬 하여 notice에 재 삽입
*/

$sql = " select * from ".$site_prefix."board_notice2 where 1=1 order by RegDate asc ";
$result = sql_query($sql);
for($i=0;$row = sql_fetch_array($result);$i++){
	$isql = " insert into ".$site_prefix."board_notice set 
											UserIdx = '".$row["UserIdx"]."',
											UserID = '".$row["UserID"]."',
											UserName = '".$row["UserName"]."',
											UserEmail = '".$row["UserEmail"]."',
											UserPw = '".$row["UserPw"]."',
											UserIP = '".$row["UserIP"]."',
											Notice = '".$row["Notice"]."',
											Title = '".$row["Title"]."',
											Category = '".$row["Category"]."',
											Content = '".$row["Content"]."',
											Ref = '".$row["Ref"]."',
											ReStep = '".$row["ReStep"]."',
											ReLevel = '".$row["ReLevel"]."',
											Link1 = '".$row["Link1"]."',
											Link2 = '".$row["Link2"]."',
											bd1 = '".$row["bd1"]."',
											bd2 = '".$row["bd2"]."',
											bd3 = '".$row["bd3"]."',
											bd4 = '".$row["bd4"]."',
											bd5 = '".$row["bd5"]."',
											bd6 = '".$row["bd6"]."',
											bd7 = '".$row["bd7"]."',
											bd8 = '".$row["bd8"]."',
											bd9 = '".$row["bd9"]."',
											bd10 = '".$row["bd10"]."',
											border = '".$row["border"]."',
											Secret = '".$row["Secret"]."',
											SecretFlag = '".$row["SecretFlag"]."',
											HtmlChk = '".$row["HtmlChk"]."',
											ReadNum = '".$row["ReadNum"]."',
											RegDate = '".$row["RegDate"]."',
											FileCnt = '".$row["FileCnt"]."',
											ViewInList = '".$row["ViewInList"]."' ";
//	$iresult = sql_query($isql);
}



?>