<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.bxslider.min.js"></script>
<script src="/js/common.js"></script>
<script type="text/javascript">
<?
switch($_GET["board_code"]){
	case "board_write":
		echo '$("#content").removeClass("list review").addClass("news write");';
		break;
	case "board_view":
		echo '$("#content").removeClass("list review").addClass("news view");';
		break;
}

if($pwdck){
	echo '$("#content").addClass("confirm-pw");$(".confirm-section").show();';
}
?>
</script>