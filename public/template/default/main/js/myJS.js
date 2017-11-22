jQuery(document).ready(function($) {
	// if(getUrlVar('controller') =='travel'){
		$('#loader').css({
			"display": "block",
			"visibility": "visible"
		});
		setTimeout(function(){
			$('#loader').css({
				"display": "none",
				"visibility": "hidden"
			});
			$('.product-item').css({
				"display": "block",
				"visibility": "visible"
			});
		}, 2000);
	// }

	controllerName = getUrlVar('controller');
	$("."+controllerName).addClass('active');

});

function getUrlVar(key){
	var result = new RegExp(key + "=([^&]*)", "i").exec(window.location.search);
	return result && unescape(result[1]) || "";
}

function selectAjax(url,domain){
	console.log(url);
	console.log(domain);


	$.ajax({
		url: url,
		cache: false,
		data: {domain : domain},
		dataType: 'text',
		success: function(data, status){
			console.log(data);
			$('.product-item').html(data);
		},
		beforeSend: function(){
			$('#loader').css({
				"display": "block",
				"visibility": "visible"
			});
			$('.product-item').css({
				"display": "none",
				"visibility": "hidden"
			});
		},
		complete: function(){
			$('#loader').css({
				"display": "none",
				"visibility": "hidden"
			});
			$('.product-item').css({
				"display": "block",
				"visibility": "visible"
			});
		}
	})

}