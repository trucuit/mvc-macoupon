$(document).ready(function(){
	$(".get_coupon").click(function(event) {
		var id=$(this).attr('id_get');
		
		$.ajax({
			url: 'http://localhost/do-an/mvc-macoupon/application/module/default/views/muasam/a.php',
			type: 'GET',
			dataType: 'text',
			data: {id_get: id},
		})
		.done(function(data) {
			console.log("success");
			
			$(".copy_coupon").html(data)
			
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});

		$("#mymodal").show();
	});
	
	$(".close").click(function(event) {
		$("#mymodal").hide();
	});
});


