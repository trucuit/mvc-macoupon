$(document).ready(function(){
	
	// $(".get_coupon").click(function(event) {
	// 	var url=$(this).attr('id_get');
	// 	console.log(url)

	// 	$.ajax({
	// 		url: url,
	// 		type: 'GET',
	// 		dataType: 'text',
	// 		// data: {id_get: id},
	// 	})
	// 	.done(function(data) {
	// 		console.log("success");
	// 		console.log(data);

	// 		$(".copy_coupon").html(data)

	// 	})
	// 	.fail(function() {
	// 		console.log("error");
	// 	})
	// 	.always(function() {
	// 		console.log("complete");
	// 	});

	// 	$("#mymodal").show();
	// });
	$(".close").click(function(event) {
		$("#mymodal").hide();
	});
});

function pupUp(url){
	console.log(url);
	$.ajax({
		url: url,
		type: 'POST',
		dataType: 'text',
		})
	.done(function(data) {
		console.log("success");
		console.log(data);

		$(".copy_coupon").html(data)

	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});

	$("#mymodal").show();
}
