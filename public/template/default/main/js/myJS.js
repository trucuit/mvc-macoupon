$(document).ready(function(){
	
	// $(".get_coupon").click(function(event) {
	// 	var url=$(this).attr('title');
	// 	var id=$(this).attr('id_get');
	// 	console.log(url,id)

	// 	$.ajax({
	// 		url: url,
	// 		type: 'POST',
	// 		dataType: 'text',
	// 		 data: {id_get: id},
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
	});//tắt popup
	
	
	$(".chitiet").click(function(event) {
		
		var setId=$(this).attr("setId");
		var setClass = '.content_sale'+setId;
		var getText = $(setClass).html();
		var setClassXt='.xemthem'+setId;
		var compareText= $(setClassXt).text();
	
		$(setClass).toggleClass('show');
		if(compareText == '...Xem thêm'){
			$(setClassXt).empty();
			$(setClassXt).text('Thu gọn');
		}
		else if(compareText == 'Thu gọn'){
			$(setClassXt).empty();
			$(setClassXt).text('...Xem thêm');
		}
		

	});//nút xem thêm

	
	
});

function pupUp(url,id){
	// console.log(this);
	// console.log(id);
	$.ajax({
		url: url,
		type: 'POST',
		dataType: 'text',
		data:{id_get: id},
	})
	.done(function(data) {
		console.log("success");
		var pos_end=data.search("<br/>");
		var pos_start=data.search("https");
		var link=data.substring(pos_start,pos_end);
		var data_coupon=data.substring(pos_end,);
		$(".btn_golazada").attr("href",link);
		$(".copy_coupon").html(data_coupon);

	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});

	$("#mymodal").show();
	
}
