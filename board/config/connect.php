<?
include $dir.$configDir."/mysql_class.php";  // db class

$date = date("Ymd");
$db = new db_mysql;
$db -> HOST = "localhost";
$db -> USER = "srcnew";
$db -> PASS = "mksrcnew0421";
$db -> DNS = "srcnew";
$db -> log_file = $dir."/db_log/".$date."_log.txt";
$db -> con();

$conn = mysqli_connect("localhost", $db -> USER, $db -> PASS, $db -> DNS); 

$company_name = "";
$site_prefix = "mk_";

?>