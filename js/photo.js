(function($) {
	var printListIng = false;

	$(document).on("click", "#btnMore", function(){
		print_list();
	});

	function print_list(){
		if(parseInt($("#from_record").val()) > parseInt($("#totalCount").val())){
			printListIng = true;
			$(".btn-area").html('');
		}

		if(!printListIng){
			printListIng = true;

			jQuery.ajax({
				url: "/community/ajax_photoList.php",
				type: "POST",
				data: $("form[name='list_form']").serialize(),

				error: function(xhr,textStatus,errorThrown){
					alert('An error occurred! shop.list.js 101Line \n'+(errorThrown ? errorThrown : xhr.status));
				},
				beforeSend: function() {
					var loader = '<p class="loading"><img src="/images/loading.gif" alt="로딩 중.."></p>';

					$(".photoMore").html(loader);
				},
				success: function(data){
					setTimeout(function(){
						$(".proList").append(data);

						$(".photoMore").html('<p><a href="javascript:;" class="btn btn-more" id="btnMore">더보기</a></p>');

						printListIng = false;
					}, 800);
				},
				complete: function(){
					var $rows = parseInt($("#from_record").val())+parseInt($("#load_rows").val());
					$("#from_record").val($rows);
				}
			});
		}
	}
})(jQuery);