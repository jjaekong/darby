<?
include_once $_SERVER["DOCUMENT_ROOT"]."/board/config/use_db.php";
if($is_mobile) GetAlert("","/mobile");
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SRC 병원</title>
    <link href='http://fonts.googleapis.com/earlyaccess/notosanskr.css' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet'>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="/css/default.css" rel="stylesheet">